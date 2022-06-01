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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDefaultCertificate请求参数结构体
 *
 * @method string getZoneId() 获取Zone ID
 * @method void setZoneId(string $ZoneId) 设置Zone ID
 * @method string getCertId() 获取默认证书ID
 * @method void setCertId(string $CertId) 设置默认证书ID
 * @method string getStatus() 获取证书状态
deployed: 部署证书
disabled:禁用证书
失败状态下重新deployed即可重试失败
 * @method void setStatus(string $Status) 设置证书状态
deployed: 部署证书
disabled:禁用证书
失败状态下重新deployed即可重试失败
 */
class ModifyDefaultCertificateRequest extends AbstractModel
{
    /**
     * @var string Zone ID
     */
    public $ZoneId;

    /**
     * @var string 默认证书ID
     */
    public $CertId;

    /**
     * @var string 证书状态
deployed: 部署证书
disabled:禁用证书
失败状态下重新deployed即可重试失败
     */
    public $Status;

    /**
     * @param string $ZoneId Zone ID
     * @param string $CertId 默认证书ID
     * @param string $Status 证书状态
deployed: 部署证书
disabled:禁用证书
失败状态下重新deployed即可重试失败
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

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
