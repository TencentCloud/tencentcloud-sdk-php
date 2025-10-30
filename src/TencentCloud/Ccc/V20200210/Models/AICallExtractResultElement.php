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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 通话提取结果。
 *
 * @method string getInfoType() 获取提取信息的类型
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
 * @method void setInfoType(string $InfoType) 设置提取信息的类型
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
 * @method string getInfoName() 获取提取信息的名称
 * @method void setInfoName(string $InfoName) 设置提取信息的名称
 * @method string getInfoContent() 获取提取信息的具体描述
 * @method void setInfoContent(string $InfoContent) 设置提取信息的具体描述
 * @method AICallExtractResultInfo getResult() 获取提取信息的具体结果
 * @method void setResult(AICallExtractResultInfo $Result) 设置提取信息的具体结果
 */
class AICallExtractResultElement extends AbstractModel
{
    /**
     * @var string 提取信息的类型
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
     */
    public $InfoType;

    /**
     * @var string 提取信息的名称
     */
    public $InfoName;

    /**
     * @var string 提取信息的具体描述
     */
    public $InfoContent;

    /**
     * @var AICallExtractResultInfo 提取信息的具体结果
     */
    public $Result;

    /**
     * @param string $InfoType 提取信息的类型
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
     * @param string $InfoName 提取信息的名称
     * @param string $InfoContent 提取信息的具体描述
     * @param AICallExtractResultInfo $Result 提取信息的具体结果
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
        if (array_key_exists("InfoType",$param) and $param["InfoType"] !== null) {
            $this->InfoType = $param["InfoType"];
        }

        if (array_key_exists("InfoName",$param) and $param["InfoName"] !== null) {
            $this->InfoName = $param["InfoName"];
        }

        if (array_key_exists("InfoContent",$param) and $param["InfoContent"] !== null) {
            $this->InfoContent = $param["InfoContent"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new AICallExtractResultInfo();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
