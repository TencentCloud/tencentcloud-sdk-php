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
 * ModifyZone请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getType() 获取站点接入方式，取值有：
<li>full：NS 接入；</li>
<li>partial：CNAME 接入，如果站点当前是无域名接入，仅支持切换到 CNAME 接入；</li>
<li>dnsPodAccess：DNSPod 托管接入，该接入模式要求您的域名已托管在 DNSPod 内。</li>不填写保持原有配置。
 * @method void setType(string $Type) 设置站点接入方式，取值有：
<li>full：NS 接入；</li>
<li>partial：CNAME 接入，如果站点当前是无域名接入，仅支持切换到 CNAME 接入；</li>
<li>dnsPodAccess：DNSPod 托管接入，该接入模式要求您的域名已托管在 DNSPod 内。</li>不填写保持原有配置。
 * @method VanityNameServers getVanityNameServers() 获取自定义站点信息，以替代系统默认分配的名称服务器。不填写保持原有配置。当站点是无域名接入方式时不允许传此参数。
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) 设置自定义站点信息，以替代系统默认分配的名称服务器。不填写保持原有配置。当站点是无域名接入方式时不允许传此参数。
 * @method string getAliasZoneName() 获取同名站点标识。限制输入数字、英文、"." 、"-" 和 "_"，长度 200 个字符以内。
 * @method void setAliasZoneName(string $AliasZoneName) 设置同名站点标识。限制输入数字、英文、"." 、"-" 和 "_"，长度 200 个字符以内。
 * @method string getArea() 获取站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>当站点是无域名接入方式时，不允许传此参数。
 * @method void setArea(string $Area) 设置站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>当站点是无域名接入方式时，不允许传此参数。
 * @method string getZoneName() 获取站点名称。仅当站点由无域名接入方式切换到CNAME接入方式的场景下有效。
 * @method void setZoneName(string $ZoneName) 设置站点名称。仅当站点由无域名接入方式切换到CNAME接入方式的场景下有效。
 */
class ModifyZoneRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 站点接入方式，取值有：
<li>full：NS 接入；</li>
<li>partial：CNAME 接入，如果站点当前是无域名接入，仅支持切换到 CNAME 接入；</li>
<li>dnsPodAccess：DNSPod 托管接入，该接入模式要求您的域名已托管在 DNSPod 内。</li>不填写保持原有配置。
     */
    public $Type;

    /**
     * @var VanityNameServers 自定义站点信息，以替代系统默认分配的名称服务器。不填写保持原有配置。当站点是无域名接入方式时不允许传此参数。
     */
    public $VanityNameServers;

    /**
     * @var string 同名站点标识。限制输入数字、英文、"." 、"-" 和 "_"，长度 200 个字符以内。
     */
    public $AliasZoneName;

    /**
     * @var string 站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>当站点是无域名接入方式时，不允许传此参数。
     */
    public $Area;

    /**
     * @var string 站点名称。仅当站点由无域名接入方式切换到CNAME接入方式的场景下有效。
     */
    public $ZoneName;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Type 站点接入方式，取值有：
<li>full：NS 接入；</li>
<li>partial：CNAME 接入，如果站点当前是无域名接入，仅支持切换到 CNAME 接入；</li>
<li>dnsPodAccess：DNSPod 托管接入，该接入模式要求您的域名已托管在 DNSPod 内。</li>不填写保持原有配置。
     * @param VanityNameServers $VanityNameServers 自定义站点信息，以替代系统默认分配的名称服务器。不填写保持原有配置。当站点是无域名接入方式时不允许传此参数。
     * @param string $AliasZoneName 同名站点标识。限制输入数字、英文、"." 、"-" 和 "_"，长度 200 个字符以内。
     * @param string $Area 站点接入地域，取值有：
<li> global：全球；</li>
<li> mainland：中国大陆；</li>
<li> overseas：境外区域。</li>当站点是无域名接入方式时，不允许传此参数。
     * @param string $ZoneName 站点名称。仅当站点由无域名接入方式切换到CNAME接入方式的场景下有效。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
