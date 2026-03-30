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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI工作台SRE数字分身工作日志
 *
 * @method integer getID() 获取唯一标识符
 * @method void setID(integer $ID) 设置唯一标识符
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method integer getTwinID() 获取所属数字分身ID
 * @method void setTwinID(integer $TwinID) 设置所属数字分身ID
 * @method integer getTaskID() 获取所属数字分身任务ID
 * @method void setTaskID(integer $TaskID) 设置所属数字分身任务ID
 * @method string getStartTime() 获取分析时间
 * @method void setStartTime(string $StartTime) 设置分析时间
 * @method string getStatus() 获取分析状态
 * @method void setStatus(string $Status) 设置分析状态
 * @method string getResult() 获取分析结果摘要
 * @method void setResult(string $Result) 设置分析结果摘要
 * @method string getTaskName() 获取所属任务名称
 * @method void setTaskName(string $TaskName) 设置所属任务名称
 * @method string getTaskType() 获取所属任务类型
 * @method void setTaskType(string $TaskType) 设置所属任务类型
 */
class AIWorkbenchSREDigitalTwinWorkLog extends AbstractModel
{
    /**
     * @var integer 唯一标识符
     */
    public $ID;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 所属数字分身ID
     */
    public $TwinID;

    /**
     * @var integer 所属数字分身任务ID
     */
    public $TaskID;

    /**
     * @var string 分析时间
     */
    public $StartTime;

    /**
     * @var string 分析状态
     */
    public $Status;

    /**
     * @var string 分析结果摘要
     */
    public $Result;

    /**
     * @var string 所属任务名称
     */
    public $TaskName;

    /**
     * @var string 所属任务类型
     */
    public $TaskType;

    /**
     * @param integer $ID 唯一标识符
     * @param string $CreatedAt 创建时间
     * @param integer $TwinID 所属数字分身ID
     * @param integer $TaskID 所属数字分身任务ID
     * @param string $StartTime 分析时间
     * @param string $Status 分析状态
     * @param string $Result 分析结果摘要
     * @param string $TaskName 所属任务名称
     * @param string $TaskType 所属任务类型
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("TwinID",$param) and $param["TwinID"] !== null) {
            $this->TwinID = $param["TwinID"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
