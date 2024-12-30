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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpgradeInstanceCheck请求参数结构体
 *
 * @method string getInstanceId() 获取数据库实例ID，形如mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，形如mssql-njj2mtpl
 * @method integer getCpu() 获取实例变配后的CPU核心数，不填则不修改
 * @method void setCpu(integer $Cpu) 设置实例变配后的CPU核心数，不填则不修改
 * @method integer getMemory() 获取实例变配后内存大小，单位GB，不填则不修改
 * @method void setMemory(integer $Memory) 设置实例变配后内存大小，单位GB，不填则不修改
 * @method integer getStorage() 获取实例变配后磁盘大小，单位GB，不填则不修改
 * @method void setStorage(integer $Storage) 设置实例变配后磁盘大小，单位GB，不填则不修改
 * @method string getDBVersion() 获取实例版本，不填则不修改
 * @method void setDBVersion(string $DBVersion) 设置实例版本，不填则不修改
 * @method string getHAType() 获取实例变配后的类型，可选值：CLUSTER-集群，不填则不修改
 * @method void setHAType(string $HAType) 设置实例变配后的类型，可选值：CLUSTER-集群，不填则不修改
 * @method string getMultiZones() 获取实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改
 * @method void setMultiZones(string $MultiZones) 设置实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改
 * @method array getDrZones() 获取多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
 * @method void setDrZones(array $DrZones) 设置多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
 */
class DescribeUpgradeInstanceCheckRequest extends AbstractModel
{
    /**
     * @var string 数据库实例ID，形如mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var integer 实例变配后的CPU核心数，不填则不修改
     */
    public $Cpu;

    /**
     * @var integer 实例变配后内存大小，单位GB，不填则不修改
     */
    public $Memory;

    /**
     * @var integer 实例变配后磁盘大小，单位GB，不填则不修改
     */
    public $Storage;

    /**
     * @var string 实例版本，不填则不修改
     */
    public $DBVersion;

    /**
     * @var string 实例变配后的类型，可选值：CLUSTER-集群，不填则不修改
     */
    public $HAType;

    /**
     * @var string 实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改
     */
    public $MultiZones;

    /**
     * @var array 多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
     */
    public $DrZones;

    /**
     * @param string $InstanceId 数据库实例ID，形如mssql-njj2mtpl
     * @param integer $Cpu 实例变配后的CPU核心数，不填则不修改
     * @param integer $Memory 实例变配后内存大小，单位GB，不填则不修改
     * @param integer $Storage 实例变配后磁盘大小，单位GB，不填则不修改
     * @param string $DBVersion 实例版本，不填则不修改
     * @param string $HAType 实例变配后的类型，可选值：CLUSTER-集群，不填则不修改
     * @param string $MultiZones 实例变配后的跨可用区类型，可选值： SameZones-修改为同可用区 MultiZones-修改为跨可用区，不填则不修改
     * @param array $DrZones 多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
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
    }
}
