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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RateLimit配置
 *
 * @method string getSwitch() 获取开关。
1. on 开启RateLimit；
2. off 关闭RateLimit
 * @method void setSwitch(string $Switch) 设置开关。
1. on 开启RateLimit；
2. off 关闭RateLimit
 * @method array getUserRules() 获取速率限制-用户规则列表。
 * @method void setUserRules(array $UserRules) 设置速率限制-用户规则列表。
 * @method RateLimitTemplate getTemplate() 获取速率限制模板功能。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplate(RateLimitTemplate $Template) 设置速率限制模板功能。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RateLimitIntelligence getIntelligence() 获取智能客户端过滤。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntelligence(RateLimitIntelligence $Intelligence) 设置智能客户端过滤。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitConfig extends AbstractModel
{
    /**
     * @var string 开关。
1. on 开启RateLimit；
2. off 关闭RateLimit
     */
    public $Switch;

    /**
     * @var array 速率限制-用户规则列表。
     */
    public $UserRules;

    /**
     * @var RateLimitTemplate 速率限制模板功能。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Template;

    /**
     * @var RateLimitIntelligence 智能客户端过滤。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Intelligence;

    /**
     * @param string $Switch 开关。
1. on 开启RateLimit；
2. off 关闭RateLimit
     * @param array $UserRules 速率限制-用户规则列表。
     * @param RateLimitTemplate $Template 速率限制模板功能。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RateLimitIntelligence $Intelligence 智能客户端过滤。
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

        if (array_key_exists("UserRules",$param) and $param["UserRules"] !== null) {
            $this->UserRules = [];
            foreach ($param["UserRules"] as $key => $value){
                $obj = new RateLimitUserRule();
                $obj->deserialize($value);
                array_push($this->UserRules, $obj);
            }
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new RateLimitTemplate();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("Intelligence",$param) and $param["Intelligence"] !== null) {
            $this->Intelligence = new RateLimitIntelligence();
            $this->Intelligence->deserialize($param["Intelligence"]);
        }
    }
}
