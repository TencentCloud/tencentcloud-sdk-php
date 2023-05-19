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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * apiGateway实例详情
 *
 * @method string getServiceId() 获取实例ID
 * @method void setServiceId(string $ServiceId) 设置实例ID
 * @method string getServiceName() 获取实例名称
 * @method void setServiceName(string $ServiceName) 设置实例名称
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getCertId() 获取证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertId(string $CertId) 设置证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取使用协议
 * @method void setProtocol(string $Protocol) 设置使用协议
 */
class ApiGatewayInstanceDetail extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $ServiceId;

    /**
     * @var string 实例名称
     */
    public $ServiceName;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertId;

    /**
     * @var string 使用协议
     */
    public $Protocol;

    /**
     * @param string $ServiceId 实例ID
     * @param string $ServiceName 实例名称
     * @param string $Domain 域名
     * @param string $CertId 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 使用协议
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
