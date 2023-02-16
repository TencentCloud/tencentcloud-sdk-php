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

namespace TencentCloud\Bma\V20221115;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bma\V20221115\Models as Models;

/**
 * @method Models\CreateBPBrandResponse CreateBPBrand(Models\CreateBPBrandRequest $req) 添加品牌
 * @method Models\CreateBPFakeAPPResponse CreateBPFakeAPP(Models\CreateBPFakeAPPRequest $req) 仿冒应用举报
 * @method Models\CreateBPFakeAPPListResponse CreateBPFakeAPPList(Models\CreateBPFakeAPPListRequest $req) 批量仿冒应用举报
 * @method Models\CreateBPFakeURLResponse CreateBPFakeURL(Models\CreateBPFakeURLRequest $req) 仿冒网址举报
 * @method Models\CreateBPFakeURLsResponse CreateBPFakeURLs(Models\CreateBPFakeURLsRequest $req) 批量仿冒网址举报
 * @method Models\CreateBPWhiteListResponse CreateBPWhiteList(Models\CreateBPWhiteListRequest $req) 添加白名单
 * @method Models\DeleteBPWhiteListResponse DeleteBPWhiteList(Models\DeleteBPWhiteListRequest $req) 删除白名单
 * @method Models\DescribeBPBrandsResponse DescribeBPBrands(Models\DescribeBPBrandsRequest $req) 查询品牌列表
 * @method Models\DescribeBPFakeAPPListResponse DescribeBPFakeAPPList(Models\DescribeBPFakeAPPListRequest $req) 查询仿冒应用列表
 * @method Models\DescribeBPFakeURLsResponse DescribeBPFakeURLs(Models\DescribeBPFakeURLsRequest $req) 查询仿冒网址列表
 * @method Models\DescribeBPWhiteListsResponse DescribeBPWhiteLists(Models\DescribeBPWhiteListsRequest $req) 查询白名单列表
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
    protected $version = "2022-11-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("bma")."\\"."V20221115\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
