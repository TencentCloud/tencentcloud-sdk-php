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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tsf 容器集群节点调度策略
 *
 * @method string getType() 获取NONE：不使用调度策略；CROSS_AZ：跨可用区部署
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置NONE：不使用调度策略；CROSS_AZ：跨可用区部署
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeScheduleStrategyType() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeScheduleStrategyType(string $NodeScheduleStrategyType) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeScheduleOptions() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeScheduleOptions(array $NodeScheduleOptions) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStrongAffinityList() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrongAffinityList(array $StrongAffinityList) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeakAffinityList() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeakAffinityList(array $WeakAffinityList) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeakAffinityWeight() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeakAffinityWeight(integer $WeakAffinityWeight) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvailableZoneScatterScheduleType() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableZoneScatterScheduleType(string $AvailableZoneScatterScheduleType) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAvailableZoneScatterScheduleRules() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableZoneScatterScheduleRules(array $AvailableZoneScatterScheduleRules) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodScheduleStrategyType() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodScheduleStrategyType(string $PodScheduleStrategyType) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method CustomPodSchedule getCustomPodSchedule() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomPodSchedule(CustomPodSchedule $CustomPodSchedule) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTolerateScheduleType() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTolerateScheduleType(string $TolerateScheduleType) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomTolerateSchedules() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomTolerateSchedules(array $CustomTolerateSchedules) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 */
class SchedulingStrategy extends AbstractModel
{
    /**
     * @var string NONE：不使用调度策略；CROSS_AZ：跨可用区部署
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeScheduleStrategyType;

    /**
     * @var array -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeScheduleOptions;

    /**
     * @var array -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrongAffinityList;

    /**
     * @var array -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeakAffinityList;

    /**
     * @var integer -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeakAffinityWeight;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableZoneScatterScheduleType;

    /**
     * @var array -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableZoneScatterScheduleRules;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodScheduleStrategyType;

    /**
     * @var CustomPodSchedule -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomPodSchedule;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TolerateScheduleType;

    /**
     * @var array -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomTolerateSchedules;

    /**
     * @param string $Type NONE：不使用调度策略；CROSS_AZ：跨可用区部署
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeScheduleStrategyType -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeScheduleOptions -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StrongAffinityList -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WeakAffinityList -
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WeakAffinityWeight -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvailableZoneScatterScheduleType -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AvailableZoneScatterScheduleRules -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodScheduleStrategyType -
注意：此字段可能返回 null，表示取不到有效值。
     * @param CustomPodSchedule $CustomPodSchedule -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TolerateScheduleType -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomTolerateSchedules -
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NodeScheduleStrategyType",$param) and $param["NodeScheduleStrategyType"] !== null) {
            $this->NodeScheduleStrategyType = $param["NodeScheduleStrategyType"];
        }

        if (array_key_exists("NodeScheduleOptions",$param) and $param["NodeScheduleOptions"] !== null) {
            $this->NodeScheduleOptions = [];
            foreach ($param["NodeScheduleOptions"] as $key => $value){
                $obj = new CommonOption();
                $obj->deserialize($value);
                array_push($this->NodeScheduleOptions, $obj);
            }
        }

        if (array_key_exists("StrongAffinityList",$param) and $param["StrongAffinityList"] !== null) {
            $this->StrongAffinityList = [];
            foreach ($param["StrongAffinityList"] as $key => $value){
                $obj = new CommonOption();
                $obj->deserialize($value);
                array_push($this->StrongAffinityList, $obj);
            }
        }

        if (array_key_exists("WeakAffinityList",$param) and $param["WeakAffinityList"] !== null) {
            $this->WeakAffinityList = [];
            foreach ($param["WeakAffinityList"] as $key => $value){
                $obj = new CommonOption();
                $obj->deserialize($value);
                array_push($this->WeakAffinityList, $obj);
            }
        }

        if (array_key_exists("WeakAffinityWeight",$param) and $param["WeakAffinityWeight"] !== null) {
            $this->WeakAffinityWeight = $param["WeakAffinityWeight"];
        }

        if (array_key_exists("AvailableZoneScatterScheduleType",$param) and $param["AvailableZoneScatterScheduleType"] !== null) {
            $this->AvailableZoneScatterScheduleType = $param["AvailableZoneScatterScheduleType"];
        }

        if (array_key_exists("AvailableZoneScatterScheduleRules",$param) and $param["AvailableZoneScatterScheduleRules"] !== null) {
            $this->AvailableZoneScatterScheduleRules = [];
            foreach ($param["AvailableZoneScatterScheduleRules"] as $key => $value){
                $obj = new AvailableZoneScatterScheduleRule();
                $obj->deserialize($value);
                array_push($this->AvailableZoneScatterScheduleRules, $obj);
            }
        }

        if (array_key_exists("PodScheduleStrategyType",$param) and $param["PodScheduleStrategyType"] !== null) {
            $this->PodScheduleStrategyType = $param["PodScheduleStrategyType"];
        }

        if (array_key_exists("CustomPodSchedule",$param) and $param["CustomPodSchedule"] !== null) {
            $this->CustomPodSchedule = new CustomPodSchedule();
            $this->CustomPodSchedule->deserialize($param["CustomPodSchedule"]);
        }

        if (array_key_exists("TolerateScheduleType",$param) and $param["TolerateScheduleType"] !== null) {
            $this->TolerateScheduleType = $param["TolerateScheduleType"];
        }

        if (array_key_exists("CustomTolerateSchedules",$param) and $param["CustomTolerateSchedules"] !== null) {
            $this->CustomTolerateSchedules = [];
            foreach ($param["CustomTolerateSchedules"] as $key => $value){
                $obj = new CustomTolerateSchedule();
                $obj->deserialize($value);
                array_push($this->CustomTolerateSchedules, $obj);
            }
        }
    }
}
