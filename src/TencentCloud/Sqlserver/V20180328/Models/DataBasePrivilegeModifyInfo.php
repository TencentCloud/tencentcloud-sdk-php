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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库账号权限变更信息
 *
 * @method string getDataBaseName() 获取数据库名称
 * @method void setDataBaseName(string $DataBaseName) 设置数据库名称
 * @method array getAccountPrivileges() 获取数据库权限变更信息
 * @method void setAccountPrivileges(array $AccountPrivileges) 设置数据库权限变更信息
 */
class DataBasePrivilegeModifyInfo extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DataBaseName;

    /**
     * @var array 数据库权限变更信息
     */
    public $AccountPrivileges;

    /**
     * @param string $DataBaseName 数据库名称
     * @param array $AccountPrivileges 数据库权限变更信息
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
        if (array_key_exists("DataBaseName",$param) and $param["DataBaseName"] !== null) {
            $this->DataBaseName = $param["DataBaseName"];
        }

        if (array_key_exists("AccountPrivileges",$param) and $param["AccountPrivileges"] !== null) {
            $this->AccountPrivileges = [];
            foreach ($param["AccountPrivileges"] as $key => $value){
                $obj = new AccountPrivilege();
                $obj->deserialize($value);
                array_push($this->AccountPrivileges, $obj);
            }
        }
    }
}
