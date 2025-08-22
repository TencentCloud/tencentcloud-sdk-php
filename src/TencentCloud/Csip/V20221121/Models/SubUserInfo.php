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
 * 子账号详情
 *
 * @method integer getID() 获取主键ID，无业务意义仅作为唯一键
 * @method void setID(integer $ID) 设置主键ID，无业务意义仅作为唯一键
 * @method string getAppID() 获取子账号Appid
 * @method void setAppID(string $AppID) 设置子账号Appid
 * @method string getUin() 获取子账号UIn
 * @method void setUin(string $Uin) 设置子账号UIn
 * @method string getNickName() 获取子账号名称
 * @method void setNickName(string $NickName) 设置子账号名称
 * @method string getOwnerAppID() 获取主账号Appid
 * @method void setOwnerAppID(string $OwnerAppID) 设置主账号Appid
 * @method string getOwnerUin() 获取主账号Uin
 * @method void setOwnerUin(string $OwnerUin) 设置主账号Uin
 * @method string getOwnerNickName() 获取主账号名称
 * @method void setOwnerNickName(string $OwnerNickName) 设置主账号名称
 * @method string getOwnerMemberID() 获取所属主账号memberId信息
 * @method void setOwnerMemberID(string $OwnerMemberID) 设置所属主账号memberId信息
 * @method integer getCloudType() 获取账户类型，0为腾讯云账户，1为AWS账户
 * @method void setCloudType(integer $CloudType) 设置账户类型，0为腾讯云账户，1为AWS账户
 * @method integer getServiceCount() 获取可访问服务数量
 * @method void setServiceCount(integer $ServiceCount) 设置可访问服务数量
 * @method integer getInterfaceCount() 获取可访问接口数量
 * @method void setInterfaceCount(integer $InterfaceCount) 设置可访问接口数量
 * @method integer getAssetCount() 获取可访问资源数量
 * @method void setAssetCount(integer $AssetCount) 设置可访问资源数量
 * @method integer getLogCount() 获取访问/行为日志数量
 * @method void setLogCount(integer $LogCount) 设置访问/行为日志数量
 * @method integer getConfigRiskCount() 获取权限配置风险
 * @method void setConfigRiskCount(integer $ConfigRiskCount) 设置权限配置风险
 * @method integer getActionRiskCount() 获取危险行为告警
 * @method void setActionRiskCount(integer $ActionRiskCount) 设置危险行为告警
 * @method boolean getIsAccessCloudAudit() 获取是否接入操作审计日志
 * @method void setIsAccessCloudAudit(boolean $IsAccessCloudAudit) 设置是否接入操作审计日志
 * @method boolean getIsAccessCheck() 获取是否配置风险的安全体检
 * @method void setIsAccessCheck(boolean $IsAccessCheck) 设置是否配置风险的安全体检
 * @method boolean getIsAccessUeba() 获取是否配置用户行为管理策略
 * @method void setIsAccessUeba(boolean $IsAccessUeba) 设置是否配置用户行为管理策略
 */
class SubUserInfo extends AbstractModel
{
    /**
     * @var integer 主键ID，无业务意义仅作为唯一键
     */
    public $ID;

    /**
     * @var string 子账号Appid
     */
    public $AppID;

    /**
     * @var string 子账号UIn
     */
    public $Uin;

    /**
     * @var string 子账号名称
     */
    public $NickName;

    /**
     * @var string 主账号Appid
     */
    public $OwnerAppID;

    /**
     * @var string 主账号Uin
     */
    public $OwnerUin;

    /**
     * @var string 主账号名称
     */
    public $OwnerNickName;

    /**
     * @var string 所属主账号memberId信息
     */
    public $OwnerMemberID;

    /**
     * @var integer 账户类型，0为腾讯云账户，1为AWS账户
     */
    public $CloudType;

    /**
     * @var integer 可访问服务数量
     */
    public $ServiceCount;

    /**
     * @var integer 可访问接口数量
     */
    public $InterfaceCount;

    /**
     * @var integer 可访问资源数量
     */
    public $AssetCount;

    /**
     * @var integer 访问/行为日志数量
     */
    public $LogCount;

    /**
     * @var integer 权限配置风险
     */
    public $ConfigRiskCount;

    /**
     * @var integer 危险行为告警
     */
    public $ActionRiskCount;

    /**
     * @var boolean 是否接入操作审计日志
     */
    public $IsAccessCloudAudit;

    /**
     * @var boolean 是否配置风险的安全体检
     */
    public $IsAccessCheck;

    /**
     * @var boolean 是否配置用户行为管理策略
     */
    public $IsAccessUeba;

    /**
     * @param integer $ID 主键ID，无业务意义仅作为唯一键
     * @param string $AppID 子账号Appid
     * @param string $Uin 子账号UIn
     * @param string $NickName 子账号名称
     * @param string $OwnerAppID 主账号Appid
     * @param string $OwnerUin 主账号Uin
     * @param string $OwnerNickName 主账号名称
     * @param string $OwnerMemberID 所属主账号memberId信息
     * @param integer $CloudType 账户类型，0为腾讯云账户，1为AWS账户
     * @param integer $ServiceCount 可访问服务数量
     * @param integer $InterfaceCount 可访问接口数量
     * @param integer $AssetCount 可访问资源数量
     * @param integer $LogCount 访问/行为日志数量
     * @param integer $ConfigRiskCount 权限配置风险
     * @param integer $ActionRiskCount 危险行为告警
     * @param boolean $IsAccessCloudAudit 是否接入操作审计日志
     * @param boolean $IsAccessCheck 是否配置风险的安全体检
     * @param boolean $IsAccessUeba 是否配置用户行为管理策略
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("OwnerAppID",$param) and $param["OwnerAppID"] !== null) {
            $this->OwnerAppID = $param["OwnerAppID"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerNickName",$param) and $param["OwnerNickName"] !== null) {
            $this->OwnerNickName = $param["OwnerNickName"];
        }

        if (array_key_exists("OwnerMemberID",$param) and $param["OwnerMemberID"] !== null) {
            $this->OwnerMemberID = $param["OwnerMemberID"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("InterfaceCount",$param) and $param["InterfaceCount"] !== null) {
            $this->InterfaceCount = $param["InterfaceCount"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("LogCount",$param) and $param["LogCount"] !== null) {
            $this->LogCount = $param["LogCount"];
        }

        if (array_key_exists("ConfigRiskCount",$param) and $param["ConfigRiskCount"] !== null) {
            $this->ConfigRiskCount = $param["ConfigRiskCount"];
        }

        if (array_key_exists("ActionRiskCount",$param) and $param["ActionRiskCount"] !== null) {
            $this->ActionRiskCount = $param["ActionRiskCount"];
        }

        if (array_key_exists("IsAccessCloudAudit",$param) and $param["IsAccessCloudAudit"] !== null) {
            $this->IsAccessCloudAudit = $param["IsAccessCloudAudit"];
        }

        if (array_key_exists("IsAccessCheck",$param) and $param["IsAccessCheck"] !== null) {
            $this->IsAccessCheck = $param["IsAccessCheck"];
        }

        if (array_key_exists("IsAccessUeba",$param) and $param["IsAccessUeba"] !== null) {
            $this->IsAccessUeba = $param["IsAccessUeba"];
        }
    }
}
