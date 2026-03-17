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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞防御设置
 *
 * @method string getStrategyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyType() 获取0系统策略
1自定义策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyType(integer $StrategyType) 设置0系统策略
1自定义策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThreatLevel() 获取威胁等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreatLevel(integer $ThreatLevel) 设置威胁等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScope() 获取1全部旗舰版主机
0自选主机
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(integer $Scope) 设置1全部旗舰版主机
0自选主机
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSupportVulNum() 获取支持的漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportVulNum(integer $SupportVulNum) 设置支持的漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取0 关闭 1 开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置0 关闭 1 开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberId() 获取用户MemberId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberId(string $MemberId) 设置用户MemberId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyAction() 获取策略动作
0告警
1防御
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyAction(integer $StrategyAction) 设置策略动作
0告警
1防御
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickname() 获取用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefenceType() 获取防护类型
0漏洞防御
1攻击检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenceType(integer $DefenceType) 设置防护类型
0漏洞防御
1攻击检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceNum() 获取自选主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNum(integer $InstanceNum) 设置自选主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyId() 获取策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(string $StrategyId) 设置策略id
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulDefenceSetting extends AbstractModel
{
    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var integer 0系统策略
1自定义策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyType;

    /**
     * @var integer 威胁等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThreatLevel;

    /**
     * @var integer 1全部旗舰版主机
0自选主机
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @var integer 支持的漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportVulNum;

    /**
     * @var integer 0 关闭 1 开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户MemberId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberId;

    /**
     * @var integer 策略动作
0告警
1防御
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyAction;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var integer 防护类型
0漏洞防御
1攻击检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenceType;

    /**
     * @var integer 自选主机数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNum;

    /**
     * @var string 策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyId;

    /**
     * @param string $StrategyName 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyType 0系统策略
1自定义策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ThreatLevel 威胁等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scope 1全部旗舰版主机
0自选主机
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SupportVulNum 支持的漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable 0 关闭 1 开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberId 用户MemberId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyAction 策略动作
0告警
1防御
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nickname 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefenceType 防护类型
0漏洞防御
1攻击检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceNum 自选主机数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyId 策略id
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("ThreatLevel",$param) and $param["ThreatLevel"] !== null) {
            $this->ThreatLevel = $param["ThreatLevel"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("SupportVulNum",$param) and $param["SupportVulNum"] !== null) {
            $this->SupportVulNum = $param["SupportVulNum"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("StrategyAction",$param) and $param["StrategyAction"] !== null) {
            $this->StrategyAction = $param["StrategyAction"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("DefenceType",$param) and $param["DefenceType"] !== null) {
            $this->DefenceType = $param["DefenceType"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
