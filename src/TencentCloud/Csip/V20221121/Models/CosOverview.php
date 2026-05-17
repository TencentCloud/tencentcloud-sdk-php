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
 * cos概览页面数据结构
 *
 * @method integer getAssetCount() 获取资产总数
 * @method void setAssetCount(integer $AssetCount) 设置资产总数
 * @method integer getAlarmAssetCount() 获取需要立即处理的资产数
 * @method void setAlarmAssetCount(integer $AlarmAssetCount) 设置需要立即处理的资产数
 * @method integer getRiskAssetCount() 获取需要加固的资产数
 * @method void setRiskAssetCount(integer $RiskAssetCount) 设置需要加固的资产数
 * @method integer getAlarmCount() 获取告警总数
 * @method void setAlarmCount(integer $AlarmCount) 设置告警总数
 * @method integer getIncrementAlarmCount() 获取当日新增告警总数
 * @method void setIncrementAlarmCount(integer $IncrementAlarmCount) 设置当日新增告警总数
 * @method integer getRiskCount() 获取风险总数
 * @method void setRiskCount(integer $RiskCount) 设置风险总数
 * @method integer getIncrementRiskCount() 获取当日新增告警总数
 * @method void setIncrementRiskCount(integer $IncrementRiskCount) 设置当日新增告警总数
 * @method array getRiskTop() 获取风险top详情
 * @method void setRiskTop(array $RiskTop) 设置风险top详情
 * @method array getAlarmTop() 获取告警风险top
 * @method void setAlarmTop(array $AlarmTop) 设置告警风险top
 */
class CosOverview extends AbstractModel
{
    /**
     * @var integer 资产总数
     */
    public $AssetCount;

    /**
     * @var integer 需要立即处理的资产数
     */
    public $AlarmAssetCount;

    /**
     * @var integer 需要加固的资产数
     */
    public $RiskAssetCount;

    /**
     * @var integer 告警总数
     */
    public $AlarmCount;

    /**
     * @var integer 当日新增告警总数
     */
    public $IncrementAlarmCount;

    /**
     * @var integer 风险总数
     */
    public $RiskCount;

    /**
     * @var integer 当日新增告警总数
     */
    public $IncrementRiskCount;

    /**
     * @var array 风险top详情
     */
    public $RiskTop;

    /**
     * @var array 告警风险top
     */
    public $AlarmTop;

    /**
     * @param integer $AssetCount 资产总数
     * @param integer $AlarmAssetCount 需要立即处理的资产数
     * @param integer $RiskAssetCount 需要加固的资产数
     * @param integer $AlarmCount 告警总数
     * @param integer $IncrementAlarmCount 当日新增告警总数
     * @param integer $RiskCount 风险总数
     * @param integer $IncrementRiskCount 当日新增告警总数
     * @param array $RiskTop 风险top详情
     * @param array $AlarmTop 告警风险top
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

        if (array_key_exists("AlarmAssetCount",$param) and $param["AlarmAssetCount"] !== null) {
            $this->AlarmAssetCount = $param["AlarmAssetCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("IncrementAlarmCount",$param) and $param["IncrementAlarmCount"] !== null) {
            $this->IncrementAlarmCount = $param["IncrementAlarmCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("IncrementRiskCount",$param) and $param["IncrementRiskCount"] !== null) {
            $this->IncrementRiskCount = $param["IncrementRiskCount"];
        }

        if (array_key_exists("RiskTop",$param) and $param["RiskTop"] !== null) {
            $this->RiskTop = [];
            foreach ($param["RiskTop"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskTop, $obj);
            }
        }

        if (array_key_exists("AlarmTop",$param) and $param["AlarmTop"] !== null) {
            $this->AlarmTop = [];
            foreach ($param["AlarmTop"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTop, $obj);
            }
        }
    }
}
