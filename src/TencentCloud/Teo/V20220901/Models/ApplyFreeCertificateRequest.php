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
 * ApplyFreeCertificate请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getDomain() 获取申请免费证书的目标域名。
 * @method void setDomain(string $Domain) 设置申请免费证书的目标域名。
 * @method string getVerificationMethod() 获取申请免费证书时验证方式，详细验证方式说明参考[免费证书申请方式说明文档](https://cloud.tencent.com/document/product/1552/90437) ，相关取值有：
<li>http_challenge：HTTP 访问文件验证方式，通过 HTTP 访问域名指定 URL 获取文件信息以完成免费证书申请验证；</li>
<li>dns_challenge：DNS 委派验证方式，通过添加指定的主机记录解析指向 EdgeOne 以完成免费证书申请验证。</li>
注意：在触发本接口后，你需要根据返回的验证信息，完成验证内容配置。配置完成后，还需要通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口进行验证，验证通过后，即可申请成功。在免费证书申请成功后，你可以调用<a href = 'https://cloud.tencent.com/document/product/1552/80764'>配置域名证书</a>接口为当前域名部署免费证书。
 * @method void setVerificationMethod(string $VerificationMethod) 设置申请免费证书时验证方式，详细验证方式说明参考[免费证书申请方式说明文档](https://cloud.tencent.com/document/product/1552/90437) ，相关取值有：
<li>http_challenge：HTTP 访问文件验证方式，通过 HTTP 访问域名指定 URL 获取文件信息以完成免费证书申请验证；</li>
<li>dns_challenge：DNS 委派验证方式，通过添加指定的主机记录解析指向 EdgeOne 以完成免费证书申请验证。</li>
注意：在触发本接口后，你需要根据返回的验证信息，完成验证内容配置。配置完成后，还需要通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口进行验证，验证通过后，即可申请成功。在免费证书申请成功后，你可以调用<a href = 'https://cloud.tencent.com/document/product/1552/80764'>配置域名证书</a>接口为当前域名部署免费证书。
 */
class ApplyFreeCertificateRequest extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 申请免费证书的目标域名。
     */
    public $Domain;

    /**
     * @var string 申请免费证书时验证方式，详细验证方式说明参考[免费证书申请方式说明文档](https://cloud.tencent.com/document/product/1552/90437) ，相关取值有：
<li>http_challenge：HTTP 访问文件验证方式，通过 HTTP 访问域名指定 URL 获取文件信息以完成免费证书申请验证；</li>
<li>dns_challenge：DNS 委派验证方式，通过添加指定的主机记录解析指向 EdgeOne 以完成免费证书申请验证。</li>
注意：在触发本接口后，你需要根据返回的验证信息，完成验证内容配置。配置完成后，还需要通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口进行验证，验证通过后，即可申请成功。在免费证书申请成功后，你可以调用<a href = 'https://cloud.tencent.com/document/product/1552/80764'>配置域名证书</a>接口为当前域名部署免费证书。
     */
    public $VerificationMethod;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $Domain 申请免费证书的目标域名。
     * @param string $VerificationMethod 申请免费证书时验证方式，详细验证方式说明参考[免费证书申请方式说明文档](https://cloud.tencent.com/document/product/1552/90437) ，相关取值有：
<li>http_challenge：HTTP 访问文件验证方式，通过 HTTP 访问域名指定 URL 获取文件信息以完成免费证书申请验证；</li>
<li>dns_challenge：DNS 委派验证方式，通过添加指定的主机记录解析指向 EdgeOne 以完成免费证书申请验证。</li>
注意：在触发本接口后，你需要根据返回的验证信息，完成验证内容配置。配置完成后，还需要通过<a href = 'https://tcloud4api.woa.com/document/product/1657/927938?!preview&!document=1'>检查免费证书申请结果</a>接口进行验证，验证通过后，即可申请成功。在免费证书申请成功后，你可以调用<a href = 'https://cloud.tencent.com/document/product/1552/80764'>配置域名证书</a>接口为当前域名部署免费证书。
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VerificationMethod",$param) and $param["VerificationMethod"] !== null) {
            $this->VerificationMethod = $param["VerificationMethod"];
        }
    }
}
