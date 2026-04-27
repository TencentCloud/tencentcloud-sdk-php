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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateLLMSecAnswer请求参数结构体
 *
 * @method SSEClientMessage getMessage() 获取<p>消息结构体内容</p>
 * @method void setMessage(SSEClientMessage $Message) 设置<p>消息结构体内容</p>
 * @method string getMsgID() 获取<p>消息id，传入 要回答的MsgID ，用于匹配自定义回答模板，最终可得到优化的代答结果</p>
 * @method void setMsgID(string $MsgID) 设置<p>消息id，传入 要回答的MsgID ，用于匹配自定义回答模板，最终可得到优化的代答结果</p>
 */
class GenerateLLMSecAnswerRequest extends AbstractModel
{
    /**
     * @var SSEClientMessage <p>消息结构体内容</p>
     */
    public $Message;

    /**
     * @var string <p>消息id，传入 要回答的MsgID ，用于匹配自定义回答模板，最终可得到优化的代答结果</p>
     */
    public $MsgID;

    /**
     * @param SSEClientMessage $Message <p>消息结构体内容</p>
     * @param string $MsgID <p>消息id，传入 要回答的MsgID ，用于匹配自定义回答模板，最终可得到优化的代答结果</p>
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = new SSEClientMessage();
            $this->Message->deserialize($param["Message"]);
        }

        if (array_key_exists("MsgID",$param) and $param["MsgID"] !== null) {
            $this->MsgID = $param["MsgID"];
        }
    }
}
