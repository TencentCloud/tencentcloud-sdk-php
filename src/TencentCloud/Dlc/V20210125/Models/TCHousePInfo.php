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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TCHouseP 结构
 *
 * @method string getInstanceId() 获取<p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJdbcUrl() 获取<p>JdbcUrl</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJdbcUrl(string $JdbcUrl) 设置<p>JdbcUrl</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取<p>密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置<p>密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DatasourceConnectionLocation getLocation() 获取<p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(DatasourceConnectionLocation $Location) 设置<p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbName() 获取<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessInfo() 获取<p>地址信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessInfo(string $AccessInfo) 设置<p>地址信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TCHousePInfo extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string <p>JdbcUrl</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JdbcUrl;

    /**
     * @var string <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string <p>密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var DatasourceConnectionLocation <p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @var string <p>地址信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessInfo;

    /**
     * @param string $InstanceId <p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JdbcUrl <p>JdbcUrl</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password <p>密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DatasourceConnectionLocation $Location <p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbName <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessInfo <p>地址信息</p>
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

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = $param["AccessInfo"];
        }
    }
}
