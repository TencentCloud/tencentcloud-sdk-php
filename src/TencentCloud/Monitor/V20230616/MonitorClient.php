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

namespace TencentCloud\Monitor\V20230616;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Monitor\V20230616\Models as Models;

/**
 * @method Models\CreateNoticeContentTmplResponse CreateNoticeContentTmpl(Models\CreateNoticeContentTmplRequest $req) 创建自定义通知内容模板
 * @method Models\DeleteNoticeContentTmplsResponse DeleteNoticeContentTmpls(Models\DeleteNoticeContentTmplsRequest $req) 删除通知内容模板
 * @method Models\DescribeAIWorkbenchSREDigitalTwinTaskListResponse DescribeAIWorkbenchSREDigitalTwinTaskList(Models\DescribeAIWorkbenchSREDigitalTwinTaskListRequest $req) 查询AI工作台SRE数字分身任务列表
 * @method Models\DescribeAIWorkbenchSREDigitalTwinWorkLogDetailResponse DescribeAIWorkbenchSREDigitalTwinWorkLogDetail(Models\DescribeAIWorkbenchSREDigitalTwinWorkLogDetailRequest $req) 查询AI工作台SRE数字分身工作日志详细信息
 * @method Models\DescribeAIWorkbenchSREDigitalTwinWorkLogListResponse DescribeAIWorkbenchSREDigitalTwinWorkLogList(Models\DescribeAIWorkbenchSREDigitalTwinWorkLogListRequest $req) 查询AI工作台SRE数字分身任务工作日志列表
 * @method Models\DescribeAlarmNotifyHistoriesResponse DescribeAlarmNotifyHistories(Models\DescribeAlarmNotifyHistoriesRequest $req) 按需查询告警的通知历史
 * @method Models\DescribeNoticeContentTmplResponse DescribeNoticeContentTmpl(Models\DescribeNoticeContentTmplRequest $req) 根据查询条件获取自定义通知内容模板，若所有查询条件空，则获取账号下所有模板
 * @method Models\ModifyNoticeContentTmplResponse ModifyNoticeContentTmpl(Models\ModifyNoticeContentTmplRequest $req) 修改通知内容模板
 * @method Models\TriggerAIWorkbenchSREDigitalTwinTaskResponse TriggerAIWorkbenchSREDigitalTwinTask(Models\TriggerAIWorkbenchSREDigitalTwinTaskRequest $req) 触发数字分身任务请求
 */

class MonitorClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "monitor.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "monitor";

    /**
     * @var string
     */
    protected $version = "2023-06-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("monitor")."\\"."V20230616\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
