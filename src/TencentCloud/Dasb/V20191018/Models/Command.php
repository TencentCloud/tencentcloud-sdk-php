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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命令集合
 *
 * @method string getCmd() 获取命令
 * @method void setCmd(string $Cmd) 设置命令
 * @method string getTime() 获取命令输入的时间
 * @method void setTime(string $Time) 设置命令输入的时间
 * @method integer getTimeOffset() 获取命令执行时间相对于所属会话开始时间的偏移量，单位ms
 * @method void setTimeOffset(integer $TimeOffset) 设置命令执行时间相对于所属会话开始时间的偏移量，单位ms
 * @method integer getAction() 获取命令执行情况，1--允许，2--拒绝，3--确认
 * @method void setAction(integer $Action) 设置命令执行情况，1--允许，2--拒绝，3--确认
 * @method string getSid() 获取会话id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSid(string $Sid) 设置会话id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccount() 获取设备account
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccount(string $Account) 设置设备account
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取设备ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置设备ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromIp() 获取source ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromIp(string $FromIp) 设置source ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessTime() 获取该命令所属会话的会话开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessTime(string $SessTime) 设置该命令所属会话的会话开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfirmTime() 获取复核时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfirmTime(string $ConfirmTime) 设置复核时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserDepartmentId() 获取用户部门id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDepartmentId(string $UserDepartmentId) 设置用户部门id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserDepartmentName() 获取用户部门name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDepartmentName(string $UserDepartmentName) 设置用户部门name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceDepartmentId() 获取设备部门id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceDepartmentId(string $DeviceDepartmentId) 设置设备部门id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceDepartmentName() 获取设备部门name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceDepartmentName(string $DeviceDepartmentName) 设置设备部门name
注意：此字段可能返回 null，表示取不到有效值。
 */
class Command extends AbstractModel
{
    /**
     * @var string 命令
     */
    public $Cmd;

    /**
     * @var string 命令输入的时间
     */
    public $Time;

    /**
     * @var integer 命令执行时间相对于所属会话开始时间的偏移量，单位ms
     */
    public $TimeOffset;

    /**
     * @var integer 命令执行情况，1--允许，2--拒绝，3--确认
     */
    public $Action;

    /**
     * @var string 会话id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sid;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 设备account
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Account;

    /**
     * @var string 设备ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string source ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromIp;

    /**
     * @var string 该命令所属会话的会话开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessTime;

    /**
     * @var string 复核时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfirmTime;

    /**
     * @var string 用户部门id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDepartmentId;

    /**
     * @var string 用户部门name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDepartmentName;

    /**
     * @var string 设备部门id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceDepartmentId;

    /**
     * @var string 设备部门name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceDepartmentName;

    /**
     * @param string $Cmd 命令
     * @param string $Time 命令输入的时间
     * @param integer $TimeOffset 命令执行时间相对于所属会话开始时间的偏移量，单位ms
     * @param integer $Action 命令执行情况，1--允许，2--拒绝，3--确认
     * @param string $Sid 会话id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Account 设备account
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 设备ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromIp source ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessTime 该命令所属会话的会话开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfirmTime 复核时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserDepartmentId 用户部门id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserDepartmentName 用户部门name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceDepartmentId 设备部门id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceDepartmentName 设备部门name
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FromIp",$param) and $param["FromIp"] !== null) {
            $this->FromIp = $param["FromIp"];
        }

        if (array_key_exists("SessTime",$param) and $param["SessTime"] !== null) {
            $this->SessTime = $param["SessTime"];
        }

        if (array_key_exists("ConfirmTime",$param) and $param["ConfirmTime"] !== null) {
            $this->ConfirmTime = $param["ConfirmTime"];
        }

        if (array_key_exists("UserDepartmentId",$param) and $param["UserDepartmentId"] !== null) {
            $this->UserDepartmentId = $param["UserDepartmentId"];
        }

        if (array_key_exists("UserDepartmentName",$param) and $param["UserDepartmentName"] !== null) {
            $this->UserDepartmentName = $param["UserDepartmentName"];
        }

        if (array_key_exists("DeviceDepartmentId",$param) and $param["DeviceDepartmentId"] !== null) {
            $this->DeviceDepartmentId = $param["DeviceDepartmentId"];
        }

        if (array_key_exists("DeviceDepartmentName",$param) and $param["DeviceDepartmentName"] !== null) {
            $this->DeviceDepartmentName = $param["DeviceDepartmentName"];
        }
    }
}
