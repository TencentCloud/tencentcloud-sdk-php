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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommitCertificateInformation请求参数结构体
 *
 * @method string getCertificateId() 获取待提交资料的付费证书 ID。	
 * @method void setCertificateId(string $CertificateId) 设置待提交资料的付费证书 ID。	
 * @method string getVerifyType() 获取证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
 * @method void setVerifyType(string $VerifyType) 设置证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
 */
class CommitCertificateInformationRequest extends AbstractModel
{
    /**
     * @var string 待提交资料的付费证书 ID。	
     */
    public $CertificateId;

    /**
     * @var string 证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
     */
    public $VerifyType;

    /**
     * @param string $CertificateId 待提交资料的付费证书 ID。	
     * @param string $VerifyType 证书域名验证方式：
DNS_AUTO： 自动添加域名DNS验证， 需用户域名解析托管在『[云解析DNS](https://console.cloud.tencent.com/cns)』，且与申请证书归属同一个腾讯云账号
DNS：手动添加域名DNS验证，需用户手动去域名解析服务商添加验证值
FILE：手动添加域名文件验证。 需要用户手动在域名站点根目录添加指定路径文件进行文件验证， http&https任一通过即可；且域名站点需海外CA机构能访问， 具体访问白名单为：64.78.193.238，216.168.247.9，216.168.249.9，54.189.196.217
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
