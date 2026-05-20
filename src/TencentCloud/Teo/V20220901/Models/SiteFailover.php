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
 * 源站故障转移 配置参数内部结构。
 *
 * @method string getMode() 获取源站故障转移类型。取值有：
<li>FailoverToHost:回源到指定 IP/域名；</li>
<li> FailoverToCOS:回源到腾讯云 COS；</li>
<li>FailoverToS3CompatibleObjectStorage:回源到 S3 兼容；</li>
<li> FailoverRedirectToURL :重定向至指定 URL；</li>
<li> FailoverCustomResponsePage:使用自定义响应页面。</li>
 * @method void setMode(string $Mode) 设置源站故障转移类型。取值有：
<li>FailoverToHost:回源到指定 IP/域名；</li>
<li> FailoverToCOS:回源到腾讯云 COS；</li>
<li>FailoverToS3CompatibleObjectStorage:回源到 S3 兼容；</li>
<li> FailoverRedirectToURL :重定向至指定 URL；</li>
<li> FailoverCustomResponsePage:使用自定义响应页面。</li>
 * @method string getOrigin() 获取源站地址，根据 Mode 的取值分为以下情况：
<li>当 Mode = FailoverToHost 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 Mode = FailoverToCOS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 Mode = FailoverToS3CompatibleObjectStorage，该参数请填写 S3 桶的访问域名。</li>
 * @method void setOrigin(string $Origin) 设置源站地址，根据 Mode 的取值分为以下情况：
<li>当 Mode = FailoverToHost 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 Mode = FailoverToCOS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 Mode = FailoverToS3CompatibleObjectStorage，该参数请填写 S3 桶的访问域名。</li>
 * @method string getOriginProtocol() 获取回源协议配置。当 Mode 取值为 FailoverToHost 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
 * @method void setOriginProtocol(string $OriginProtocol) 设置回源协议配置。当 Mode 取值为 FailoverToHost 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
 * @method integer getHTTPOriginPort() 获取HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
 * @method void setHTTPOriginPort(integer $HTTPOriginPort) 设置HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
 * @method integer getHTTPSOriginPort() 获取HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
 * @method void setHTTPSOriginPort(integer $HTTPSOriginPort) 设置HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
 * @method HostHeaderParameters getUpstreamHostHeader() 获取回源Host Header 重写配置，
 * @method void setUpstreamHostHeader(HostHeaderParameters $UpstreamHostHeader) 设置回源Host Header 重写配置，
 * @method UpstreamURLRewriteParameters getUpstreamURLRewrite() 获取回源 URL 重写配置。
 * @method void setUpstreamURLRewrite(UpstreamURLRewriteParameters $UpstreamURLRewrite) 设置回源 URL 重写配置。
 * @method UpstreamRequestParameters getUpstreamRequestParameters() 获取回源请求参数配置。
 * @method void setUpstreamRequestParameters(UpstreamRequestParameters $UpstreamRequestParameters) 设置回源请求参数配置。
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2Parameters() 获取HTTP2 回源配置参数。
 * @method void setUpstreamHTTP2Parameters(UpstreamHTTP2Parameters $UpstreamHTTP2Parameters) 设置HTTP2 回源配置参数。
 * @method string getPrivateAccess() 获取指定是否允许访问私有对象存储源站，当源站类型 Mode = FailoverToCOS 或 FailoverToS3CompatibleObjectStorage 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
 * @method void setPrivateAccess(string $PrivateAccess) 设置指定是否允许访问私有对象存储源站，当源站类型 Mode = FailoverToCOS 或 FailoverToS3CompatibleObjectStorage 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
 * @method OriginPrivateParameters getPrivateParameters() 获取私有鉴权使用参数，该参数仅当 Mode = FailoverToS3CompatibleObjectStorage 且 PrivateAccess = on 时会生效。
 * @method void setPrivateParameters(OriginPrivateParameters $PrivateParameters) 设置私有鉴权使用参数，该参数仅当 Mode = FailoverToS3CompatibleObjectStorage 且 PrivateAccess = on 时会生效。
 * @method string getRedirectURL() 获取重定向目标 URL。当 Mode 取值为 FailoverRedirectToURL 时该参数必填。
 * @method void setRedirectURL(string $RedirectURL) 设置重定向目标 URL。当 Mode 取值为 FailoverRedirectToURL 时该参数必填。
 * @method string getResponsePageId() 获取响应页面 ID。当 Mode 取值为 FailoverCustomResponsePage 时该参数必填。
 * @method void setResponsePageId(string $ResponsePageId) 设置响应页面 ID。当 Mode 取值为 FailoverCustomResponsePage 时该参数必填。
 * @method integer getStatusCode() 获取响应状态码。当 Mode 取值为 FailoverRedirectToURL 或 FailoverCustomResponsePage 时该参数必填。取值有：
