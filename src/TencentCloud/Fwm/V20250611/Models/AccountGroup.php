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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户组信息
 *
 * @method string getGroupId() 获取账户组ID
 * @method void setGroupId(string $GroupId) 设置账户组ID
 * @method string getGroupName() 获取账户组名称
 * @method void setGroupName(string $GroupName) 设置账户组名称
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemberCount() 获取成员数量
 * @method void setMemberCount(integer $MemberCount) 设置成员数量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getCanDelete() 获取是否可删除
 * @method void setCanDelete(boolean $CanDelete) 设置是否可删除
 */
class AccountGroup extends AbstractModel
{
    /**
     * @var string 账户组ID
     */
    public $GroupId;

    /**
     * @var string 账户组名称
     */
    public $GroupName;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 成员数量
     */
    public $MemberCount;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否可删除
     */
    public $CanDelete;

    /**
     * @param string $GroupId 账户组ID
     * @param string $GroupName 账户组名称
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemberCount 成员数量
     * @param string $CreateTime 创建时间
     * @param boolean $CanDelete 是否可删除
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }
    }
}
