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
 * 集团账号成员详情
 *
 * @method string getUin() 获取<p>成员账号Uin</p>
 * @method void setUin(string $Uin) 设置<p>成员账号Uin</p>
 * @method string getNickName() 获取<p>成员账号名称</p>
 * @method void setNickName(string $NickName) 设置<p>成员账号名称</p>
 * @method string getNodeName() 获取<p>部门节点名称，账号所属部门</p>
 * @method void setNodeName(string $NodeName) 设置<p>部门节点名称，账号所属部门</p>
 * @method integer getAssetCount() 获取<p>资产数量</p>
 * @method void setAssetCount(integer $AssetCount) 设置<p>资产数量</p>
 * @method integer getRiskCount() 获取<p>风险数量</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>风险数量</p>
 * @method integer getAttackCount() 获取<p>攻击数量</p>
 * @method void setAttackCount(integer $AttackCount) 设置<p>攻击数量</p>
 * @method string getRole() 获取<p>Member/Admin/;成员或者管理员</p>
 * @method void setRole(string $Role) 设置<p>Member/Admin/;成员或者管理员</p>
 * @method string getMemberId() 获取<p>成员账号id</p>
 * @method void setMemberId(string $MemberId) 设置<p>成员账号id</p>
 * @method string getAppId() 获取<p>成员账号Appid</p>
 * @method void setAppId(string $AppId) 设置<p>成员账号Appid</p>
 * @method string getJoinType() 获取<p>账号加入方式,create/invite</p>
 * @method void setJoinType(string $JoinType) 设置<p>账号加入方式,create/invite</p>
 * @method string getCFWProtect() 获取<p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
 * @method void setCFWProtect(string $CFWProtect) 设置<p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
 * @method string getWAFProtect() 获取<p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
 * @method void setWAFProtect(string $WAFProtect) 设置<p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
 * @method string getCWPProtect() 获取<p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
 * @method void setCWPProtect(string $CWPProtect) 设置<p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
 * @method integer getEnable() 获取<p>1启用，0未启用</p>
 * @method void setEnable(integer $Enable) 设置<p>1启用，0未启用</p>
 * @method string getCSIPProtect() 获取<p>&quot;Free&quot;       //免费版  &quot;Advanced&quot;   //高级版 &quot;Enterprise&quot; //企业版 &quot;Ultimate&quot;   //旗舰版</p>
 * @method void setCSIPProtect(string $CSIPProtect) 设置<p>&quot;Free&quot;       //免费版  &quot;Advanced&quot;   //高级版 &quot;Enterprise&quot; //企业版 &quot;Ultimate&quot;   //旗舰版</p>
 * @method integer getQuotaConsumer() 获取<p>1为配额消耗者</p>
 * @method void setQuotaConsumer(integer $QuotaConsumer) 设置<p>1为配额消耗者</p>
 * @method integer getCloudType() 获取<p>账户类型，0为腾讯云账户，1为AWS账户</p>
 * @method void setCloudType(integer $CloudType) 设置<p>账户类型，0为腾讯云账户，1为AWS账户</p>
 * @method integer getSyncFrequency() 获取<p>0为缺省值，1为10分钟，2为1小时，3为24小时</p>
 * @method void setSyncFrequency(integer $SyncFrequency) 设置<p>0为缺省值，1为10分钟，2为1小时，3为24小时</p>
 * @method boolean getIsExpired() 获取<p>多云账户是否过期</p>
 * @method void setIsExpired(boolean $IsExpired) 设置<p>多云账户是否过期</p>
 * @method array getPermissionList() 获取<p>多云账户 权限列表</p>
 * @method void setPermissionList(array $PermissionList) 设置<p>多云账户 权限列表</p>
 * @method integer getAuthType() 获取<p>账户权限类型</p><p>枚举值：</p><ul><li>1： 认证类型-Root账号AKSK</li><li>2： 认证类型-子账号AKSK</li><li>3： 认证类型-角色</li></ul>
 * @method void setAuthType(integer $AuthType) 设置<p>账户权限类型</p><p>枚举值：</p><ul><li>1： 认证类型-Root账号AKSK</li><li>2： 认证类型-子账号AKSK</li><li>3： 认证类型-角色</li></ul>
 * @method integer getTcMemberType() 获取<p>0 腾讯云集团账户<br>1 腾讯云接入账户<br>2 非腾讯云</p>
 * @method void setTcMemberType(integer $TcMemberType) 设置<p>0 腾讯云集团账户<br>1 腾讯云接入账户<br>2 非腾讯云</p>
 * @method integer getSubUserCount() 获取<p>子账号数量</p>
 * @method void setSubUserCount(integer $SubUserCount) 设置<p>子账号数量</p>
 * @method string getJoinTypeInfo() 获取<p>加入方式详细信息</p>
 * @method void setJoinTypeInfo(string $JoinTypeInfo) 设置<p>加入方式详细信息</p>
 * @method array getSharedModules() 获取<p>被共享模块列表</p><p>枚举值：</p><ul><li>AKSK： 云API异常监测</li><li>SDL： 日志分析</li><li>CSPM： 云安全态势管理</li><li>CWP： 主机安全</li><li>COS_AUDIT： COS审计</li><li>IMAGE_SCAN： 容器镜像扫描</li><li>SKILL_SCAN： Skill安全检测</li><li>SKILL_SCAN_POST： Skill安全检测(后付费)</li><li>DSPM： 数据安全态势管理</li></ul><p>默认值：[]</p>
 * @method void setSharedModules(array $SharedModules) 设置<p>被共享模块列表</p><p>枚举值：</p><ul><li>AKSK： 云API异常监测</li><li>SDL： 日志分析</li><li>CSPM： 云安全态势管理</li><li>CWP： 主机安全</li><li>COS_AUDIT： COS审计</li><li>IMAGE_SCAN： 容器镜像扫描</li><li>SKILL_SCAN： Skill安全检测</li><li>SKILL_SCAN_POST： Skill安全检测(后付费)</li><li>DSPM： 数据安全态势管理</li></ul><p>默认值：[]</p>
 * @method integer getSecurityScore() 获取<p>安全分</p>
 * @method void setSecurityScore(integer $SecurityScore) 设置<p>安全分</p>
 */
