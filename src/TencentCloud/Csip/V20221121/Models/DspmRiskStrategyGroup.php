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
 * Dspm 风险分组策略
 *
 * @method string getStrategyType() 获取策略类型
 * @method void setStrategyType(string $StrategyType) 设置策略类型
 * @method string getName() 获取策略名
 * @method void setName(string $Name) 设置策略名
 * @method string getStrategyCategory() 获取策略类型
 * @method void setStrategyCategory(string $StrategyCategory) 设置策略类型
 * @method integer getIsEnabled() 获取是否启用。0-禁用 1-启用
 * @method void setIsEnabled(integer $IsEnabled) 设置是否启用。0-禁用 1-启用
 * @method integer getHitCount() 获取命中次数
 * @method void setHitCount(integer $HitCount) 设置命中次数
 * @method string getRiskType() 获取风险类型。risk-风险；alarm-告警。
 * @method void setRiskType(string $RiskType) 设置风险类型。risk-风险；alarm-告警。
 * @method array getStrategyList() 获取策略列表
 * @method void setStrategyList(array $StrategyList) 设置策略列表
 */
class DspmRiskStrategyGroup extends AbstractModel
{
    /**
     * @var string 策略类型
     */
    public $StrategyType;

    /**
     * @var string 策略名
     */
    public $Name;

    /**
     * @var string 策略类型
     */
    public $StrategyCategory;

    /**
     * @var integer 是否启用。0-禁用 1-启用
     */
    public $IsEnabled;

    /**
     * @var integer 命中次数
     */
    public $HitCount;

    /**
     * @var string 风险类型。risk-风险；alarm-告警。
     */
    public $RiskType;

    /**
     * @var array 策略列表
     */
    public $StrategyList;

    /**
     * @param string $StrategyType 策略类型
     * @param string $Name 策略名
     * @param string $StrategyCategory 策略类型
     * @param integer $IsEnabled 是否启用。0-禁用 1-启用
     * @param integer $HitCount 命中次数
     * @param string $RiskType 风险类型。risk-风险；alarm-告警。
     * @param array $StrategyList 策略列表
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("StrategyList",$param) and $param["StrategyList"] !== null) {
            $this->StrategyList = [];
            foreach ($param["StrategyList"] as $key => $value){
                $obj = new DspmRiskStrategy();
                $obj->deserialize($value);
                array_push($this->StrategyList, $obj);
            }
        }
    }
}
