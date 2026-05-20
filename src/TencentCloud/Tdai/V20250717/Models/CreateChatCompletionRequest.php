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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateChatCompletion请求参数结构体
 *
 * @method string getInputContent() 获取<p>输入内容</p>
 * @method void setInputContent(string $InputContent) 设置<p>输入内容</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getChatId() 获取<p>对话窗口ID，空值表示新的会话</p>
 * @method void setChatId(string $ChatId) 设置<p>对话窗口ID，空值表示新的会话</p>
 * @method boolean getIsHidden() 获取<p>是否隐藏</p>
 * @method void setIsHidden(boolean $IsHidden) 设置<p>是否隐藏</p>
 * @method boolean getIsChatHidden() 获取<p>是否隐藏会话</p>
 * @method void setIsChatHidden(boolean $IsChatHidden) 设置<p>是否隐藏会话</p>
 */
class CreateChatCompletionRequest extends AbstractModel
{
    /**
     * @var string <p>输入内容</p>
     */
    public $InputContent;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>对话窗口ID，空值表示新的会话</p>
     */
    public $ChatId;

    /**
     * @var boolean <p>是否隐藏</p>
     */
    public $IsHidden;

    /**
     * @var boolean <p>是否隐藏会话</p>
     */
    public $IsChatHidden;

    /**
     * @param string $InputContent <p>输入内容</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $ChatId <p>对话窗口ID，空值表示新的会话</p>
     * @param boolean $IsHidden <p>是否隐藏</p>
     * @param boolean $IsChatHidden <p>是否隐藏会话</p>
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
        if (array_key_exists("InputContent",$param) and $param["InputContent"] !== null) {
            $this->InputContent = $param["InputContent"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("IsHidden",$param) and $param["IsHidden"] !== null) {
            $this->IsHidden = $param["IsHidden"];
        }

        if (array_key_exists("IsChatHidden",$param) and $param["IsChatHidden"] !== null) {
            $this->IsChatHidden = $param["IsChatHidden"];
        }
    }
}
