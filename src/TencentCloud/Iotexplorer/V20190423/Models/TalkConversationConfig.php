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
 * 对话行为配置
 *
 * @method string getWelcomeMessage() 获取欢迎语
 * @method void setWelcomeMessage(string $WelcomeMessage) 设置欢迎语
 * @method integer getWelcomeMessagePriority() 获取欢迎语优先级。`0`=默认，`1`=高优不可打断
 * @method void setWelcomeMessagePriority(integer $WelcomeMessagePriority) 设置欢迎语优先级。`0`=默认，`1`=高优不可打断
 * @method integer getInterruptMode() 获取智能打断模式。`0`=服务端自动打断，`1`=端上发送打断信令
 * @method void setInterruptMode(integer $InterruptMode) 设置智能打断模式。`0`=服务端自动打断，`1`=端上发送打断信令
 * @method array getInterruptWordList() 获取打断词列表。AI 说话期间，仅当用户说出列表中的词才打断 AI；不会触发新的回复
 * @method void setInterruptWordList(array $InterruptWordList) 设置打断词列表。AI 说话期间，仅当用户说出列表中的词才打断 AI；不会触发新的回复
 */
class TalkConversationConfig extends AbstractModel
{
    /**
     * @var string 欢迎语
     */
    public $WelcomeMessage;

    /**
     * @var integer 欢迎语优先级。`0`=默认，`1`=高优不可打断
     */
    public $WelcomeMessagePriority;

    /**
     * @var integer 智能打断模式。`0`=服务端自动打断，`1`=端上发送打断信令
     */
    public $InterruptMode;

    /**
     * @var array 打断词列表。AI 说话期间，仅当用户说出列表中的词才打断 AI；不会触发新的回复
     */
    public $InterruptWordList;

    /**
     * @param string $WelcomeMessage 欢迎语
     * @param integer $WelcomeMessagePriority 欢迎语优先级。`0`=默认，`1`=高优不可打断
     * @param integer $InterruptMode 智能打断模式。`0`=服务端自动打断，`1`=端上发送打断信令
     * @param array $InterruptWordList 打断词列表。AI 说话期间，仅当用户说出列表中的词才打断 AI；不会触发新的回复
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
        if (array_key_exists("WelcomeMessage",$param) and $param["WelcomeMessage"] !== null) {
            $this->WelcomeMessage = $param["WelcomeMessage"];
        }

        if (array_key_exists("WelcomeMessagePriority",$param) and $param["WelcomeMessagePriority"] !== null) {
            $this->WelcomeMessagePriority = $param["WelcomeMessagePriority"];
        }

        if (array_key_exists("InterruptMode",$param) and $param["InterruptMode"] !== null) {
            $this->InterruptMode = $param["InterruptMode"];
        }

        if (array_key_exists("InterruptWordList",$param) and $param["InterruptWordList"] !== null) {
            $this->InterruptWordList = $param["InterruptWordList"];
        }
    }
}
