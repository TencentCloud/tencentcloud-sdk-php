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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT 实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getVersion() 获取实例版本
 * @method void setVersion(string $Version) 设置实例版本
 * @method string getInstanceType() 获取实例类型
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
 * @method string getInstanceStatus() 获取实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
 * @method integer getTopicNumLimit() 获取实例主题数上限
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置实例主题数上限
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method integer getTopicNum() 获取主题数量
 * @method void setTopicNum(integer $TopicNum) 设置主题数量
 * @method string getSkuCode() 获取商品规格
 * @method void setSkuCode(string $SkuCode) 设置商品规格
 * @method integer getTpsLimit() 获取弹性TPS限流值
 * @method void setTpsLimit(integer $TpsLimit) 设置弹性TPS限流值
 * @method integer getCreateTime() 获取创建时间，毫秒级时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒级时间戳
 * @method integer getMaxSubscriptionPerClient() 获取单客户端最大订阅数量
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) 设置单客户端最大订阅数量
 * @method integer getClientNumLimit() 获取客户端连接数上线
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置客户端连接数上线
 * @method integer getRenewFlag() 获取是否自动续费。仅包年包月集群生效。
1:自动续费
0:非自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费。仅包年包月集群生效。
1:自动续费
0:非自动续费
 * @method string getPayMode() 获取计费模式， POSTPAID，按量计费 PREPAID，包年包月
 * @method void setPayMode(string $PayMode) 设置计费模式， POSTPAID，按量计费 PREPAID，包年包月
 * @method integer getExpiryTime() 获取到期时间，毫秒级时间戳
 * @method void setExpiryTime(integer $ExpiryTime) 设置到期时间，毫秒级时间戳
 * @method integer getDestroyTime() 获取预销毁时间，毫秒级时间戳
 * @method void setDestroyTime(integer $DestroyTime) 设置预销毁时间，毫秒级时间戳
 * @method integer getAuthorizationPolicyLimit() 获取授权规则条数限制
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) 设置授权规则条数限制
 * @method integer getMaxCaNum() 获取最大ca配额
 * @method void setMaxCaNum(integer $MaxCaNum) 设置最大ca配额
 * @method integer getMaxSubscription() 获取最大订阅数
 * @method void setMaxSubscription(integer $MaxSubscription) 设置最大订阅数
 * @method integer getSharedSubscriptionGroupLimit() 获取共享订阅组数最大限制
 * @method void setSharedSubscriptionGroupLimit(integer $SharedSubscriptionGroupLimit) 设置共享订阅组数最大限制
 * @method integer getMaxTopicFilterPerSharedSubscriptionGroup() 获取单个共享订阅组TopicFilter数限制
 * @method void setMaxTopicFilterPerSharedSubscriptionGroup(integer $MaxTopicFilterPerSharedSubscriptionGroup) 设置单个共享订阅组TopicFilter数限制
 * @method integer getAutoSubscriptionPolicyLimit() 获取自动订阅规则条数限制
 * @method void setAutoSubscriptionPolicyLimit(integer $AutoSubscriptionPolicyLimit) 设置自动订阅规则条数限制
 * @method integer getMaxTopicFilterPerAutoSubscriptionPolicy() 获取单条自动订阅规则TopicFilter数限制
 * @method void setMaxTopicFilterPerAutoSubscriptionPolicy(integer $MaxTopicFilterPerAutoSubscriptionPolicy) 设置单条自动订阅规则TopicFilter数限制
 */
