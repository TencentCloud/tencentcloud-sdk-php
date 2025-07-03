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
 * 用户主机权限
 *
 * @method string getDbUserName() 获取授权用户
 * @method void setDbUserName(string $DbUserName) 设置授权用户
 * @method string getDbHost() 获取客户端ip
 * @method void setDbHost(string $DbHost) 设置客户端ip
 * @method string getDbPrivilege() 获取用户权限
 * @method void setDbPrivilege(string $DbPrivilege) 设置用户权限
 */
class UserHostPrivilege extends AbstractModel
{
    /**
     * @var string 授权用户
     */
    public $DbUserName;

    /**
     * @var string 客户端ip
     */
    public $DbHost;

    /**
     * @var string 用户权限
     */
    public $DbPrivilege;

    /**
     * @param string $DbUserName 授权用户
     * @param string $DbHost 客户端ip
     * @param string $DbPrivilege 用户权限
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
    }
}
