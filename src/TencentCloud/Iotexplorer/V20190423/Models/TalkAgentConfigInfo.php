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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体配置信息。
 *
 * @method integer getSessionTimeout() 获取会话超时（秒），指连接会话的时间，例如30秒是指会话在30秒后断开
 * @method void setSessionTimeout(integer $SessionTimeout) 设置会话超时（秒），指连接会话的时间，例如30秒是指会话在30秒后断开
 * @method boolean getInterruptionEnabled() 获取允许打断
 * @method void setInterruptionEnabled(boolean $InterruptionEnabled) 设置允许打断
 * @method integer getMaxContextTokens() 获取最大上下文
 * @method void setMaxContextTokens(integer $MaxContextTokens) 设置最大上下文
 * @method TalkIdleDetectionConfigInfo getIdleDetection() 获取空闲检测配置
 * @method void setIdleDetection(TalkIdleDetectionConfigInfo $IdleDetection) 设置空闲检测配置
 * @method boolean getEmotionEnabled() 获取是否启用情绪识别
 * @method void setEmotionEnabled(boolean $EmotionEnabled) 设置是否启用情绪识别
 * @method boolean getSemanticVADEnabled() 获取是否启用语义vad
 * @method void setSemanticVADEnabled(boolean $SemanticVADEnabled) 设置是否启用语义vad
 * @method integer getSemanticVADSensitivity() 获取语义vad灵敏度， 1-慢 2-适中 3-快
 * @method void setSemanticVADSensitivity(integer $SemanticVADSensitivity) 设置语义vad灵敏度， 1-慢 2-适中 3-快
 * @method integer getSilenceTime() 获取VAD 静默检测时间， 当开启语义vad此配置失效
 * @method void setSilenceTime(integer $SilenceTime) 设置VAD 静默检测时间， 当开启语义vad此配置失效
 * @method boolean getNoiseFilterEnabled() 获取是否启用噪声过滤
 * @method void setNoiseFilterEnabled(boolean $NoiseFilterEnabled) 设置是否启用噪声过滤
 * @method boolean getLongTermMemoryEnabled() 获取是否开启长记忆，默认开启
 * @method void setLongTermMemoryEnabled(boolean $LongTermMemoryEnabled) 设置是否开启长记忆，默认开启
 * @method string getSystemPrompt() 获取系统提示词，仅当未配置LLMConfig时使用
 * @method void setSystemPrompt(string $SystemPrompt) 设置系统提示词，仅当未配置LLMConfig时使用
 * @method string getGreetingMessage() 获取开机问候语，如果未配置默认不开启
 * @method void setGreetingMessage(string $GreetingMessage) 设置开机问候语，如果未配置默认不开启
 * @method integer getDefaultVoiceType() 获取系统默认音色，当配置复刻音色时，默认值为200000000
 * @method void setDefaultVoiceType(integer $DefaultVoiceType) 设置系统默认音色，当配置复刻音色时，默认值为200000000
 * @method string getFastVoiceType() 获取复刻音色
 * @method void setFastVoiceType(string $FastVoiceType) 设置复刻音色
 */
class TalkAgentConfigInfo extends AbstractModel
{
    /**
     * @var integer 会话超时（秒），指连接会话的时间，例如30秒是指会话在30秒后断开
     */
    public $SessionTimeout;

    /**
     * @var boolean 允许打断
     */
    public $InterruptionEnabled;

    /**
     * @var integer 最大上下文
     */
    public $MaxContextTokens;

    /**
     * @var TalkIdleDetectionConfigInfo 空闲检测配置
     */
    public $IdleDetection;

    /**
     * @var boolean 是否启用情绪识别
     */
    public $EmotionEnabled;

    /**
     * @var boolean 是否启用语义vad
     */
    public $SemanticVADEnabled;

    /**
     * @var integer 语义vad灵敏度， 1-慢 2-适中 3-快
     */
    public $SemanticVADSensitivity;

    /**
     * @var integer VAD 静默检测时间， 当开启语义vad此配置失效
     */
    public $SilenceTime;

    /**
     * @var boolean 是否启用噪声过滤
     */
    public $NoiseFilterEnabled;

