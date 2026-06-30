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
 * UpgradeDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID，形如mssql-j8kv137v</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，形如mssql-j8kv137v</p>
 * @method integer getMemory() 获取<p>实例升级后内存大小，单位GB，其值不能小于当前实例内存大小</p>
 * @method void setMemory(integer $Memory) 设置<p>实例升级后内存大小，单位GB，其值不能小于当前实例内存大小</p>
 * @method integer getStorage() 获取<p>实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小</p>
 * @method void setStorage(integer $Storage) 设置<p>实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0</p>
 * @method array getVoucherIds() 获取<p>代金券ID，目前单个订单只能使用一张代金券</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID，目前单个订单只能使用一张代金券</p>
 * @method integer getCpu() 获取<p>实例升级后的CPU核心数</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例升级后的CPU核心数</p>
 * @method string getDBVersion() 获取<p>升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本</p>
 * @method void setDBVersion(string $DBVersion) 设置<p>升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本</p>
 * @method string getHAType() 获取<p>升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构</p>
 * @method void setHAType(string $HAType) 设置<p>升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构</p>
 * @method string getMultiZones() 获取<p>修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为跨可用区</p>
 * @method void setMultiZones(string $MultiZones) 设置<p>修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为跨可用区</p>
 * @method integer getWaitSwitch() 获取<p>执行变配的方式，默认为 1。支持值包括：0 - 立刻执行，1 - 维护时间窗执行</p>
 * @method void setWaitSwitch(integer $WaitSwitch) 设置<p>执行变配的方式，默认为 1。支持值包括：0 - 立刻执行，1 - 维护时间窗执行</p>
 * @method array getDrZones() 获取<p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
 * @method void setDrZones(array $DrZones) 设置<p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
 * @method integer getUpgradeCompatLevel() 获取<p>是否自动升级数据库的兼容性级别，默认0。0-否，1-是</p>
 * @method void setUpgradeCompatLevel(integer $UpgradeCompatLevel) 设置<p>是否自动升级数据库的兼容性级别，默认0。0-否，1-是</p>
 * @method integer getThroughputPerformance() 获取<p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置<p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID，形如mssql-j8kv137v</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>实例升级后内存大小，单位GB，其值不能小于当前实例内存大小</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小</p>
     */
    public $Storage;

    /**
     * @var integer <p>是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID，目前单个订单只能使用一张代金券</p>
     */
    public $VoucherIds;

    /**
     * @var integer <p>实例升级后的CPU核心数</p>
     */
    public $Cpu;

    /**
     * @var string <p>升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本</p>
     */
    public $DBVersion;

    /**
     * @var string <p>升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构</p>
     */
    public $HAType;

    /**
     * @var string <p>修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为跨可用区</p>
     */
    public $MultiZones;

    /**
     * @var integer <p>执行变配的方式，默认为 1。支持值包括：0 - 立刻执行，1 - 维护时间窗执行</p>
     */
    public $WaitSwitch;

    /**
     * @var array <p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
     */
    public $DrZones;

    /**
     * @var integer <p>是否自动升级数据库的兼容性级别，默认0。0-否，1-是</p>
     */
    public $UpgradeCompatLevel;

    /**
     * @var integer <p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
     */
    public $ThroughputPerformance;

    /**
     * @param string $InstanceId <p>实例ID，形如mssql-j8kv137v</p>
     * @param integer $Memory <p>实例升级后内存大小，单位GB，其值不能小于当前实例内存大小</p>
     * @param integer $Storage <p>实例升级后磁盘大小，单位GB，其值不能小于当前实例磁盘大小</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券，0 - 不使用；1 - 默认使用。取值默认为0</p>
     * @param array $VoucherIds <p>代金券ID，目前单个订单只能使用一张代金券</p>
     * @param integer $Cpu <p>实例升级后的CPU核心数</p>
     * @param string $DBVersion <p>升级sqlserver的版本，目前支持：2008R2（SQL Server 2008 Enterprise），2012SP3（SQL Server 2012 Enterprise）版本等。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息，版本不支持降级，不填则不修改版本</p>
     * @param string $HAType <p>升级sqlserver的高可用架构,从镜像容灾升级到always on集群容灾，仅支持2017及以上版本且支持always on高可用的实例，不支持降级到镜像方式容灾，CLUSTER-升级为always on容灾，不填则不修改高可用架构</p>
     * @param string $MultiZones <p>修改实例是否为跨可用区容灾，SameZones-修改为同可用区 MultiZones-修改为跨可用区</p>
     * @param integer $WaitSwitch <p>执行变配的方式，默认为 1。支持值包括：0 - 立刻执行，1 - 维护时间窗执行</p>
     * @param array $DrZones <p>多节点架构实例的备节点可用区，默认为空。如果需要在变配的同时修改指定备节点的可用区时必传，当MultiZones = MultiZones时主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
     * @param integer $UpgradeCompatLevel <p>是否自动升级数据库的兼容性级别，默认0。0-否，1-是</p>
     * @param integer $ThroughputPerformance <p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
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

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("DrZones",$param) and $param["DrZones"] !== null) {
            $this->DrZones = [];
            foreach ($param["DrZones"] as $key => $value){
                $obj = new DrZoneInfo();
                $obj->deserialize($value);
                array_push($this->DrZones, $obj);
            }
        }

        if (array_key_exists("UpgradeCompatLevel",$param) and $param["UpgradeCompatLevel"] !== null) {
            $this->UpgradeCompatLevel = $param["UpgradeCompatLevel"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
