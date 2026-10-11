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
 * 工作空间用户组信息
 *
 * @method string getGroupId() 获取<p>用户组ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>用户组ID</p>
 * @method string getGroupName() 获取<p>用户组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>用户组名称</p>
 * @method array getRoles() 获取<p>角色列表</p>
 * @method void setRoles(array $Roles) 设置<p>角色列表</p>
 * @method string getCreateTime() 获取<p>创建时间，毫秒时间戳</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，毫秒时间戳</p>
 * @method string getUpdateTime() 获取<p>更新时间，毫秒时间戳</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间，毫秒时间戳</p>
 * @method integer getUserCount() 获取<p>用户组下用户数量</p>
 * @method void setUserCount(integer $UserCount) 设置<p>用户组下用户数量</p>
 * @method string getGroupType() 获取<p>用户组类型。取值为枚举数值的字符串形式：&quot;0&quot;=控制台系统类型（包含全部user）、&quot;1&quot;=控制台自定义类型、&quot;2&quot;=工作空间系统类型（包含工作空间全部user）、&quot;3&quot;=工作空间自定义类型</p>
 * @method void setGroupType(string $GroupType) 设置<p>用户组类型。取值为枚举数值的字符串形式：&quot;0&quot;=控制台系统类型（包含全部user）、&quot;1&quot;=控制台自定义类型、&quot;2&quot;=工作空间系统类型（包含工作空间全部user）、&quot;3&quot;=工作空间自定义类型</p>
 * @method array getTags() 获取<p>该组直接绑定的标签（不含继承）</p>
 * @method void setTags(array $Tags) 设置<p>该组直接绑定的标签（不含继承）</p>
 */
class WorkspaceGroupInfo extends AbstractModel
{
    /**
     * @var string <p>用户组ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>用户组名称</p>
     */
    public $GroupName;

    /**
     * @var array <p>角色列表</p>
     */
    public $Roles;

    /**
     * @var string <p>创建时间，毫秒时间戳</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间，毫秒时间戳</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>用户组下用户数量</p>
     */
    public $UserCount;

    /**
     * @var string <p>用户组类型。取值为枚举数值的字符串形式：&quot;0&quot;=控制台系统类型（包含全部user）、&quot;1&quot;=控制台自定义类型、&quot;2&quot;=工作空间系统类型（包含工作空间全部user）、&quot;3&quot;=工作空间自定义类型</p>
     */
    public $GroupType;

    /**
     * @var array <p>该组直接绑定的标签（不含继承）</p>
     */
    public $Tags;

    /**
     * @param string $GroupId <p>用户组ID</p>
     * @param string $GroupName <p>用户组名称</p>
     * @param array $Roles <p>角色列表</p>
     * @param string $CreateTime <p>创建时间，毫秒时间戳</p>
     * @param string $UpdateTime <p>更新时间，毫秒时间戳</p>
     * @param integer $UserCount <p>用户组下用户数量</p>
     * @param string $GroupType <p>用户组类型。取值为枚举数值的字符串形式：&quot;0&quot;=控制台系统类型（包含全部user）、&quot;1&quot;=控制台自定义类型、&quot;2&quot;=工作空间系统类型（包含工作空间全部user）、&quot;3&quot;=工作空间自定义类型</p>
     * @param array $Tags <p>该组直接绑定的标签（不含继承）</p>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new RoleBasicInfo();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new UserTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
