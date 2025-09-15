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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色分页
 *
 * @method array getRoleList() 获取角色列表
 * @method void setRoleList(array $RoleList) 设置角色列表
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 */
class RoleListPage extends AbstractModel
{
    /**
     * @var array 角色列表
     */
    public $RoleList;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @param array $RoleList 角色列表
     * @param integer $Total 总数
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
        if (array_key_exists("RoleList",$param) and $param["RoleList"] !== null) {
            $this->RoleList = [];
            foreach ($param["RoleList"] as $key => $value){
                $obj = new WedaRole();
                $obj->deserialize($value);
                array_push($this->RoleList, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
