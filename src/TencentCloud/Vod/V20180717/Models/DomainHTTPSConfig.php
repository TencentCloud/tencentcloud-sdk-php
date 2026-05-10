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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名 HTTPS 配置信息
 *
 * @method string getCertExpireTime() 获取<p>证书过期时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p><p>参数格式：YYYY-MM-DDThh:mm:ss+08:00</p>
 * @method void setCertExpireTime(string $CertExpireTime) 设置<p>证书过期时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p><p>参数格式：YYYY-MM-DDThh:mm:ss+08:00</p>
 * @method string getCloudCertId() 获取<p>腾讯云 SSL 产品中的证书 ID。</p>
 * @method void setCloudCertId(string $CloudCertId) 设置<p>腾讯云 SSL 产品中的证书 ID。</p>
 */
class DomainHTTPSConfig extends AbstractModel
{
    /**
     * @var string <p>证书过期时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p><p>参数格式：YYYY-MM-DDThh:mm:ss+08:00</p>
     */
    public $CertExpireTime;

    /**
     * @var string <p>腾讯云 SSL 产品中的证书 ID。</p>
     */
    public $CloudCertId;

    /**
     * @param string $CertExpireTime <p>证书过期时间。<li>格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</li></p><p>参数格式：YYYY-MM-DDThh:mm:ss+08:00</p>
     * @param string $CloudCertId <p>腾讯云 SSL 产品中的证书 ID。</p>
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
        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }
    }
}
