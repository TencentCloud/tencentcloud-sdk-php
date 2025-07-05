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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定账号对数据库对象拥有的权限列表
 *
 * @method DatabaseObject getObject() 获取数据库对象，当ObjectType为database时，DatabaseName/SchemaName/TableName可为空；当ObjectType为schema时，SchemaName/TableName可为空；当ObjectType为column时，TableName不可为空，其余情况均可为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObject(DatabaseObject $Object) 设置数据库对象，当ObjectType为database时，DatabaseName/SchemaName/TableName可为空；当ObjectType为schema时，SchemaName/TableName可为空；当ObjectType为column时，TableName不可为空，其余情况均可为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivilegeSet() 获取指定账号对数据库对象拥有的权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeSet(array $PrivilegeSet) 设置指定账号对数据库对象拥有的权限列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatabasePrivilege extends AbstractModel
{
    /**
     * @var DatabaseObject 数据库对象，当ObjectType为database时，DatabaseName/SchemaName/TableName可为空；当ObjectType为schema时，SchemaName/TableName可为空；当ObjectType为column时，TableName不可为空，其余情况均可为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Object;

    /**
     * @var array 指定账号对数据库对象拥有的权限列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeSet;

    /**
     * @param DatabaseObject $Object 数据库对象，当ObjectType为database时，DatabaseName/SchemaName/TableName可为空；当ObjectType为schema时，SchemaName/TableName可为空；当ObjectType为column时，TableName不可为空，其余情况均可为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivilegeSet 指定账号对数据库对象拥有的权限列表
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
        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = new DatabaseObject();
            $this->Object->deserialize($param["Object"]);
        }

        if (array_key_exists("PrivilegeSet",$param) and $param["PrivilegeSet"] !== null) {
            $this->PrivilegeSet = $param["PrivilegeSet"];
        }
    }
}
