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
 * @method Models\CreateCodePackResponse CreateCodePack(Models\CreateCodePackRequest $req) 生成码包
 * @method Models\CreateMerchantResponse CreateMerchant(Models\CreateMerchantRequest $req) 新建商户
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 新建商品
 * @method Models\CreateTraceChainResponse CreateTraceChain(Models\CreateTraceChainRequest $req) 上链溯源信息
 * @method Models\CreateTraceCodesResponse CreateTraceCodes(Models\CreateTraceCodesRequest $req) 批量导入二维码，只支持平台发的码
 * @method Models\CreateTraceDataResponse CreateTraceData(Models\CreateTraceDataRequest $req) 新增溯源信息
 * @method Models\DeleteCodeBatchResponse DeleteCodeBatch(Models\DeleteCodeBatchRequest $req) 删除批次
 * @method Models\DeleteMerchantResponse DeleteMerchant(Models\DeleteMerchantRequest $req) 删除商户
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 删除商品，如果商品被使用，则不可删除
 * @method Models\DeleteTraceDataResponse DeleteTraceData(Models\DeleteTraceDataRequest $req) 删除溯源信息，如果已经上链则不可删除
 * @method Models\DescribeCodeBatchByIdResponse DescribeCodeBatchById(Models\DescribeCodeBatchByIdRequest $req) 查询批次信息
 * @method Models\DescribeCodeBatchsResponse DescribeCodeBatchs(Models\DescribeCodeBatchsRequest $req) 查询批次列表
 * @method Models\DescribeCodePacksResponse DescribeCodePacks(Models\DescribeCodePacksRequest $req) 查询码包列表
 * @method Models\DescribeCodesByPackResponse DescribeCodesByPack(Models\DescribeCodesByPackRequest $req) 查询码包的二维码列表，上限 3 万
 * @method Models\DescribeMerchantByIdResponse DescribeMerchantById(Models\DescribeMerchantByIdRequest $req) 查询商户信息
 * @method Models\DescribeMerchantsResponse DescribeMerchants(Models\DescribeMerchantsRequest $req) 查询商户列表
 * @method Models\DescribeProductByIdResponse DescribeProductById(Models\DescribeProductByIdRequest $req) 查询商品信息
 * @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) 查询商品列表
 * @method Models\DescribeTraceCodeByIdResponse DescribeTraceCodeById(Models\DescribeTraceCodeByIdRequest $req) 查询二维码信息
 * @method Models\DescribeTraceCodesResponse DescribeTraceCodes(Models\DescribeTraceCodesRequest $req) 查询二维码列表
 * @method Models\DescribeTraceDataListResponse DescribeTraceDataList(Models\DescribeTraceDataListRequest $req) 查询溯源信息，通常溯源信息跟生产批次绑定，即一个批次的所有溯源信息都是一样的
 * @method Models\ModifyCodeBatchResponse ModifyCodeBatch(Models\ModifyCodeBatchRequest $req) 修改批次
 * @method Models\ModifyMerchantResponse ModifyMerchant(Models\ModifyMerchantRequest $req) 编辑商户
 * @method Models\ModifyProductResponse ModifyProduct(Models\ModifyProductRequest $req) 编辑商品
 * @method Models\ModifyTraceCodeResponse ModifyTraceCode(Models\ModifyTraceCodeRequest $req) 冻结或者激活二维码，所属的批次的冻结状态优先级大于单个二维码的状态，即如果批次是冻结的，那么该批次下二维码的状态都是冻结的
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
