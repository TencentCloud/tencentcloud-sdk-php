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
 * 数据源详细信息
 *
 * @method string getInstanceId() 获取数据源实例的唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置数据源实例的唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取数据源的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置数据源的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJdbcUrl() 获取数据源的JDBC访问链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJdbcUrl(string $JdbcUrl) 设置数据源的JDBC访问链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用于访问数据源的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用于访问数据源的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取数据源访问密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置数据源访问密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method DatasourceConnectionLocation getLocation() 获取数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(DatasourceConnectionLocation $Location) 设置数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbName() 获取默认数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置默认数据库名
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSourceInfo extends AbstractModel
{
    /**
     * @var string 数据源实例的唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 数据源的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 数据源的JDBC访问链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JdbcUrl;

    /**
     * @var string 用于访问数据源的用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 数据源访问密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var DatasourceConnectionLocation 数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string 默认数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @param string $InstanceId 数据源实例的唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 数据源的名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JdbcUrl 数据源的JDBC访问链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用于访问数据源的用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 数据源访问密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param DatasourceConnectionLocation $Location 数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbName 默认数据库名
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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
    }
}