    /**
     * @var boolean 是否开启长记忆，默认开启
     */
    public $LongTermMemoryEnabled;

    /**
     * @var string 系统提示词，仅当未配置LLMConfig时使用
     */
    public $SystemPrompt;

    /**
     * @var string 开机问候语，如果未配置默认不开启
     */
    public $GreetingMessage;

    /**
     * @var integer 系统默认音色，当配置复刻音色时，默认值为200000000
     */
    public $DefaultVoiceType;

    /**
     * @var string 复刻音色
     */
    public $FastVoiceType;

    /**
     * @param integer $SessionTimeout 会话超时（秒），指连接会话的时间，例如30秒是指会话在30秒后断开
     * @param boolean $InterruptionEnabled 允许打断
     * @param integer $MaxContextTokens 最大上下文
     * @param TalkIdleDetectionConfigInfo $IdleDetection 空闲检测配置
     * @param boolean $EmotionEnabled 是否启用情绪识别
     * @param boolean $SemanticVADEnabled 是否启用语义vad
     * @param integer $SemanticVADSensitivity 语义vad灵敏度， 1-慢 2-适中 3-快
     * @param integer $SilenceTime VAD 静默检测时间， 当开启语义vad此配置失效
     * @param boolean $NoiseFilterEnabled 是否启用噪声过滤
     * @param boolean $LongTermMemoryEnabled 是否开启长记忆，默认开启
     * @param string $SystemPrompt 系统提示词，仅当未配置LLMConfig时使用
     * @param string $GreetingMessage 开机问候语，如果未配置默认不开启
     * @param integer $DefaultVoiceType 系统默认音色，当配置复刻音色时，默认值为200000000
     * @param string $FastVoiceType 复刻音色
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
        if (array_key_exists("SessionTimeout",$param) and $param["SessionTimeout"] !== null) {
            $this->SessionTimeout = $param["SessionTimeout"];
        }

        if (array_key_exists("InterruptionEnabled",$param) and $param["InterruptionEnabled"] !== null) {
            $this->InterruptionEnabled = $param["InterruptionEnabled"];
        }

        if (array_key_exists("MaxContextTokens",$param) and $param["MaxContextTokens"] !== null) {
            $this->MaxContextTokens = $param["MaxContextTokens"];
        }

        if (array_key_exists("IdleDetection",$param) and $param["IdleDetection"] !== null) {
            $this->IdleDetection = new TalkIdleDetectionConfigInfo();
            $this->IdleDetection->deserialize($param["IdleDetection"]);
        }

        if (array_key_exists("EmotionEnabled",$param) and $param["EmotionEnabled"] !== null) {
            $this->EmotionEnabled = $param["EmotionEnabled"];
        }

        if (array_key_exists("SemanticVADEnabled",$param) and $param["SemanticVADEnabled"] !== null) {
            $this->SemanticVADEnabled = $param["SemanticVADEnabled"];
        }

        if (array_key_exists("SemanticVADSensitivity",$param) and $param["SemanticVADSensitivity"] !== null) {
            $this->SemanticVADSensitivity = $param["SemanticVADSensitivity"];
        }

        if (array_key_exists("SilenceTime",$param) and $param["SilenceTime"] !== null) {
            $this->SilenceTime = $param["SilenceTime"];
        }

        if (array_key_exists("NoiseFilterEnabled",$param) and $param["NoiseFilterEnabled"] !== null) {
            $this->NoiseFilterEnabled = $param["NoiseFilterEnabled"];
        }

        if (array_key_exists("LongTermMemoryEnabled",$param) and $param["LongTermMemoryEnabled"] !== null) {
            $this->LongTermMemoryEnabled = $param["LongTermMemoryEnabled"];
        }

        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("GreetingMessage",$param) and $param["GreetingMessage"] !== null) {
            $this->GreetingMessage = $param["GreetingMessage"];
        }

        if (array_key_exists("DefaultVoiceType",$param) and $param["DefaultVoiceType"] !== null) {
            $this->DefaultVoiceType = $param["DefaultVoiceType"];
        }

        if (array_key_exists("FastVoiceType",$param) and $param["FastVoiceType"] !== null) {
            $this->FastVoiceType = $param["FastVoiceType"];
        }
    }
}
