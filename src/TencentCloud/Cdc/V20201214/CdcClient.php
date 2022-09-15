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

namespace TencentCloud\Cdc\V20201214;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdc\V20201214\Models as Models;

/**
 * @method Models\CreateDedicatedClusterResponse CreateDedicatedCluster(Models\CreateDedicatedClusterRequest $req) 创建专用集群
 * @method Models\CreateDedicatedClusterOrderResponse CreateDedicatedClusterOrder(Models\CreateDedicatedClusterOrderRequest $req) 创建专用集群订单
 * @method Models\CreateSiteResponse CreateSite(Models\CreateSiteRequest $req) 创建站点
 * @method Models\DeleteDedicatedClustersResponse DeleteDedicatedClusters(Models\DeleteDedicatedClustersRequest $req) 删除专用集群
 * @method Models\DeleteSitesResponse DeleteSites(Models\DeleteSitesRequest $req) 删除站点
 * @method Models\DescribeDedicatedClusterCosCapacityResponse DescribeDedicatedClusterCosCapacity(Models\DescribeDedicatedClusterCosCapacityRequest $req) 查询专用集群内cos的容量信息
 * @method Models\DescribeDedicatedClusterHostStatisticsResponse DescribeDedicatedClusterHostStatistics(Models\DescribeDedicatedClusterHostStatisticsRequest $req) 查询专用集群内宿主机的统计信息
 * @method Models\DescribeDedicatedClusterHostsResponse DescribeDedicatedClusterHosts(Models\DescribeDedicatedClusterHostsRequest $req) 专用集群宿主机信息
 * @method Models\DescribeDedicatedClusterInstanceTypesResponse DescribeDedicatedClusterInstanceTypes(Models\DescribeDedicatedClusterInstanceTypesRequest $req) 查询专用集群支持的实例规格列表
 * @method Models\DescribeDedicatedClusterOrdersResponse DescribeDedicatedClusterOrders(Models\DescribeDedicatedClusterOrdersRequest $req) 查询专用集群订单列表
 * @method Models\DescribeDedicatedClusterOverviewResponse DescribeDedicatedClusterOverview(Models\DescribeDedicatedClusterOverviewRequest $req) 专用集群概览信息
 * @method Models\DescribeDedicatedClusterTypesResponse DescribeDedicatedClusterTypes(Models\DescribeDedicatedClusterTypesRequest $req) 查询专有集群配置列表
 * @method Models\DescribeDedicatedClustersResponse DescribeDedicatedClusters(Models\DescribeDedicatedClustersRequest $req) 查询专用集群列表
 * @method Models\DescribeDedicatedSupportedZonesResponse DescribeDedicatedSupportedZones(Models\DescribeDedicatedSupportedZonesRequest $req) 查询专用集群支持的可用区列表
 * @method Models\DescribeSitesResponse DescribeSites(Models\DescribeSitesRequest $req) 查询站点列表
 * @method Models\DescribeSitesDetailResponse DescribeSitesDetail(Models\DescribeSitesDetailRequest $req) 查询站点详情
 * @method Models\ModifyDedicatedClusterInfoResponse ModifyDedicatedClusterInfo(Models\ModifyDedicatedClusterInfoRequest $req) 修改本地专用集群信息
 * @method Models\ModifyOrderStatusResponse ModifyOrderStatus(Models\ModifyOrderStatusRequest $req) 修改大订单、小订单的状态
 * @method Models\ModifySiteDeviceInfoResponse ModifySiteDeviceInfo(Models\ModifySiteDeviceInfoRequest $req) 修改机房设备信息
 * @method Models\ModifySiteInfoResponse ModifySiteInfo(Models\ModifySiteInfoRequest $req) 修改机房信息
 */

class CdcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdc";

    /**
     * @var string
     */
    protected $version = "2020-12-14";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdc")."\\"."V20201214\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
