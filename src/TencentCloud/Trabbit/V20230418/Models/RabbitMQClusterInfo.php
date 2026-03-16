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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbiteMQ集群基本信息
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getRegion() 获取<p>地域信息</p>
 * @method void setRegion(string $Region) 设置<p>地域信息</p>
 * @method integer getCreateTime() 获取<p>创建时间，毫秒为单位</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，毫秒为单位</p>
 * @method string getRemark() 获取<p>集群说明信息</p>
 * @method void setRemark(string $Remark) 设置<p>集群说明信息</p>
 * @method array getVpcs() 获取<p>VPC及网络信息</p>
 * @method void setVpcs(array $Vpcs) 设置<p>VPC及网络信息</p>
 * @method array getZoneIds() 获取<p>可用区信息</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>可用区信息</p>
 * @method integer getVirtualHostNumber() 获取<p>虚拟主机数量</p>
 * @method void setVirtualHostNumber(integer $VirtualHostNumber) 设置<p>虚拟主机数量</p>
 * @method integer getQueueNumber() 获取<p>队列数量</p>
 * @method void setQueueNumber(integer $QueueNumber) 设置<p>队列数量</p>
 * @method float getMessagePublishRate() 获取<p>每秒生产消息数 单位：条/秒</p>
 * @method void setMessagePublishRate(float $MessagePublishRate) 设置<p>每秒生产消息数 单位：条/秒</p>
 * @method integer getMessageStackNumber() 获取<p>堆积消息数 单位：条</p>
 * @method void setMessageStackNumber(integer $MessageStackNumber) 设置<p>堆积消息数 单位：条</p>
 * @method integer getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>过期时间</p>
 * @method integer getChannelNumber() 获取<p>Channel数量</p>
 * @method void setChannelNumber(integer $ChannelNumber) 设置<p>Channel数量</p>
 * @method integer getConnectionNumber() 获取<p>Connection数量</p>
 * @method void setConnectionNumber(integer $ConnectionNumber) 设置<p>Connection数量</p>
 * @method integer getConsumerNumber() 获取<p>Consumer数量</p>
 * @method void setConsumerNumber(integer $ConsumerNumber) 设置<p>Consumer数量</p>
 * @method integer getExchangeNumber() 获取<p>Exchang数量</p>
 * @method void setExchangeNumber(integer $ExchangeNumber) 设置<p>Exchang数量</p>
 * @method string getExceptionInformation() 获取<p>集群异常信息</p>
 * @method void setExceptionInformation(string $ExceptionInformation) 设置<p>集群异常信息</p>
 * @method integer getClusterStatus() 获取<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
 * @method void setClusterStatus(integer $ClusterStatus) 设置<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method integer getMirrorQueuePolicyFlag() 获取<p>是否开启镜像队列策略。1表示开启，0表示没开启。</p>
 * @method void setMirrorQueuePolicyFlag(integer $MirrorQueuePolicyFlag) 设置<p>是否开启镜像队列策略。1表示开启，0表示没开启。</p>
 * @method float getMessageConsumeRate() 获取<p>每秒消费消息数 单位：条/秒</p>
 * @method void setMessageConsumeRate(float $MessageConsumeRate) 设置<p>每秒消费消息数 单位：条/秒</p>
 * @method string getClusterVersion() 获取<p>集群版本信息</p>
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>集群版本信息</p>
 * @method integer getPayMode() 获取<p>计费模式，0-后付费，1-预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>计费模式，0-后付费，1-预付费</p>
 * @method integer getInstanceType() 获取<p>集群类型</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>集群类型</p>
 * @method integer getMessageRetainTime() 获取<p>消息保留时间，单位小时</p>
 * @method void setMessageRetainTime(integer $MessageRetainTime) 设置<p>消息保留时间，单位小时</p>
 * @method float getSendReceiveRatio() 获取<p>发送消息流量比例</p>
 * @method void setSendReceiveRatio(float $SendReceiveRatio) 设置<p>发送消息流量比例</p>
 * @method integer getTraceTime() 获取<p>消息轨迹保留时间，单位小时</p>
 * @method void setTraceTime(integer $TraceTime) 设置<p>消息轨迹保留时间，单位小时</p>
 * @method array getTags() 获取<p>实例标签列表</p>
 * @method void setTags(array $Tags) 设置<p>实例标签列表</p>
 * @method boolean getElasticTpsFlag() 获取<p>是否开启弹性tps</p>
 * @method void setElasticTpsFlag(boolean $ElasticTpsFlag) 设置<p>是否开启弹性tps</p>
 * @method float getElasticTpsRatio() 获取<p>弹性tps倍数，默认弹1倍</p>
 * @method void setElasticTpsRatio(float $ElasticTpsRatio) 设置<p>弹性tps倍数，默认弹1倍</p>
 * @method integer getMaxRedeliverCount() 获取<p>最大重投次数</p>
 * @method void setMaxRedeliverCount(integer $MaxRedeliverCount) 设置<p>最大重投次数</p>
 * @method integer getConsumerTimeout() 获取<p>消费超时时间，单位min</p>
 * @method void setConsumerTimeout(integer $ConsumerTimeout) 设置<p>消费超时时间，单位min</p>
 */
