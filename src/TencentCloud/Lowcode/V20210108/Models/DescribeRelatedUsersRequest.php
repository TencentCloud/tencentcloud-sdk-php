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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelatedUsers请求参数结构体
 *
 * @method integer getRoleId() 获取角色id
 * @method void setRoleId(integer $RoleId) 设置角色id
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取页面含量
 * @method void setPageSize(integer $PageSize) 设置页面含量
 * @method string getEnvType() 获取环境类型
 * @method void setEnvType(string $EnvType) 设置环境类型
 * @method string getRoleStringId() 获取新角色id
 * @method void setRoleStringId(string $RoleStringId) 设置新角色id
 */
class DescribeRelatedUsersRequest extends AbstractModel
{
    /**
     * @var integer 角色id
     */
    public $RoleId;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 页面含量
     */
    public $PageSize;

    /**
     * @var string 环境类型
     */
    public $EnvType;

    /**
     * @var string 新角色id
     */
    public $RoleStringId;

    /**
     * @param integer $RoleId 角色id
     * @param string $EnvId 环境id
     * @param integer $PageNo 页码
     * @param integer $PageSize 页面含量
     * @param string $EnvType 环境类型
     * @param string $RoleStringId 新角色id
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("RoleStringId",$param) and $param["RoleStringId"] !== null) {
            $this->RoleStringId = $param["RoleStringId"];
        }
    }
}
