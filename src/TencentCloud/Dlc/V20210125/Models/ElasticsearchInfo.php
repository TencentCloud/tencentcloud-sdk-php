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
 * Elasticsearch数据源的详细信息
 *
 * @method string getInstanceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method DatasourceConnectionLocation getLocation() 获取数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(DatasourceConnectionLocation $Location) 设置数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbName() 获取默认数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置默认数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceInfo() 获取访问Elasticsearch的ip、端口信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceInfo(array $ServiceInfo) 设置访问Elasticsearch的ip、端口信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ElasticsearchInfo extends AbstractModel
{
    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var DatasourceConnectionLocation 数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string 默认数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @var array 访问Elasticsearch的ip、端口信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceInfo;

    /**
     * @param string $InstanceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码，需要base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param DatasourceConnectionLocation $Location 数据源的VPC和子网信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbName 默认数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceInfo 访问Elasticsearch的ip、端口信息
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

        if (array_key_exists("ServiceInfo",$param) and $param["ServiceInfo"] !== null) {
            $this->ServiceInfo = [];
            foreach ($param["ServiceInfo"] as $key => $value){
                $obj = new IpPortPair();
                $obj->deserialize($value);
                array_push($this->ServiceInfo, $obj);
            }
        }
    }
}
