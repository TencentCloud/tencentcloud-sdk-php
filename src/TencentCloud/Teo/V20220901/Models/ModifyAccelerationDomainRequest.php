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
 * ModifyAccelerationDomain请求参数结构体
 *
 * @method string getZoneId() 获取加速域名所属站点ID。
 * @method void setZoneId(string $ZoneId) 设置加速域名所属站点ID。
 * @method string getDomainName() 获取加速域名名称。
 * @method void setDomainName(string $DomainName) 设置加速域名名称。
 * @method OriginInfo getOriginInfo() 获取源站信息。
 * @method void setOriginInfo(OriginInfo $OriginInfo) 设置源站信息。
 * @method string getOriginProtocol() 获取回源协议，取值有：
<li>FOLLOW: 协议跟随；</li>
<li>HTTP: HTTP协议回源；</li>
<li>HTTPS: HTTPS协议回源。</li>
<li>不填保持原有配置。</li>
 * @method void setOriginProtocol(string $OriginProtocol) 设置回源协议，取值有：
<li>FOLLOW: 协议跟随；</li>
<li>HTTP: HTTP协议回源；</li>
<li>HTTPS: HTTPS协议回源。</li>
<li>不填保持原有配置。</li>
 * @method integer getHttpOriginPort() 获取HTTP回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTP时生效, 不填保持原有配置。
 * @method void setHttpOriginPort(integer $HttpOriginPort) 设置HTTP回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTP时生效, 不填保持原有配置。
 * @method integer getHttpsOriginPort() 获取HTTPS回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTPS时生效，不填保持原有配置。
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) 设置HTTPS回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTPS时生效，不填保持原有配置。
 * @method string getIPv6Status() 获取IPv6状态，取值有：
<li>follow：遵循站点IPv6配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>
<li>不填保持原有配置。</li>
 * @method void setIPv6Status(string $IPv6Status) 设置IPv6状态，取值有：
<li>follow：遵循站点IPv6配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>
<li>不填保持原有配置。</li>
 */
class ModifyAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string 加速域名所属站点ID。
     */
    public $ZoneId;

    /**
     * @var string 加速域名名称。
     */
    public $DomainName;

    /**
     * @var OriginInfo 源站信息。
     */
    public $OriginInfo;

    /**
     * @var string 回源协议，取值有：
<li>FOLLOW: 协议跟随；</li>
<li>HTTP: HTTP协议回源；</li>
<li>HTTPS: HTTPS协议回源。</li>
<li>不填保持原有配置。</li>
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTP时生效, 不填保持原有配置。
     */
    public $HttpOriginPort;

    /**
     * @var integer HTTPS回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTPS时生效，不填保持原有配置。
     */
    public $HttpsOriginPort;

    /**
     * @var string IPv6状态，取值有：
<li>follow：遵循站点IPv6配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>
<li>不填保持原有配置。</li>
     */
    public $IPv6Status;

    /**
     * @param string $ZoneId 加速域名所属站点ID。
     * @param string $DomainName 加速域名名称。
     * @param OriginInfo $OriginInfo 源站信息。
     * @param string $OriginProtocol 回源协议，取值有：
<li>FOLLOW: 协议跟随；</li>
<li>HTTP: HTTP协议回源；</li>
<li>HTTPS: HTTPS协议回源。</li>
<li>不填保持原有配置。</li>
     * @param integer $HttpOriginPort HTTP回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTP时生效, 不填保持原有配置。
     * @param integer $HttpsOriginPort HTTPS回源端口，取值为1-65535，当OriginProtocol=FOLLOW/HTTPS时生效，不填保持原有配置。
     * @param string $IPv6Status IPv6状态，取值有：
<li>follow：遵循站点IPv6配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>
<li>不填保持原有配置。</li>
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

        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new OriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
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

        if (array_key_exists("IPv6Status",$param) and $param["IPv6Status"] !== null) {
            $this->IPv6Status = $param["IPv6Status"];
        }
    }
}
