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
 * @method integer getId() 获取<p>设备ID</p>
 * @method void setId(integer $Id) 设置<p>设备ID</p>
 * @method string getMid() 获取<p>设备唯一标识符</p>
 * @method void setMid(string $Mid) 设置<p>设备唯一标识符</p>
 * @method integer getOsType() 获取<p>OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS</p>
 * @method void setOsType(integer $OsType) 设置<p>OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS</p>
 * @method string getName() 获取<p>终端名</p>
 * @method void setName(string $Name) 设置<p>终端名</p>
 * @method string getUserName() 获取<p>终端用户名</p>
 * @method void setUserName(string $UserName) 设置<p>终端用户名</p>
 * @method integer getStatus() 获取<p>授权状态（ 4未授权 5已授权）</p>
 * @method void setStatus(integer $Status) 设置<p>授权状态（ 4未授权 5已授权）</p>
 * @method integer getGroupId() 获取<p>设备所属分组ID</p>
 * @method void setGroupId(integer $GroupId) 设置<p>设备所属分组ID</p>
 * @method string getGroupName() 获取<p>设备所属分组名</p>
 * @method void setGroupName(string $GroupName) 设置<p>设备所属分组名</p>
 * @method string getGroupNamePath() 获取<p>设备所属分组路径</p>
 * @method void setGroupNamePath(string $GroupNamePath) 设置<p>设备所属分组路径</p>
 * @method string getAccountName() 获取<p>最近登录账户的姓名</p>
 * @method void setAccountName(string $AccountName) 设置<p>最近登录账户的姓名</p>
 * @method string getIp() 获取<p>出口IP</p>
 * @method void setIp(string $Ip) 设置<p>出口IP</p>
 * @method string getMacAddr() 获取<p>MAC地址</p>
 * @method void setMacAddr(string $MacAddr) 设置<p>MAC地址</p>
 * @method string getCpu() 获取<p>CPU品牌型号</p>
 * @method void setCpu(string $Cpu) 设置<p>CPU品牌型号</p>
 * @method string getMemory() 获取<p>内存信息</p>
 * @method void setMemory(string $Memory) 设置<p>内存信息</p>
 * @method string getHardDiskSize() 获取<p>硬盘信息</p>
 * @method void setHardDiskSize(string $HardDiskSize) 设置<p>硬盘信息</p>
 * @method string getMonitor() 获取<p>显示器品牌型号</p>
 * @method void setMonitor(string $Monitor) 设置<p>显示器品牌型号</p>
 * @method string getRemarkName() 获取<p>终端备注名</p>
 * @method void setRemarkName(string $RemarkName) 设置<p>终端备注名</p>
 * @method string getBiosUuid() 获取<p>BiosUUID（启动盘标识符）</p>
 * @method void setBiosUuid(string $BiosUuid) 设置<p>BiosUUID（启动盘标识符）</p>
 */
class DescribeDeviceHardwareInfoItem extends AbstractModel
{
    /**
     * @var integer <p>设备ID</p>
     */
    public $Id;

    /**
     * @var string <p>设备唯一标识符</p>
     */
    public $Mid;

    /**
     * @var integer <p>OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS</p>
     */
    public $OsType;

    /**
     * @var string <p>终端名</p>
     */
    public $Name;

    /**
     * @var string <p>终端用户名</p>
     */
    public $UserName;

    /**
     * @var integer <p>授权状态（ 4未授权 5已授权）</p>
     */
    public $Status;

    /**
     * @var integer <p>设备所属分组ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>设备所属分组名</p>
     */
    public $GroupName;

    /**
     * @var string <p>设备所属分组路径</p>
     */
    public $GroupNamePath;

    /**
     * @var string <p>最近登录账户的姓名</p>
     */
    public $AccountName;

    /**
     * @var string <p>出口IP</p>
     */
    public $Ip;

    /**
     * @var string <p>MAC地址</p>
     */
    public $MacAddr;

    /**
     * @var string <p>CPU品牌型号</p>
     */
    public $Cpu;

    /**
     * @var string <p>内存信息</p>
     */
    public $Memory;

    /**
     * @var string <p>硬盘信息</p>
     */
    public $HardDiskSize;

    /**
     * @var string <p>显示器品牌型号</p>
     */
    public $Monitor;

    /**
     * @var string <p>终端备注名</p>
     */
    public $RemarkName;

    /**
     * @var string <p>BiosUUID（启动盘标识符）</p>
     */
    public $BiosUuid;

    /**
     * @param integer $Id <p>设备ID</p>
     * @param string $Mid <p>设备唯一标识符</p>
     * @param integer $OsType <p>OS平台 0 Windows 1 Linux 2 macOS 4 Android 5 iOS</p>
     * @param string $Name <p>终端名</p>
     * @param string $UserName <p>终端用户名</p>
     * @param integer $Status <p>授权状态（ 4未授权 5已授权）</p>
     * @param integer $GroupId <p>设备所属分组ID</p>
     * @param string $GroupName <p>设备所属分组名</p>
     * @param string $GroupNamePath <p>设备所属分组路径</p>
     * @param string $AccountName <p>最近登录账户的姓名</p>
     * @param string $Ip <p>出口IP</p>
     * @param string $MacAddr <p>MAC地址</p>
     * @param string $Cpu <p>CPU品牌型号</p>
     * @param string $Memory <p>内存信息</p>
     * @param string $HardDiskSize <p>硬盘信息</p>
     * @param string $Monitor <p>显示器品牌型号</p>
     * @param string $RemarkName <p>终端备注名</p>
     * @param string $BiosUuid <p>BiosUUID（启动盘标识符）</p>
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

        if (array_key_exists("BiosUuid",$param) and $param["BiosUuid"] !== null) {
            $this->BiosUuid = $param["BiosUuid"];
        }
    }
}
