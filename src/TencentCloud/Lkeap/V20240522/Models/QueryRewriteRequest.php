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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryRewrite请求参数结构体
 *
 * @method array getMessages() 获取说明：需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入
备注：由于模型字符限制，最多提供4轮对话。针对最后一轮对话进行改写。四轮对话最多包含3600个字符。
 * @method void setMessages(array $Messages) 设置说明：需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入
备注：由于模型字符限制，最多提供4轮对话。针对最后一轮对话进行改写。四轮对话最多包含3600个字符。
 * @method string getModel() 获取说明：模型名称
备注：仅一个模型可选
默认值：lke-query-rewrite-base
 * @method void setModel(string $Model) 设置说明：模型名称
备注：仅一个模型可选
默认值：lke-query-rewrite-base
 */
class QueryRewriteRequest extends AbstractModel
{
    /**
     * @var array 说明：需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入
备注：由于模型字符限制，最多提供4轮对话。针对最后一轮对话进行改写。四轮对话最多包含3600个字符。
     */
    public $Messages;

    /**
     * @var string 说明：模型名称
备注：仅一个模型可选
默认值：lke-query-rewrite-base
     */
    public $Model;

    /**
     * @param array $Messages 说明：需要改写的多轮历史会话，每轮历史对话需要包含user（问）和assistant（答）成对输入
备注：由于模型字符限制，最多提供4轮对话。针对最后一轮对话进行改写。四轮对话最多包含3600个字符。
     * @param string $Model 说明：模型名称
备注：仅一个模型可选
默认值：lke-query-rewrite-base
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
