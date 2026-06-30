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
 * CreateBasicDBInstances请求参数结构体
 *
 * @method string getZone() 获取<p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
 * @method void setZone(string $Zone) 设置<p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
 * @method integer getCpu() 获取<p>实例的CPU核心数</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例的CPU核心数</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位GB</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位GB</p>
 * @method integer getStorage() 获取<p>实例磁盘大小，单位GB</p>
 * @method void setStorage(integer $Storage) 设置<p>实例磁盘大小，单位GB</p>
 * @method string getSubnetId() 获取<p>VPC子网ID，形如subnet-bdoe83fa</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>VPC子网ID，形如subnet-bdoe83fa</p>
 * @method string getVpcId() 获取<p>VPC网络ID，形如vpc-dsp338hz</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC网络ID，形如vpc-dsp338hz</p>
 * @method string getMachineType() 获取<p>购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云硬盘，CLOUD_SSD-虚拟机SSD云硬盘,CLOUD_HSSD-虚拟机增强型SSD云硬盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
 * @method void setMachineType(string $MachineType) 设置<p>购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云硬盘，CLOUD_SSD-虚拟机SSD云硬盘,CLOUD_HSSD-虚拟机增强型SSD云硬盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
 * @method string getInstanceChargeType() 获取<p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method integer getGoodsNum() 获取<p>本次购买几个实例，默认值为1。取值不超过10</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>本次购买几个实例，默认值为1。取值不超过10</p>
 * @method string getDBVersion() 获取<p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
 * @method void setDBVersion(string $DBVersion) 设置<p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
 * @method integer getPeriod() 获取<p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
 * @method void setPeriod(integer $Period) 设置<p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
 * @method array getSecurityGroupList() 获取<p>安全组列表，填写形如sg-xxx的安全组ID</p>
 * @method void setSecurityGroupList(array $SecurityGroupList) 设置<p>安全组列表，填写形如sg-xxx的安全组ID</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
 * @method array getVoucherIds() 获取<p>代金券ID数组，目前单个订单只能使用一张</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID数组，目前单个订单只能使用一张</p>
 * @method array getWeekly() 获取<p>可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末</p>
 * @method void setWeekly(array $Weekly) 设置<p>可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末</p>
 * @method string getStartTime() 获取<p>可维护时间窗配置，每天可维护的开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>可维护时间窗配置，每天可维护的开始时间</p>
 * @method integer getSpan() 获取<p>可维护时间窗配置，持续时间，单位：小时</p>
 * @method void setSpan(integer $Span) 设置<p>可维护时间窗配置，持续时间，单位：小时</p>
 * @method array getResourceTags() 获取<p>新建实例绑定的标签集合</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>新建实例绑定的标签集合</p>
 * @method string getCollation() 获取<p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
 * @method void setCollation(string $Collation) 设置<p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
 * @method string getTimeZone() 获取<p>系统时区，默认：China Standard Time</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>系统时区，默认：China Standard Time</p>
 * @method integer getDiskEncryptFlag() 获取<p>磁盘加密标识，0-不加密，1-加密</p>
 * @method void setDiskEncryptFlag(integer $DiskEncryptFlag) 设置<p>磁盘加密标识，0-不加密，1-加密</p>
 * @method integer getThroughputPerformance() 获取<p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置<p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
 */
class CreateBasicDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
     */
    public $Zone;

    /**
     * @var integer <p>实例的CPU核心数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>实例内存大小，单位GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例磁盘大小，单位GB</p>
     */
    public $Storage;

    /**
     * @var string <p>VPC子网ID，形如subnet-bdoe83fa</p>
     */
    public $SubnetId;

    /**
     * @var string <p>VPC网络ID，形如vpc-dsp338hz</p>
     */
    public $VpcId;

    /**
     * @var string <p>购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云硬盘，CLOUD_SSD-虚拟机SSD云硬盘,CLOUD_HSSD-虚拟机增强型SSD云硬盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
     */
    public $MachineType;

    /**
     * @var string <p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>本次购买几个实例，默认值为1。取值不超过10</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
     */
    public $DBVersion;

    /**
     * @var integer <p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
     */
    public $Period;

    /**
     * @var array <p>安全组列表，填写形如sg-xxx的安全组ID</p>
     */
    public $SecurityGroupList;

    /**
     * @var integer <p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID数组，目前单个订单只能使用一张</p>
     */
    public $VoucherIds;

    /**
     * @var array <p>可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末</p>
     */
    public $Weekly;

    /**
     * @var string <p>可维护时间窗配置，每天可维护的开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>可维护时间窗配置，持续时间，单位：小时</p>
     */
    public $Span;

    /**
     * @var array <p>新建实例绑定的标签集合</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
     */
    public $Collation;

    /**
     * @var string <p>系统时区，默认：China Standard Time</p>
     */
    public $TimeZone;

    /**
     * @var integer <p>磁盘加密标识，0-不加密，1-加密</p>
     */
    public $DiskEncryptFlag;

    /**
     * @var integer <p>额外磁盘 IO 吞吐量，仅 CLOUD_HSSD 支持</p><p>取值范围：[0, 650]</p><p>单位：MB/s</p>
     */
    public $ThroughputPerformance;

    /**
     * @param string $Zone <p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
     * @param integer $Cpu <p>实例的CPU核心数</p>
     * @param integer $Memory <p>实例内存大小，单位GB</p>
     * @param integer $Storage <p>实例磁盘大小，单位GB</p>
     * @param string $SubnetId <p>VPC子网ID，形如subnet-bdoe83fa</p>
     * @param string $VpcId <p>VPC网络ID，形如vpc-dsp338hz</p>
     * @param string $MachineType <p>购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云硬盘，CLOUD_SSD-虚拟机SSD云硬盘,CLOUD_HSSD-虚拟机增强型SSD云硬盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
     * @param string $InstanceChargeType <p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param integer $GoodsNum <p>本次购买几个实例，默认值为1。取值不超过10</p>
     * @param string $DBVersion <p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
     * @param integer $Period <p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
     * @param array $SecurityGroupList <p>安全组列表，填写形如sg-xxx的安全组ID</p>
     * @param integer $AutoRenewFlag <p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
     * @param array $VoucherIds <p>代金券ID数组，目前单个订单只能使用一张</p>
     * @param array $Weekly <p>可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末</p>
     * @param string $StartTime <p>可维护时间窗配置，每天可维护的开始时间</p>
     * @param integer $Span <p>可维护时间窗配置，持续时间，单位：小时</p>
     * @param array $ResourceTags <p>新建实例绑定的标签集合</p>
     * @param string $Collation <p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
     * @param string $TimeZone <p>系统时区，默认：China Standard Time</p>
     * @param integer $DiskEncryptFlag <p>磁盘加密标识，0-不加密，1-加密</p>
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
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

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DiskEncryptFlag",$param) and $param["DiskEncryptFlag"] !== null) {
            $this->DiskEncryptFlag = $param["DiskEncryptFlag"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
