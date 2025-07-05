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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关证书预览信息
 *
 * @method string getName() 获取证书名称
 * @method void setName(string $Name) 设置证书名称
 * @method string getId() 获取Id
 * @method void setId(string $Id) 设置Id
 * @method array getBindDomains() 获取绑定的域名
 * @method void setBindDomains(array $BindDomains) 设置绑定的域名
 * @method string getStatus() 获取证书状态：expired(已过期)
                   active(生效中)
 * @method void setStatus(string $Status) 设置证书状态：expired(已过期)
                   active(生效中)
 * @method string getCrt() 获取证书pem格式
 * @method void setCrt(string $Crt) 设置证书pem格式
 * @method string getKey() 获取证书私钥
 * @method void setKey(string $Key) 设置证书私钥
 * @method string getExpireTime() 获取证书过期时间
 * @method void setExpireTime(string $ExpireTime) 设置证书过期时间
 * @method string getCreateTime() 获取证书上传时间
 * @method void setCreateTime(string $CreateTime) 设置证书上传时间
 * @method string getIssueTime() 获取证书签发时间
 * @method void setIssueTime(string $IssueTime) 设置证书签发时间
 * @method string getCertSource() 获取证书来源：native(kong自定义证书)
                    ssl(ssl平台证书)
 * @method void setCertSource(string $CertSource) 设置证书来源：native(kong自定义证书)
                    ssl(ssl平台证书)
 * @method string getCertId() 获取ssl平台证书Id
 * @method void setCertId(string $CertId) 设置ssl平台证书Id
 */
class KongCertificatesPreview extends AbstractModel
{
    /**
     * @var string 证书名称
     */
    public $Name;

    /**
     * @var string Id
     */
    public $Id;

    /**
     * @var array 绑定的域名
     */
    public $BindDomains;

    /**
     * @var string 证书状态：expired(已过期)
                   active(生效中)
     */
    public $Status;

    /**
     * @var string 证书pem格式
     */
    public $Crt;

    /**
     * @var string 证书私钥
     */
    public $Key;

    /**
     * @var string 证书过期时间
     */
    public $ExpireTime;

    /**
     * @var string 证书上传时间
     */
    public $CreateTime;

    /**
     * @var string 证书签发时间
     */
    public $IssueTime;

    /**
     * @var string 证书来源：native(kong自定义证书)
                    ssl(ssl平台证书)
     */
    public $CertSource;

    /**
     * @var string ssl平台证书Id
     */
    public $CertId;

    /**
     * @param string $Name 证书名称
     * @param string $Id Id
     * @param array $BindDomains 绑定的域名
     * @param string $Status 证书状态：expired(已过期)
                   active(生效中)
     * @param string $Crt 证书pem格式
     * @param string $Key 证书私钥
     * @param string $ExpireTime 证书过期时间
     * @param string $CreateTime 证书上传时间
     * @param string $IssueTime 证书签发时间
     * @param string $CertSource 证书来源：native(kong自定义证书)
                    ssl(ssl平台证书)
     * @param string $CertId ssl平台证书Id
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Crt",$param) and $param["Crt"] !== null) {
            $this->Crt = $param["Crt"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
