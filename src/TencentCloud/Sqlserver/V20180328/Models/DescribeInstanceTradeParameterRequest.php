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
 * DescribeInstanceTradeParameter请求参数结构体
 *
 * @method string getZone() 获取实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method void setZone(string $Zone) 设置实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method integer getCpu() 获取实例核心数
 * @method void setCpu(integer $Cpu) 设置实例核心数
 * @method integer getMemory() 获取实例内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位GB
 * @method integer getStorage() 获取实例磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置实例磁盘大小，单位GB
 * @method string getInstanceType() 获取购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,BI-商业智能服务,cvmHA-新版高可用,cvmRO-新版只读，MultiHA-多节点，cvmMultiHA-云盘多节点
 * @method void setInstanceType(string $InstanceType) 设置购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,BI-商业智能服务,cvmHA-新版高可用,cvmRO-新版只读，MultiHA-多节点，cvmMultiHA-云盘多节点
 * @method string getMachineType() 获取购买实例的宿主机磁盘类型,CLOUD_HSSD-云服务器加强型SSD云盘，CLOUD_TSSD-云服务器极速型SSD云盘，CLOUD_BSSD-云服务器通用型SSD云盘
 * @method void setMachineType(string $MachineType) 设置购买实例的宿主机磁盘类型,CLOUD_HSSD-云服务器加强型SSD云盘，CLOUD_TSSD-云服务器极速型SSD云盘，CLOUD_BSSD-云服务器通用型SSD云盘
 * @method string getInstanceChargeType() 获取付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getGoodsNum() 获取本次购买几个实例，默认值为1。取值不超过10
 * @method void setGoodsNum(integer $GoodsNum) 设置本次购买几个实例，默认值为1。取值不超过10
 * @method string getDBVersion() 获取sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
 * @method void setDBVersion(string $DBVersion) 设置sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
 * @method string getSubnetId() 获取VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
 * @method void setSubnetId(string $SubnetId) 设置VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
 * @method string getVpcId() 获取VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
 * @method void setVpcId(string $VpcId) 设置VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
 * @method integer getPeriod() 获取购买实例周期，默认取值为1，表示一个月。取值不超过48
 * @method void setPeriod(integer $Period) 设置购买实例周期，默认取值为1，表示一个月。取值不超过48
 * @method array getSecurityGroupList() 获取安全组列表，填写形如sg-xxx的安全组ID
 * @method void setSecurityGroupList(array $SecurityGroupList) 设置安全组列表，填写形如sg-xxx的安全组ID
 * @method integer getAutoRenewFlag() 获取自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
 * @method array getWeekly() 获取可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
 * @method void setWeekly(array $Weekly) 设置可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
 * @method string getStartTime() 获取可维护时间窗配置，每天可维护的开始时间
 * @method void setStartTime(string $StartTime) 设置可维护时间窗配置，每天可维护的开始时间
 * @method integer getSpan() 获取可维护时间窗配置，持续时间，单位：小时
 * @method void setSpan(integer $Span) 设置可维护时间窗配置，持续时间，单位：小时
 * @method boolean getMultiZones() 获取是否跨可用区部署，默认值为false
 * @method void setMultiZones(boolean $MultiZones) 设置是否跨可用区部署，默认值为false
 * @method array getResourceTags() 获取新建实例绑定的标签集合
 * @method void setResourceTags(array $ResourceTags) 设置新建实例绑定的标签集合
 * @method string getTimeZone() 获取系统时区，默认：China Standard Time
 * @method void setTimeZone(string $TimeZone) 设置系统时区，默认：China Standard Time
 * @method string getCollation() 获取系统字符集排序规则，默认：Chinese_PRC_CI_AS
 * @method void setCollation(string $Collation) 设置系统字符集排序规则，默认：Chinese_PRC_CI_AS
 * @method boolean getMultiNodes() 获取是否多节点架构，默认值为false
 * @method void setMultiNodes(boolean $MultiNodes) 设置是否多节点架构，默认值为false
 * @method array getDrZones() 获取备节点可用区，默认为空。如果是多节点架构时必传，并且当MultiZones=true时备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
 * @method void setDrZones(array $DrZones) 设置备节点可用区，默认为空。如果是多节点架构时必传，并且当MultiZones=true时备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
 */
class DescribeInstanceTradeParameterRequest extends AbstractModel
{
    /**
     * @var string 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     */
    public $Zone;

    /**
     * @var integer 实例核心数
     */
    public $Cpu;

    /**
     * @var integer 实例内存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer 实例磁盘大小，单位GB
     */
    public $Storage;

