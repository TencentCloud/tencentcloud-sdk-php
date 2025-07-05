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
 * 座席用户信息
 *
 * @method string getName() 获取座席名称
 * @method void setName(string $Name) 设置座席名称
 * @method string getMail() 获取座席邮箱
 * @method void setMail(string $Mail) 设置座席邮箱
 * @method string getStaffNumber() 获取工号
 * @method void setStaffNumber(string $StaffNumber) 设置工号
 * @method string getPhone() 获取座席电话号码（带0086前缀）
 * @method void setPhone(string $Phone) 设置座席电话号码（带0086前缀）
 * @method string getNick() 获取座席昵称
 * @method void setNick(string $Nick) 设置座席昵称
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method array getSkillGroupNameList() 获取座席关联的技能组列表
 * @method void setSkillGroupNameList(array $SkillGroupNameList) 设置座席关联的技能组列表
 * @method integer getRole() 获取1:管理员
2:质检员
3:普通座席
else:自定义角色ID
 * @method void setRole(integer $Role) 设置1:管理员
2:质检员
3:普通座席
else:自定义角色ID
 * @method string getExtensionNumber() 获取座席分机号（1 到 8 打头，4 - 6 位）
 * @method void setExtensionNumber(string $ExtensionNumber) 设置座席分机号（1 到 8 打头，4 - 6 位）
 */
class SeatUserInfo extends AbstractModel
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
     * @var string 工号
     */
    public $StaffNumber;

    /**
     * @var string 座席电话号码（带0086前缀）
     */
    public $Phone;

    /**
     * @var string 座席昵称
     */
    public $Nick;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var array 座席关联的技能组列表
     */
    public $SkillGroupNameList;

    /**
     * @var integer 1:管理员
2:质检员
3:普通座席
else:自定义角色ID
     */
    public $Role;

    /**
     * @var string 座席分机号（1 到 8 打头，4 - 6 位）
     */
    public $ExtensionNumber;

    /**
     * @param string $Name 座席名称
     * @param string $Mail 座席邮箱
     * @param string $StaffNumber 工号
     * @param string $Phone 座席电话号码（带0086前缀）
     * @param string $Nick 座席昵称
     * @param string $UserId 用户ID
     * @param array $SkillGroupNameList 座席关联的技能组列表
     * @param integer $Role 1:管理员
2:质检员
3:普通座席
else:自定义角色ID
     * @param string $ExtensionNumber 座席分机号（1 到 8 打头，4 - 6 位）
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

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SkillGroupNameList",$param) and $param["SkillGroupNameList"] !== null) {
            $this->SkillGroupNameList = $param["SkillGroupNameList"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("ExtensionNumber",$param) and $param["ExtensionNumber"] !== null) {
            $this->ExtensionNumber = $param["ExtensionNumber"];
        }
    }
}
