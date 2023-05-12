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

namespace TencentCloud\Omics\V20221128;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Omics\V20221128\Models as Models;

/**
 * @method Models\CreateEnvironmentResponse CreateEnvironment(Models\CreateEnvironmentRequest $req) 创建组学平台计算环境。
 * @method Models\DeleteEnvironmentResponse DeleteEnvironment(Models\DeleteEnvironmentRequest $req) 删除环境。
 * @method Models\DescribeEnvironmentsResponse DescribeEnvironments(Models\DescribeEnvironmentsRequest $req) 查询环境列表。
 * @method Models\DescribeRunGroupsResponse DescribeRunGroups(Models\DescribeRunGroupsRequest $req) 查询任务批次列表。
 * @method Models\DescribeRunsResponse DescribeRuns(Models\DescribeRunsRequest $req) 查询任务列表。
 * @method Models\DescribeTablesResponse DescribeTables(Models\DescribeTablesRequest $req) 查询表格。
 * @method Models\DescribeTablesRowsResponse DescribeTablesRows(Models\DescribeTablesRowsRequest $req) 查询表格行数据。
 * @method Models\GetRunCallsResponse GetRunCalls(Models\GetRunCallsRequest $req) 查询作业详情。
 * @method Models\GetRunStatusResponse GetRunStatus(Models\GetRunStatusRequest $req) 查询任务详情。
 * @method Models\ImportTableFileResponse ImportTableFile(Models\ImportTableFileRequest $req) 导入表格文件。
 * @method Models\RetryRunsResponse RetryRuns(Models\RetryRunsRequest $req) 重试任务。
 * @method Models\RunApplicationResponse RunApplication(Models\RunApplicationRequest $req) 运行应用。
 */

class OmicsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "omics.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "omics";

    /**
     * @var string
     */
    protected $version = "2022-11-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("omics")."\\"."V20221128\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
