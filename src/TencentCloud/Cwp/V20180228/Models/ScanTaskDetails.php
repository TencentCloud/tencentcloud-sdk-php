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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描任务详情列表信息
 *
 * @method string getHostIp() 获取服务器IP
 * @method void setHostIp(string $HostIp) 设置服务器IP
 * @method string getHostName() 获取服务器名称
 * @method void setHostName(string $HostName) 设置服务器名称
 * @method string getOsName() 获取操作系统
 * @method void setOsName(string $OsName) 设置操作系统
 * @method integer getRiskNum() 获取风险数量
 * @method void setRiskNum(integer $RiskNum) 设置风险数量
 * @method string getScanBeginTime() 获取扫描开始时间
 * @method void setScanBeginTime(string $ScanBeginTime) 设置扫描开始时间
 * @method string getScanEndTime() 获取扫描结束时间
 * @method void setScanEndTime(string $ScanEndTime) 设置扫描结束时间
 * @method string getUuid() 获取唯一Uuid
 * @method void setUuid(string $Uuid) 设置唯一Uuid
 * @method string getQuuid() 获取唯一Quuid
 * @method void setQuuid(string $Quuid) 设置唯一Quuid
 * @method string getStatus() 获取状态码
 * @method void setStatus(string $Status) 设置状态码
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getId() 获取id唯一
 * @method void setId(integer $Id) 设置id唯一
 * @method integer getFailType() 获取失败详情
 * @method void setFailType(integer $FailType) 设置失败详情
 * @method string getMachineWanIp() 获取外网ip
 * @method void setMachineWanIp(string $MachineWanIp) 设置外网ip
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScanTaskDetails extends AbstractModel
{
    /**
     * @var string 服务器IP
     */
    public $HostIp;

    /**
     * @var string 服务器名称
     */
    public $HostName;

    /**
     * @var string 操作系统
     */
    public $OsName;

    /**
     * @var integer 风险数量
     */
    public $RiskNum;

    /**
     * @var string 扫描开始时间
     */
    public $ScanBeginTime;

    /**
     * @var string 扫描结束时间
     */
    public $ScanEndTime;

    /**
     * @var string 唯一Uuid
     */
    public $Uuid;

    /**
     * @var string 唯一Quuid
     */
    public $Quuid;

    /**
     * @var string 状态码
     */
    public $Status;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer id唯一
     */
    public $Id;

    /**
     * @var integer 失败详情
     */
    public $FailType;

    /**
     * @var string 外网ip
     */
    public $MachineWanIp;

    /**
     * @var MachineExtraInfo 附加信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $HostIp 服务器IP
     * @param string $HostName 服务器名称
     * @param string $OsName 操作系统
     * @param integer $RiskNum 风险数量
     * @param string $ScanBeginTime 扫描开始时间
     * @param string $ScanEndTime 扫描结束时间
     * @param string $Uuid 唯一Uuid
     * @param string $Quuid 唯一Quuid
     * @param string $Status 状态码
     * @param string $Description 描述
     * @param integer $Id id唯一
     * @param integer $FailType 失败详情
     * @param string $MachineWanIp 外网ip
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
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
        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("RiskNum",$param) and $param["RiskNum"] !== null) {
            $this->RiskNum = $param["RiskNum"];
        }

        if (array_key_exists("ScanBeginTime",$param) and $param["ScanBeginTime"] !== null) {
            $this->ScanBeginTime = $param["ScanBeginTime"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FailType",$param) and $param["FailType"] !== null) {
            $this->FailType = $param["FailType"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
