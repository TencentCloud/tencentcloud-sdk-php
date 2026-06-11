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
 * ModifyForwardingRule请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method string getListenerId() 获取<p>监听器ID。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器ID。</p>
 * @method string getForwardingPolicyId() 获取<p>策略ID。</p>
 * @method void setForwardingPolicyId(string $ForwardingPolicyId) 设置<p>策略ID。</p>
 * @method string getForwardingRuleId() 获取<p>七层转发规则ID。</p>
 * @method void setForwardingRuleId(string $ForwardingRuleId) 设置<p>七层转发规则ID。</p>
 * @method array getRuleConditions() 获取<p>七层转发规则条件信息。</p>
 * @method void setRuleConditions(array $RuleConditions) 设置<p>七层转发规则条件信息。</p>
 * @method array getRuleActions() 获取<p>七层转发规则行为信息。</p>
 * @method void setRuleActions(array $RuleActions) 设置<p>七层转发规则行为信息。</p>
 * @method array getOriginHeaders() 获取<p>回源Header信息。</p>
 * @method void setOriginHeaders(array $OriginHeaders) 设置<p>回源Header信息。</p>
 * @method boolean getEnableOriginSni() 获取<p>是否开启回源sni。</p>
 * @method void setEnableOriginSni(boolean $EnableOriginSni) 设置<p>是否开启回源sni。</p>
 * @method string getOriginSni() 获取<p>回源sni。</p>
 * @method void setOriginSni(string $OriginSni) 设置<p>回源sni。</p>
 * @method string getOriginHost() 获取<p>回源host。</p>
 * @method void setOriginHost(string $OriginHost) 设置<p>回源host。</p>
 * @method array getResponseHeaders() 获取<p>源站响应头</p>
 * @method void setResponseHeaders(array $ResponseHeaders) 设置<p>源站响应头</p>
 * @method array getHideResponseHeaders() 获取<p>删除源站响应头</p>
 * @method void setHideResponseHeaders(array $HideResponseHeaders) 设置<p>删除源站响应头</p>
 */
class ModifyForwardingRuleRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>监听器ID。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>策略ID。</p>
     */
    public $ForwardingPolicyId;

    /**
     * @var string <p>七层转发规则ID。</p>
     */
    public $ForwardingRuleId;

    /**
     * @var array <p>七层转发规则条件信息。</p>
     */
    public $RuleConditions;

    /**
     * @var array <p>七层转发规则行为信息。</p>
     */
    public $RuleActions;

    /**
     * @var array <p>回源Header信息。</p>
     */
    public $OriginHeaders;

    /**
     * @var boolean <p>是否开启回源sni。</p>
     */
    public $EnableOriginSni;

    /**
     * @var string <p>回源sni。</p>
     */
    public $OriginSni;

    /**
     * @var string <p>回源host。</p>
     */
    public $OriginHost;

    /**
     * @var array <p>源站响应头</p>
     */
    public $ResponseHeaders;

    /**
     * @var array <p>删除源站响应头</p>
     */
    public $HideResponseHeaders;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param string $ListenerId <p>监听器ID。</p>
     * @param string $ForwardingPolicyId <p>策略ID。</p>
     * @param string $ForwardingRuleId <p>七层转发规则ID。</p>
     * @param array $RuleConditions <p>七层转发规则条件信息。</p>
     * @param array $RuleActions <p>七层转发规则行为信息。</p>
     * @param array $OriginHeaders <p>回源Header信息。</p>
     * @param boolean $EnableOriginSni <p>是否开启回源sni。</p>
     * @param string $OriginSni <p>回源sni。</p>
     * @param string $OriginHost <p>回源host。</p>
     * @param array $ResponseHeaders <p>源站响应头</p>
     * @param array $HideResponseHeaders <p>删除源站响应头</p>
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

        if (array_key_exists("RuleConditions",$param) and $param["RuleConditions"] !== null) {
            $this->RuleConditions = [];
            foreach ($param["RuleConditions"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->RuleConditions, $obj);
            }
        }

        if (array_key_exists("RuleActions",$param) and $param["RuleActions"] !== null) {
            $this->RuleActions = [];
            foreach ($param["RuleActions"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->RuleActions, $obj);
            }
        }

        if (array_key_exists("OriginHeaders",$param) and $param["OriginHeaders"] !== null) {
            $this->OriginHeaders = [];
            foreach ($param["OriginHeaders"] as $key => $value){
                $obj = new OriginHeader();
                $obj->deserialize($value);
                array_push($this->OriginHeaders, $obj);
            }
        }

        if (array_key_exists("EnableOriginSni",$param) and $param["EnableOriginSni"] !== null) {
            $this->EnableOriginSni = $param["EnableOriginSni"];
        }

        if (array_key_exists("OriginSni",$param) and $param["OriginSni"] !== null) {
            $this->OriginSni = $param["OriginSni"];
        }

        if (array_key_exists("OriginHost",$param) and $param["OriginHost"] !== null) {
            $this->OriginHost = $param["OriginHost"];
        }

        if (array_key_exists("ResponseHeaders",$param) and $param["ResponseHeaders"] !== null) {
            $this->ResponseHeaders = [];
            foreach ($param["ResponseHeaders"] as $key => $value){
                $obj = new ResponseHeaders();
                $obj->deserialize($value);
                array_push($this->ResponseHeaders, $obj);
            }
        }

        if (array_key_exists("HideResponseHeaders",$param) and $param["HideResponseHeaders"] !== null) {
            $this->HideResponseHeaders = [];
            foreach ($param["HideResponseHeaders"] as $key => $value){
                $obj = new HideResponseHeaders();
                $obj->deserialize($value);
                array_push($this->HideResponseHeaders, $obj);
            }
        }
    }
}
