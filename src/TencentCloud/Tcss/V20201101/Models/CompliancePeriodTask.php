<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一个合规基线检测定时任务的信息。
 *
 * @method integer getPeriodTaskId() 获取周期任务的ID
 * @method void setPeriodTaskId(integer $PeriodTaskId) 设置周期任务的ID
 * @method string getAssetType() 获取资产类型。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
 * @method void setAssetType(string $AssetType) 设置资产类型。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
 * @method string getLastTriggerTime() 获取最近一次触发的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerTime(string $LastTriggerTime) 设置最近一次触发的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPolicyItemCount() 获取总的检查项数目
 * @method void setTotalPolicyItemCount(integer $TotalPolicyItemCount) 设置总的检查项数目
 * @method CompliancePeriodTaskRule getPeriodRule() 获取周期设置
 * @method void setPeriodRule(CompliancePeriodTaskRule $PeriodRule) 设置周期设置
 * @method array getBenchmarkStandardSet() 获取合规标准列表
 * @method void setBenchmarkStandardSet(array $BenchmarkStandardSet) 设置合规标准列表
 */
class CompliancePeriodTask extends AbstractModel
{
    /**
     * @var integer 周期任务的ID
     */
    public $PeriodTaskId;

    /**
     * @var string 资产类型。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
     */
    public $AssetType;

    /**
     * @var string 最近一次触发的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerTime;

    /**
     * @var integer 总的检查项数目
     */
    public $TotalPolicyItemCount;

    /**
     * @var CompliancePeriodTaskRule 周期设置
     */
    public $PeriodRule;

    /**
     * @var array 合规标准列表
     */
    public $BenchmarkStandardSet;

    /**
     * @param integer $PeriodTaskId 周期任务的ID
     * @param string $AssetType 资产类型。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
     * @param string $LastTriggerTime 最近一次触发的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPolicyItemCount 总的检查项数目
     * @param CompliancePeriodTaskRule $PeriodRule 周期设置
     * @param array $BenchmarkStandardSet 合规标准列表
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
        if (array_key_exists("PeriodTaskId",$param) and $param["PeriodTaskId"] !== null) {
            $this->PeriodTaskId = $param["PeriodTaskId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }

        if (array_key_exists("TotalPolicyItemCount",$param) and $param["TotalPolicyItemCount"] !== null) {
            $this->TotalPolicyItemCount = $param["TotalPolicyItemCount"];
        }

        if (array_key_exists("PeriodRule",$param) and $param["PeriodRule"] !== null) {
            $this->PeriodRule = new CompliancePeriodTaskRule();
            $this->PeriodRule->deserialize($param["PeriodRule"]);
        }

        if (array_key_exists("BenchmarkStandardSet",$param) and $param["BenchmarkStandardSet"] !== null) {
            $this->BenchmarkStandardSet = [];
            foreach ($param["BenchmarkStandardSet"] as $key => $value){
                $obj = new ComplianceBenchmarkStandard();
                $obj->deserialize($value);
                array_push($this->BenchmarkStandardSet, $obj);
            }
        }
    }
}
