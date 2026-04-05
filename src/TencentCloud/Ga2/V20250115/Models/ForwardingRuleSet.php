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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 七层转发规则信息
 *
 * @method array getRuleCondition() 获取七层转发规则条件信息。
 * @method void setRuleCondition(array $RuleCondition) 设置七层转发规则条件信息。
 * @method array getRuleAction() 获取七层转发规则行为信息。
 * @method void setRuleAction(array $RuleAction) 设置七层转发规则行为信息。
 * @method boolean getEnableOriginSni() 获取是否开启回源Sni。
 * @method void setEnableOriginSni(boolean $EnableOriginSni) 设置是否开启回源Sni。
 * @method string getOriginSni() 获取回源Sni。
 * @method void setOriginSni(string $OriginSni) 设置回源Sni。
 * @method array getOriginHeaders() 获取回源Herder信息。
 * @method void setOriginHeaders(array $OriginHeaders) 设置回源Herder信息。
 * @method string getOriginHost() 获取回源Host。
 * @method void setOriginHost(string $OriginHost) 设置回源Host。
 * @method string getGlobalAcceleratorId() 获取全球加速实例ID。
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置全球加速实例ID。
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getForwardingPolicyId() 获取七层转发策略ID。
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) 设置七层转发策略ID。
 * @method string getForwardingRuleId() 获取七层转发规则ID。
 * @method void setForwardingRuleId(string $ForwardingRuleId) 设置七层转发规则ID。
 */
class ForwardingRuleSet extends AbstractModel
{
    /**
     * @var array 七层转发规则条件信息。
     */
    public $RuleCondition;

    /**
     * @var array 七层转发规则行为信息。
     */
    public $RuleAction;

    /**
     * @var boolean 是否开启回源Sni。
     */
    public $EnableOriginSni;

    /**
     * @var string 回源Sni。
     */
    public $OriginSni;

    /**
     * @var array 回源Herder信息。
     */
    public $OriginHeaders;

    /**
     * @var string 回源Host。
     */
    public $OriginHost;

    /**
     * @var string 全球加速实例ID。
     */
    public $GlobalAcceleratorId;

    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 七层转发策略ID。
     */
    public $ForwardingPolicyId;

    /**
     * @var string 七层转发规则ID。
     */
    public $ForwardingRuleId;

    /**
     * @param array $RuleCondition 七层转发规则条件信息。
     * @param array $RuleAction 七层转发规则行为信息。
     * @param boolean $EnableOriginSni 是否开启回源Sni。
     * @param string $OriginSni 回源Sni。
     * @param array $OriginHeaders 回源Herder信息。
     * @param string $OriginHost 回源Host。
     * @param string $GlobalAcceleratorId 全球加速实例ID。
     * @param string $ListenerId 监听器ID。
     * @param string $ForwardingPolicyId 七层转发策略ID。
     * @param string $ForwardingRuleId 七层转发规则ID。
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
        if (array_key_exists("RuleCondition",$param) and $param["RuleCondition"] !== null) {
            $this->RuleCondition = [];
            foreach ($param["RuleCondition"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->RuleCondition, $obj);
            }
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = [];
            foreach ($param["RuleAction"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->RuleAction, $obj);
            }
        }

        if (array_key_exists("EnableOriginSni",$param) and $param["EnableOriginSni"] !== null) {
            $this->EnableOriginSni = $param["EnableOriginSni"];
        }

        if (array_key_exists("OriginSni",$param) and $param["OriginSni"] !== null) {
            $this->OriginSni = $param["OriginSni"];
        }

        if (array_key_exists("OriginHeaders",$param) and $param["OriginHeaders"] !== null) {
            $this->OriginHeaders = [];
            foreach ($param["OriginHeaders"] as $key => $value){
                $obj = new OriginHeader();
                $obj->deserialize($value);
                array_push($this->OriginHeaders, $obj);
            }
        }

        if (array_key_exists("OriginHost",$param) and $param["OriginHost"] !== null) {
            $this->OriginHost = $param["OriginHost"];
        }

        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ForwardingPolicyId",$param) and $param["ForwardingPolicyId"] !== null) {
            $this->ForwardingPolicyId = $param["ForwardingPolicyId"];
        }

        if (array_key_exists("ForwardingRuleId",$param) and $param["ForwardingRuleId"] !== null) {
            $this->ForwardingRuleId = $param["ForwardingRuleId"];
        }
    }
}
