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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 变量信息列表
 *
 * @method string getSerialId() 获取变量id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置变量id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取变量名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置变量名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取变量值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置变量值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取变量值是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置变量值是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取变量描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置变量描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取变量创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置变量创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取变量创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置变量创建人
注意：此字段可能返回 null，表示取不到有效值。
 */
class VariableItem extends AbstractModel
{
    /**
     * @var string 变量id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var string 变量名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 变量值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 变量值是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 变量描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 变量创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 变量创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @param string $SerialId 变量id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 变量名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 变量值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 变量值是否隐藏
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 变量描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 变量创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 变量创建人
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
        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }
    }
}
