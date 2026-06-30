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
 * CreateDBInstances请求参数结构体
 *
 * @method string getZone() 获取<p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
 * @method void setZone(string $Zone) 设置<p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位GB</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位GB</p>
 * @method integer getStorage() 获取<p>实例磁盘大小，单位GB</p>
 * @method void setStorage(integer $Storage) 设置<p>实例磁盘大小，单位GB</p>
 * @method string getInstanceChargeType() 获取<p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method integer getGoodsNum() 获取<p>本次购买几个实例，默认值为1。取值不超过10</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>本次购买几个实例，默认值为1。取值不超过10</p>
 * @method string getSubnetId() 获取<p>VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method string getVpcId() 获取<p>VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置</p>
 * @method integer getPeriod() 获取<p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
 * @method void setPeriod(integer $Period) 设置<p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
 * @method array getVoucherIds() 获取<p>代金券ID数组，目前单个订单只能使用一张</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID数组，目前单个订单只能使用一张</p>
 * @method string getDBVersion() 获取<p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
 * @method void setDBVersion(string $DBVersion) 设置<p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
 * @method array getSecurityGroupList() 获取<p>安全组列表，填写形如sg-xxx的安全组ID</p>
 * @method void setSecurityGroupList(array $SecurityGroupList) 设置<p>安全组列表，填写形如sg-xxx的安全组ID</p>
 * @method array getWeekly() 获取<p>可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末</p>
 * @method void setWeekly(array $Weekly) 设置<p>可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末</p>
 * @method string getStartTime() 获取<p>可维护时间窗配置，每天可维护的开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>可维护时间窗配置，每天可维护的开始时间</p>
 * @method integer getSpan() 获取<p>可维护时间窗配置，持续时间，单位：小时</p>
 * @method void setSpan(integer $Span) 设置<p>可维护时间窗配置，持续时间，单位：小时</p>
 * @method string getHAType() 获取<p>购买高可用实例的类型：DUAL-双机高可用  CLUSTER-集群，默认值为DUAL</p>
 * @method void setHAType(string $HAType) 设置<p>购买高可用实例的类型：DUAL-双机高可用  CLUSTER-集群，默认值为DUAL</p>
 * @method boolean getMultiZones() 获取<p>是否跨可用区部署，默认值为false</p>
 * @method void setMultiZones(boolean $MultiZones) 设置<p>是否跨可用区部署，默认值为false</p>
 * @method array getResourceTags() 获取<p>新建实例绑定的标签集合</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>新建实例绑定的标签集合</p>
 * @method string getCollation() 获取<p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
 * @method void setCollation(string $Collation) 设置<p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
 * @method string getTimeZone() 获取<p>系统时区，默认：China Standard Time</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>系统时区，默认：China Standard Time</p>
 * @method boolean getMultiNodes() 获取<p>是否多节点架构实例，默认值为false。当MultiNodes = true时，参数MultiZones必须取值为true。</p>
 * @method void setMultiNodes(boolean $MultiNodes) 设置<p>是否多节点架构实例，默认值为false。当MultiNodes = true时，参数MultiZones必须取值为true。</p>
 * @method array getDrZones() 获取<p>备节点可用区，默认为空。当MultiNodes = true时，主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
 * @method void setDrZones(array $DrZones) 设置<p>备节点可用区，默认为空。当MultiNodes = true时，主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
 * @method string getAvailabilityStrategy() 获取<p>可用性策略</p><p>枚举值：</p><ul><li>Async： 可用性优先（异步传输）</li><li>Sync： 可靠性优先（同步传输）</li></ul><p>默认值：Async</p><p>仅 AlwaysOn 双节点架构生效，单节点/多节点/MIRROR 架构忽略此参数</p>
 * @method void setAvailabilityStrategy(string $AvailabilityStrategy) 设置<p>可用性策略</p><p>枚举值：</p><ul><li>Async： 可用性优先（异步传输）</li><li>Sync： 可靠性优先（同步传输）</li></ul><p>默认值：Async</p><p>仅 AlwaysOn 双节点架构生效，单节点/多节点/MIRROR 架构忽略此参数</p>
 */
class CreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
     */
    public $Zone;

    /**
     * @var integer <p>实例内存大小，单位GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例磁盘大小，单位GB</p>
     */
    public $Storage;

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
     * @var integer <p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID数组，目前单个订单只能使用一张</p>
     */
    public $VoucherIds;

    /**
     * @var string <p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
     */
    public $DBVersion;

    /**
     * @var integer <p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
     */
    public $AutoRenewFlag;

    /**
     * @var array <p>安全组列表，填写形如sg-xxx的安全组ID</p>
     */
    public $SecurityGroupList;

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
     * @var string <p>购买高可用实例的类型：DUAL-双机高可用  CLUSTER-集群，默认值为DUAL</p>
     */
    public $HAType;

    /**
     * @var boolean <p>是否跨可用区部署，默认值为false</p>
     */
    public $MultiZones;

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
     * @var boolean <p>是否多节点架构实例，默认值为false。当MultiNodes = true时，参数MultiZones必须取值为true。</p>
     */
    public $MultiNodes;

    /**
     * @var array <p>备节点可用区，默认为空。当MultiNodes = true时，主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
     */
    public $DrZones;

    /**
     * @var string <p>可用性策略</p><p>枚举值：</p><ul><li>Async： 可用性优先（异步传输）</li><li>Sync： 可靠性优先（同步传输）</li></ul><p>默认值：Async</p><p>仅 AlwaysOn 双节点架构生效，单节点/多节点/MIRROR 架构忽略此参数</p>
     */
    public $AvailabilityStrategy;

    /**
     * @param string $Zone <p>实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取</p>
     * @param integer $Memory <p>实例内存大小，单位GB</p>
     * @param integer $Storage <p>实例磁盘大小，单位GB</p>
     * @param string $InstanceChargeType <p>付费模式，取值支持 PREPAID（预付费），POSTPAID（后付费）。</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param integer $GoodsNum <p>本次购买几个实例，默认值为1。取值不超过10</p>
     * @param string $SubnetId <p>VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置</p>
     * @param string $VpcId <p>VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置</p>
     * @param integer $Period <p>购买实例周期，默认取值为1，表示一个月。取值不超过48</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券；1 - 是，0 - 否，默认不使用</p>
     * @param array $VoucherIds <p>代金券ID数组，目前单个订单只能使用一张</p>
     * @param string $DBVersion <p>sqlserver版本，目前所有支持的版本有：2008R2 (SQL Server 2008 R2 Enterprise)，2012SP3 (SQL Server 2012 Enterprise)，201202 (SQL Server 2012 Standard)，2014SP2 (SQL Server 2014 Enterprise)，201402 (SQL Server 2014 Standard)，2016SP1 (SQL Server 2016 Enterprise)，201602 (SQL Server 2016 Standard)，2017 (SQL Server 2017 Enterprise)，201702 (SQL Server 2017 Standard)，2019 (SQL Server 2019 Enterprise)，201902 (SQL Server 2019 Standard)。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本2008R2。</p>
     * @param integer $AutoRenewFlag <p>自动续费标志：0-正常续费  1-自动续费，默认为1自动续费。只在购买预付费实例时有效。</p>
     * @param array $SecurityGroupList <p>安全组列表，填写形如sg-xxx的安全组ID</p>
     * @param array $Weekly <p>可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末</p>
     * @param string $StartTime <p>可维护时间窗配置，每天可维护的开始时间</p>
     * @param integer $Span <p>可维护时间窗配置，持续时间，单位：小时</p>
     * @param string $HAType <p>购买高可用实例的类型：DUAL-双机高可用  CLUSTER-集群，默认值为DUAL</p>
     * @param boolean $MultiZones <p>是否跨可用区部署，默认值为false</p>
     * @param array $ResourceTags <p>新建实例绑定的标签集合</p>
     * @param string $Collation <p>系统字符集排序规则，默认：Chinese_PRC_CI_AS</p>
     * @param string $TimeZone <p>系统时区，默认：China Standard Time</p>
     * @param boolean $MultiNodes <p>是否多节点架构实例，默认值为false。当MultiNodes = true时，参数MultiZones必须取值为true。</p>
     * @param array $DrZones <p>备节点可用区，默认为空。当MultiNodes = true时，主节点和备节点可用区不能全部相同。备机可用区集合最小为2个，最大不超过5个。</p>
     * @param string $AvailabilityStrategy <p>可用性策略</p><p>枚举值：</p><ul><li>Async： 可用性优先（异步传输）</li><li>Sync： 可靠性优先（同步传输）</li></ul><p>默认值：Async</p><p>仅 AlwaysOn 双节点架构生效，单节点/多节点/MIRROR 架构忽略此参数</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
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

        if (array_key_exists("HAType",$param) and $param["HAType"] !== null) {
            $this->HAType = $param["HAType"];
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

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("MultiNodes",$param) and $param["MultiNodes"] !== null) {
            $this->MultiNodes = $param["MultiNodes"];
        }

        if (array_key_exists("DrZones",$param) and $param["DrZones"] !== null) {
            $this->DrZones = $param["DrZones"];
        }

        if (array_key_exists("AvailabilityStrategy",$param) and $param["AvailabilityStrategy"] !== null) {
            $this->AvailabilityStrategy = $param["AvailabilityStrategy"];
        }
    }
}
