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
 * 命令执行检索结果
 *
 * @method string getTime() 获取<p>命令输入的时间</p>
 * @method void setTime(string $Time) 设置<p>命令输入的时间</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getRealName() 获取<p>姓名</p>
 * @method void setRealName(string $RealName) 设置<p>姓名</p>
 * @method string getInstanceId() 获取<p>资产ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>资产ID</p>
 * @method string getDeviceName() 获取<p>资产名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>资产名称</p>
 * @method string getPublicIp() 获取<p>资产公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>资产公网IP</p>
 * @method string getPrivateIp() 获取<p>资产内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>资产内网IP</p>
 * @method string getCmd() 获取<p>命令</p>
 * @method void setCmd(string $Cmd) 设置<p>命令</p>
 * @method integer getAction() 获取<p>命令执行情况，1--已放行，2--已阻断</p>
 * @method void setAction(integer $Action) 设置<p>命令执行情况，1--已放行，2--已阻断</p>
 * @method string getSid() 获取<p>命令所属的会话ID</p>
 * @method void setSid(string $Sid) 设置<p>命令所属的会话ID</p>
 * @method integer getTimeOffset() 获取<p>命令执行时间相对于所属会话开始时间的偏移量，单位ms</p>
 * @method void setTimeOffset(integer $TimeOffset) 设置<p>命令执行时间相对于所属会话开始时间的偏移量，单位ms</p>
 * @method string getAccount() 获取<p>账号</p>
 * @method void setAccount(string $Account) 设置<p>账号</p>
 * @method string getFromIp() 获取<p>source ip</p>
 * @method void setFromIp(string $FromIp) 设置<p>source ip</p>
 * @method string getSessionTime() 获取<p>该命令所属会话的会话开始时间</p>
 * @method void setSessionTime(string $SessionTime) 设置<p>该命令所属会话的会话开始时间</p>
 * @method string getSessTime() 获取<p>该命令所属会话的会话开始时间（使用SessionTime）</p>
 * @method void setSessTime(string $SessTime) 设置<p>该命令所属会话的会话开始时间（使用SessionTime）</p>
 * @method string getConfirmTime() 获取<p>复核时间</p>
 * @method void setConfirmTime(string $ConfirmTime) 设置<p>复核时间</p>
 * @method string getUserDepartmentId() 获取<p>部门id</p>
 * @method void setUserDepartmentId(string $UserDepartmentId) 设置<p>部门id</p>
 * @method string getUserDepartmentName() 获取<p>用户部门名称</p>
 * @method void setUserDepartmentName(string $UserDepartmentName) 设置<p>用户部门名称</p>
 * @method string getDeviceDepartmentId() 获取<p>设备部门id</p>
 * @method void setDeviceDepartmentId(string $DeviceDepartmentId) 设置<p>设备部门id</p>
 * @method string getDeviceDepartmentName() 获取<p>设备部门名称</p>
 * @method void setDeviceDepartmentName(string $DeviceDepartmentName) 设置<p>设备部门名称</p>
 * @method integer getSize() 获取<p>会话大小</p>
 * @method void setSize(integer $Size) 设置<p>会话大小</p>
 * @method string getSignValue() 获取<p>签名值</p>
 * @method void setSignValue(string $SignValue) 设置<p>签名值</p>
 * @method string getDeviceKind() 获取<p>资产类型</p>
 * @method void setDeviceKind(string $DeviceKind) 设置<p>资产类型</p>
 */
class SearchCommandResult extends AbstractModel
{
    /**
     * @var string <p>命令输入的时间</p>
     */
    public $Time;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>姓名</p>
     */
    public $RealName;

    /**
     * @var string <p>资产ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>资产名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>资产公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>资产内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>命令</p>
     */
    public $Cmd;

    /**
     * @var integer <p>命令执行情况，1--已放行，2--已阻断</p>
     */
    public $Action;

    /**
     * @var string <p>命令所属的会话ID</p>
     */
    public $Sid;

    /**
     * @var integer <p>命令执行时间相对于所属会话开始时间的偏移量，单位ms</p>
     */
    public $TimeOffset;

    /**
     * @var string <p>账号</p>
     */
    public $Account;

    /**
     * @var string <p>source ip</p>
     */
    public $FromIp;

    /**
     * @var string <p>该命令所属会话的会话开始时间</p>
     */
    public $SessionTime;

    /**
     * @var string <p>该命令所属会话的会话开始时间（使用SessionTime）</p>
     */
    public $SessTime;

    /**
     * @var string <p>复核时间</p>
     */
    public $ConfirmTime;

    /**
     * @var string <p>部门id</p>
     */
    public $UserDepartmentId;

    /**
     * @var string <p>用户部门名称</p>
     */
    public $UserDepartmentName;

    /**
     * @var string <p>设备部门id</p>
     */
    public $DeviceDepartmentId;

    /**
     * @var string <p>设备部门名称</p>
     */
    public $DeviceDepartmentName;

    /**
     * @var integer <p>会话大小</p>
     */
    public $Size;

    /**
     * @var string <p>签名值</p>
     */
    public $SignValue;

    /**
     * @var string <p>资产类型</p>
     */
    public $DeviceKind;

    /**
     * @param string $Time <p>命令输入的时间</p>
     * @param string $UserName <p>用户名</p>
     * @param string $RealName <p>姓名</p>
     * @param string $InstanceId <p>资产ID</p>
     * @param string $DeviceName <p>资产名称</p>
     * @param string $PublicIp <p>资产公网IP</p>
     * @param string $PrivateIp <p>资产内网IP</p>
     * @param string $Cmd <p>命令</p>
     * @param integer $Action <p>命令执行情况，1--已放行，2--已阻断</p>
     * @param string $Sid <p>命令所属的会话ID</p>
     * @param integer $TimeOffset <p>命令执行时间相对于所属会话开始时间的偏移量，单位ms</p>
     * @param string $Account <p>账号</p>
     * @param string $FromIp <p>source ip</p>
     * @param string $SessionTime <p>该命令所属会话的会话开始时间</p>
     * @param string $SessTime <p>该命令所属会话的会话开始时间（使用SessionTime）</p>
     * @param string $ConfirmTime <p>复核时间</p>
     * @param string $UserDepartmentId <p>部门id</p>
     * @param string $UserDepartmentName <p>用户部门名称</p>
     * @param string $DeviceDepartmentId <p>设备部门id</p>
     * @param string $DeviceDepartmentName <p>设备部门名称</p>
     * @param integer $Size <p>会话大小</p>
     * @param string $SignValue <p>签名值</p>
     * @param string $DeviceKind <p>资产类型</p>
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

        if (array_key_exists("DeviceKind",$param) and $param["DeviceKind"] !== null) {
            $this->DeviceKind = $param["DeviceKind"];
        }
    }
}
