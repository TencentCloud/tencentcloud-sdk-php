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

namespace TencentCloud\Billing\V20180709;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Billing\V20180709\Models as Models;

/**
 * @method Models\DescribeAccountBalanceResponse DescribeAccountBalance(Models\DescribeAccountBalanceRequest $req) 获取云账户余额信息。
 * @method Models\DescribeBillDetailResponse DescribeBillDetail(Models\DescribeBillDetailRequest $req) 查询账单明细数据。
注意事项：
1.在请求接口时，由于网络不稳定或其它异常，可能会导致请求失败。如果您遇到这种情况，我们建议您在接口请求失败时，手动发起重试操作，这样可以更好地确保您的接口请求能够成功执行。
2.对于账单明细数据量级很大（例如每月账单明细量级超过20w）的客户，通过 API 调用账单数据效率较低，建议您开通账单数据存储功能，通过存储桶中获取账单文件进行分析。[账单存储至COS桶](https://cloud.tencent.com/document/product/555/61275)
 * @method Models\DescribeBillListResponse DescribeBillList(Models\DescribeBillListRequest $req) 获取收支明细列表，支持翻页和参数过滤
 * @method Models\DescribeBillResourceSummaryResponse DescribeBillResourceSummary(Models\DescribeBillResourceSummaryRequest $req) 查询账单资源汇总数据
 * @method Models\DescribeBillSummaryByPayModeResponse DescribeBillSummaryByPayMode(Models\DescribeBillSummaryByPayModeRequest $req) 获取按付费模式汇总费用分布
 * @method Models\DescribeBillSummaryByProductResponse DescribeBillSummaryByProduct(Models\DescribeBillSummaryByProductRequest $req) 获取产品汇总费用分布
 * @method Models\DescribeBillSummaryByProjectResponse DescribeBillSummaryByProject(Models\DescribeBillSummaryByProjectRequest $req) 获取按项目汇总费用分布
 * @method Models\DescribeBillSummaryByRegionResponse DescribeBillSummaryByRegion(Models\DescribeBillSummaryByRegionRequest $req) 获取按地域汇总费用分布
 * @method Models\DescribeBillSummaryByTagResponse DescribeBillSummaryByTag(Models\DescribeBillSummaryByTagRequest $req) 获取按标签汇总费用分布
 * @method Models\DescribeCostDetailResponse DescribeCostDetail(Models\DescribeCostDetailRequest $req) 查询消耗明细
 * @method Models\DescribeCostSummaryByProductResponse DescribeCostSummaryByProduct(Models\DescribeCostSummaryByProductRequest $req) 获取按产品汇总消耗详情
 * @method Models\DescribeCostSummaryByProjectResponse DescribeCostSummaryByProject(Models\DescribeCostSummaryByProjectRequest $req) 获取按项目汇总消耗详情
 * @method Models\DescribeCostSummaryByRegionResponse DescribeCostSummaryByRegion(Models\DescribeCostSummaryByRegionRequest $req) 获取按地域汇总消耗详情
 * @method Models\DescribeCostSummaryByResourceResponse DescribeCostSummaryByResource(Models\DescribeCostSummaryByResourceRequest $req) 获取按资源汇总消耗详情
 * @method Models\DescribeDealsByCondResponse DescribeDealsByCond(Models\DescribeDealsByCondRequest $req) 查询订单
 * @method Models\DescribeDosageCosDetailByDateResponse DescribeDosageCosDetailByDate(Models\DescribeDosageCosDetailByDateRequest $req) 获取COS产品用量明细
 * @method Models\DescribeDosageDetailByDateResponse DescribeDosageDetailByDate(Models\DescribeDosageDetailByDateRequest $req) 按日期获取产品用量明细
 * @method Models\DescribeVoucherInfoResponse DescribeVoucherInfo(Models\DescribeVoucherInfoRequest $req) 获取代金券相关信息
 * @method Models\DescribeVoucherUsageDetailsResponse DescribeVoucherUsageDetails(Models\DescribeVoucherUsageDetailsRequest $req) 获取代金券使用记录
 * @method Models\PayDealsResponse PayDeals(Models\PayDealsRequest $req) 支付订单
 */

class BillingClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "billing.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "billing";

    /**
     * @var string
     */
    protected $version = "2018-07-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("billing")."\\"."V20180709\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
