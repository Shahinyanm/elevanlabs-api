<?php

namespace Hyperspace\ElevenlabsApi\Client\Elevenlabs\v1\Convert;

use Exception;
use Illuminate\Http\Client\Response;
use Hyperspace\ElevenlabsApi\Client\Elevenlabs\v1\ElevenlabsClient;
use Hyperspace\ElevenlabsApi\Dto\Elevenlabs\Converter\ElevenlabsConverterSpeechToSpeechRequestDto;
use Hyperspace\ElevenlabsApi\Dto\Elevenlabs\Converter\ElevenlabsConverterTextToSpeechRequestDto;
use Hyperspace\ElevenlabsApi\Dto\Elevenlabs\Converter\ElevenlabsConverterTextToSpeechStreamRequestDto;
use Hyperspace\ElevenlabsApi\Enums\Client\Elevenlabs\ElevenlabsConfigEnum;

class ElevenlabsConvertClient extends ElevenlabsClient
{
    /**
     * @param string $voiceId
     * @param ElevenlabsConverterTextToSpeechRequestDto $dto
     * @param string $filePath
     * @return Response
     * @throws Exception
     */
    public function textToSpeechConvertRequest(
        string                                    $voiceId,
        ElevenlabsConverterTextToSpeechRequestDto $dto,
        string                                    $filePath
    ): Response
    {
        return $this->convertingRequestWithVoiceId(
            ElevenlabsConfigEnum::TEXT_TO_SPEECH,
            $voiceId,
            $dto->toJson(),
            $filePath,
        );
    }

    /**
     * @param string $voiceId
     * @param ElevenlabsConverterTextToSpeechStreamRequestDto $dto
     * @param string $filePath
     * @return Response
     * @throws Exception
     */
    public function streamTextToSpeechConvertRequest(
        string                                          $voiceId,
        ElevenlabsConverterTextToSpeechStreamRequestDto $dto,
        string                                          $filePath
    ): Response
    {
        return $this->convertingRequestWithVoiceId(
            ElevenlabsConfigEnum::TEXT_TO_SPEECH_STREAM,
            $voiceId,
            $dto->toJson(),
            $filePath,
        );
    }

    /**
     * @param string $voiceId
     * @param ElevenlabsConverterSpeechToSpeechRequestDto $dto
     * @param string $filePath
     * @return Response
     * @throws Exception
     */
    public function speechToSpeechConvertRequest(
        string                                      $voiceId,
        ElevenlabsConverterSpeechToSpeechRequestDto $dto,
        string                                      $filePath
    ): Response
    {
        return $this->convertingRequestWithVoiceId(
            ElevenlabsConfigEnum::SPEECH_TO_SPEECH,
            $voiceId,
            $dto->toJson(),
            $filePath,
        );
    }

    /**
     * @param string $voiceId
     * @param ElevenlabsConverterSpeechToSpeechRequestDto $dto
     * @param string $filePath
     * @return Response
     * @throws Exception
     */
    public function streamSpeechToSpeechConvertRequest(
        string                                      $voiceId,
        ElevenlabsConverterSpeechToSpeechRequestDto $dto,
        string                                      $filePath
    ): Response
    {
        return $this->convertingRequestWithVoiceId(
            ElevenlabsConfigEnum::SPEECH_TO_SPEECH_STREAM,
            $voiceId,
            $dto->toJson(),
            $filePath,
        );
    }
}
