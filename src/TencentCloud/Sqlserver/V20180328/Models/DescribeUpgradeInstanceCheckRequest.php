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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpgradeInstanceCheck请求参数结构体
 *
 * @method string getInstanceId() 获取<p>数据库实例ID，形如mssql-njj2mtpl</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>数据库实例ID，形如mssql-njj2mtpl</p>
 * @method integer getCpu() 获取<p>实例变配后的CPU核心数，不填则不修改</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例变配后的CPU核心数，不填则不修改</p>
 * @method integer getMemory() 获取<p>实例变配后内存大小，单位GB，不填则不修改</p>
 * @method void setMemory(integer $Memory) 设置<p>实例变配后内存大小，单位GB，不填则不修改</p>
 * @method integer getStorage() 获取<p>实例变配后磁盘大小，单位GB，不填则不修改</p>
 * @method void setStorage(integer $Storage) 设置<p>实例变配后磁盘大小，单位GB，不填则不修改</p>
 * @method string getDBVersion() 获取<p>实例版本，不填则不修改</p>
 * @method void setDBVersion(string $DBVersion) 设置<p>实例版本，不填则不修改</p>
 * @method string getHAType() 获取<p>实例变配后的类型，可选值：CLUSTER-集群，不填则不修改</p>
 * @method void setHAType(string $HAType) 设置<p>实例变配后的类型，可选值：CLUSTER-集群，不填则不修改</p>
 * @method string getMultiZones() 获取<p>实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改</p>
 * @method void setMultiZones(string $MultiZones) 设置<p>实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改</p>
 * @method array getDrZones() 获取<p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
 * @method void setDrZones(array $DrZones) 设置<p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
 * @method integer getThroughputPerformance() 获取<p>额外磁盘IO吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p><p>不传-保持原值不变；0-取消额外IO；&gt;0-设为新值</p>
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置<p>额外磁盘IO吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p><p>不传-保持原值不变；0-取消额外IO；&gt;0-设为新值</p>
 */
class DescribeUpgradeInstanceCheckRequest extends AbstractModel
{
    /**
     * @var string <p>数据库实例ID，形如mssql-njj2mtpl</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>实例变配后的CPU核心数，不填则不修改</p>
     */
    public $Cpu;

    /**
     * @var integer <p>实例变配后内存大小，单位GB，不填则不修改</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例变配后磁盘大小，单位GB，不填则不修改</p>
     */
    public $Storage;

    /**
     * @var string <p>实例版本，不填则不修改</p>
     */
    public $DBVersion;

    /**
     * @var string <p>实例变配后的类型，可选值：CLUSTER-集群，不填则不修改</p>
     */
    public $HAType;

    /**
     * @var string <p>实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改</p>
     */
    public $MultiZones;

    /**
     * @var array <p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
     */
    public $DrZones;

    /**
     * @var integer <p>额外磁盘IO吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p><p>不传-保持原值不变；0-取消额外IO；&gt;0-设为新值</p>
     */
    public $ThroughputPerformance;

    /**
     * @param string $InstanceId <p>数据库实例ID，形如mssql-njj2mtpl</p>
     * @param integer $Cpu <p>实例变配后的CPU核心数，不填则不修改</p>
     * @param integer $Memory <p>实例变配后内存大小，单位GB，不填则不修改</p>
     * @param integer $Storage <p>实例变配后磁盘大小，单位GB，不填则不修改</p>
     * @param string $DBVersion <p>实例版本，不填则不修改</p>
     * @param string $HAType <p>实例变配后的类型，可选值：CLUSTER-集群，不填则不修改</p>
     * @param string $MultiZones <p>实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改</p>
     * @param array $DrZones <p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
     * @param integer $ThroughputPerformance <p>额外磁盘IO吞吐量</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p><p>不传-保持原值不变；0-取消额外IO；&gt;0-设为新值</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("HAType",$param) and $param["HAType"] !== null) {
            $this->HAType = $param["HAType"];
        }

        if (array_key_exists("MultiZones",$param) and $param["MultiZones"] !== null) {
            $this->MultiZones = $param["MultiZones"];
        }

        if (array_key_exists("DrZones",$param) and $param["DrZones"] !== null) {
            $this->DrZones = [];
            foreach ($param["DrZones"] as $key => $value){
                $obj = new DrZoneInfo();
                $obj->deserialize($value);
                array_push($this->DrZones, $obj);
            }
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
