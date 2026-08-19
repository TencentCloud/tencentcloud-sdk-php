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
 * 云资源配置风险周期扫描配置
 *
 * @method integer getCreateAppID() 获取<p>周期任务创建者appid</p>
 * @method void setCreateAppID(integer $CreateAppID) 设置<p>周期任务创建者appid</p>
 * @method string getPlanContent() 获取<p>周期计划</p>
 * @method void setPlanContent(string $PlanContent) 设置<p>周期计划</p>
 * @method integer getCronStatus() 获取<p>周期扫描开启状态</p>
 * @method void setCronStatus(integer $CronStatus) 设置<p>周期扫描开启状态</p>
 * @method boolean getAddRuleEnableStatus() 获取<p>新增规则是否自动加入扫描</p>
 * @method void setAddRuleEnableStatus(boolean $AddRuleEnableStatus) 设置<p>新增规则是否自动加入扫描</p>
 * @method string getScanPlanTimezone() 获取<p>时区</p>
 * @method void setScanPlanTimezone(string $ScanPlanTimezone) 设置<p>时区</p>
 * @method boolean getIncrementAssetScanRisk() 获取<p>增量资产开启风险扫描</p>
 * @method void setIncrementAssetScanRisk(boolean $IncrementAssetScanRisk) 设置<p>增量资产开启风险扫描</p>
 */
class RiskCronConfig extends AbstractModel
{
    /**
     * @var integer <p>周期任务创建者appid</p>
     */
    public $CreateAppID;

    /**
     * @var string <p>周期计划</p>
     */
    public $PlanContent;

    /**
     * @var integer <p>周期扫描开启状态</p>
     */
    public $CronStatus;

    /**
     * @var boolean <p>新增规则是否自动加入扫描</p>
     */
    public $AddRuleEnableStatus;

    /**
     * @var string <p>时区</p>
     */
    public $ScanPlanTimezone;

    /**
     * @var boolean <p>增量资产开启风险扫描</p>
     */
    public $IncrementAssetScanRisk;

    /**
     * @param integer $CreateAppID <p>周期任务创建者appid</p>
     * @param string $PlanContent <p>周期计划</p>
     * @param integer $CronStatus <p>周期扫描开启状态</p>
     * @param boolean $AddRuleEnableStatus <p>新增规则是否自动加入扫描</p>
     * @param string $ScanPlanTimezone <p>时区</p>
     * @param boolean $IncrementAssetScanRisk <p>增量资产开启风险扫描</p>
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
        if (array_key_exists("CreateAppID",$param) and $param["CreateAppID"] !== null) {
            $this->CreateAppID = $param["CreateAppID"];
        }

        if (array_key_exists("PlanContent",$param) and $param["PlanContent"] !== null) {
            $this->PlanContent = $param["PlanContent"];
        }

        if (array_key_exists("CronStatus",$param) and $param["CronStatus"] !== null) {
            $this->CronStatus = $param["CronStatus"];
        }

        if (array_key_exists("AddRuleEnableStatus",$param) and $param["AddRuleEnableStatus"] !== null) {
            $this->AddRuleEnableStatus = $param["AddRuleEnableStatus"];
        }

        if (array_key_exists("ScanPlanTimezone",$param) and $param["ScanPlanTimezone"] !== null) {
            $this->ScanPlanTimezone = $param["ScanPlanTimezone"];
        }

        if (array_key_exists("IncrementAssetScanRisk",$param) and $param["IncrementAssetScanRisk"] !== null) {
            $this->IncrementAssetScanRisk = $param["IncrementAssetScanRisk"];
        }
    }
}
