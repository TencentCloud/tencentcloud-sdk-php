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
 * 组织架构返回参数
 *
 * @method string getOrgId() 获取部门id
 * @method void setOrgId(string $OrgId) 设置部门id
 * @method string getOrgName() 获取部门名称
 * @method void setOrgName(string $OrgName) 设置部门名称
 * @method string getOrgIdentity() 获取部门标识
 * @method void setOrgIdentity(string $OrgIdentity) 设置部门标识
 * @method string getLevel() 获取部门层级
 * @method void setLevel(string $Level) 设置部门层级
 * @method string getPrimaryColumn() 获取主键字段
 * @method void setPrimaryColumn(string $PrimaryColumn) 设置主键字段
 */
class OrgResp extends AbstractModel
{
    /**
     * @var string 部门id
     */
    public $OrgId;

    /**
     * @var string 部门名称
     */
    public $OrgName;

    /**
     * @var string 部门标识
     */
    public $OrgIdentity;

    /**
     * @var string 部门层级
     */
    public $Level;

    /**
     * @var string 主键字段
     */
    public $PrimaryColumn;

    /**
     * @param string $OrgId 部门id
     * @param string $OrgName 部门名称
     * @param string $OrgIdentity 部门标识
     * @param string $Level 部门层级
     * @param string $PrimaryColumn 主键字段
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
        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("OrgName",$param) and $param["OrgName"] !== null) {
            $this->OrgName = $param["OrgName"];
        }

        if (array_key_exists("OrgIdentity",$param) and $param["OrgIdentity"] !== null) {
            $this->OrgIdentity = $param["OrgIdentity"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PrimaryColumn",$param) and $param["PrimaryColumn"] !== null) {
            $this->PrimaryColumn = $param["PrimaryColumn"];
        }
    }
}
