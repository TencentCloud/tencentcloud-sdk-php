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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名证书信息
 *
 * @method integer getCertId() 获取<p>证书Id。</p>
 * @method void setCertId(integer $CertId) 设置<p>证书Id。</p>
 * @method string getCertName() 获取<p>证书名称。</p>
 * @method void setCertName(string $CertName) 设置<p>证书名称。</p>
 * @method string getDescription() 获取<p>描述信息。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息。</p>
 * @method string getCreateTime() 获取<p>创建时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method string getHttpsCrt() 获取<p>证书内容。</p>
 * @method void setHttpsCrt(string $HttpsCrt) 设置<p>证书内容。</p>
 * @method integer getCertType() 获取<p>证书类型。<br>0：用户添加证书，<br>1：腾讯云托管证书。</p>
 * @method void setCertType(integer $CertType) 设置<p>证书类型。<br>0：用户添加证书，<br>1：腾讯云托管证书。</p>
 * @method string getCertExpireTime() 获取<p>证书过期时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method void setCertExpireTime(string $CertExpireTime) 设置<p>证书过期时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method string getDomainName() 获取<p>使用此证书的域名名称。</p>
 * @method void setDomainName(string $DomainName) 设置<p>使用此证书的域名名称。</p>
 * @method integer getStatus() 获取<p>证书状态。</p>
 * @method void setStatus(integer $Status) 设置<p>证书状态。</p>
 * @method array getCertDomains() 获取<p>证书本身标识的域名列表。<br>比如: [&quot;*.x.com&quot;]</p>
 * @method void setCertDomains(array $CertDomains) 设置<p>证书本身标识的域名列表。<br>比如: [&quot;*.x.com&quot;]</p>
 * @method string getCloudCertId() 获取<p>腾讯云ssl的证书Id</p>
 * @method void setCloudCertId(string $CloudCertId) 设置<p>腾讯云ssl的证书Id</p>
 */
class DomainCertInfo extends AbstractModel
{
    /**
     * @var integer <p>证书Id。</p>
     */
    public $CertId;

    /**
     * @var string <p>证书名称。</p>
     */
    public $CertName;

    /**
     * @var string <p>描述信息。</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>证书内容。</p>
     */
    public $HttpsCrt;

    /**
     * @var integer <p>证书类型。<br>0：用户添加证书，<br>1：腾讯云托管证书。</p>
     */
    public $CertType;

    /**
     * @var string <p>证书过期时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
     */
    public $CertExpireTime;

    /**
     * @var string <p>使用此证书的域名名称。</p>
     */
    public $DomainName;

    /**
     * @var integer <p>证书状态。</p>
     */
    public $Status;

    /**
     * @var array <p>证书本身标识的域名列表。<br>比如: [&quot;*.x.com&quot;]</p>
     */
    public $CertDomains;

    /**
     * @var string <p>腾讯云ssl的证书Id</p>
     */
    public $CloudCertId;

    /**
     * @param integer $CertId <p>证书Id。</p>
     * @param string $CertName <p>证书名称。</p>
     * @param string $Description <p>描述信息。</p>
     * @param string $CreateTime <p>创建时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
     * @param string $HttpsCrt <p>证书内容。</p>
     * @param integer $CertType <p>证书类型。<br>0：用户添加证书，<br>1：腾讯云托管证书。</p>
     * @param string $CertExpireTime <p>证书过期时间，UTC格式。<br>注：此字段为北京时间（UTC+8时区）。</p>
     * @param string $DomainName <p>使用此证书的域名名称。</p>
     * @param integer $Status <p>证书状态。</p>
     * @param array $CertDomains <p>证书本身标识的域名列表。<br>比如: [&quot;*.x.com&quot;]</p>
     * @param string $CloudCertId <p>腾讯云ssl的证书Id</p>
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
