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
 * 防勒索诱饵篡改事件
 *
 * @method integer getId() 获取事件id
 * @method void setId(integer $Id) 设置事件id
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getQuuid() 获取cvm uuid
 * @method void setQuuid(string $Quuid) 设置cvm uuid
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method integer getStatus() 获取事件状态 0待处理，1已处理，2已信任，3处理中，4已恢复备份
 * @method void setStatus(integer $Status) 设置事件状态 0待处理，1已处理，2已信任，3处理中，4已恢复备份
 * @method string getBaitFilePath() 获取被篡改文件路径
 * @method void setBaitFilePath(string $BaitFilePath) 设置被篡改文件路径
 * @method string getFilePath() 获取恶意文件路径
 * @method void setFilePath(string $FilePath) 设置恶意文件路径
 * @method integer getPid() 获取恶意进程id
 * @method void setPid(integer $Pid) 设置恶意进程id
 * @method string getPidParam() 获取恶意进程参数
 * @method void setPidParam(string $PidParam) 设置恶意进程参数
 * @method integer getFileSize() 获取恶意文件大小
 * @method void setFileSize(integer $FileSize) 设置恶意文件大小
 * @method string getFileMd5() 获取恶意文件md5
 * @method void setFileMd5(string $FileMd5) 设置恶意文件md5
 * @method integer getType() 获取事件类型：0加密勒索，1文件篡改
 * @method void setType(integer $Type) 设置事件类型：0加密勒索，1文件篡改
 * @method string getCreateTime() 获取事件发送时间
 * @method void setCreateTime(string $CreateTime) 设置事件发送时间
 * @method string getInstanceId() 获取cvm 实例id
 * @method void setInstanceId(string $InstanceId) 设置cvm 实例id
 * @method string getModifyTime() 获取事件修改事件
 * @method void setModifyTime(string $ModifyTime) 设置事件修改事件
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 * @method string getStrategyName() 获取策略名称
 * @method void setStrategyName(string $StrategyName) 设置策略名称
 * @method string getHostIp() 获取主机外网ip
 * @method void setHostIp(string $HostIp) 设置主机外网ip
 * @method string getWanIp() 获取主机内网ip
 * @method void setWanIp(string $WanIp) 设置主机内网ip
 * @method string getPsTree() 获取进程树 base64 json
 * @method void setPsTree(string $PsTree) 设置进程树 base64 json
 * @method string getProcessStartTime() 获取进程启动时间
 * @method void setProcessStartTime(string $ProcessStartTime) 设置进程启动时间
 * @method integer getSnapshotNum() 获取主机拥有快照备份数
 * @method void setSnapshotNum(integer $SnapshotNum) 设置主机拥有快照备份数
 */
class RansomDefenseEvent extends AbstractModel
{
    /**
     * @var integer 事件id
     */
    public $Id;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string cvm uuid
     */
    public $Quuid;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var integer 事件状态 0待处理，1已处理，2已信任，3处理中，4已恢复备份
     */
    public $Status;

    /**
     * @var string 被篡改文件路径
     */
    public $BaitFilePath;

    /**
     * @var string 恶意文件路径
     */
    public $FilePath;

    /**
     * @var integer 恶意进程id
     */
    public $Pid;

    /**
     * @var string 恶意进程参数
     */
    public $PidParam;

    /**
     * @var integer 恶意文件大小
     */
    public $FileSize;

    /**
     * @var string 恶意文件md5
     */
    public $FileMd5;

    /**
     * @var integer 事件类型：0加密勒索，1文件篡改
     */
    public $Type;

    /**
     * @var string 事件发送时间
     */
    public $CreateTime;

    /**
     * @var string cvm 实例id
     */
    public $InstanceId;

    /**
     * @var string 事件修改事件
     */
    public $ModifyTime;

    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @var string 策略名称
     */
    public $StrategyName;

    /**
     * @var string 主机外网ip
     */
    public $HostIp;

    /**
     * @var string 主机内网ip
     */
    public $WanIp;

    /**
     * @var string 进程树 base64 json
     */
    public $PsTree;

    /**
     * @var string 进程启动时间
     */
    public $ProcessStartTime;

    /**
     * @var integer 主机拥有快照备份数
     */
    public $SnapshotNum;

    /**
     * @param integer $Id 事件id
     * @param string $Uuid 主机uuid
     * @param string $Quuid cvm uuid
     * @param string $HostName 主机名称
     * @param integer $Status 事件状态 0待处理，1已处理，2已信任，3处理中，4已恢复备份
     * @param string $BaitFilePath 被篡改文件路径
     * @param string $FilePath 恶意文件路径
     * @param integer $Pid 恶意进程id
     * @param string $PidParam 恶意进程参数
     * @param integer $FileSize 恶意文件大小
     * @param string $FileMd5 恶意文件md5
     * @param integer $Type 事件类型：0加密勒索，1文件篡改
     * @param string $CreateTime 事件发送时间
     * @param string $InstanceId cvm 实例id
     * @param string $ModifyTime 事件修改事件
     * @param integer $StrategyId 策略id
     * @param string $StrategyName 策略名称
     * @param string $HostIp 主机外网ip
     * @param string $WanIp 主机内网ip
     * @param string $PsTree 进程树 base64 json
     * @param string $ProcessStartTime 进程启动时间
     * @param integer $SnapshotNum 主机拥有快照备份数
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BaitFilePath",$param) and $param["BaitFilePath"] !== null) {
            $this->BaitFilePath = $param["BaitFilePath"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PidParam",$param) and $param["PidParam"] !== null) {
            $this->PidParam = $param["PidParam"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("PsTree",$param) and $param["PsTree"] !== null) {
            $this->PsTree = $param["PsTree"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("SnapshotNum",$param) and $param["SnapshotNum"] !== null) {
            $this->SnapshotNum = $param["SnapshotNum"];
        }
    }
}
