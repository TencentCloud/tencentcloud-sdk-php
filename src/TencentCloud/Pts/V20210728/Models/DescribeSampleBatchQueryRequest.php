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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSampleBatchQuery请求参数结构体
 *
 * @method string getJobId() 获取压测任务的 ID
 * @method void setJobId(string $JobId) 设置压测任务的 ID
 * @method string getScenarioId() 获取场景的 ID
 * @method void setScenarioId(string $ScenarioId) 设置场景的 ID
 * @method array getQueries() 获取查询指标数组
 * @method void setQueries(array $Queries) 设置查询指标数组
 * @method string getProjectId() 获取项目的 ID
 * @method void setProjectId(string $ProjectId) 设置项目的 ID
 */
class DescribeSampleBatchQueryRequest extends AbstractModel
{
    /**
     * @var string 压测任务的 ID
     */
    public $JobId;

    /**
     * @var string 场景的 ID
     */
    public $ScenarioId;

    /**
     * @var array 查询指标数组
     */
    public $Queries;

    /**
     * @var string 项目的 ID
     */
    public $ProjectId;

    /**
     * @param string $JobId 压测任务的 ID
     * @param string $ScenarioId 场景的 ID
     * @param array $Queries 查询指标数组
     * @param string $ProjectId 项目的 ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Queries",$param) and $param["Queries"] !== null) {
            $this->Queries = [];
            foreach ($param["Queries"] as $key => $value){
                $obj = new InternalMetricQuery();
                $obj->deserialize($value);
                array_push($this->Queries, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
