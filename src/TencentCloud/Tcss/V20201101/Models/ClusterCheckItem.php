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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一条集群安全检测项的详细信息
 *
 * @method integer getCheckItemId() 获取唯一的检测项的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckItemId(integer $CheckItemId) 设置唯一的检测项的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取风险项的名称
 * @method void setName(string $Name) 设置风险项的名称
 * @method string getItemDetail() 获取检测项详细描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemDetail(string $ItemDetail) 设置检测项详细描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取威胁等级。严重Serious,高危High,中危Middle,提示Hint
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置威胁等级。严重Serious,高危High,中危Middle,提示Hint
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskTarget() 获取检查对象、风险对象.Runc,Kubelet,Containerd,Pods
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskTarget(string $RiskTarget) 设置检查对象、风险对象.Runc,Kubelet,Containerd,Pods
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskType() 获取风险类别,漏洞风险CVERisk,配置风险ConfigRisk
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskType(string $RiskType) 设置风险类别,漏洞风险CVERisk,配置风险ConfigRisk
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskAttribute() 获取检测项所属的风险类型,权限提升:PrivilegePromotion,拒绝服务:RefuseService,目录穿越:DirectoryEscape,未授权访问:UnauthorizedAccess,权限许可和访问控制问题:PrivilegeAndAccessControl,敏感信息泄露:SensitiveInfoLeak
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskAttribute(string $RiskAttribute) 设置检测项所属的风险类型,权限提升:PrivilegePromotion,拒绝服务:RefuseService,目录穿越:DirectoryEscape,未授权访问:UnauthorizedAccess,权限许可和访问控制问题:PrivilegeAndAccessControl,敏感信息泄露:SensitiveInfoLeak
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskProperty() 获取风险特征,Tag.存在EXP:ExistEXP,存在POD:ExistPOC,无需重启:NoNeedReboot, 服务重启:ServerRestart,远程信息泄露:RemoteInfoLeak,远程拒绝服务:RemoteRefuseService,远程利用:RemoteExploit,远程执行:RemoteExecute
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskProperty(string $RiskProperty) 设置风险特征,Tag.存在EXP:ExistEXP,存在POD:ExistPOC,无需重启:NoNeedReboot, 服务重启:ServerRestart,远程信息泄露:RemoteInfoLeak,远程拒绝服务:RemoteRefuseService,远程利用:RemoteExploit,远程执行:RemoteExecute
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCVENumber() 获取CVE编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVENumber(string $CVENumber) 设置CVE编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiscoverTime() 获取披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscoverTime(string $DiscoverTime) 设置披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSolution() 获取解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSolution(string $Solution) 设置解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCVSS() 获取CVSS信息,用于画图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVSS(string $CVSS) 设置CVSS信息,用于画图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCVSSScore() 获取CVSS分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVSSScore(string $CVSSScore) 设置CVSS分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelateLink() 获取参考连接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelateLink(string $RelateLink) 设置参考连接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAffectedType() 获取影响类型，为Node或者Workload
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedType(string $AffectedType) 设置影响类型，为Node或者Workload
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAffectedVersion() 获取受影响的版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedVersion(string $AffectedVersion) 设置受影响的版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIgnoredAssetNum() 获取忽略的资产数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoredAssetNum(integer $IgnoredAssetNum) 设置忽略的资产数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsIgnored() 获取是否忽略该检测项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIgnored(boolean $IsIgnored) 设置是否忽略该检测项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskAssessment() 获取受影响评估
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskAssessment(string $RiskAssessment) 设置受影响评估
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterCheckItem extends AbstractModel
{
    /**
     * @var integer 唯一的检测项的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckItemId;

    /**
     * @var string 风险项的名称
     */
    public $Name;

    /**
     * @var string 检测项详细描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemDetail;

    /**
     * @var string 威胁等级。严重Serious,高危High,中危Middle,提示Hint
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 检查对象、风险对象.Runc,Kubelet,Containerd,Pods
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskTarget;

    /**
     * @var string 风险类别,漏洞风险CVERisk,配置风险ConfigRisk
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskType;

    /**
     * @var string 检测项所属的风险类型,权限提升:PrivilegePromotion,拒绝服务:RefuseService,目录穿越:DirectoryEscape,未授权访问:UnauthorizedAccess,权限许可和访问控制问题:PrivilegeAndAccessControl,敏感信息泄露:SensitiveInfoLeak
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskAttribute;

    /**
     * @var string 风险特征,Tag.存在EXP:ExistEXP,存在POD:ExistPOC,无需重启:NoNeedReboot, 服务重启:ServerRestart,远程信息泄露:RemoteInfoLeak,远程拒绝服务:RemoteRefuseService,远程利用:RemoteExploit,远程执行:RemoteExecute
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskProperty;

    /**
     * @var string CVE编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVENumber;

    /**
     * @var string 披露时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscoverTime;

    /**
     * @var string 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Solution;

    /**
     * @var string CVSS信息,用于画图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVSS;

    /**
     * @var string CVSS分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVSSScore;

    /**
     * @var string 参考连接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelateLink;

    /**
     * @var string 影响类型，为Node或者Workload
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedType;

    /**
     * @var string 受影响的版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedVersion;

    /**
     * @var integer 忽略的资产数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoredAssetNum;

    /**
     * @var boolean 是否忽略该检测项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIgnored;

    /**
     * @var string 受影响评估
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskAssessment;

    /**
     * @param integer $CheckItemId 唯一的检测项的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 风险项的名称
     * @param string $ItemDetail 检测项详细描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 威胁等级。严重Serious,高危High,中危Middle,提示Hint
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskTarget 检查对象、风险对象.Runc,Kubelet,Containerd,Pods
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskType 风险类别,漏洞风险CVERisk,配置风险ConfigRisk
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskAttribute 检测项所属的风险类型,权限提升:PrivilegePromotion,拒绝服务:RefuseService,目录穿越:DirectoryEscape,未授权访问:UnauthorizedAccess,权限许可和访问控制问题:PrivilegeAndAccessControl,敏感信息泄露:SensitiveInfoLeak
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskProperty 风险特征,Tag.存在EXP:ExistEXP,存在POD:ExistPOC,无需重启:NoNeedReboot, 服务重启:ServerRestart,远程信息泄露:RemoteInfoLeak,远程拒绝服务:RemoteRefuseService,远程利用:RemoteExploit,远程执行:RemoteExecute
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CVENumber CVE编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiscoverTime 披露时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Solution 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CVSS CVSS信息,用于画图
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CVSSScore CVSS分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelateLink 参考连接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AffectedType 影响类型，为Node或者Workload
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AffectedVersion 受影响的版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IgnoredAssetNum 忽略的资产数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsIgnored 是否忽略该检测项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskAssessment 受影响评估
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
        if (array_key_exists("CheckItemId",$param) and $param["CheckItemId"] !== null) {
            $this->CheckItemId = $param["CheckItemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ItemDetail",$param) and $param["ItemDetail"] !== null) {
            $this->ItemDetail = $param["ItemDetail"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskTarget",$param) and $param["RiskTarget"] !== null) {
            $this->RiskTarget = $param["RiskTarget"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RiskAttribute",$param) and $param["RiskAttribute"] !== null) {
            $this->RiskAttribute = $param["RiskAttribute"];
        }

        if (array_key_exists("RiskProperty",$param) and $param["RiskProperty"] !== null) {
            $this->RiskProperty = $param["RiskProperty"];
        }

        if (array_key_exists("CVENumber",$param) and $param["CVENumber"] !== null) {
            $this->CVENumber = $param["CVENumber"];
        }

        if (array_key_exists("DiscoverTime",$param) and $param["DiscoverTime"] !== null) {
            $this->DiscoverTime = $param["DiscoverTime"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("CVSSScore",$param) and $param["CVSSScore"] !== null) {
            $this->CVSSScore = $param["CVSSScore"];
        }

        if (array_key_exists("RelateLink",$param) and $param["RelateLink"] !== null) {
            $this->RelateLink = $param["RelateLink"];
        }

        if (array_key_exists("AffectedType",$param) and $param["AffectedType"] !== null) {
            $this->AffectedType = $param["AffectedType"];
        }

        if (array_key_exists("AffectedVersion",$param) and $param["AffectedVersion"] !== null) {
            $this->AffectedVersion = $param["AffectedVersion"];
        }

        if (array_key_exists("IgnoredAssetNum",$param) and $param["IgnoredAssetNum"] !== null) {
            $this->IgnoredAssetNum = $param["IgnoredAssetNum"];
        }

        if (array_key_exists("IsIgnored",$param) and $param["IsIgnored"] !== null) {
            $this->IsIgnored = $param["IsIgnored"];
        }

        if (array_key_exists("RiskAssessment",$param) and $param["RiskAssessment"] !== null) {
            $this->RiskAssessment = $param["RiskAssessment"];
        }
    }
}
