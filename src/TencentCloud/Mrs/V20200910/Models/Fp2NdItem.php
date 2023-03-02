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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 病案首页第二页
 *
 * @method BaseItem getCode() 获取手术编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(BaseItem $Code) 设置手术编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getName() 获取手术名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(BaseItem $Name) 设置手术名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getStartTime() 获取手术开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(BaseItem $StartTime) 设置手术开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getEndTime() 获取手术结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(BaseItem $EndTime) 设置手术结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getLevel() 获取手术等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(BaseItem $Level) 设置手术等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getType() 获取手术类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(BaseItem $Type) 设置手术类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getIncisionHealingGrade() 获取醉愈合方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncisionHealingGrade(BaseItem $IncisionHealingGrade) 设置醉愈合方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem getAnesthesiaMethod() 获取麻醉方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnesthesiaMethod(BaseItem $AnesthesiaMethod) 设置麻醉方法
注意：此字段可能返回 null，表示取不到有效值。
 */
class Fp2NdItem extends AbstractModel
{
    /**
     * @var BaseItem 手术编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var BaseItem 手术名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var BaseItem 手术开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var BaseItem 手术结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var BaseItem 手术等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var BaseItem 手术类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var BaseItem 醉愈合方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncisionHealingGrade;

    /**
     * @var BaseItem 麻醉方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnesthesiaMethod;

    /**
     * @param BaseItem $Code 手术编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Name 手术名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $StartTime 手术开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $EndTime 手术结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Level 手术等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $Type 手术类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $IncisionHealingGrade 醉愈合方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem $AnesthesiaMethod 麻醉方法
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new BaseItem();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new BaseItem();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = new BaseItem();
            $this->StartTime->deserialize($param["StartTime"]);
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = new BaseItem();
            $this->EndTime->deserialize($param["EndTime"]);
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = new BaseItem();
            $this->Level->deserialize($param["Level"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = new BaseItem();
            $this->Type->deserialize($param["Type"]);
        }

        if (array_key_exists("IncisionHealingGrade",$param) and $param["IncisionHealingGrade"] !== null) {
            $this->IncisionHealingGrade = new BaseItem();
            $this->IncisionHealingGrade->deserialize($param["IncisionHealingGrade"]);
        }

        if (array_key_exists("AnesthesiaMethod",$param) and $param["AnesthesiaMethod"] !== null) {
            $this->AnesthesiaMethod = new BaseItem();
            $this->AnesthesiaMethod->deserialize($param["AnesthesiaMethod"]);
        }
    }
}
