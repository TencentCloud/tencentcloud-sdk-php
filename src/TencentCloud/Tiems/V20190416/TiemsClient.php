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

namespace TencentCloud\Tiems\V20190416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tiems\V20190416\Models as Models;

/**
 * @method Models\CreateJobResponse CreateJob(Models\CreateJobRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

创建任务
 * @method Models\CreateRsgAsGroupResponse CreateRsgAsGroup(Models\CreateRsgAsGroupRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

创建资源组的伸缩组。当前一个资源组仅允许创建一个伸缩组。
 * @method Models\CreateRuntimeResponse CreateRuntime(Models\CreateRuntimeRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

创建运行环境
 * @method Models\CreateServiceResponse CreateService(Models\CreateServiceRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

创建服务
 * @method Models\CreateServiceConfigResponse CreateServiceConfig(Models\CreateServiceConfigRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

创建服务配置
 * @method Models\DeleteInstanceResponse DeleteInstance(Models\DeleteInstanceRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

删除资源组中的节点。目前仅支持删除已经到期的预付费节点，和按量付费节点。
 * @method Models\DeleteJobResponse DeleteJob(Models\DeleteJobRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

删除任务
 * @method Models\DeleteResourceGroupResponse DeleteResourceGroup(Models\DeleteResourceGroupRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

删除资源组
 * @method Models\DeleteRsgAsGroupResponse DeleteRsgAsGroup(Models\DeleteRsgAsGroupRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

伸缩
 * @method Models\DeleteRuntimeResponse DeleteRuntime(Models\DeleteRuntimeRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

删除运行环境
 * @method Models\DeleteServiceResponse DeleteService(Models\DeleteServiceRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

删除服务
 * @method Models\DeleteServiceConfigResponse DeleteServiceConfig(Models\DeleteServiceConfigRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

删除服务配置
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

获取节点列表
 * @method Models\DescribeResourceGroupsResponse DescribeResourceGroups(Models\DescribeResourceGroupsRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

获取资源组列表
 * @method Models\DescribeRsgAsGroupActivitiesResponse DescribeRsgAsGroupActivities(Models\DescribeRsgAsGroupActivitiesRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

查询伸缩组活动
 * @method Models\DescribeRsgAsGroupsResponse DescribeRsgAsGroups(Models\DescribeRsgAsGroupsRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

查询资源组的伸缩组信息
 * @method Models\DescribeRuntimesResponse DescribeRuntimes(Models\DescribeRuntimesRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

描述服务运行环境
 * @method Models\DescribeServiceConfigsResponse DescribeServiceConfigs(Models\DescribeServiceConfigsRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

描述服务配置
 * @method Models\DescribeServicesResponse DescribeServices(Models\DescribeServicesRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

描述服务
 * @method Models\DisableRsgAsGroupResponse DisableRsgAsGroup(Models\DisableRsgAsGroupRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

停用资源组的伸缩组
 * @method Models\EnableRsgAsGroupResponse EnableRsgAsGroup(Models\EnableRsgAsGroupRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

启用资源组的伸缩组
 * @method Models\ExposeServiceResponse ExposeService(Models\ExposeServiceRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

暴露服务
 * @method Models\UpdateJobResponse UpdateJob(Models\UpdateJobRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

更新任务
 * @method Models\UpdateRsgAsGroupResponse UpdateRsgAsGroup(Models\UpdateRsgAsGroupRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

更新资源组的伸缩组
 * @method Models\UpdateServiceResponse UpdateService(Models\UpdateServiceRequest $req) 因业务策略调整，腾讯云TI平台TI-EMS已经于2022年6月30日下线并停止提供服务。若您有新增的业务需求，可前往TI-ONE(https://cloud.tencent.com/document/product/851)使用。

更新服务
 */

class TiemsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tiems.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tiems";

    /**
     * @var string
     */
    protected $version = "2019-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("tiems")."\\"."V20190416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
