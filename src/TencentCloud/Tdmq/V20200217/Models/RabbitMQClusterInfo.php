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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ 集群基本信息
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method integer getCreateTime() 获取创建时间，毫秒为单位。unix 时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒为单位。unix 时间戳
 * @method string getRemark() 获取集群说明信息
 * @method void setRemark(string $Remark) 设置集群说明信息
 * @method array getVpcs() 获取VPC及网络信息
 * @method void setVpcs(array $Vpcs) 设置VPC及网络信息
 * @method array getZoneIds() 获取可用区信息
 * @method void setZoneIds(array $ZoneIds) 设置可用区信息
 * @method integer getVirtualHostNumber() 获取虚拟主机数量
 * @method void setVirtualHostNumber(integer $VirtualHostNumber) 设置虚拟主机数量
 * @method integer getQueueNumber() 获取队列数量
 * @method void setQueueNumber(integer $QueueNumber) 设置队列数量
 * @method float getMessagePublishRate() 获取每秒生产消息数 单位：条/秒
 * @method void setMessagePublishRate(float $MessagePublishRate) 设置每秒生产消息数 单位：条/秒
 * @method integer getMessageStackNumber() 获取堆积消息数 单位：条
 * @method void setMessageStackNumber(integer $MessageStackNumber) 设置堆积消息数 单位：条
 * @method integer getExpireTime() 获取实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
 * @method integer getChannelNumber() 获取Channel数量
 * @method void setChannelNumber(integer $ChannelNumber) 设置Channel数量
 * @method integer getConnectionNumber() 获取Connection数量
 * @method void setConnectionNumber(integer $ConnectionNumber) 设置Connection数量
 * @method integer getConsumerNumber() 获取Consumer数量
 * @method void setConsumerNumber(integer $ConsumerNumber) 设置Consumer数量
 * @method integer getExchangeNumber() 获取Exchang数量
 * @method void setExchangeNumber(integer $ExchangeNumber) 设置Exchang数量
 * @method string getExceptionInformation() 获取集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionInformation(string $ExceptionInformation) 设置集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
 * @method void setClusterStatus(integer $ClusterStatus) 设置实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
 * @method integer getAutoRenewFlag() 获取自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method integer getMirrorQueuePolicyFlag() 获取是否开启镜像队列策略。1表示开启，0表示没开启。
 * @method void setMirrorQueuePolicyFlag(integer $MirrorQueuePolicyFlag) 设置是否开启镜像队列策略。1表示开启，0表示没开启。
 * @method float getMessageConsumeRate() 获取每秒消费消息数 单位：条/秒
 * @method void setMessageConsumeRate(float $MessageConsumeRate) 设置每秒消费消息数 单位：条/秒
 * @method string getClusterVersion() 获取集群版本信息
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本信息
 * @method integer getPayMode() 获取计费模式，0-后付费，1-预付费
 * @method void setPayMode(integer $PayMode) 设置计费模式，0-后付费，1-预付费
 * @method integer getInstanceType() 获取实例类型，0 专享版、1 Serverless 版
 * @method void setInstanceType(integer $InstanceType) 设置实例类型，0 专享版、1 Serverless 版
 * @method integer getIsolatedTime() 获取开始隔离时间。unix 时间戳
 * @method void setIsolatedTime(integer $IsolatedTime) 设置开始隔离时间。unix 时间戳
 * @method boolean getContainer() 获取是否为容器实例，默认 true
 * @method void setContainer(boolean $Container) 设置是否为容器实例，默认 true
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method boolean getEnableDeletionProtection() 获取是否已开启删除保护
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置是否已开启删除保护
 * @method boolean getMirroredQueueRisk() 获取是否有vhost未开启镜像队列风险
 * @method void setMirroredQueueRisk(boolean $MirroredQueueRisk) 设置是否有vhost未开启镜像队列风险
 * @method boolean getEnableRiskWarning() 获取是否提示风险
 * @method void setEnableRiskWarning(boolean $EnableRiskWarning) 设置是否提示风险
 * @method integer getConsumeTimeout() 获取消费超时时间
 * @method void setConsumeTimeout(integer $ConsumeTimeout) 设置消费超时时间
 * @method integer getChannelMax() 获取最大Channel数
 * @method void setChannelMax(integer $ChannelMax) 设置最大Channel数
 */
