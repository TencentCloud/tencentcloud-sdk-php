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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * scdn 的自定义 cc 规则
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getDetectionTime() 获取探测时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectionTime(integer $DetectionTime) 设置探测时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrequencyLimit() 获取限频阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequencyLimit(integer $FrequencyLimit) 设置限频阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPunishmentSwitch() 获取IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishmentSwitch(string $PunishmentSwitch) 设置IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPunishmentTime() 获取IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishmentTime(integer $PunishmentTime) 设置IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedirectUrl() 获取动作为 redirect 时，重定向的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectUrl(string $RedirectUrl) 设置动作为 redirect 时，重定向的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigure() 获取七层限频具体配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigure(array $Configure) 设置七层限频具体配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSwitch() 获取是否开启改规则 on 开启，off关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置是否开启改规则 on 开启，off关闭
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdvancedCCRules extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 探测时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectionTime;

    /**
     * @var integer 限频阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrequencyLimit;

    /**
     * @var string IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishmentSwitch;

    /**
     * @var integer IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishmentTime;

    /**
     * @var string 执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 动作为 redirect 时，重定向的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectUrl;

    /**
     * @var array 七层限频具体配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Configure;

    /**
     * @var string 是否开启改规则 on 开启，off关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @param string $RuleName 规则名称
     * @param integer $DetectionTime 探测时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrequencyLimit 限频阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PunishmentSwitch IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PunishmentTime IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedirectUrl 动作为 redirect 时，重定向的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Configure 七层限频具体配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Switch 是否开启改规则 on 开启，off关闭
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("DetectionTime",$param) and $param["DetectionTime"] !== null) {
            $this->DetectionTime = $param["DetectionTime"];
        }

        if (array_key_exists("FrequencyLimit",$param) and $param["FrequencyLimit"] !== null) {
            $this->FrequencyLimit = $param["FrequencyLimit"];
        }

        if (array_key_exists("PunishmentSwitch",$param) and $param["PunishmentSwitch"] !== null) {
            $this->PunishmentSwitch = $param["PunishmentSwitch"];
        }

        if (array_key_exists("PunishmentTime",$param) and $param["PunishmentTime"] !== null) {
            $this->PunishmentTime = $param["PunishmentTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("Configure",$param) and $param["Configure"] !== null) {
            $this->Configure = [];
            foreach ($param["Configure"] as $key => $value){
                $obj = new ScdnSevenLayerRules();
                $obj->deserialize($value);
                array_push($this->Configure, $obj);
            }
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
