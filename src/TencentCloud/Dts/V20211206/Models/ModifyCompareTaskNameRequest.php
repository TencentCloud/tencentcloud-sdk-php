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
 * ModifyCompareTaskName请求参数结构体
 *
 * @method string getJobId() 获取迁移任务 Id
 * @method void setJobId(string $JobId) 设置迁移任务 Id
 * @method string getCompareTaskId() 获取对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9
 * @method void setCompareTaskId(string $CompareTaskId) 设置对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9
 * @method string getTaskName() 获取一致性校验任务名称
 * @method void setTaskName(string $TaskName) 设置一致性校验任务名称
 */
class ModifyCompareTaskNameRequest extends AbstractModel
{
    /**
     * @var string 迁移任务 Id
     */
    public $JobId;

    /**
     * @var string 对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9
     */
    public $CompareTaskId;

    /**
     * @var string 一致性校验任务名称
     */
    public $TaskName;

    /**
     * @param string $JobId 迁移任务 Id
     * @param string $CompareTaskId 对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9
     * @param string $TaskName 一致性校验任务名称
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

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
