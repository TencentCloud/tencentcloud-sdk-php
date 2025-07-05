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
 * COS实例详情
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getCertId() 获取已绑定的证书ID
 * @method void setCertId(string $CertId) 设置已绑定的证书ID
 * @method string getStatus() 获取ENABLED: 域名上线状态
DISABLED:域名下线状态
 * @method void setStatus(string $Status) 设置ENABLED: 域名上线状态
DISABLED:域名下线状态
 * @method string getBucket() 获取存储桶名称
 * @method void setBucket(string $Bucket) 设置存储桶名称
 * @method string getRegion() 获取存储桶地域
 * @method void setRegion(string $Region) 设置存储桶地域
 */
class CosInstanceDetail extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 已绑定的证书ID
     */
    public $CertId;

    /**
     * @var string ENABLED: 域名上线状态
DISABLED:域名下线状态
     */
    public $Status;

    /**
     * @var string 存储桶名称
     */
    public $Bucket;

    /**
     * @var string 存储桶地域
     */
    public $Region;

    /**
     * @param string $Domain 域名
     * @param string $CertId 已绑定的证书ID
     * @param string $Status ENABLED: 域名上线状态
DISABLED:域名下线状态
     * @param string $Bucket 存储桶名称
     * @param string $Region 存储桶地域
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

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
