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

namespace TencentCloud\Vm\V20210922;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vm\V20210922\Models as Models;

/**
 * @method Models\CancelTaskResponse CancelTask(Models\CancelTaskRequest $req) 取消任务
 * @method Models\CreateVideoModerationTaskResponse CreateVideoModerationTask(Models\CreateVideoModerationTaskRequest $req) 通过URL或存储桶创建审核任务
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 查看任务详情DescribeTaskDetail 
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 通过查看审核任务列表接口，可查询任务队列；您可根据多种业务信息（业务类型、审核结果、任务状态等）筛选审核任务列表。<br>

默认接口请求频率限制：**20次/秒**。
 */

class VmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vm";

    /**
     * @var string
     */
    protected $version = "2021-09-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("vm")."\\"."V20210922\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
