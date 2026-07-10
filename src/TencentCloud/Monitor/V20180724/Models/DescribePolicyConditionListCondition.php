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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList策略条件
 *
 * @method string getPolicyViewName() 获取<p>策略视图名称</p>
 * @method void setPolicyViewName(string $PolicyViewName) 设置<p>策略视图名称</p>
 * @method array getEventMetrics() 获取<p>事件告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventMetrics(array $EventMetrics) 设置<p>事件告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportMultiRegion() 获取<p>是否支持多地域</p>
 * @method void setIsSupportMultiRegion(boolean $IsSupportMultiRegion) 设置<p>是否支持多地域</p>
 * @method array getMetrics() 获取<p>指标告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetrics(array $Metrics) 设置<p>指标告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>策略类型名称</p>
 * @method void setName(string $Name) 设置<p>策略类型名称</p>
 * @method integer getSortId() 获取<p>排序id</p>
 * @method void setSortId(integer $SortId) 设置<p>排序id</p>
 * @method boolean getSupportDefault() 获取<p>是否支持默认策略</p>
 * @method void setSupportDefault(boolean $SupportDefault) 设置<p>是否支持默认策略</p>
 * @method array getSupportRegions() 获取<p>支持该策略类型的地域列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportRegions(array $SupportRegions) 设置<p>支持该策略类型的地域列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyConditionListResponseDeprecatingInfo getDeprecatingInfo() 获取<p>弃用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeprecatingInfo(DescribePolicyConditionListResponseDeprecatingInfo $DeprecatingInfo) 设置<p>弃用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyConditionListCondition extends AbstractModel
{
    /**
     * @var string <p>策略视图名称</p>
     */
    public $PolicyViewName;

    /**
     * @var array <p>事件告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventMetrics;

    /**
     * @var boolean <p>是否支持多地域</p>
     */
    public $IsSupportMultiRegion;

    /**
     * @var array <p>指标告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metrics;

    /**
     * @var string <p>策略类型名称</p>
     */
    public $Name;

    /**
     * @var integer <p>排序id</p>
     */
    public $SortId;

    /**
     * @var boolean <p>是否支持默认策略</p>
     */
    public $SupportDefault;

    /**
     * @var array <p>支持该策略类型的地域列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportRegions;

    /**
     * @var DescribePolicyConditionListResponseDeprecatingInfo <p>弃用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeprecatingInfo;

    /**
     * @param string $PolicyViewName <p>策略视图名称</p>
     * @param array $EventMetrics <p>事件告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSupportMultiRegion <p>是否支持多地域</p>
     * @param array $Metrics <p>指标告警条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>策略类型名称</p>
     * @param integer $SortId <p>排序id</p>
     * @param boolean $SupportDefault <p>是否支持默认策略</p>
     * @param array $SupportRegions <p>支持该策略类型的地域列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyConditionListResponseDeprecatingInfo $DeprecatingInfo <p>弃用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PolicyViewName",$param) and $param["PolicyViewName"] !== null) {
            $this->PolicyViewName = $param["PolicyViewName"];
        }

        if (array_key_exists("EventMetrics",$param) and $param["EventMetrics"] !== null) {
            $this->EventMetrics = [];
            foreach ($param["EventMetrics"] as $key => $value){
                $obj = new DescribePolicyConditionListEventMetric();
                $obj->deserialize($value);
                array_push($this->EventMetrics, $obj);
            }
        }

        if (array_key_exists("IsSupportMultiRegion",$param) and $param["IsSupportMultiRegion"] !== null) {
            $this->IsSupportMultiRegion = $param["IsSupportMultiRegion"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new DescribePolicyConditionListMetric();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("SupportDefault",$param) and $param["SupportDefault"] !== null) {
            $this->SupportDefault = $param["SupportDefault"];
        }

        if (array_key_exists("SupportRegions",$param) and $param["SupportRegions"] !== null) {
            $this->SupportRegions = $param["SupportRegions"];
        }

        if (array_key_exists("DeprecatingInfo",$param) and $param["DeprecatingInfo"] !== null) {
            $this->DeprecatingInfo = new DescribePolicyConditionListResponseDeprecatingInfo();
            $this->DeprecatingInfo->deserialize($param["DeprecatingInfo"]);
        }
    }
}
