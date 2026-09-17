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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVodDomainConfig请求参数结构体
 *
 * @method string getDomain() 获取<p>域名。</p>
 * @method void setDomain(string $Domain) 设置<p>域名。</p>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method RefererAuthPolicy getRefererAuthPolicy() 获取<p><a href="/document/product/266/14046">Referer 防盗链</a>规则。</p>
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) 设置<p><a href="/document/product/266/14046">Referer 防盗链</a>规则。</p>
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() 获取<p><a href="/document/product/266/14047">Key 防盗链</a>规则。</p>
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) 设置<p><a href="/document/product/266/14047">Key 防盗链</a>规则。</p>
 * @method DomainQUICConfig getQUICConfig() 获取<p>QUIC 配置。</p>
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) 设置<p>QUIC 配置。</p>
 * @method IPFilterPolicy getIPFilterPolicy() 获取<p>IP 访问限制规则。</p>
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) 设置<p>IP 访问限制规则。</p>
 */
class ModifyVodDomainConfigRequest extends AbstractModel
{
    /**
     * @var string <p>域名。</p>
     */
    public $Domain;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var RefererAuthPolicy <p><a href="/document/product/266/14046">Referer 防盗链</a>规则。</p>
     */
    public $RefererAuthPolicy;

    /**
     * @var UrlSignatureAuthPolicy <p><a href="/document/product/266/14047">Key 防盗链</a>规则。</p>
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var DomainQUICConfig <p>QUIC 配置。</p>
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy <p>IP 访问限制规则。</p>
     */
    public $IPFilterPolicy;

    /**
     * @param string $Domain <p>域名。</p>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param RefererAuthPolicy $RefererAuthPolicy <p><a href="/document/product/266/14046">Referer 防盗链</a>规则。</p>
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy <p><a href="/document/product/266/14047">Key 防盗链</a>规则。</p>
     * @param DomainQUICConfig $QUICConfig <p>QUIC 配置。</p>
     * @param IPFilterPolicy $IPFilterPolicy <p>IP 访问限制规则。</p>
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RefererAuthPolicy",$param) and $param["RefererAuthPolicy"] !== null) {
            $this->RefererAuthPolicy = new RefererAuthPolicy();
            $this->RefererAuthPolicy->deserialize($param["RefererAuthPolicy"]);
        }

        if (array_key_exists("UrlSignatureAuthPolicy",$param) and $param["UrlSignatureAuthPolicy"] !== null) {
            $this->UrlSignatureAuthPolicy = new UrlSignatureAuthPolicy();
            $this->UrlSignatureAuthPolicy->deserialize($param["UrlSignatureAuthPolicy"]);
        }

        if (array_key_exists("QUICConfig",$param) and $param["QUICConfig"] !== null) {
            $this->QUICConfig = new DomainQUICConfig();
            $this->QUICConfig->deserialize($param["QUICConfig"]);
        }

        if (array_key_exists("IPFilterPolicy",$param) and $param["IPFilterPolicy"] !== null) {
            $this->IPFilterPolicy = new IPFilterPolicy();
            $this->IPFilterPolicy->deserialize($param["IPFilterPolicy"]);
        }
    }
}
