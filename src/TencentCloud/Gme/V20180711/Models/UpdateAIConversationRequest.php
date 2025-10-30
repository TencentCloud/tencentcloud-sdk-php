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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAIConversation请求参数结构体
 *
 * @method string getTaskId() 获取唯一标识一个任务
 * @method void setTaskId(string $TaskId) 设置唯一标识一个任务
 * @method string getWelcomeMessage() 获取不填写则不进行更新，机器人的欢迎语
 * @method void setWelcomeMessage(string $WelcomeMessage) 设置不填写则不进行更新，机器人的欢迎语
 * @method integer getInterruptMode() 获取不填写则不进行更新。智能打断模式，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
 * @method void setInterruptMode(integer $InterruptMode) 设置不填写则不进行更新。智能打断模式，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
 * @method integer getInterruptSpeechDuration() 获取不填写则不进行更新。InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) 设置不填写则不进行更新。InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断
 * @method string getLLMConfig() 获取不填写则不进行更新，LLM配置，详情见StartAIConversation接口
 * @method void setLLMConfig(string $LLMConfig) 设置不填写则不进行更新，LLM配置，详情见StartAIConversation接口
 * @method string getTTSConfig() 获取不填写则不进行更新，TTS配置，详情见StartAIConversation接口
 * @method void setTTSConfig(string $TTSConfig) 设置不填写则不进行更新，TTS配置，详情见StartAIConversation接口
 */
class UpdateAIConversationRequest extends AbstractModel
{
    /**
     * @var string 唯一标识一个任务
     */
    public $TaskId;

    /**
     * @var string 不填写则不进行更新，机器人的欢迎语
     */
    public $WelcomeMessage;

    /**
     * @var integer 不填写则不进行更新。智能打断模式，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
     */
    public $InterruptMode;

    /**
     * @var integer 不填写则不进行更新。InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断
     */
    public $InterruptSpeechDuration;

    /**
     * @var string 不填写则不进行更新，LLM配置，详情见StartAIConversation接口
     */
    public $LLMConfig;

    /**
     * @var string 不填写则不进行更新，TTS配置，详情见StartAIConversation接口
     */
    public $TTSConfig;

    /**
     * @param string $TaskId 唯一标识一个任务
     * @param string $WelcomeMessage 不填写则不进行更新，机器人的欢迎语
     * @param integer $InterruptMode 不填写则不进行更新。智能打断模式，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
     * @param integer $InterruptSpeechDuration 不填写则不进行更新。InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断
     * @param string $LLMConfig 不填写则不进行更新，LLM配置，详情见StartAIConversation接口
     * @param string $TTSConfig 不填写则不进行更新，TTS配置，详情见StartAIConversation接口
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }

        if (array_key_exists("InterruptMode",$param) and $param["InterruptMode"] !== null) {
            $this->InterruptMode = $param["InterruptMode"];
        }

        if (array_key_exists("InterruptSpeechDuration",$param) and $param["InterruptSpeechDuration"] !== null) {
            $this->InterruptSpeechDuration = $param["InterruptSpeechDuration"];
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = $param["LLMConfig"];
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = $param["TTSConfig"];
        }
    }
}
