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
 * prompt注入检测结果结构体
 *
 * @method string getResult() 获取检测结果
 * @method void setResult(string $Result) 设置检测结果
 * @method integer getConfidence() 获取置信度
 * @method void setConfidence(integer $Confidence) 设置置信度
 */
class PromptDetectResult extends AbstractModel
{
    /**
     * @var string 检测结果
     */
    public $Result;

    /**
     * @var integer 置信度
     */
    public $Confidence;

    /**
     * @param string $Result 检测结果
     * @param integer $Confidence 置信度
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
