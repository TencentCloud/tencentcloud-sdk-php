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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountPrivileges请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。	
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。	
 * @method string getUserName() 获取修改此账号对某数据库对象的权限。
 * @method void setUserName(string $UserName) 设置修改此账号对某数据库对象的权限。
 * @method array getModifyPrivilegeSet() 获取修改的权限信息，支持批量修改，一次最高修改50条。
 * @method void setModifyPrivilegeSet(array $ModifyPrivilegeSet) 设置修改的权限信息，支持批量修改，一次最高修改50条。
 */
class ModifyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 实例ID。	
     */
    public $DBInstanceId;

    /**
     * @var string 修改此账号对某数据库对象的权限。
     */
    public $UserName;

    /**
     * @var array 修改的权限信息，支持批量修改，一次最高修改50条。
     */
    public $ModifyPrivilegeSet;

    /**
     * @param string $DBInstanceId 实例ID。	
     * @param string $UserName 修改此账号对某数据库对象的权限。
     * @param array $ModifyPrivilegeSet 修改的权限信息，支持批量修改，一次最高修改50条。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ModifyPrivilegeSet",$param) and $param["ModifyPrivilegeSet"] !== null) {
            $this->ModifyPrivilegeSet = [];
            foreach ($param["ModifyPrivilegeSet"] as $key => $value){
                $obj = new ModifyPrivilege();
                $obj->deserialize($value);
                array_push($this->ModifyPrivilegeSet, $obj);
            }
        }
    }
}
