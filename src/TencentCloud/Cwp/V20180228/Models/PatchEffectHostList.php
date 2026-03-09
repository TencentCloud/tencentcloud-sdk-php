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
 * 补丁影响主机列表
 *
 * @method integer getHostVersion() 获取版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
 * @method void setHostVersion(integer $HostVersion) 设置版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
 * @method string getInstanceState() 获取实例状态: "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 
 * @method void setInstanceState(string $InstanceState) 设置实例状态: "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 
 * @method string getFirstScanTime() 获取首次扫描时间
 * @method void setFirstScanTime(string $FirstScanTime) 设置首次扫描时间
 * @method string getLatestScanTime() 获取最近扫描时间
 * @method void setLatestScanTime(string $LatestScanTime) 设置最近扫描时间
 * @method integer getFixStatus() 获取修复状态：0-未进行修复；1-修复中；2-修复失败；3-修复成功；4-修复超时
 * @method void setFixStatus(integer $FixStatus) 设置修复状态：0-未进行修复；1-修复中；2-修复失败；3-修复成功；4-修复超时
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机基础信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机基础信息
 * @method string getUuid() 获取主机安全Uuid
 * @method void setUuid(string $Uuid) 设置主机安全Uuid
 * @method string getQuuid() 获取CVM或BM机器唯一Uuid
 * @method void setQuuid(string $Quuid) 设置CVM或BM机器唯一Uuid
 * @method integer getId() 获取事件id
 * @method void setId(integer $Id) 设置事件id
 * @method integer getStatus() 获取状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
 * @method void setStatus(integer $Status) 设置状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
 * @method string getLatestFixTime() 获取修复时间
 * @method void setLatestFixTime(string $LatestFixTime) 设置修复时间
 * @method integer getKbId() 获取KB id
 * @method void setKbId(integer $KbId) 设置KB id
 * @method integer getRestartRequired() 获取是否需要重启 0不需要，1需要
 * @method void setRestartRequired(integer $RestartRequired) 设置是否需要重启 0不需要，1需要
 * @method integer getRegionId() 获取可用区ID	
 * @method void setRegionId(integer $RegionId) 设置可用区ID	
 * @method string getMachineType() 获取机器类型信息
 * @method void setMachineType(string $MachineType) 设置机器类型信息
 * @method integer getHasSnapshot() 获取修复任务是否创建了快照： 0-未创建，其他-已创建
 * @method void setHasSnapshot(integer $HasSnapshot) 设置修复任务是否创建了快照： 0-未创建，其他-已创建
 */
class PatchEffectHostList extends AbstractModel
{
    /**
     * @var integer 版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
     */
    public $HostVersion;

    /**
     * @var string 实例状态: "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 
     */
    public $InstanceState;

    /**
     * @var string 首次扫描时间
     */
    public $FirstScanTime;

    /**
     * @var string 最近扫描时间
     */
    public $LatestScanTime;

    /**
     * @var integer 修复状态：0-未进行修复；1-修复中；2-修复失败；3-修复成功；4-修复超时
     */
    public $FixStatus;

    /**
     * @var MachineExtraInfo 主机基础信息
     */
    public $MachineExtraInfo;

    /**
     * @var string 主机安全Uuid
     */
    public $Uuid;

    /**
     * @var string CVM或BM机器唯一Uuid
     */
    public $Quuid;

    /**
     * @var integer 事件id
     */
    public $Id;

    /**
     * @var integer 状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
     */
    public $Status;

    /**
     * @var string 修复时间
     */
    public $LatestFixTime;

    /**
     * @var integer KB id
     */
    public $KbId;

    /**
     * @var integer 是否需要重启 0不需要，1需要
     */
    public $RestartRequired;

    /**
     * @var integer 可用区ID	
     */
    public $RegionId;

    /**
     * @var string 机器类型信息
     */
    public $MachineType;

    /**
     * @var integer 修复任务是否创建了快照： 0-未创建，其他-已创建
     */
    public $HasSnapshot;

    /**
     * @param integer $HostVersion 版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
     * @param string $InstanceState 实例状态: "PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 
     * @param string $FirstScanTime 首次扫描时间
     * @param string $LatestScanTime 最近扫描时间
     * @param integer $FixStatus 修复状态：0-未进行修复；1-修复中；2-修复失败；3-修复成功；4-修复超时
     * @param MachineExtraInfo $MachineExtraInfo 主机基础信息
     * @param string $Uuid 主机安全Uuid
     * @param string $Quuid CVM或BM机器唯一Uuid
     * @param integer $Id 事件id
     * @param integer $Status 状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
     * @param string $LatestFixTime 修复时间
     * @param integer $KbId KB id
     * @param integer $RestartRequired 是否需要重启 0不需要，1需要
     * @param integer $RegionId 可用区ID	
     * @param string $MachineType 机器类型信息
     * @param integer $HasSnapshot 修复任务是否创建了快照： 0-未创建，其他-已创建
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
        if (array_key_exists("HostVersion",$param) and $param["HostVersion"] !== null) {
            $this->HostVersion = $param["HostVersion"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("RestartRequired",$param) and $param["RestartRequired"] !== null) {
            $this->RestartRequired = $param["RestartRequired"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("HasSnapshot",$param) and $param["HasSnapshot"] !== null) {
            $this->HasSnapshot = $param["HasSnapshot"];
        }
    }
}