<li>当 Mode = FailoverRedirectToURL 时，该参数取值为 301、302、303、307、308 之一；</li>
<li>当 Mode = FailoverCustomResponsePage 时，该参数取值为 400、403、404、405、414、416、451、500、501、502、503、504 之一。</li>
 * @method void setStatusCode(integer $StatusCode) 设置响应状态码。当 Mode 取值为 FailoverRedirectToURL 或 FailoverCustomResponsePage 时该参数必填。取值有：
<li>当 Mode = FailoverRedirectToURL 时，该参数取值为 301、302、303、307、308 之一；</li>
<li>当 Mode = FailoverCustomResponsePage 时，该参数取值为 400、403、404、405、414、416、451、500、501、502、503、504 之一。</li>
 */
class SiteFailover extends AbstractModel
{
    /**
     * @var string 源站故障转移类型。取值有：
<li>FailoverToHost:回源到指定 IP/域名；</li>
<li> FailoverToCOS:回源到腾讯云 COS；</li>
<li>FailoverToS3CompatibleObjectStorage:回源到 S3 兼容；</li>
<li> FailoverRedirectToURL :重定向至指定 URL；</li>
<li> FailoverCustomResponsePage:使用自定义响应页面。</li>
     */
    public $Mode;

    /**
     * @var string 源站地址，根据 Mode 的取值分为以下情况：
<li>当 Mode = FailoverToHost 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 Mode = FailoverToCOS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 Mode = FailoverToS3CompatibleObjectStorage，该参数请填写 S3 桶的访问域名。</li>
     */
    public $Origin;

    /**
     * @var string 回源协议配置。当 Mode 取值为 FailoverToHost 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
     */
    public $OriginProtocol;

    /**
     * @var integer HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
     */
    public $HTTPOriginPort;

    /**
     * @var integer HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
     */
    public $HTTPSOriginPort;

    /**
     * @var HostHeaderParameters 回源Host Header 重写配置，
     */
    public $UpstreamHostHeader;

    /**
     * @var UpstreamURLRewriteParameters 回源 URL 重写配置。
     */
    public $UpstreamURLRewrite;

    /**
     * @var UpstreamRequestParameters 回源请求参数配置。
     */
    public $UpstreamRequestParameters;

    /**
     * @var UpstreamHTTP2Parameters HTTP2 回源配置参数。
     */
    public $UpstreamHTTP2Parameters;

    /**
     * @var string 指定是否允许访问私有对象存储源站，当源站类型 Mode = FailoverToCOS 或 FailoverToS3CompatibleObjectStorage 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
     */
    public $PrivateAccess;

    /**
     * @var OriginPrivateParameters 私有鉴权使用参数，该参数仅当 Mode = FailoverToS3CompatibleObjectStorage 且 PrivateAccess = on 时会生效。
     */
    public $PrivateParameters;

    /**
     * @var string 重定向目标 URL。当 Mode 取值为 FailoverRedirectToURL 时该参数必填。
     */
    public $RedirectURL;

    /**
     * @var string 响应页面 ID。当 Mode 取值为 FailoverCustomResponsePage 时该参数必填。
     */
    public $ResponsePageId;

    /**
     * @var integer 响应状态码。当 Mode 取值为 FailoverRedirectToURL 或 FailoverCustomResponsePage 时该参数必填。取值有：
<li>当 Mode = FailoverRedirectToURL 时，该参数取值为 301、302、303、307、308 之一；</li>
<li>当 Mode = FailoverCustomResponsePage 时，该参数取值为 400、403、404、405、414、416、451、500、501、502、503、504 之一。</li>
     */
    public $StatusCode;

