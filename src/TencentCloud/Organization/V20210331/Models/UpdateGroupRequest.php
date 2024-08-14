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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGroup请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getGroupId() 获取用户组ID。
 * @method void setGroupId(string $GroupId) 设置用户组ID。
 * @method string getNewGroupName() 获取新的用户组名称。
 * @method void setNewGroupName(string $NewGroupName) 设置新的用户组名称。
 * @method string getNewDescription() 获取新的用户组描述。
 * @method void setNewDescription(string $NewDescription) 设置新的用户组描述。
 */
class UpdateGroupRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 用户组ID。
     */
    public $GroupId;

    /**
     * @var string 新的用户组名称。
     */
    public $NewGroupName;

    /**
     * @var string 新的用户组描述。
     */
    public $NewDescription;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $GroupId 用户组ID。
     * @param string $NewGroupName 新的用户组名称。
     * @param string $NewDescription 新的用户组描述。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NewGroupName",$param) and $param["NewGroupName"] !== null) {
            $this->NewGroupName = $param["NewGroupName"];
        }

        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            $this->NewDescription = $param["NewDescription"];
        }
    }
}
