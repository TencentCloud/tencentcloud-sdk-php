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
 * 既往史
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(boolean $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取对外输出值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置对外输出值
注意：此字段可能返回 null，表示取不到有效值。
 * @method NeglistBlock getNeglist() 获取否定列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeglist(NeglistBlock $Neglist) 设置否定列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method PoslistBlock getPoslist() 获取肯定列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoslist(PoslistBlock $Poslist) 设置肯定列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class MainDiseaseHistoryBlock extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Src;

    /**
     * @var boolean 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 对外输出值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var NeglistBlock 否定列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Neglist;

    /**
     * @var PoslistBlock 肯定列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Poslist;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 对外输出值
注意：此字段可能返回 null，表示取不到有效值。
     * @param NeglistBlock $Neglist 否定列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param PoslistBlock $Poslist 肯定列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Neglist",$param) and $param["Neglist"] !== null) {
            $this->Neglist = new NeglistBlock();
            $this->Neglist->deserialize($param["Neglist"]);
        }

        if (array_key_exists("Poslist",$param) and $param["Poslist"] !== null) {
            $this->Poslist = new PoslistBlock();
            $this->Poslist->deserialize($param["Poslist"]);
        }
    }
}
