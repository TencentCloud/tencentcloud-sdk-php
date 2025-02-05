<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ChatCompletions请求参数结构体
 *
 * @method string getModel() 获取模型名称
 * @method void setModel(string $Model) 设置模型名称
 * @method array getMessages() 获取会话列表
 * @method void setMessages(array $Messages) 设置会话列表
 * @method boolean getStream() 获取是否流式输出
 * @method void setStream(boolean $Stream) 设置是否流式输出
 * @method float getTemperature() 获取控制生成的随机性，较高的值会产生更多样化的输出。
 * @method void setTemperature(float $Temperature) 设置控制生成的随机性，较高的值会产生更多样化的输出。
 * @method integer getMaxTokens() 获取最大生成的token数量
 * @method void setMaxTokens(integer $MaxTokens) 设置最大生成的token数量
 */
class ChatCompletionsRequest extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $Model;

    /**
     * @var array 会话列表
     */
    public $Messages;

    /**
     * @var boolean 是否流式输出
     */
    public $Stream;

    /**
     * @var float 控制生成的随机性，较高的值会产生更多样化的输出。
     */
    public $Temperature;

    /**
     * @var integer 最大生成的token数量
     */
    public $MaxTokens;

    /**
     * @param string $Model 模型名称
     * @param array $Messages 会话列表
     * @param boolean $Stream 是否流式输出
     * @param float $Temperature 控制生成的随机性，较高的值会产生更多样化的输出。
     * @param integer $MaxTokens 最大生成的token数量
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }
    }
}
