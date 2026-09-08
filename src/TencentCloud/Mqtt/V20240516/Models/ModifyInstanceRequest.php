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
 * ModifyInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getName() 获取<p>要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
 * @method void setName(string $Name) 设置<p>要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
 * @method string getRemark() 获取<p>要修改的备注信息，最多128个字符。</p>
 * @method void setRemark(string $Remark) 设置<p>要修改的备注信息，最多128个字符。</p>
 * @method string getSkuCode() 获取<p>需要变更的配置规格<br>基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。</p>
 * @method void setSkuCode(string $SkuCode) 设置<p>需要变更的配置规格<br>基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。</p>
 * @method string getDeviceCertificateProvisionType() 获取<p>客户端证书注册方式：<br>JITP：自动注册<br>API：手动通过API注册</p>
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) 设置<p>客户端证书注册方式：<br>JITP：自动注册<br>API：手动通过API注册</p>
 * @method boolean getAutomaticActivation() 获取<p>自动注册证书是否自动激活</p>
 * @method void setAutomaticActivation(boolean $AutomaticActivation) 设置<p>自动注册证书是否自动激活</p>
 * @method boolean getAuthorizationPolicy() 获取<p>授权策略开关</p>
 * @method void setAuthorizationPolicy(boolean $AuthorizationPolicy) 设置<p>授权策略开关</p>
 * @method boolean getUseDefaultServerCert() 获取<p>是否使用默认的服务端证书</p>
 * @method void setUseDefaultServerCert(boolean $UseDefaultServerCert) 设置<p>是否使用默认的服务端证书</p>
 * @method string getX509Mode() 获取<p>TLS：单向认证<br>mTLS；双向认证<br>BYOC：一机一证</p>
 * @method void setX509Mode(string $X509Mode) 设置<p>TLS：单向认证<br>mTLS；双向认证<br>BYOC：一机一证</p>
 * @method integer getMessageRate() 获取<p>单客户端消息收发限速单位 条/秒</p>
 * @method void setMessageRate(integer $MessageRate) 设置<p>单客户端消息收发限速单位 条/秒</p>
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
     */
    public $Name;

    /**
     * @var string <p>要修改的备注信息，最多128个字符。</p>
     */
    public $Remark;

    /**
     * @var string <p>需要变更的配置规格<br>基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。</p>
     */
    public $SkuCode;

    /**
     * @var string <p>客户端证书注册方式：<br>JITP：自动注册<br>API：手动通过API注册</p>
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean <p>自动注册证书是否自动激活</p>
     */
    public $AutomaticActivation;

    /**
     * @var boolean <p>授权策略开关</p>
     */
    public $AuthorizationPolicy;

    /**
     * @var boolean <p>是否使用默认的服务端证书</p>
     */
    public $UseDefaultServerCert;

    /**
     * @var string <p>TLS：单向认证<br>mTLS；双向认证<br>BYOC：一机一证</p>
     */
    public $X509Mode;

    /**
     * @var integer <p>单客户端消息收发限速单位 条/秒</p>
     */
    public $MessageRate;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $Name <p>要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
     * @param string $Remark <p>要修改的备注信息，最多128个字符。</p>
     * @param string $SkuCode <p>需要变更的配置规格<br>基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。</p>
     * @param string $DeviceCertificateProvisionType <p>客户端证书注册方式：<br>JITP：自动注册<br>API：手动通过API注册</p>
     * @param boolean $AutomaticActivation <p>自动注册证书是否自动激活</p>
     * @param boolean $AuthorizationPolicy <p>授权策略开关</p>
     * @param boolean $UseDefaultServerCert <p>是否使用默认的服务端证书</p>
     * @param string $X509Mode <p>TLS：单向认证<br>mTLS；双向认证<br>BYOC：一机一证</p>
     * @param integer $MessageRate <p>单客户端消息收发限速单位 条/秒</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("DeviceCertificateProvisionType",$param) and $param["DeviceCertificateProvisionType"] !== null) {
            $this->DeviceCertificateProvisionType = $param["DeviceCertificateProvisionType"];
        }

        if (array_key_exists("AutomaticActivation",$param) and $param["AutomaticActivation"] !== null) {
            $this->AutomaticActivation = $param["AutomaticActivation"];
        }

        if (array_key_exists("AuthorizationPolicy",$param) and $param["AuthorizationPolicy"] !== null) {
            $this->AuthorizationPolicy = $param["AuthorizationPolicy"];
        }

        if (array_key_exists("UseDefaultServerCert",$param) and $param["UseDefaultServerCert"] !== null) {
            $this->UseDefaultServerCert = $param["UseDefaultServerCert"];
        }

        if (array_key_exists("X509Mode",$param) and $param["X509Mode"] !== null) {
            $this->X509Mode = $param["X509Mode"];
        }

        if (array_key_exists("MessageRate",$param) and $param["MessageRate"] !== null) {
            $this->MessageRate = $param["MessageRate"];
        }
    }
}