    /**
     * @var string 购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,BI-商业智能服务,cvmHA-新版高可用,cvmRO-新版只读，MultiHA-多节点，cvmMultiHA-云盘多节点
     */
    public $InstanceType;

    /**
     * @var string 购买实例的宿主机磁盘类型,CLOUD_HSSD-云服务器加强型SSD云盘，CLOUD_TSSD-云服务器极速型SSD云盘，CLOUD_BSSD-云服务器通用型SSD云盘
     */
    public $MachineType;

    /**
     * @var string 付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
     */
    public $InstanceChargeType;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 本次购买几个实例，默认值为1。取值不超过10
     */
    public $GoodsNum;

    /**
     * @var string sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
     */
    public $DBVersion;

    /**
     * @var string VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
     */
    public $SubnetId;

    /**
     * @var string VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
     */
    public $VpcId;

    /**
     * @var integer 购买实例周期，默认取值为1，表示一个月。取值不超过48
     */
    public $Period;

    /**
     * @var array 安全组列表，填写形如sg-xxx的安全组ID
     */
    public $SecurityGroupList;

    /**
     * @var integer 自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
     */
    public $AutoRenewFlag;

    /**
     * @var array 可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
     */
    public $Weekly;

    /**
     * @var string 可维护时间窗配置，每天可维护的开始时间
     */
    public $StartTime;

    /**
     * @var integer 可维护时间窗配置，持续时间，单位：小时
     */
    public $Span;

    /**
     * @var boolean 是否跨可用区部署，默认值为false
     */
    public $MultiZones;

    /**
     * @var array 新建实例绑定的标签集合
     */
    public $ResourceTags;

    /**
     * @var string 系统时区，默认：China Standard Time
     */
    public $TimeZone;

    /**
     * @var string 系统字符集排序规则，默认：Chinese_PRC_CI_AS
     */
    public $Collation;

    /**
     * @var boolean 是否多节点架构，默认值为false
     */
    public $MultiNodes;

    /**
     * @var array 备节点可用区，默认为空。如果是多节点架构时必传，并且当MultiZones=true时备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
     */
    public $DrZones;

    /**
     * @param string $Zone 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     * @param integer $Cpu 实例核心数
     * @param integer $Memory 实例内存大小，单位GB
     * @param integer $Storage 实例磁盘大小，单位GB
     * @param string $InstanceType 购买实例的类型 HA-高可用型(包括双机高可用，alwaysOn集群)，RO-只读副本型，SI-单节点型,BI-商业智能服务,cvmHA-新版高可用,cvmRO-新版只读，MultiHA-多节点，cvmMultiHA-云盘多节点
     * @param string $MachineType 购买实例的宿主机磁盘类型,CLOUD_HSSD-云服务器加强型SSD云盘，CLOUD_TSSD-云服务器极速型SSD云盘，CLOUD_BSSD-云服务器通用型SSD云盘
     * @param string $InstanceChargeType 付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。
     * @param integer $ProjectId 项目ID
     * @param integer $GoodsNum 本次购买几个实例，默认值为1。取值不超过10
     * @param string $DBVersion sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。
     * @param string $SubnetId VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
     * @param string $VpcId VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
     * @param integer $Period 购买实例周期，默认取值为1，表示一个月。取值不超过48
     * @param array $SecurityGroupList 安全组列表，填写形如sg-xxx的安全组ID
     * @param integer $AutoRenewFlag 自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。
     * @param array $Weekly 可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
     * @param string $StartTime 可维护时间窗配置，每天可维护的开始时间
     * @param integer $Span 可维护时间窗配置，持续时间，单位：小时
     * @param boolean $MultiZones 是否跨可用区部署，默认值为false
     * @param array $ResourceTags 新建实例绑定的标签集合
     * @param string $TimeZone 系统时区，默认：China Standard Time
     * @param string $Collation 系统字符集排序规则，默认：Chinese_PRC_CI_AS
     * @param boolean $MultiNodes 是否多节点架构，默认值为false
     * @param array $DrZones 备节点可用区，默认为空。如果是多节点架构时必传，并且当MultiZones=true时备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = $param["Weekly"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Span",$param) and $param["Span"] !== null) {
            $this->Span = $param["Span"];
        }

        if (array_key_exists("MultiZones",$param) and $param["MultiZones"] !== null) {
            $this->MultiZones = $param["MultiZones"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("MultiNodes",$param) and $param["MultiNodes"] !== null) {
            $this->MultiNodes = $param["MultiNodes"];
        }

        if (array_key_exists("DrZones",$param) and $param["DrZones"] !== null) {
            $this->DrZones = $param["DrZones"];
        }
    }
}
