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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户加入的用户组
 *
 * @method string getGroupName() 获取用户组的名称。
 * @method void setGroupName(string $GroupName) 设置用户组的名称。
 * @method string getDescription() 获取用户组的描述。
 * @method void setDescription(string $Description) 设置用户组的描述。
 * @method string getGroupId() 获取用户组 ID。
 * @method void setGroupId(string $GroupId) 设置用户组 ID。
 * @method string getGroupType() 获取用户组的类型。取值：

Manual：手动创建。
Synchronized：外部同步。
 * @method void setGroupType(string $GroupType) 设置用户组的类型。取值：

Manual：手动创建。
Synchronized：外部同步。
 * @method string getJoinTime() 获取加入用户组的时间
 * @method void setJoinTime(string $JoinTime) 设置加入用户组的时间
 */
class JoinedGroups extends AbstractModel
{
    /**
     * @var string 用户组的名称。
     */
    public $GroupName;

    /**
     * @var string 用户组的描述。
     */
    public $Description;

    /**
     * @var string 用户组 ID。
     */
    public $GroupId;

    /**
     * @var string 用户组的类型。取值：

Manual：手动创建。
Synchronized：外部同步。
     */
    public $GroupType;

    /**
     * @var string 加入用户组的时间
     */
    public $JoinTime;

    /**
     * @param string $GroupName 用户组的名称。
     * @param string $Description 用户组的描述。
     * @param string $GroupId 用户组 ID。
     * @param string $GroupType 用户组的类型。取值：

Manual：手动创建。
Synchronized：外部同步。
     * @param string $JoinTime 加入用户组的时间
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }
    }
}
