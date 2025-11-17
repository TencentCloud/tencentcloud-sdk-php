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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外部表SQL信息
 *
 * @method integer getDataSource() 获取数据源类型 1:MySql;2:自建mysql;3:pgsql
 * @method void setDataSource(integer $DataSource) 设置数据源类型 1:MySql;2:自建mysql;3:pgsql
 * @method string getRegion() 获取InstanceId所属地域。例如：ap-guangzhou
 * @method void setRegion(string $Region) 设置InstanceId所属地域。例如：ap-guangzhou
 * @method string getInstanceId() 获取实例Id。
- 当DataSource为1时，表示云数据库Mysql 实例id，如：cdb-zxcvbnm

 * @method void setInstanceId(string $InstanceId) 设置实例Id。
- 当DataSource为1时，表示云数据库Mysql 实例id，如：cdb-zxcvbnm

 * @method string getUser() 获取mysql访问用户名
 * @method void setUser(string $User) 设置mysql访问用户名
 * @method string getAliasName() 获取别名。数据加工语句中使用
 * @method void setAliasName(string $AliasName) 设置别名。数据加工语句中使用
 * @method string getPassword() 获取mysql访问密码。
 * @method void setPassword(string $Password) 设置mysql访问密码。
 */
class DataTransformSqlDataSource extends AbstractModel
{
    /**
     * @var integer 数据源类型 1:MySql;2:自建mysql;3:pgsql
     */
    public $DataSource;

    /**
     * @var string InstanceId所属地域。例如：ap-guangzhou
     */
    public $Region;

    /**
     * @var string 实例Id。
- 当DataSource为1时，表示云数据库Mysql 实例id，如：cdb-zxcvbnm

     */
    public $InstanceId;

    /**
     * @var string mysql访问用户名
     */
    public $User;

    /**
     * @var string 别名。数据加工语句中使用
     */
    public $AliasName;

    /**
     * @var string mysql访问密码。
     */
    public $Password;

    /**
     * @param integer $DataSource 数据源类型 1:MySql;2:自建mysql;3:pgsql
     * @param string $Region InstanceId所属地域。例如：ap-guangzhou
     * @param string $InstanceId 实例Id。
- 当DataSource为1时，表示云数据库Mysql 实例id，如：cdb-zxcvbnm

     * @param string $User mysql访问用户名
     * @param string $AliasName 别名。数据加工语句中使用
     * @param string $Password mysql访问密码。
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
        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
