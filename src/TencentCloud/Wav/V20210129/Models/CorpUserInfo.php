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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业成员信息
 *
 * @method integer getUserId() 获取企业成员UserId
 * @method void setUserId(integer $UserId) 设置企业成员UserId
 * @method string getUserName() 获取企业成员在SaaS名片内填写的姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置企业成员在SaaS名片内填写的姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserOpenId() 获取企业成员在企微原生通讯录内的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserOpenId(string $UserOpenId) 设置企业成员在企微原生通讯录内的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDealerId() 获取成员所属经销商id，可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealerId(integer $DealerId) 设置成员所属经销商id，可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShopId() 获取成员所属门店id，可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShopId(integer $ShopId) 设置成员所属门店id，可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取企业成员手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置企业成员手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgIds() 获取成员所属部门id列表，仅返回该应用有查看权限的部门id；成员授权模式下，固定返回根部门id，即固定为1；多个部门使用逗号分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgIds(string $OrgIds) 设置成员所属部门id列表，仅返回该应用有查看权限的部门id；成员授权模式下，固定返回根部门id，即固定为1；多个部门使用逗号分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMainDepartment() 获取主部门，仅当应用对主部门有查看权限时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainDepartment(string $MainDepartment) 设置主部门，仅当应用对主部门有查看权限时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsLeaderInDept() 获取是否为部门负责人，第三方应用可为空。与orgIds值一一对应，多个部门使用逗号隔开，0-否， 1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLeaderInDept(string $IsLeaderInDept) 设置是否为部门负责人，第三方应用可为空。与orgIds值一一对应，多个部门使用逗号隔开，0-否， 1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取激活状态: 0=已激活，1=已禁用，-1=退出企业"
 * @method void setStatus(integer $Status) 设置激活状态: 0=已激活，1=已禁用，-1=退出企业"
 */
class CorpUserInfo extends AbstractModel
{
    /**
     * @var integer 企业成员UserId
     */
    public $UserId;

    /**
     * @var string 企业成员在SaaS名片内填写的姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 企业成员在企微原生通讯录内的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserOpenId;

    /**
     * @var integer 成员所属经销商id，可为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealerId;

    /**
     * @var integer 成员所属门店id，可为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShopId;

    /**
     * @var string 企业成员手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 成员所属部门id列表，仅返回该应用有查看权限的部门id；成员授权模式下，固定返回根部门id，即固定为1；多个部门使用逗号分割
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgIds;

    /**
     * @var string 主部门，仅当应用对主部门有查看权限时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainDepartment;

    /**
     * @var string 是否为部门负责人，第三方应用可为空。与orgIds值一一对应，多个部门使用逗号隔开，0-否， 1-是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLeaderInDept;

    /**
     * @var integer 激活状态: 0=已激活，1=已禁用，-1=退出企业"
     */
    public $Status;

    /**
     * @param integer $UserId 企业成员UserId
     * @param string $UserName 企业成员在SaaS名片内填写的姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserOpenId 企业成员在企微原生通讯录内的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DealerId 成员所属经销商id，可为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShopId 成员所属门店id，可为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 企业成员手机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgIds 成员所属部门id列表，仅返回该应用有查看权限的部门id；成员授权模式下，固定返回根部门id，即固定为1；多个部门使用逗号分割
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MainDepartment 主部门，仅当应用对主部门有查看权限时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsLeaderInDept 是否为部门负责人，第三方应用可为空。与orgIds值一一对应，多个部门使用逗号隔开，0-否， 1-是
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 激活状态: 0=已激活，1=已禁用，-1=退出企业"
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserOpenId",$param) and $param["UserOpenId"] !== null) {
            $this->UserOpenId = $param["UserOpenId"];
        }

        if (array_key_exists("DealerId",$param) and $param["DealerId"] !== null) {
            $this->DealerId = $param["DealerId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("OrgIds",$param) and $param["OrgIds"] !== null) {
            $this->OrgIds = $param["OrgIds"];
        }

        if (array_key_exists("MainDepartment",$param) and $param["MainDepartment"] !== null) {
            $this->MainDepartment = $param["MainDepartment"];
        }

        if (array_key_exists("IsLeaderInDept",$param) and $param["IsLeaderInDept"] !== null) {
            $this->IsLeaderInDept = $param["IsLeaderInDept"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
