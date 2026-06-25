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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关模型API 配额降级触发条件信息
 *
 * @method integer getThresholdPercent() 获取<p>配额感知阈值百分比（RPM 与 TPM 共用）</p><p>取值范围：[0, 99]</p>
 * @method void setThresholdPercent(integer $ThresholdPercent) 设置<p>配额感知阈值百分比（RPM 与 TPM 共用）</p><p>取值范围：[0, 99]</p>
 * @method string getCheckDimension() 获取<p>检查维度策略</p><p>枚举值：</p><ul><li>AnyInsufficient：  RPM 或 TPM 任一不足即触发</li><li>AllInsufficient： RPM 和 TPM 同时不足才触发</li></ul>
 * @method void setCheckDimension(string $CheckDimension) 设置<p>检查维度策略</p><p>枚举值：</p><ul><li>AnyInsufficient：  RPM 或 TPM 任一不足即触发</li><li>AllInsufficient： RPM 和 TPM 同时不足才触发</li></ul>
 */
class AIGWLLMQuotaFallbackTrigger extends AbstractModel
{
    /**
     * @var integer <p>配额感知阈值百分比（RPM 与 TPM 共用）</p><p>取值范围：[0, 99]</p>
     */
    public $ThresholdPercent;

    /**
     * @var string <p>检查维度策略</p><p>枚举值：</p><ul><li>AnyInsufficient：  RPM 或 TPM 任一不足即触发</li><li>AllInsufficient： RPM 和 TPM 同时不足才触发</li></ul>
     */
    public $CheckDimension;

    /**
     * @param integer $ThresholdPercent <p>配额感知阈值百分比（RPM 与 TPM 共用）</p><p>取值范围：[0, 99]</p>
     * @param string $CheckDimension <p>检查维度策略</p><p>枚举值：</p><ul><li>AnyInsufficient：  RPM 或 TPM 任一不足即触发</li><li>AllInsufficient： RPM 和 TPM 同时不足才触发</li></ul>
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
        if (array_key_exists("ThresholdPercent",$param) and $param["ThresholdPercent"] !== null) {
            $this->ThresholdPercent = $param["ThresholdPercent"];
        }

        if (array_key_exists("CheckDimension",$param) and $param["CheckDimension"] !== null) {
            $this->CheckDimension = $param["CheckDimension"];
        }
    }
}
