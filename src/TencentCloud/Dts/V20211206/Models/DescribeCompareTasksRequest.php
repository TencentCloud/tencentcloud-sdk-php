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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareTasks请求参数结构体
 *
 * @method string getJobId() 获取<p>迁移任务 Id，可通过 <a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a> 接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>迁移任务 Id，可通过 <a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a> 接口获取。</p>
 * @method integer getLimit() 获取<p>分页设置，表示每页显示多少条任务，默认为 20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页设置，表示每页显示多少条任务，默认为 20</p>
 * @method integer getOffset() 获取<p>分页偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量</p>
 * @method string getCompareTaskId() 获取<p>校验任务 ID</p>
 * @method void setCompareTaskId(string $CompareTaskId) 设置<p>校验任务 ID</p>
 * @method array getStatus() 获取<p>任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
 * @method void setStatus(array $Status) 设置<p>任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
 */
class DescribeCompareTasksRequest extends AbstractModel
{
    /**
     * @var string <p>迁移任务 Id，可通过 <a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a> 接口获取。</p>
     */
    public $JobId;

    /**
     * @var integer <p>分页设置，表示每页显示多少条任务，默认为 20</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>校验任务 ID</p>
     */
    public $CompareTaskId;

    /**
     * @var array <p>任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
     */
    public $Status;

    /**
     * @param string $JobId <p>迁移任务 Id，可通过 <a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a> 接口获取。</p>
     * @param integer $Limit <p>分页设置，表示每页显示多少条任务，默认为 20</p>
     * @param integer $Offset <p>分页偏移量</p>
     * @param string $CompareTaskId <p>校验任务 ID</p>
     * @param array $Status <p>任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
