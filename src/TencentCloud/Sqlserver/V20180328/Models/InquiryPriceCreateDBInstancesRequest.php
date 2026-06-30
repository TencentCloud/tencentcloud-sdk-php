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
 * InquiryPriceCreateDBInstances请求参数结构体
 *
 * @method string getZone() 获取<p>可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。</p>
 * @method void setZone(string $Zone) 设置<p>可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。</p>
 * @method integer getMemory() 获取<p>内存大小，单位：GB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小，单位：GB</p>
 * @method integer getStorage() 获取<p>实例容量大小，单位：GB。</p>
 * @method void setStorage(integer $Storage) 设置<p>实例容量大小，单位：GB。</p>
 * @method string getInstanceChargeType() 获取<p>计费类型，取值支持 PREPAID，POSTPAID。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>计费类型，取值支持 PREPAID，POSTPAID。</p>
 * @method integer getPeriod() 获取<p>购买时长，单位：月。取值为1到48，默认为1</p>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，单位：月。取值为1到48，默认为1</p>
 * @method integer getGoodsNum() 获取<p>一次性购买的实例数量。取值1-100，默认取值为1</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>一次性购买的实例数量。取值1-100，默认取值为1</p>
 * @method string getDBVersion() 获取<p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
 * @method void setDBVersion(string $DBVersion) 设置<p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
 * @method integer getCpu() 获取<p>预购买实例的CPU核心数</p>
 * @method void setCpu(integer $Cpu) 设置<p>预购买实例的CPU核心数</p>
 * @method string getInstanceType() 获取<p>购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘</p>
 * @method string getMachineType() 获取<p>购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,<br>CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
 * @method void setMachineType(string $MachineType) 设置<p>购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,<br>CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
 * @method array getDrZones() 获取<p>备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。</p>
 * @method void setDrZones(array $DrZones) 设置<p>备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。</p>
 * @method integer getThroughputPerformance() 获取<p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置<p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 */
class InquiryPriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。</p>
     */
    public $Zone;

    /**
     * @var integer <p>内存大小，单位：GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例容量大小，单位：GB。</p>
     */
    public $Storage;

    /**
     * @var string <p>计费类型，取值支持 PREPAID，POSTPAID。</p>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>购买时长，单位：月。取值为1到48，默认为1</p>
     */
    public $Period;

    /**
     * @var integer <p>一次性购买的实例数量。取值1-100，默认取值为1</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
     */
    public $DBVersion;

    /**
     * @var integer <p>预购买实例的CPU核心数</p>
     */
    public $Cpu;

    /**
     * @var string <p>购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘</p>
     */
    public $InstanceType;

    /**
     * @var string <p>购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,<br>CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
     */
    public $MachineType;

    /**
     * @var array <p>备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。</p>
     */
    public $DrZones;

    /**
     * @var integer <p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
     */
    public $ThroughputPerformance;

    /**
     * @param string $Zone <p>可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。</p>
     * @param integer $Memory <p>内存大小，单位：GB</p>
     * @param integer $Storage <p>实例容量大小，单位：GB。</p>
     * @param string $InstanceChargeType <p>计费类型，取值支持 PREPAID，POSTPAID。</p>
     * @param integer $Period <p>购买时长，单位：月。取值为1到48，默认为1</p>
     * @param integer $GoodsNum <p>一次性购买的实例数量。取值1-100，默认取值为1</p>
     * @param string $DBVersion <p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
     * @param integer $Cpu <p>预购买实例的CPU核心数</p>
     * @param string $InstanceType <p>购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘</p>
     * @param string $MachineType <p>购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,<br>CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
     * @param array $DrZones <p>备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("DrZones",$param) and $param["DrZones"] !== null) {
            $this->DrZones = $param["DrZones"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
