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

namespace TencentCloud\Bma\V20210624;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bma\V20210624\Models as Models;

/**
 * @method Models\CreateCRBlockResponse CreateCRBlock(Models\CreateCRBlockRequest $req) 版权保护-新建拦截接口
 * @method Models\CreateCRCompanyVerifyResponse CreateCRCompanyVerify(Models\CreateCRCompanyVerifyRequest $req) 品牌经营管家-版权保护模块企业认证接口
 * @method Models\CreateCRRightResponse CreateCRRight(Models\CreateCRRightRequest $req) 版权保护-新建发函接口
 * @method Models\DescribeCRWorkInfoResponse DescribeCRWorkInfo(Models\DescribeCRWorkInfoRequest $req) 查询作品基本信息
 */

class BmaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bma.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bma";

    /**
     * @var string
     */
    protected $version = "2021-06-24";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("bma")."\\"."V20210624\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
