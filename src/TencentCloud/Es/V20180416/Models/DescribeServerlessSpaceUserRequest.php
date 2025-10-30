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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerlessSpaceUser请求参数结构体
 *
 * @method string getSpaceId() 获取空间的ID
 * @method void setSpaceId(string $SpaceId) 设置空间的ID
 * @method integer getOffset() 获取游标
 * @method void setOffset(integer $Offset) 设置游标
 * @method integer getLimit() 获取页条数
 * @method void setLimit(integer $Limit) 设置页条数
 * @method array getUserNames() 获取用户名列表过滤
 * @method void setUserNames(array $UserNames) 设置用户名列表过滤
 * @method array getUserTypes() 获取用户类型
 * @method void setUserTypes(array $UserTypes) 设置用户类型
 * @method array getPrivilegeTypes() 获取权限类型
 * @method void setPrivilegeTypes(array $PrivilegeTypes) 设置权限类型
 */
class DescribeServerlessSpaceUserRequest extends AbstractModel
{
    /**
     * @var string 空间的ID
     */
    public $SpaceId;

    /**
     * @var integer 游标
     */
    public $Offset;

    /**
     * @var integer 页条数
     */
    public $Limit;

    /**
     * @var array 用户名列表过滤
     */
    public $UserNames;

    /**
     * @var array 用户类型
     */
    public $UserTypes;

    /**
     * @var array 权限类型
     */
    public $PrivilegeTypes;

    /**
     * @param string $SpaceId 空间的ID
     * @param integer $Offset 游标
     * @param integer $Limit 页条数
     * @param array $UserNames 用户名列表过滤
     * @param array $UserTypes 用户类型
     * @param array $PrivilegeTypes 权限类型
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("UserNames",$param) and $param["UserNames"] !== null) {
            $this->UserNames = $param["UserNames"];
        }

        if (array_key_exists("UserTypes",$param) and $param["UserTypes"] !== null) {
            $this->UserTypes = $param["UserTypes"];
        }

        if (array_key_exists("PrivilegeTypes",$param) and $param["PrivilegeTypes"] !== null) {
            $this->PrivilegeTypes = $param["PrivilegeTypes"];
        }
    }
}
