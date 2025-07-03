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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名证书信息
 *
 * @method integer getCertId() 获取证书Id。
 * @method void setCertId(integer $CertId) 设置证书Id。
 * @method string getCertName() 获取证书名称。
 * @method void setCertName(string $CertName) 设置证书名称。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method string getCreateTime() 获取创建时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
 * @method string getHttpsCrt() 获取证书内容。
 * @method void setHttpsCrt(string $HttpsCrt) 设置证书内容。
 * @method integer getCertType() 获取证书类型。
0：用户添加证书，
1：腾讯云托管证书。
 * @method void setCertType(integer $CertType) 设置证书类型。
0：用户添加证书，
1：腾讯云托管证书。
 * @method string getCertExpireTime() 获取证书过期时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
 * @method void setCertExpireTime(string $CertExpireTime) 设置证书过期时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
 * @method string getDomainName() 获取使用此证书的域名名称。
 * @method void setDomainName(string $DomainName) 设置使用此证书的域名名称。
 * @method integer getStatus() 获取证书状态。
 * @method void setStatus(integer $Status) 设置证书状态。
 * @method array getCertDomains() 获取证书本身标识的域名列表。
比如: ["*.x.com"]
 * @method void setCertDomains(array $CertDomains) 设置证书本身标识的域名列表。
比如: ["*.x.com"]
 * @method string getCloudCertId() 获取腾讯云ssl的证书Id
 * @method void setCloudCertId(string $CloudCertId) 设置腾讯云ssl的证书Id
 */
class DomainCertInfo extends AbstractModel
{
    /**
     * @var integer 证书Id。
     */
    public $CertId;

    /**
     * @var string 证书名称。
     */
    public $CertName;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var string 创建时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
     */
    public $CreateTime;

    /**
     * @var string 证书内容。
     */
    public $HttpsCrt;

    /**
     * @var integer 证书类型。
0：用户添加证书，
1：腾讯云托管证书。
     */
    public $CertType;

    /**
     * @var string 证书过期时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
     */
    public $CertExpireTime;

    /**
     * @var string 使用此证书的域名名称。
     */
    public $DomainName;

    /**
     * @var integer 证书状态。
     */
    public $Status;

    /**
     * @var array 证书本身标识的域名列表。
比如: ["*.x.com"]
     */
    public $CertDomains;

    /**
     * @var string 腾讯云ssl的证书Id
     */
    public $CloudCertId;

    /**
     * @param integer $CertId 证书Id。
     * @param string $CertName 证书名称。
     * @param string $Description 描述信息。
     * @param string $CreateTime 创建时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
     * @param string $HttpsCrt 证书内容。
     * @param integer $CertType 证书类型。
0：用户添加证书，
1：腾讯云托管证书。
     * @param string $CertExpireTime 证书过期时间，UTC格式。
注：此字段为北京时间（UTC+8时区）。
     * @param string $DomainName 使用此证书的域名名称。
     * @param integer $Status 证书状态。
     * @param array $CertDomains 证书本身标识的域名列表。
比如: ["*.x.com"]
     * @param string $CloudCertId 腾讯云ssl的证书Id
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("HttpsCrt",$param) and $param["HttpsCrt"] !== null) {
            $this->HttpsCrt = $param["HttpsCrt"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertDomains",$param) and $param["CertDomains"] !== null) {
            $this->CertDomains = $param["CertDomains"];
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }
    }
}
