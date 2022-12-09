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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业员工信息
 *
 * @method string getUserId() 获取用户在电子签平台的id
 * @method void setUserId(string $UserId) 设置用户在电子签平台的id
 * @method string getDisplayName() 获取显示的用户名/昵称
 * @method void setDisplayName(string $DisplayName) 设置显示的用户名/昵称
 * @method string getMobile() 获取用户手机号
 * @method void setMobile(string $Mobile) 设置用户手机号
 * @method string getEmail() 获取用户邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置用户邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取用户在第三方平台id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置用户在第三方平台id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoles() 获取员工角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoles(array $Roles) 设置员工角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method Department getDepartment() 获取员工部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartment(Department $Department) 设置员工部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getVerified() 获取员工是否实名
 * @method void setVerified(boolean $Verified) 设置员工是否实名
 * @method integer getCreatedOn() 获取员工创建时间戳
 * @method void setCreatedOn(integer $CreatedOn) 设置员工创建时间戳
 * @method integer getVerifiedOn() 获取员工实名时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifiedOn(integer $VerifiedOn) 设置员工实名时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuiteJob() 获取员工是否离职：0-未离职，1-离职
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuiteJob(integer $QuiteJob) 设置员工是否离职：0-未离职，1-离职
注意：此字段可能返回 null，表示取不到有效值。
 */
class Staff extends AbstractModel
{
    /**
     * @var string 用户在电子签平台的id
     */
    public $UserId;

    /**
     * @var string 显示的用户名/昵称
     */
    public $DisplayName;

    /**
     * @var string 用户手机号
     */
    public $Mobile;

    /**
     * @var string 用户邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 用户在第三方平台id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var array 员工角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Roles;

    /**
     * @var Department 员工部门
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Department;

    /**
     * @var boolean 员工是否实名
     */
    public $Verified;

    /**
     * @var integer 员工创建时间戳
     */
    public $CreatedOn;

    /**
     * @var integer 员工实名时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifiedOn;

    /**
     * @var integer 员工是否离职：0-未离职，1-离职
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuiteJob;

    /**
     * @param string $UserId 用户在电子签平台的id
     * @param string $DisplayName 显示的用户名/昵称
     * @param string $Mobile 用户手机号
     * @param string $Email 用户邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId 用户在第三方平台id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Roles 员工角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param Department $Department 员工部门
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Verified 员工是否实名
     * @param integer $CreatedOn 员工创建时间戳
     * @param integer $VerifiedOn 员工实名时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QuiteJob 员工是否离职：0-未离职，1-离职
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new StaffRole();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }

        if (array_key_exists("Verified",$param) and $param["Verified"] !== null) {
            $this->Verified = $param["Verified"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("VerifiedOn",$param) and $param["VerifiedOn"] !== null) {
            $this->VerifiedOn = $param["VerifiedOn"];
        }

        if (array_key_exists("QuiteJob",$param) and $param["QuiteJob"] !== null) {
            $this->QuiteJob = $param["QuiteJob"];
        }
    }
}
