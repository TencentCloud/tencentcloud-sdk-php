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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的用户组列表。
 *
 * @method string getUserGroupId() 获取用户组ID。
 * @method void setUserGroupId(string $UserGroupId) 设置用户组ID。
 * @method string getUserGroupName() 获取用户组名称。
 * @method void setUserGroupName(string $UserGroupName) 设置用户组名称。
 * @method string getLastModifiedDate() 获取上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedDate(string $LastModifiedDate) 设置上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupInformation extends AbstractModel
{
    /**
     * @var string 用户组ID。
     */
    public $UserGroupId;

    /**
     * @var string 用户组名称。
     */
    public $UserGroupName;

    /**
     * @var string 上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedDate;

    /**
     * @param string $UserGroupId 用户组ID。
     * @param string $UserGroupName 用户组名称。
     * @param string $LastModifiedDate 上次更新时间，符合 ISO8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }
    }
}
