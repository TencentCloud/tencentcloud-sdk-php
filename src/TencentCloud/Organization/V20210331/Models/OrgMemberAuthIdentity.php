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
 * 组织成员可授权的身份
 *
 * @method integer getIdentityId() 获取身份ID。
 * @method void setIdentityId(integer $IdentityId) 设置身份ID。
 * @method string getIdentityRoleName() 获取身份的角色名。
 * @method void setIdentityRoleName(string $IdentityRoleName) 设置身份的角色名。
 * @method string getIdentityRoleAliasName() 获取身份的角色别名。
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) 设置身份的角色别名。
 * @method string getDescription() 获取身份描述。
 * @method void setDescription(string $Description) 设置身份描述。
 * @method string getCreateTime() 获取首次配置成功的时间。
 * @method void setCreateTime(string $CreateTime) 设置首次配置成功的时间。
 * @method string getUpdateTime() 获取最后一次配置成功的时间。
 * @method void setUpdateTime(string $UpdateTime) 设置最后一次配置成功的时间。
 * @method integer getIdentityType() 获取身份类型。取值： 1-预设身份  2-自定义身份
 * @method void setIdentityType(integer $IdentityType) 设置身份类型。取值： 1-预设身份  2-自定义身份
 * @method integer getStatus() 获取配置状态。取值：1-配置完成 2-需重新配置
 * @method void setStatus(integer $Status) 设置配置状态。取值：1-配置完成 2-需重新配置
 * @method integer getMemberUin() 获取成员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin。
 * @method string getMemberName() 获取成员名称。
 * @method void setMemberName(string $MemberName) 设置成员名称。
 */
class OrgMemberAuthIdentity extends AbstractModel
{
    /**
     * @var integer 身份ID。
     */
    public $IdentityId;

    /**
     * @var string 身份的角色名。
     */
    public $IdentityRoleName;

    /**
     * @var string 身份的角色别名。
     */
    public $IdentityRoleAliasName;

    /**
     * @var string 身份描述。
     */
    public $Description;

    /**
     * @var string 首次配置成功的时间。
     */
    public $CreateTime;

    /**
     * @var string 最后一次配置成功的时间。
     */
    public $UpdateTime;

    /**
     * @var integer 身份类型。取值： 1-预设身份  2-自定义身份
     */
    public $IdentityType;

    /**
     * @var integer 配置状态。取值：1-配置完成 2-需重新配置
     */
    public $Status;

    /**
     * @var integer 成员Uin。
     */
    public $MemberUin;

    /**
     * @var string 成员名称。
     */
    public $MemberName;

    /**
     * @param integer $IdentityId 身份ID。
     * @param string $IdentityRoleName 身份的角色名。
     * @param string $IdentityRoleAliasName 身份的角色别名。
     * @param string $Description 身份描述。
     * @param string $CreateTime 首次配置成功的时间。
     * @param string $UpdateTime 最后一次配置成功的时间。
     * @param integer $IdentityType 身份类型。取值： 1-预设身份  2-自定义身份
     * @param integer $Status 配置状态。取值：1-配置完成 2-需重新配置
     * @param integer $MemberUin 成员Uin。
     * @param string $MemberName 成员名称。
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
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("IdentityRoleName",$param) and $param["IdentityRoleName"] !== null) {
            $this->IdentityRoleName = $param["IdentityRoleName"];
        }

        if (array_key_exists("IdentityRoleAliasName",$param) and $param["IdentityRoleAliasName"] !== null) {
            $this->IdentityRoleAliasName = $param["IdentityRoleAliasName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }
    }
}
