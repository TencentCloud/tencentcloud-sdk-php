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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 建表columns入参
 *
 * @method string getName() 获取字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置字段名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPartition() 获取是否分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPartition(boolean $IsPartition) 设置是否分区
注意：此字段可能返回 null，表示取不到有效值。
 * @method BizParams getBizParams() 获取业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizParams(BizParams $BizParams) 设置业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrecision() 获取字段精度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrecision(integer $Precision) 设置字段精度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScale() 获取字段位数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScale(integer $Scale) 设置字段位数
注意：此字段可能返回 null，表示取不到有效值。
 * @method Params getParams() 获取字段额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(Params $Params) 设置字段额外属性
注意：此字段可能返回 null，表示取不到有效值。
 */
class Columns extends AbstractModel
{
    /**
     * @var string 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var boolean 是否分区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPartition;

    /**
     * @var BizParams 业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizParams;

    /**
     * @var integer 字段精度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Precision;

    /**
     * @var integer 字段位数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scale;

    /**
     * @var Params 字段额外属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @param string $Name 字段名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPartition 是否分区
注意：此字段可能返回 null，表示取不到有效值。
     * @param BizParams $BizParams 业务额外属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Precision 字段精度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scale 字段位数
注意：此字段可能返回 null，表示取不到有效值。
     * @param Params $Params 字段额外属性
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = new BizParams();
            $this->BizParams->deserialize($param["BizParams"]);
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = new Params();
            $this->Params->deserialize($param["Params"]);
        }
    }
}
