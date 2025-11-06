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
 * CheckFreeCertificateVerification请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getDomain() 获取加速域名，该域名为[申请免费证书](https://tcloud4api.woa.com/document/product/1657/927654?!preview&!document=1)时使用的域名。
 * @method void setDomain(string $Domain) 设置加速域名，该域名为[申请免费证书](https://tcloud4api.woa.com/document/product/1657/927654?!preview&!document=1)时使用的域名。
 */
class CheckFreeCertificateVerificationRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 加速域名，该域名为[申请免费证书](https://tcloud4api.woa.com/document/product/1657/927654?!preview&!document=1)时使用的域名。
     */
    public $Domain;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Domain 加速域名，该域名为[申请免费证书](https://tcloud4api.woa.com/document/product/1657/927654?!preview&!document=1)时使用的域名。
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
    }
}
