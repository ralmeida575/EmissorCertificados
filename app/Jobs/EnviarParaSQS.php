<?php

namespace App\Jobs;

use Aws\Sqs\SqsClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Dispatchable;

class EnviarParaSQS implements ShouldQueue
{
    use Dispatchable, Queueable, InteractsWithQueue, SerializesModels;

    public $queueUrl;
    public $messageBody;

    /**
     * Create a new job instance.
     *
     * @param  string  $queueUrl
     * @param  array  $messageBody
     * @return void
     */
    public function __construct($queueUrl, $messageBody)
    {
        $this->queueUrl = $queueUrl;
        $this->messageBody = $messageBody;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            // Cria o cliente do SQS com o endpoint do LocalStack
            $sqsClient = new SqsClient([
                'version' => 'latest',
                'region' => env('AWS_DEFAULT_REGION'),
                'endpoint' => env('AWS_SQS_ENDPOINT'),
                'credentials' => [
                    'key'    => env('AWS_ACCESS_KEY_ID'),
                    'secret' => env('AWS_SECRET_ACCESS_KEY'),
                ]
            ]);

            // Envia a mensagem para o SQS
            $result = $sqsClient->sendMessage([
                'QueueUrl' => $this->queueUrl,
                'MessageBody' => json_encode($this->messageBody),
            ]);

            // Log de sucesso (opcional)
            Log::info('Mensagem enviada para o SQS', ['messageId' => $result->get('MessageId')]);
        } catch (\Exception $e) {
            // Log de erro (opcional)
            Log::error('Erro ao enviar mensagem para o SQS', ['error' => $e->getMessage()]);
        }
    }
}
