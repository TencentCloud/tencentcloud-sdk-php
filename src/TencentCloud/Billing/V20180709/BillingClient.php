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
* @method Models\DescribeBillDetailResponse DescribeBillDetail(Models\DescribeBillDetailRequest $req) 查询账单明细数据
* @method Models\DescribeBillResourceSummaryResponse DescribeBillResourceSummary(Models\DescribeBillResourceSummaryRequest $req) 查询账单资源汇总数据 
* @method Models\DescribeBillSummaryByPayModeResponse DescribeBillSummaryByPayMode(Models\DescribeBillSummaryByPayModeRequest $req) 获取按付费模式汇总费用分布
* @method Models\DescribeBillSummaryByProductResponse DescribeBillSummaryByProduct(Models\DescribeBillSummaryByProductRequest $req) 获取产品汇总费用分布
* @method Models\DescribeBillSummaryByProjectResponse DescribeBillSummaryByProject(Models\DescribeBillSummaryByProjectRequest $req) 获取按项目汇总费用分布
* @method Models\DescribeBillSummaryByRegionResponse DescribeBillSummaryByRegion(Models\DescribeBillSummaryByRegionRequest $req) 获取按地域汇总费用分布
* @method Models\DescribeBillSummaryByTagResponse DescribeBillSummaryByTag(Models\DescribeBillSummaryByTagRequest $req) 获取按标签汇总费用分布
* @method Models\DescribeDealsByCondResponse DescribeDealsByCond(Models\DescribeDealsByCondRequest $req) 查询订单
* @method Models\DescribeDosageDetailByDateResponse DescribeDosageDetailByDate(Models\DescribeDosageDetailByDateRequest $req) 按日期获取产品用量明细
* @method Models\PayDealsResponse PayDeals(Models\PayDealsRequest $req) 支付订单
 */

class BillingClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "billing.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-07-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("billing")."\\"."V20180709\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
