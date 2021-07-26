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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertDomains请求参数结构体
 *
 * @method string getCert() 获取PEM格式证书Base64编码后的字符串
 * @method void setCert(string $Cert) 设置PEM格式证书Base64编码后的字符串
 * @method string getCertId() 获取托管证书ID，Cert和CertId不能均未空，都填写时以CerId为准。
 * @method void setCertId(string $CertId) 设置托管证书ID，Cert和CertId不能均未空，都填写时以CerId为准。
 * @method string getProduct() 获取域名所属产品，cdn或ecdn，默认cdn。
 * @method void setProduct(string $Product) 设置域名所属产品，cdn或ecdn，默认cdn。
 */
class DescribeCertDomainsRequest extends AbstractModel
{
    /**
     * @var string PEM格式证书Base64编码后的字符串
     */
    public $Cert;

    /**
     * @var string 托管证书ID，Cert和CertId不能均未空，都填写时以CerId为准。
     */
    public $CertId;

    /**
     * @var string 域名所属产品，cdn或ecdn，默认cdn。
     */
    public $Product;

    /**
     * @param string $Cert PEM格式证书Base64编码后的字符串
     * @param string $CertId 托管证书ID，Cert和CertId不能均未空，都填写时以CerId为准。
     * @param string $Product 域名所属产品，cdn或ecdn，默认cdn。
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
        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
