<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务开关状态
 *
 * @method StatusInfo getRealTimeSpeech() 获取实时语音服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealTimeSpeech(StatusInfo $RealTimeSpeech) 设置实时语音服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusInfo getVoiceMessage() 获取语音消息服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceMessage(StatusInfo $VoiceMessage) 设置语音消息服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusInfo getPorn() 获取语音内容安全服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPorn(StatusInfo $Porn) 设置语音内容安全服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusInfo getLive() 获取语音录制服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLive(StatusInfo $Live) 设置语音录制服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusInfo getRealTimeAsr() 获取语音转文本服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealTimeAsr(StatusInfo $RealTimeAsr) 设置语音转文本服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceStatus extends AbstractModel
{
    /**
     * @var StatusInfo 实时语音服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealTimeSpeech;

    /**
     * @var StatusInfo 语音消息服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceMessage;

    /**
     * @var StatusInfo 语音内容安全服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Porn;

    /**
     * @var StatusInfo 语音录制服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Live;

    /**
     * @var StatusInfo 语音转文本服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealTimeAsr;

    /**
     * @param StatusInfo $RealTimeSpeech 实时语音服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusInfo $VoiceMessage 语音消息服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusInfo $Porn 语音内容安全服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusInfo $Live 语音录制服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusInfo $RealTimeAsr 语音转文本服务开关状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RealTimeSpeech",$param) and $param["RealTimeSpeech"] !== null) {
            $this->RealTimeSpeech = new StatusInfo();
            $this->RealTimeSpeech->deserialize($param["RealTimeSpeech"]);
        }

        if (array_key_exists("VoiceMessage",$param) and $param["VoiceMessage"] !== null) {
            $this->VoiceMessage = new StatusInfo();
            $this->VoiceMessage->deserialize($param["VoiceMessage"]);
        }

        if (array_key_exists("Porn",$param) and $param["Porn"] !== null) {
            $this->Porn = new StatusInfo();
            $this->Porn->deserialize($param["Porn"]);
        }

        if (array_key_exists("Live",$param) and $param["Live"] !== null) {
            $this->Live = new StatusInfo();
            $this->Live->deserialize($param["Live"]);
        }

        if (array_key_exists("RealTimeAsr",$param) and $param["RealTimeAsr"] !== null) {
            $this->RealTimeAsr = new StatusInfo();
            $this->RealTimeAsr->deserialize($param["RealTimeAsr"]);
        }
    }
}
