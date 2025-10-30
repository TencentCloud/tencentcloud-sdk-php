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

namespace TencentCloud\Svp\V20240125;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Svp\V20240125\Models as Models;

/**
 * @method Models\CreateSavingPlanOrderResponse CreateSavingPlanOrder(Models\CreateSavingPlanOrderRequest $req) 创建节省计划订单
 * @method Models\DescribeSavingPlanCoverageResponse DescribeSavingPlanCoverage(Models\DescribeSavingPlanCoverageRequest $req) 查询当前用户节省计划覆盖率明细数据，如无特别说明，金额单位均为元（国内站）或者美元（国际站）。
 * @method Models\DescribeSavingPlanDeductResponse DescribeSavingPlanDeduct(Models\DescribeSavingPlanDeductRequest $req) 查询节省计划抵扣明细
 * @method Models\DescribeSavingPlanOverviewResponse DescribeSavingPlanOverview(Models\DescribeSavingPlanOverviewRequest $req) 查用当前用户明细节省计划总览查询时段内的使用情况
 * @method Models\DescribeSavingPlanUsageResponse DescribeSavingPlanUsage(Models\DescribeSavingPlanUsageRequest $req) 查用当前用户明细节省计划查询时段内的使用情况
 */

class SvpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "svp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "svp";

    /**
     * @var string
     */
    protected $version = "2024-01-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("svp")."\\"."V20240125\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
