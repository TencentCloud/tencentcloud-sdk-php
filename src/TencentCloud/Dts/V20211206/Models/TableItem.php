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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表对象集合，当 TableMode 为 partial 时，此项需要填写
 *
 * @method string getTableName() 获取迁移的表名，大小写敏感
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置迁移的表名，大小写敏感
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewTableName() 获取迁移后的表名，当TableEditMode为rename时此项必填，注意此配置与TmpTables互斥，只能使用其中一种
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewTableName(string $NewTableName) 设置迁移后的表名，当TableEditMode为rename时此项必填，注意此配置与TmpTables互斥，只能使用其中一种
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTmpTables() 获取迁移临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在迁移过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpTables(array $TmpTables) 设置迁移临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在迁移过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableEditMode() 获取编辑表类型，rename(表映射)，pt(同步附加表)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableEditMode(string $TableEditMode) 设置编辑表类型，rename(表映射)，pt(同步附加表)
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableItem extends AbstractModel
{
    /**
     * @var string 迁移的表名，大小写敏感
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 迁移后的表名，当TableEditMode为rename时此项必填，注意此配置与TmpTables互斥，只能使用其中一种
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewTableName;

    /**
     * @var array 迁移临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在迁移过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpTables;

    /**
     * @var string 编辑表类型，rename(表映射)，pt(同步附加表)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableEditMode;

    /**
     * @param string $TableName 迁移的表名，大小写敏感
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewTableName 迁移后的表名，当TableEditMode为rename时此项必填，注意此配置与TmpTables互斥，只能使用其中一种
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TmpTables 迁移临时表，注意此配置与NewTableName互斥，只能使用其中一种。当配置的同步对象为表级别且TableEditMode为pt时此项有意义，针对pt-osc等工具在迁移过程中产生的临时表进行同步，需要提前将可能的临时表配置在这里，否则不会同步任何临时表。示例，如要对t1进行pt-osc操作，此项配置应该为["\_t1\_new","\_t1\_old"]；如要对t1进行gh-ost操作，此项配置应该为["\_t1\_ghc","\_t1\_gho","\_t1\_del"]，pt-osc与gh-ost产生的临时表可同时配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableEditMode 编辑表类型，rename(表映射)，pt(同步附加表)
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }

        if (array_key_exists("TmpTables",$param) and $param["TmpTables"] !== null) {
            $this->TmpTables = $param["TmpTables"];
        }

        if (array_key_exists("TableEditMode",$param) and $param["TableEditMode"] !== null) {
            $this->TableEditMode = $param["TableEditMode"];
        }
    }
}
