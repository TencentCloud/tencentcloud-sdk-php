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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompareTasks请求参数结构体
 *
 * @method string getJobId() 获取迁移任务 Id
 * @method void setJobId(string $JobId) 设置迁移任务 Id
 * @method integer getLimit() 获取分页设置，表示每页显示多少条任务，默认为 20
 * @method void setLimit(integer $Limit) 设置分页设置，表示每页显示多少条任务，默认为 20
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method string getCompareTaskId() 获取校验任务 ID
 * @method void setCompareTaskId(string $CompareTaskId) 设置校验任务 ID
 * @method array getStatus() 获取任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
 * @method void setStatus(array $Status) 设置任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
 */
class DescribeCompareTasksRequest extends AbstractModel
{
    /**
     * @var string 迁移任务 Id
     */
    public $JobId;

    /**
     * @var integer 分页设置，表示每页显示多少条任务，默认为 20
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var string 校验任务 ID
     */
    public $CompareTaskId;

    /**
     * @var array 任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
     */
    public $Status;

    /**
     * @param string $JobId 迁移任务 Id
     * @param integer $Limit 分页设置，表示每页显示多少条任务，默认为 20
     * @param integer $Offset 分页偏移量
     * @param string $CompareTaskId 校验任务 ID
     * @param array $Status 任务状态过滤，可能的值：created - 创建完成；readyRun - 等待运行；running - 运行中；success - 成功；stopping - 结束中；failed - 失败；canceled - 已终止
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
