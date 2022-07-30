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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSampleBatchQuery请求参数结构体
 *
 * @method string getJobId() 获取job id
 * @method void setJobId(string $JobId) 设置job id
 * @method string getScenarioId() 获取场景id
 * @method void setScenarioId(string $ScenarioId) 设置场景id
 * @method array getQueries() 获取查询指标数组
 * @method void setQueries(array $Queries) 设置查询指标数组
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class DescribeSampleBatchQueryRequest extends AbstractModel
{
    /**
     * @var string job id
     */
    public $JobId;

    /**
     * @var string 场景id
     */
    public $ScenarioId;

    /**
     * @var array 查询指标数组
     */
    public $Queries;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param string $JobId job id
     * @param string $ScenarioId 场景id
     * @param array $Queries 查询指标数组
     * @param string $ProjectId 项目ID
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
