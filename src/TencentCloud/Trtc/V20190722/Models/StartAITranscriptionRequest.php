<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartAITranscription请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
 * @method string getRoomId() 获取TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启转录任务的房间号。
 * @method void setRoomId(string $RoomId) 设置TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启转录任务的房间号。
 * @method TranscriptionParams getTranscriptionParams() 获取转录机器人的参数。
 * @method void setTranscriptionParams(TranscriptionParams $TranscriptionParams) 设置转录机器人的参数。
 * @method string getSessionId() 获取调用方传入的唯一Id，服务端用来任务去重，重复的任务会发起失败。服务端固定使用SdkAppId+RoomId+RoomIdType+RobotUserId来去重，如果传入了SessionId，也会使用SessionId去重。
注意：
TranscriptionMode为0时，需要保证一个房间内只发起一个任务，如果发起多个任务，则机器人之间会相互订阅，除非主动停止任务，否则只有10小时后任务才会超时退出，这种情况下建议填写SessionId，保证后续重复发起的任务失败。
 * @method void setSessionId(string $SessionId) 设置调用方传入的唯一Id，服务端用来任务去重，重复的任务会发起失败。服务端固定使用SdkAppId+RoomId+RoomIdType+RobotUserId来去重，如果传入了SessionId，也会使用SessionId去重。
注意：
TranscriptionMode为0时，需要保证一个房间内只发起一个任务，如果发起多个任务，则机器人之间会相互订阅，除非主动停止任务，否则只有10小时后任务才会超时退出，这种情况下建议填写SessionId，保证后续重复发起的任务失败。
 * @method integer getRoomIdType() 获取TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
 * @method void setRoomIdType(integer $RoomIdType) 设置TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
 * @method RecognizeConfig getRecognizeConfig() 获取语音识别配置。
 * @method void setRecognizeConfig(RecognizeConfig $RecognizeConfig) 设置语音识别配置。
 * @method TranslationConfig getTranslationConfig() 获取翻译相关配置
 * @method void setTranslationConfig(TranslationConfig $TranslationConfig) 设置翻译相关配置
 */
class StartAITranscriptionRequest extends AbstractModel
{
    /**
     * @var integer TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
     */
    public $SdkAppId;

    /**
     * @var string TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启转录任务的房间号。
     */
    public $RoomId;

    /**
     * @var TranscriptionParams 转录机器人的参数。
     */
    public $TranscriptionParams;

    /**
     * @var string 调用方传入的唯一Id，服务端用来任务去重，重复的任务会发起失败。服务端固定使用SdkAppId+RoomId+RoomIdType+RobotUserId来去重，如果传入了SessionId，也会使用SessionId去重。
注意：
TranscriptionMode为0时，需要保证一个房间内只发起一个任务，如果发起多个任务，则机器人之间会相互订阅，除非主动停止任务，否则只有10小时后任务才会超时退出，这种情况下建议填写SessionId，保证后续重复发起的任务失败。
     */
    public $SessionId;

    /**
     * @var integer TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
     */
    public $RoomIdType;

    /**
     * @var RecognizeConfig 语音识别配置。
     */
    public $RecognizeConfig;

    /**
     * @var TranslationConfig 翻译相关配置
     */
    public $TranslationConfig;

    /**
     * @param integer $SdkAppId TRTC的[SdkAppId](https://cloud.tencent.com/document/product/647/46351#sdkappid)，和开启转录任务的房间使用的SdkAppId相同。
     * @param string $RoomId TRTC的[RoomId](https://cloud.tencent.com/document/product/647/46351#roomid)，表示开启转录任务的房间号。
     * @param TranscriptionParams $TranscriptionParams 转录机器人的参数。
     * @param string $SessionId 调用方传入的唯一Id，服务端用来任务去重，重复的任务会发起失败。服务端固定使用SdkAppId+RoomId+RoomIdType+RobotUserId来去重，如果传入了SessionId，也会使用SessionId去重。
注意：
TranscriptionMode为0时，需要保证一个房间内只发起一个任务，如果发起多个任务，则机器人之间会相互订阅，除非主动停止任务，否则只有10小时后任务才会超时退出，这种情况下建议填写SessionId，保证后续重复发起的任务失败。
     * @param integer $RoomIdType TRTC房间号的类型，0代表数字房间号，1代表字符串房间号。不填默认是数字房间号。
     * @param RecognizeConfig $RecognizeConfig 语音识别配置。
     * @param TranslationConfig $TranslationConfig 翻译相关配置
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("TranscriptionParams",$param) and $param["TranscriptionParams"] !== null) {
            $this->TranscriptionParams = new TranscriptionParams();
            $this->TranscriptionParams->deserialize($param["TranscriptionParams"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("RecognizeConfig",$param) and $param["RecognizeConfig"] !== null) {
            $this->RecognizeConfig = new RecognizeConfig();
            $this->RecognizeConfig->deserialize($param["RecognizeConfig"]);
        }

        if (array_key_exists("TranslationConfig",$param) and $param["TranslationConfig"] !== null) {
            $this->TranslationConfig = new TranslationConfig();
            $this->TranslationConfig->deserialize($param["TranslationConfig"]);
        }
    }
}
