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
 * CreateCloudReadOnlyDBInstances请求参数结构体
 *
 * @method string getInstanceId() 获取<p>主实例ID，格式如：mssql-3l3fgqn7</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>主实例ID，格式如：mssql-3l3fgqn7</p>
 * @method string getZone() 获取<p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
 * @method void setZone(string $Zone) 设置<p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
 * @method integer getReadOnlyGroupType() 获取<p>只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面</p>
 * @method void setReadOnlyGroupType(integer $ReadOnlyGroupType) 设置<p>只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位GB</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位GB</p>
 * @method integer getStorage() 获取<p>实例磁盘大小，单位GB</p>
 * @method void setStorage(integer $Storage) 设置<p>实例磁盘大小，单位GB</p>
 * @method integer getCpu() 获取<p>实例核心数</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例核心数</p>
 * @method string getMachineType() 获取<p>购买实例的宿主机磁盘类型,CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
 * @method void setMachineType(string $MachineType) 设置<p>购买实例的宿主机磁盘类型,CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
 * @method integer getReadOnlyGroupForcedUpgrade() 获取<p>0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。</p>
 * @method void setReadOnlyGroupForcedUpgrade(integer $ReadOnlyGroupForcedUpgrade) 设置<p>0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。</p>
 * @method string getReadOnlyGroupId() 获取<p>ReadOnlyGroupType=3时必填,已存在的只读组ID</p>
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置<p>ReadOnlyGroupType=3时必填,已存在的只读组ID</p>
 * @method string getReadOnlyGroupName() 获取<p>ReadOnlyGroupType=2时必填，新建的只读组名称</p>
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) 设置<p>ReadOnlyGroupType=2时必填，新建的只读组名称</p>
 * @method integer getReadOnlyGroupIsOfflineDelay() 获取<p>ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。</p>
 * @method void setReadOnlyGroupIsOfflineDelay(integer $ReadOnlyGroupIsOfflineDelay) 设置<p>ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。</p>
 * @method integer getReadOnlyGroupMaxDelayTime() 获取<p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。</p>
 * @method void setReadOnlyGroupMaxDelayTime(integer $ReadOnlyGroupMaxDelayTime) 设置<p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。</p>
 * @method integer getReadOnlyGroupMinInGroup() 获取<p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。</p>
 * @method void setReadOnlyGroupMinInGroup(integer $ReadOnlyGroupMinInGroup) 设置<p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。</p>
 * @method string getInstanceChargeType() 获取<p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
 * @method integer getGoodsNum() 获取<p>本次即将购买的实例数量，默认取值2。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>本次即将购买的实例数量，默认取值2。</p>
 * @method string getSubnetId() 获取<p>VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method string getVpcId() 获取<p>VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method integer getPeriod() 获取<p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
 * @method void setPeriod(integer $Period) 设置<p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
 * @method array getSecurityGroupList() 获取<p>安全组列表，填写形如sg-xxx的安全组ID</p>
 * @method void setSecurityGroupList(array $SecurityGroupList) 设置<p>安全组列表，填写形如sg-xxx的安全组ID</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
 * @method array getVoucherIds() 获取<p>代金券ID数组，目前单个订单只能使用一张</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID数组，目前单个订单只能使用一张</p>
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
class CreateCloudReadOnlyDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>主实例ID，格式如：mssql-3l3fgqn7</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
     */
    public $Zone;

    /**
     * @var integer <p>只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面</p>
     */
    public $ReadOnlyGroupType;

    /**
     * @var integer <p>实例内存大小，单位GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例磁盘大小，单位GB</p>
     */
    public $Storage;

    /**
     * @var integer <p>实例核心数</p>
     */
    public $Cpu;

    /**
     * @var string <p>购买实例的宿主机磁盘类型,CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
     */
    public $MachineType;

    /**
     * @var integer <p>0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。</p>
     */
    public $ReadOnlyGroupForcedUpgrade;

    /**
     * @var string <p>ReadOnlyGroupType=3时必填,已存在的只读组ID</p>
     */
    public $ReadOnlyGroupId;

    /**
     * @var string <p>ReadOnlyGroupType=2时必填，新建的只读组名称</p>
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer <p>ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。</p>
     */
    public $ReadOnlyGroupIsOfflineDelay;

    /**
     * @var integer <p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。</p>
     */
    public $ReadOnlyGroupMaxDelayTime;

    /**
     * @var integer <p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。</p>
     */
    public $ReadOnlyGroupMinInGroup;

    /**
     * @var string <p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>本次即将购买的实例数量，默认取值2。</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置</p>
     */
    public $SubnetId;

    /**
     * @var string <p>VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置</p>
     */
    public $VpcId;

    /**
     * @var integer <p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
     */
    public $Period;

    /**
     * @var array <p>安全组列表，填写形如sg-xxx的安全组ID</p>
     */
    public $SecurityGroupList;

    /**
     * @var integer <p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID数组，目前单个订单只能使用一张</p>
     */
    public $VoucherIds;

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
     * @param string $InstanceId <p>主实例ID，格式如：mssql-3l3fgqn7</p>
     * @param string $Zone <p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
     * @param integer $ReadOnlyGroupType <p>只读组类型选项，1-按照一个实例一个只读组的方式发货，2-新建只读组后发货，所有实例都在这个只读组下面， 3-发货的所有实例都在已有的只读组下面</p>
     * @param integer $Memory <p>实例内存大小，单位GB</p>
     * @param integer $Storage <p>实例磁盘大小，单位GB</p>
     * @param integer $Cpu <p>实例核心数</p>
     * @param string $MachineType <p>购买实例的宿主机磁盘类型,CLOUD_HSSD-虚拟机加强型SSD云盘，CLOUD_TSSD-虚拟机极速型SSD云盘，CLOUD_BSSD-虚拟机通用型SSD云盘</p>
     * @param integer $ReadOnlyGroupForcedUpgrade <p>0-默认不升级主实例，1-强制升级主实例完成ro部署；主实例为非集群版时需要填1，强制升级为集群版。填1 说明您已同意将主实例升级到集群版实例。</p>
     * @param string $ReadOnlyGroupId <p>ReadOnlyGroupType=3时必填,已存在的只读组ID</p>
     * @param string $ReadOnlyGroupName <p>ReadOnlyGroupType=2时必填，新建的只读组名称</p>
     * @param integer $ReadOnlyGroupIsOfflineDelay <p>ReadOnlyGroupType=2时必填，新建的只读组是否开启延迟剔除功能，1-开启，0-关闭。当只读副本与主实例延迟大于阈值后，自动剔除。</p>
     * @param integer $ReadOnlyGroupMaxDelayTime <p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除的阈值。</p>
     * @param integer $ReadOnlyGroupMinInGroup <p>ReadOnlyGroupType=2 且 ReadOnlyGroupIsOfflineDelay=1时必填，新建的只读组延迟剔除后至少保留只读副本的个数。</p>
     * @param string $InstanceChargeType <p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
     * @param integer $GoodsNum <p>本次即将购买的实例数量，默认取值2。</p>
     * @param string $SubnetId <p>VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置</p>
     * @param string $VpcId <p>VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置</p>
     * @param integer $Period <p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
     * @param array $SecurityGroupList <p>安全组列表，填写形如sg-xxx的安全组ID</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
     * @param array $VoucherIds <p>代金券ID数组，目前单个订单只能使用一张</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ReadOnlyGroupType",$param) and $param["ReadOnlyGroupType"] !== null) {
            $this->ReadOnlyGroupType = $param["ReadOnlyGroupType"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("ReadOnlyGroupForcedUpgrade",$param) and $param["ReadOnlyGroupForcedUpgrade"] !== null) {
            $this->ReadOnlyGroupForcedUpgrade = $param["ReadOnlyGroupForcedUpgrade"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("ReadOnlyGroupIsOfflineDelay",$param) and $param["ReadOnlyGroupIsOfflineDelay"] !== null) {
            $this->ReadOnlyGroupIsOfflineDelay = $param["ReadOnlyGroupIsOfflineDelay"];
        }

        if (array_key_exists("ReadOnlyGroupMaxDelayTime",$param) and $param["ReadOnlyGroupMaxDelayTime"] !== null) {
            $this->ReadOnlyGroupMaxDelayTime = $param["ReadOnlyGroupMaxDelayTime"];
        }

        if (array_key_exists("ReadOnlyGroupMinInGroup",$param) and $param["ReadOnlyGroupMinInGroup"] !== null) {
            $this->ReadOnlyGroupMinInGroup = $param["ReadOnlyGroupMinInGroup"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
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

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
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
