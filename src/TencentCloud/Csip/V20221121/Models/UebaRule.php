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
 * 用户行为分析策略
 *
 * @method string getRuleID() 获取策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(string $RuleID) 设置策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleType() 获取策略类型
0:系统策略
1:自定义策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(integer $RuleType) 设置策略类型
0:系统策略
1:自定义策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleLevel() 获取策略等级
0:提示
1:低危
2:中危
3:高危
4:严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleLevel(integer $RuleLevel) 设置策略等级
0:提示
1:低危
2:中危
3:高危
4:严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleContent() 获取策略内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleContent(string $RuleContent) 设置策略内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRuleStatus() 获取策略开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleStatus(boolean $RuleStatus) 设置策略开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHitCount() 获取命中次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitCount(integer $HitCount) 设置命中次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppID() 获取所属账号Appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(string $AppID) 设置所属账号Appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberID() 获取多账号，成员ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberID(string $MemberID) 设置多账号，成员ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickname() 获取昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method UebaCustomRule getCustomRuleDetail() 获取自定义规则具体内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomRuleDetail(UebaCustomRule $CustomRuleDetail) 设置自定义规则具体内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloudType() 获取云类型
腾讯云：0
aws：1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(integer $CloudType) 设置云类型
腾讯云：0
aws：1
注意：此字段可能返回 null，表示取不到有效值。
 */
class UebaRule extends AbstractModel
{
    /**
     * @var string 策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var string 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 策略类型
0:系统策略
1:自定义策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var integer 策略等级
0:提示
1:低危
2:中危
3:高危
4:严重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleLevel;

    /**
     * @var string 策略内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleContent;

    /**
     * @var boolean 策略开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleStatus;

    /**
     * @var integer 命中次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitCount;

    /**
     * @var string 所属账号Appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string 多账号，成员ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberID;

    /**
     * @var string Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var UebaCustomRule 自定义规则具体内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomRuleDetail;

    /**
     * @var integer 云类型
腾讯云：0
aws：1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @param string $RuleID 策略id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleType 策略类型
0:系统策略
1:自定义策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleLevel 策略等级
0:提示
1:低危
2:中危
3:高危
4:严重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleContent 策略内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RuleStatus 策略开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HitCount 命中次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppID 所属账号Appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberID 多账号，成员ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nickname 昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param UebaCustomRule $CustomRuleDetail 自定义规则具体内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloudType 云类型
腾讯云：0
aws：1
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("MemberID",$param) and $param["MemberID"] !== null) {
            $this->MemberID = $param["MemberID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("CustomRuleDetail",$param) and $param["CustomRuleDetail"] !== null) {
            $this->CustomRuleDetail = new UebaCustomRule();
            $this->CustomRuleDetail->deserialize($param["CustomRuleDetail"]);
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
