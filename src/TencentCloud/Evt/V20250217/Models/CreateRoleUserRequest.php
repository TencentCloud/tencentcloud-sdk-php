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
 * @method integer getRoleSystemId() 获取<p>自定义角色体系的ID</p><p>角色体系ID</p>
 * @method void setRoleSystemId(integer $RoleSystemId) 设置<p>自定义角色体系的ID</p><p>角色体系ID</p>
 * @method string getUserId() 获取<p>要添加的自定义用户ID，建议与腾讯云-子用户的用户名称保持一致</p><p>人员ID</p>
 * @method void setUserId(string $UserId) 设置<p>要添加的自定义用户ID，建议与腾讯云-子用户的用户名称保持一致</p><p>人员ID</p>
 * @method string getUsername() 获取<p>自定义用户的名称</p><p>人员名称</p>
 * @method void setUsername(string $Username) 设置<p>自定义用户的名称</p><p>人员名称</p>
 * @method integer getEnabled() 获取<p>是否启用当前用户</p>枚举值：<ul><li> 1： 启用</li><li> 2： 禁用</li></ul><p>是否启用</p>
 * @method void setEnabled(integer $Enabled) 设置<p>是否启用当前用户</p>枚举值：<ul><li> 1： 启用</li><li> 2： 禁用</li></ul><p>是否启用</p>
 * @method string getPhone() 获取<p>自定义用户的手机号</p><p>手机号</p>
 * @method void setPhone(string $Phone) 设置<p>自定义用户的手机号</p><p>手机号</p>
 * @method array getAttributes() 获取<p>自定义用户的身份属性列表</p><p>属性列表</p>
 * @method void setAttributes(array $Attributes) 设置<p>自定义用户的身份属性列表</p><p>属性列表</p>
 * @method integer getTencentUin() 获取<p>自定义用户与腾讯云-子用户关联，如果不传默认按照子用户名称进行匹配</p>
 * @method void setTencentUin(integer $TencentUin) 设置<p>自定义用户与腾讯云-子用户关联，如果不传默认按照子用户名称进行匹配</p>
 */
class CreateRoleUserRequest extends AbstractModel
{
    /**
     * @var integer <p>自定义角色体系的ID</p><p>角色体系ID</p>
     */
    public $RoleSystemId;

    /**
     * @var string <p>要添加的自定义用户ID，建议与腾讯云-子用户的用户名称保持一致</p><p>人员ID</p>
     */
    public $UserId;

    /**
     * @var string <p>自定义用户的名称</p><p>人员名称</p>
     */
    public $Username;

    /**
     * @var integer <p>是否启用当前用户</p>枚举值：<ul><li> 1： 启用</li><li> 2： 禁用</li></ul><p>是否启用</p>
     */
    public $Enabled;

    /**
     * @var string <p>自定义用户的手机号</p><p>手机号</p>
     */
    public $Phone;

    /**
     * @var array <p>自定义用户的身份属性列表</p><p>属性列表</p>
     */
    public $Attributes;

    /**
     * @var integer <p>自定义用户与腾讯云-子用户关联，如果不传默认按照子用户名称进行匹配</p>
     */
    public $TencentUin;

    /**
     * @param integer $RoleSystemId <p>自定义角色体系的ID</p><p>角色体系ID</p>
     * @param string $UserId <p>要添加的自定义用户ID，建议与腾讯云-子用户的用户名称保持一致</p><p>人员ID</p>
     * @param string $Username <p>自定义用户的名称</p><p>人员名称</p>
     * @param integer $Enabled <p>是否启用当前用户</p>枚举值：<ul><li> 1： 启用</li><li> 2： 禁用</li></ul><p>是否启用</p>
     * @param string $Phone <p>自定义用户的手机号</p><p>手机号</p>
     * @param array $Attributes <p>自定义用户的身份属性列表</p><p>属性列表</p>
     * @param integer $TencentUin <p>自定义用户与腾讯云-子用户关联，如果不传默认按照子用户名称进行匹配</p>
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

        if (array_key_exists("TencentUin",$param) and $param["TencentUin"] !== null) {
            $this->TencentUin = $param["TencentUin"];
        }
    }
}
