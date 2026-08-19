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
 * ModifyRiskScanCronConfig请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getCronStatus() 获取<p>计划开启状态</p>
 * @method void setCronStatus(integer $CronStatus) 设置<p>计划开启状态</p>
 * @method string getCronPlanContent() 获取<p>计划表达式</p>
 * @method void setCronPlanContent(string $CronPlanContent) 设置<p>计划表达式</p>
 * @method boolean getRuleAutoEnable() 获取<p>新增规则是否自动执行</p>
 * @method void setRuleAutoEnable(boolean $RuleAutoEnable) 设置<p>新增规则是否自动执行</p>
 * @method string getScanPlanTimezone() 获取<p>时区</p>
 * @method void setScanPlanTimezone(string $ScanPlanTimezone) 设置<p>时区</p>
 * @method boolean getIncrementAssetScanRisk() 获取<p>增量资产开启风险扫描开关</p>
 * @method void setIncrementAssetScanRisk(boolean $IncrementAssetScanRisk) 设置<p>增量资产开启风险扫描开关</p>
 */
class ModifyRiskScanCronConfigRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>计划开启状态</p>
     */
    public $CronStatus;

    /**
     * @var string <p>计划表达式</p>
     */
    public $CronPlanContent;

    /**
     * @var boolean <p>新增规则是否自动执行</p>
     */
    public $RuleAutoEnable;

    /**
     * @var string <p>时区</p>
     */
    public $ScanPlanTimezone;

    /**
     * @var boolean <p>增量资产开启风险扫描开关</p>
     */
    public $IncrementAssetScanRisk;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $CronStatus <p>计划开启状态</p>
     * @param string $CronPlanContent <p>计划表达式</p>
     * @param boolean $RuleAutoEnable <p>新增规则是否自动执行</p>
     * @param string $ScanPlanTimezone <p>时区</p>
     * @param boolean $IncrementAssetScanRisk <p>增量资产开启风险扫描开关</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CronStatus",$param) and $param["CronStatus"] !== null) {
            $this->CronStatus = $param["CronStatus"];
        }

        if (array_key_exists("CronPlanContent",$param) and $param["CronPlanContent"] !== null) {
            $this->CronPlanContent = $param["CronPlanContent"];
        }

        if (array_key_exists("RuleAutoEnable",$param) and $param["RuleAutoEnable"] !== null) {
            $this->RuleAutoEnable = $param["RuleAutoEnable"];
        }

        if (array_key_exists("ScanPlanTimezone",$param) and $param["ScanPlanTimezone"] !== null) {
            $this->ScanPlanTimezone = $param["ScanPlanTimezone"];
        }

        if (array_key_exists("IncrementAssetScanRisk",$param) and $param["IncrementAssetScanRisk"] !== null) {
            $this->IncrementAssetScanRisk = $param["IncrementAssetScanRisk"];
        }
    }
}
