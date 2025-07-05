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
 * CreateDnsRecord请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getName() 获取DNS 记录名，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
 * @method void setName(string $Name) 设置DNS 记录名，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
 * @method string getType() 获取DNS 记录类型，取值有：<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li><li>AAAA：将域名指向一个外网 IPv6 地址；</li><li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li><li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li><li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li><li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li><li>CAA：指定可为本站点颁发证书的 CA；</li><li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
不同的记录类型呢例如 SRV、CAA 记录对主机记录名称、记录值格式有不同的要求，各记录类型的详细说明介绍和格式示例请参考：[解析记录类型介绍](https://cloud.tencent.com/document/product/1552/90453#2f681022-91ab-4a9e-ac3d-0a6c454d954e)。
 * @method void setType(string $Type) 设置DNS 记录类型，取值有：<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li><li>AAAA：将域名指向一个外网 IPv6 地址；</li><li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li><li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li><li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li><li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li><li>CAA：指定可为本站点颁发证书的 CA；</li><li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
不同的记录类型呢例如 SRV、CAA 记录对主机记录名称、记录值格式有不同的要求，各记录类型的详细说明介绍和格式示例请参考：[解析记录类型介绍](https://cloud.tencent.com/document/product/1552/90453#2f681022-91ab-4a9e-ac3d-0a6c454d954e)。
 * @method string getContent() 获取DNS 记录内容，根据 Type 值填入与之相对应的内容，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
 * @method void setContent(string $Content) 设置DNS 记录内容，根据 Type 值填入与之相对应的内容，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
 * @method string getLocation() 获取DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。

- 解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
- 解析线路配置仅适用于标准版、企业版套餐使用，取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
 * @method void setLocation(string $Location) 设置DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。

- 解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
- 解析线路配置仅适用于标准版、企业版套餐使用，取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
 * @method integer getTTL() 获取缓存时间，用户可指定值范围 60~86400，数值越小，修改记录各地生效时间越快，默认为 300，单位：秒。
 * @method void setTTL(integer $TTL) 设置缓存时间，用户可指定值范围 60~86400，数值越小，修改记录各地生效时间越快，默认为 300，单位：秒。
 * @method integer getWeight() 获取DNS 记录权重，用户可指定值范围 -1~100，设置为 0 时表示不解析，不指定默认为 -1，表示不设置权重。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>注意：同一个子域名下，相同解析线路的不同 DNS 记录，应保持同时设置权重或者同时都不设置权重。
 * @method void setWeight(integer $Weight) 设置DNS 记录权重，用户可指定值范围 -1~100，设置为 0 时表示不解析，不指定默认为 -1，表示不设置权重。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>注意：同一个子域名下，相同解析线路的不同 DNS 记录，应保持同时设置权重或者同时都不设置权重。
 * @method integer getPriority() 获取MX 记录优先级，该参数仅在当 Type（DNS 记录类型）为 MX 时生效，值越小优先级越高，用户可指定值范围0~50，不指定默认为0。
 * @method void setPriority(integer $Priority) 设置MX 记录优先级，该参数仅在当 Type（DNS 记录类型）为 MX 时生效，值越小优先级越高，用户可指定值范围0~50，不指定默认为0。
 */
class CreateDnsRecordRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string DNS 记录名，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
     */
    public $Name;

    /**
     * @var string DNS 记录类型，取值有：<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li><li>AAAA：将域名指向一个外网 IPv6 地址；</li><li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li><li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li><li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li><li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li><li>CAA：指定可为本站点颁发证书的 CA；</li><li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
不同的记录类型呢例如 SRV、CAA 记录对主机记录名称、记录值格式有不同的要求，各记录类型的详细说明介绍和格式示例请参考：[解析记录类型介绍](https://cloud.tencent.com/document/product/1552/90453#2f681022-91ab-4a9e-ac3d-0a6c454d954e)。
     */
    public $Type;

    /**
     * @var string DNS 记录内容，根据 Type 值填入与之相对应的内容，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
     */
    public $Content;

    /**
     * @var string DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。

- 解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
- 解析线路配置仅适用于标准版、企业版套餐使用，取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
     */
    public $Location;

    /**
     * @var integer 缓存时间，用户可指定值范围 60~86400，数值越小，修改记录各地生效时间越快，默认为 300，单位：秒。
     */
    public $TTL;

    /**
     * @var integer DNS 记录权重，用户可指定值范围 -1~100，设置为 0 时表示不解析，不指定默认为 -1，表示不设置权重。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>注意：同一个子域名下，相同解析线路的不同 DNS 记录，应保持同时设置权重或者同时都不设置权重。
     */
    public $Weight;

    /**
     * @var integer MX 记录优先级，该参数仅在当 Type（DNS 记录类型）为 MX 时生效，值越小优先级越高，用户可指定值范围0~50，不指定默认为0。
     */
    public $Priority;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Name DNS 记录名，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
     * @param string $Type DNS 记录类型，取值有：<li>A：将域名指向一个外网 IPv4 地址，如 8.8.8.8；</li><li>AAAA：将域名指向一个外网 IPv6 地址；</li><li>MX：用于邮箱服务器。存在多条 MX 记录时，优先级越低越优先；</li><li>CNAME：将域名指向另一个域名，再由该域名解析出最终 IP 地址；</li><li>TXT：对域名进行标识和说明，常用于域名验证和 SPF 记录（反垃圾邮件）；</li><li>NS：如果需要将子域名交给其他 DNS 服务商解析，则需要添加 NS 记录。根域名无法添加 NS 记录；</li><li>CAA：指定可为本站点颁发证书的 CA；</li><li>SRV：标识某台服务器使用了某个服务，常见于微软系统的目录管理。</li>
不同的记录类型呢例如 SRV、CAA 记录对主机记录名称、记录值格式有不同的要求，各记录类型的详细说明介绍和格式示例请参考：[解析记录类型介绍](https://cloud.tencent.com/document/product/1552/90453#2f681022-91ab-4a9e-ac3d-0a6c454d954e)。
     * @param string $Content DNS 记录内容，根据 Type 值填入与之相对应的内容，如果是中文、韩文、日文域名，需要转换为 punycode 后输入。
     * @param string $Location DNS 记录解析线路，不指定默认为 Default，表示默认解析线路，代表全部地域生效。

- 解析线路配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。
- 解析线路配置仅适用于标准版、企业版套餐使用，取值请参考：[解析线路及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
     * @param integer $TTL 缓存时间，用户可指定值范围 60~86400，数值越小，修改记录各地生效时间越快，默认为 300，单位：秒。
     * @param integer $Weight DNS 记录权重，用户可指定值范围 -1~100，设置为 0 时表示不解析，不指定默认为 -1，表示不设置权重。权重配置仅适用于当 Type（DNS 记录类型）为 A、AAAA、CNAME 时。<br>注意：同一个子域名下，相同解析线路的不同 DNS 记录，应保持同时设置权重或者同时都不设置权重。
     * @param integer $Priority MX 记录优先级，该参数仅在当 Type（DNS 记录类型）为 MX 时生效，值越小优先级越高，用户可指定值范围0~50，不指定默认为0。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
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
    }
}
