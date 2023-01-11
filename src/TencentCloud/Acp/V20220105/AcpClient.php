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

namespace TencentCloud\Acp\V20220105;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Acp\V20220105\Models as Models;

/**
 * @method Models\CreateAppScanTaskResponse CreateAppScanTask(Models\CreateAppScanTaskRequest $req) 创建应用合规隐私诊断任务
 * @method Models\CreateAppScanTaskRepeatResponse CreateAppScanTaskRepeat(Models\CreateAppScanTaskRepeatRequest $req) App应用合规隐私诊断重试任务
 * @method Models\DescribeChannelTaskReportUrlResponse DescribeChannelTaskReportUrl(Models\DescribeChannelTaskReportUrlRequest $req) 获取子渠道的App合规诊断任务报告url
 * @method Models\DescribeFileTicketResponse DescribeFileTicket(Models\DescribeFileTicketRequest $req) 获取应用合规文件上传凭证，用于上传诊断文件
 * @method Models\DescribeResourceUsageInfoResponse DescribeResourceUsageInfo(Models\DescribeResourceUsageInfoRequest $req) 查询应用合规平台用户资源的使用情况
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) 获取App隐私合规诊断任务列表
 * @method Models\DescribeScanTaskReportUrlResponse DescribeScanTaskReportUrl(Models\DescribeScanTaskReportUrlRequest $req) 获取App合规诊断任务报告url
 * @method Models\DescribeScanTaskStatusResponse DescribeScanTaskStatus(Models\DescribeScanTaskStatusRequest $req) 查询App隐私合规诊断任务状态
 */

class AcpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "acp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "acp";

    /**
     * @var string
     */
    protected $version = "2022-01-05";

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
        $respClass = "TencentCloud"."\\".ucfirst("acp")."\\"."V20220105\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
