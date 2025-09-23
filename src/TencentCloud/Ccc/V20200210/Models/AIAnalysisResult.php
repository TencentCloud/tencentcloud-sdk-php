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
 * AI会话分析结果
 *
 * @method string getType() 获取summary: 会话小结
mood: 情绪分析
intention: 意向提取
 * @method void setType(string $Type) 设置summary: 会话小结
mood: 情绪分析
intention: 意向提取
 * @method string getResult() 获取AI会话分析结果
 * @method void setResult(string $Result) 设置AI会话分析结果
 */
class AIAnalysisResult extends AbstractModel
{
    /**
     * @var string summary: 会话小结
mood: 情绪分析
intention: 意向提取
     */
    public $Type;

    /**
     * @var string AI会话分析结果
     */
    public $Result;

    /**
     * @param string $Type summary: 会话小结
mood: 情绪分析
intention: 意向提取
     * @param string $Result AI会话分析结果
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
