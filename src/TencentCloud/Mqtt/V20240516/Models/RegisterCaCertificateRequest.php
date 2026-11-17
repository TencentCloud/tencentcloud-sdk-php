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
 * RegisterCaCertificate请求参数结构体
 *
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getCaCertificate() 获取<p>CA证书内容</p>
 * @method void setCaCertificate(string $CaCertificate) 设置<p>CA证书内容</p>
 * @method string getVerificationCertificate() 获取<p>验证证书内容</p>
 * @method void setVerificationCertificate(string $VerificationCertificate) 设置<p>验证证书内容</p>
 * @method string getFormat() 获取<p>证书格式，不传默认PEM格式，当前仅支持PEM格式</p>
 * @method void setFormat(string $Format) 设置<p>证书格式，不传默认PEM格式，当前仅支持PEM格式</p>
 * @method string getStatus() 获取<p>证书状态，不传默认ACTIVE状态<br>    ACTIVE：激活<br>    INACTIVE：未激活</p>
 * @method void setStatus(string $Status) 设置<p>证书状态，不传默认ACTIVE状态<br>    ACTIVE：激活<br>    INACTIVE：未激活</p>
 */
class RegisterCaCertificateRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>CA证书内容</p>
     */
    public $CaCertificate;

    /**
     * @var string <p>验证证书内容</p>
     */
    public $VerificationCertificate;

    /**
     * @var string <p>证书格式，不传默认PEM格式，当前仅支持PEM格式</p>
     */
    public $Format;

    /**
     * @var string <p>证书状态，不传默认ACTIVE状态<br>    ACTIVE：激活<br>    INACTIVE：未激活</p>
     */
    public $Status;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $CaCertificate <p>CA证书内容</p>
     * @param string $VerificationCertificate <p>验证证书内容</p>
     * @param string $Format <p>证书格式，不传默认PEM格式，当前仅支持PEM格式</p>
     * @param string $Status <p>证书状态，不传默认ACTIVE状态<br>    ACTIVE：激活<br>    INACTIVE：未激活</p>
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

        if (array_key_exists("CaCertificate",$param) and $param["CaCertificate"] !== null) {
            $this->CaCertificate = $param["CaCertificate"];
        }

        if (array_key_exists("VerificationCertificate",$param) and $param["VerificationCertificate"] !== null) {
            $this->VerificationCertificate = $param["VerificationCertificate"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
