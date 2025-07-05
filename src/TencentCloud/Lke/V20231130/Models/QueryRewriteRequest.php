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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryRewrite请求参数结构体
 *
 * @method string getQuestion() 获取需要改写的问题
 * @method void setQuestion(string $Question) 设置需要改写的问题
 * @method array getMessages() 获取需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入，由于模型字符限制，最多提供4轮对话。
 * @method void setMessages(array $Messages) 设置需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入，由于模型字符限制，最多提供4轮对话。
 * @method string getModel() 获取模型名称
 * @method void setModel(string $Model) 设置模型名称
 */
class QueryRewriteRequest extends AbstractModel
{
    /**
     * @var string 需要改写的问题
     */
    public $Question;

    /**
     * @var array 需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入，由于模型字符限制，最多提供4轮对话。
     */
    public $Messages;

    /**
     * @var string 模型名称
     */
    public $Model;

    /**
     * @param string $Question 需要改写的问题
     * @param array $Messages 需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入，由于模型字符限制，最多提供4轮对话。
     * @param string $Model 模型名称
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
