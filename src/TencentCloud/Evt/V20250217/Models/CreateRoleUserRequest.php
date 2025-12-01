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
namespace TencentCloud\Evt\V20250217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoleUser请求参数结构体
 *
 * @method integer getRoleSystemId() 获取角色体系ID
 * @method void setRoleSystemId(integer $RoleSystemId) 设置角色体系ID
 * @method string getUserId() 获取人员ID
 * @method void setUserId(string $UserId) 设置人员ID
 * @method string getUsername() 获取人员名称
 * @method void setUsername(string $Username) 设置人员名称
 * @method integer getEnabled() 获取是否启用
 * @method void setEnabled(integer $Enabled) 设置是否启用
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method array getAttributes() 获取属性列表
 * @method void setAttributes(array $Attributes) 设置属性列表
 */
class CreateRoleUserRequest extends AbstractModel
{
    /**
     * @var integer 角色体系ID
     */
    public $RoleSystemId;

    /**
     * @var string 人员ID
     */
    public $UserId;

    /**
     * @var string 人员名称
     */
    public $Username;

    /**
     * @var integer 是否启用
     */
    public $Enabled;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var array 属性列表
     */
    public $Attributes;

    /**
     * @param integer $RoleSystemId 角色体系ID
     * @param string $UserId 人员ID
     * @param string $Username 人员名称
     * @param integer $Enabled 是否启用
     * @param string $Phone 手机号
     * @param array $Attributes 属性列表
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
        if (array_key_exists("RoleSystemId",$param) and $param["RoleSystemId"] !== null) {
            $this->RoleSystemId = $param["RoleSystemId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new UserAttribute();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }
    }
}
