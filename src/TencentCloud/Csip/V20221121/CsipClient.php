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

namespace TencentCloud\Csip\V20221121;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Csip\V20221121\Models as Models;

/**
 * @method Models\AddNewBindRoleUserResponse AddNewBindRoleUser(Models\AddNewBindRoleUserRequest $req) csip角色授权绑定接口
 * @method Models\DescribeCVMAssetInfoResponse DescribeCVMAssetInfo(Models\DescribeCVMAssetInfoRequest $req) cvm详情
 * @method Models\DescribeCVMAssetsResponse DescribeCVMAssets(Models\DescribeCVMAssetsRequest $req) cvm列表
 * @method Models\DescribeDbAssetInfoResponse DescribeDbAssetInfo(Models\DescribeDbAssetInfoRequest $req) db资产详情
 * @method Models\DescribeDbAssetsResponse DescribeDbAssets(Models\DescribeDbAssetsRequest $req) 资产列表
 * @method Models\DescribeScanReportListResponse DescribeScanReportList(Models\DescribeScanReportListRequest $req) 获取扫描报告列表
 * @method Models\DescribeSubnetAssetsResponse DescribeSubnetAssets(Models\DescribeSubnetAssetsRequest $req) 获取子网列表
 * @method Models\DescribeVpcAssetsResponse DescribeVpcAssets(Models\DescribeVpcAssetsRequest $req) 获取vpc列表
 */

class CsipClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "csip.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "csip";

    /**
     * @var string
     */
    protected $version = "2022-11-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("csip")."\\"."V20221121\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
