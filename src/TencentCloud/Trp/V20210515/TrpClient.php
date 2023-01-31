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

namespace TencentCloud\Trp\V20210515;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trp\V20210515\Models as Models;

/**
 * @method Models\CreateCodeBatchResponse CreateCodeBatch(Models\CreateCodeBatchRequest $req) 新增批次
 * @method Models\CreateCodePackResponse CreateCodePack(Models\CreateCodePackRequest $req) 生成普通码包
 * @method Models\CreateCorporationOrderResponse CreateCorporationOrder(Models\CreateCorporationOrderRequest $req) 以订单方式新建企业信息/配额信息
 * @method Models\CreateCustomPackResponse CreateCustomPack(Models\CreateCustomPackRequest $req) 生成自定义码包
 * @method Models\CreateCustomRuleResponse CreateCustomRule(Models\CreateCustomRuleRequest $req) 新建自定义码规则
 * @method Models\CreateMerchantResponse CreateMerchant(Models\CreateMerchantRequest $req) 新建商户
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 新建商品
 * @method Models\CreateTraceChainResponse CreateTraceChain(Models\CreateTraceChainRequest $req) 上链溯源信息
 * @method Models\CreateTraceCodesResponse CreateTraceCodes(Models\CreateTraceCodesRequest $req) 批量导入二维码，只支持平台发的码
 * @method Models\CreateTraceCodesAsyncResponse CreateTraceCodesAsync(Models\CreateTraceCodesAsyncRequest $req) 异步导入激活码包，如果是第三方码包，需要域名跟配置的匹配
 * @method Models\CreateTraceDataResponse CreateTraceData(Models\CreateTraceDataRequest $req) 新增溯源信息
 * @method Models\DeleteCodeBatchResponse DeleteCodeBatch(Models\DeleteCodeBatchRequest $req) 删除批次
 * @method Models\DeleteMerchantResponse DeleteMerchant(Models\DeleteMerchantRequest $req) 删除商户
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 删除商品，如果商品被使用，则不可删除
 * @method Models\DeleteTraceDataResponse DeleteTraceData(Models\DeleteTraceDataRequest $req) 删除溯源信息，如果已经上链则不可删除
 * @method Models\DescribeCodeBatchByIdResponse DescribeCodeBatchById(Models\DescribeCodeBatchByIdRequest $req) 查询批次信息
 * @method Models\DescribeCodeBatchsResponse DescribeCodeBatchs(Models\DescribeCodeBatchsRequest $req) 查询批次列表
 * @method Models\DescribeCodePackStatusResponse DescribeCodePackStatus(Models\DescribeCodePackStatusRequest $req) 查询码包状态
 * @method Models\DescribeCodePackUrlResponse DescribeCodePackUrl(Models\DescribeCodePackUrlRequest $req) 查询码包地址
 * @method Models\DescribeCodePacksResponse DescribeCodePacks(Models\DescribeCodePacksRequest $req) 查询码包列表
 * @method Models\DescribeCodesByPackResponse DescribeCodesByPack(Models\DescribeCodesByPackRequest $req) 查询码包的二维码列表，上限 3 万
 * @method Models\DescribeCorpQuotasResponse DescribeCorpQuotas(Models\DescribeCorpQuotasRequest $req) 查询渠道商下属企业额度使用情况
 * @method Models\DescribeCustomRuleByIdResponse DescribeCustomRuleById(Models\DescribeCustomRuleByIdRequest $req) 查自定义码规则
 * @method Models\DescribeCustomRulesResponse DescribeCustomRules(Models\DescribeCustomRulesRequest $req) 查自定义码规则列表
 * @method Models\DescribeJobFileUrlResponse DescribeJobFileUrl(Models\DescribeJobFileUrlRequest $req) 获取异步任务的输出地址
 * @method Models\DescribeMerchantByIdResponse DescribeMerchantById(Models\DescribeMerchantByIdRequest $req) 查询商户信息
 * @method Models\DescribeMerchantsResponse DescribeMerchants(Models\DescribeMerchantsRequest $req) 查询商户列表
 * @method Models\DescribeProductByIdResponse DescribeProductById(Models\DescribeProductByIdRequest $req) 查询商品信息
 * @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) 查询商品列表
 * @method Models\DescribeScanLogsResponse DescribeScanLogs(Models\DescribeScanLogsRequest $req) 查询扫码日志明细
 * @method Models\DescribeScanStatsResponse DescribeScanStats(Models\DescribeScanStatsRequest $req) 查询某个批次被扫码的统计列表，没有被扫过的不会返回
 * @method Models\DescribeTmpTokenResponse DescribeTmpToken(Models\DescribeTmpTokenRequest $req) 查询临时Token，主要用于上传接口
 * @method Models\DescribeTraceCodeByIdResponse DescribeTraceCodeById(Models\DescribeTraceCodeByIdRequest $req) 查询二维码信息
 * @method Models\DescribeTraceCodesResponse DescribeTraceCodes(Models\DescribeTraceCodesRequest $req) 查询二维码列表
 * @method Models\DescribeTraceDataListResponse DescribeTraceDataList(Models\DescribeTraceDataListRequest $req) 查询溯源信息，通常溯源信息跟生产批次绑定，即一个批次的所有溯源信息都是一样的
 * @method Models\ModifyCodeBatchResponse ModifyCodeBatch(Models\ModifyCodeBatchRequest $req) 修改批次
 * @method Models\ModifyCustomRuleResponse ModifyCustomRule(Models\ModifyCustomRuleRequest $req) 修改自定义码规则
 * @method Models\ModifyCustomRuleStatusResponse ModifyCustomRuleStatus(Models\ModifyCustomRuleStatusRequest $req) 更新自定义码规则状态
 * @method Models\ModifyMerchantResponse ModifyMerchant(Models\ModifyMerchantRequest $req) 编辑商户
 * @method Models\ModifyProductResponse ModifyProduct(Models\ModifyProductRequest $req) 编辑商品
 * @method Models\ModifyTraceCodeResponse ModifyTraceCode(Models\ModifyTraceCodeRequest $req) 冻结或者激活二维码，所属的批次的冻结状态优先级大于单个二维码的状态，即如果批次是冻结的，那么该批次下二维码的状态都是冻结的
 * @method Models\ModifyTraceCodeUnlinkResponse ModifyTraceCodeUnlink(Models\ModifyTraceCodeUnlinkRequest $req) 解绑溯源码和批次的关系，让溯源码重置为未关联的状态，以便关联其他批次
注意：溯源码必须属于指定的批次才会解绑
 * @method Models\ModifyTraceDataResponse ModifyTraceData(Models\ModifyTraceDataRequest $req) 修改溯源信息
 * @method Models\ModifyTraceDataRanksResponse ModifyTraceDataRanks(Models\ModifyTraceDataRanksRequest $req) 修改溯源信息的排序
 */

class TrpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trp";

    /**
     * @var string
     */
    protected $version = "2021-05-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("trp")."\\"."V20210515\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
