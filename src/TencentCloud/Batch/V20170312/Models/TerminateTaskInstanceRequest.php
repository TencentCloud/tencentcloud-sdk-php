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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateTaskInstance请求参数结构体
 *
 * @method string getJobId() 获取作业ID；详见[作业列表](https://cloud.tencent.com/document/product/599/15909)。
 * @method void setJobId(string $JobId) 设置作业ID；详见[作业列表](https://cloud.tencent.com/document/product/599/15909)。
 * @method string getTaskName() 获取任务名称；详见[作业提交信息](https://cloud.tencent.com/document/product/599/15910)
 * @method void setTaskName(string $TaskName) 设置任务名称；详见[作业提交信息](https://cloud.tencent.com/document/product/599/15910)
 * @method integer getTaskInstanceIndex() 获取任务实例索引
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) 设置任务实例索引
 */
class TerminateTaskInstanceRequest extends AbstractModel
{
    /**
     * @var string 作业ID；详见[作业列表](https://cloud.tencent.com/document/product/599/15909)。
     */
    public $JobId;

    /**
     * @var string 任务名称；详见[作业提交信息](https://cloud.tencent.com/document/product/599/15910)
     */
    public $TaskName;

    /**
     * @var integer 任务实例索引
     */
    public $TaskInstanceIndex;

    /**
     * @param string $JobId 作业ID；详见[作业列表](https://cloud.tencent.com/document/product/599/15909)。
     * @param string $TaskName 任务名称；详见[作业提交信息](https://cloud.tencent.com/document/product/599/15910)
     * @param integer $TaskInstanceIndex 任务实例索引
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }
    }
}
