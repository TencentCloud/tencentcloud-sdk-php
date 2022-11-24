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

namespace TencentCloud\Tcm\V20210413;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tcm\V20210413\Models as Models;

/**
 * @method Models\CreateMeshResponse CreateMesh(Models\CreateMeshRequest $req) 创建网格
 * @method Models\DeleteMeshResponse DeleteMesh(Models\DeleteMeshRequest $req) 删除网格
 * @method Models\DescribeAccessLogConfigResponse DescribeAccessLogConfig(Models\DescribeAccessLogConfigRequest $req) 获取AccessLog配置
 * @method Models\DescribeMeshResponse DescribeMesh(Models\DescribeMeshRequest $req) 查询网格详情
 * @method Models\DescribeMeshListResponse DescribeMeshList(Models\DescribeMeshListRequest $req) 查询网格列表
 * @method Models\LinkClusterListResponse LinkClusterList(Models\LinkClusterListRequest $req) 关联集群
 * @method Models\LinkPrometheusResponse LinkPrometheus(Models\LinkPrometheusRequest $req) 关联Prometheus
 * @method Models\ModifyAccessLogConfigResponse ModifyAccessLogConfig(Models\ModifyAccessLogConfigRequest $req) 修改访问日志配置
 * @method Models\ModifyMeshResponse ModifyMesh(Models\ModifyMeshRequest $req) 修改网格
 * @method Models\ModifyTracingConfigResponse ModifyTracingConfig(Models\ModifyTracingConfigRequest $req) 修改 Tracing 配置
 * @method Models\UnlinkClusterResponse UnlinkCluster(Models\UnlinkClusterRequest $req) 解关联集群
 * @method Models\UnlinkPrometheusResponse UnlinkPrometheus(Models\UnlinkPrometheusRequest $req) 解除关联Prometheus
 */

class TcmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tcm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tcm";

    /**
     * @var string
     */
    protected $version = "2021-04-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("tcm")."\\"."V20210413\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
