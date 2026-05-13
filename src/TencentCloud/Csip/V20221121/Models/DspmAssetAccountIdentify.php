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
 * 资产账号身份信息
 *
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method DspmUinUser getOwnerUin() 获取所属云账号uin用户。
 * @method void setOwnerUin(DspmUinUser $OwnerUin) 设置所属云账号uin用户。
 * @method integer getIsManager() 获取是否管理员
 * @method void setIsManager(integer $IsManager) 设置是否管理员
 * @method string getHost() 获取主机地址
 * @method void setHost(string $Host) 设置主机地址
 * @method integer getAccountType() 获取账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
 * @method void setAccountType(integer $AccountType) 设置账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
 * @method DspmDbAccountPrivilege getPrivilege() 获取权限信息
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) 设置权限信息
 * @method integer getStatus() 获取活跃状态。 0-不活跃 1-活跃
 * @method void setStatus(integer $Status) 设置活跃状态。 0-不活跃 1-活跃
 * @method string getCreateTime() 获取账号创建时间。
 * @method void setCreateTime(string $CreateTime) 设置账号创建时间。
 * @method string getValidateFrom() 获取访问权限生效时间。
 * @method void setValidateFrom(string $ValidateFrom) 设置访问权限生效时间。
 * @method string getValidateTo() 获取访问权限失效时间。
 * @method void setValidateTo(string $ValidateTo) 设置访问权限失效时间。
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getPersonApplyCount() 获取访客权限申请次数
 * @method void setPersonApplyCount(integer $PersonApplyCount) 设置访客权限申请次数
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getRegion() 获取所属地域
 * @method void setRegion(string $Region) 设置所属地域
 * @method DspmRiskCount getRiskCount() 获取风险统计信息
 * @method void setRiskCount(DspmRiskCount $RiskCount) 设置风险统计信息
 * @method integer getIdentifyType() 获取身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
 * @method void setIdentifyType(integer $IdentifyType) 设置身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
 * @method DspmPersonUser getPerson() 获取所属个人用户信息。
 * @method void setPerson(DspmPersonUser $Person) 设置所属个人用户信息。
 * @method DspmUinUser getCreatorUin() 获取创建者账号uin用户。
 * @method void setCreatorUin(DspmUinUser $CreatorUin) 设置创建者账号uin用户。
 * @method DspmDbAccountPrivilege getPresetPrivilege() 获取预设权限。
 * @method void setPresetPrivilege(DspmDbAccountPrivilege $PresetPrivilege) 设置预设权限。
 * @method string getPrivateIp() 获取内网访问地址，如果有多个，使用';'分割
 * @method void setPrivateIp(string $PrivateIp) 设置内网访问地址，如果有多个，使用';'分割
 * @method string getIdentifyId() 获取身份id
 * @method void setIdentifyId(string $IdentifyId) 设置身份id
 * @method integer getAppId() 获取资产所属账号app id
 * @method void setAppId(integer $AppId) 设置资产所属账号app id
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method string getUin() 获取资产所属账号uin
 * @method void setUin(string $Uin) 设置资产所属账号uin
 */
class DspmAssetAccountIdentify extends AbstractModel
{
    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var DspmUinUser 所属云账号uin用户。
     */
    public $OwnerUin;

    /**
     * @var integer 是否管理员
     */
    public $IsManager;

    /**
     * @var string 主机地址
     */
    public $Host;

    /**
     * @var integer 账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
     */
    public $AccountType;

    /**
     * @var DspmDbAccountPrivilege 权限信息
     */
    public $Privilege;

    /**
     * @var integer 活跃状态。 0-不活跃 1-活跃
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
     * @var integer 访客权限申请次数
     */
    public $PersonApplyCount;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 所属地域
     */
    public $Region;

    /**
     * @var DspmRiskCount 风险统计信息
     */
    public $RiskCount;

    /**
     * @var integer 身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
     */
    public $IdentifyType;

    /**
     * @var DspmPersonUser 所属个人用户信息。
     */
    public $Person;

    /**
     * @var DspmUinUser 创建者账号uin用户。
     */
    public $CreatorUin;

    /**
     * @var DspmDbAccountPrivilege 预设权限。
     */
    public $PresetPrivilege;

    /**
     * @var string 内网访问地址，如果有多个，使用';'分割
     */
    public $PrivateIp;

    /**
     * @var string 身份id
     */
    public $IdentifyId;

    /**
     * @var integer 资产所属账号app id
     */
    public $AppId;

    /**
     * @var string 账号昵称
     */
    public $NickName;

    /**
     * @var string 资产所属账号uin
     */
    public $Uin;

    /**
     * @param string $AssetId 资产id
     * @param DspmUinUser $OwnerUin 所属云账号uin用户。
     * @param integer $IsManager 是否管理员
     * @param string $Host 主机地址
     * @param integer $AccountType 账号类型。 0-未定义 1-服务账号 2-个人账号 3-临时账号
     * @param DspmDbAccountPrivilege $Privilege 权限信息
     * @param integer $Status 活跃状态。 0-不活跃 1-活跃
     * @param string $CreateTime 账号创建时间。
     * @param string $ValidateFrom 访问权限生效时间。
     * @param string $ValidateTo 访问权限失效时间。
     * @param string $Remark 备注
     * @param integer $PersonApplyCount 访客权限申请次数
     * @param string $AssetName 资产名
     * @param string $AssetType 资产类型
     * @param string $Region 所属地域
     * @param DspmRiskCount $RiskCount 风险统计信息
     * @param integer $IdentifyType 身份类型。非身份账号为null。0-未定义 2-长期身份 3-临时身份
     * @param DspmPersonUser $Person 所属个人用户信息。
     * @param DspmUinUser $CreatorUin 创建者账号uin用户。
     * @param DspmDbAccountPrivilege $PresetPrivilege 预设权限。
     * @param string $PrivateIp 内网访问地址，如果有多个，使用';'分割
     * @param string $IdentifyId 身份id
     * @param integer $AppId 资产所属账号app id
     * @param string $NickName 账号昵称
     * @param string $Uin 资产所属账号uin
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("IsManager",$param) and $param["IsManager"] !== null) {
            $this->IsManager = $param["IsManager"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
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

        if (array_key_exists("PersonApplyCount",$param) and $param["PersonApplyCount"] !== null) {
            $this->PersonApplyCount = $param["PersonApplyCount"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = new DspmUinUser();
            $this->CreatorUin->deserialize($param["CreatorUin"]);
        }

        if (array_key_exists("PresetPrivilege",$param) and $param["PresetPrivilege"] !== null) {
            $this->PresetPrivilege = new DspmDbAccountPrivilege();
            $this->PresetPrivilege->deserialize($param["PresetPrivilege"]);
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
