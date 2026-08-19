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
 * 按风险等级聚合的未通过检测项数量统计。
 *
 * @method string getRiskLevel() 获取<p>风险等级。取值：LOW（低危）、MEDIUM（中危）、HIGH（高危）、CRITICAL（严重）。</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级。取值：LOW（低危）、MEDIUM（中危）、HIGH（高危）、CRITICAL（严重）。</p>
 * @method integer getNotPassCount() 获取<p>该风险等级下结果为 NOT_PASS 的检测项数量。</p>
 * @method void setNotPassCount(integer $NotPassCount) 设置<p>该风险等级下结果为 NOT_PASS 的检测项数量。</p>
 */
class BaselineRiskLevelStatistic extends AbstractModel
{
    /**
     * @var string <p>风险等级。取值：LOW（低危）、MEDIUM（中危）、HIGH（高危）、CRITICAL（严重）。</p>
     */
    public $RiskLevel;

    /**
     * @var integer <p>该风险等级下结果为 NOT_PASS 的检测项数量。</p>
     */
    public $NotPassCount;

    /**
     * @param string $RiskLevel <p>风险等级。取值：LOW（低危）、MEDIUM（中危）、HIGH（高危）、CRITICAL（严重）。</p>
     * @param integer $NotPassCount <p>该风险等级下结果为 NOT_PASS 的检测项数量。</p>
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
        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("NotPassCount",$param) and $param["NotPassCount"] !== null) {
            $this->NotPassCount = $param["NotPassCount"];
        }
    }
}
