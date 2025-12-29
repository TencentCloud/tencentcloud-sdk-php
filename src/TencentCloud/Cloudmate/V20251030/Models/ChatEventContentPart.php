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
namespace TencentCloud\Cloudmate\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能诊断时间内容分片结构
 *
 * @method string getText() 获取文本内容（流式或完整）
 * @method void setText(string $Text) 设置文本内容（流式或完整）
 * @method string getFunctionCall() 获取函数调用信息
 * @method void setFunctionCall(string $FunctionCall) 设置函数调用信息
 * @method string getFunctionResponse() 获取函数返回结果
 * @method void setFunctionResponse(string $FunctionResponse) 设置函数返回结果
 */
class ChatEventContentPart extends AbstractModel
{
    /**
     * @var string 文本内容（流式或完整）
     */
    public $Text;

    /**
     * @var string 函数调用信息
     */
    public $FunctionCall;

    /**
     * @var string 函数返回结果
     */
    public $FunctionResponse;

    /**
     * @param string $Text 文本内容（流式或完整）
     * @param string $FunctionCall 函数调用信息
     * @param string $FunctionResponse 函数返回结果
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("FunctionCall",$param) and $param["FunctionCall"] !== null) {
            $this->FunctionCall = $param["FunctionCall"];
        }

        if (array_key_exists("FunctionResponse",$param) and $param["FunctionResponse"] !== null) {
            $this->FunctionResponse = $param["FunctionResponse"];
        }
    }
}
