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
 * ModifyX509Config请求参数结构体
 *
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getX509Mode() 获取<p>证书验证模式</p><p>枚举值：</p><ul><li>TLS： 单向认证</li><li>mTLS： 双向认证</li><li>BYOC： 一机一证</li></ul>
 * @method void setX509Mode(string $X509Mode) 设置<p>证书验证模式</p><p>枚举值：</p><ul><li>TLS： 单向认证</li><li>mTLS： 双向认证</li><li>BYOC： 一机一证</li></ul>
 * @method string getDeviceCertificateProvisionType() 获取<p>证书注册方式</p><p>枚举值：</p><ul><li>JITP： 自动注册</li><li>API： 手工注册</li></ul>
 * @method void setDeviceCertificateProvisionType(string $DeviceCertificateProvisionType) 设置<p>证书注册方式</p><p>枚举值：</p><ul><li>JITP： 自动注册</li><li>API： 手工注册</li></ul>
 * @method boolean getAutomaticActivation() 获取<p>证书自动后激活状态</p><p>枚举值：</p><ul><li>true： 自动激活</li><li>false： 不激活</li></ul>
 * @method void setAutomaticActivation(boolean $AutomaticActivation) 设置<p>证书自动后激活状态</p><p>枚举值：</p><ul><li>true： 自动激活</li><li>false： 不激活</li></ul>
 */
class ModifyX509ConfigRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>证书验证模式</p><p>枚举值：</p><ul><li>TLS： 单向认证</li><li>mTLS： 双向认证</li><li>BYOC： 一机一证</li></ul>
     */
    public $X509Mode;

    /**
     * @var string <p>证书注册方式</p><p>枚举值：</p><ul><li>JITP： 自动注册</li><li>API： 手工注册</li></ul>
     */
    public $DeviceCertificateProvisionType;

    /**
     * @var boolean <p>证书自动后激活状态</p><p>枚举值：</p><ul><li>true： 自动激活</li><li>false： 不激活</li></ul>
     */
    public $AutomaticActivation;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $X509Mode <p>证书验证模式</p><p>枚举值：</p><ul><li>TLS： 单向认证</li><li>mTLS： 双向认证</li><li>BYOC： 一机一证</li></ul>
     * @param string $DeviceCertificateProvisionType <p>证书注册方式</p><p>枚举值：</p><ul><li>JITP： 自动注册</li><li>API： 手工注册</li></ul>
     * @param boolean $AutomaticActivation <p>证书自动后激活状态</p><p>枚举值：</p><ul><li>true： 自动激活</li><li>false： 不激活</li></ul>
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

        if (array_key_exists("X509Mode",$param) and $param["X509Mode"] !== null) {
            $this->X509Mode = $param["X509Mode"];
        }

        if (array_key_exists("DeviceCertificateProvisionType",$param) and $param["DeviceCertificateProvisionType"] !== null) {
            $this->DeviceCertificateProvisionType = $param["DeviceCertificateProvisionType"];
        }

        if (array_key_exists("AutomaticActivation",$param) and $param["AutomaticActivation"] !== null) {
            $this->AutomaticActivation = $param["AutomaticActivation"];
        }
    }
}
