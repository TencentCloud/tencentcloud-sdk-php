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
 * @method string getName() 获取<p>证书名称</p>
 * @method void setName(string $Name) 设置<p>证书名称</p>
 * @method string getId() 获取<p>Id</p>
 * @method void setId(string $Id) 设置<p>Id</p>
 * @method array getBindDomains() 获取<p>绑定的域名</p>
 * @method void setBindDomains(array $BindDomains) 设置<p>绑定的域名</p>
 * @method string getStatus() 获取<p>证书状态：expired(已过期)<br>                   active(生效中)</p>
 * @method void setStatus(string $Status) 设置<p>证书状态：expired(已过期)<br>                   active(生效中)</p>
 * @method string getCrt() 获取<p>证书pem格式</p>
 * @method void setCrt(string $Crt) 设置<p>证书pem格式</p>
 * @method string getKey() 获取<p>证书私钥</p>
 * @method void setKey(string $Key) 设置<p>证书私钥</p>
 * @method string getExpireTime() 获取<p>证书过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>证书过期时间</p>
 * @method string getCreateTime() 获取<p>证书上传时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>证书上传时间</p>
 * @method string getIssueTime() 获取<p>证书签发时间</p>
 * @method void setIssueTime(string $IssueTime) 设置<p>证书签发时间</p>
 * @method string getCertSource() 获取<p>证书来源：native(kong自定义证书)<br>                    ssl(ssl平台证书)</p>
 * @method void setCertSource(string $CertSource) 设置<p>证书来源：native(kong自定义证书)<br>                    ssl(ssl平台证书)</p>
 * @method string getCertId() 获取<p>ssl平台证书Id</p>
 * @method void setCertId(string $CertId) 设置<p>ssl平台证书Id</p>
 * @method string getCertType() 获取<p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
 * @method void setCertType(string $CertType) 设置<p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
 * @method string getCertUsage() 获取<p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
 * @method void setCertUsage(string $CertUsage) 设置<p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
 * @method integer getReferCount() 获取<p>证书被引用的次数</p>
 * @method void setReferCount(integer $ReferCount) 设置<p>证书被引用的次数</p>
 */
class KongCertificatesPreview extends AbstractModel
{
    /**
     * @var string <p>证书名称</p>
     */
    public $Name;

    /**
     * @var string <p>Id</p>
     */
    public $Id;

    /**
     * @var array <p>绑定的域名</p>
     */
    public $BindDomains;

    /**
     * @var string <p>证书状态：expired(已过期)<br>                   active(生效中)</p>
     */
    public $Status;

    /**
     * @var string <p>证书pem格式</p>
     */
    public $Crt;

    /**
     * @var string <p>证书私钥</p>
     */
    public $Key;

    /**
     * @var string <p>证书过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>证书上传时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>证书签发时间</p>
     */
    public $IssueTime;

    /**
     * @var string <p>证书来源：native(kong自定义证书)<br>                    ssl(ssl平台证书)</p>
     */
    public $CertSource;

    /**
     * @var string <p>ssl平台证书Id</p>
     */
    public $CertId;

    /**
     * @var string <p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
     */
    public $CertType;

    /**
     * @var string <p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
     */
    public $CertUsage;

    /**
     * @var integer <p>证书被引用的次数</p>
     */
    public $ReferCount;

    /**
     * @param string $Name <p>证书名称</p>
     * @param string $Id <p>Id</p>
     * @param array $BindDomains <p>绑定的域名</p>
     * @param string $Status <p>证书状态：expired(已过期)<br>                   active(生效中)</p>
     * @param string $Crt <p>证书pem格式</p>
     * @param string $Key <p>证书私钥</p>
     * @param string $ExpireTime <p>证书过期时间</p>
     * @param string $CreateTime <p>证书上传时间</p>
     * @param string $IssueTime <p>证书签发时间</p>
     * @param string $CertSource <p>证书来源：native(kong自定义证书)<br>                    ssl(ssl平台证书)</p>
     * @param string $CertId <p>ssl平台证书Id</p>
     * @param string $CertType <p>证书类型</p><p>枚举值：</p><ul><li>SVR： 服务证书</li><li>CA： CA证书</li></ul>
     * @param string $CertUsage <p>证书用途</p><p>枚举值：</p><ul><li>SERVER： 用作服务端证书</li><li>CLIENT： 用作客户端证书</li></ul>
     * @param integer $ReferCount <p>证书被引用的次数</p>
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

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertUsage",$param) and $param["CertUsage"] !== null) {
            $this->CertUsage = $param["CertUsage"];
        }

        if (array_key_exists("ReferCount",$param) and $param["ReferCount"] !== null) {
            $this->ReferCount = $param["ReferCount"];
        }
    }
}
