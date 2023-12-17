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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集团账号成员详情
 *
 * @method string getUin() 获取成员账号Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置成员账号Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickName() 获取成员账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickName(string $NickName) 设置成员账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取部门节点名称，账号所属部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置部门节点名称，账号所属部门
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetCount() 获取资产数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCount(integer $AssetCount) 设置资产数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCount() 获取风险数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCount(integer $RiskCount) 设置风险数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackCount() 获取攻击数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackCount(integer $AttackCount) 设置攻击数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRole() 获取Member/Admin/;成员或者管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRole(string $Role) 设置Member/Admin/;成员或者管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberId() 获取成员账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberId(string $MemberId) 设置成员账号id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取成员账号Appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置成员账号Appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJoinType() 获取账号加入方式,create/invite
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJoinType(string $JoinType) 设置账号加入方式,create/invite
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCFWProtect() 获取空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFWProtect(string $CFWProtect) 设置空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWAFProtect() 获取空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWAFProtect(string $WAFProtect) 设置空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCWPProtect() 获取空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCWPProtect(string $CWPProtect) 设置空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取1启用，0未启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置1启用，0未启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCSIPProtect() 获取"Free"       //免费版  "Advanced"   //高级版 "Enterprise" //企业版 "Ultimate"   //旗舰版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCSIPProtect(string $CSIPProtect) 设置"Free"       //免费版  "Advanced"   //高级版 "Enterprise" //企业版 "Ultimate"   //旗舰版
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuotaConsumer() 获取1为配额消耗者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaConsumer(integer $QuotaConsumer) 设置1为配额消耗者
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloudType() 获取账户类型，0为腾讯云账户，1为AWS账户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(integer $CloudType) 设置账户类型，0为腾讯云账户，1为AWS账户
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSyncFrequency() 获取0为缺省值，1为10分钟，2为1小时，3为24小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyncFrequency(integer $SyncFrequency) 设置0为缺省值，1为10分钟，2为1小时，3为24小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsExpired() 获取多云账户是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExpired(boolean $IsExpired) 设置多云账户是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissionList() 获取多云账户 权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissionList(array $PermissionList) 设置多云账户 权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthType() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(integer $AuthType) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTcMemberType() 获取0 腾讯云集团账户
1 腾讯云接入账户
2 非腾讯云
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcMemberType(integer $TcMemberType) 设置0 腾讯云集团账户
1 腾讯云接入账户
2 非腾讯云
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrganizationUserInfo extends AbstractModel
{
    /**
     * @var string 成员账号Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 成员账号名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickName;

    /**
     * @var string 部门节点名称，账号所属部门
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var integer 资产数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCount;

    /**
     * @var integer 风险数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCount;

    /**
     * @var integer 攻击数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackCount;

    /**
     * @var string Member/Admin/;成员或者管理员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Role;

    /**
     * @var string 成员账号id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberId;

    /**
     * @var string 成员账号Appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 账号加入方式,create/invite
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JoinType;

    /**
     * @var string 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFWProtect;

    /**
     * @var string 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WAFProtect;

    /**
     * @var string 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CWPProtect;

    /**
     * @var integer 1启用，0未启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string "Free"       //免费版  "Advanced"   //高级版 "Enterprise" //企业版 "Ultimate"   //旗舰版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CSIPProtect;

    /**
     * @var integer 1为配额消耗者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaConsumer;

    /**
     * @var integer 账户类型，0为腾讯云账户，1为AWS账户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @var integer 0为缺省值，1为10分钟，2为1小时，3为24小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyncFrequency;

    /**
     * @var boolean 多云账户是否过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExpired;

    /**
     * @var array 多云账户 权限列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PermissionList;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var integer 0 腾讯云集团账户
1 腾讯云接入账户
2 非腾讯云
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcMemberType;

    /**
     * @param string $Uin 成员账号Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NickName 成员账号名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 部门节点名称，账号所属部门
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetCount 资产数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCount 风险数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackCount 攻击数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Role Member/Admin/;成员或者管理员
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberId 成员账号id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 成员账号Appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JoinType 账号加入方式,create/invite
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CFWProtect 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WAFProtect 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CWPProtect 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable 1启用，0未启用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CSIPProtect "Free"       //免费版  "Advanced"   //高级版 "Enterprise" //企业版 "Ultimate"   //旗舰版
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QuotaConsumer 1为配额消耗者
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloudType 账户类型，0为腾讯云账户，1为AWS账户
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SyncFrequency 0为缺省值，1为10分钟，2为1小时，3为24小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsExpired 多云账户是否过期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PermissionList 多云账户 权限列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthType 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TcMemberType 0 腾讯云集团账户
1 腾讯云接入账户
2 非腾讯云
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }

        if (array_key_exists("CFWProtect",$param) and $param["CFWProtect"] !== null) {
            $this->CFWProtect = $param["CFWProtect"];
        }

        if (array_key_exists("WAFProtect",$param) and $param["WAFProtect"] !== null) {
            $this->WAFProtect = $param["WAFProtect"];
        }

        if (array_key_exists("CWPProtect",$param) and $param["CWPProtect"] !== null) {
            $this->CWPProtect = $param["CWPProtect"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CSIPProtect",$param) and $param["CSIPProtect"] !== null) {
            $this->CSIPProtect = $param["CSIPProtect"];
        }

        if (array_key_exists("QuotaConsumer",$param) and $param["QuotaConsumer"] !== null) {
            $this->QuotaConsumer = $param["QuotaConsumer"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("SyncFrequency",$param) and $param["SyncFrequency"] !== null) {
            $this->SyncFrequency = $param["SyncFrequency"];
        }

        if (array_key_exists("IsExpired",$param) and $param["IsExpired"] !== null) {
            $this->IsExpired = $param["IsExpired"];
        }

        if (array_key_exists("PermissionList",$param) and $param["PermissionList"] !== null) {
            $this->PermissionList = $param["PermissionList"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("TcMemberType",$param) and $param["TcMemberType"] !== null) {
            $this->TcMemberType = $param["TcMemberType"];
        }
    }
}
