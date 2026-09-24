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
 * UpdateConsoleGroup请求参数结构体
 *
 * @method string getGroupId() 获取<p>用户组 ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>用户组 ID</p>
 * @method integer getOperType() 获取<p>修改标识：USER_GROUP_OPER_TYPE_ADD_USER(1)=添加成员、USER_GROUP_OPER_TYPE_DELETE_USER(2)=删除成员、USER_GROUP_OPER_TYPE_BASIC_INFO(3)=基础信息（别名和描述）</p>
 * @method void setOperType(integer $OperType) 设置<p>修改标识：USER_GROUP_OPER_TYPE_ADD_USER(1)=添加成员、USER_GROUP_OPER_TYPE_DELETE_USER(2)=删除成员、USER_GROUP_OPER_TYPE_BASIC_INFO(3)=基础信息（别名和描述）</p>
 * @method string getGroupName() 获取<p>用户组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>用户组名称</p>
 * @method string getGroupNickname() 获取<p>用户组别名</p>
 * @method void setGroupNickname(string $GroupNickname) 设置<p>用户组别名</p>
 * @method string getDescription() 获取<p>用户组描述</p>
 * @method void setDescription(string $Description) 设置<p>用户组描述</p>
 * @method array getUserUins() 获取<p>成员 UIN 列表（OperType 为添加/删除成员时使用），单次最多100个</p>
 * @method void setUserUins(array $UserUins) 设置<p>成员 UIN 列表（OperType 为添加/删除成员时使用），单次最多100个</p>
 */
class UpdateConsoleGroupRequest extends AbstractModel
{
    /**
     * @var string <p>用户组 ID</p>
     */
    public $GroupId;

    /**
     * @var integer <p>修改标识：USER_GROUP_OPER_TYPE_ADD_USER(1)=添加成员、USER_GROUP_OPER_TYPE_DELETE_USER(2)=删除成员、USER_GROUP_OPER_TYPE_BASIC_INFO(3)=基础信息（别名和描述）</p>
     */
    public $OperType;

    /**
     * @var string <p>用户组名称</p>
     */
    public $GroupName;

    /**
     * @var string <p>用户组别名</p>
     */
    public $GroupNickname;

    /**
     * @var string <p>用户组描述</p>
     */
    public $Description;

    /**
     * @var array <p>成员 UIN 列表（OperType 为添加/删除成员时使用），单次最多100个</p>
     */
    public $UserUins;

    /**
     * @param string $GroupId <p>用户组 ID</p>
     * @param integer $OperType <p>修改标识：USER_GROUP_OPER_TYPE_ADD_USER(1)=添加成员、USER_GROUP_OPER_TYPE_DELETE_USER(2)=删除成员、USER_GROUP_OPER_TYPE_BASIC_INFO(3)=基础信息（别名和描述）</p>
     * @param string $GroupName <p>用户组名称</p>
     * @param string $GroupNickname <p>用户组别名</p>
     * @param string $Description <p>用户组描述</p>
     * @param array $UserUins <p>成员 UIN 列表（OperType 为添加/删除成员时使用），单次最多100个</p>
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

        if (array_key_exists("OperType",$param) and $param["OperType"] !== null) {
            $this->OperType = $param["OperType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupNickname",$param) and $param["GroupNickname"] !== null) {
            $this->GroupNickname = $param["GroupNickname"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
        }
    }
}
