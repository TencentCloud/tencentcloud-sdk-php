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
 * @method Models\DescribeInstantTasksResponse DescribeInstantTasks(Models\DescribeInstantTasksRequest $req) 获取历史即时拨测任务
 * @method Models\DescribeNodeGroupsResponse DescribeNodeGroups(Models\DescribeNodeGroupsRequest $req) 获取拨测点组（可用性拨测点组、高级拨测点组、我的拨测点组）
 * @method Models\DescribeNodesResponse DescribeNodes(Models\DescribeNodesRequest $req) 获取拨测节点
 * @method Models\DescribeProbeMetricDataResponse DescribeProbeMetricData(Models\DescribeProbeMetricDataRequest $req) 查询云拨测指标数据，指标支持使用sum,avg,max,min聚合函数进行指标数据查询
拨测频率与groupby聚合时间设置关联，如拨测频率为 30 分钟，则 grouby 聚合时间建议设置为大于30分钟，避免出现查询数据为空的情况
 * @method Models\DescribeProbeMetricTagValuesResponse DescribeProbeMetricTagValues(Models\DescribeProbeMetricTagValuesRequest $req) 查询同个任务类型下的维度标签值，包括查询用户任务信息，具体任务下的多个维度标签信息。（通过为DescribeProbeMetricData接口的Filters参数添加维度筛选条件，可实现多维数据分析）
 * @method Models\DescribeProbeNodesResponse DescribeProbeNodes(Models\DescribeProbeNodesRequest $req) 查询拨测节点
 * @method Models\DescribeProbeTasksResponse DescribeProbeTasks(Models\DescribeProbeTasksRequest $req) 查询拨测任务列表
 * @method Models\ResumeProbeTaskResponse ResumeProbeTask(Models\ResumeProbeTaskRequest $req) 恢复拨测任务
 * @method Models\SuspendProbeTaskResponse SuspendProbeTask(Models\SuspendProbeTaskRequest $req) 暂停任务
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
