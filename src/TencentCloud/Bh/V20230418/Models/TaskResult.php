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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运维父任务执行结果
 *
 * @method string getId() 获取运维任务结果日志ID
 * @method void setId(string $Id) 设置运维任务结果日志ID
 * @method string getOperationId() 获取运维任务ID
 * @method void setOperationId(string $OperationId) 设置运维任务ID
 * @method string getName() 获取运维任务名称
 * @method void setName(string $Name) 设置运维任务名称
 * @method string getFromIp() 获取执行任务来源IP
 * @method void setFromIp(string $FromIp) 设置执行任务来源IP
 * @method string getUserName() 获取运维任务所属用户
 * @method void setUserName(string $UserName) 设置运维任务所属用户
 * @method string getRealName() 获取运维任务所属用户的姓名
 * @method void setRealName(string $RealName) 设置运维任务所属用户的姓名
 * @method integer getStatus() 获取运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败
 * @method void setStatus(integer $Status) 设置运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败
 * @method string getStartTime() 获取运维任务开始时间
 * @method void setStartTime(string $StartTime) 设置运维任务开始时间
 * @method string getEndTime() 获取运维任务结束时间
 * @method void setEndTime(string $EndTime) 设置运维任务结束时间
 */
class TaskResult extends AbstractModel
{
    /**
     * @var string 运维任务结果日志ID
     */
    public $Id;

    /**
     * @var string 运维任务ID
     */
    public $OperationId;

    /**
     * @var string 运维任务名称
     */
    public $Name;

    /**
     * @var string 执行任务来源IP
     */
    public $FromIp;

    /**
     * @var string 运维任务所属用户
     */
    public $UserName;

    /**
     * @var string 运维任务所属用户的姓名
     */
    public $RealName;

    /**
     * @var integer 运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败
     */
    public $Status;

    /**
     * @var string 运维任务开始时间
     */
    public $StartTime;

    /**
     * @var string 运维任务结束时间
     */
    public $EndTime;

    /**
     * @param string $Id 运维任务结果日志ID
     * @param string $OperationId 运维任务ID
     * @param string $Name 运维任务名称
     * @param string $FromIp 执行任务来源IP
     * @param string $UserName 运维任务所属用户
     * @param string $RealName 运维任务所属用户的姓名
     * @param integer $Status 运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败
     * @param string $StartTime 运维任务开始时间
     * @param string $EndTime 运维任务结束时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FromIp",$param) and $param["FromIp"] !== null) {
            $this->FromIp = $param["FromIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
