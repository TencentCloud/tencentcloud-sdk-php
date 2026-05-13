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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产账号信息
 *
 * @method string getAccount() 获取账号名
 * @method void setAccount(string $Account) 设置账号名
 * @method string getHost() 获取主机地址
 * @method void setHost(string $Host) 设置主机地址
 * @method integer getAccountType() 获取账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
 * @method void setAccountType(integer $AccountType) 设置账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
 * @method string getSubject() 获取所属对象。uin或个人id
 * @method void setSubject(string $Subject) 设置所属对象。uin或个人id
 * @method DspmDbAccountPrivilege getPrivilege() 获取权限信息
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) 设置权限信息
 * @method integer getStatus() 获取状态。 0-不活跃 1-活跃 2-已删除
 * @method void setStatus(integer $Status) 设置状态。 0-不活跃 1-活跃 2-已删除
 * @method string getCreateTime() 获取账号创建时间。
 * @method void setCreateTime(string $CreateTime) 设置账号创建时间。
 * @method string getValidateFrom() 获取访问权限生效时间。
 * @method void setValidateFrom(string $ValidateFrom) 设置访问权限生效时间。
 * @method string getValidateTo() 获取访问权限失效时间。
 * @method void setValidateTo(string $ValidateTo) 设置访问权限失效时间。
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method integer getIsNewAccount() 获取是否新账号
 * @method void setIsNewAccount(integer $IsNewAccount) 设置是否新账号
 * @method integer getIdentifyType() 获取身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
 * @method void setIdentifyType(integer $IdentifyType) 设置身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
 * @method DspmUinUser getOwnerUin() 获取所属云账号uin用户。
 * @method void setOwnerUin(DspmUinUser $OwnerUin) 设置所属云账号uin用户。
 * @method DspmPersonUser getPerson() 获取所属个人用户信息。
 * @method void setPerson(DspmPersonUser $Person) 设置所属个人用户信息。
 * @method DspmRiskCount getRiskCount() 获取风险统计信息
 * @method void setRiskCount(DspmRiskCount $RiskCount) 设置风险统计信息
 * @method DspmDbAccountPrivilege getPresetPrivilege() 获取预设权限。
 * @method void setPresetPrivilege(DspmDbAccountPrivilege $PresetPrivilege) 设置预设权限。
 */
class DspmAssetAccount extends AbstractModel
{
    /**
     * @var string 账号名
     */
    public $Account;

    /**
     * @var string 主机地址
     */
    public $Host;

    /**
     * @var integer 账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
     */
    public $AccountType;

    /**
     * @var string 所属对象。uin或个人id
     */
    public $Subject;

    /**
     * @var DspmDbAccountPrivilege 权限信息
     */
    public $Privilege;

    /**
     * @var integer 状态。 0-不活跃 1-活跃 2-已删除
     */
    public $Status;

    /**
     * @var string 账号创建时间。
     */
    public $CreateTime;

    /**
     * @var string 访问权限生效时间。
     */
    public $ValidateFrom;

    /**
     * @var string 访问权限失效时间。
     */
    public $ValidateTo;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var integer 是否新账号
     */
    public $IsNewAccount;

    /**
     * @var integer 身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
     */
    public $IdentifyType;

    /**
     * @var DspmUinUser 所属云账号uin用户。
     */
    public $OwnerUin;

    /**
     * @var DspmPersonUser 所属个人用户信息。
     */
    public $Person;

    /**
     * @var DspmRiskCount 风险统计信息
     */
    public $RiskCount;

    /**
     * @var DspmDbAccountPrivilege 预设权限。
     */
    public $PresetPrivilege;

    /**
     * @param string $Account 账号名
     * @param string $Host 主机地址
     * @param integer $AccountType 账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
     * @param string $Subject 所属对象。uin或个人id
     * @param DspmDbAccountPrivilege $Privilege 权限信息
     * @param integer $Status 状态。 0-不活跃 1-活跃 2-已删除
     * @param string $CreateTime 账号创建时间。
     * @param string $ValidateFrom 访问权限生效时间。
     * @param string $ValidateTo 访问权限失效时间。
     * @param string $Remark 备注
     * @param string $AssetId 资产id
     * @param integer $IsNewAccount 是否新账号
     * @param integer $IdentifyType 身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
     * @param DspmUinUser $OwnerUin 所属云账号uin用户。
     * @param DspmPersonUser $Person 所属个人用户信息。
     * @param DspmRiskCount $RiskCount 风险统计信息
     * @param DspmDbAccountPrivilege $PresetPrivilege 预设权限。
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ValidateFrom",$param) and $param["ValidateFrom"] !== null) {
            $this->ValidateFrom = $param["ValidateFrom"];
        }

        if (array_key_exists("ValidateTo",$param) and $param["ValidateTo"] !== null) {
            $this->ValidateTo = $param["ValidateTo"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("IsNewAccount",$param) and $param["IsNewAccount"] !== null) {
            $this->IsNewAccount = $param["IsNewAccount"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("PresetPrivilege",$param) and $param["PresetPrivilege"] !== null) {
            $this->PresetPrivilege = new DspmDbAccountPrivilege();
            $this->PresetPrivilege->deserialize($param["PresetPrivilege"]);
        }
    }
}
