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
 * SetVodDomainCertificate请求参数结构体
 *
 * @method string getDomain() 获取<p>域名。</p>
 * @method void setDomain(string $Domain) 设置<p>域名。</p>
 * @method string getOperation() 获取<p>本次接口调用的操作类型，可选值：</p><li>Set：设置域名的 HTTPS 所需证书；</li><li>Clear: 清空域名 HTTPS 配置，清空后该域名无法支持 HTTPS 访问。</li>
 * @method void setOperation(string $Operation) 设置<p>本次接口调用的操作类型，可选值：</p><li>Set：设置域名的 HTTPS 所需证书；</li><li>Clear: 清空域名 HTTPS 配置，清空后该域名无法支持 HTTPS 访问。</li>
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getCertID() 获取<p><a href="/document/product/400/7572">腾讯云SSL</a> 上传的证书 ID。清空域名 HTTPS 配置时无需填写该字段。</p>
 * @method void setCertID(string $CertID) 设置<p><a href="/document/product/400/7572">腾讯云SSL</a> 上传的证书 ID。清空域名 HTTPS 配置时无需填写该字段。</p>
 */
class SetVodDomainCertificateRequest extends AbstractModel
{
    /**
     * @var string <p>域名。</p>
     */
    public $Domain;

    /**
     * @var string <p>本次接口调用的操作类型，可选值：</p><li>Set：设置域名的 HTTPS 所需证书；</li><li>Clear: 清空域名 HTTPS 配置，清空后该域名无法支持 HTTPS 访问。</li>
     */
    public $Operation;

    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p><a href="/document/product/400/7572">腾讯云SSL</a> 上传的证书 ID。清空域名 HTTPS 配置时无需填写该字段。</p>
     */
    public $CertID;

    /**
     * @param string $Domain <p>域名。</p>
     * @param string $Operation <p>本次接口调用的操作类型，可选值：</p><li>Set：设置域名的 HTTPS 所需证书；</li><li>Clear: 清空域名 HTTPS 配置，清空后该域名无法支持 HTTPS 访问。</li>
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $CertID <p><a href="/document/product/400/7572">腾讯云SSL</a> 上传的证书 ID。清空域名 HTTPS 配置时无需填写该字段。</p>
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("CertID",$param) and $param["CertID"] !== null) {
            $this->CertID = $param["CertID"];
        }
    }
}
