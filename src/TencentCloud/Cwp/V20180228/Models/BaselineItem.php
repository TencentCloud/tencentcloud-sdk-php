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
 * 基线项
 *
 * @method integer getItemId() 获取项Id
 * @method void setItemId(integer $ItemId) 设置项Id
 * @method string getItemName() 获取项名称
 * @method void setItemName(string $ItemName) 设置项名称
 * @method integer getCategoryId() 获取检测项分类
 * @method void setCategoryId(integer $CategoryId) 设置检测项分类
 * @method string getItemDesc() 获取项描述
 * @method void setItemDesc(string $ItemDesc) 设置项描述
 * @method string getFixMethod() 获取修复方法
 * @method void setFixMethod(string $FixMethod) 设置修复方法
 * @method string getRuleName() 获取所属规则
 * @method void setRuleName(string $RuleName) 设置所属规则
 * @method string getDetectResultDesc() 获取检测结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectResultDesc(string $DetectResultDesc) 设置检测结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取危险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置危险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetectStatus() 获取检测状态：0 未通过，1：忽略，3：通过，5：检测中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectStatus(integer $DetectStatus) 设置检测状态：0 未通过，1：忽略，3：通过，5：检测中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostId() 获取主机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostId(string $HostId) 设置主机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostName() 获取主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostIp() 获取主机IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIp(string $HostIp) 设置主机IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIp() 获取外网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIp(string $WanIp) 设置外网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstTime() 获取第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstTime(string $FirstTime) 设置第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTime() 获取最近出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTime(string $LastTime) 设置最近出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCanBeFixed() 获取是否可以修复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanBeFixed(integer $CanBeFixed) 设置是否可以修复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUuid() 获取主机安全uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置主机安全uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineItem extends AbstractModel
{
    /**
     * @var integer 项Id
     */
    public $ItemId;

    /**
     * @var string 项名称
     */
    public $ItemName;

    /**
     * @var integer 检测项分类
     */
    public $CategoryId;

    /**
     * @var string 项描述
     */
    public $ItemDesc;

    /**
     * @var string 修复方法
     */
    public $FixMethod;

    /**
     * @var string 所属规则
     */
    public $RuleName;

    /**
     * @var string 检测结果描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectResultDesc;

    /**
     * @var integer 危险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 检测状态：0 未通过，1：忽略，3：通过，5：检测中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectStatus;

    /**
     * @var string 主机ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostId;

    /**
     * @var string 主机名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string 主机IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIp;

    /**
     * @var string 外网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIp;

    /**
     * @var string 第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstTime;

    /**
     * @var string 最近出现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTime;

    /**
     * @var integer 是否可以修复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanBeFixed;

    /**
     * @var string 主机安全uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param integer $ItemId 项Id
     * @param string $ItemName 项名称
     * @param integer $CategoryId 检测项分类
     * @param string $ItemDesc 项描述
     * @param string $FixMethod 修复方法
     * @param string $RuleName 所属规则
     * @param string $DetectResultDesc 检测结果描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 危险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetectStatus 检测状态：0 未通过，1：忽略，3：通过，5：检测中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostId 主机ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostName 主机名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostIp 主机IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIp 外网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstTime 第一次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTime 最近出现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CanBeFixed 是否可以修复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uuid 主机安全uuid
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ItemDesc",$param) and $param["ItemDesc"] !== null) {
            $this->ItemDesc = $param["ItemDesc"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("DetectResultDesc",$param) and $param["DetectResultDesc"] !== null) {
            $this->DetectResultDesc = $param["DetectResultDesc"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("CanBeFixed",$param) and $param["CanBeFixed"] !== null) {
            $this->CanBeFixed = $param["CanBeFixed"];
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
