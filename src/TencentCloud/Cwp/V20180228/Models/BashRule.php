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
 * 高危命令规则
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method string getUuid() 获取客户端ID
 * @method void setUuid(string $Uuid) 设置客户端ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getLevel() 获取危险等级(0 ：无 1: 高危 2:中危 3: 低危)
 * @method void setLevel(integer $Level) 设置危险等级(0 ：无 1: 高危 2:中危 3: 低危)
 * @method string getRule() 获取正则表达式
 * @method void setRule(string $Rule) 设置正则表达式
 * @method string getDecription() 获取规则描述
 * @method void setDecription(string $Decription) 设置规则描述
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method integer getIsGlobal() 获取是否全局规则
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则
 * @method integer getStatus() 获取状态 (0: 有效 1: 无效)
 * @method void setStatus(integer $Status) 设置状态 (0: 有效 1: 无效)
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getHostip() 获取主机IP
 * @method void setHostip(string $Hostip) 设置主机IP
 * @method array getUuids() 获取生效服务器的uuid数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuids(array $Uuids) 设置生效服务器的uuid数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWhite() 获取0=黑名单 1=白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhite(integer $White) 设置0=黑名单 1=白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDealOldEvents() 获取是否处理之前的事件 0: 不处理 1:处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealOldEvents(integer $DealOldEvents) 设置是否处理之前的事件 0: 不处理 1:处理
注意：此字段可能返回 null，表示取不到有效值。
 */
class BashRule extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var string 客户端ID
     */
    public $Uuid;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 危险等级(0 ：无 1: 高危 2:中危 3: 低危)
     */
    public $Level;

    /**
     * @var string 正则表达式
     */
    public $Rule;

    /**
     * @var string 规则描述
     */
    public $Decription;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var integer 是否全局规则
     */
    public $IsGlobal;

    /**
     * @var integer 状态 (0: 有效 1: 无效)
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 主机IP
     */
    public $Hostip;

    /**
     * @var array 生效服务器的uuid数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuids;

    /**
     * @var integer 0=黑名单 1=白名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $White;

    /**
     * @var integer 是否处理之前的事件 0: 不处理 1:处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealOldEvents;

    /**
     * @param integer $Id 规则ID
     * @param string $Uuid 客户端ID
     * @param string $Name 规则名称
     * @param integer $Level 危险等级(0 ：无 1: 高危 2:中危 3: 低危)
     * @param string $Rule 正则表达式
     * @param string $Decription 规则描述
     * @param string $Operator 操作人
     * @param integer $IsGlobal 是否全局规则
     * @param integer $Status 状态 (0: 有效 1: 无效)
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $Hostip 主机IP
     * @param array $Uuids 生效服务器的uuid数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $White 0=黑名单 1=白名单
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DealOldEvents 是否处理之前的事件 0: 不处理 1:处理
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Decription",$param) and $param["Decription"] !== null) {
            $this->Decription = $param["Decription"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("White",$param) and $param["White"] !== null) {
            $this->White = $param["White"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }
    }
}
