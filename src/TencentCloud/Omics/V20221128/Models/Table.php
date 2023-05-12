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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格。
 *
 * @method string getTableId() 获取表格ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表格ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取关联项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置关联项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取表格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置表格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取表格列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置表格列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 */
class Table extends AbstractModel
{
    /**
     * @var string 表格ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 关联项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 表格描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 表格列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @param string $TableId 表格ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 关联项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 表格描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 表格列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 创建人
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new TableColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
