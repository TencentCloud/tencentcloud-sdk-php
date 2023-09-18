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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mysql类型数据源信息
 *
 * @method string getJdbcUrl() 获取连接mysql的jdbc url
 * @method void setJdbcUrl(string $JdbcUrl) 设置连接mysql的jdbc url
 * @method string getUser() 获取用户名
 * @method void setUser(string $User) 设置用户名
 * @method string getPassword() 获取mysql密码
 * @method void setPassword(string $Password) 设置mysql密码
 * @method DatasourceConnectionLocation getLocation() 获取mysql数据源的网络信息
 * @method void setLocation(DatasourceConnectionLocation $Location) 设置mysql数据源的网络信息
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getInstanceId() 获取数据库实例ID，和数据库侧保持一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，和数据库侧保持一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取数据库实例名称，和数据库侧保持一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置数据库实例名称，和数据库侧保持一致
注意：此字段可能返回 null，表示取不到有效值。
 */
class MysqlInfo extends AbstractModel
{
    /**
     * @var string 连接mysql的jdbc url
     */
    public $JdbcUrl;

    /**
     * @var string 用户名
     */
    public $User;

    /**
     * @var string mysql密码
     */
    public $Password;

    /**
     * @var DatasourceConnectionLocation mysql数据源的网络信息
     */
    public $Location;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 数据库实例ID，和数据库侧保持一致
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 数据库实例名称，和数据库侧保持一致
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @param string $JdbcUrl 连接mysql的jdbc url
     * @param string $User 用户名
     * @param string $Password mysql密码
     * @param DatasourceConnectionLocation $Location mysql数据源的网络信息
     * @param string $DbName 数据库名称
     * @param string $InstanceId 数据库实例ID，和数据库侧保持一致
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 数据库实例名称，和数据库侧保持一致
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
        if (array_key_exists("JdbcUrl",$param) and $param["JdbcUrl"] !== null) {
            $this->JdbcUrl = $param["JdbcUrl"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new DatasourceConnectionLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
