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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体值守任务信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getStartTime() 获取任务开始运行时间
 * @method void setStartTime(string $StartTime) 设置任务开始运行时间
 * @method string getFinishTime() 获取任务结束时间
 * @method void setFinishTime(string $FinishTime) 设置任务结束时间
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 * @method array getResultExtraKey() 获取对外展示的Extra信息
 * @method void setResultExtraKey(array $ResultExtraKey) 设置对外展示的Extra信息
 * @method array getExtra() 获取业务的额外敏感信息
 * @method void setExtra(array $Extra) 设置业务的额外敏感信息
 */
class AgentDutyTask extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务开始运行时间
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $FinishTime;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @var array 对外展示的Extra信息
     */
    public $ResultExtraKey;

    /**
     * @var array 业务的额外敏感信息
     */
    public $Extra;

    /**
     * @param string $TaskId 任务ID
     * @param string $CreateTime 任务创建时间
     * @param string $StartTime 任务开始运行时间
     * @param string $FinishTime 任务结束时间
     * @param string $Status 任务状态
     * @param array $ResultExtraKey 对外展示的Extra信息
     * @param array $Extra 业务的额外敏感信息
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResultExtraKey",$param) and $param["ResultExtraKey"] !== null) {
            $this->ResultExtraKey = $param["ResultExtraKey"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = [];
            foreach ($param["Extra"] as $key => $value){
                $obj = new ExtraInfo();
                $obj->deserialize($value);
                array_push($this->Extra, $obj);
            }
        }
    }
}