class OrganizationUserInfo extends AbstractModel
{
    /**
     * @var string <p>成员账号Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>成员账号名称</p>
     */
    public $NickName;

    /**
     * @var string <p>部门节点名称，账号所属部门</p>
     */
    public $NodeName;

    /**
     * @var integer <p>资产数量</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>风险数量</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>攻击数量</p>
     */
    public $AttackCount;

    /**
     * @var string <p>Member/Admin/;成员或者管理员</p>
     */
    public $Role;

    /**
     * @var string <p>成员账号id</p>
     */
    public $MemberId;

    /**
     * @var string <p>成员账号Appid</p>
     */
    public $AppId;

    /**
     * @var string <p>账号加入方式,create/invite</p>
     */
    public $JoinType;

    /**
     * @var string <p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
     */
    public $CFWProtect;

    /**
     * @var string <p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
     */
    public $WAFProtect;

    /**
     * @var string <p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
     */
    public $CWPProtect;

    /**
     * @var integer <p>1启用，0未启用</p>
     */
    public $Enable;

    /**
     * @var string <p>&quot;Free&quot;       //免费版  &quot;Advanced&quot;   //高级版 &quot;Enterprise&quot; //企业版 &quot;Ultimate&quot;   //旗舰版</p>
     */
    public $CSIPProtect;

    /**
     * @var integer <p>1为配额消耗者</p>
     */
    public $QuotaConsumer;

    /**
     * @var integer <p>账户类型，0为腾讯云账户，1为AWS账户</p>
     */
    public $CloudType;

    /**
     * @var integer <p>0为缺省值，1为10分钟，2为1小时，3为24小时</p>
     */
    public $SyncFrequency;

    /**
     * @var boolean <p>多云账户是否过期</p>
     */
    public $IsExpired;

    /**
     * @var array <p>多云账户 权限列表</p>
     */
    public $PermissionList;

    /**
     * @var integer <p>账户权限类型</p><p>枚举值：</p><ul><li>1： 认证类型-Root账号AKSK</li><li>2： 认证类型-子账号AKSK</li><li>3： 认证类型-角色</li></ul>
     */
    public $AuthType;

    /**
     * @var integer <p>0 腾讯云集团账户<br>1 腾讯云接入账户<br>2 非腾讯云</p>
     */
    public $TcMemberType;

