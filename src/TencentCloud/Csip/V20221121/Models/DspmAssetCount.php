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
 * Dspm 资产统计数
 *
 * @method integer getAssetCount() 获取资产个数
 * @method void setAssetCount(integer $AssetCount) 设置资产个数
 * @method integer getDangerRiskCount() 获取资产有危险风险的个数
 * @method void setDangerRiskCount(integer $DangerRiskCount) 设置资产有危险风险的个数
 * @method integer getLowRiskCount() 获取资产有低风险的个数
 * @method void setLowRiskCount(integer $LowRiskCount) 设置资产有低风险的个数
 * @method integer getRiskAssetCount() 获取有待处理风险的实例数
 * @method void setRiskAssetCount(integer $RiskAssetCount) 设置有待处理风险的实例数
 * @method integer getAlarmAssetCount() 获取有待处理告警的实例数
 * @method void setAlarmAssetCount(integer $AlarmAssetCount) 设置有待处理告警的实例数
 */
class DspmAssetCount extends AbstractModel
{
    /**
     * @var integer 资产个数
     */
    public $AssetCount;

    /**
     * @var integer 资产有危险风险的个数
     */
    public $DangerRiskCount;

    /**
     * @var integer 资产有低风险的个数
     */
    public $LowRiskCount;

    /**
     * @var integer 有待处理风险的实例数
     */
    public $RiskAssetCount;

    /**
     * @var integer 有待处理告警的实例数
     */
    public $AlarmAssetCount;

    /**
     * @param integer $AssetCount 资产个数
     * @param integer $DangerRiskCount 资产有危险风险的个数
     * @param integer $LowRiskCount 资产有低风险的个数
     * @param integer $RiskAssetCount 有待处理风险的实例数
     * @param integer $AlarmAssetCount 有待处理告警的实例数
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
        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("DangerRiskCount",$param) and $param["DangerRiskCount"] !== null) {
            $this->DangerRiskCount = $param["DangerRiskCount"];
        }

        if (array_key_exists("LowRiskCount",$param) and $param["LowRiskCount"] !== null) {
            $this->LowRiskCount = $param["LowRiskCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("AlarmAssetCount",$param) and $param["AlarmAssetCount"] !== null) {
            $this->AlarmAssetCount = $param["AlarmAssetCount"];
        }
    }
}
