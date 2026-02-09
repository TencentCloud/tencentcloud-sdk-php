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
 * 运维子任务执行结果
 *
 * @method string getId() 获取执行日志ID
 * @method void setId(string $Id) 设置执行日志ID
 * @method string getInstanceId() 获取执行主机实例ID
 * @method void setInstanceId(string $InstanceId) 设置执行主机实例ID
 * @method string getName() 获取执行主机名称
 * @method void setName(string $Name) 设置执行主机名称
 * @method string getApCode() 获取执行主机地域
 * @method void setApCode(string $ApCode) 设置执行主机地域
 * @method string getPublicIp() 获取执行主机外网IP
 * @method void setPublicIp(string $PublicIp) 设置执行主机外网IP
 * @method string getPrivateIp() 获取执行主机内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置执行主机内网IP
 * @method integer getStatus() 获取运维任务状态 1 - 执行中，2 - 成功， 3 - 失败，4 - 超时
 * @method void setStatus(integer $Status) 设置运维任务状态 1 - 执行中，2 - 成功， 3 - 失败，4 - 超时
 * @method string getReason() 获取运维任务失败原因
 * @method void setReason(string $Reason) 设置运维任务失败原因
 * @method integer getExitCode() 获取运维任务命令退出码
 * @method void setExitCode(integer $ExitCode) 设置运维任务命令退出码
 * @method string getStartTime() 获取运维任务开始时间
 * @method void setStartTime(string $StartTime) 设置运维任务开始时间
 * @method string getEndTime() 获取运维任务结束时间
 * @method void setEndTime(string $EndTime) 设置运维任务结束时间
 * @method string getStdOut() 获取运维任务执行结果输出。默认超出16384字节的内容会被自动截断
 * @method void setStdOut(string $StdOut) 设置运维任务执行结果输出。默认超出16384字节的内容会被自动截断
 * @method string getStdErr() 获取运维任务执行结果错误
 * @method void setStdErr(string $StdErr) 设置运维任务执行结果错误
 * @method string getDeviceName() 获取资产名
 * @method void setDeviceName(string $DeviceName) 设置资产名
 * @method string getAccount() 获取资产账号
 * @method void setAccount(string $Account) 设置资产账号
 */
class SubtaskResult extends AbstractModel
{
    /**
     * @var string 执行日志ID
     */
    public $Id;

    /**
     * @var string 执行主机实例ID
     */
    public $InstanceId;

    /**
     * @var string 执行主机名称
     * @deprecated
     */
    public $Name;

    /**
     * @var string 执行主机地域
     */
    public $ApCode;

    /**
     * @var string 执行主机外网IP
     */
    public $PublicIp;

    /**
     * @var string 执行主机内网IP
     */
    public $PrivateIp;

    /**
     * @var integer 运维任务状态 1 - 执行中，2 - 成功， 3 - 失败，4 - 超时
     */
    public $Status;

    /**
     * @var string 运维任务失败原因
     */
    public $Reason;

    /**
     * @var integer 运维任务命令退出码
     */
    public $ExitCode;

    /**
     * @var string 运维任务开始时间
     */
    public $StartTime;

    /**
     * @var string 运维任务结束时间
     */
    public $EndTime;

    /**
     * @var string 运维任务执行结果输出。默认超出16384字节的内容会被自动截断
     */
    public $StdOut;

    /**
     * @var string 运维任务执行结果错误
     */
    public $StdErr;

    /**
     * @var string 资产名
     */
    public $DeviceName;

    /**
     * @var string 资产账号
     */
    public $Account;

    /**
     * @param string $Id 执行日志ID
     * @param string $InstanceId 执行主机实例ID
     * @param string $Name 执行主机名称
     * @param string $ApCode 执行主机地域
     * @param string $PublicIp 执行主机外网IP
     * @param string $PrivateIp 执行主机内网IP
     * @param integer $Status 运维任务状态 1 - 执行中，2 - 成功， 3 - 失败，4 - 超时
     * @param string $Reason 运维任务失败原因
     * @param integer $ExitCode 运维任务命令退出码
     * @param string $StartTime 运维任务开始时间
     * @param string $EndTime 运维任务结束时间
     * @param string $StdOut 运维任务执行结果输出。默认超出16384字节的内容会被自动截断
     * @param string $StdErr 运维任务执行结果错误
     * @param string $DeviceName 资产名
     * @param string $Account 资产账号
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StdOut",$param) and $param["StdOut"] !== null) {
            $this->StdOut = $param["StdOut"];
        }

        if (array_key_exists("StdErr",$param) and $param["StdErr"] !== null) {
            $this->StdErr = $param["StdErr"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }
    }
}
