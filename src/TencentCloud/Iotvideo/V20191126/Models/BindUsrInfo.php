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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备绑定的终端用户
 *
 * @method string getAccessId() 获取IotVideo平台分配给终端用户的用户id
 * @method void setAccessId(string $AccessId) 设置IotVideo平台分配给终端用户的用户id
 * @method string getRole() 获取用户角色，owner：主人，guest：访客
 * @method void setRole(string $Role) 设置用户角色，owner：主人，guest：访客
 */
class BindUsrInfo extends AbstractModel
{
    /**
     * @var string IotVideo平台分配给终端用户的用户id
     */
    public $AccessId;

    /**
     * @var string 用户角色，owner：主人，guest：访客
     */
    public $Role;

    /**
     * @param string $AccessId IotVideo平台分配给终端用户的用户id
     * @param string $Role 用户角色，owner：主人，guest：访客
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
        if (array_key_exists('AccessId',$param) and $param['AccessId'] !== null) {
            $this->AccessId = $param['AccessId'];
        }

        if (array_key_exists('Role',$param) and $param['Role'] !== null) {
            $this->Role = $param['Role'];
        }
    }
}
