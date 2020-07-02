<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * 数据库账号权限信息。创建数据库时设置
 *
 * @method string getUserName() 获取数据库用户名
 * @method void setUserName(string $UserName) 设置数据库用户名
 * @method string getPrivilege() 获取数据库权限。ReadWrite表示可读写，ReadOnly表示只读
 * @method void setPrivilege(string $Privilege) 设置数据库权限。ReadWrite表示可读写，ReadOnly表示只读
 */
class AccountPrivilege extends AbstractModel
{
    /**
     * @var string 数据库用户名
     */
    public $UserName;

    /**
     * @var string 数据库权限。ReadWrite表示可读写，ReadOnly表示只读
     */
    public $Privilege;

    /**
     * @param string $UserName 数据库用户名
     * @param string $Privilege 数据库权限。ReadWrite表示可读写，ReadOnly表示只读
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
        if (array_key_exists('UserName',$param) and $param['UserName'] !== null) {
            $this->UserName = $param['UserName'];
        }

        if (array_key_exists('Privilege',$param) and $param['Privilege'] !== null) {
            $this->Privilege = $param['Privilege'];
        }
    }
}
