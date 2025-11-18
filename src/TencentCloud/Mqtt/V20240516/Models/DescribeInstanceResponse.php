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
 * DescribeInstance返回参数结构体
 *
 * @method string getInstanceType() 获取实例类型
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getTopicNum() 获取主题数量
 * @method void setTopicNum(integer $TopicNum) 设置主题数量
 * @method integer getTopicNumLimit() 获取实例最大主题数量
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置实例最大主题数量
 * @method integer getTpsLimit() 获取TPS限流值
 * @method void setTpsLimit(integer $TpsLimit) 设置TPS限流值
 * @method integer getCreatedTime() 获取创建时间，秒为单位
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，秒为单位
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getInstanceStatus() 获取实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中
 * @method string getSkuCode() 获取实例规格
 * @method void setSkuCode(string $SkuCode) 设置实例规格
 * @method integer getMaxSubscriptionPerClient() 获取单客户端最大订阅数
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) 设置单客户端最大订阅数
 * @method integer getAuthorizationPolicyLimit() 获取授权规则条数
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) 设置授权规则条数
 * @method integer getClientNumLimit() 获取客户端数量上限
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置客户端数量上限
 * @method string getDeviceCertificateProvisionType() 获取客户端证书注册方式：
JITP：自动注册
API：通过API手动注册
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) 设置客户端证书注册方式：
JITP：自动注册
API：通过API手动注册
 * @method boolean getAutomaticActivation() 获取自动注册设备证书时是否自动激活
 * @method void setAutomaticActivation(boolean $AutomaticActivation) 设置自动注册设备证书时是否自动激活
 * @method integer getRenewFlag() 获取是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费
 * @method string getPayMode() 获取计费模式， POSTPAID，按量计费 PREPAID，包年包月
 * @method void setPayMode(string $PayMode) 设置计费模式， POSTPAID，按量计费 PREPAID，包年包月
 * @method integer getExpiryTime() 获取到期时间，毫秒级时间戳
 * @method void setExpiryTime(integer $ExpiryTime) 设置到期时间，毫秒级时间戳
 * @method integer getDestroyTime() 获取预销毁时间，毫秒级时间戳
 * @method void setDestroyTime(integer $DestroyTime) 设置预销毁时间，毫秒级时间戳
 * @method string getX509Mode() 获取TLS,单向认证    mTLS,双向认证    BYOC;一机一证
 * @method void setX509Mode(string $X509Mode) 设置TLS,单向认证    mTLS,双向认证    BYOC;一机一证
 * @method integer getMaxCaNum() 获取最大Ca配额
 * @method void setMaxCaNum(integer $MaxCaNum) 设置最大Ca配额
 * @method string getRegistrationCode() 获取证书注册码
 * @method void setRegistrationCode(string $RegistrationCode) 设置证书注册码
 * @method integer getMaxSubscription() 获取集群最大订阅数
 * @method void setMaxSubscription(integer $MaxSubscription) 设置集群最大订阅数
 * @method boolean getAuthorizationPolicy() 获取授权策略开关
 * @method void setAuthorizationPolicy(boolean $AuthorizationPolicy) 设置授权策略开关
 * @method integer getSharedSubscriptionGroupLimit() 获取共享订阅组数最大限制
 * @method void setSharedSubscriptionGroupLimit(integer $SharedSubscriptionGroupLimit) 设置共享订阅组数最大限制
 * @method integer getMaxTopicFilterPerSharedSubscriptionGroup() 获取单个共享订阅组TopicFilter数限制
 * @method void setMaxTopicFilterPerSharedSubscriptionGroup(integer $MaxTopicFilterPerSharedSubscriptionGroup) 设置单个共享订阅组TopicFilter数限制
 * @method integer getAutoSubscriptionPolicyLimit() 获取自动订阅规则条数限制
 * @method void setAutoSubscriptionPolicyLimit(integer $AutoSubscriptionPolicyLimit) 设置自动订阅规则条数限制
 * @method integer getMaxTopicFilterPerAutoSubscriptionPolicy() 获取单条自动订阅规则TopicFilter数限制
 * @method void setMaxTopicFilterPerAutoSubscriptionPolicy(integer $MaxTopicFilterPerAutoSubscriptionPolicy) 设置单条自动订阅规则TopicFilter数限制
 * @method boolean getUseDefaultServerCert() 获取是否使用默认的服务端证书
 * @method void setUseDefaultServerCert(boolean $UseDefaultServerCert) 设置是否使用默认的服务端证书
 * @method integer getTrustedCaLimit() 获取服务端CA最大数量
 * @method void setTrustedCaLimit(integer $TrustedCaLimit) 设置服务端CA最大数量
 * @method integer getServerCertLimit() 获取服务端证书最大数量
 * @method void setServerCertLimit(integer $ServerCertLimit) 设置服务端证书最大数量
 * @method integer getTopicPrefixSlashLimit() 获取topic前缀最大层级
 * @method void setTopicPrefixSlashLimit(integer $TopicPrefixSlashLimit) 设置topic前缀最大层级
 * @method integer getMessageRate() 获取单客户端发送消息限速，单位 条/秒
 * @method void setMessageRate(integer $MessageRate) 设置单客户端发送消息限速，单位 条/秒
 * @method string getTransportLayerSecurity() 获取服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1
 * @method void setTransportLayerSecurity(string $TransportLayerSecurity) 设置服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1
 * @method integer getMessageEnrichmentRuleLimit() 获取消息属性增强规则配额
 * @method void setMessageEnrichmentRuleLimit(integer $MessageEnrichmentRuleLimit) 设置消息属性增强规则配额
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceResponse extends AbstractModel
{
    /**
     * @var string 实例类型
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     */
    public $InstanceType;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 主题数量
     */
    public $TopicNum;

    /**
     * @var integer 实例最大主题数量
     */
    public $TopicNumLimit;

    /**
     * @var integer TPS限流值
     */
    public $TpsLimit;

    /**
     * @var integer 创建时间，秒为单位
     */
    public $CreatedTime;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中
     */
    public $InstanceStatus;

    /**
     * @var string 实例规格
     */
    public $SkuCode;

    /**
     * @var integer 单客户端最大订阅数
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer 授权规则条数
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var integer 客户端数量上限
     */
    public $ClientNumLimit;

    /**
     * @var string 客户端证书注册方式：
JITP：自动注册
API：通过API手动注册
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean 自动注册设备证书时是否自动激活
     */
    public $AutomaticActivation;

    /**
     * @var integer 是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费
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
     * @var string TLS,单向认证    mTLS,双向认证    BYOC;一机一证
     */
    public $X509Mode;

    /**
     * @var integer 最大Ca配额
     */
    public $MaxCaNum;

    /**
     * @var string 证书注册码
     */
    public $RegistrationCode;

    /**
     * @var integer 集群最大订阅数
     */
    public $MaxSubscription;

    /**
     * @var boolean 授权策略开关
     */
    public $AuthorizationPolicy;

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
     * @var boolean 是否使用默认的服务端证书
     */
    public $UseDefaultServerCert;

    /**
     * @var integer 服务端CA最大数量
     */
    public $TrustedCaLimit;

    /**
     * @var integer 服务端证书最大数量
     */
    public $ServerCertLimit;

    /**
     * @var integer topic前缀最大层级
     */
    public $TopicPrefixSlashLimit;

    /**
     * @var integer 单客户端发送消息限速，单位 条/秒
     */
    public $MessageRate;

    /**
     * @var string 服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1
     */
    public $TransportLayerSecurity;

    /**
     * @var integer 消息属性增强规则配额
     */
    public $MessageEnrichmentRuleLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceType 实例类型
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $TopicNum 主题数量
     * @param integer $TopicNumLimit 实例最大主题数量
     * @param integer $TpsLimit TPS限流值
     * @param integer $CreatedTime 创建时间，秒为单位
     * @param string $Remark 备注信息
     * @param string $InstanceStatus 实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中
     * @param string $SkuCode 实例规格
     * @param integer $MaxSubscriptionPerClient 单客户端最大订阅数
     * @param integer $AuthorizationPolicyLimit 授权规则条数
     * @param integer $ClientNumLimit 客户端数量上限
     * @param string $DeviceCertificateProvisionType 客户端证书注册方式：
JITP：自动注册
API：通过API手动注册
     * @param boolean $AutomaticActivation 自动注册设备证书时是否自动激活
     * @param integer $RenewFlag 是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费
     * @param string $PayMode 计费模式， POSTPAID，按量计费 PREPAID，包年包月
     * @param integer $ExpiryTime 到期时间，毫秒级时间戳
     * @param integer $DestroyTime 预销毁时间，毫秒级时间戳
     * @param string $X509Mode TLS,单向认证    mTLS,双向认证    BYOC;一机一证
     * @param integer $MaxCaNum 最大Ca配额
     * @param string $RegistrationCode 证书注册码
     * @param integer $MaxSubscription 集群最大订阅数
     * @param boolean $AuthorizationPolicy 授权策略开关
     * @param integer $SharedSubscriptionGroupLimit 共享订阅组数最大限制
     * @param integer $MaxTopicFilterPerSharedSubscriptionGroup 单个共享订阅组TopicFilter数限制
     * @param integer $AutoSubscriptionPolicyLimit 自动订阅规则条数限制
     * @param integer $MaxTopicFilterPerAutoSubscriptionPolicy 单条自动订阅规则TopicFilter数限制
     * @param boolean $UseDefaultServerCert 是否使用默认的服务端证书
     * @param integer $TrustedCaLimit 服务端CA最大数量
     * @param integer $ServerCertLimit 服务端证书最大数量
     * @param integer $TopicPrefixSlashLimit topic前缀最大层级
     * @param integer $MessageRate 单客户端发送消息限速，单位 条/秒
     * @param string $TransportLayerSecurity 服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1
     * @param integer $MessageEnrichmentRuleLimit 消息属性增强规则配额
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("MaxSubscriptionPerClient",$param) and $param["MaxSubscriptionPerClient"] !== null) {
            $this->MaxSubscriptionPerClient = $param["MaxSubscriptionPerClient"];
        }

        if (array_key_exists("AuthorizationPolicyLimit",$param) and $param["AuthorizationPolicyLimit"] !== null) {
            $this->AuthorizationPolicyLimit = $param["AuthorizationPolicyLimit"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("DeviceCertificateProvisionType",$param) and $param["DeviceCertificateProvisionType"] !== null) {
            $this->DeviceCertificateProvisionType = $param["DeviceCertificateProvisionType"];
        }

        if (array_key_exists("AutomaticActivation",$param) and $param["AutomaticActivation"] !== null) {
            $this->AutomaticActivation = $param["AutomaticActivation"];
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

        if (array_key_exists("X509Mode",$param) and $param["X509Mode"] !== null) {
            $this->X509Mode = $param["X509Mode"];
        }

        if (array_key_exists("MaxCaNum",$param) and $param["MaxCaNum"] !== null) {
            $this->MaxCaNum = $param["MaxCaNum"];
        }

        if (array_key_exists("RegistrationCode",$param) and $param["RegistrationCode"] !== null) {
            $this->RegistrationCode = $param["RegistrationCode"];
        }

        if (array_key_exists("MaxSubscription",$param) and $param["MaxSubscription"] !== null) {
            $this->MaxSubscription = $param["MaxSubscription"];
        }

        if (array_key_exists("AuthorizationPolicy",$param) and $param["AuthorizationPolicy"] !== null) {
            $this->AuthorizationPolicy = $param["AuthorizationPolicy"];
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

        if (array_key_exists("UseDefaultServerCert",$param) and $param["UseDefaultServerCert"] !== null) {
            $this->UseDefaultServerCert = $param["UseDefaultServerCert"];
        }

        if (array_key_exists("TrustedCaLimit",$param) and $param["TrustedCaLimit"] !== null) {
            $this->TrustedCaLimit = $param["TrustedCaLimit"];
        }

        if (array_key_exists("ServerCertLimit",$param) and $param["ServerCertLimit"] !== null) {
            $this->ServerCertLimit = $param["ServerCertLimit"];
        }

        if (array_key_exists("TopicPrefixSlashLimit",$param) and $param["TopicPrefixSlashLimit"] !== null) {
            $this->TopicPrefixSlashLimit = $param["TopicPrefixSlashLimit"];
        }

        if (array_key_exists("MessageRate",$param) and $param["MessageRate"] !== null) {
            $this->MessageRate = $param["MessageRate"];
        }

        if (array_key_exists("TransportLayerSecurity",$param) and $param["TransportLayerSecurity"] !== null) {
            $this->TransportLayerSecurity = $param["TransportLayerSecurity"];
        }

        if (array_key_exists("MessageEnrichmentRuleLimit",$param) and $param["MessageEnrichmentRuleLimit"] !== null) {
            $this->MessageEnrichmentRuleLimit = $param["MessageEnrichmentRuleLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
