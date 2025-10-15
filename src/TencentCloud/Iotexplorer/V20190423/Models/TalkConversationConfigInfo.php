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
 * TTS配置信息。
 *
 * @method integer getSessionTimeout() 获取会话超时（秒）
 * @method void setSessionTimeout(integer $SessionTimeout) 设置会话超时（秒）
 * @method boolean getInterruptionEnabled() 获取允许打断
 * @method void setInterruptionEnabled(boolean $InterruptionEnabled) 设置允许打断
 * @method integer getMaxContextTokens() 获取最大上下文
 * @method void setMaxContextTokens(integer $MaxContextTokens) 设置最大上下文
 * @method TalkIdleDetectionConfigInfo getIdleDetection() 获取空闲检测配置
 * @method void setIdleDetection(TalkIdleDetectionConfigInfo $IdleDetection) 设置空闲检测配置
 * @method boolean getEmotionEnabled() 获取是否启用情绪识别
 * @method void setEmotionEnabled(boolean $EmotionEnabled) 设置是否启用情绪识别
 */
class TalkConversationConfigInfo extends AbstractModel
{
    /**
     * @var integer 会话超时（秒）
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
     * @param integer $SessionTimeout 会话超时（秒）
     * @param boolean $InterruptionEnabled 允许打断
     * @param integer $MaxContextTokens 最大上下文
     * @param TalkIdleDetectionConfigInfo $IdleDetection 空闲检测配置
     * @param boolean $EmotionEnabled 是否启用情绪识别
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
    }
}
