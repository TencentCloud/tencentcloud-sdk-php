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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户主机权限
 *
 * @method string getDbUserName() 获取<p>授权用户</p>
 * @method void setDbUserName(string $DbUserName) 设置<p>授权用户</p>
 * @method string getDbHost() 获取<p>客户端ip</p>
 * @method void setDbHost(string $DbHost) 设置<p>客户端ip</p>
 * @method string getDbPrivilege() 获取<p>用户权限</p>
 * @method void setDbPrivilege(string $DbPrivilege) 设置<p>用户权限</p>
 * @method array getPrivilegeList() 获取<p>权限明细列表</p>
 * @method void setPrivilegeList(array $PrivilegeList) 设置<p>权限明细列表</p>
 */
class UserHostPrivilege extends AbstractModel
{
    /**
     * @var string <p>授权用户</p>
     */
    public $DbUserName;

    /**
     * @var string <p>客户端ip</p>
     */
    public $DbHost;

    /**
     * @var string <p>用户权限</p>
     */
    public $DbPrivilege;

    /**
     * @var array <p>权限明细列表</p>
     */
    public $PrivilegeList;

    /**
     * @param string $DbUserName <p>授权用户</p>
     * @param string $DbHost <p>客户端ip</p>
     * @param string $DbPrivilege <p>用户权限</p>
     * @param array $PrivilegeList <p>权限明细列表</p>
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
        if (array_key_exists("DbUserName",$param) and $param["DbUserName"] !== null) {
            $this->DbUserName = $param["DbUserName"];
        }

        if (array_key_exists("DbHost",$param) and $param["DbHost"] !== null) {
            $this->DbHost = $param["DbHost"];
        }

        if (array_key_exists("DbPrivilege",$param) and $param["DbPrivilege"] !== null) {
            $this->DbPrivilege = $param["DbPrivilege"];
        }

        if (array_key_exists("PrivilegeList",$param) and $param["PrivilegeList"] !== null) {
            $this->PrivilegeList = $param["PrivilegeList"];
        }
    }
}
