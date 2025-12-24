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

namespace TencentCloud\Dbs\V20211108;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbs\V20211108\Models as Models;

/**
 * @method Models\ConfigureBackupPlanResponse ConfigureBackupPlan(Models\ConfigureBackupPlanRequest $req) 本接口（ConfigureBackupPlan）用于配置备份计划。包括配置备份源实例信息、备份对象以及备份策略等。
 * @method Models\CreateBackupPlanResponse CreateBackupPlan(Models\CreateBackupPlanRequest $req) 该接口用于创建备份计划。
 * @method Models\CreateConnectTestJobResponse CreateConnectTestJob(Models\CreateConnectTestJobRequest $req) 该接口用于创建连通性检测任务，请在创建备份计划前，通过该接口来检测你的源端实例是否连通性正常。
 * @method Models\DescribeBackupCheckJobResponse DescribeBackupCheckJob(Models\DescribeBackupCheckJobRequest $req) 本接口（DescribeBackupCheckJob）用于查询备份计划预校验任务的结果。仅对于预校验通过的任务，才能启动备份计划。
 * @method Models\DescribeBackupPlansResponse DescribeBackupPlans(Models\DescribeBackupPlansRequest $req) 本接口（DescribeBackupPlans）用于查询备份计划列表。
 * @method Models\DescribeConnectTestResultResponse DescribeConnectTestResult(Models\DescribeConnectTestResultRequest $req) 该接口用于查询连通性检测任务的结果
 * @method Models\StartBackupCheckJobResponse StartBackupCheckJob(Models\StartBackupCheckJobRequest $req) 本接口（StartBackupCheckJob）用于创建备份计划预校验任务。
 * @method Models\StartBackupPlanResponse StartBackupPlan(Models\StartBackupPlanRequest $req) 本接口（StartBackupPlan）用于启动备份计划。调用此接口前，请务必先使用 StartBackupCheckJob 创建备份计划预校验任务，并通过 DescribeBackupCheckJob 接口查询到任务状态为校验通过时，才能启动备份计划。
 */

class DbsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbs";

    /**
     * @var string
     */
    protected $version = "2021-11-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("dbs")."\\"."V20211108\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
