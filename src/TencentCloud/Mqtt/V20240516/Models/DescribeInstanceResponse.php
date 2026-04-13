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
 * @method string getInstanceType() 获取<p>实例类型<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getTopicNum() 获取<p>主题数量</p>
 * @method void setTopicNum(integer $TopicNum) 设置<p>主题数量</p>
 * @method integer getTopicNumLimit() 获取<p>实例最大主题数量</p>
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置<p>实例最大主题数量</p>
 * @method integer getTpsLimit() 获取<p>TPS限流值</p>
 * @method void setTpsLimit(integer $TpsLimit) 设置<p>TPS限流值</p>
 * @method integer getCreatedTime() 获取<p>创建时间，秒为单位</p>
 * @method void setCreatedTime(integer $CreatedTime) 设置<p>创建时间，秒为单位</p>
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method string getInstanceStatus() 获取<p>实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中</p>
 * @method string getSkuCode() 获取<p>实例规格</p>
 * @method void setSkuCode(string $SkuCode) 设置<p>实例规格</p>
 * @method integer getMaxSubscriptionPerClient() 获取<p>单客户端最大订阅数</p>
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) 设置<p>单客户端最大订阅数</p>
 * @method integer getAuthorizationPolicyLimit() 获取<p>授权规则条数</p>
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) 设置<p>授权规则条数</p>
 * @method integer getClientNumLimit() 获取<p>客户端数量上限</p>
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置<p>客户端数量上限</p>
 * @method string getDeviceCertificateProvisionType() 获取<p>客户端证书注册方式：<br>JITP：自动注册<br>API：通过API手动注册</p>
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) 设置<p>客户端证书注册方式：<br>JITP：自动注册<br>API：通过API手动注册</p>
 * @method boolean getAutomaticActivation() 获取<p>自动注册设备证书时是否自动激活</p>
 * @method void setAutomaticActivation(boolean $AutomaticActivation) 设置<p>自动注册设备证书时是否自动激活</p>
 * @method integer getRenewFlag() 获取<p>是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费</p>
 * @method string getPayMode() 获取<p>计费模式， POSTPAID，按量计费 PREPAID，包年包月</p>
 * @method void setPayMode(string $PayMode) 设置<p>计费模式， POSTPAID，按量计费 PREPAID，包年包月</p>
 * @method integer getExpiryTime() 获取<p>到期时间，毫秒级时间戳</p>
 * @method void setExpiryTime(integer $ExpiryTime) 设置<p>到期时间，毫秒级时间戳</p>
 * @method integer getDestroyTime() 获取<p>预销毁时间，毫秒级时间戳</p>
 * @method void setDestroyTime(integer $DestroyTime) 设置<p>预销毁时间，毫秒级时间戳</p>
 * @method string getX509Mode() 获取<p>TLS,单向认证    mTLS,双向认证    BYOC;一机一证</p>
 * @method void setX509Mode(string $X509Mode) 设置<p>TLS,单向认证    mTLS,双向认证    BYOC;一机一证</p>
 * @method integer getMaxCaNum() 获取<p>最大Ca配额</p>
 * @method void setMaxCaNum(integer $MaxCaNum) 设置<p>最大Ca配额</p>
 * @method string getRegistrationCode() 获取<p>证书注册码</p>
 * @method void setRegistrationCode(string $RegistrationCode) 设置<p>证书注册码</p>
 * @method integer getMaxSubscription() 获取<p>集群最大订阅数</p>
 * @method void setMaxSubscription(integer $MaxSubscription) 设置<p>集群最大订阅数</p>
 * @method boolean getAuthorizationPolicy() 获取<p>授权策略开关</p>
 * @method void setAuthorizationPolicy(boolean $AuthorizationPolicy) 设置<p>授权策略开关</p>
 * @method integer getSharedSubscriptionGroupLimit() 获取<p>共享订阅组数最大限制</p>
 * @method void setSharedSubscriptionGroupLimit(integer $SharedSubscriptionGroupLimit) 设置<p>共享订阅组数最大限制</p>
 * @method integer getMaxTopicFilterPerSharedSubscriptionGroup() 获取<p>单个共享订阅组TopicFilter数限制</p>
 * @method void setMaxTopicFilterPerSharedSubscriptionGroup(integer $MaxTopicFilterPerSharedSubscriptionGroup) 设置<p>单个共享订阅组TopicFilter数限制</p>
 * @method integer getAutoSubscriptionPolicyLimit() 获取<p>自动订阅规则条数限制</p>
 * @method void setAutoSubscriptionPolicyLimit(integer $AutoSubscriptionPolicyLimit) 设置<p>自动订阅规则条数限制</p>
 * @method integer getMaxTopicFilterPerAutoSubscriptionPolicy() 获取<p>单条自动订阅规则TopicFilter数限制</p>
 * @method void setMaxTopicFilterPerAutoSubscriptionPolicy(integer $MaxTopicFilterPerAutoSubscriptionPolicy) 设置<p>单条自动订阅规则TopicFilter数限制</p>
 * @method boolean getUseDefaultServerCert() 获取<p>是否使用默认的服务端证书</p>
 * @method void setUseDefaultServerCert(boolean $UseDefaultServerCert) 设置<p>是否使用默认的服务端证书</p>
 * @method integer getTrustedCaLimit() 获取<p>服务端CA最大数量</p>
 * @method void setTrustedCaLimit(integer $TrustedCaLimit) 设置<p>服务端CA最大数量</p>
 * @method integer getServerCertLimit() 获取<p>服务端证书最大数量</p>
 * @method void setServerCertLimit(integer $ServerCertLimit) 设置<p>服务端证书最大数量</p>
 * @method integer getTopicPrefixSlashLimit() 获取<p>topic前缀最大层级</p>
 * @method void setTopicPrefixSlashLimit(integer $TopicPrefixSlashLimit) 设置<p>topic前缀最大层级</p>
 * @method integer getMessageRate() 获取<p>单客户端发送消息限速，单位 条/秒</p>
 * @method void setMessageRate(integer $MessageRate) 设置<p>单客户端发送消息限速，单位 条/秒</p>
 * @method string getTransportLayerSecurity() 获取<p>服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
 * @method void setTransportLayerSecurity(string $TransportLayerSecurity) 设置<p>服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
 * @method integer getMessageEnrichmentRuleLimit() 获取<p>消息属性增强规则配额</p>
 * @method void setMessageEnrichmentRuleLimit(integer $MessageEnrichmentRuleLimit) 设置<p>消息属性增强规则配额</p>
 * @method integer getBlockRuleLimit() 获取<p>封禁规则最大数量</p>
 * @method void setBlockRuleLimit(integer $BlockRuleLimit) 设置<p>封禁规则最大数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceResponse extends AbstractModel
{
    /**
     * @var string <p>实例类型<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>主题数量</p>
     */
    public $TopicNum;

    /**
     * @var integer <p>实例最大主题数量</p>
     */
    public $TopicNumLimit;

    /**
     * @var integer <p>TPS限流值</p>
     */
    public $TpsLimit;

    /**
     * @var integer <p>创建时间，秒为单位</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var string <p>实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>实例规格</p>
     */
    public $SkuCode;

    /**
     * @var integer <p>单客户端最大订阅数</p>
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer <p>授权规则条数</p>
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var integer <p>客户端数量上限</p>
     */
    public $ClientNumLimit;

    /**
     * @var string <p>客户端证书注册方式：<br>JITP：自动注册<br>API：通过API手动注册</p>
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean <p>自动注册设备证书时是否自动激活</p>
     */
    public $AutomaticActivation;

    /**
     * @var integer <p>是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>计费模式， POSTPAID，按量计费 PREPAID，包年包月</p>
     */
    public $PayMode;

    /**
     * @var integer <p>到期时间，毫秒级时间戳</p>
     */
    public $ExpiryTime;

    /**
     * @var integer <p>预销毁时间，毫秒级时间戳</p>
     */
    public $DestroyTime;

    /**
     * @var string <p>TLS,单向认证    mTLS,双向认证    BYOC;一机一证</p>
     */
    public $X509Mode;

    /**
     * @var integer <p>最大Ca配额</p>
     */
    public $MaxCaNum;

    /**
     * @var string <p>证书注册码</p>
     */
    public $RegistrationCode;

    /**
     * @var integer <p>集群最大订阅数</p>
     */
    public $MaxSubscription;

    /**
     * @var boolean <p>授权策略开关</p>
     */
    public $AuthorizationPolicy;

    /**
     * @var integer <p>共享订阅组数最大限制</p>
     */
    public $SharedSubscriptionGroupLimit;

    /**
     * @var integer <p>单个共享订阅组TopicFilter数限制</p>
     * @deprecated
     */
    public $MaxTopicFilterPerSharedSubscriptionGroup;

    /**
     * @var integer <p>自动订阅规则条数限制</p>
     */
    public $AutoSubscriptionPolicyLimit;

    /**
     * @var integer <p>单条自动订阅规则TopicFilter数限制</p>
     */
    public $MaxTopicFilterPerAutoSubscriptionPolicy;

    /**
     * @var boolean <p>是否使用默认的服务端证书</p>
     */
    public $UseDefaultServerCert;

    /**
     * @var integer <p>服务端CA最大数量</p>
     */
    public $TrustedCaLimit;

    /**
     * @var integer <p>服务端证书最大数量</p>
     */
    public $ServerCertLimit;

    /**
     * @var integer <p>topic前缀最大层级</p>
     */
    public $TopicPrefixSlashLimit;

    /**
     * @var integer <p>单客户端发送消息限速，单位 条/秒</p>
     */
    public $MessageRate;

    /**
     * @var string <p>服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
     */
    public $TransportLayerSecurity;

    /**
     * @var integer <p>消息属性增强规则配额</p>
     */
    public $MessageEnrichmentRuleLimit;

    /**
     * @var integer <p>封禁规则最大数量</p>
     */
    public $BlockRuleLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceType <p>实例类型<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $TopicNum <p>主题数量</p>
     * @param integer $TopicNumLimit <p>实例最大主题数量</p>
     * @param integer $TpsLimit <p>TPS限流值</p>
     * @param integer $CreatedTime <p>创建时间，秒为单位</p>
     * @param string $Remark <p>备注信息</p>
     * @param string $InstanceStatus <p>实例状态， RUNNING, 运行中 MAINTAINING，维护中 ABNORMAL，异常 OVERDUE，欠费 DESTROYED，已删除 CREATING，创建中 MODIFYING，变配中 CREATE_FAILURE，创建失败 MODIFY_FAILURE，变配失败 DELETING，删除中</p>
     * @param string $SkuCode <p>实例规格</p>
     * @param integer $MaxSubscriptionPerClient <p>单客户端最大订阅数</p>
     * @param integer $AuthorizationPolicyLimit <p>授权规则条数</p>
     * @param integer $ClientNumLimit <p>客户端数量上限</p>
     * @param string $DeviceCertificateProvisionType <p>客户端证书注册方式：<br>JITP：自动注册<br>API：通过API手动注册</p>
     * @param boolean $AutomaticActivation <p>自动注册设备证书时是否自动激活</p>
     * @param integer $RenewFlag <p>是否自动续费。仅包年包月集群生效。 1:自动续费 0:非自动续费</p>
     * @param string $PayMode <p>计费模式， POSTPAID，按量计费 PREPAID，包年包月</p>
     * @param integer $ExpiryTime <p>到期时间，毫秒级时间戳</p>
     * @param integer $DestroyTime <p>预销毁时间，毫秒级时间戳</p>
     * @param string $X509Mode <p>TLS,单向认证    mTLS,双向认证    BYOC;一机一证</p>
     * @param integer $MaxCaNum <p>最大Ca配额</p>
     * @param string $RegistrationCode <p>证书注册码</p>
     * @param integer $MaxSubscription <p>集群最大订阅数</p>
     * @param boolean $AuthorizationPolicy <p>授权策略开关</p>
     * @param integer $SharedSubscriptionGroupLimit <p>共享订阅组数最大限制</p>
     * @param integer $MaxTopicFilterPerSharedSubscriptionGroup <p>单个共享订阅组TopicFilter数限制</p>
     * @param integer $AutoSubscriptionPolicyLimit <p>自动订阅规则条数限制</p>
     * @param integer $MaxTopicFilterPerAutoSubscriptionPolicy <p>单条自动订阅规则TopicFilter数限制</p>
     * @param boolean $UseDefaultServerCert <p>是否使用默认的服务端证书</p>
     * @param integer $TrustedCaLimit <p>服务端CA最大数量</p>
     * @param integer $ServerCertLimit <p>服务端证书最大数量</p>
     * @param integer $TopicPrefixSlashLimit <p>topic前缀最大层级</p>
     * @param integer $MessageRate <p>单客户端发送消息限速，单位 条/秒</p>
     * @param string $TransportLayerSecurity <p>服务端tls支持的协议，使用“,”分割。例如：TLSv1.3,TLSv1.2,TLSv1.1,TLSv1</p>
     * @param integer $MessageEnrichmentRuleLimit <p>消息属性增强规则配额</p>
     * @param integer $BlockRuleLimit <p>封禁规则最大数量</p>
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

        if (array_key_exists("BlockRuleLimit",$param) and $param["BlockRuleLimit"] !== null) {
            $this->BlockRuleLimit = $param["BlockRuleLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
