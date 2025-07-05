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
 * AI 通话提取配置项
 *
 * @method string getInfoType() 获取配置项类型，包括
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
 * @method void setInfoType(string $InfoType) 设置配置项类型，包括
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
 * @method string getInfoName() 获取配置项名称，不可重复
 * @method void setInfoName(string $InfoName) 设置配置项名称，不可重复
 * @method string getInfoContent() 获取配置项具体内容
 * @method void setInfoContent(string $InfoContent) 设置配置项具体内容
 * @method array getExamples() 获取配置项提取内容示例
 * @method void setExamples(array $Examples) 设置配置项提取内容示例
 * @method array getChoices() 获取InfoType 为 Selector，需要配置此字段
 * @method void setChoices(array $Choices) 设置InfoType 为 Selector，需要配置此字段
 */
class AICallExtractConfigElement extends AbstractModel
{
    /**
     * @var string 配置项类型，包括
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
     */
    public $InfoType;

    /**
     * @var string 配置项名称，不可重复
     */
    public $InfoName;

    /**
     * @var string 配置项具体内容
     */
    public $InfoContent;

    /**
     * @var array 配置项提取内容示例
     */
    public $Examples;

    /**
     * @var array InfoType 为 Selector，需要配置此字段
     */
    public $Choices;

    /**
     * @param string $InfoType 配置项类型，包括
Text 文本
Selector 选项
Boolean 布尔值
Number 数字
     * @param string $InfoName 配置项名称，不可重复
     * @param string $InfoContent 配置项具体内容
     * @param array $Examples 配置项提取内容示例
     * @param array $Choices InfoType 为 Selector，需要配置此字段
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

        if (array_key_exists("Examples",$param) and $param["Examples"] !== null) {
            $this->Examples = $param["Examples"];
        }

        if (array_key_exists("Choices",$param) and $param["Choices"] !== null) {
            $this->Choices = $param["Choices"];
        }
    }
}
