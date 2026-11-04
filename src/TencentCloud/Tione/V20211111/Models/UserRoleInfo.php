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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户+角色信息
 *
 * @method string getSubUin() 获取<p>子账号</p>
 * @method void setSubUin(string $SubUin) 设置<p>子账号</p>
 * @method string getNickName() 获取<p>名称</p>
 * @method void setNickName(string $NickName) 设置<p>名称</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method array getRoles() 获取<p>角色列表</p>
 * @method void setRoles(array $Roles) 设置<p>角色列表</p>
 */
class UserRoleInfo extends AbstractModel
{
    /**
     * @var string <p>子账号</p>
     */
    public $SubUin;

    /**
     * @var string <p>名称</p>
     */
    public $NickName;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>角色列表</p>
     */
    public $Roles;

    /**
     * @param string $SubUin <p>子账号</p>
     * @param string $NickName <p>名称</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param array $Roles <p>角色列表</p>
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
        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleInfo();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }
    }
}
