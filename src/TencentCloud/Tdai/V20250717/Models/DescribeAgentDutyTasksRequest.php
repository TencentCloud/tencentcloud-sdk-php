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
 * DescribeAgentDutyTasks请求参数结构体
 *
 * @method string getInstanceId() 获取agent实例ID
 * @method void setInstanceId(string $InstanceId) 设置agent实例ID
 * @method string getChatId() 获取会话ID
 * @method void setChatId(string $ChatId) 设置会话ID
 * @method integer getOffset() 获取查询开始位置
 * @method void setOffset(integer $Offset) 设置查询开始位置
 * @method integer getLimit() 获取列表查询数量
 * @method void setLimit(integer $Limit) 设置列表查询数量
 * @method string getStartTime() 获取任务启动时间
 * @method void setStartTime(string $StartTime) 设置任务启动时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getAgentTaskType() 获取任务类型
 * @method void setAgentTaskType(string $AgentTaskType) 设置任务类型
 * @method array getParameters() 获取业务参数
 * @method void setParameters(array $Parameters) 设置业务参数
 */
class DescribeAgentDutyTasksRequest extends AbstractModel
{
    /**
     * @var string agent实例ID
     */
    public $InstanceId;

    /**
     * @var string 会话ID
     */
    public $ChatId;

    /**
     * @var integer 查询开始位置
     */
    public $Offset;

    /**
     * @var integer 列表查询数量
     */
    public $Limit;

    /**
     * @var string 任务启动时间
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 任务类型
     */
    public $AgentTaskType;

    /**
     * @var array 业务参数
     */
    public $Parameters;

    /**
     * @param string $InstanceId agent实例ID
     * @param string $ChatId 会话ID
     * @param integer $Offset 查询开始位置
     * @param integer $Limit 列表查询数量
     * @param string $StartTime 任务启动时间
     * @param string $EndTime 任务结束时间
     * @param string $AgentTaskType 任务类型
     * @param array $Parameters 业务参数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AgentTaskType",$param) and $param["AgentTaskType"] !== null) {
            $this->AgentTaskType = $param["AgentTaskType"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
