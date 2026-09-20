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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色基础信息
 *
 * @method string getId() 获取<p>角色ID</p>
 * @method void setId(string $Id) 设置<p>角色ID</p>
 * @method string getName() 获取<p>角色名称</p>
 * @method void setName(string $Name) 设置<p>角色名称</p>
 * @method string getDescription() 获取<p>角色描述</p>
 * @method void setDescription(string $Description) 设置<p>角色描述</p>
 * @method string getDisplayName() 获取<p>显示名称</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>显示名称</p>
 * @method string getRoleType() 获取<p>角色类型</p>
 * @method void setRoleType(string $RoleType) 设置<p>角色类型</p>
 * @method integer getSource() 获取<p>角色来源，参考 web_enum_standard.proto -&gt; RoleSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有</p>
 * @method void setSource(integer $Source) 设置<p>角色来源，参考 web_enum_standard.proto -&gt; RoleSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有</p>
 * @method array getGroupNames() 获取<p>继承来源的用户组名称列表，Source=1 时为空</p>
 * @method void setGroupNames(array $GroupNames) 设置<p>继承来源的用户组名称列表，Source=1 时为空</p>
 */
class RoleBasicInfo extends AbstractModel
{
    /**
     * @var string <p>角色ID</p>
     */
    public $Id;

    /**
     * @var string <p>角色名称</p>
     */
    public $Name;

    /**
     * @var string <p>角色描述</p>
     */
    public $Description;

    /**
     * @var string <p>显示名称</p>
     */
    public $DisplayName;

    /**
     * @var string <p>角色类型</p>
     */
    public $RoleType;

    /**
     * @var integer <p>角色来源，参考 web_enum_standard.proto -&gt; RoleSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有</p>
     */
    public $Source;

    /**
     * @var array <p>继承来源的用户组名称列表，Source=1 时为空</p>
     */
    public $GroupNames;

    /**
     * @param string $Id <p>角色ID</p>
     * @param string $Name <p>角色名称</p>
     * @param string $Description <p>角色描述</p>
     * @param string $DisplayName <p>显示名称</p>
     * @param string $RoleType <p>角色类型</p>
     * @param integer $Source <p>角色来源，参考 web_enum_standard.proto -&gt; RoleSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有</p>
     * @param array $GroupNames <p>继承来源的用户组名称列表，Source=1 时为空</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("GroupNames",$param) and $param["GroupNames"] !== null) {
            $this->GroupNames = $param["GroupNames"];
        }
    }
}
