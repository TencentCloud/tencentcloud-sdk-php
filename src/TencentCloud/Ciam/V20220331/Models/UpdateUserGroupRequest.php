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
 * UpdateUserGroup请求参数结构体
 *
 * @method string getUserGroupId() 获取用户组ID
 * @method void setUserGroupId(string $UserGroupId) 设置用户组ID
 * @method string getDisplayName() 获取用户组名称
 * @method void setDisplayName(string $DisplayName) 设置用户组名称
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method string getDescription() 获取用户组描述
 * @method void setDescription(string $Description) 设置用户组描述
 */
class UpdateUserGroupRequest extends AbstractModel
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
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var string 用户组描述
     */
    public $Description;

    /**
     * @param string $UserGroupId 用户组ID
     * @param string $DisplayName 用户组名称
     * @param string $UserStoreId 用户目录ID
     * @param string $Description 用户组描述
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

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
