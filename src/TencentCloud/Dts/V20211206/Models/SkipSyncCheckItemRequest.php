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
 * SkipSyncCheckItem请求参数结构体
 *
 * @method string getJobId() 获取任务id，如：sync-4ddgid2
 * @method void setJobId(string $JobId) 设置任务id，如：sync-4ddgid2
 * @method array getStepIds() 获取需要跳过校验项的步骤id，需要通过`DescribeCheckSyncJobResult`接口返回StepInfos[i].StepId字段获取，例如：["OptimizeCheck"]
 * @method void setStepIds(array $StepIds) 设置需要跳过校验项的步骤id，需要通过`DescribeCheckSyncJobResult`接口返回StepInfos[i].StepId字段获取，例如：["OptimizeCheck"]
 */
class SkipSyncCheckItemRequest extends AbstractModel
{
    /**
     * @var string 任务id，如：sync-4ddgid2
     */
    public $JobId;

    /**
     * @var array 需要跳过校验项的步骤id，需要通过`DescribeCheckSyncJobResult`接口返回StepInfos[i].StepId字段获取，例如：["OptimizeCheck"]
     */
    public $StepIds;

    /**
     * @param string $JobId 任务id，如：sync-4ddgid2
     * @param array $StepIds 需要跳过校验项的步骤id，需要通过`DescribeCheckSyncJobResult`接口返回StepInfos[i].StepId字段获取，例如：["OptimizeCheck"]
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

        if (array_key_exists("StepIds",$param) and $param["StepIds"] !== null) {
            $this->StepIds = $param["StepIds"];
        }
    }
}
