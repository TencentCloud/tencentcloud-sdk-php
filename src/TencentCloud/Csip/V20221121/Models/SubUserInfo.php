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
 * @method integer getID() 获取<p>主键ID，无业务意义仅作为唯一键</p>
 * @method void setID(integer $ID) 设置<p>主键ID，无业务意义仅作为唯一键</p>
 * @method string getAppID() 获取<p>子账号Appid</p>
 * @method void setAppID(string $AppID) 设置<p>子账号Appid</p>
 * @method string getUin() 获取<p>子账号UIn</p>
 * @method void setUin(string $Uin) 设置<p>子账号UIn</p>
 * @method string getNickName() 获取<p>子账号名称</p>
 * @method void setNickName(string $NickName) 设置<p>子账号名称</p>
 * @method string getOwnerAppID() 获取<p>主账号Appid</p>
 * @method void setOwnerAppID(string $OwnerAppID) 设置<p>主账号Appid</p>
 * @method string getOwnerUin() 获取<p>主账号Uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>主账号Uin</p>
 * @method string getOwnerNickName() 获取<p>主账号名称</p>
 * @method void setOwnerNickName(string $OwnerNickName) 设置<p>主账号名称</p>
 * @method string getOwnerMemberID() 获取<p>所属主账号memberId信息</p>
 * @method void setOwnerMemberID(string $OwnerMemberID) 设置<p>所属主账号memberId信息</p>
 * @method integer getCloudType() 获取<p>账户类型，0为腾讯云账户，1为AWS账户</p>
 * @method void setCloudType(integer $CloudType) 设置<p>账户类型，0为腾讯云账户，1为AWS账户</p>
 * @method integer getServiceCount() 获取<p>可访问服务数量</p>
 * @method void setServiceCount(integer $ServiceCount) 设置<p>可访问服务数量</p>
 * @method integer getInterfaceCount() 获取<p>可访问接口数量</p>
 * @method void setInterfaceCount(integer $InterfaceCount) 设置<p>可访问接口数量</p>
 * @method integer getAssetCount() 获取<p>可访问资源数量</p>
 * @method void setAssetCount(integer $AssetCount) 设置<p>可访问资源数量</p>
 * @method integer getLogCount() 获取<p>访问/行为日志数量</p>
 * @method void setLogCount(integer $LogCount) 设置<p>访问/行为日志数量</p>
 * @method integer getConfigRiskCount() 获取<p>权限配置风险</p>
 * @method void setConfigRiskCount(integer $ConfigRiskCount) 设置<p>权限配置风险</p>
 * @method integer getActionRiskCount() 获取<p>危险行为告警</p>
 * @method void setActionRiskCount(integer $ActionRiskCount) 设置<p>危险行为告警</p>
 * @method boolean getIsAccessCloudAudit() 获取<p>是否接入操作审计日志</p>
 * @method void setIsAccessCloudAudit(boolean $IsAccessCloudAudit) 设置<p>是否接入操作审计日志</p>
 * @method boolean getIsAccessCheck() 获取<p>是否配置风险的安全体检</p>
 * @method void setIsAccessCheck(boolean $IsAccessCheck) 设置<p>是否配置风险的安全体检</p>
 * @method boolean getIsAccessUeba() 获取<p>是否配置用户行为管理策略</p>
 * @method void setIsAccessUeba(boolean $IsAccessUeba) 设置<p>是否配置用户行为管理策略</p>
 * @method integer getCreateTime() 获取<p>创建时间（Unix时间戳）</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（Unix时间戳）</p>
 */
class SubUserInfo extends AbstractModel
{
    /**
     * @var integer <p>主键ID，无业务意义仅作为唯一键</p>
     */
    public $ID;

    /**
     * @var string <p>子账号Appid</p>
     */
    public $AppID;

    /**
     * @var string <p>子账号UIn</p>
     */
    public $Uin;

    /**
     * @var string <p>子账号名称</p>
     */
    public $NickName;

    /**
     * @var string <p>主账号Appid</p>
     */
    public $OwnerAppID;

    /**
     * @var string <p>主账号Uin</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>主账号名称</p>
     */
    public $OwnerNickName;

    /**
     * @var string <p>所属主账号memberId信息</p>
     */
    public $OwnerMemberID;

    /**
     * @var integer <p>账户类型，0为腾讯云账户，1为AWS账户</p>
     */
    public $CloudType;

    /**
     * @var integer <p>可访问服务数量</p>
     */
    public $ServiceCount;

    /**
     * @var integer <p>可访问接口数量</p>
     */
    public $InterfaceCount;

    /**
     * @var integer <p>可访问资源数量</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>访问/行为日志数量</p>
     */
    public $LogCount;

    /**
     * @var integer <p>权限配置风险</p>
     */
    public $ConfigRiskCount;

    /**
     * @var integer <p>危险行为告警</p>
     */
    public $ActionRiskCount;

    /**
     * @var boolean <p>是否接入操作审计日志</p>
     */
    public $IsAccessCloudAudit;

    /**
     * @var boolean <p>是否配置风险的安全体检</p>
     */
    public $IsAccessCheck;

    /**
     * @var boolean <p>是否配置用户行为管理策略</p>
     */
    public $IsAccessUeba;

    /**
     * @var integer <p>创建时间（Unix时间戳）</p>
     */
    public $CreateTime;

    /**
     * @param integer $ID <p>主键ID，无业务意义仅作为唯一键</p>
     * @param string $AppID <p>子账号Appid</p>
     * @param string $Uin <p>子账号UIn</p>
     * @param string $NickName <p>子账号名称</p>
     * @param string $OwnerAppID <p>主账号Appid</p>
     * @param string $OwnerUin <p>主账号Uin</p>
     * @param string $OwnerNickName <p>主账号名称</p>
     * @param string $OwnerMemberID <p>所属主账号memberId信息</p>
     * @param integer $CloudType <p>账户类型，0为腾讯云账户，1为AWS账户</p>
     * @param integer $ServiceCount <p>可访问服务数量</p>
     * @param integer $InterfaceCount <p>可访问接口数量</p>
     * @param integer $AssetCount <p>可访问资源数量</p>
     * @param integer $LogCount <p>访问/行为日志数量</p>
     * @param integer $ConfigRiskCount <p>权限配置风险</p>
     * @param integer $ActionRiskCount <p>危险行为告警</p>
     * @param boolean $IsAccessCloudAudit <p>是否接入操作审计日志</p>
     * @param boolean $IsAccessCheck <p>是否配置风险的安全体检</p>
     * @param boolean $IsAccessUeba <p>是否配置用户行为管理策略</p>
     * @param integer $CreateTime <p>创建时间（Unix时间戳）</p>
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
