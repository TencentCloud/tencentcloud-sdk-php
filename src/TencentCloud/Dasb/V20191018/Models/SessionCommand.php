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
 * 命令和所属会话
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getRealName() 获取账号
 * @method void setRealName(string $RealName) 设置账号
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getPrivateIp() 获取内部Ip
 * @method void setPrivateIp(string $PrivateIp) 设置内部Ip
 * @method string getPublicIp() 获取外部Ip
 * @method void setPublicIp(string $PublicIp) 设置外部Ip
 * @method array getCommands() 获取命令列表
 * @method void setCommands(array $Commands) 设置命令列表
 * @method integer getCount() 获取记录数
 * @method void setCount(integer $Count) 设置记录数
 * @method string getId() 获取会话Id
 * @method void setId(string $Id) 设置会话Id
 * @method string getInstanceId() 获取设备id
 * @method void setInstanceId(string $InstanceId) 设置设备id
 * @method string getApCode() 获取设备所属的地域
 * @method void setApCode(string $ApCode) 设置设备所属的地域
 */
class SessionCommand extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 账号
     */
    public $RealName;

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
     * @var array 命令列表
     */
    public $Commands;

    /**
     * @var integer 记录数
     */
    public $Count;

    /**
     * @var string 会话Id
     */
    public $Id;

    /**
     * @var string 设备id
     */
    public $InstanceId;

    /**
     * @var string 设备所属的地域
     */
    public $ApCode;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $UserName 用户名
     * @param string $RealName 账号
     * @param string $DeviceName 设备名
     * @param string $PrivateIp 内部Ip
     * @param string $PublicIp 外部Ip
     * @param array $Commands 命令列表
     * @param integer $Count 记录数
     * @param string $Id 会话Id
     * @param string $InstanceId 设备id
     * @param string $ApCode 设备所属的地域
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
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

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = [];
            foreach ($param["Commands"] as $key => $value){
                $obj = new Command();
                $obj->deserialize($value);
                array_push($this->Commands, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }
    }
}
