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

namespace TencentCloud\Drm\V20181115;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Drm\V20181115\Models as Models;

/**
* @method Models\CreateLicenseResponse CreateLicense(Models\CreateLicenseRequest $req) 本接口用来生成DRM方案对应的播放许可证，开发者需提供DRM方案类型、内容类型参数，后台将生成许可证后返回许可证数据
开发者需要转发终端设备发出的许可证请求信息。
* @method Models\DescribeKeysResponse DescribeKeys(Models\DescribeKeysRequest $req) 开发者需要指定使用的DRM类型、和需要加密的Track类型，后台返回加密使用的密钥
如果加密使用的ContentID没有关联的密钥信息，后台会自动生成新的密钥返回

* @method Models\StartEncryptionResponse StartEncryption(Models\StartEncryptionRequest $req) 开发者调用该接口，启动一次内容文件的DRM加密工作流
 */

class DrmClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "drm.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-11-15";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("drm")."\\"."V20181115\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
