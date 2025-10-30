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
 * UploadUpdateCertificateInstance请求参数结构体
 *
 * @method string getOldCertificateId() 获取一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新
 * @method void setOldCertificateId(string $OldCertificateId) 设置一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新
 * @method array getResourceTypes() 获取需要部署的资源类型，参数值可选（小写）：clb
 * @method void setResourceTypes(array $ResourceTypes) 设置需要部署的资源类型，参数值可选（小写）：clb
 * @method string getCertificatePublicKey() 获取公钥证书
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置公钥证书
 * @method string getCertificatePrivateKey() 获取私钥证书
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置私钥证书
 * @method array getResourceTypesRegions() 获取云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb
 * @method void setResourceTypesRegions(array $ResourceTypesRegions) 设置云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb
 */
class UploadUpdateCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string 一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新
     */
    public $OldCertificateId;

    /**
     * @var array 需要部署的资源类型，参数值可选（小写）：clb
     */
    public $ResourceTypes;

    /**
     * @var string 公钥证书
     */
    public $CertificatePublicKey;

    /**
     * @var string 私钥证书
     */
    public $CertificatePrivateKey;

    /**
     * @var array 云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb
     */
    public $ResourceTypesRegions;

    /**
     * @param string $OldCertificateId 一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新
     * @param array $ResourceTypes 需要部署的资源类型，参数值可选（小写）：clb
     * @param string $CertificatePublicKey 公钥证书
     * @param string $CertificatePrivateKey 私钥证书
     * @param array $ResourceTypesRegions 云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb
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
        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("ResourceTypesRegions",$param) and $param["ResourceTypesRegions"] !== null) {
            $this->ResourceTypesRegions = [];
            foreach ($param["ResourceTypesRegions"] as $key => $value){
                $obj = new ResourceTypeRegions();
                $obj->deserialize($value);
                array_push($this->ResourceTypesRegions, $obj);
            }
        }
    }
}
