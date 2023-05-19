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
 * ddos复杂类型
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getProtocol() 获取协议类型
 * @method void setProtocol(string $Protocol) 设置协议类型
 * @method string getCertId() 获取证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertId(string $CertId) 设置证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualPort() 获取转发端口
 * @method void setVirtualPort(string $VirtualPort) 设置转发端口
 */
class DdosInstanceDetail extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 协议类型
     */
    public $Protocol;

    /**
     * @var string 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertId;

    /**
     * @var string 转发端口
     */
    public $VirtualPort;

    /**
     * @param string $Domain 域名
     * @param string $InstanceId 实例ID
     * @param string $Protocol 协议类型
     * @param string $CertId 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualPort 转发端口
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }
    }
}
