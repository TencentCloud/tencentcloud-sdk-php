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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageDenyRuleDetail返回参数结构体
 *
 * @method integer getID() 获取规则ID
 * @method void setID(integer $ID) 设置规则ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getRuleType() 获取规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
 * @method void setRuleType(string $RuleType) 设置规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
 * @method integer getEffectImageCount() 获取生效的镜像数量
 * @method void setEffectImageCount(integer $EffectImageCount) 设置生效的镜像数量
 * @method integer getIsEffectAllImage() 获取是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
 * @method void setIsEffectAllImage(integer $IsEffectAllImage) 设置是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
 * @method string getEffectTime() 获取规则开始生效时间
 * @method void setEffectTime(string $EffectTime) 设置规则开始生效时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getOperationUin() 获取操作用户
 * @method void setOperationUin(string $OperationUin) 设置操作用户
 * @method string getEffectStatus() 获取生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
 * @method void setEffectStatus(string $EffectStatus) 设置生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
 * @method string getRuleDescription() 获取规则描述
 * @method void setRuleDescription(string $RuleDescription) 设置规则描述
 * @method integer getStatus() 获取启用状态 0:开启，1:关闭
 * @method void setStatus(integer $Status) 设置启用状态 0:开启，1:关闭
 * @method integer getVul() 获取漏洞，0:未选中，1:选中
 * @method void setVul(integer $Vul) 设置漏洞，0:未选中，1:选中
 * @method array getCVEIDSet() 获取cve编号
 * @method void setCVEIDSet(array $CVEIDSet) 设置cve编号
 * @method array getComponentSet() 获取组件编号
 * @method void setComponentSet(array $ComponentSet) 设置组件编号
 * @method array getVulClassSet() 获取漏洞分类
 * @method void setVulClassSet(array $VulClassSet) 设置漏洞分类
 * @method array getVulLevelSet() 获取漏洞等级
 * @method void setVulLevelSet(array $VulLevelSet) 设置漏洞等级
 * @method array getVulLabelSet() 获取漏洞标签
 * @method void setVulLabelSet(array $VulLabelSet) 设置漏洞标签
 * @method integer getVirus() 获取木马，0:未选中，1:选中
 * @method void setVirus(integer $Virus) 设置木马，0:未选中，1:选中
 * @method array getVirusMD5Set() 获取木马md5列表
 * @method void setVirusMD5Set(array $VirusMD5Set) 设置木马md5列表
 * @method array getVirusLevelSet() 获取木马等级
 * @method void setVirusLevelSet(array $VirusLevelSet) 设置木马等级
 * @method array getVirusName() 获取病毒名
 * @method void setVirusName(array $VirusName) 设置病毒名
 * @method integer getRisk() 获取敏感信息，0:未选中，1:选中
 * @method void setRisk(integer $Risk) 设置敏感信息，0:未选中，1:选中
 * @method array getRiskLevelSet() 获取敏感等级
 * @method void setRiskLevelSet(array $RiskLevelSet) 设置敏感等级
 * @method array getRiskType() 获取敏感信息分类
 * @method void setRiskType(array $RiskType) 设置敏感信息分类
 * @method integer getPrivilegeRun() 获取特权启动 0:不允许，1:允许
 * @method void setPrivilegeRun(integer $PrivilegeRun) 设置特权启动 0:不允许，1:允许
 * @method array getPrivilegeDetail() 获取特权类型,
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeDetail(array $PrivilegeDetail) 设置特权类型,
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEffectImageSet() 获取镜像ID列表
 * @method void setEffectImageSet(array $EffectImageSet) 设置镜像ID列表
 * @method integer getEffectDay() 获取多少天后生效
 * @method void setEffectDay(integer $EffectDay) 设置多少天后生效
 * @method string getRuleID() 获取规则RuelD
 * @method void setRuleID(string $RuleID) 设置规则RuelD
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageDenyRuleDetailResponse extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $ID;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
     */
    public $RuleType;

    /**
     * @var integer 生效的镜像数量
     */
    public $EffectImageCount;

    /**
     * @var integer 是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
     */
    public $IsEffectAllImage;

    /**
     * @var string 规则开始生效时间
     */
    public $EffectTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 操作用户
     */
    public $OperationUin;

    /**
     * @var string 生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
     */
    public $EffectStatus;

    /**
     * @var string 规则描述
     */
    public $RuleDescription;

    /**
     * @var integer 启用状态 0:开启，1:关闭
     */
    public $Status;

    /**
     * @var integer 漏洞，0:未选中，1:选中
     */
    public $Vul;

    /**
     * @var array cve编号
     */
    public $CVEIDSet;

    /**
     * @var array 组件编号
     */
    public $ComponentSet;

    /**
     * @var array 漏洞分类
     */
    public $VulClassSet;

    /**
     * @var array 漏洞等级
     */
    public $VulLevelSet;

    /**
     * @var array 漏洞标签
     */
    public $VulLabelSet;

    /**
     * @var integer 木马，0:未选中，1:选中
     */
    public $Virus;

    /**
     * @var array 木马md5列表
     */
    public $VirusMD5Set;

    /**
     * @var array 木马等级
     */
    public $VirusLevelSet;

    /**
     * @var array 病毒名
     */
    public $VirusName;

    /**
     * @var integer 敏感信息，0:未选中，1:选中
     */
    public $Risk;

    /**
     * @var array 敏感等级
     */
    public $RiskLevelSet;

    /**
     * @var array 敏感信息分类
     */
    public $RiskType;

    /**
     * @var integer 特权启动 0:不允许，1:允许
     */
    public $PrivilegeRun;

    /**
     * @var array 特权类型,
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeDetail;

    /**
     * @var array 镜像ID列表
     */
    public $EffectImageSet;

    /**
     * @var integer 多少天后生效
     */
    public $EffectDay;

    /**
     * @var string 规则RuelD
     */
    public $RuleID;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ID 规则ID
     * @param string $RuleName 规则名称
     * @param string $RuleType 规则类型 RULE_RISK：风险， RULE_PRIVILEGE：特权
     * @param integer $EffectImageCount 生效的镜像数量
     * @param integer $IsEffectAllImage 是否对全部扫描镜像生效。0:全选镜像，1:自选镜像
     * @param string $EffectTime 规则开始生效时间
     * @param string $UpdateTime 更新时间
     * @param string $OperationUin 操作用户
     * @param string $EffectStatus 生效状态 IN_THE_TEST ：观察中，IN_EFFECT：生效中
     * @param string $RuleDescription 规则描述
     * @param integer $Status 启用状态 0:开启，1:关闭
     * @param integer $Vul 漏洞，0:未选中，1:选中
     * @param array $CVEIDSet cve编号
     * @param array $ComponentSet 组件编号
     * @param array $VulClassSet 漏洞分类
     * @param array $VulLevelSet 漏洞等级
     * @param array $VulLabelSet 漏洞标签
     * @param integer $Virus 木马，0:未选中，1:选中
     * @param array $VirusMD5Set 木马md5列表
     * @param array $VirusLevelSet 木马等级
     * @param array $VirusName 病毒名
     * @param integer $Risk 敏感信息，0:未选中，1:选中
     * @param array $RiskLevelSet 敏感等级
     * @param array $RiskType 敏感信息分类
     * @param integer $PrivilegeRun 特权启动 0:不允许，1:允许
     * @param array $PrivilegeDetail 特权类型,
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EffectImageSet 镜像ID列表
     * @param integer $EffectDay 多少天后生效
     * @param string $RuleID 规则RuelD
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("EffectImageCount",$param) and $param["EffectImageCount"] !== null) {
            $this->EffectImageCount = $param["EffectImageCount"];
        }

        if (array_key_exists("IsEffectAllImage",$param) and $param["IsEffectAllImage"] !== null) {
            $this->IsEffectAllImage = $param["IsEffectAllImage"];
        }

        if (array_key_exists("EffectTime",$param) and $param["EffectTime"] !== null) {
            $this->EffectTime = $param["EffectTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperationUin",$param) and $param["OperationUin"] !== null) {
            $this->OperationUin = $param["OperationUin"];
        }

        if (array_key_exists("EffectStatus",$param) and $param["EffectStatus"] !== null) {
            $this->EffectStatus = $param["EffectStatus"];
        }

        if (array_key_exists("RuleDescription",$param) and $param["RuleDescription"] !== null) {
            $this->RuleDescription = $param["RuleDescription"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vul",$param) and $param["Vul"] !== null) {
            $this->Vul = $param["Vul"];
        }

        if (array_key_exists("CVEIDSet",$param) and $param["CVEIDSet"] !== null) {
            $this->CVEIDSet = $param["CVEIDSet"];
        }

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = $param["ComponentSet"];
        }

        if (array_key_exists("VulClassSet",$param) and $param["VulClassSet"] !== null) {
            $this->VulClassSet = $param["VulClassSet"];
        }

        if (array_key_exists("VulLevelSet",$param) and $param["VulLevelSet"] !== null) {
            $this->VulLevelSet = $param["VulLevelSet"];
        }

        if (array_key_exists("VulLabelSet",$param) and $param["VulLabelSet"] !== null) {
            $this->VulLabelSet = $param["VulLabelSet"];
        }

        if (array_key_exists("Virus",$param) and $param["Virus"] !== null) {
            $this->Virus = $param["Virus"];
        }

        if (array_key_exists("VirusMD5Set",$param) and $param["VirusMD5Set"] !== null) {
            $this->VirusMD5Set = $param["VirusMD5Set"];
        }

        if (array_key_exists("VirusLevelSet",$param) and $param["VirusLevelSet"] !== null) {
            $this->VirusLevelSet = $param["VirusLevelSet"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("Risk",$param) and $param["Risk"] !== null) {
            $this->Risk = $param["Risk"];
        }

        if (array_key_exists("RiskLevelSet",$param) and $param["RiskLevelSet"] !== null) {
            $this->RiskLevelSet = $param["RiskLevelSet"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("PrivilegeRun",$param) and $param["PrivilegeRun"] !== null) {
            $this->PrivilegeRun = $param["PrivilegeRun"];
        }

        if (array_key_exists("PrivilegeDetail",$param) and $param["PrivilegeDetail"] !== null) {
            $this->PrivilegeDetail = $param["PrivilegeDetail"];
        }

        if (array_key_exists("EffectImageSet",$param) and $param["EffectImageSet"] !== null) {
            $this->EffectImageSet = $param["EffectImageSet"];
        }

        if (array_key_exists("EffectDay",$param) and $param["EffectDay"] !== null) {
            $this->EffectDay = $param["EffectDay"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
