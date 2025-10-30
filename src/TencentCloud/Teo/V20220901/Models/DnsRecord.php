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
 * DNS 记录
 *
 * @method string getZoneId() 获取站点 ID。<br>注意：ZoneId 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。<br>注意：ZoneId 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 * @method string getRecordId() 获取DNS 记录 ID。
 * @method void setRecordId(string $RecordId) 设置DNS 记录 ID。
 * @method string getName() 获取DNS 记录名。
 * @method void setName(string $Name) 设置DNS 记录名。
 * @method string getType() 获取DNS 记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
 * @method void setType(string $Type) 设置DNS 记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
 * @method string getLocation() 获取DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。<br>解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
 * @method void setLocation(string $Location) 设置DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。<br>解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
 * @method string getContent() 获取DNS 记录内容。根据 Type 值填入与之相对应的内容。
 * @method void setContent(string $Content) 设置DNS 记录内容。根据 Type 值填入与之相对应的内容。
 * @method integer getTTL() 获取缓存时间，取值范围 60~86400，数值越小，修改记录各地生效时间越快，单位：秒。
 * @method void setTTL(integer $TTL) 设置缓存时间，取值范围 60~86400，数值越小，修改记录各地生效时间越快，单位：秒。
 * @method integer getWeight() 获取DNS 记录权重，取值范围 -1~100，为 -1 时表示不分配权重，为 0 时表示不解析。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
 * @method void setWeight(integer $Weight) 设置DNS 记录权重，取值范围 -1~100，为 -1 时表示不分配权重，为 0 时表示不解析。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
 * @method integer getPriority() 获取MX 记录优先级，取值范围 0~50，数值越小越优先。
 * @method void setPriority(integer $Priority) 设置MX 记录优先级，取值范围 0~50，数值越小越优先。
 * @method string getStatus() 获取DNS 记录解析状态，取值有：<li>enable：已生效；</li><li>disable：已停用。</li>注意：Status 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 * @method void setStatus(string $Status) 设置DNS 记录解析状态，取值有：<li>enable：已生效；</li><li>disable：已停用。</li>注意：Status 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 * @method string getCreatedOn() 获取创建时间。<br>注意：CreatedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间。<br>注意：CreatedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 * @method string getModifiedOn() 获取修改时间。<br>注意：ModifiedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 * @method void setModifiedOn(string $ModifiedOn) 设置修改时间。<br>注意：ModifiedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
 */
class DnsRecord extends AbstractModel
{
    /**
     * @var string 站点 ID。<br>注意：ZoneId 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
     */
    public $ZoneId;

    /**
     * @var string DNS 记录 ID。
     */
    public $RecordId;

    /**
     * @var string DNS 记录名。
     */
    public $Name;

    /**
     * @var string DNS 记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
     */
    public $Type;

    /**
     * @var string DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。<br>解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
     */
    public $Location;

    /**
     * @var string DNS 记录内容。根据 Type 值填入与之相对应的内容。
     */
    public $Content;

    /**
     * @var integer 缓存时间，取值范围 60~86400，数值越小，修改记录各地生效时间越快，单位：秒。
     */
    public $TTL;

    /**
     * @var integer DNS 记录权重，取值范围 -1~100，为 -1 时表示不分配权重，为 0 时表示不解析。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
     */
    public $Weight;

    /**
     * @var integer MX 记录优先级，取值范围 0~50，数值越小越优先。
     */
    public $Priority;

    /**
     * @var string DNS 记录解析状态，取值有：<li>enable：已生效；</li><li>disable：已停用。</li>注意：Status 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
     */
    public $Status;

    /**
     * @var string 创建时间。<br>注意：CreatedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
     */
    public $CreatedOn;

    /**
     * @var string 修改时间。<br>注意：ModifiedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
     */
    public $ModifiedOn;

    /**
     * @param string $ZoneId 站点 ID。<br>注意：ZoneId 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
     * @param string $RecordId DNS 记录 ID。
     * @param string $Name DNS 记录名。
     * @param string $Type DNS 记录类型，取值有：
<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li>
<li>AAAA：将域名指向一个外网 IPv6 地址；</li>
<li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li>
<li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li>
<li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li>
<li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li>
<li>CAA：指定可为本站点颁发证书的 CA；</li>
<li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
     * @param string $Location DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。<br>解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
     * @param string $Content DNS 记录内容。根据 Type 值填入与之相对应的内容。
     * @param integer $TTL 缓存时间，取值范围 60~86400，数值越小，修改记录各地生效时间越快，单位：秒。
     * @param integer $Weight DNS 记录权重，取值范围 -1~100，为 -1 时表示不分配权重，为 0 时表示不解析。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
     * @param integer $Priority MX 记录优先级，取值范围 0~50，数值越小越优先。
     * @param string $Status DNS 记录解析状态，取值有：<li>enable：已生效；</li><li>disable：已停用。</li>注意：Status 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
     * @param string $CreatedOn 创建时间。<br>注意：CreatedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
     * @param string $ModifiedOn 修改时间。<br>注意：ModifiedOn 仅做出参使用，在 ModifyDnsRecords 不可作为入参使用，如有传此参数，会忽略。
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
