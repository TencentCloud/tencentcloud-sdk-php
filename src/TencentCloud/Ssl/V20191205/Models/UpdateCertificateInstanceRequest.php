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
 * UpdateCertificateInstance请求参数结构体
 *
 * @method string getCertificateId() 获取一键更新新证书ID
 * @method void setCertificateId(string $CertificateId) 设置一键更新新证书ID
 * @method string getOldCertificateId() 获取一键更新原证书ID
 * @method void setOldCertificateId(string $OldCertificateId) 设置一键更新原证书ID
 * @method array getResourceTypes() 获取需要部署的资源类型，参数值可选：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb
 * @method void setResourceTypes(array $ResourceTypes) 设置需要部署的资源类型，参数值可选：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb
 * @method array getRegions() 获取需要部署的地域列表（废弃）
 * @method void setRegions(array $Regions) 设置需要部署的地域列表（废弃）
 * @method array getResourceTypesRegions() 获取云资源需要部署的地域列表
 * @method void setResourceTypesRegions(array $ResourceTypesRegions) 设置云资源需要部署的地域列表
 */
class UpdateCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string 一键更新新证书ID
     */
    public $CertificateId;

    /**
     * @var string 一键更新原证书ID
     */
    public $OldCertificateId;

    /**
     * @var array 需要部署的资源类型，参数值可选：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb
     */
    public $ResourceTypes;

    /**
     * @var array 需要部署的地域列表（废弃）
     * @deprecated
     */
    public $Regions;

    /**
     * @var array 云资源需要部署的地域列表
     */
    public $ResourceTypesRegions;

    /**
     * @param string $CertificateId 一键更新新证书ID
     * @param string $OldCertificateId 一键更新原证书ID
     * @param array $ResourceTypes 需要部署的资源类型，参数值可选：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb
     * @param array $Regions 需要部署的地域列表（废弃）
     * @param array $ResourceTypesRegions 云资源需要部署的地域列表
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

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
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
