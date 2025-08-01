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
 * 调用服务端主动发起请求到LLM
 *
 * @method string getContent() 获取请求LLM的内容
 * @method void setContent(string $Content) 设置请求LLM的内容
 * @method boolean getInterrupt() 获取是否允许该文本打断机器人说话
 * @method void setInterrupt(boolean $Interrupt) 设置是否允许该文本打断机器人说话
 */
class InvokeLLM extends AbstractModel
{
    /**
     * @var string 请求LLM的内容
     */
    public $Content;

    /**
     * @var boolean 是否允许该文本打断机器人说话
     */
    public $Interrupt;

    /**
     * @param string $Content 请求LLM的内容
     * @param boolean $Interrupt 是否允许该文本打断机器人说话
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Interrupt",$param) and $param["Interrupt"] !== null) {
            $this->Interrupt = $param["Interrupt"];
        }
    }
}
