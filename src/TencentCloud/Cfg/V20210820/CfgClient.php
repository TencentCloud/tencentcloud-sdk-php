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

namespace TencentCloud\Cfg\V20210820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfg\V20210820\Models as Models;

/**
 * @method Models\CreateTaskFromActionResponse CreateTaskFromAction(Models\CreateTaskFromActionRequest $req) 从动作创建演练
 * @method Models\CreateTaskFromMultiActionResponse CreateTaskFromMultiAction(Models\CreateTaskFromMultiActionRequest $req) 以多个动作创建演练
 * @method Models\CreateTaskFromTemplateResponse CreateTaskFromTemplate(Models\CreateTaskFromTemplateRequest $req) 从经验库创建演练
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) 删除任务
 * @method Models\DescribeActionFieldConfigListResponse DescribeActionFieldConfigList(Models\DescribeActionFieldConfigListRequest $req) 根据动作ID获取动作栏位动态配置参数信息，里面包含动作自有和通用两部分参数。
 * @method Models\DescribeActionLibraryListResponse DescribeActionLibraryList(Models\DescribeActionLibraryListRequest $req) 获取混沌演练平台的动作库列表
 * @method Models\DescribeObjectTypeListResponse DescribeObjectTypeList(Models\DescribeObjectTypeListRequest $req) 查询对象类型列表
 * @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) 查询任务
 * @method Models\DescribeTaskExecuteLogsResponse DescribeTaskExecuteLogs(Models\DescribeTaskExecuteLogsRequest $req) 获取演练过程中的所有日志
 * @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) 查询任务列表
 * @method Models\DescribeTaskPolicyTriggerLogResponse DescribeTaskPolicyTriggerLog(Models\DescribeTaskPolicyTriggerLogRequest $req) 获取护栏触发日志
 * @method Models\DescribeTemplateResponse DescribeTemplate(Models\DescribeTemplateRequest $req) 查询经验库
 * @method Models\DescribeTemplateListResponse DescribeTemplateList(Models\DescribeTemplateListRequest $req) 查询经验库列表
 * @method Models\ExecuteTaskResponse ExecuteTask(Models\ExecuteTaskRequest $req) 执行任务
 * @method Models\ExecuteTaskInstanceResponse ExecuteTaskInstance(Models\ExecuteTaskInstanceRequest $req) 触发混沌演练任务的动作，对于实例进行演练操作
 * @method Models\ModifyTaskRunStatusResponse ModifyTaskRunStatus(Models\ModifyTaskRunStatusRequest $req) 修改任务运行状态
 * @method Models\TriggerPolicyResponse TriggerPolicy(Models\TriggerPolicyRequest $req) 用于触发混沌演练护栏（类型为触发和恢复2种）
 */

class CfgClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfg.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfg";

    /**
     * @var string
     */
    protected $version = "2021-08-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("cfg")."\\"."V20210820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
