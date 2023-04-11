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
 * 搜索字符或图形会话时返回的SessionResul结构体
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getRealName() 获取姓名
 * @method void setRealName(string $RealName) 设置姓名
 * @method string getAccount() 获取主机账号
 * @method void setAccount(string $Account) 设置主机账号
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getSize() 获取会话大小
 * @method void setSize(integer $Size) 设置会话大小
 * @method string getInstanceId() 获取设备ID
 * @method void setInstanceId(string $InstanceId) 设置设备ID
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getPrivateIp() 获取内部Ip
 * @method void setPrivateIp(string $PrivateIp) 设置内部Ip
 * @method string getPublicIp() 获取外部Ip
 * @method void setPublicIp(string $PublicIp) 设置外部Ip
 * @method string getFromIp() 获取来源Ip
 * @method void setFromIp(string $FromIp) 设置来源Ip
 * @method float getDuration() 获取会话持续时长
 * @method void setDuration(float $Duration) 设置会话持续时长
 * @method integer getCount() 获取该会话内命令数量 ，搜索图形会话时该字段无意义
 * @method void setCount(integer $Count) 设置该会话内命令数量 ，搜索图形会话时该字段无意义
 * @method integer getDangerCount() 获取该会话内高危命令数，搜索图形时该字段无意义
 * @method void setDangerCount(integer $DangerCount) 设置该会话内高危命令数，搜索图形时该字段无意义
 * @method integer getStatus() 获取会话状态，如1会话活跃  2会话结束  3强制离线  4其他错误
 * @method void setStatus(integer $Status) 设置会话状态，如1会话活跃  2会话结束  3强制离线  4其他错误
 * @method string getId() 获取会话Id
 * @method void setId(string $Id) 设置会话Id
 * @method string getApCode() 获取设备所属的地域
 * @method void setApCode(string $ApCode) 设置设备所属的地域
 * @method string getProtocol() 获取会话协议
 * @method void setProtocol(string $Protocol) 设置会话协议
 */
class SessionResult extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 姓名
     */
    public $RealName;

    /**
     * @var string 主机账号
     */
    public $Account;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 会话大小
     */
    public $Size;

    /**
     * @var string 设备ID
     */
    public $InstanceId;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var string 内部Ip
     */
    public $PrivateIp;

    /**
     * @var string 外部Ip
     */
    public $PublicIp;

    /**
     * @var string 来源Ip
     */
    public $FromIp;

    /**
     * @var float 会话持续时长
     */
    public $Duration;

    /**
     * @var integer 该会话内命令数量 ，搜索图形会话时该字段无意义
     */
    public $Count;

    /**
     * @var integer 该会话内高危命令数，搜索图形时该字段无意义
     */
    public $DangerCount;

    /**
     * @var integer 会话状态，如1会话活跃  2会话结束  3强制离线  4其他错误
     */
    public $Status;

    /**
     * @var string 会话Id
     */
    public $Id;

    /**
     * @var string 设备所属的地域
     */
    public $ApCode;

    /**
     * @var string 会话协议
     */
    public $Protocol;

    /**
     * @param string $UserName 用户名
     * @param string $RealName 姓名
     * @param string $Account 主机账号
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Size 会话大小
     * @param string $InstanceId 设备ID
     * @param string $DeviceName 设备名
     * @param string $PrivateIp 内部Ip
     * @param string $PublicIp 外部Ip
     * @param string $FromIp 来源Ip
     * @param float $Duration 会话持续时长
     * @param integer $Count 该会话内命令数量 ，搜索图形会话时该字段无意义
     * @param integer $DangerCount 该会话内高危命令数，搜索图形时该字段无意义
     * @param integer $Status 会话状态，如1会话活跃  2会话结束  3强制离线  4其他错误
     * @param string $Id 会话Id
     * @param string $ApCode 设备所属的地域
     * @param string $Protocol 会话协议
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("FromIp",$param) and $param["FromIp"] !== null) {
            $this->FromIp = $param["FromIp"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DangerCount",$param) and $param["DangerCount"] !== null) {
            $this->DangerCount = $param["DangerCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
