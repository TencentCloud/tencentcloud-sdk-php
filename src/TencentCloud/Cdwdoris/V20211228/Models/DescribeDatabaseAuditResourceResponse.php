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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseAuditResource返回参数结构体
 *
 * @method array getDatabases() 获取数据库列表
 * @method void setDatabases(array $Databases) 设置数据库列表
 * @method array getUsers() 获取用户列表
 * @method void setUsers(array $Users) 设置用户列表
 * @method array getSqlTypes() 获取sql类型列表
 * @method void setSqlTypes(array $SqlTypes) 设置sql类型列表
 * @method array getCatalogs() 获取catalog字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogs(array $Catalogs) 设置catalog字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDatabaseAuditResourceResponse extends AbstractModel
{
    /**
     * @var array 数据库列表
     */
    public $Databases;

    /**
     * @var array 用户列表
     */
    public $Users;

    /**
     * @var array sql类型列表
     */
    public $SqlTypes;

    /**
     * @var array catalog字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalogs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Databases 数据库列表
     * @param array $Users 用户列表
     * @param array $SqlTypes sql类型列表
     * @param array $Catalogs catalog字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = $param["Databases"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("SqlTypes",$param) and $param["SqlTypes"] !== null) {
            $this->SqlTypes = $param["SqlTypes"];
        }

        if (array_key_exists("Catalogs",$param) and $param["Catalogs"] !== null) {
            $this->Catalogs = $param["Catalogs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
