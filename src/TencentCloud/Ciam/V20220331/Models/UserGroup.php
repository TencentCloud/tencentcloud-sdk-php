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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户组
 *
 * @method string getUserGroupId() 获取用户组ID
 * @method void setUserGroupId(string $UserGroupId) 设置用户组ID
 * @method string getDisplayName() 获取用户组名称
 * @method void setDisplayName(string $DisplayName) 设置用户组名称
 * @method string getDescription() 获取用户组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置用户组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method string getTenantId() 获取租户ID
 * @method void setTenantId(string $TenantId) 设置租户ID
 * @method integer getCreatedDate() 获取创建时间
 * @method void setCreatedDate(integer $CreatedDate) 设置创建时间
 * @method integer getLastModifyDate() 获取最近更新时间
 * @method void setLastModifyDate(integer $LastModifyDate) 设置最近更新时间
 */
class UserGroup extends AbstractModel
{
    /**
     * @var string 用户组ID
     */
    public $UserGroupId;

    /**
     * @var string 用户组名称
     */
    public $DisplayName;

    /**
     * @var string 用户组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var string 租户ID
     */
    public $TenantId;

    /**
     * @var integer 创建时间
     */
    public $CreatedDate;

    /**
     * @var integer 最近更新时间
     */
    public $LastModifyDate;

    /**
     * @param string $UserGroupId 用户组ID
     * @param string $DisplayName 用户组名称
     * @param string $Description 用户组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserStoreId 用户目录ID
     * @param string $TenantId 租户ID
     * @param integer $CreatedDate 创建时间
     * @param integer $LastModifyDate 最近更新时间
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("LastModifyDate",$param) and $param["LastModifyDate"] !== null) {
            $this->LastModifyDate = $param["LastModifyDate"];
        }
    }
}
