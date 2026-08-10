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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞修复任务明细项
 *
 * @method integer getId() 获取<p>明细记录ID</p>
 * @method void setId(integer $Id) 设置<p>明细记录ID</p>
 * @method integer getTaskId() 获取<p>关联的修复任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>关联的修复任务ID</p>
 * @method integer getVulId() 获取<p>修复的漏洞ID</p>
 * @method void setVulId(integer $VulId) 设置<p>修复的漏洞ID</p>
 * @method integer getKBId() 获取<p>修复的KB补丁ID</p>
 * @method void setKBId(integer $KBId) 设置<p>修复的KB补丁ID</p>
 * @method string getInstanceId() 获取<p>主机实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>主机实例ID</p>
 * @method string getMachineName() 获取<p>主机名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名称</p>
 * @method string getMachineIp() 获取<p>主机内网IP</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>主机内网IP</p>
 * @method string getVulName() 获取<p>漏洞名称</p>
 * @method void setVulName(string $VulName) 设置<p>漏洞名称</p>
 * @method integer getStatus() 获取<p>执行状态<br>枚举值：<br>0：初始状态<br>1：已下发任务<br>11：客户端已确认<br>2：修复完成<br>3：客户端离线<br>4：超时<br>5：失败<br>6：不支持<br>9：等待快照创建完成中<br>10：快照创建失败</p>
 * @method void setStatus(integer $Status) 设置<p>执行状态<br>枚举值：<br>0：初始状态<br>1：已下发任务<br>11：客户端已确认<br>2：修复完成<br>3：客户端离线<br>4：超时<br>5：失败<br>6：不支持<br>9：等待快照创建完成中<br>10：快照创建失败</p>
 * @method integer getFixStatus() 获取<p>修复结果</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 修复成功</li><li>2： 修复失败</li><li>3： 修复中</li></ul>
 * @method void setFixStatus(integer $FixStatus) 设置<p>修复结果</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 修复成功</li><li>2： 修复失败</li><li>3： 修复中</li></ul>
 * @method integer getSnapshotStatus() 获取<p>快照状态<br>枚举值：<br>-1：无需创建快照<br>0：未开始<br>1：进行中<br>2：已完成<br>3：创建失败</p>
 * @method void setSnapshotStatus(integer $SnapshotStatus) 设置<p>快照状态<br>枚举值：<br>-1：无需创建快照<br>0：未开始<br>1：进行中<br>2：已完成<br>3：创建失败</p>
 * @method string getExceptionMessage() 获取<p>异常提示信息</p>
 * @method void setExceptionMessage(string $ExceptionMessage) 设置<p>异常提示信息</p>
 * @method string getStartTime() 获取<p>修复启动时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setStartTime(string $StartTime) 设置<p>修复启动时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getEndTime() 获取<p>修复结束时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setEndTime(string $EndTime) 设置<p>修复结束时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getSnapshotCreateTime() 获取<p>快照创建时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setSnapshotCreateTime(string $SnapshotCreateTime) 设置<p>快照创建时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getSnapshotExpireTime() 获取<p>快照到期时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setSnapshotExpireTime(string $SnapshotExpireTime) 设置<p>快照到期时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getSnapshotFailReason() 获取<p>快照创建失败原因（当 SnapshotStatus=3 时有值）</p>
 * @method void setSnapshotFailReason(string $SnapshotFailReason) 设置<p>快照创建失败原因（当 SnapshotStatus=3 时有值）</p>
 */
class VulFixTaskDetailItem extends AbstractModel
{
    /**
     * @var integer <p>明细记录ID</p>
     */
    public $Id;

    /**
     * @var integer <p>关联的修复任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>修复的漏洞ID</p>
     */
    public $VulId;

    /**
     * @var integer <p>修复的KB补丁ID</p>
     */
    public $KBId;

    /**
     * @var string <p>主机实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主机名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>主机内网IP</p>
     */
    public $MachineIp;

    /**
     * @var string <p>漏洞名称</p>
     */
    public $VulName;

    /**
     * @var integer <p>执行状态<br>枚举值：<br>0：初始状态<br>1：已下发任务<br>11：客户端已确认<br>2：修复完成<br>3：客户端离线<br>4：超时<br>5：失败<br>6：不支持<br>9：等待快照创建完成中<br>10：快照创建失败</p>
     */
    public $Status;

    /**
     * @var integer <p>修复结果</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 修复成功</li><li>2： 修复失败</li><li>3： 修复中</li></ul>
     */
    public $FixStatus;

    /**
     * @var integer <p>快照状态<br>枚举值：<br>-1：无需创建快照<br>0：未开始<br>1：进行中<br>2：已完成<br>3：创建失败</p>
     */
    public $SnapshotStatus;

    /**
     * @var string <p>异常提示信息</p>
     */
    public $ExceptionMessage;

    /**
     * @var string <p>修复启动时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $StartTime;

    /**
     * @var string <p>修复结束时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $EndTime;

    /**
     * @var string <p>快照创建时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $SnapshotCreateTime;

    /**
     * @var string <p>快照到期时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $SnapshotExpireTime;

    /**
     * @var string <p>快照创建失败原因（当 SnapshotStatus=3 时有值）</p>
     */
    public $SnapshotFailReason;

    /**
     * @param integer $Id <p>明细记录ID</p>
     * @param integer $TaskId <p>关联的修复任务ID</p>
     * @param integer $VulId <p>修复的漏洞ID</p>
     * @param integer $KBId <p>修复的KB补丁ID</p>
     * @param string $InstanceId <p>主机实例ID</p>
     * @param string $MachineName <p>主机名称</p>
     * @param string $MachineIp <p>主机内网IP</p>
     * @param string $VulName <p>漏洞名称</p>
     * @param integer $Status <p>执行状态<br>枚举值：<br>0：初始状态<br>1：已下发任务<br>11：客户端已确认<br>2：修复完成<br>3：客户端离线<br>4：超时<br>5：失败<br>6：不支持<br>9：等待快照创建完成中<br>10：快照创建失败</p>
     * @param integer $FixStatus <p>修复结果</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 修复成功</li><li>2： 修复失败</li><li>3： 修复中</li></ul>
     * @param integer $SnapshotStatus <p>快照状态<br>枚举值：<br>-1：无需创建快照<br>0：未开始<br>1：进行中<br>2：已完成<br>3：创建失败</p>
     * @param string $ExceptionMessage <p>异常提示信息</p>
     * @param string $StartTime <p>修复启动时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $EndTime <p>修复结束时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $SnapshotCreateTime <p>快照创建时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $SnapshotExpireTime <p>快照到期时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $SnapshotFailReason <p>快照创建失败原因（当 SnapshotStatus=3 时有值）</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("SnapshotStatus",$param) and $param["SnapshotStatus"] !== null) {
            $this->SnapshotStatus = $param["SnapshotStatus"];
        }

        if (array_key_exists("ExceptionMessage",$param) and $param["ExceptionMessage"] !== null) {
            $this->ExceptionMessage = $param["ExceptionMessage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SnapshotCreateTime",$param) and $param["SnapshotCreateTime"] !== null) {
            $this->SnapshotCreateTime = $param["SnapshotCreateTime"];
        }

        if (array_key_exists("SnapshotExpireTime",$param) and $param["SnapshotExpireTime"] !== null) {
            $this->SnapshotExpireTime = $param["SnapshotExpireTime"];
        }

        if (array_key_exists("SnapshotFailReason",$param) and $param["SnapshotFailReason"] !== null) {
            $this->SnapshotFailReason = $param["SnapshotFailReason"];
        }
    }
}
