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
 * @method string getZone() 获取可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method void setZone(string $Zone) 设置可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
 * @method integer getMemory() 获取内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位：GB
 * @method integer getStorage() 获取实例容量大小，单位：GB。
 * @method void setStorage(integer $Storage) 设置实例容量大小，单位：GB。
 * @method string getInstanceChargeType() 获取计费类型，取值支持 PREPAID，POSTPAID。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置计费类型，取值支持 PREPAID，POSTPAID。
 * @method integer getPeriod() 获取购买时长，单位：月。取值为1到48，默认为1
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。取值为1到48，默认为1
 * @method integer getGoodsNum() 获取一次性购买的实例数量。取值1-100，默认取值为1
 * @method void setGoodsNum(integer $GoodsNum) 设置一次性购买的实例数量。取值1-100，默认取值为1
 * @method string getDBVersion() 获取sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
 * @method void setDBVersion(string $DBVersion) 设置sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
 * @method integer getCpu() 获取预购买实例的CPU核心数
 * @method void setCpu(integer $Cpu) 设置预购买实例的CPU核心数
 * @method string getInstanceType() 获取购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘
 * @method void setInstanceType(string $InstanceType) 设置购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘
 * @method string getMachineType() 获取购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,
CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘
 * @method void setMachineType(string $MachineType) 设置购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,
CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘
 * @method array getDrZones() 获取备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。
 * @method void setDrZones(array $DrZones) 设置备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。
 */
class InquiryPriceCreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     */
    public $Zone;

    /**
     * @var integer 内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 实例容量大小，单位：GB。
     */
    public $Storage;

    /**
     * @var string 计费类型，取值支持 PREPAID，POSTPAID。
     */
    public $InstanceChargeType;

    /**
     * @var integer 购买时长，单位：月。取值为1到48，默认为1
     */
    public $Period;

    /**
     * @var integer 一次性购买的实例数量。取值1-100，默认取值为1
     */
    public $GoodsNum;

    /**
     * @var string sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
     */
    public $DBVersion;

    /**
     * @var integer 预购买实例的CPU核心数
     */
    public $Cpu;

    /**
     * @var string 购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘
     */
    public $InstanceType;

    /**
     * @var string 购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,
CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘
     */
    public $MachineType;

    /**
     * @var array 备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。
     */
    public $DrZones;

    /**
     * @param string $Zone 可用区ID。该参数可以通过调用 DescribeZones 接口的返回值中的Zone字段来获取。
     * @param integer $Memory 内存大小，单位：GB
     * @param integer $Storage 实例容量大小，单位：GB。
     * @param string $InstanceChargeType 计费类型，取值支持 PREPAID，POSTPAID。
     * @param integer $Period 购买时长，单位：月。取值为1到48，默认为1
     * @param integer $GoodsNum 一次性购买的实例数量。取值1-100，默认取值为1
     * @param string $DBVersion sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
     * @param integer $Cpu 预购买实例的CPU核心数
     * @param string $InstanceType 购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,cvmHA-虚拟机双机高可用,cvmRO-虚拟机只读，MultiHA-多节点，cvmMultiHA-云盘
     * @param string $MachineType 购买实例的宿主机类型，PM-物理机, CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘,
CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘
     * @param array $DrZones 备节点可用区，默认为空。如果是多节点架构时必传，并且备机可用区集合最小为2个，最大不超过5个。
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
    }
}
