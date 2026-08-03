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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速域名
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getDomainName() 获取<p>加速域名名称。</p>
 * @method void setDomainName(string $DomainName) 设置<p>加速域名名称。</p>
 * @method string getDomainStatus() 获取<p>加速域名状态</p><p>枚举值：</p><ul><li>online： 已生效</li><li>process： 部署中</li><li>offline： 已停用</li><li>init： 未生效，待激活站点</li></ul>
 * @method void setDomainStatus(string $DomainStatus) 设置<p>加速域名状态</p><p>枚举值：</p><ul><li>online： 已生效</li><li>process： 部署中</li><li>offline： 已停用</li><li>init： 未生效，待激活站点</li></ul>
 * @method string getCname() 获取<p>CNAME 地址。</p>
 * @method void setCname(string $Cname) 设置<p>CNAME 地址。</p>
 * @method string getIPv6Status() 获取<p>IPv6 状态，取值有：</p><li>follow：遵循站点IPv6配置；</li><li>on：开启状态；</li><li>off：关闭状态。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv6Status(string $IPv6Status) 设置<p>IPv6 状态，取值有：</p><li>follow：遵循站点IPv6配置；</li><li>on：开启状态；</li><li>off：关闭状态。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentificationStatus() 获取<p>加速域名归属权验证状态，取值有： </p><li>pending：待验证；</li><li>finished：已完成验证。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentificationStatus(string $IdentificationStatus) 设置<p>加速域名归属权验证状态，取值有： </p><li>pending：待验证；</li><li>finished：已完成验证。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OwnershipVerification getOwnershipVerification() 获取<p>加速域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) 设置<p>加速域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginDetail getOriginDetail() 获取<p>源站信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginDetail(OriginDetail $OriginDetail) 设置<p>源站信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginProtocol() 获取<p>回源协议，取值有：</p><li>FOLLOW：协议跟随；</li><li>HTTP：HTTP协议回源；</li><li>HTTPS：HTTPS协议回源。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginProtocol(string $OriginProtocol) 设置<p>回源协议，取值有：</p><li>FOLLOW：协议跟随；</li><li>HTTP：HTTP协议回源；</li><li>HTTPS：HTTPS协议回源。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHttpOriginPort() 获取<p>HTTP 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpOriginPort(integer $HttpOriginPort) 设置<p>HTTP 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHttpsOriginPort() 获取<p>HTTPS 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) 设置<p>HTTPS 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccelerationDomainCertificate getCertificate() 获取<p>加速域名证书信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(AccelerationDomainCertificate $Certificate) 设置<p>加速域名证书信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取<p>创建时间。</p>
 * @method void setCreatedOn(string $CreatedOn) 设置<p>创建时间。</p>
 * @method string getModifiedOn() 获取<p>修改时间。</p>
 * @method void setModifiedOn(string $ModifiedOn) 设置<p>修改时间。</p>
 */
class AccelerationDomain extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>加速域名名称。</p>
     */
    public $DomainName;

    /**
     * @var string <p>加速域名状态</p><p>枚举值：</p><ul><li>online： 已生效</li><li>process： 部署中</li><li>offline： 已停用</li><li>init： 未生效，待激活站点</li></ul>
     */
    public $DomainStatus;

    /**
     * @var string <p>CNAME 地址。</p>
     */
    public $Cname;

    /**
     * @var string <p>IPv6 状态，取值有：</p><li>follow：遵循站点IPv6配置；</li><li>on：开启状态；</li><li>off：关闭状态。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv6Status;

    /**
     * @var string <p>加速域名归属权验证状态，取值有： </p><li>pending：待验证；</li><li>finished：已完成验证。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentificationStatus;

    /**
     * @var OwnershipVerification <p>加速域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnershipVerification;

    /**
     * @var OriginDetail <p>源站信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginDetail;

    /**
     * @var string <p>回源协议，取值有：</p><li>FOLLOW：协议跟随；</li><li>HTTP：HTTP协议回源；</li><li>HTTPS：HTTPS协议回源。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginProtocol;

    /**
     * @var integer <p>HTTP 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpOriginPort;

    /**
     * @var integer <p>HTTPS 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpsOriginPort;

    /**
     * @var AccelerationDomainCertificate <p>加速域名证书信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedOn;

    /**
     * @var string <p>修改时间。</p>
     */
    public $ModifiedOn;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $DomainName <p>加速域名名称。</p>
     * @param string $DomainStatus <p>加速域名状态</p><p>枚举值：</p><ul><li>online： 已生效</li><li>process： 部署中</li><li>offline： 已停用</li><li>init： 未生效，待激活站点</li></ul>
     * @param string $Cname <p>CNAME 地址。</p>
     * @param string $IPv6Status <p>IPv6 状态，取值有：</p><li>follow：遵循站点IPv6配置；</li><li>on：开启状态；</li><li>off：关闭状态。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentificationStatus <p>加速域名归属权验证状态，取值有： </p><li>pending：待验证；</li><li>finished：已完成验证。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OwnershipVerification $OwnershipVerification <p>加速域名需进行归属权验证才能继续提供服务时，该对象会携带对应验证方式所需要的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginDetail $OriginDetail <p>源站信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginProtocol <p>回源协议，取值有：</p><li>FOLLOW：协议跟随；</li><li>HTTP：HTTP协议回源；</li><li>HTTPS：HTTPS协议回源。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HttpOriginPort <p>HTTP 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HttpsOriginPort <p>HTTPS 回源端口。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccelerationDomainCertificate $Certificate <p>加速域名证书信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn <p>创建时间。</p>
     * @param string $ModifiedOn <p>修改时间。</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IPv6Status",$param) and $param["IPv6Status"] !== null) {
            $this->IPv6Status = $param["IPv6Status"];
        }

        if (array_key_exists("IdentificationStatus",$param) and $param["IdentificationStatus"] !== null) {
            $this->IdentificationStatus = $param["IdentificationStatus"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("OriginDetail",$param) and $param["OriginDetail"] !== null) {
            $this->OriginDetail = new OriginDetail();
            $this->OriginDetail->deserialize($param["OriginDetail"]);
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HttpOriginPort",$param) and $param["HttpOriginPort"] !== null) {
            $this->HttpOriginPort = $param["HttpOriginPort"];
        }

        if (array_key_exists("HttpsOriginPort",$param) and $param["HttpsOriginPort"] !== null) {
            $this->HttpsOriginPort = $param["HttpsOriginPort"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new AccelerationDomainCertificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
