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

namespace TencentCloud\Cat\V20180409;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cat\V20180409\Models as Models;

/**
 * @method Models\CreateProbeTasksResponse CreateProbeTasks(Models\CreateProbeTasksRequest $req) 批量创建拨测任务
 * @method Models\DeleteProbeTaskResponse DeleteProbeTask(Models\DeleteProbeTaskRequest $req) 删除拨测任务
 * @method Models\DescribeDetailedSingleProbeDataResponse DescribeDetailedSingleProbeData(Models\DescribeDetailedSingleProbeDataRequest $req) 根据时间范围、任务ID、运营商等条件查询单次拨测详情数据
 * @method Models\DescribeNodesResponse DescribeNodes(Models\DescribeNodesRequest $req) 获取拨测节点
 * @method Models\DescribeProbeMetricDataResponse DescribeProbeMetricData(Models\DescribeProbeMetricDataRequest $req) 查询云拨测指标数据，指标支持使用sum,avg,max,min聚合函数进行指标数据查询
 * @method Models\DescribeProbeNodesResponse DescribeProbeNodes(Models\DescribeProbeNodesRequest $req) 查询拨测节点
 * @method Models\DescribeProbeTasksResponse DescribeProbeTasks(Models\DescribeProbeTasksRequest $req) 查询拨测任务列表
 * @method Models\ResumeProbeTaskResponse ResumeProbeTask(Models\ResumeProbeTaskRequest $req) 恢复拨测任务
 * @method Models\SuspendProbeTaskResponse SuspendProbeTask(Models\SuspendProbeTaskRequest $req) 暂停拨测任务
 * @method Models\UpdateProbeTaskAttributesResponse UpdateProbeTaskAttributes(Models\UpdateProbeTaskAttributesRequest $req) 更新探测任务属性
 * @method Models\UpdateProbeTaskConfigurationListResponse UpdateProbeTaskConfigurationList(Models\UpdateProbeTaskConfigurationListRequest $req) 批量更新拨测任务配置
 */

class CatClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cat.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cat";

    /**
     * @var string
     */
    protected $version = "2018-04-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("cat")."\\"."V20180409\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
