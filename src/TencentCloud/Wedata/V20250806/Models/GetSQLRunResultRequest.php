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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSQLRunResult请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getJobId() 获取查询任务ID，由 RunSQLScript 返回
 * @method void setJobId(string $JobId) 设置查询任务ID，由 RunSQLScript 返回
 * @method string getJobExecutionId() 获取子查询任务运行ID。不传则返回该任务下全部子查询的结果
 * @method void setJobExecutionId(string $JobExecutionId) 设置子查询任务运行ID。不传则返回该任务下全部子查询的结果
 */
class GetSQLRunResultRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 查询任务ID，由 RunSQLScript 返回
     */
    public $JobId;

    /**
     * @var string 子查询任务运行ID。不传则返回该任务下全部子查询的结果
     */
    public $JobExecutionId;

    /**
     * @param string $ProjectId 项目ID
     * @param string $JobId 查询任务ID，由 RunSQLScript 返回
     * @param string $JobExecutionId 子查询任务运行ID。不传则返回该任务下全部子查询的结果
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobExecutionId",$param) and $param["JobExecutionId"] !== null) {
            $this->JobExecutionId = $param["JobExecutionId"];
        }
    }
}
