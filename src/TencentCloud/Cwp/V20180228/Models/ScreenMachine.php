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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏主机列表数据
 *
 * @method string getMachineName() 获取主机名称。
 * @method void setMachineName(string $MachineName) 设置主机名称。
 * @method string getMachineOs() 获取主机系统。
 * @method void setMachineOs(string $MachineOs) 设置主机系统。
 * @method string getUuid() 获取主机安全Uuid，若客户端长时间不在线将返回空字符。
 * @method void setUuid(string $Uuid) 设置主机安全Uuid，若客户端长时间不在线将返回空字符。
 * @method integer getMachineStatus() 获取大屏主机状态 0：未安装agent，1：离线状态，2:离线-风险，3：离线-严重
4：安装设备-正常，5：安装设备-正常 且是专业版或旗舰版，6：安装设备-风险（网络攻击事件>0） ，
 7：安装设备-风险（网络攻击事件>0 且是专业版或旗舰版，8：安装设备-严重（入侵检测事件>0），
9：安装设备-严重（入侵检测事件>0）且是专业版或旗舰版
 * @method void setMachineStatus(integer $MachineStatus) 设置大屏主机状态 0：未安装agent，1：离线状态，2:离线-风险，3：离线-严重
4：安装设备-正常，5：安装设备-正常 且是专业版或旗舰版，6：安装设备-风险（网络攻击事件>0） ，
 7：安装设备-风险（网络攻击事件>0 且是专业版或旗舰版，8：安装设备-严重（入侵检测事件>0），
9：安装设备-严重（入侵检测事件>0）且是专业版或旗舰版
 * @method string getQuuid() 获取CVM或BM机器唯一Uuid。
 * @method void setQuuid(string $Quuid) 设置CVM或BM机器唯一Uuid。
 * @method integer getVulNum() 获取漏洞数。
 * @method void setVulNum(integer $VulNum) 设置漏洞数。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getMachineWanIp() 获取主机外网IP。
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP。
 * @method integer getBaselineNum() 获取基线风险数。
 * @method void setBaselineNum(integer $BaselineNum) 设置基线风险数。
 * @method integer getCyberAttackNum() 获取网络风险数。
 * @method void setCyberAttackNum(integer $CyberAttackNum) 设置网络风险数。
 * @method string getSecurityStatus() 获取风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
 * @method void setSecurityStatus(string $SecurityStatus) 设置风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
 * @method integer getInvasionNum() 获取入侵事件数
 * @method void setInvasionNum(integer $InvasionNum) 设置入侵事件数
 * @method string getMachineType() 获取机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 * @method void setMachineType(string $MachineType) 设置机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 * @method string getCpuLoad() 获取cpu 负载状态
 * @method void setCpuLoad(string $CpuLoad) 设置cpu 负载状态
 * @method float getCpuSize() 获取cpu 核数
 * @method void setCpuSize(float $CpuSize) 设置cpu 核数
 * @method string getDiskLoad() 获取硬盘使用率 %
 * @method void setDiskLoad(string $DiskLoad) 设置硬盘使用率 %
 * @method float getDiskSize() 获取硬盘容量GB
 * @method void setDiskSize(float $DiskSize) 设置硬盘容量GB
 * @method string getMemLoad() 获取内存负载率%
 * @method void setMemLoad(string $MemLoad) 设置内存负载率%
 * @method float getMemSize() 获取内存容量 GB
 * @method void setMemSize(float $MemSize) 设置内存容量 GB
 * @method string getCoreVersion() 获取内核版本
 * @method void setCoreVersion(string $CoreVersion) 设置内核版本
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
 */
class ScreenMachine extends AbstractModel
{
    /**
     * @var string 主机名称。
     */
    public $MachineName;

    /**
     * @var string 主机系统。
     */
    public $MachineOs;

    /**
     * @var string 主机安全Uuid，若客户端长时间不在线将返回空字符。
     */
    public $Uuid;

