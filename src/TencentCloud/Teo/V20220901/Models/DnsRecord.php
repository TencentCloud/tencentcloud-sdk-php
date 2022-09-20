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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNS 记录
 *
 * @method string getDnsRecordId() 获取记录 ID。
 * @method void setDnsRecordId(string $DnsRecordId) 设置记录 ID。
 * @method string getDnsRecordType() 获取DNS记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器，相关记录值/优先级参数由邮件注册商提供。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
 * @method void setDnsRecordType(string $DnsRecordType) 设置DNS记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器，相关记录值/优先级参数由邮件注册商提供。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
 * @method string getDnsRecordName() 获取记录名称。
 * @method void setDnsRecordName(string $DnsRecordName) 设置记录名称。
 * @method string getContent() 获取记录值。
 * @method void setContent(string $Content) 设置记录值。
 * @method string getMode() 获取代理模式，取值有：
<li>dns_only：仅DNS解析；</li>
<li>proxied：代理加速。</li>
 * @method void setMode(string $Mode) 设置代理模式，取值有：
<li>dns_only：仅DNS解析；</li>
<li>proxied：代理加速。</li>
 * @method integer getTTL() 获取缓存时间，数值越小，修改记录各地生效时间越快，单位：秒。
 * @method void setTTL(integer $TTL) 设置缓存时间，数值越小，修改记录各地生效时间越快，单位：秒。
 * @method integer getPriority() 获取MX记录优先级，数值越小越优先。
 * @method void setPriority(integer $Priority) 设置MX记录优先级，数值越小越优先。
 * @method string getCreatedOn() 获取创建时间。
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间。
 * @method string getModifiedOn() 获取修改时间。
 * @method void setModifiedOn(string $ModifiedOn) 设置修改时间。
 * @method boolean getLocked() 获取域名锁定状态。
 * @method void setLocked(boolean $Locked) 设置域名锁定状态。
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method string getStatus() 获取记录解析状态，取值有：
<li>active：生效；</li>
<li>pending：不生效。</li>
 * @method void setStatus(string $Status) 设置记录解析状态，取值有：
<li>active：生效；</li>
<li>pending：不生效。</li>
 * @method string getCname() 获取CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDomainStatus() 获取域名服务类型，取值有：
<li>lb：负载均衡；</li>
<li>security：安全；</li>
<li>l4：四层代理。</li>
 * @method void setDomainStatus(array $DomainStatus) 设置域名服务类型，取值有：
<li>lb：负载均衡；</li>
<li>security：安全；</li>
<li>l4：四层代理。</li>
 */
class DnsRecord extends AbstractModel
{
    /**
     * @var string 记录 ID。
     */
    public $DnsRecordId;

    /**
     * @var string DNS记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器，相关记录值/优先级参数由邮件注册商提供。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
     */
    public $DnsRecordType;

    /**
     * @var string 记录名称。
     */
    public $DnsRecordName;

    /**
     * @var string 记录值。
     */
    public $Content;

    /**
     * @var string 代理模式，取值有：
<li>dns_only：仅DNS解析；</li>
<li>proxied：代理加速。</li>
     */
    public $Mode;

    /**
     * @var integer 缓存时间，数值越小，修改记录各地生效时间越快，单位：秒。
     */
    public $TTL;

    /**
     * @var integer MX记录优先级，数值越小越优先。
     */
    public $Priority;

    /**
     * @var string 创建时间。
     */
    public $CreatedOn;

    /**
     * @var string 修改时间。
     */
    public $ModifiedOn;

    /**
     * @var boolean 域名锁定状态。
     */
    public $Locked;

    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var string 记录解析状态，取值有：
<li>active：生效；</li>
<li>pending：不生效。</li>
     */
    public $Status;

    /**
     * @var string CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var array 域名服务类型，取值有：
<li>lb：负载均衡；</li>
<li>security：安全；</li>
<li>l4：四层代理。</li>
     */
    public $DomainStatus;

    /**
     * @param string $DnsRecordId 记录 ID。
     * @param string $DnsRecordType DNS记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器，相关记录值/优先级参数由邮件注册商提供。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
     * @param string $DnsRecordName 记录名称。
     * @param string $Content 记录值。
     * @param string $Mode 代理模式，取值有：
<li>dns_only：仅DNS解析；</li>
<li>proxied：代理加速。</li>
     * @param integer $TTL 缓存时间，数值越小，修改记录各地生效时间越快，单位：秒。
     * @param integer $Priority MX记录优先级，数值越小越优先。
     * @param string $CreatedOn 创建时间。
     * @param string $ModifiedOn 修改时间。
     * @param boolean $Locked 域名锁定状态。
     * @param string $ZoneId 站点 ID。
     * @param string $ZoneName 站点名称。
     * @param string $Status 记录解析状态，取值有：
<li>active：生效；</li>
<li>pending：不生效。</li>
     * @param string $Cname CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DomainStatus 域名服务类型，取值有：
<li>lb：负载均衡；</li>
<li>security：安全；</li>
<li>l4：四层代理。</li>
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
        if (array_key_exists("DnsRecordId",$param) and $param["DnsRecordId"] !== null) {
            $this->DnsRecordId = $param["DnsRecordId"];
        }

        if (array_key_exists("DnsRecordType",$param) and $param["DnsRecordType"] !== null) {
            $this->DnsRecordType = $param["DnsRecordType"];
        }

        if (array_key_exists("DnsRecordName",$param) and $param["DnsRecordName"] !== null) {
            $this->DnsRecordName = $param["DnsRecordName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }
    }
}
