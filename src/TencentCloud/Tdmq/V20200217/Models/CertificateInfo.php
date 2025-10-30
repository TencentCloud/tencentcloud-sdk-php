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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pulsar集群TLS证书信息
 *
 * @method string getCertificateId() 获取SSL证书管理中的id
 * @method void setCertificateId(string $CertificateId) 设置SSL证书管理中的id
 * @method string getExpireTime() 获取证书到期时间
 * @method void setExpireTime(string $ExpireTime) 设置证书到期时间
 * @method string getDomainName() 获取证书绑定的域名
 * @method void setDomainName(string $DomainName) 设置证书绑定的域名
 * @method string getStatus() 获取证书状态：0 已签发
1 即将过期
2 未启用
3 已过期
4 不可用
 * @method void setStatus(string $Status) 设置证书状态：0 已签发
1 即将过期
2 未启用
3 已过期
4 不可用
 * @method string getType() 获取证书类型：0：根证书，1：服务端证书
 * @method void setType(string $Type) 设置证书类型：0：根证书，1：服务端证书
 * @method string getOrigin() 获取TencentCloud：SSL证书；Default：TDMQ官方默认证书
 * @method void setOrigin(string $Origin) 设置TencentCloud：SSL证书；Default：TDMQ官方默认证书
 * @method string getModifyTime() 获取证书添加/更新时间
 * @method void setModifyTime(string $ModifyTime) 设置证书添加/更新时间
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string SSL证书管理中的id
     */
    public $CertificateId;

    /**
     * @var string 证书到期时间
     */
    public $ExpireTime;

    /**
     * @var string 证书绑定的域名
     */
    public $DomainName;

    /**
     * @var string 证书状态：0 已签发
1 即将过期
2 未启用
3 已过期
4 不可用
     */
    public $Status;

    /**
     * @var string 证书类型：0：根证书，1：服务端证书
     */
    public $Type;

    /**
     * @var string TencentCloud：SSL证书；Default：TDMQ官方默认证书
     */
    public $Origin;

    /**
     * @var string 证书添加/更新时间
     */
    public $ModifyTime;

    /**
     * @param string $CertificateId SSL证书管理中的id
     * @param string $ExpireTime 证书到期时间
     * @param string $DomainName 证书绑定的域名
     * @param string $Status 证书状态：0 已签发
1 即将过期
2 未启用
3 已过期
4 不可用
     * @param string $Type 证书类型：0：根证书，1：服务端证书
     * @param string $Origin TencentCloud：SSL证书；Default：TDMQ官方默认证书
     * @param string $ModifyTime 证书添加/更新时间
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
