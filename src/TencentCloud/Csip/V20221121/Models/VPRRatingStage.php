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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VRP评级阶段
 *
 * @method string getStage() 获取阶段名称（例如：威胁活跃度、可利用性、漏洞严重性等）
 * @method void setStage(string $Stage) 设置阶段名称（例如：威胁活跃度、可利用性、漏洞严重性等）
 * @method string getResult() 获取该阶段的评级结果
 * @method void setResult(string $Result) 设置该阶段的评级结果
 */
class VPRRatingStage extends AbstractModel
{
    /**
     * @var string 阶段名称（例如：威胁活跃度、可利用性、漏洞严重性等）
     */
    public $Stage;

    /**
     * @var string 该阶段的评级结果
     */
    public $Result;

    /**
     * @param string $Stage 阶段名称（例如：威胁活跃度、可利用性、漏洞严重性等）
     * @param string $Result 该阶段的评级结果
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
