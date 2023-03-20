<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Word-specific information for recognized words.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.WordInfo</code>
 */
class WordInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if
     * [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     * is `true` and only in the top hypothesis. This is an experimental feature
     * and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1;</code>
     */
    private $start_offset = null;
    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if
     * [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     * is `true` and only in the top hypothesis. This is an experimental feature
     * and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2;</code>
     */
    private $end_offset = null;
    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     */
    private $word = '';
    /**
     * The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative of a non-streaming
     * result or, of a streaming result where
     * [is_final][google.cloud.speech.v2.StreamingRecognitionResult.is_final] is
     * set to `true`. This field is not guaranteed to be accurate and users should
     * not rely on it to be always provided. The default of 0.0 is a sentinel
     * value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     */
    private $confidence = 0.0;
    /**
     * A distinct label is assigned for every speaker within the audio. This field
     * specifies which one of those speakers was detected to have spoken this
     * word. `speaker_label` is set if
     * [SpeakerDiarizationConfig][google.cloud.speech.v2.SpeakerDiarizationConfig]
     * is given and only in the top alternative.
     *
     * Generated from protobuf field <code>string speaker_label = 6;</code>
     */
    private $speaker_label = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_offset
     *           Time offset relative to the beginning of the audio,
     *           and corresponding to the start of the spoken word.
     *           This field is only set if
     *           [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     *           is `true` and only in the top hypothesis. This is an experimental feature
     *           and the accuracy of the time offset can vary.
     *     @type \Google\Protobuf\Duration $end_offset
     *           Time offset relative to the beginning of the audio,
     *           and corresponding to the end of the spoken word.
     *           This field is only set if
     *           [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     *           is `true` and only in the top hypothesis. This is an experimental feature
     *           and the accuracy of the time offset can vary.
     *     @type string $word
     *           The word corresponding to this set of information.
     *     @type float $confidence
     *           The confidence estimate between 0.0 and 1.0. A higher number
     *           indicates an estimated greater likelihood that the recognized words are
     *           correct. This field is set only for the top alternative of a non-streaming
     *           result or, of a streaming result where
     *           [is_final][google.cloud.speech.v2.StreamingRecognitionResult.is_final] is
     *           set to `true`. This field is not guaranteed to be accurate and users should
     *           not rely on it to be always provided. The default of 0.0 is a sentinel
     *           value indicating `confidence` was not set.
     *     @type string $speaker_label
     *           A distinct label is assigned for every speaker within the audio. This field
     *           specifies which one of those speakers was detected to have spoken this
     *           word. `speaker_label` is set if
     *           [SpeakerDiarizationConfig][google.cloud.speech.v2.SpeakerDiarizationConfig]
     *           is given and only in the top alternative.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if
     * [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     * is `true` and only in the top hypothesis. This is an experimental feature
     * and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartOffset()
    {
        return $this->start_offset;
    }

    public function hasStartOffset()
    {
        return isset($this->start_offset);
    }

    public function clearStartOffset()
    {
        unset($this->start_offset);
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if
     * [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     * is `true` and only in the top hypothesis. This is an experimental feature
     * and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_offset = $var;

        return $this;
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if
     * [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     * is `true` and only in the top hypothesis. This is an experimental feature
     * and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEndOffset()
    {
        return $this->end_offset;
    }

    public function hasEndOffset()
    {
        return isset($this->end_offset);
    }

    public function clearEndOffset()
    {
        unset($this->end_offset);
    }

    /**
     * Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if
     * [enable_word_time_offsets][google.cloud.speech.v2.RecognitionFeatures.enable_word_time_offsets]
     * is `true` and only in the top hypothesis. This is an experimental feature
     * and the accuracy of the time offset can vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_offset = $var;

        return $this;
    }

    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWord($var)
    {
        GPBUtil::checkString($var, True);
        $this->word = $var;

        return $this;
    }

    /**
     * The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative of a non-streaming
     * result or, of a streaming result where
     * [is_final][google.cloud.speech.v2.StreamingRecognitionResult.is_final] is
     * set to `true`. This field is not guaranteed to be accurate and users should
     * not rely on it to be always provided. The default of 0.0 is a sentinel
     * value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is set only for the top alternative of a non-streaming
     * result or, of a streaming result where
     * [is_final][google.cloud.speech.v2.StreamingRecognitionResult.is_final] is
     * set to `true`. This field is not guaranteed to be accurate and users should
     * not rely on it to be always provided. The default of 0.0 is a sentinel
     * value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * A distinct label is assigned for every speaker within the audio. This field
     * specifies which one of those speakers was detected to have spoken this
     * word. `speaker_label` is set if
     * [SpeakerDiarizationConfig][google.cloud.speech.v2.SpeakerDiarizationConfig]
     * is given and only in the top alternative.
     *
     * Generated from protobuf field <code>string speaker_label = 6;</code>
     * @return string
     */
    public function getSpeakerLabel()
    {
        return $this->speaker_label;
    }

    /**
     * A distinct label is assigned for every speaker within the audio. This field
     * specifies which one of those speakers was detected to have spoken this
     * word. `speaker_label` is set if
     * [SpeakerDiarizationConfig][google.cloud.speech.v2.SpeakerDiarizationConfig]
     * is given and only in the top alternative.
     *
     * Generated from protobuf field <code>string speaker_label = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSpeakerLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->speaker_label = $var;

        return $this;
    }

}

