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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountAllGrantPrivileges返回参数结构体
 *
 * @method array getPrivilegeStatements() 获取权限语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeStatements(array $PrivilegeStatements) 设置权限语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGlobalPrivileges() 获取全局权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobalPrivileges(array $GlobalPrivileges) 设置全局权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatabasePrivileges() 获取数据库权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabasePrivileges(array $DatabasePrivileges) 设置数据库权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTablePrivileges() 获取数据库表权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTablePrivileges(array $TablePrivileges) 设置数据库表权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountAllGrantPrivilegesResponse extends AbstractModel
{
    /**
     * @var array 权限语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeStatements;

    /**
     * @var array 全局权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GlobalPrivileges;

    /**
     * @var array 数据库权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabasePrivileges;

    /**
     * @var array 数据库表权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TablePrivileges;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PrivilegeStatements 权限语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GlobalPrivileges 全局权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DatabasePrivileges 数据库权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TablePrivileges 数据库表权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PrivilegeStatements",$param) and $param["PrivilegeStatements"] !== null) {
            $this->PrivilegeStatements = $param["PrivilegeStatements"];
        }

        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivileges();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivileges();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
