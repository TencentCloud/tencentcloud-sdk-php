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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListExternalSAMLIdPCertificates返回参数结构体
 *
 * @method integer getTotalCounts() 获取符合请求参数条件的数据总条数。
 * @method void setTotalCounts(integer $TotalCounts) 设置符合请求参数条件的数据总条数。
 * @method array getSAMLIdPCertificates() 获取SAML 签名证书列表
 * @method void setSAMLIdPCertificates(array $SAMLIdPCertificates) 设置SAML 签名证书列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListExternalSAMLIdPCertificatesResponse extends AbstractModel
{
    /**
     * @var integer 符合请求参数条件的数据总条数。
     */
    public $TotalCounts;

    /**
     * @var array SAML 签名证书列表
     */
    public $SAMLIdPCertificates;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCounts 符合请求参数条件的数据总条数。
     * @param array $SAMLIdPCertificates SAML 签名证书列表
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
        if (array_key_exists("TotalCounts",$param) and $param["TotalCounts"] !== null) {
            $this->TotalCounts = $param["TotalCounts"];
        }

        if (array_key_exists("SAMLIdPCertificates",$param) and $param["SAMLIdPCertificates"] !== null) {
            $this->SAMLIdPCertificates = [];
            foreach ($param["SAMLIdPCertificates"] as $key => $value){
                $obj = new SAMLIdPCertificate();
                $obj->deserialize($value);
                array_push($this->SAMLIdPCertificates, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
