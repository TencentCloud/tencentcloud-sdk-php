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
 * @method string getId() 获取<p>运维任务结果日志ID</p>
 * @method void setId(string $Id) 设置<p>运维任务结果日志ID</p>
 * @method string getOperationId() 获取<p>运维任务ID</p>
 * @method void setOperationId(string $OperationId) 设置<p>运维任务ID</p>
 * @method string getName() 获取<p>运维任务名称</p>
 * @method void setName(string $Name) 设置<p>运维任务名称</p>
 * @method string getFromIp() 获取<p>执行任务来源IP</p>
 * @method void setFromIp(string $FromIp) 设置<p>执行任务来源IP</p>
 * @method string getUserName() 获取<p>运维任务所属用户</p>
 * @method void setUserName(string $UserName) 设置<p>运维任务所属用户</p>
 * @method string getRealName() 获取<p>运维任务所属用户的姓名</p>
 * @method void setRealName(string $RealName) 设置<p>运维任务所属用户的姓名</p>
 * @method integer getStatus() 获取<p>运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败</p>
 * @method void setStatus(integer $Status) 设置<p>运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败</p>
 * @method string getStartTime() 获取<p>运维任务开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>运维任务开始时间</p>
 * @method string getEndTime() 获取<p>运维任务结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>运维任务结束时间</p>
 * @method integer getCategory() 获取<p>任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型任务（默认类型）</li><li>1： Windows 类型任务</li></ul><p>默认值：0</p>
 * @method void setCategory(integer $Category) 设置<p>任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型任务（默认类型）</li><li>1： Windows 类型任务</li></ul><p>默认值：0</p>
 */
class TaskResult extends AbstractModel
{
    /**
     * @var string <p>运维任务结果日志ID</p>
     */
    public $Id;

    /**
     * @var string <p>运维任务ID</p>
     */
    public $OperationId;

    /**
     * @var string <p>运维任务名称</p>
     */
    public $Name;

    /**
     * @var string <p>执行任务来源IP</p>
     */
    public $FromIp;

    /**
     * @var string <p>运维任务所属用户</p>
     */
    public $UserName;

    /**
     * @var string <p>运维任务所属用户的姓名</p>
     */
    public $RealName;

    /**
     * @var integer <p>运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败</p>
     */
    public $Status;

    /**
     * @var string <p>运维任务开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>运维任务结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型任务（默认类型）</li><li>1： Windows 类型任务</li></ul><p>默认值：0</p>
     */
    public $Category;

    /**
     * @param string $Id <p>运维任务结果日志ID</p>
     * @param string $OperationId <p>运维任务ID</p>
     * @param string $Name <p>运维任务名称</p>
     * @param string $FromIp <p>执行任务来源IP</p>
     * @param string $UserName <p>运维任务所属用户</p>
     * @param string $RealName <p>运维任务所属用户的姓名</p>
     * @param integer $Status <p>运维任务执行状态 1 - 执行中，2 - 成功，3 - 失败，4 - 部分失败</p>
     * @param string $StartTime <p>运维任务开始时间</p>
     * @param string $EndTime <p>运维任务结束时间</p>
     * @param integer $Category <p>任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型任务（默认类型）</li><li>1： Windows 类型任务</li></ul><p>默认值：0</p>
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
