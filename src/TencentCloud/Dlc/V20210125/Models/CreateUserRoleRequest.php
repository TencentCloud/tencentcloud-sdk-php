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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserRole请求参数结构体
 *
 * @method string getArn() 获取角色Arn信息
 * @method void setArn(string $Arn) 设置角色Arn信息
 * @method string getDesc() 获取角色描述信息
 * @method void setDesc(string $Desc) 设置角色描述信息
 * @method string getName() 获取角色名称
 * @method void setName(string $Name) 设置角色名称
 * @method array getCosPermissionList() 获取cos授权路径列表
 * @method void setCosPermissionList(array $CosPermissionList) 设置cos授权路径列表
 * @method string getPermissionJson() 获取cam策略json
 * @method void setPermissionJson(string $PermissionJson) 设置cam策略json
 * @method integer getIsDefault() 获取是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
 * @method void setIsDefault(integer $IsDefault) 设置是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
 */
class CreateUserRoleRequest extends AbstractModel
{
    /**
     * @var string 角色Arn信息
     */
    public $Arn;

    /**
     * @var string 角色描述信息
     */
    public $Desc;

    /**
     * @var string 角色名称
     */
    public $Name;

    /**
     * @var array cos授权路径列表
     */
    public $CosPermissionList;

    /**
     * @var string cam策略json
     */
    public $PermissionJson;

    /**
     * @var integer 是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
     */
    public $IsDefault;

    /**
     * @param string $Arn 角色Arn信息
     * @param string $Desc 角色描述信息
     * @param string $Name 角色名称
     * @param array $CosPermissionList cos授权路径列表
     * @param string $PermissionJson cam策略json
     * @param integer $IsDefault 是否设置为常驻：1非常驻（默认）、2常驻（仅能设置一个常驻）
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
        if (array_key_exists("Arn",$param) and $param["Arn"] !== null) {
            $this->Arn = $param["Arn"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CosPermissionList",$param) and $param["CosPermissionList"] !== null) {
            $this->CosPermissionList = [];
            foreach ($param["CosPermissionList"] as $key => $value){
                $obj = new CosPermission();
                $obj->deserialize($value);
                array_push($this->CosPermissionList, $obj);
            }
        }

        if (array_key_exists("PermissionJson",$param) and $param["PermissionJson"] !== null) {
            $this->PermissionJson = $param["PermissionJson"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
