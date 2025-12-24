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

namespace TencentCloud\Billing\V20180709;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Billing\V20180709\Models as Models;

/**
 * @method Models\CreateAllocationRuleResponse CreateAllocationRule(Models\CreateAllocationRuleRequest $req) 创建公摊规则
 * @method Models\CreateAllocationTagResponse CreateAllocationTag(Models\CreateAllocationTagRequest $req) 批量设置分账标签
 * @method Models\CreateAllocationUnitResponse CreateAllocationUnit(Models\CreateAllocationUnitRequest $req) 创建分账单元
 * @method Models\CreateBudgetResponse CreateBudget(Models\CreateBudgetRequest $req) 创建预算信息
 * @method Models\CreateGatherRuleResponse CreateGatherRule(Models\CreateGatherRuleRequest $req) 创建归集规则
 * @method Models\DeleteAllocationRuleResponse DeleteAllocationRule(Models\DeleteAllocationRuleRequest $req) 公摊规则删除接口
 * @method Models\DeleteAllocationTagResponse DeleteAllocationTag(Models\DeleteAllocationTagRequest $req) 批量取消设置分账标签
 * @method Models\DeleteAllocationUnitResponse DeleteAllocationUnit(Models\DeleteAllocationUnitRequest $req) 删除分账单元
 * @method Models\DeleteBudgetResponse DeleteBudget(Models\DeleteBudgetRequest $req) 依据预算ID删除对应预算项目
 * @method Models\DeleteGatherRuleResponse DeleteGatherRule(Models\DeleteGatherRuleRequest $req) 删除归集规则
 * @method Models\DescribeAccountBalanceResponse DescribeAccountBalance(Models\DescribeAccountBalanceRequest $req) 获取云账户余额信息。
 * @method Models\DescribeAllocateConditionsResponse DescribeAllocateConditions(Models\DescribeAllocateConditionsRequest $req) 查询资源目录筛选条件
 * @method Models\DescribeAllocationBillConditionsResponse DescribeAllocationBillConditions(Models\DescribeAllocationBillConditionsRequest $req) 查询分账账单筛选条件
 * @method Models\DescribeAllocationBillDetailResponse DescribeAllocationBillDetail(Models\DescribeAllocationBillDetailRequest $req) 查询分账账单明细
 * @method Models\DescribeAllocationMonthOverviewResponse DescribeAllocationMonthOverview(Models\DescribeAllocationMonthOverviewRequest $req) 查询分账账单月概览
 * @method Models\DescribeAllocationOverviewResponse DescribeAllocationOverview(Models\DescribeAllocationOverviewRequest $req) 查询分账账单日概览
 * @method Models\DescribeAllocationRuleDetailResponse DescribeAllocationRuleDetail(Models\DescribeAllocationRuleDetailRequest $req) 查询公摊规则详情
 * @method Models\DescribeAllocationRuleSummaryResponse DescribeAllocationRuleSummary(Models\DescribeAllocationRuleSummaryRequest $req) 查询所有公摊规则概览
 * @method Models\DescribeAllocationSummaryByBusinessResponse DescribeAllocationSummaryByBusiness(Models\DescribeAllocationSummaryByBusinessRequest $req) 查询分账账单按产品汇总
 * @method Models\DescribeAllocationSummaryByItemResponse DescribeAllocationSummaryByItem(Models\DescribeAllocationSummaryByItemRequest $req) 查询分账账单按组件汇总
 * @method Models\DescribeAllocationSummaryByResourceResponse DescribeAllocationSummaryByResource(Models\DescribeAllocationSummaryByResourceRequest $req) 查询分账账单按资源汇总
 * @method Models\DescribeAllocationTreeResponse DescribeAllocationTree(Models\DescribeAllocationTreeRequest $req) 查询分账目录树
 * @method Models\DescribeAllocationTrendByMonthResponse DescribeAllocationTrendByMonth(Models\DescribeAllocationTrendByMonthRequest $req) 查询分账账单费用趋势
 * @method Models\DescribeAllocationUnitDetailResponse DescribeAllocationUnitDetail(Models\DescribeAllocationUnitDetailRequest $req) 查询分账单元详情
 * @method Models\DescribeBillAdjustInfoResponse DescribeBillAdjustInfo(Models\DescribeBillAdjustInfoRequest $req) 可以通过API获取当前UIN是否有调账，客户可以更快地主动地获取调账情况。
 * @method Models\DescribeBillDetailResponse DescribeBillDetail(Models\DescribeBillDetailRequest $req) 获取账单明细数据。
注意事项：
1.在请求接口时，由于网络不稳定或其它异常，可能会导致请求失败。如果您遇到这种情况，我们建议您在接口请求失败时，手动发起重试操作，这样可以更好地确保您的接口请求能够成功执行。
2.对于账单明细数据量级很大（例如每月账单明细量级超过20w）的客户，通过 API 调用账单数据效率较低，建议您开通账单数据存储功能，通过存储桶中获取账单文件进行分析。[账单存储至COS桶](https://cloud.tencent.com/document/product/555/61275)
 * @method Models\DescribeBillDetailForOrganizationResponse DescribeBillDetailForOrganization(Models\DescribeBillDetailForOrganizationRequest $req) 成员账号获取管理账号代付账单（费用明细）。
注意事项：在请求接口时，由于网络不稳定或其它异常，可能会导致请求失败。如果您遇到这种情况，我们建议您在接口请求失败时，手动发起重试操作，这样可以更好地确保您的接口请求能够成功执行。
 * @method Models\DescribeBillDownloadUrlResponse DescribeBillDownloadUrl(Models\DescribeBillDownloadUrlRequest $req) 该接口支持通过传参，获取L0-PDF、L1-汇总、L2-资源、L3-明细、账单包、五类账单文件下载链接
 * @method Models\DescribeBillListResponse DescribeBillList(Models\DescribeBillListRequest $req) 获取收支明细列表，支持翻页和参数过滤
 * @method Models\DescribeBillResourceSummaryResponse DescribeBillResourceSummary(Models\DescribeBillResourceSummaryRequest $req) 获取账单资源汇总数据
 * @method Models\DescribeBillResourceSummaryForOrganizationResponse DescribeBillResourceSummaryForOrganization(Models\DescribeBillResourceSummaryForOrganizationRequest $req) 成员账号获取管理账号代付账单（按资源汇总）
 * @method Models\DescribeBillSummaryResponse DescribeBillSummary(Models\DescribeBillSummaryRequest $req) 该接口支持通过传参，按照产品、项目、地域、计费模式和标签五个维度获取账单费用明细。
 * @method Models\DescribeBillSummaryByPayModeResponse DescribeBillSummaryByPayMode(Models\DescribeBillSummaryByPayModeRequest $req) 获取按计费模式汇总费用分布
 * @method Models\DescribeBillSummaryByProductResponse DescribeBillSummaryByProduct(Models\DescribeBillSummaryByProductRequest $req) 获取产品汇总费用分布
 * @method Models\DescribeBillSummaryByProjectResponse DescribeBillSummaryByProject(Models\DescribeBillSummaryByProjectRequest $req) 获取按项目汇总费用分布
 * @method Models\DescribeBillSummaryByRegionResponse DescribeBillSummaryByRegion(Models\DescribeBillSummaryByRegionRequest $req) 获取按地域汇总费用分布
 * @method Models\DescribeBillSummaryByTagResponse DescribeBillSummaryByTag(Models\DescribeBillSummaryByTagRequest $req) 获取按标签汇总费用分布
 * @method Models\DescribeBillSummaryForOrganizationResponse DescribeBillSummaryForOrganization(Models\DescribeBillSummaryForOrganizationRequest $req) 该接口支持通过传参，按照产品、项目、地域、计费模式和标签五个维度获取账单费用明细。
 * @method Models\DescribeBudgetResponse DescribeBudget(Models\DescribeBudgetRequest $req) 获取预算详细信息
 * @method Models\DescribeBudgetOperationLogResponse DescribeBudgetOperationLog(Models\DescribeBudgetOperationLogRequest $req) 查询预算修改记录
 * @method Models\DescribeBudgetRemindRecordListResponse DescribeBudgetRemindRecordList(Models\DescribeBudgetRemindRecordListRequest $req) 返回预算提醒记录，包括预算周期、检测时间、提醒时间、提醒类型、提醒内容
 * @method Models\DescribeCostDetailResponse DescribeCostDetail(Models\DescribeCostDetailRequest $req) 查询消耗明细

注意事项：
1. 对于消耗明细数据量级很大（例如每月消耗明细量级超过100w）的客户，通过 API 调用明细数据会有超时风险，建议您开通消耗账单数据存储功能，通过存储桶中获取账单文件进行分析。[账单存储至COS桶](https://cloud.tencent.com/document/product/555/61275)
 * @method Models\DescribeCostExplorerSummaryResponse DescribeCostExplorerSummary(Models\DescribeCostExplorerSummaryRequest $req) 查看成本分析明细
 * @method Models\DescribeCostSummaryByProductResponse DescribeCostSummaryByProduct(Models\DescribeCostSummaryByProductRequest $req) 获取按产品汇总消耗详情
 * @method Models\DescribeCostSummaryByProjectResponse DescribeCostSummaryByProject(Models\DescribeCostSummaryByProjectRequest $req) 获取按项目汇总消耗详情
 * @method Models\DescribeCostSummaryByRegionResponse DescribeCostSummaryByRegion(Models\DescribeCostSummaryByRegionRequest $req) 获取按地域汇总消耗详情
 * @method Models\DescribeCostSummaryByResourceResponse DescribeCostSummaryByResource(Models\DescribeCostSummaryByResourceRequest $req) 获取按资源汇总消耗详情
 * @method Models\DescribeCostSummaryByTagResponse DescribeCostSummaryByTag(Models\DescribeCostSummaryByTagRequest $req) 获取按标签汇总消耗详情
 * @method Models\DescribeDealsByCondResponse DescribeDealsByCond(Models\DescribeDealsByCondRequest $req) 查询订单
 * @method Models\DescribeDosageCosDetailByDateResponse DescribeDosageCosDetailByDate(Models\DescribeDosageCosDetailByDateRequest $req) 获取COS产品用量明细
 * @method Models\DescribeDosageDetailByDateResponse DescribeDosageDetailByDate(Models\DescribeDosageDetailByDateRequest $req) 按日期获取产品用量明细
 * @method Models\DescribeDosageDetailListResponse DescribeDosageDetailList(Models\DescribeDosageDetailListRequest $req) 获取已接入标准用量明细模板产品的用量明细数据，目前已接入并支持查询的产品包括：云联络中心、实时音视频、实时音视频、智能媒资托管、CODING DevOps、全球IP应用加速
 * @method Models\DescribeGatherResourceResponse DescribeGatherResource(Models\DescribeGatherResourceRequest $req) 查询分账账单资源归集汇总
 * @method Models\DescribeGatherRuleDetailResponse DescribeGatherRuleDetail(Models\DescribeGatherRuleDetailRequest $req) 查询归集规则详情
 * @method Models\DescribeSavingPlanResourceInfoResponse DescribeSavingPlanResourceInfo(Models\DescribeSavingPlanResourceInfoRequest $req) 查询节省计划详情
 * @method Models\DescribeTagListResponse DescribeTagList(Models\DescribeTagListRequest $req) 获取分账标签
 * @method Models\DescribeVoucherInfoResponse DescribeVoucherInfo(Models\DescribeVoucherInfoRequest $req) 获取代金券相关信息
 * @method Models\DescribeVoucherUsageDetailsResponse DescribeVoucherUsageDetails(Models\DescribeVoucherUsageDetailsRequest $req) 获取代金券使用记录
 * @method Models\ModifyAllocationRuleResponse ModifyAllocationRule(Models\ModifyAllocationRuleRequest $req) 编辑公摊规则
 * @method Models\ModifyAllocationUnitResponse ModifyAllocationUnit(Models\ModifyAllocationUnitRequest $req) 修改分账单元信息
 * @method Models\ModifyBudgetResponse ModifyBudget(Models\ModifyBudgetRequest $req) 更新预算信息
 * @method Models\ModifyGatherRuleResponse ModifyGatherRule(Models\ModifyGatherRuleRequest $req) 编辑归集规则
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
