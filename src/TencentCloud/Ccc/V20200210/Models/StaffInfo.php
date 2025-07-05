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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带有技能组优先级的座席信息
 *
 * @method string getName() 获取座席名称
 * @method void setName(string $Name) 设置座席名称
 * @method string getMail() 获取座席邮箱
 * @method void setMail(string $Mail) 设置座席邮箱
 * @method string getPhone() 获取座席电话号码
 * @method void setPhone(string $Phone) 设置座席电话号码
 * @method string getNick() 获取座席昵称
 * @method void setNick(string $Nick) 设置座席昵称
 * @method string getStaffNumber() 获取座席工号
 * @method void setStaffNumber(string $StaffNumber) 设置座席工号
 * @method integer getRoleId() 获取用户角色 ID，一个用户绑定了多个角色时以RoleIdList为准
 * @method void setRoleId(integer $RoleId) 设置用户角色 ID，一个用户绑定了多个角色时以RoleIdList为准
 * @method integer getRoleIdList() 获取用户角色id列表
 * @method void setRoleIdList(integer $RoleIdList) 设置用户角色id列表
 * @method array getRoleList() 获取用户角色id列表
 * @method void setRoleList(array $RoleList) 设置用户角色id列表
 * @method array getSkillGroupList() 获取所属技能组列表
 * @method void setSkillGroupList(array $SkillGroupList) 设置所属技能组列表
 * @method integer getLastModifyTimestamp() 获取最后修改时间
 * @method void setLastModifyTimestamp(integer $LastModifyTimestamp) 设置最后修改时间
 * @method string getExtensionNumber() 获取座席分机号（1 到 8 打头，4 - 6 位）
 * @method void setExtensionNumber(string $ExtensionNumber) 设置座席分机号（1 到 8 打头，4 - 6 位）
 * @method ForwardingConfig getForwardingConfig() 获取呼叫转移配置
 * @method void setForwardingConfig(ForwardingConfig $ForwardingConfig) 设置呼叫转移配置
 */
class StaffInfo extends AbstractModel
{
    /**
     * @var string 座席名称
     */
    public $Name;

    /**
     * @var string 座席邮箱
     */
    public $Mail;

    /**
     * @var string 座席电话号码
     */
    public $Phone;

    /**
     * @var string 座席昵称
     */
    public $Nick;

    /**
     * @var string 座席工号
     */
    public $StaffNumber;

    /**
     * @var integer 用户角色 ID，一个用户绑定了多个角色时以RoleIdList为准
     * @deprecated
     */
    public $RoleId;

    /**
     * @var integer 用户角色id列表
     * @deprecated
     */
    public $RoleIdList;

    /**
     * @var array 用户角色id列表
     */
    public $RoleList;

    /**
     * @var array 所属技能组列表
     */
    public $SkillGroupList;

    /**
     * @var integer 最后修改时间
     */
    public $LastModifyTimestamp;

    /**
     * @var string 座席分机号（1 到 8 打头，4 - 6 位）
     */
    public $ExtensionNumber;

    /**
     * @var ForwardingConfig 呼叫转移配置
     */
    public $ForwardingConfig;

    /**
     * @param string $Name 座席名称
     * @param string $Mail 座席邮箱
     * @param string $Phone 座席电话号码
     * @param string $Nick 座席昵称
     * @param string $StaffNumber 座席工号
     * @param integer $RoleId 用户角色 ID，一个用户绑定了多个角色时以RoleIdList为准
     * @param integer $RoleIdList 用户角色id列表
     * @param array $RoleList 用户角色id列表
     * @param array $SkillGroupList 所属技能组列表
     * @param integer $LastModifyTimestamp 最后修改时间
     * @param string $ExtensionNumber 座席分机号（1 到 8 打头，4 - 6 位）
     * @param ForwardingConfig $ForwardingConfig 呼叫转移配置
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("RoleList",$param) and $param["RoleList"] !== null) {
            $this->RoleList = $param["RoleList"];
        }

        if (array_key_exists("SkillGroupList",$param) and $param["SkillGroupList"] !== null) {
            $this->SkillGroupList = [];
            foreach ($param["SkillGroupList"] as $key => $value){
                $obj = new SkillGroupItem();
                $obj->deserialize($value);
                array_push($this->SkillGroupList, $obj);
            }
        }

        if (array_key_exists("LastModifyTimestamp",$param) and $param["LastModifyTimestamp"] !== null) {
            $this->LastModifyTimestamp = $param["LastModifyTimestamp"];
        }

        if (array_key_exists("ExtensionNumber",$param) and $param["ExtensionNumber"] !== null) {
            $this->ExtensionNumber = $param["ExtensionNumber"];
        }

        if (array_key_exists("ForwardingConfig",$param) and $param["ForwardingConfig"] !== null) {
            $this->ForwardingConfig = new ForwardingConfig();
            $this->ForwardingConfig->deserialize($param["ForwardingConfig"]);
        }
    }
}
