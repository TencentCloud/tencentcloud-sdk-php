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
 * CreateAccelerationDomain请求参数结构体
 *
 * @method string getZoneId() 获取加速域名所属站点 ID。
 * @method void setZoneId(string $ZoneId) 设置加速域名所属站点 ID。
 * @method string getDomainName() 获取加速域名。
 * @method void setDomainName(string $DomainName) 设置加速域名。
 * @method OriginInfo getOriginInfo() 获取源站信息。
 * @method void setOriginInfo(OriginInfo $OriginInfo) 设置源站信息。
 * @method string getOriginProtocol() 获取回源协议，取值有：
<li>FOLLOW：协议跟随；</li>
<li>HTTP：HTTP 协议回源；</li>
<li>HTTPS：HTTPS 协议回源。</li>不填默认为：FOLLOW。
 * @method void setOriginProtocol(string $OriginProtocol) 设置回源协议，取值有：
<li>FOLLOW：协议跟随；</li>
<li>HTTP：HTTP 协议回源；</li>
<li>HTTPS：HTTPS 协议回源。</li>不填默认为：FOLLOW。
 * @method integer getHttpOriginPort() 获取HTTP 回源端口，默认值80，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTP 时生效。
 * @method void setHttpOriginPort(integer $HttpOriginPort) 设置HTTP 回源端口，默认值80，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTP 时生效。
 * @method integer getHttpsOriginPort() 获取HTTPS 回源端口，默认值443，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTPS 时生效。
 * @method void setHttpsOriginPort(integer $HttpsOriginPort) 设置HTTPS 回源端口，默认值443，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTPS 时生效。
 * @method string getIPv6Status() 获取IPv6 状态，取值有：
<li>follow：遵循站点 IPv6 配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>不填默认为：follow。
 * @method void setIPv6Status(string $IPv6Status) 设置IPv6 状态，取值有：
<li>follow：遵循站点 IPv6 配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>不填默认为：follow。
 * @method string getSharedCNAME() 获取指定域名绑定的共享 CNAME 地址，不传时使用默认 CNAME。
绑定共享 CNAME 要求所有域名的调度策略保持一致，以下配置将影响调度策略，在不一致时绑定共享 CNAME 将按照以下方式处理：
- IPv6 访问：不允许创建域名，请修改 IPv6Status 已保持与共享 CNAME 绑定的其余域名配置一致；
- DDoS 防护：如果选择的共享 CNAME 已启用 DDoS 防护，则创建域名时，将默认为该域名启用 DDoS 防护。
- 中国大陆网络优化（国际加速）：不允许创建域名，请保持当前域名的中国大陆网络优化（国际加速）配置与共享 CNAME 绑定的其余域名一致后重试。

注：共享 CNAME 当前仍在内测中，如需使用，请联系我们开通。
 * @method void setSharedCNAME(string $SharedCNAME) 设置指定域名绑定的共享 CNAME 地址，不传时使用默认 CNAME。
绑定共享 CNAME 要求所有域名的调度策略保持一致，以下配置将影响调度策略，在不一致时绑定共享 CNAME 将按照以下方式处理：
- IPv6 访问：不允许创建域名，请修改 IPv6Status 已保持与共享 CNAME 绑定的其余域名配置一致；
- DDoS 防护：如果选择的共享 CNAME 已启用 DDoS 防护，则创建域名时，将默认为该域名启用 DDoS 防护。
- 中国大陆网络优化（国际加速）：不允许创建域名，请保持当前域名的中国大陆网络优化（国际加速）配置与共享 CNAME 绑定的其余域名一致后重试。

注：共享 CNAME 当前仍在内测中，如需使用，请联系我们开通。
 */
class CreateAccelerationDomainRequest extends AbstractModel
{
    /**
     * @var string 加速域名所属站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 加速域名。
     */
    public $DomainName;

    /**
     * @var OriginInfo 源站信息。
     */
    public $OriginInfo;

    /**
     * @var string 回源协议，取值有：
<li>FOLLOW：协议跟随；</li>
<li>HTTP：HTTP 协议回源；</li>
<li>HTTPS：HTTPS 协议回源。</li>不填默认为：FOLLOW。
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP 回源端口，默认值80，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTP 时生效。
     */
    public $HttpOriginPort;

    /**
     * @var integer HTTPS 回源端口，默认值443，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTPS 时生效。
     */
    public $HttpsOriginPort;

    /**
     * @var string IPv6 状态，取值有：
<li>follow：遵循站点 IPv6 配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>不填默认为：follow。
     */
    public $IPv6Status;

    /**
     * @var string 指定域名绑定的共享 CNAME 地址，不传时使用默认 CNAME。
绑定共享 CNAME 要求所有域名的调度策略保持一致，以下配置将影响调度策略，在不一致时绑定共享 CNAME 将按照以下方式处理：
- IPv6 访问：不允许创建域名，请修改 IPv6Status 已保持与共享 CNAME 绑定的其余域名配置一致；
- DDoS 防护：如果选择的共享 CNAME 已启用 DDoS 防护，则创建域名时，将默认为该域名启用 DDoS 防护。
- 中国大陆网络优化（国际加速）：不允许创建域名，请保持当前域名的中国大陆网络优化（国际加速）配置与共享 CNAME 绑定的其余域名一致后重试。

注：共享 CNAME 当前仍在内测中，如需使用，请联系我们开通。
     */
    public $SharedCNAME;

    /**
     * @param string $ZoneId 加速域名所属站点 ID。
     * @param string $DomainName 加速域名。
     * @param OriginInfo $OriginInfo 源站信息。
     * @param string $OriginProtocol 回源协议，取值有：
<li>FOLLOW：协议跟随；</li>
<li>HTTP：HTTP 协议回源；</li>
<li>HTTPS：HTTPS 协议回源。</li>不填默认为：FOLLOW。
     * @param integer $HttpOriginPort HTTP 回源端口，默认值80，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTP 时生效。
     * @param integer $HttpsOriginPort HTTPS 回源端口，默认值443，取值：1～65535。
当 OriginProtocol = FOLLOW 或 HTTPS 时生效。
     * @param string $IPv6Status IPv6 状态，取值有：
<li>follow：遵循站点 IPv6 配置；</li>
<li>on：开启状态；</li>
<li>off：关闭状态。</li>不填默认为：follow。
     * @param string $SharedCNAME 指定域名绑定的共享 CNAME 地址，不传时使用默认 CNAME。
绑定共享 CNAME 要求所有域名的调度策略保持一致，以下配置将影响调度策略，在不一致时绑定共享 CNAME 将按照以下方式处理：
- IPv6 访问：不允许创建域名，请修改 IPv6Status 已保持与共享 CNAME 绑定的其余域名配置一致；
- DDoS 防护：如果选择的共享 CNAME 已启用 DDoS 防护，则创建域名时，将默认为该域名启用 DDoS 防护。
- 中国大陆网络优化（国际加速）：不允许创建域名，请保持当前域名的中国大陆网络优化（国际加速）配置与共享 CNAME 绑定的其余域名一致后重试。

注：共享 CNAME 当前仍在内测中，如需使用，请联系我们开通。
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

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }
    }
}
