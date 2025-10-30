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
 * 机器人参数
 *
 * @method string getUserId() 获取机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众UserId重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
 * @method void setUserId(string $UserId) 设置机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众UserId重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
 * @method string getUserSig() 获取机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码。
 * @method void setUserSig(string $UserSig) 设置机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码。
 * @method string getTargetUserId() 获取机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
 * @method void setTargetUserId(string $TargetUserId) 设置机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
 * @method integer getMaxIdleTime() 获取房间内超过MaxIdleTime 没有推流，后台自动关闭任务，默认值是60s。
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置房间内超过MaxIdleTime 没有推流，后台自动关闭任务，默认值是60s。
 * @method string getWelcomeMessage() 获取机器人的欢迎语
 * @method void setWelcomeMessage(string $WelcomeMessage) 设置机器人的欢迎语
 * @method integer getInterruptMode() 获取智能打断模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
 * @method void setInterruptMode(integer $InterruptMode) 设置智能打断模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
 * @method integer getInterruptSpeechDuration() 获取InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
 * @method void setInterruptSpeechDuration(integer $InterruptSpeechDuration) 设置InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
 * @method integer getTurnDetectionMode() 获取控制新一轮对话的触发方式，默认为0。
- 0表示当服务端语音识别检测出的完整一句话后，自动触发一轮新的对话。
- 1表示客户端在收到字幕消息后，自行决定是否手动发送聊天信令触发一轮新的对话。
 * @method void setTurnDetectionMode(integer $TurnDetectionMode) 设置控制新一轮对话的触发方式，默认为0。
- 0表示当服务端语音识别检测出的完整一句话后，自动触发一轮新的对话。
- 1表示客户端在收到字幕消息后，自行决定是否手动发送聊天信令触发一轮新的对话。
 * @method boolean getFilterOneWord() 获取是否过滤掉用户只说了一个字的句子，true表示过滤，false表示不过滤，默认值为true
 * @method void setFilterOneWord(boolean $FilterOneWord) 设置是否过滤掉用户只说了一个字的句子，true表示过滤，false表示不过滤，默认值为true
 * @method integer getWelcomeMessagePriority() 获取欢迎消息优先级，0默认，1高优，高优不能被打断。
 * @method void setWelcomeMessagePriority(integer $WelcomeMessagePriority) 设置欢迎消息优先级，0默认，1高优，高优不能被打断。
 * @method integer getFilterBracketsContent() 获取用于过滤LLM返回内容，不播放括号中的内容。
1：中文括号（）
2：英文括号()
3：中文方括号【】
4：英文方括号[]
5：英文花括号{}
默认值为空，表示不进行过滤。
 * @method void setFilterBracketsContent(integer $FilterBracketsContent) 设置用于过滤LLM返回内容，不播放括号中的内容。
1：中文括号（）
2：英文括号()
3：中文方括号【】
4：英文方括号[]
5：英文花括号{}
默认值为空，表示不进行过滤。
 * @method AmbientSound getAmbientSound() 获取环境音设置	
 * @method void setAmbientSound(AmbientSound $AmbientSound) 设置环境音设置	
 * @method VoicePrint getVoicePrint() 获取声纹配置	
 * @method void setVoicePrint(VoicePrint $VoicePrint) 设置声纹配置	
 * @method string getInitLLMMessage() 获取与WelcomeMessage参数互斥，当该参数有值时，WelcomeMessage将失效。\n在对话开始后把该消息送到大模型来获取欢迎语。	
 * @method void setInitLLMMessage(string $InitLLMMessage) 设置与WelcomeMessage参数互斥，当该参数有值时，WelcomeMessage将失效。\n在对话开始后把该消息送到大模型来获取欢迎语。	
 * @method TurnDetection getTurnDetection() 获取语义断句检测	
 * @method void setTurnDetection(TurnDetection $TurnDetection) 设置语义断句检测	
 * @method integer getSubtitleMode() 获取机器人字幕显示模式。 - 0表示尽快显示，不会和音频播放进行同步。此时字幕全量下发，后面的字幕会包含前面的字幕。 - 1表示句子级别的实时显示，会和音频播放进行同步，只有当前句子对应的音频播放完后，下一条字幕才会下发。此时字幕增量下发，端上需要把前后的字幕进行拼接才是完整字幕。	
 * @method void setSubtitleMode(integer $SubtitleMode) 设置机器人字幕显示模式。 - 0表示尽快显示，不会和音频播放进行同步。此时字幕全量下发，后面的字幕会包含前面的字幕。 - 1表示句子级别的实时显示，会和音频播放进行同步，只有当前句子对应的音频播放完后，下一条字幕才会下发。此时字幕增量下发，端上需要把前后的字幕进行拼接才是完整字幕。	
 */
class AgentConfig extends AbstractModel
{
    /**
     * @var string 机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众UserId重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
     */
    public $UserId;

    /**
     * @var string 机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码。
     */
    public $UserSig;

    /**
     * @var string 机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
     */
    public $TargetUserId;

    /**
     * @var integer 房间内超过MaxIdleTime 没有推流，后台自动关闭任务，默认值是60s。
     */
    public $MaxIdleTime;

    /**
     * @var string 机器人的欢迎语
     */
    public $WelcomeMessage;

    /**
     * @var integer 智能打断模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
     */
    public $InterruptMode;

    /**
     * @var integer InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
     */
    public $InterruptSpeechDuration;

    /**
     * @var integer 控制新一轮对话的触发方式，默认为0。
- 0表示当服务端语音识别检测出的完整一句话后，自动触发一轮新的对话。
- 1表示客户端在收到字幕消息后，自行决定是否手动发送聊天信令触发一轮新的对话。
     */
    public $TurnDetectionMode;