class RabbitMQClusterInfo extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var integer 创建时间，毫秒为单位。unix 时间戳
     */
    public $CreateTime;

    /**
     * @var string 集群说明信息
     */
    public $Remark;

    /**
     * @var array VPC及网络信息
     */
    public $Vpcs;

    /**
     * @var array 可用区信息
     */
    public $ZoneIds;

    /**
     * @var integer 虚拟主机数量
     */
    public $VirtualHostNumber;

    /**
     * @var integer 队列数量
     */
    public $QueueNumber;

    /**
     * @var float 每秒生产消息数 单位：条/秒
     */
    public $MessagePublishRate;

    /**
     * @var integer 堆积消息数 单位：条
     */
    public $MessageStackNumber;

    /**
     * @var integer 实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
     */
    public $ExpireTime;

    /**
     * @var integer Channel数量
     */
    public $ChannelNumber;

    /**
     * @var integer Connection数量
     */
    public $ConnectionNumber;

    /**
     * @var integer Consumer数量
     */
    public $ConsumerNumber;

    /**
     * @var integer Exchang数量
     */
    public $ExchangeNumber;

    /**
     * @var string 集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionInformation;

    /**
     * @var integer 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
     */
    public $ClusterStatus;

    /**
     * @var integer 自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否开启镜像队列策略。1表示开启，0表示没开启。
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @var float 每秒消费消息数 单位：条/秒
     */
    public $MessageConsumeRate;

    /**
     * @var string 集群版本信息
     */
    public $ClusterVersion;

    /**
     * @var integer 计费模式，0-后付费，1-预付费
     */
    public $PayMode;

    /**
     * @var integer 实例类型，0 专享版、1 Serverless 版
     */
    public $InstanceType;

    /**
     * @var integer 开始隔离时间。unix 时间戳
     */
    public $IsolatedTime;

    /**
     * @var boolean 是否为容器实例，默认 true
     */
    public $Container;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var boolean 是否已开启删除保护
     */
    public $EnableDeletionProtection;

    /**
     * @var boolean 是否有vhost未开启镜像队列风险
     */
    public $MirroredQueueRisk;

    /**
     * @var boolean 是否提示风险
     */
    public $EnableRiskWarning;

    /**
     * @var integer 消费超时时间
     */
    public $ConsumeTimeout;

    /**
     * @var integer 最大Channel数
     */
    public $ChannelMax;

    /**
     * @param string $ClusterId 集群 ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域信息
     * @param integer $CreateTime 创建时间，毫秒为单位。unix 时间戳
     * @param string $Remark 集群说明信息
     * @param array $Vpcs VPC及网络信息
     * @param array $ZoneIds 可用区信息
     * @param integer $VirtualHostNumber 虚拟主机数量
     * @param integer $QueueNumber 队列数量
     * @param float $MessagePublishRate 每秒生产消息数 单位：条/秒
     * @param integer $MessageStackNumber 堆积消息数 单位：条
     * @param integer $ExpireTime 实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
     * @param integer $ChannelNumber Channel数量
     * @param integer $ConnectionNumber Connection数量
     * @param integer $ConsumerNumber Consumer数量
     * @param integer $ExchangeNumber Exchang数量
     * @param string $ExceptionInformation 集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
     * @param integer $AutoRenewFlag 自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
     * @param integer $MirrorQueuePolicyFlag 是否开启镜像队列策略。1表示开启，0表示没开启。
     * @param float $MessageConsumeRate 每秒消费消息数 单位：条/秒
     * @param string $ClusterVersion 集群版本信息
     * @param integer $PayMode 计费模式，0-后付费，1-预付费
     * @param integer $InstanceType 实例类型，0 专享版、1 Serverless 版
     * @param integer $IsolatedTime 开始隔离时间。unix 时间戳
     * @param boolean $Container 是否为容器实例，默认 true
     * @param array $Tags 标签列表
     * @param boolean $EnableDeletionProtection 是否已开启删除保护
     * @param boolean $MirroredQueueRisk 是否有vhost未开启镜像队列风险
     * @param boolean $EnableRiskWarning 是否提示风险
     * @param integer $ConsumeTimeout 消费超时时间
     * @param integer $ChannelMax 最大Channel数
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

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }

        if (array_key_exists("MirroredQueueRisk",$param) and $param["MirroredQueueRisk"] !== null) {
            $this->MirroredQueueRisk = $param["MirroredQueueRisk"];
        }

        if (array_key_exists("EnableRiskWarning",$param) and $param["EnableRiskWarning"] !== null) {
            $this->EnableRiskWarning = $param["EnableRiskWarning"];
        }

        if (array_key_exists("ConsumeTimeout",$param) and $param["ConsumeTimeout"] !== null) {
            $this->ConsumeTimeout = $param["ConsumeTimeout"];
        }

        if (array_key_exists("ChannelMax",$param) and $param["ChannelMax"] !== null) {
            $this->ChannelMax = $param["ChannelMax"];
        }
    }
}
