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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePermissionRanksInfo请求参数结构体
 *
 * @method integer getTableId() 获取页数
 * @method void setTableId(integer $TableId) 设置页数
 * @method string getMode() 获取条数
 * @method void setMode(string $Mode) 设置条数
 * @method string getRoleType() 获取角色类型
 * @method void setRoleType(string $RoleType) 设置角色类型
 * @method integer getRoleId() 获取所有页码
 * @method void setRoleId(integer $RoleId) 设置所有页码
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 */
class DescribePermissionRanksInfoRequest extends AbstractModel
{
    /**
     * @var integer 页数
     */
    public $TableId;

    /**
     * @var string 条数
     */
    public $Mode;

    /**
     * @var string 角色类型
     */
    public $RoleType;

    /**
     * @var integer 所有页码
     */
    public $RoleId;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var integer 项目id
     */
    public $ProjectId;

    /**
     * @param integer $TableId 页数
     * @param string $Mode 条数
     * @param string $RoleType 角色类型
     * @param integer $RoleId 所有页码
     * @param string $Type 类型
     * @param integer $ProjectId 项目id
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