    /**
     * @var boolean 是否过滤掉用户只说了一个字的句子，true表示过滤，false表示不过滤，默认值为true
     */
    public $FilterOneWord;

    /**
     * @var integer 欢迎消息优先级，0默认，1高优，高优不能被打断。
     */
    public $WelcomeMessagePriority;

    /**
     * @var integer 用于过滤LLM返回内容，不播放括号中的内容。
1：中文括号（）
2：英文括号()
3：中文方括号【】
4：英文方括号[]
5：英文花括号{}
默认值为空，表示不进行过滤。
     */
    public $FilterBracketsContent;

    /**
     * @var AmbientSound 环境音设置	
     */
    public $AmbientSound;

    /**
     * @var VoicePrint 声纹配置	
     */
    public $VoicePrint;

    /**
     * @var string 与WelcomeMessage参数互斥，当该参数有值时，WelcomeMessage将失效。\n在对话开始后把该消息送到大模型来获取欢迎语。	
     */
    public $InitLLMMessage;

    /**
     * @var TurnDetection 语义断句检测	
     */
    public $TurnDetection;

    /**
     * @var integer 机器人字幕显示模式。 - 0表示尽快显示，不会和音频播放进行同步。此时字幕全量下发，后面的字幕会包含前面的字幕。 - 1表示句子级别的实时显示，会和音频播放进行同步，只有当前句子对应的音频播放完后，下一条字幕才会下发。此时字幕增量下发，端上需要把前后的字幕进行拼接才是完整字幕。	
     */
    public $SubtitleMode;

    /**
     * @param string $UserId 机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众UserId重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
     * @param string $UserSig 机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码。
     * @param string $TargetUserId 机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
     * @param integer $MaxIdleTime 房间内超过MaxIdleTime 没有推流，后台自动关闭任务，默认值是60s。
     * @param string $WelcomeMessage 机器人的欢迎语
     * @param integer $InterruptMode 智能打断模式，默认为0，0表示服务端自动打断，1表示服务端不打断，由端上发送打断信令进行打断
     * @param integer $InterruptSpeechDuration InterruptMode为0时使用，单位为毫秒，默认为500ms。表示服务端检测到持续InterruptSpeechDuration毫秒的人声则进行打断。
     * @param integer $TurnDetectionMode 控制新一轮对话的触发方式，默认为0。
- 0表示当服务端语音识别检测出的完整一句话后，自动触发一轮新的对话。
- 1表示客户端在收到字幕消息后，自行决定是否手动发送聊天信令触发一轮新的对话。
     * @param boolean $FilterOneWord 是否过滤掉用户只说了一个字的句子，true表示过滤，false表示不过滤，默认值为true
     * @param integer $WelcomeMessagePriority 欢迎消息优先级，0默认，1高优，高优不能被打断。
     * @param integer $FilterBracketsContent 用于过滤LLM返回内容，不播放括号中的内容。
1：中文括号（）
2：英文括号()
3：中文方括号【】
4：英文方括号[]
5：英文花括号{}
默认值为空，表示不进行过滤。
     * @param AmbientSound $AmbientSound 环境音设置	
     * @param VoicePrint $VoicePrint 声纹配置	
     * @param string $InitLLMMessage 与WelcomeMessage参数互斥，当该参数有值时，WelcomeMessage将失效。\n在对话开始后把该消息送到大模型来获取欢迎语。	
     * @param TurnDetection $TurnDetection 语义断句检测	
     * @param integer $SubtitleMode 机器人字幕显示模式。 - 0表示尽快显示，不会和音频播放进行同步。此时字幕全量下发，后面的字幕会包含前面的字幕。 - 1表示句子级别的实时显示，会和音频播放进行同步，只有当前句子对应的音频播放完后，下一条字幕才会下发。此时字幕增量下发，端上需要把前后的字幕进行拼接才是完整字幕。	
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
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

        if (array_key_exists("TurnDetectionMode",$param) and $param["TurnDetectionMode"] !== null) {
            $this->TurnDetectionMode = $param["TurnDetectionMode"];
        }

        if (array_key_exists("FilterOneWord",$param) and $param["FilterOneWord"] !== null) {
            $this->FilterOneWord = $param["FilterOneWord"];
        }

        if (array_key_exists("WelcomeMessagePriority",$param) and $param["WelcomeMessagePriority"] !== null) {
            $this->WelcomeMessagePriority = $param["WelcomeMessagePriority"];
        }

        if (array_key_exists("FilterBracketsContent",$param) and $param["FilterBracketsContent"] !== null) {
            $this->FilterBracketsContent = $param["FilterBracketsContent"];
        }

        if (array_key_exists("AmbientSound",$param) and $param["AmbientSound"] !== null) {
            $this->AmbientSound = new AmbientSound();
            $this->AmbientSound->deserialize($param["AmbientSound"]);
        }

        if (array_key_exists("VoicePrint",$param) and $param["VoicePrint"] !== null) {
            $this->VoicePrint = new VoicePrint();
            $this->VoicePrint->deserialize($param["VoicePrint"]);
        }

        if (array_key_exists("InitLLMMessage",$param) and $param["InitLLMMessage"] !== null) {
            $this->InitLLMMessage = $param["InitLLMMessage"];
        }

        if (array_key_exists("TurnDetection",$param) and $param["TurnDetection"] !== null) {
            $this->TurnDetection = new TurnDetection();
            $this->TurnDetection->deserialize($param["TurnDetection"]);
        }

        if (array_key_exists("SubtitleMode",$param) and $param["SubtitleMode"] !== null) {
            $this->SubtitleMode = $param["SubtitleMode"];
        }
    }
}
