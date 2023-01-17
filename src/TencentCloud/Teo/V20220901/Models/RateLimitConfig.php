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
 * 速率限制规则
 *
 * @method string getSwitch() 获取开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method array getRateLimitUserRules() 获取速率限制-用户规则列表。如果为null，默认使用历史配置。
 * @method void setRateLimitUserRules(array $RateLimitUserRules) 设置速率限制-用户规则列表。如果为null，默认使用历史配置。
 * @method RateLimitTemplate getRateLimitTemplate() 获取速率限制模板功能。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRateLimitTemplate(RateLimitTemplate $RateLimitTemplate) 设置速率限制模板功能。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RateLimitIntelligence getRateLimitIntelligence() 获取智能客户端过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRateLimitIntelligence(RateLimitIntelligence $RateLimitIntelligence) 设置智能客户端过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRateLimitCustomizes() 获取速率限制-托管定制规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRateLimitCustomizes(array $RateLimitCustomizes) 设置速率限制-托管定制规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitConfig extends AbstractModel
{
    /**
     * @var string 开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var array 速率限制-用户规则列表。如果为null，默认使用历史配置。
     */
    public $RateLimitUserRules;

    /**
     * @var RateLimitTemplate 速率限制模板功能。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RateLimitTemplate;

    /**
     * @var RateLimitIntelligence 智能客户端过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RateLimitIntelligence;

    /**
     * @var array 速率限制-托管定制规则。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RateLimitCustomizes;

    /**
     * @param string $Switch 开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param array $RateLimitUserRules 速率限制-用户规则列表。如果为null，默认使用历史配置。
     * @param RateLimitTemplate $RateLimitTemplate 速率限制模板功能。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RateLimitIntelligence $RateLimitIntelligence 智能客户端过滤。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RateLimitCustomizes 速率限制-托管定制规则。如果为null，默认使用历史配置。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RateLimitUserRules",$param) and $param["RateLimitUserRules"] !== null) {
            $this->RateLimitUserRules = [];
            foreach ($param["RateLimitUserRules"] as $key => $value){
                $obj = new RateLimitUserRule();
                $obj->deserialize($value);
                array_push($this->RateLimitUserRules, $obj);
            }
        }

        if (array_key_exists("RateLimitTemplate",$param) and $param["RateLimitTemplate"] !== null) {
            $this->RateLimitTemplate = new RateLimitTemplate();
            $this->RateLimitTemplate->deserialize($param["RateLimitTemplate"]);
        }

        if (array_key_exists("RateLimitIntelligence",$param) and $param["RateLimitIntelligence"] !== null) {
            $this->RateLimitIntelligence = new RateLimitIntelligence();
            $this->RateLimitIntelligence->deserialize($param["RateLimitIntelligence"]);
        }

        if (array_key_exists("RateLimitCustomizes",$param) and $param["RateLimitCustomizes"] !== null) {
            $this->RateLimitCustomizes = [];
            foreach ($param["RateLimitCustomizes"] as $key => $value){
                $obj = new RateLimitUserRule();
                $obj->deserialize($value);
                array_push($this->RateLimitCustomizes, $obj);
            }
        }
    }
}
