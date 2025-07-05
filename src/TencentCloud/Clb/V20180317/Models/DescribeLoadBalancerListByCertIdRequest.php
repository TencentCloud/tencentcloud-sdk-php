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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoadBalancerListByCertId请求参数结构体
 *
 * @method array getCertIds() 获取服务端证书的ID，或客户端证书的ID。可以通过 [DescribeCertificate](https://cloud.tencent.com/document/api/400/41674) 接口查询。
数组最大长度为20。
 * @method void setCertIds(array $CertIds) 设置服务端证书的ID，或客户端证书的ID。可以通过 [DescribeCertificate](https://cloud.tencent.com/document/api/400/41674) 接口查询。
数组最大长度为20。
 */
class DescribeLoadBalancerListByCertIdRequest extends AbstractModel
{
    /**
     * @var array 服务端证书的ID，或客户端证书的ID。可以通过 [DescribeCertificate](https://cloud.tencent.com/document/api/400/41674) 接口查询。
数组最大长度为20。
     */
    public $CertIds;

    /**
     * @param array $CertIds 服务端证书的ID，或客户端证书的ID。可以通过 [DescribeCertificate](https://cloud.tencent.com/document/api/400/41674) 接口查询。
数组最大长度为20。
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
        if (array_key_exists("CertIds",$param) and $param["CertIds"] !== null) {
            $this->CertIds = $param["CertIds"];
        }
    }
}
