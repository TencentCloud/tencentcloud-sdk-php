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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSSLStatus返回参数结构体
 *
 * @method string getIsOpenSSL() 获取<p>yes-开启，no-关闭</p>
 * @method void setIsOpenSSL(string $IsOpenSSL) 设置<p>yes-开启，no-关闭</p>
 * @method string getDownloadUrl() 获取<p>证书下载地址</p>
 * @method void setDownloadUrl(string $DownloadUrl) 设置<p>证书下载地址</p>
 * @method string getCertType() 获取<p>证书类型</p><p>枚举值：</p><ul><li>platform： 云端证书</li><li>custom： 自定义证书</li></ul>
 * @method void setCertType(string $CertType) 设置<p>证书类型</p><p>枚举值：</p><ul><li>platform： 云端证书</li><li>custom： 自定义证书</li></ul>
 * @method CertDetail getCertDetail() 获取<p>自定义证书详情，仅 CertType=custom 时有值。</p>
 * @method void setCertDetail(CertDetail $CertDetail) 设置<p>自定义证书详情，仅 CertType=custom 时有值。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSSLStatusResponse extends AbstractModel
{
    /**
     * @var string <p>yes-开启，no-关闭</p>
     */
    public $IsOpenSSL;

    /**
     * @var string <p>证书下载地址</p>
     */
    public $DownloadUrl;

    /**
     * @var string <p>证书类型</p><p>枚举值：</p><ul><li>platform： 云端证书</li><li>custom： 自定义证书</li></ul>
     */
    public $CertType;

    /**
     * @var CertDetail <p>自定义证书详情，仅 CertType=custom 时有值。</p>
     */
    public $CertDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IsOpenSSL <p>yes-开启，no-关闭</p>
     * @param string $DownloadUrl <p>证书下载地址</p>
     * @param string $CertType <p>证书类型</p><p>枚举值：</p><ul><li>platform： 云端证书</li><li>custom： 自定义证书</li></ul>
     * @param CertDetail $CertDetail <p>自定义证书详情，仅 CertType=custom 时有值。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IsOpenSSL",$param) and $param["IsOpenSSL"] !== null) {
            $this->IsOpenSSL = $param["IsOpenSSL"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertDetail",$param) and $param["CertDetail"] !== null) {
            $this->CertDetail = new CertDetail();
            $this->CertDetail->deserialize($param["CertDetail"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
