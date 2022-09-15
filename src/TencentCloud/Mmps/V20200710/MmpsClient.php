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

namespace TencentCloud\Mmps\V20200710;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mmps\V20200710\Models as Models;

/**
 * @method Models\CreateAppScanTaskResponse CreateAppScanTask(Models\CreateAppScanTaskRequest $req) 创建小程序隐私合规诊断任务
 * @method Models\CreateAppScanTaskRepeatResponse CreateAppScanTaskRepeat(Models\CreateAppScanTaskRepeatRequest $req) 小程序隐私合规诊断重试任务
 * @method Models\CreateFlySecMiniAppProfessionalScanTaskResponse CreateFlySecMiniAppProfessionalScanTask(Models\CreateFlySecMiniAppProfessionalScanTaskRequest $req) 创建小程序安全深度诊断任务
 * @method Models\CreateFlySecMiniAppScanTaskResponse CreateFlySecMiniAppScanTask(Models\CreateFlySecMiniAppScanTaskRequest $req) 创建小程序翼扬安全的基础或深度诊断任务
 * @method Models\CreateFlySecMiniAppScanTaskRepeatResponse CreateFlySecMiniAppScanTaskRepeat(Models\CreateFlySecMiniAppScanTaskRepeatRequest $req) 重新提交基础诊断任务
 * @method Models\DescribeBasicDiagnosisResourceUsageInfoResponse DescribeBasicDiagnosisResourceUsageInfo(Models\DescribeBasicDiagnosisResourceUsageInfoRequest $req) 查询翼扬安全基础诊断资源使用情况
 * @method Models\DescribeFlySecMiniAppReportUrlResponse DescribeFlySecMiniAppReportUrl(Models\DescribeFlySecMiniAppReportUrlRequest $req) 获取翼扬诊断任务报告链接地址
 * @method Models\DescribeFlySecMiniAppScanReportListResponse DescribeFlySecMiniAppScanReportList(Models\DescribeFlySecMiniAppScanReportListRequest $req) 查询指定小程序版本的翼扬诊断安全得分
 * @method Models\DescribeFlySecMiniAppScanTaskListResponse DescribeFlySecMiniAppScanTaskList(Models\DescribeFlySecMiniAppScanTaskListRequest $req) 获取翼扬安全诊断任务列表
 * @method Models\DescribeFlySecMiniAppScanTaskParamResponse DescribeFlySecMiniAppScanTaskParam(Models\DescribeFlySecMiniAppScanTaskParamRequest $req) 获取用户提交的基础诊断任务参数信息
 * @method Models\DescribeFlySecMiniAppScanTaskStatusResponse DescribeFlySecMiniAppScanTaskStatus(Models\DescribeFlySecMiniAppScanTaskStatusRequest $req) 查询翼扬安全诊断任务状态
 * @method Models\DescribeResourceUsageInfoResponse DescribeResourceUsageInfo(Models\DescribeResourceUsageInfoRequest $req) 查询翼扬安全资源使用情况
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) 获取小程序隐私合规诊断任务列表
 * @method Models\DescribeScanTaskReportUrlResponse DescribeScanTaskReportUrl(Models\DescribeScanTaskReportUrlRequest $req) 获取小程序合规诊断任务报告url
 * @method Models\DescribeScanTaskStatusResponse DescribeScanTaskStatus(Models\DescribeScanTaskStatusRequest $req) 查询小程序隐私合规诊断任务状态
 */

class MmpsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mmps.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mmps";

    /**
     * @var string
     */
    protected $version = "2020-07-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("mmps")."\\"."V20200710\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