class MQTTInstanceItem extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例版本
     */
    public $Version;

    /**
     * @var string 实例类型
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
     */
    public $InstanceType;

    /**
     * @var string 实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
     */
    public $InstanceStatus;

    /**
     * @var integer 实例主题数上限
     */
    public $TopicNumLimit;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var integer 主题数量
     */
    public $TopicNum;

    /**
     * @var string 商品规格
     */
    public $SkuCode;

    /**
     * @var integer 弹性TPS限流值
     */
    public $TpsLimit;

    /**
     * @var integer 创建时间，毫秒级时间戳
     */
    public $CreateTime;

    /**
     * @var integer 单客户端最大订阅数量
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer 客户端连接数上线
     */
    public $ClientNumLimit;

    /**
     * @var integer 是否自动续费。仅包年包月集群生效。
1:自动续费
0:非自动续费
     */
    public $RenewFlag;

    /**
     * @var string 计费模式， POSTPAID，按量计费 PREPAID，包年包月
     */
    public $PayMode;

    /**
     * @var integer 到期时间，毫秒级时间戳
     */
    public $ExpiryTime;

    /**
     * @var integer 预销毁时间，毫秒级时间戳
     */
    public $DestroyTime;

    /**
     * @var integer 授权规则条数限制
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var integer 最大ca配额
     */
    public $MaxCaNum;

    /**
     * @var integer 最大订阅数
     */
    public $MaxSubscription;

    /**
     * @var integer 共享订阅组数最大限制
     */
    public $SharedSubscriptionGroupLimit;

    /**
     * @var integer 单个共享订阅组TopicFilter数限制
     */
    public $MaxTopicFilterPerSharedSubscriptionGroup;

    /**
     * @var integer 自动订阅规则条数限制
     */
    public $AutoSubscriptionPolicyLimit;

    /**
     * @var integer 单条自动订阅规则TopicFilter数限制
     */
    public $MaxTopicFilterPerAutoSubscriptionPolicy;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Version 实例版本
     * @param string $InstanceType 实例类型
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
     * @param string $InstanceStatus 实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
     * @param integer $TopicNumLimit 实例主题数上限
     * @param string $Remark 备注信息
     * @param integer $TopicNum 主题数量
     * @param string $SkuCode 商品规格
     * @param integer $TpsLimit 弹性TPS限流值
     * @param integer $CreateTime 创建时间，毫秒级时间戳
     * @param integer $MaxSubscriptionPerClient 单客户端最大订阅数量
     * @param integer $ClientNumLimit 客户端连接数上线
     * @param integer $RenewFlag 是否自动续费。仅包年包月集群生效。
1:自动续费
0:非自动续费
     * @param string $PayMode 计费模式， POSTPAID，按量计费 PREPAID，包年包月
     * @param integer $ExpiryTime 到期时间，毫秒级时间戳
     * @param integer $DestroyTime 预销毁时间，毫秒级时间戳
     * @param integer $AuthorizationPolicyLimit 授权规则条数限制
     * @param integer $MaxCaNum 最大ca配额
     * @param integer $MaxSubscription 最大订阅数
     * @param integer $SharedSubscriptionGroupLimit 共享订阅组数最大限制
     * @param integer $MaxTopicFilterPerSharedSubscriptionGroup 单个共享订阅组TopicFilter数限制
     * @param integer $AutoSubscriptionPolicyLimit 自动订阅规则条数限制
     * @param integer $MaxTopicFilterPerAutoSubscriptionPolicy 单条自动订阅规则TopicFilter数限制
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MaxSubscriptionPerClient",$param) and $param["MaxSubscriptionPerClient"] !== null) {
            $this->MaxSubscriptionPerClient = $param["MaxSubscriptionPerClient"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("AuthorizationPolicyLimit",$param) and $param["AuthorizationPolicyLimit"] !== null) {
            $this->AuthorizationPolicyLimit = $param["AuthorizationPolicyLimit"];
        }

        if (array_key_exists("MaxCaNum",$param) and $param["MaxCaNum"] !== null) {
            $this->MaxCaNum = $param["MaxCaNum"];
        }

        if (array_key_exists("MaxSubscription",$param) and $param["MaxSubscription"] !== null) {
            $this->MaxSubscription = $param["MaxSubscription"];
        }

        if (array_key_exists("SharedSubscriptionGroupLimit",$param) and $param["SharedSubscriptionGroupLimit"] !== null) {
            $this->SharedSubscriptionGroupLimit = $param["SharedSubscriptionGroupLimit"];
        }

        if (array_key_exists("MaxTopicFilterPerSharedSubscriptionGroup",$param) and $param["MaxTopicFilterPerSharedSubscriptionGroup"] !== null) {
            $this->MaxTopicFilterPerSharedSubscriptionGroup = $param["MaxTopicFilterPerSharedSubscriptionGroup"];
        }

        if (array_key_exists("AutoSubscriptionPolicyLimit",$param) and $param["AutoSubscriptionPolicyLimit"] !== null) {
            $this->AutoSubscriptionPolicyLimit = $param["AutoSubscriptionPolicyLimit"];
        }

        if (array_key_exists("MaxTopicFilterPerAutoSubscriptionPolicy",$param) and $param["MaxTopicFilterPerAutoSubscriptionPolicy"] !== null) {
            $this->MaxTopicFilterPerAutoSubscriptionPolicy = $param["MaxTopicFilterPerAutoSubscriptionPolicy"];
        }
    }
}
