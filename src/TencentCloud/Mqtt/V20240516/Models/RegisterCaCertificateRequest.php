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
 * RegisterCaCertificate请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getCaCertificate() 获取CA证书
 * @method void setCaCertificate(string $CaCertificate) 设置CA证书
 * @method string getVerificationCertificate() 获取验证证书
 * @method void setVerificationCertificate(string $VerificationCertificate) 设置验证证书
 * @method string getFormat() 获取证书格式，不传默认PEM格式
 * @method void setFormat(string $Format) 设置证书格式，不传默认PEM格式
 * @method string getStatus() 获取证书状态，不传默认ACTIVE状态
    ACTIVE,//激活
    INACTIVE,//未激活
    REVOKED,//吊销
    PENDING_ACTIVATION,//注册待激活
 * @method void setStatus(string $Status) 设置证书状态，不传默认ACTIVE状态
    ACTIVE,//激活
    INACTIVE,//未激活
    REVOKED,//吊销
    PENDING_ACTIVATION,//注册待激活
 */
class RegisterCaCertificateRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string CA证书
     */
    public $CaCertificate;

    /**
     * @var string 验证证书
     */
    public $VerificationCertificate;

    /**
     * @var string 证书格式，不传默认PEM格式
     */
    public $Format;

    /**
     * @var string 证书状态，不传默认ACTIVE状态
    ACTIVE,//激活
    INACTIVE,//未激活
    REVOKED,//吊销
    PENDING_ACTIVATION,//注册待激活
     */
    public $Status;

    /**
     * @param string $InstanceId 集群id
     * @param string $CaCertificate CA证书
     * @param string $VerificationCertificate 验证证书
     * @param string $Format 证书格式，不传默认PEM格式
     * @param string $Status 证书状态，不传默认ACTIVE状态
    ACTIVE,//激活
    INACTIVE,//未激活
    REVOKED,//吊销
    PENDING_ACTIVATION,//注册待激活
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
