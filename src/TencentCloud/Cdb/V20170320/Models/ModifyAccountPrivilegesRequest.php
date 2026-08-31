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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountPrivileges请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method array getAccounts() 获取<p>数据库的账号，包括用户名和域名。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
 * @method void setAccounts(array $Accounts) 设置<p>数据库的账号，包括用户名和域名。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
 * @method array getGlobalPrivileges() 获取<p>全局权限。其中，GlobalPrivileges 中权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;, &quot;PROCESS&quot;, &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;SHOW DATABASES&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;,&quot;CREATE USER&quot;,&quot;RELOAD&quot;,&quot;REPLICATION CLIENT&quot;,&quot;REPLICATION SLAVE&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method void setGlobalPrivileges(array $GlobalPrivileges) 设置<p>全局权限。其中，GlobalPrivileges 中权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;, &quot;PROCESS&quot;, &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;SHOW DATABASES&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;,&quot;CREATE USER&quot;,&quot;RELOAD&quot;,&quot;REPLICATION CLIENT&quot;,&quot;REPLICATION SLAVE&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method array getDatabasePrivileges() 获取<p>数据库的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method void setDatabasePrivileges(array $DatabasePrivileges) 设置<p>数据库的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method array getTablePrivileges() 获取<p>数据库中表的权限。Privileges 权限的可选值为：权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;, &quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method void setTablePrivileges(array $TablePrivileges) 设置<p>数据库中表的权限。Privileges 权限的可选值为：权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;, &quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method array getColumnPrivileges() 获取<p>数据库表中列的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;REFERENCES&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method void setColumnPrivileges(array $ColumnPrivileges) 设置<p>数据库表中列的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;REFERENCES&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
 * @method string getModifyAction() 获取<p>该参数不为空时，为批量修改权限。可选值为：grant - 授予权限，revoke - 回收权限。</p>
 * @method void setModifyAction(string $ModifyAction) 设置<p>该参数不为空时，为批量修改权限。可选值为：grant - 授予权限，revoke - 回收权限。</p>
 */
class ModifyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>数据库的账号，包括用户名和域名。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
     */
    public $Accounts;

    /**
     * @var array <p>全局权限。其中，GlobalPrivileges 中权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;, &quot;PROCESS&quot;, &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;SHOW DATABASES&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;,&quot;CREATE USER&quot;,&quot;RELOAD&quot;,&quot;REPLICATION CLIENT&quot;,&quot;REPLICATION SLAVE&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     */
    public $GlobalPrivileges;

    /**
     * @var array <p>数据库的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     */
    public $DatabasePrivileges;

    /**
     * @var array <p>数据库中表的权限。Privileges 权限的可选值为：权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;, &quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     */
    public $TablePrivileges;

    /**
     * @var array <p>数据库表中列的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;REFERENCES&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     */
    public $ColumnPrivileges;

    /**
     * @var string <p>该参数不为空时，为批量修改权限。可选值为：grant - 授予权限，revoke - 回收权限。</p>
     */
    public $ModifyAction;

    /**
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param array $Accounts <p>数据库的账号，包括用户名和域名。可通过 <a href="https://cloud.tencent.com/document/api/236/17499">DescribeAccounts</a> 接口获取。</p>
     * @param array $GlobalPrivileges <p>全局权限。其中，GlobalPrivileges 中权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;, &quot;PROCESS&quot;, &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;SHOW DATABASES&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;,&quot;CREATE USER&quot;,&quot;RELOAD&quot;,&quot;REPLICATION CLIENT&quot;,&quot;REPLICATION SLAVE&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     * @param array $DatabasePrivileges <p>数据库的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE TEMPORARY TABLES&quot;,&quot;LOCK TABLES&quot;,&quot;EXECUTE&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;,&quot;CREATE ROUTINE&quot;,&quot;ALTER ROUTINE&quot;,&quot;EVENT&quot;,&quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     * @param array $TablePrivileges <p>数据库中表的权限。Privileges 权限的可选值为：权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;DELETE&quot;,&quot;CREATE&quot;,    &quot;DROP&quot;,&quot;REFERENCES&quot;,&quot;INDEX&quot;,&quot;ALTER&quot;,&quot;CREATE VIEW&quot;,&quot;SHOW VIEW&quot;, &quot;TRIGGER&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     * @param array $ColumnPrivileges <p>数据库表中列的权限。Privileges 权限的可选值为：&quot;SELECT&quot;,&quot;INSERT&quot;,&quot;UPDATE&quot;,&quot;REFERENCES&quot;。<br>注意，ModifyAction为空时，不传该参数表示清除该权限。</p>
     * @param string $ModifyAction <p>该参数不为空时，为批量修改权限。可选值为：grant - 授予权限，revoke - 回收权限。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new Account();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivilege();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivilege();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }

        if (array_key_exists("ColumnPrivileges",$param) and $param["ColumnPrivileges"] !== null) {
            $this->ColumnPrivileges = [];
            foreach ($param["ColumnPrivileges"] as $key => $value){
                $obj = new ColumnPrivilege();
                $obj->deserialize($value);
                array_push($this->ColumnPrivileges, $obj);
            }
        }

        if (array_key_exists("ModifyAction",$param) and $param["ModifyAction"] !== null) {
            $this->ModifyAction = $param["ModifyAction"];
        }
    }
}
