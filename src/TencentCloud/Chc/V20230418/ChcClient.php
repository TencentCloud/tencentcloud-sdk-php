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

namespace TencentCloud\Chc\V20230418;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Chc\V20230418\Models as Models;

/**
 * @method Models\ConfirmCommonServiceWorkOrderResponse ConfirmCommonServiceWorkOrder(Models\ConfirmCommonServiceWorkOrderRequest $req) 确认通用服务工单
 * @method Models\CreateCommonServiceWorkOrderResponse CreateCommonServiceWorkOrder(Models\CreateCommonServiceWorkOrderRequest $req) 创建通用工单
 * @method Models\CreateModelEvaluationWorkOrderResponse CreateModelEvaluationWorkOrder(Models\CreateModelEvaluationWorkOrderRequest $req) 创建设备型号评估工单
 * @method Models\CreateMovingWorkOrderResponse CreateMovingWorkOrder(Models\CreateMovingWorkOrderRequest $req) 创建设备搬迁工单
 * @method Models\CreateNetDeviceModelResponse CreateNetDeviceModel(Models\CreateNetDeviceModelRequest $req) 创建新的网络设备型号
 * @method Models\CreatePersonnelVisitWorkOrderResponse CreatePersonnelVisitWorkOrder(Models\CreatePersonnelVisitWorkOrderRequest $req) 创建人员到访工单
 * @method Models\CreatePowerOffWorkOrderResponse CreatePowerOffWorkOrder(Models\CreatePowerOffWorkOrderRequest $req) 创建设备关电工单
 * @method Models\CreatePowerOnWorkOrderResponse CreatePowerOnWorkOrder(Models\CreatePowerOnWorkOrderRequest $req) 创建设备开电工单
 * @method Models\CreateQuitWorkOrderResponse CreateQuitWorkOrder(Models\CreateQuitWorkOrderRequest $req) 创建设备退出工单
 * @method Models\CreateRackOffWorkOrderResponse CreateRackOffWorkOrder(Models\CreateRackOffWorkOrderRequest $req) 创建设备下架工单
 * @method Models\CreateRackOnWorkOrderResponse CreateRackOnWorkOrder(Models\CreateRackOnWorkOrderRequest $req) 创建设备上架工单
 * @method Models\CreateReceivingWorkOrderResponse CreateReceivingWorkOrder(Models\CreateReceivingWorkOrderRequest $req) 创建设备收货工单
 * @method Models\CreateServerModelResponse CreateServerModel(Models\CreateServerModelRequest $req) 新增服务器设备型号
 * @method Models\DescribeAvailableModelListResponse DescribeAvailableModelList(Models\DescribeAvailableModelListRequest $req) 获取机房内可用的型号列表
 * @method Models\DescribeCampusListResponse DescribeCampusList(Models\DescribeCampusListRequest $req) 获取用户可操作的园区列表
 * @method Models\DescribeCommonServiceWorkOrderDetailResponse DescribeCommonServiceWorkOrderDetail(Models\DescribeCommonServiceWorkOrderDetailRequest $req) 查询通用服务工单详情
 * @method Models\DescribeCustomerInfoResponse DescribeCustomerInfo(Models\DescribeCustomerInfoRequest $req) 查询客户信息
 * @method Models\DescribeDeviceListResponse DescribeDeviceList(Models\DescribeDeviceListRequest $req) 获取设备列表
 * @method Models\DescribeDeviceWorkOrderDetailResponse DescribeDeviceWorkOrderDetail(Models\DescribeDeviceWorkOrderDetailRequest $req) 用于查询设备类工单的工单详情，如：'receiving', 'rackOn', 'powerOn', 'powerOff', 'rackOff', 'quit'
 * @method Models\DescribeIdcUnitAssetDetailResponse DescribeIdcUnitAssetDetail(Models\DescribeIdcUnitAssetDetailRequest $req) 查询机房管理单元资产详情
 * @method Models\DescribeIdcUnitDetailResponse DescribeIdcUnitDetail(Models\DescribeIdcUnitDetailRequest $req) 查询机房管理单元详情
 * @method Models\DescribeIdcsResponse DescribeIdcs(Models\DescribeIdcsRequest $req) 获取机房和机房管理单元信息
 * @method Models\DescribeModelResponse DescribeModel(Models\DescribeModelRequest $req) 查询设备型号详情
 * @method Models\DescribeModelEvaluationWorkOrderDetailResponse DescribeModelEvaluationWorkOrderDetail(Models\DescribeModelEvaluationWorkOrderDetailRequest $req) 查询设备型号评估工单详情
 * @method Models\DescribeModelTemplateResponse DescribeModelTemplate(Models\DescribeModelTemplateRequest $req) 获取型号的填写模板
 * @method Models\DescribeModelVersionListResponse DescribeModelVersionList(Models\DescribeModelVersionListRequest $req) 获取用户的型号和对应的版本数量
 * @method Models\DescribePersonnelVisitWorkOrderDetailResponse DescribePersonnelVisitWorkOrderDetail(Models\DescribePersonnelVisitWorkOrderDetailRequest $req) 查询人员到访工单详情
 * @method Models\DescribePositionStatusSummaryResponse DescribePositionStatusSummary(Models\DescribePositionStatusSummaryRequest $req) 获取机架总数及各状态对应的数量汇总
 * @method Models\DescribePositionsResponse DescribePositions(Models\DescribePositionsRequest $req) 获取机位列表
 * @method Models\DescribeRacksResponse DescribeRacks(Models\DescribeRacksRequest $req) 获取机架列表
 * @method Models\DescribeRacksDistributionResponse DescribeRacksDistribution(Models\DescribeRacksDistributionRequest $req) 获取机房管理单元的机位分布
 * @method Models\DescribeResourceUsageResponse DescribeResourceUsage(Models\DescribeResourceUsageRequest $req) 查询资源汇总
 * @method Models\DescribeWorkOrderListResponse DescribeWorkOrderList(Models\DescribeWorkOrderListRequest $req) 查询工单列表
 * @method Models\DescribeWorkOrderStatisticsResponse DescribeWorkOrderStatistics(Models\DescribeWorkOrderStatisticsRequest $req) 工单统计数据查询
 * @method Models\DescribeWorkOrderTypesResponse DescribeWorkOrderTypes(Models\DescribeWorkOrderTypesRequest $req) 获取用户可用的工单类型
 * @method Models\ModifyWorkOrderTypeCollectFlagResponse ModifyWorkOrderTypeCollectFlag(Models\ModifyWorkOrderTypeCollectFlagRequest $req) 如果当前该工单类型是收藏状态，调用接口后变成未收藏状态，如果是未收藏状态，调用该接口变为收藏状态
 */

class ChcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "chc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "chc";

    /**
     * @var string
     */
    protected $version = "2023-04-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("chc")."\\"."V20230418\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
