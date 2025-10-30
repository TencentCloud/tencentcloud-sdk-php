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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 精准速率限制的配置
 *
 * @method array getRules() 获取精准速率限制的定义列表。使用 ModifySecurityPolicy 修改 Web 防护配置时: <br> <li>  若未指定 Rules 参数，或 Rules 参数长度为零：清空所有精准速率限制配置。</li> <li> 若 SecurityPolicy 参数中，未指定 RateLimitingRules 参数值：保持已有自定义规则配置，不做修改。</li>
 * @method void setRules(array $Rules) 设置精准速率限制的定义列表。使用 ModifySecurityPolicy 修改 Web 防护配置时: <br> <li>  若未指定 Rules 参数，或 Rules 参数长度为零：清空所有精准速率限制配置。</li> <li> 若 SecurityPolicy 参数中，未指定 RateLimitingRules 参数值：保持已有自定义规则配置，不做修改。</li>
 */
class RateLimitingRules extends AbstractModel
{
    /**
     * @var array 精准速率限制的定义列表。使用 ModifySecurityPolicy 修改 Web 防护配置时: <br> <li>  若未指定 Rules 参数，或 Rules 参数长度为零：清空所有精准速率限制配置。</li> <li> 若 SecurityPolicy 参数中，未指定 RateLimitingRules 参数值：保持已有自定义规则配置，不做修改。</li>
     */
    public $Rules;

    /**
     * @param array $Rules 精准速率限制的定义列表。使用 ModifySecurityPolicy 修改 Web 防护配置时: <br> <li>  若未指定 Rules 参数，或 Rules 参数长度为零：清空所有精准速率限制配置。</li> <li> 若 SecurityPolicy 参数中，未指定 RateLimitingRules 参数值：保持已有自定义规则配置，不做修改。</li>
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RateLimitingRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
