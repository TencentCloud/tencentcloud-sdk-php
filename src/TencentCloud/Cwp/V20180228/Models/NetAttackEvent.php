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
 * 网络攻击事件
 *
 * @method integer getId() 获取日志ID
 * @method void setId(integer $Id) 设置日志ID
 * @method string getUuid() 获取客户端ID
 * @method void setUuid(string $Uuid) 设置客户端ID
 * @method integer getDstPort() 获取目标端口
 * @method void setDstPort(integer $DstPort) 设置目标端口
 * @method string getSrcIP() 获取来源IP
 * @method void setSrcIP(string $SrcIP) 设置来源IP
 * @method string getLocation() 获取来源地
 * @method void setLocation(string $Location) 设置来源地
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getMergeTime() 获取攻击时间
 * @method void setMergeTime(string $MergeTime) 设置攻击时间
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取攻击状态，0: 尝试攻击 1: 实锤攻击(攻击成功)
 * @method void setType(integer $Type) 设置攻击状态，0: 尝试攻击 1: 实锤攻击(攻击成功)
 * @method integer getStatus() 获取处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
 * @method void setStatus(integer $Status) 设置处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
 * @method integer getVulSupportDefense() 获取漏洞是否支持防御，0:不支持 1:支持
 * @method void setVulSupportDefense(integer $VulSupportDefense) 设置漏洞是否支持防御，0:不支持 1:支持
 * @method integer getVulDefenceStatus() 获取是否开启漏洞防御，0关1开
 * @method void setVulDefenceStatus(integer $VulDefenceStatus) 设置是否开启漏洞防御，0关1开
 * @method integer getPayVersion() 获取机器付费版本，0 基础版，1专业版，2旗舰版，3普惠版
 * @method void setPayVersion(integer $PayVersion) 设置机器付费版本，0 基础版，1专业版，2旗舰版，3普惠版
 * @method string getQuuid() 获取cvm uuid
 * @method void setQuuid(string $Quuid) 设置cvm uuid
 * @method integer getCount() 获取攻击次数
 * @method void setCount(integer $Count) 设置攻击次数
 * @method boolean getNew() 获取是否今日新增主机
 * @method void setNew(boolean $New) 设置是否今日新增主机
 */
class NetAttackEvent extends AbstractModel
{
    /**
     * @var integer 日志ID
     */
    public $Id;

    /**
     * @var string 客户端ID
     */
    public $Uuid;

    /**
     * @var integer 目标端口
     */
    public $DstPort;

    /**
     * @var string 来源IP
     */
    public $SrcIP;

    /**
     * @var string 来源地
     */
    public $Location;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 攻击时间
     */
    public $MergeTime;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @var integer 攻击状态，0: 尝试攻击 1: 实锤攻击(攻击成功)
     */
    public $Type;

    /**
     * @var integer 处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
     */
    public $Status;

    /**
     * @var integer 漏洞是否支持防御，0:不支持 1:支持
     */
    public $VulSupportDefense;

    /**
     * @var integer 是否开启漏洞防御，0关1开
     */
    public $VulDefenceStatus;

    /**
     * @var integer 机器付费版本，0 基础版，1专业版，2旗舰版，3普惠版
     */
    public $PayVersion;

    /**
     * @var string cvm uuid
     */
    public $Quuid;

    /**
     * @var integer 攻击次数
     */
    public $Count;

    /**
     * @var boolean 是否今日新增主机
     */
    public $New;

    /**
     * @param integer $Id 日志ID
     * @param string $Uuid 客户端ID
     * @param integer $DstPort 目标端口
     * @param string $SrcIP 来源IP
     * @param string $Location 来源地
     * @param integer $VulId 漏洞id
     * @param string $VulName 漏洞名称
     * @param string $MergeTime 攻击时间
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 攻击状态，0: 尝试攻击 1: 实锤攻击(攻击成功)
     * @param integer $Status 处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
     * @param integer $VulSupportDefense 漏洞是否支持防御，0:不支持 1:支持
     * @param integer $VulDefenceStatus 是否开启漏洞防御，0关1开
     * @param integer $PayVersion 机器付费版本，0 基础版，1专业版，2旗舰版，3普惠版
     * @param string $Quuid cvm uuid
     * @param integer $Count 攻击次数
     * @param boolean $New 是否今日新增主机
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

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VulSupportDefense",$param) and $param["VulSupportDefense"] !== null) {
            $this->VulSupportDefense = $param["VulSupportDefense"];
        }

        if (array_key_exists("VulDefenceStatus",$param) and $param["VulDefenceStatus"] !== null) {
            $this->VulDefenceStatus = $param["VulDefenceStatus"];
        }

        if (array_key_exists("PayVersion",$param) and $param["PayVersion"] !== null) {
            $this->PayVersion = $param["PayVersion"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("New",$param) and $param["New"] !== null) {
            $this->New = $param["New"];
        }
    }
}
