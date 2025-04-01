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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getName() 获取要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
 * @method void setName(string $Name) 设置要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
 * @method string getRemark() 获取要修改的备注信息，最多64个字符。
 * @method void setRemark(string $Remark) 设置要修改的备注信息，最多64个字符。
 * @method string getSkuCode() 获取需要变更的配置规格
基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。
 * @method void setSkuCode(string $SkuCode) 设置需要变更的配置规格
基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。
 * @method string getDeviceCertificateProvisionType() 获取客户端证书注册方式：
JITP：自动注册
API：手动通过API注册
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) 设置客户端证书注册方式：
JITP：自动注册
API：手动通过API注册
 * @method boolean getAutomaticActivation() 获取自动注册证书是否自动激活
 * @method void setAutomaticActivation(boolean $AutomaticActivation) 设置自动注册证书是否自动激活
 * @method boolean getAuthorizationPolicy() 获取授权策略开关
 * @method void setAuthorizationPolicy(boolean $AuthorizationPolicy) 设置授权策略开关
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
     */
    public $Name;

    /**
     * @var string 要修改的备注信息，最多64个字符。
     */
    public $Remark;

    /**
     * @var string 需要变更的配置规格
基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。
     */
    public $SkuCode;

    /**
     * @var string 客户端证书注册方式：
JITP：自动注册
API：手动通过API注册
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean 自动注册证书是否自动激活
     */
    public $AutomaticActivation;

    /**
     * @var boolean 授权策略开关
     */
    public $AuthorizationPolicy;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $Name 要修改实例名称，不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
     * @param string $Remark 要修改的备注信息，最多64个字符。
     * @param string $SkuCode 需要变更的配置规格
基础版和专业版集群不能升配到铂金版规格，铂金版集群不能降配至基础版和增强版规格。
     * @param string $DeviceCertificateProvisionType 客户端证书注册方式：
JITP：自动注册
API：手动通过API注册
     * @param boolean $AutomaticActivation 自动注册证书是否自动激活
     * @param boolean $AuthorizationPolicy 授权策略开关
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
    }
}
