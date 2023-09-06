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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库权限信息
 *
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method array getDatabasePrivileges() 获取//库表权限，SELECT、INSERT_ALL、ALTER、TRUNCATE、DROP_TABLE、CREATE_TABLE、DROP_DATABASE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabasePrivileges(array $DatabasePrivileges) 设置//库表权限，SELECT、INSERT_ALL、ALTER、TRUNCATE、DROP_TABLE、CREATE_TABLE、DROP_DATABASE
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTablePrivilegeList() 获取// 库下面的表权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePrivilegeList(array $TablePrivilegeList) 设置// 库下面的表权限
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatabasePrivilegeInfo extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var array //库表权限，SELECT、INSERT_ALL、ALTER、TRUNCATE、DROP_TABLE、CREATE_TABLE、DROP_DATABASE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabasePrivileges;

    /**
     * @var array // 库下面的表权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePrivilegeList;

    /**
     * @param string $DatabaseName 数据库名称
     * @param array $DatabasePrivileges //库表权限，SELECT、INSERT_ALL、ALTER、TRUNCATE、DROP_TABLE、CREATE_TABLE、DROP_DATABASE
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TablePrivilegeList // 库下面的表权限
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = $param["DatabasePrivileges"];
        }

        if (array_key_exists("TablePrivilegeList",$param) and $param["TablePrivilegeList"] !== null) {
            $this->TablePrivilegeList = [];
            foreach ($param["TablePrivilegeList"] as $key => $value){
                $obj = new TablePrivilegeInfo();
                $obj->deserialize($value);
                array_push($this->TablePrivilegeList, $obj);
            }
        }
    }
}