    /**
     * @var integer 大屏主机状态 0：未安装agent，1：离线状态，2:离线-风险，3：离线-严重
4：安装设备-正常，5：安装设备-正常 且是专业版或旗舰版，6：安装设备-风险（网络攻击事件>0） ，
 7：安装设备-风险（网络攻击事件>0 且是专业版或旗舰版，8：安装设备-严重（入侵检测事件>0），
9：安装设备-严重（入侵检测事件>0）且是专业版或旗舰版
     */
    public $MachineStatus;

    /**
     * @var string CVM或BM机器唯一Uuid。
     */
    public $Quuid;

    /**
     * @var integer 漏洞数。
     */
    public $VulNum;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 主机外网IP。
     */
    public $MachineWanIp;

    /**
     * @var integer 基线风险数。
     */
    public $BaselineNum;

    /**
     * @var integer 网络风险数。
     */
    public $CyberAttackNum;

    /**
     * @var string 风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
     */
    public $SecurityStatus;

    /**
     * @var integer 入侵事件数
     */
    public $InvasionNum;

    /**
     * @var string 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
     */
    public $MachineType;

    /**
     * @var string cpu 负载状态
     */
    public $CpuLoad;

    /**
     * @var float cpu 核数
     */
    public $CpuSize;

    /**
     * @var string 硬盘使用率 %
     */
    public $DiskLoad;

    /**
     * @var float 硬盘容量GB
     */
    public $DiskSize;

    /**
     * @var string 内存负载率%
     */
    public $MemLoad;

    /**
     * @var float 内存容量 GB
     */
    public $MemSize;

    /**
     * @var string 内核版本
     */
    public $CoreVersion;

    /**
     * @var MachineExtraInfo 附加信息
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineName 主机名称。
     * @param string $MachineOs 主机系统。
     * @param string $Uuid 主机安全Uuid，若客户端长时间不在线将返回空字符。
     * @param integer $MachineStatus 大屏主机状态 0：未安装agent，1：离线状态，2:离线-风险，3：离线-严重
4：安装设备-正常，5：安装设备-正常 且是专业版或旗舰版，6：安装设备-风险（网络攻击事件>0） ，
 7：安装设备-风险（网络攻击事件>0 且是专业版或旗舰版，8：安装设备-严重（入侵检测事件>0），
9：安装设备-严重（入侵检测事件>0）且是专业版或旗舰版
     * @param string $Quuid CVM或BM机器唯一Uuid。
     * @param integer $VulNum 漏洞数。
     * @param string $MachineIp 主机IP。
     * @param string $MachineWanIp 主机外网IP。
     * @param integer $BaselineNum 基线风险数。
     * @param integer $CyberAttackNum 网络风险数。
     * @param string $SecurityStatus 风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
     * @param integer $InvasionNum 入侵事件数
     * @param string $MachineType 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
     * @param string $CpuLoad cpu 负载状态
     * @param float $CpuSize cpu 核数
     * @param string $DiskLoad 硬盘使用率 %
     * @param float $DiskSize 硬盘容量GB
     * @param string $MemLoad 内存负载率%
     * @param float $MemSize 内存容量 GB
     * @param string $CoreVersion 内核版本
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("BaselineNum",$param) and $param["BaselineNum"] !== null) {
            $this->BaselineNum = $param["BaselineNum"];
        }

        if (array_key_exists("CyberAttackNum",$param) and $param["CyberAttackNum"] !== null) {
            $this->CyberAttackNum = $param["CyberAttackNum"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }

        if (array_key_exists("InvasionNum",$param) and $param["InvasionNum"] !== null) {
            $this->InvasionNum = $param["InvasionNum"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = $param["DiskLoad"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MemLoad",$param) and $param["MemLoad"] !== null) {
            $this->MemLoad = $param["MemLoad"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("CoreVersion",$param) and $param["CoreVersion"] !== null) {
            $this->CoreVersion = $param["CoreVersion"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
