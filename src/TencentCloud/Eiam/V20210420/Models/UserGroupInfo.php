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
 * @method string getDisplayName() 获取昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroupId() 获取用户组ID，是用户组全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupId(string $UserGroupId) 设置用户组ID，是用户组全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取用户组备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置用户组备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedDate() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedDate(string $CreatedDate) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupInfo extends AbstractModel
{
    /**
     * @var string 昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 用户组ID，是用户组全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupId;

    /**
     * @var string 用户组备注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedDate;

    /**
     * @param string $DisplayName 昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroupId 用户组ID，是用户组全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 用户组备注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedDate 创建时间。
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }
    }
}
