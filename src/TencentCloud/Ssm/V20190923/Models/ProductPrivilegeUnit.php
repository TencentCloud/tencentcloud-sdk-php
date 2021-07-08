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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭据关联产品时被赋予的权限
 *
 * @method string getPrivilegeName() 获取权限名称，当前可选：
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

当权限为DatabasePrivileges时，必须通过参数Database指定数据库名；

当权限为TablePrivileges时，必须通过参数Database和TableName指定数据库名以及数据库中的表名；

当权限为ColumnPrivileges时，必须通过参数Database、TableName和CoulmnName指定数据库、数据库中的表名以及表中的列名。
 * @method void setPrivilegeName(string $PrivilegeName) 设置权限名称，当前可选：
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

当权限为DatabasePrivileges时，必须通过参数Database指定数据库名；

当权限为TablePrivileges时，必须通过参数Database和TableName指定数据库名以及数据库中的表名；

当权限为ColumnPrivileges时，必须通过参数Database、TableName和CoulmnName指定数据库、数据库中的表名以及表中的列名。
 * @method array getPrivileges() 获取权限列表。
对于Mysql产品来说，可选权限值为：

1. GlobalPrivileges 中权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

2. DatabasePrivileges 权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

3. TablePrivileges 权限的可选值为：权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER"。
注意，不传该参数表示清除该权限。

4. ColumnPrivileges 权限的可选值为："SELECT","INSERT","UPDATE","REFERENCES"。
注意，不传该参数表示清除该权限。
 * @method void setPrivileges(array $Privileges) 设置权限列表。
对于Mysql产品来说，可选权限值为：

1. GlobalPrivileges 中权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

2. DatabasePrivileges 权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

3. TablePrivileges 权限的可选值为：权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER"。
注意，不传该参数表示清除该权限。

4. ColumnPrivileges 权限的可选值为："SELECT","INSERT","UPDATE","REFERENCES"。
注意，不传该参数表示清除该权限。
 * @method string getDatabase() 获取仅当PrivilegeName为DatabasePrivileges时这个值才有效。
 * @method void setDatabase(string $Database) 设置仅当PrivilegeName为DatabasePrivileges时这个值才有效。
 * @method string getTableName() 获取仅当PrivilegeName为TablePrivileges时这个值才有效，并且此时需要填充Database显式指明所在的数据库实例。
 * @method void setTableName(string $TableName) 设置仅当PrivilegeName为TablePrivileges时这个值才有效，并且此时需要填充Database显式指明所在的数据库实例。
 * @method string getColumnName() 获取仅当PrivilegeName为ColumnPrivileges时这个值才生效，并且此时必须填充：
Database - 显式指明所在的数据库实例。
TableName - 显式指明所在表
 * @method void setColumnName(string $ColumnName) 设置仅当PrivilegeName为ColumnPrivileges时这个值才生效，并且此时必须填充：
Database - 显式指明所在的数据库实例。
TableName - 显式指明所在表
 */
class ProductPrivilegeUnit extends AbstractModel
{
    /**
     * @var string 权限名称，当前可选：
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

当权限为DatabasePrivileges时，必须通过参数Database指定数据库名；

当权限为TablePrivileges时，必须通过参数Database和TableName指定数据库名以及数据库中的表名；

当权限为ColumnPrivileges时，必须通过参数Database、TableName和CoulmnName指定数据库、数据库中的表名以及表中的列名。
     */
    public $PrivilegeName;

    /**
     * @var array 权限列表。
对于Mysql产品来说，可选权限值为：

1. GlobalPrivileges 中权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

2. DatabasePrivileges 权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

3. TablePrivileges 权限的可选值为：权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER"。
注意，不传该参数表示清除该权限。

4. ColumnPrivileges 权限的可选值为："SELECT","INSERT","UPDATE","REFERENCES"。
注意，不传该参数表示清除该权限。
     */
    public $Privileges;

    /**
     * @var string 仅当PrivilegeName为DatabasePrivileges时这个值才有效。
     */
    public $Database;

    /**
     * @var string 仅当PrivilegeName为TablePrivileges时这个值才有效，并且此时需要填充Database显式指明所在的数据库实例。
     */
    public $TableName;

    /**
     * @var string 仅当PrivilegeName为ColumnPrivileges时这个值才生效，并且此时必须填充：
Database - 显式指明所在的数据库实例。
TableName - 显式指明所在表
     */
    public $ColumnName;

    /**
     * @param string $PrivilegeName 权限名称，当前可选：
GlobalPrivileges
DatabasePrivileges
TablePrivileges
ColumnPrivileges

当权限为DatabasePrivileges时，必须通过参数Database指定数据库名；

当权限为TablePrivileges时，必须通过参数Database和TableName指定数据库名以及数据库中的表名；

当权限为ColumnPrivileges时，必须通过参数Database、TableName和CoulmnName指定数据库、数据库中的表名以及表中的列名。
     * @param array $Privileges 权限列表。
对于Mysql产品来说，可选权限值为：

1. GlobalPrivileges 中权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "PROCESS", "DROP","REFERENCES","INDEX","ALTER","SHOW DATABASES","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

2. DatabasePrivileges 权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE TEMPORARY TABLES","LOCK TABLES","EXECUTE","CREATE VIEW","SHOW VIEW","CREATE ROUTINE","ALTER ROUTINE","EVENT","TRIGGER"。
注意，不传该参数表示清除该权限。

3. TablePrivileges 权限的可选值为：权限的可选值为："SELECT","INSERT","UPDATE","DELETE","CREATE", "DROP","REFERENCES","INDEX","ALTER","CREATE VIEW","SHOW VIEW", "TRIGGER"。
注意，不传该参数表示清除该权限。

4. ColumnPrivileges 权限的可选值为："SELECT","INSERT","UPDATE","REFERENCES"。
注意，不传该参数表示清除该权限。
     * @param string $Database 仅当PrivilegeName为DatabasePrivileges时这个值才有效。
     * @param string $TableName 仅当PrivilegeName为TablePrivileges时这个值才有效，并且此时需要填充Database显式指明所在的数据库实例。
     * @param string $ColumnName 仅当PrivilegeName为ColumnPrivileges时这个值才生效，并且此时必须填充：
Database - 显式指明所在的数据库实例。
TableName - 显式指明所在表
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
        if (array_key_exists("PrivilegeName",$param) and $param["PrivilegeName"] !== null) {
            $this->PrivilegeName = $param["PrivilegeName"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }
    }
}
