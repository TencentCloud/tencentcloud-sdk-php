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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 行列权限内容
 *
 * @method string getType() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRulerInfo() 获取`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulerInfo(string $RulerInfo) 设置`
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoleId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleId(integer $RoleId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleType() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleType(string $RoleType) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(integer $TableId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRowColumnConfigList() 获取行列权限配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowColumnConfigList(array $RowColumnConfigList) 设置行列权限配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RankInfo extends AbstractModel
{
    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var string `
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulerInfo;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleType;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var array 行列权限配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowColumnConfigList;

    /**
     * @param string $Type 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RulerInfo `
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoleId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleType 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RowColumnConfigList 行列权限配置
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RulerInfo",$param) and $param["RulerInfo"] !== null) {
            $this->RulerInfo = $param["RulerInfo"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("RowColumnConfigList",$param) and $param["RowColumnConfigList"] !== null) {
            $this->RowColumnConfigList = [];
            foreach ($param["RowColumnConfigList"] as $key => $value){
                $obj = new RowColumnConfig();
                $obj->deserialize($value);
                array_push($this->RowColumnConfigList, $obj);
            }
        }
    }
}
