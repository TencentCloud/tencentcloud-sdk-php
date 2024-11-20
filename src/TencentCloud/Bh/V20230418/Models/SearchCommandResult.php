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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命令执行检索结果
 *
 * @method string getTime() 获取命令输入的时间
 * @method void setTime(string $Time) 设置命令输入的时间
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getRealName() 获取姓名
 * @method void setRealName(string $RealName) 设置姓名
 * @method string getInstanceId() 获取资产ID
 * @method void setInstanceId(string $InstanceId) 设置资产ID
 * @method string getDeviceName() 获取资产名称
 * @method void setDeviceName(string $DeviceName) 设置资产名称
 * @method string getPublicIp() 获取资产公网IP
 * @method void setPublicIp(string $PublicIp) 设置资产公网IP
 * @method string getPrivateIp() 获取资产内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置资产内网IP
 * @method string getCmd() 获取命令
 * @method void setCmd(string $Cmd) 设置命令
 * @method integer getAction() 获取命令执行情况，1--允许，2--拒绝
 * @method void setAction(integer $Action) 设置命令执行情况，1--允许，2--拒绝
 * @method string getSid() 获取命令所属的会话ID
 * @method void setSid(string $Sid) 设置命令所属的会话ID
 * @method integer getTimeOffset() 获取命令执行时间相对于所属会话开始时间的偏移量，单位ms
 * @method void setTimeOffset(integer $TimeOffset) 设置命令执行时间相对于所属会话开始时间的偏移量，单位ms
 * @method string getAccount() 获取账号
 * @method void setAccount(string $Account) 设置账号
 * @method string getFromIp() 获取source ip
 * @method void setFromIp(string $FromIp) 设置source ip
 * @method string getSessionTime() 获取该命令所属会话的会话开始时间
 * @method void setSessionTime(string $SessionTime) 设置该命令所属会话的会话开始时间
 * @method string getSessTime() 获取该命令所属会话的会话开始时间（废弃，使用SessionTime）
 * @method void setSessTime(string $SessTime) 设置该命令所属会话的会话开始时间（废弃，使用SessionTime）
 * @method string getConfirmTime() 获取复核时间
 * @method void setConfirmTime(string $ConfirmTime) 设置复核时间
 * @method string getUserDepartmentId() 获取部门id
 * @method void setUserDepartmentId(string $UserDepartmentId) 设置部门id
 * @method string getUserDepartmentName() 获取用户部门名称
 * @method void setUserDepartmentName(string $UserDepartmentName) 设置用户部门名称
 * @method string getDeviceDepartmentId() 获取设备部门id
 * @method void setDeviceDepartmentId(string $DeviceDepartmentId) 设置设备部门id
 * @method string getDeviceDepartmentName() 获取设备部门名称
 * @method void setDeviceDepartmentName(string $DeviceDepartmentName) 设置设备部门名称
 * @method integer getSize() 获取会话大小
 * @method void setSize(integer $Size) 设置会话大小
 * @method string getSignValue() 获取签名值
 * @method void setSignValue(string $SignValue) 设置签名值
 */
class SearchCommandResult extends AbstractModel
{
    /**
     * @var string 命令输入的时间
     */
    public $Time;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 姓名
     */
    public $RealName;

    /**
     * @var string 资产ID
     */
    public $InstanceId;

    /**
     * @var string 资产名称
     */
    public $DeviceName;

    /**
     * @var string 资产公网IP
     */
    public $PublicIp;

    /**
     * @var string 资产内网IP
     */
    public $PrivateIp;

    /**
     * @var string 命令
     */
    public $Cmd;

    /**
     * @var integer 命令执行情况，1--允许，2--拒绝
     */
    public $Action;

    /**
     * @var string 命令所属的会话ID
     */
    public $Sid;

    /**
     * @var integer 命令执行时间相对于所属会话开始时间的偏移量，单位ms
     */
    public $TimeOffset;

    /**
     * @var string 账号
     */
    public $Account;

    /**
     * @var string source ip
     */
    public $FromIp;

    /**
     * @var string 该命令所属会话的会话开始时间
     */
    public $SessionTime;

    /**
     * @var string 该命令所属会话的会话开始时间（废弃，使用SessionTime）
     */
    public $SessTime;

    /**
     * @var string 复核时间
     */
    public $ConfirmTime;

    /**
     * @var string 部门id
     */
    public $UserDepartmentId;

    /**
     * @var string 用户部门名称
     */
    public $UserDepartmentName;

    /**
     * @var string 设备部门id
     */
    public $DeviceDepartmentId;

    /**
     * @var string 设备部门名称
     */
    public $DeviceDepartmentName;

    /**
     * @var integer 会话大小
     */
    public $Size;

    /**
     * @var string 签名值
     */
    public $SignValue;

    /**
     * @param string $Time 命令输入的时间
     * @param string $UserName 用户名
     * @param string $RealName 姓名
     * @param string $InstanceId 资产ID
     * @param string $DeviceName 资产名称
     * @param string $PublicIp 资产公网IP
     * @param string $PrivateIp 资产内网IP
     * @param string $Cmd 命令
     * @param integer $Action 命令执行情况，1--允许，2--拒绝
     * @param string $Sid 命令所属的会话ID
     * @param integer $TimeOffset 命令执行时间相对于所属会话开始时间的偏移量，单位ms
     * @param string $Account 账号
     * @param string $FromIp source ip
     * @param string $SessionTime 该命令所属会话的会话开始时间
     * @param string $SessTime 该命令所属会话的会话开始时间（废弃，使用SessionTime）
     * @param string $ConfirmTime 复核时间
     * @param string $UserDepartmentId 部门id
     * @param string $UserDepartmentName 用户部门名称
     * @param string $DeviceDepartmentId 设备部门id
     * @param string $DeviceDepartmentName 设备部门名称
     * @param integer $Size 会话大小
     * @param string $SignValue 签名值
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("FromIp",$param) and $param["FromIp"] !== null) {
            $this->FromIp = $param["FromIp"];
        }

        if (array_key_exists("SessionTime",$param) and $param["SessionTime"] !== null) {
            $this->SessionTime = $param["SessionTime"];
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SignValue",$param) and $param["SignValue"] !== null) {
            $this->SignValue = $param["SignValue"];
        }
    }
}