class RabbitMQClusterInfo extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>地域信息</p>
     */
    public $Region;

    /**
     * @var integer <p>创建时间，毫秒为单位</p>
     */
    public $CreateTime;

    /**
     * @var string <p>集群说明信息</p>
     */
    public $Remark;

    /**
     * @var array <p>VPC及网络信息</p>
     */
    public $Vpcs;

    /**
     * @var array <p>可用区信息</p>
     */
    public $ZoneIds;

    /**
     * @var integer <p>虚拟主机数量</p>
     */
    public $VirtualHostNumber;

    /**
     * @var integer <p>队列数量</p>
     */
    public $QueueNumber;

    /**
     * @var float <p>每秒生产消息数 单位：条/秒</p>
     */
    public $MessagePublishRate;

    /**
     * @var integer <p>堆积消息数 单位：条</p>
     */
    public $MessageStackNumber;

    /**
     * @var integer <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>Channel数量</p>
     */
    public $ChannelNumber;

    /**
     * @var integer <p>Connection数量</p>
     */
    public $ConnectionNumber;

    /**
     * @var integer <p>Consumer数量</p>
     */
    public $ConsumerNumber;

    /**
     * @var integer <p>Exchang数量</p>
     */
    public $ExchangeNumber;

    /**
     * @var string <p>集群异常信息</p>
     */
    public $ExceptionInformation;

    /**
     * @var integer <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
     */
    public $ClusterStatus;

    /**
     * @var integer <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>是否开启镜像队列策略。1表示开启，0表示没开启。</p>
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @var float <p>每秒消费消息数 单位：条/秒</p>
     */
    public $MessageConsumeRate;

    /**
     * @var string <p>集群版本信息</p>
     */
    public $ClusterVersion;

    /**
     * @var integer <p>计费模式，0-后付费，1-预付费</p>
     */
    public $PayMode;

    /**
     * @var integer <p>集群类型</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>消息保留时间，单位小时</p>
     */
    public $MessageRetainTime;

    /**
     * @var float <p>发送消息流量比例</p>
     */
    public $SendReceiveRatio;

    /**
     * @var integer <p>消息轨迹保留时间，单位小时</p>
     */
    public $TraceTime;

    /**
     * @var array <p>实例标签列表</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否开启弹性tps</p>
     */
    public $ElasticTpsFlag;

    /**
     * @var float <p>弹性tps倍数，默认弹1倍</p>
     */
    public $ElasticTpsRatio;

    /**
     * @var integer <p>最大重投次数</p>
     */
    public $MaxRedeliverCount;

    /**
     * @var integer <p>消费超时时间，单位min</p>
     */
    public $ConsumerTimeout;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $Region <p>地域信息</p>
     * @param integer $CreateTime <p>创建时间，毫秒为单位</p>
     * @param string $Remark <p>集群说明信息</p>
     * @param array $Vpcs <p>VPC及网络信息</p>
     * @param array $ZoneIds <p>可用区信息</p>
     * @param integer $VirtualHostNumber <p>虚拟主机数量</p>
     * @param integer $QueueNumber <p>队列数量</p>
     * @param float $MessagePublishRate <p>每秒生产消息数 单位：条/秒</p>
     * @param integer $MessageStackNumber <p>堆积消息数 单位：条</p>
     * @param integer $ExpireTime <p>过期时间</p>
     * @param integer $ChannelNumber <p>Channel数量</p>
     * @param integer $ConnectionNumber <p>Connection数量</p>
     * @param integer $ConsumerNumber <p>Consumer数量</p>
     * @param integer $ExchangeNumber <p>Exchang数量</p>
     * @param string $ExceptionInformation <p>集群异常信息</p>
     * @param integer $ClusterStatus <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
     * @param integer $AutoRenewFlag <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     * @param integer $MirrorQueuePolicyFlag <p>是否开启镜像队列策略。1表示开启，0表示没开启。</p>
     * @param float $MessageConsumeRate <p>每秒消费消息数 单位：条/秒</p>
     * @param string $ClusterVersion <p>集群版本信息</p>
     * @param integer $PayMode <p>计费模式，0-后付费，1-预付费</p>
     * @param integer $InstanceType <p>集群类型</p>
     * @param integer $MessageRetainTime <p>消息保留时间，单位小时</p>
     * @param float $SendReceiveRatio <p>发送消息流量比例</p>
     * @param integer $TraceTime <p>消息轨迹保留时间，单位小时</p>
     * @param array $Tags <p>实例标签列表</p>
     * @param boolean $ElasticTpsFlag <p>是否开启弹性tps</p>
     * @param float $ElasticTpsRatio <p>弹性tps倍数，默认弹1倍</p>
     * @param integer $MaxRedeliverCount <p>最大重投次数</p>
     * @param integer $ConsumerTimeout <p>消费超时时间，单位min</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcEndpointInfo();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("VirtualHostNumber",$param) and $param["VirtualHostNumber"] !== null) {
            $this->VirtualHostNumber = $param["VirtualHostNumber"];
        }

        if (array_key_exists("QueueNumber",$param) and $param["QueueNumber"] !== null) {
            $this->QueueNumber = $param["QueueNumber"];
        }

        if (array_key_exists("MessagePublishRate",$param) and $param["MessagePublishRate"] !== null) {
            $this->MessagePublishRate = $param["MessagePublishRate"];
        }

        if (array_key_exists("MessageStackNumber",$param) and $param["MessageStackNumber"] !== null) {
            $this->MessageStackNumber = $param["MessageStackNumber"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChannelNumber",$param) and $param["ChannelNumber"] !== null) {
            $this->ChannelNumber = $param["ChannelNumber"];
        }

        if (array_key_exists("ConnectionNumber",$param) and $param["ConnectionNumber"] !== null) {
            $this->ConnectionNumber = $param["ConnectionNumber"];
        }

        if (array_key_exists("ConsumerNumber",$param) and $param["ConsumerNumber"] !== null) {
            $this->ConsumerNumber = $param["ConsumerNumber"];
        }

        if (array_key_exists("ExchangeNumber",$param) and $param["ExchangeNumber"] !== null) {
            $this->ExchangeNumber = $param["ExchangeNumber"];
        }

        if (array_key_exists("ExceptionInformation",$param) and $param["ExceptionInformation"] !== null) {
            $this->ExceptionInformation = $param["ExceptionInformation"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("MirrorQueuePolicyFlag",$param) and $param["MirrorQueuePolicyFlag"] !== null) {
            $this->MirrorQueuePolicyFlag = $param["MirrorQueuePolicyFlag"];
        }

        if (array_key_exists("MessageConsumeRate",$param) and $param["MessageConsumeRate"] !== null) {
            $this->MessageConsumeRate = $param["MessageConsumeRate"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MessageRetainTime",$param) and $param["MessageRetainTime"] !== null) {
            $this->MessageRetainTime = $param["MessageRetainTime"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("TraceTime",$param) and $param["TraceTime"] !== null) {
            $this->TraceTime = $param["TraceTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RabbitMQServerlessTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ElasticTpsFlag",$param) and $param["ElasticTpsFlag"] !== null) {
            $this->ElasticTpsFlag = $param["ElasticTpsFlag"];
        }

        if (array_key_exists("ElasticTpsRatio",$param) and $param["ElasticTpsRatio"] !== null) {
            $this->ElasticTpsRatio = $param["ElasticTpsRatio"];
        }

        if (array_key_exists("MaxRedeliverCount",$param) and $param["MaxRedeliverCount"] !== null) {
            $this->MaxRedeliverCount = $param["MaxRedeliverCount"];
        }

        if (array_key_exists("ConsumerTimeout",$param) and $param["ConsumerTimeout"] !== null) {
            $this->ConsumerTimeout = $param["ConsumerTimeout"];
        }
    }
}
