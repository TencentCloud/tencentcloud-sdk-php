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
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method RefererAuthPolicy getRefererAuthPolicy() 获取[Referer 防盗链](/document/product/266/14046)规则。
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) 设置[Referer 防盗链](/document/product/266/14046)规则。
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() 获取[Key 防盗链](/document/product/266/14047)规则。
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) 设置[Key 防盗链](/document/product/266/14047)规则。
 * @method DomainQUICConfig getQUICConfig() 获取QUIC 配置。
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) 设置QUIC 配置。
 * @method IPFilterPolicy getIPFilterPolicy() 获取IP 访问限制规则。
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) 设置IP 访问限制规则。
 */
class ModifyVodDomainConfigRequest extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var RefererAuthPolicy [Referer 防盗链](/document/product/266/14046)规则。
     */
    public $RefererAuthPolicy;

    /**
     * @var UrlSignatureAuthPolicy [Key 防盗链](/document/product/266/14047)规则。
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var DomainQUICConfig QUIC 配置。
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy IP 访问限制规则。
     */
    public $IPFilterPolicy;

    /**
     * @param string $Domain 域名。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param RefererAuthPolicy $RefererAuthPolicy [Referer 防盗链](/document/product/266/14046)规则。
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy [Key 防盗链](/document/product/266/14047)规则。
     * @param DomainQUICConfig $QUICConfig QUIC 配置。
     * @param IPFilterPolicy $IPFilterPolicy IP 访问限制规则。
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
