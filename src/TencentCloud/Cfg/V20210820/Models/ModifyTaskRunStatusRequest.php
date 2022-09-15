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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTaskRunStatus请求参数结构体
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method integer getStatus() 获取任务状态, 1001--未开始 1002--进行中（执行）1003--进行中（暂停）1004--执行结束
 * @method void setStatus(integer $Status) 设置任务状态, 1001--未开始 1002--进行中（执行）1003--进行中（暂停）1004--执行结束
 * @method boolean getIsExpect() 获取执行结果是否符合预期（当前扭转状态为执行结束时，需要必传此字段）
 * @method void setIsExpect(boolean $IsExpect) 设置执行结果是否符合预期（当前扭转状态为执行结束时，需要必传此字段）
 * @method string getSummary() 获取演习结论（当演习状态转变为执行结束时，需要填写此字段）
 * @method void setSummary(string $Summary) 设置演习结论（当演习状态转变为执行结束时，需要填写此字段）
 */
class ModifyTaskRunStatusRequest extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var integer 任务状态, 1001--未开始 1002--进行中（执行）1003--进行中（暂停）1004--执行结束
     */
    public $Status;

    /**
     * @var boolean 执行结果是否符合预期（当前扭转状态为执行结束时，需要必传此字段）
     */
    public $IsExpect;

    /**
     * @var string 演习结论（当演习状态转变为执行结束时，需要填写此字段）
     */
    public $Summary;

    /**
     * @param integer $TaskId 任务ID
     * @param integer $Status 任务状态, 1001--未开始 1002--进行中（执行）1003--进行中（暂停）1004--执行结束
     * @param boolean $IsExpect 执行结果是否符合预期（当前扭转状态为执行结束时，需要必传此字段）
     * @param string $Summary 演习结论（当演习状态转变为执行结束时，需要填写此字段）
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsExpect",$param) and $param["IsExpect"] !== null) {
            $this->IsExpect = $param["IsExpect"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }
    }
}
