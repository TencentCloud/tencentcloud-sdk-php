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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDatabasePrivilege请求参数结构体
 *
 * @method string getInstanceId() 获取数据库实例ID，形如mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，形如mssql-njj2mtpl
 * @method array getDataBaseSet() 获取数据库权限变更信息
 * @method void setDataBaseSet(array $DataBaseSet) 设置数据库权限变更信息
 */
class ModifyDatabasePrivilegeRequest extends AbstractModel
{
    /**
     * @var string 数据库实例ID，形如mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var array 数据库权限变更信息
     */
    public $DataBaseSet;

    /**
     * @param string $InstanceId 数据库实例ID，形如mssql-njj2mtpl
     * @param array $DataBaseSet 数据库权限变更信息
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

        if (array_key_exists("DataBaseSet",$param) and $param["DataBaseSet"] !== null) {
            $this->DataBaseSet = [];
            foreach ($param["DataBaseSet"] as $key => $value){
                $obj = new DataBasePrivilegeModifyInfo();
                $obj->deserialize($value);
                array_push($this->DataBaseSet, $obj);
            }
        }
    }
}
