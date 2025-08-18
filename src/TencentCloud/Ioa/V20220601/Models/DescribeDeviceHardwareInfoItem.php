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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端硬件信息列表Item数据
 *
 * @method integer getId() 获取设备ID
 * @method void setId(integer $Id) 设置设备ID
 * @method string getMid() 获取设备唯一标识符
 * @method void setMid(string $Mid) 设置设备唯一标识符
 * @method integer getOsType() 获取OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS
 * @method void setOsType(integer $OsType) 设置OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS
 * @method string getName() 获取终端名
 * @method void setName(string $Name) 设置终端名
 * @method string getUserName() 获取终端用户名
 * @method void setUserName(string $UserName) 设置终端用户名
 * @method integer getStatus() 获取授权状态（ 4未授权 5已授权）
 * @method void setStatus(integer $Status) 设置授权状态（ 4未授权 5已授权）
 * @method integer getGroupId() 获取设备所属分组ID
 * @method void setGroupId(integer $GroupId) 设置设备所属分组ID
 * @method string getGroupName() 获取设备所属分组名
 * @method void setGroupName(string $GroupName) 设置设备所属分组名
 * @method string getGroupNamePath() 获取设备所属分组路径
 * @method void setGroupNamePath(string $GroupNamePath) 设置设备所属分组路径
 * @method string getAccountName() 获取最近登录账户的姓名
 * @method void setAccountName(string $AccountName) 设置最近登录账户的姓名
 * @method string getIp() 获取出口IP
 * @method void setIp(string $Ip) 设置出口IP
 * @method string getMacAddr() 获取MAC地址
 * @method void setMacAddr(string $MacAddr) 设置MAC地址
 * @method string getCpu() 获取CPU品牌型号
 * @method void setCpu(string $Cpu) 设置CPU品牌型号
 * @method string getMemory() 获取内存信息
 * @method void setMemory(string $Memory) 设置内存信息
 * @method string getHardDiskSize() 获取硬盘信息
 * @method void setHardDiskSize(string $HardDiskSize) 设置硬盘信息
 * @method string getMonitor() 获取显示器品牌型号
 * @method void setMonitor(string $Monitor) 设置显示器品牌型号
 * @method string getRemarkName() 获取终端备注名
 * @method void setRemarkName(string $RemarkName) 设置终端备注名
 */
class DescribeDeviceHardwareInfoItem extends AbstractModel
{
    /**
     * @var integer 设备ID
     */
    public $Id;

    /**
     * @var string 设备唯一标识符
     */
    public $Mid;

    /**
     * @var integer OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS
     */
    public $OsType;

    /**
     * @var string 终端名
     */
    public $Name;

    /**
     * @var string 终端用户名
     */
    public $UserName;

    /**
     * @var integer 授权状态（ 4未授权 5已授权）
     */
    public $Status;

    /**
     * @var integer 设备所属分组ID
     */
    public $GroupId;

    /**
     * @var string 设备所属分组名
     */
    public $GroupName;

    /**
     * @var string 设备所属分组路径
     */
    public $GroupNamePath;

    /**
     * @var string 最近登录账户的姓名
     */
    public $AccountName;

    /**
     * @var string 出口IP
     */
    public $Ip;

    /**
     * @var string MAC地址
     */
    public $MacAddr;

    /**
     * @var string CPU品牌型号
     */
    public $Cpu;

    /**
     * @var string 内存信息
     */
    public $Memory;

    /**
     * @var string 硬盘信息
     */
    public $HardDiskSize;

    /**
     * @var string 显示器品牌型号
     */
    public $Monitor;

    /**
     * @var string 终端备注名
     */
    public $RemarkName;

    /**
     * @param integer $Id 设备ID
     * @param string $Mid 设备唯一标识符
     * @param integer $OsType OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS
     * @param string $Name 终端名
     * @param string $UserName 终端用户名
     * @param integer $Status 授权状态（ 4未授权 5已授权）
     * @param integer $GroupId 设备所属分组ID
     * @param string $GroupName 设备所属分组名
     * @param string $GroupNamePath 设备所属分组路径
     * @param string $AccountName 最近登录账户的姓名
     * @param string $Ip 出口IP
     * @param string $MacAddr MAC地址
     * @param string $Cpu CPU品牌型号
     * @param string $Memory 内存信息
     * @param string $HardDiskSize 硬盘信息
     * @param string $Monitor 显示器品牌型号
     * @param string $RemarkName 终端备注名
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

        if (array_key_exists("Mid",$param) and $param["Mid"] !== null) {
            $this->Mid = $param["Mid"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupNamePath",$param) and $param["GroupNamePath"] !== null) {
            $this->GroupNamePath = $param["GroupNamePath"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("MacAddr",$param) and $param["MacAddr"] !== null) {
            $this->MacAddr = $param["MacAddr"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("HardDiskSize",$param) and $param["HardDiskSize"] !== null) {
            $this->HardDiskSize = $param["HardDiskSize"];
        }

        if (array_key_exists("Monitor",$param) and $param["Monitor"] !== null) {
            $this->Monitor = $param["Monitor"];
        }

        if (array_key_exists("RemarkName",$param) and $param["RemarkName"] !== null) {
            $this->RemarkName = $param["RemarkName"];
        }
    }
}
