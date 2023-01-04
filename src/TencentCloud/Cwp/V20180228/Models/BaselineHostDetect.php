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
 * 基线主机检测
 *
 * @method string getHostId() 获取主机Id
 * @method void setHostId(string $HostId) 设置主机Id
 * @method string getHostIp() 获取内网Ip
 * @method void setHostIp(string $HostIp) 设置内网Ip
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getWanIp() 获取外网Ip
 * @method void setWanIp(string $WanIp) 设置外网Ip
 * @method integer getDetectStatus() 获取0:未通过 1:忽略 3:通过 5:检测中
 * @method void setDetectStatus(integer $DetectStatus) 设置0:未通过 1:忽略 3:通过 5:检测中
 * @method integer getPassedItemCount() 获取检测通过数
 * @method void setPassedItemCount(integer $PassedItemCount) 设置检测通过数
 * @method integer getItemCount() 获取关联检测项数
 * @method void setItemCount(integer $ItemCount) 设置关联检测项数
 * @method integer getNotPassedItemCount() 获取检测未通过数
 * @method void setNotPassedItemCount(integer $NotPassedItemCount) 设置检测未通过数
 * @method string getFirstTime() 获取首次检测时间
 * @method void setFirstTime(string $FirstTime) 设置首次检测时间
 * @method string getLastTime() 获取最后检测时间
 * @method void setLastTime(string $LastTime) 设置最后检测时间
 * @method string getUuid() 获取主机安全UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置主机安全UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineHostDetect extends AbstractModel
{
    /**
     * @var string 主机Id
     */
    public $HostId;

    /**
     * @var string 内网Ip
     */
    public $HostIp;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 外网Ip
     */
    public $WanIp;

    /**
     * @var integer 0:未通过 1:忽略 3:通过 5:检测中
     */
    public $DetectStatus;

    /**
     * @var integer 检测通过数
     */
    public $PassedItemCount;

    /**
     * @var integer 关联检测项数
     */
    public $ItemCount;

    /**
     * @var integer 检测未通过数
     */
    public $NotPassedItemCount;

    /**
     * @var string 首次检测时间
     */
    public $FirstTime;

    /**
     * @var string 最后检测时间
     */
    public $LastTime;

    /**
     * @var string 主机安全UUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $HostId 主机Id
     * @param string $HostIp 内网Ip
     * @param string $HostName 主机名称
     * @param string $WanIp 外网Ip
     * @param integer $DetectStatus 0:未通过 1:忽略 3:通过 5:检测中
     * @param integer $PassedItemCount 检测通过数
     * @param integer $ItemCount 关联检测项数
     * @param integer $NotPassedItemCount 检测未通过数
     * @param string $FirstTime 首次检测时间
     * @param string $LastTime 最后检测时间
     * @param string $Uuid 主机安全UUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("PassedItemCount",$param) and $param["PassedItemCount"] !== null) {
            $this->PassedItemCount = $param["PassedItemCount"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("NotPassedItemCount",$param) and $param["NotPassedItemCount"] !== null) {
            $this->NotPassedItemCount = $param["NotPassedItemCount"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
