<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Tia\V20180226;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tia\V20180226\Models as Models;

/**
* @method Models\CreateJobResponse CreateJob(Models\CreateJobRequest $req) 创建训练任务
* @method Models\CreateModelResponse CreateModel(Models\CreateModelRequest $req) 在指定的集群上部署一个模型，用以提供服务。
* @method Models\DeleteJobResponse DeleteJob(Models\DeleteJobRequest $req) 删除训练任务
* @method Models\DeleteModelResponse DeleteModel(Models\DeleteModelRequest $req) 删除一个指定的Model
* @method Models\DescribeJobResponse DescribeJob(Models\DescribeJobRequest $req) 获取训练任务详情
* @method Models\DescribeModelResponse DescribeModel(Models\DescribeModelRequest $req) 描述Model
* @method Models\InstallAgentResponse InstallAgent(Models\InstallAgentRequest $req) 安装agent
* @method Models\ListJobsResponse ListJobs(Models\ListJobsRequest $req) 列举训练任务
* @method Models\ListModelsResponse ListModels(Models\ListModelsRequest $req) 列举某个指定集群上运行的模型。
* @method Models\QueryLogsResponse QueryLogs(Models\QueryLogsRequest $req) 查询日志
 */

class TiaClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "tia.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-02-26";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tia")."\\"."V20180226\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
