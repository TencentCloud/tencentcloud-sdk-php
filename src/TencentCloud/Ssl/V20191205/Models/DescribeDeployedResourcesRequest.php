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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeployedResources请求参数结构体
 *
 * @method array getCertificateIds() 获取证书ID
 * @method void setCertificateIds(array $CertificateIds) 设置证书ID
 * @method string getResourceType() 获取资源类型:clb,cdn,live,waf,antiddos
 * @method void setResourceType(string $ResourceType) 设置资源类型:clb,cdn,live,waf,antiddos
 */
class DescribeDeployedResourcesRequest extends AbstractModel
{
    /**
     * @var array 证书ID
     */
    public $CertificateIds;

    /**
     * @var string 资源类型:clb,cdn,live,waf,antiddos
     */
    public $ResourceType;

    /**
     * @param array $CertificateIds 证书ID
     * @param string $ResourceType 资源类型:clb,cdn,live,waf,antiddos
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
        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
