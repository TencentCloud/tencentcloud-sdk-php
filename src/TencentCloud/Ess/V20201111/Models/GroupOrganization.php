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
 * 成员企业信息
 *
 * @method string getName() 获取成员企业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置成员企业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取成员企业别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置成员企业别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationId() 获取成员企业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationId(string $OrganizationId) 设置成员企业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取成员企业状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置成员企业状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMainOrganization() 获取是否为集团主企业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMainOrganization(boolean $IsMainOrganization) 设置是否为集团主企业
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardNumber() 获取企业社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardNumber(string $IdCardNumber) 设置企业社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method Admin getAdminInfo() 获取企业超管信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminInfo(Admin $AdminInfo) 设置企业超管信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicense() 获取企业许可证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicense(string $License) 设置企业许可证
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLicenseExpireTime() 获取企业许可证过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseExpireTime(integer $LicenseExpireTime) 设置企业许可证过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJoinTime() 获取成员企业加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinTime(integer $JoinTime) 设置成员企业加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFlowEngineEnable() 获取是否可以使用审批流引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowEngineEnable(boolean $FlowEngineEnable) 设置是否可以使用审批流引擎
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupOrganization extends AbstractModel
{
    /**
     * @var string 成员企业名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 成员企业别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var string 成员企业id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationId;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 成员企业状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 是否为集团主企业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMainOrganization;

    /**
     * @var string 企业社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardNumber;

    /**
     * @var Admin 企业超管信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminInfo;

    /**
     * @var string 企业许可证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $License;

    /**
     * @var integer 企业许可证过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseExpireTime;

    /**
     * @var integer 成员企业加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinTime;

    /**
     * @var boolean 是否可以使用审批流引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowEngineEnable;

    /**
     * @param string $Name 成员企业名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 成员企业别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationId 成员企业id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 成员企业状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMainOrganization 是否为集团主企业
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardNumber 企业社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param Admin $AdminInfo 企业超管信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $License 企业许可证
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LicenseExpireTime 企业许可证过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JoinTime 成员企业加入集团时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $FlowEngineEnable 是否可以使用审批流引擎
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsMainOrganization",$param) and $param["IsMainOrganization"] !== null) {
            $this->IsMainOrganization = $param["IsMainOrganization"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("AdminInfo",$param) and $param["AdminInfo"] !== null) {
            $this->AdminInfo = new Admin();
            $this->AdminInfo->deserialize($param["AdminInfo"]);
        }

        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("LicenseExpireTime",$param) and $param["LicenseExpireTime"] !== null) {
            $this->LicenseExpireTime = $param["LicenseExpireTime"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }

        if (array_key_exists("FlowEngineEnable",$param) and $param["FlowEngineEnable"] !== null) {
            $this->FlowEngineEnable = $param["FlowEngineEnable"];
        }
    }
}