    /**
     * @var integer <p>子账号数量</p>
     */
    public $SubUserCount;

    /**
     * @var string <p>加入方式详细信息</p>
     */
    public $JoinTypeInfo;

    /**
     * @var array <p>被共享模块列表</p><p>枚举值：</p><ul><li>AKSK： 云API异常监测</li><li>SDL： 日志分析</li><li>CSPM： 云安全态势管理</li><li>CWP： 主机安全</li><li>COS_AUDIT： COS审计</li><li>IMAGE_SCAN： 容器镜像扫描</li><li>SKILL_SCAN： Skill安全检测</li><li>SKILL_SCAN_POST： Skill安全检测(后付费)</li><li>DSPM： 数据安全态势管理</li></ul><p>默认值：[]</p>
     */
    public $SharedModules;

    /**
     * @var integer <p>安全分</p>
     */
    public $SecurityScore;

    /**
     * @param string $Uin <p>成员账号Uin</p>
     * @param string $NickName <p>成员账号名称</p>
     * @param string $NodeName <p>部门节点名称，账号所属部门</p>
     * @param integer $AssetCount <p>资产数量</p>
     * @param integer $RiskCount <p>风险数量</p>
     * @param integer $AttackCount <p>攻击数量</p>
     * @param string $Role <p>Member/Admin/;成员或者管理员</p>
     * @param string $MemberId <p>成员账号id</p>
     * @param string $AppId <p>成员账号Appid</p>
     * @param string $JoinType <p>账号加入方式,create/invite</p>
     * @param string $CFWProtect <p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
     * @param string $WAFProtect <p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
     * @param string $CWPProtect <p>空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本</p>
     * @param integer $Enable <p>1启用，0未启用</p>
     * @param string $CSIPProtect <p>&quot;Free&quot;       //免费版  &quot;Advanced&quot;   //高级版 &quot;Enterprise&quot; //企业版 &quot;Ultimate&quot;   //旗舰版</p>
     * @param integer $QuotaConsumer <p>1为配额消耗者</p>
     * @param integer $CloudType <p>账户类型，0为腾讯云账户，1为AWS账户</p>
     * @param integer $SyncFrequency <p>0为缺省值，1为10分钟，2为1小时，3为24小时</p>
     * @param boolean $IsExpired <p>多云账户是否过期</p>
     * @param array $PermissionList <p>多云账户 权限列表</p>
     * @param integer $AuthType <p>账户权限类型</p><p>枚举值：</p><ul><li>1： 认证类型-Root账号AKSK</li><li>2： 认证类型-子账号AKSK</li><li>3： 认证类型-角色</li></ul>
     * @param integer $TcMemberType <p>0 腾讯云集团账户<br>1 腾讯云接入账户<br>2 非腾讯云</p>
     * @param integer $SubUserCount <p>子账号数量</p>
     * @param string $JoinTypeInfo <p>加入方式详细信息</p>
     * @param array $SharedModules <p>被共享模块列表</p><p>枚举值：</p><ul><li>AKSK： 云API异常监测</li><li>SDL： 日志分析</li><li>CSPM： 云安全态势管理</li><li>CWP： 主机安全</li><li>COS_AUDIT： COS审计</li><li>IMAGE_SCAN： 容器镜像扫描</li><li>SKILL_SCAN： Skill安全检测</li><li>SKILL_SCAN_POST： Skill安全检测(后付费)</li><li>DSPM： 数据安全态势管理</li></ul><p>默认值：[]</p>
     * @param integer $SecurityScore <p>安全分</p>
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

        if (array_key_exists("SubUserCount",$param) and $param["SubUserCount"] !== null) {
            $this->SubUserCount = $param["SubUserCount"];
        }

        if (array_key_exists("JoinTypeInfo",$param) and $param["JoinTypeInfo"] !== null) {
            $this->JoinTypeInfo = $param["JoinTypeInfo"];
        }

        if (array_key_exists("SharedModules",$param) and $param["SharedModules"] !== null) {
            $this->SharedModules = $param["SharedModules"];
        }

        if (array_key_exists("SecurityScore",$param) and $param["SecurityScore"] !== null) {
            $this->SecurityScore = $param["SecurityScore"];
        }
    }
}