    /**
     * @param string $Mode 源站故障转移类型。取值有：
<li>FailoverToHost:回源到指定 IP/域名；</li>
<li> FailoverToCOS:回源到腾讯云 COS；</li>
<li>FailoverToS3CompatibleObjectStorage:回源到 S3 兼容；</li>
<li> FailoverRedirectToURL :重定向至指定 URL；</li>
<li> FailoverCustomResponsePage:使用自定义响应页面。</li>
     * @param string $Origin 源站地址，根据 Mode 的取值分为以下情况：
<li>当 Mode = FailoverToHost 时，该参数请填写 IPV4、IPV6 地址或域名；</li>
<li>当 Mode = FailoverToCOS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 Mode = FailoverToS3CompatibleObjectStorage，该参数请填写 S3 桶的访问域名。</li>
     * @param string $OriginProtocol 回源协议配置。当 Mode 取值为 FailoverToHost 时该参数必填。取值有：
<li>http：使用 HTTP 协议；</li>
<li>https：使用 HTTPS 协议；</li>
<li>follow：协议跟随。</li>
     * @param integer $HTTPOriginPort HTTP 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 http 或者 follow 时该参数必填。
     * @param integer $HTTPSOriginPort HTTPS 回源端口，取值范围 1～65535。当回源协议 OriginProtocol 为 https 或者 follow 时该参数必填。
     * @param HostHeaderParameters $UpstreamHostHeader 回源Host Header 重写配置，
     * @param UpstreamURLRewriteParameters $UpstreamURLRewrite 回源 URL 重写配置。
     * @param UpstreamRequestParameters $UpstreamRequestParameters 回源请求参数配置。
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2Parameters HTTP2 回源配置参数。
     * @param string $PrivateAccess 指定是否允许访问私有对象存储源站，当源站类型 Mode = FailoverToCOS 或 FailoverToS3CompatibleObjectStorage 时该参数必填，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
     * @param OriginPrivateParameters $PrivateParameters 私有鉴权使用参数，该参数仅当 Mode = FailoverToS3CompatibleObjectStorage 且 PrivateAccess = on 时会生效。
     * @param string $RedirectURL 重定向目标 URL。当 Mode 取值为 FailoverRedirectToURL 时该参数必填。
     * @param string $ResponsePageId 响应页面 ID。当 Mode 取值为 FailoverCustomResponsePage 时该参数必填。
     * @param integer $StatusCode 响应状态码。当 Mode 取值为 FailoverRedirectToURL 或 FailoverCustomResponsePage 时该参数必填。取值有：
<li>当 Mode = FailoverRedirectToURL 时，该参数取值为 301、302、303、307、308 之一；</li>
<li>当 Mode = FailoverCustomResponsePage 时，该参数取值为 400、403、404、405、414、416、451、500、501、502、503、504 之一。</li>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            $this->OriginProtocol = $param["OriginProtocol"];
        }

        if (array_key_exists("HTTPOriginPort",$param) and $param["HTTPOriginPort"] !== null) {
            $this->HTTPOriginPort = $param["HTTPOriginPort"];
        }

        if (array_key_exists("HTTPSOriginPort",$param) and $param["HTTPSOriginPort"] !== null) {
            $this->HTTPSOriginPort = $param["HTTPSOriginPort"];
        }

        if (array_key_exists("UpstreamHostHeader",$param) and $param["UpstreamHostHeader"] !== null) {
            $this->UpstreamHostHeader = new HostHeaderParameters();
            $this->UpstreamHostHeader->deserialize($param["UpstreamHostHeader"]);
        }

        if (array_key_exists("UpstreamURLRewrite",$param) and $param["UpstreamURLRewrite"] !== null) {
            $this->UpstreamURLRewrite = new UpstreamURLRewriteParameters();
            $this->UpstreamURLRewrite->deserialize($param["UpstreamURLRewrite"]);
        }

        if (array_key_exists("UpstreamRequestParameters",$param) and $param["UpstreamRequestParameters"] !== null) {
            $this->UpstreamRequestParameters = new UpstreamRequestParameters();
            $this->UpstreamRequestParameters->deserialize($param["UpstreamRequestParameters"]);
        }

        if (array_key_exists("UpstreamHTTP2Parameters",$param) and $param["UpstreamHTTP2Parameters"] !== null) {
            $this->UpstreamHTTP2Parameters = new UpstreamHTTP2Parameters();
            $this->UpstreamHTTP2Parameters->deserialize($param["UpstreamHTTP2Parameters"]);
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = new OriginPrivateParameters();
            $this->PrivateParameters->deserialize($param["PrivateParameters"]);
        }

        if (array_key_exists("RedirectURL",$param) and $param["RedirectURL"] !== null) {
            $this->RedirectURL = $param["RedirectURL"];
        }

        if (array_key_exists("ResponsePageId",$param) and $param["ResponsePageId"] !== null) {
            $this->ResponsePageId = $param["ResponsePageId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }
    }
}
