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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot主动特征识别规则。
 *
 * @method integer getRuleID() 获取规则id。
 * @method void setRuleID(integer $RuleID) 设置规则id。
 * @method string getRuleName() 获取规则名。
 * @method void setRuleName(string $RuleName) 设置规则名。
 * @method string getSwitch() 获取规则开关。
 * @method void setSwitch(string $Switch) 设置规则开关。
 * @method array getAlgConditions() 获取自定义规则。
 * @method void setAlgConditions(array $AlgConditions) 设置自定义规则。
 * @method AlgDetectSession getAlgDetectSession() 获取Cookie校验和会话行为分析。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgDetectSession(AlgDetectSession $AlgDetectSession) 设置Cookie校验和会话行为分析。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlgDetectJS() 获取客户端行为校验。
 * @method void setAlgDetectJS(array $AlgDetectJS) 设置客户端行为校验。
 * @method string getUpdateTime() 获取更新时间。仅出参使用。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。仅出参使用。
 */
class AlgDetectRule extends AbstractModel
{
    /**
     * @var integer 规则id。
     */
    public $RuleID;

    /**
     * @var string 规则名。
     */
    public $RuleName;

    /**
     * @var string 规则开关。
     */
    public $Switch;

    /**
     * @var array 自定义规则。
     */
    public $AlgConditions;

    /**
     * @var AlgDetectSession Cookie校验和会话行为分析。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgDetectSession;

    /**
     * @var array 客户端行为校验。
     */
    public $AlgDetectJS;

    /**
     * @var string 更新时间。仅出参使用。
     */
    public $UpdateTime;

    /**
     * @param integer $RuleID 规则id。
     * @param string $RuleName 规则名。
     * @param string $Switch 规则开关。
     * @param array $AlgConditions 自定义规则。
     * @param AlgDetectSession $AlgDetectSession Cookie校验和会话行为分析。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlgDetectJS 客户端行为校验。
     * @param string $UpdateTime 更新时间。仅出参使用。
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

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AlgConditions",$param) and $param["AlgConditions"] !== null) {
            $this->AlgConditions = [];
            foreach ($param["AlgConditions"] as $key => $value){
                $obj = new AclCondition();
                $obj->deserialize($value);
                array_push($this->AlgConditions, $obj);
            }
        }

        if (array_key_exists("AlgDetectSession",$param) and $param["AlgDetectSession"] !== null) {
            $this->AlgDetectSession = new AlgDetectSession();
            $this->AlgDetectSession->deserialize($param["AlgDetectSession"]);
        }

        if (array_key_exists("AlgDetectJS",$param) and $param["AlgDetectJS"] !== null) {
            $this->AlgDetectJS = [];
            foreach ($param["AlgDetectJS"] as $key => $value){
                $obj = new AlgDetectJS();
                $obj->deserialize($value);
                array_push($this->AlgDetectJS, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
