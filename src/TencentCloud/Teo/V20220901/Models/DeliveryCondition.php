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
 * 实时日志投递条件，用于定义投递日志范围。DeliveryCondition 数组内多个项的关系为“或”，内层 Conditions 数组内多个项的关系为“且”。
 *
 * @method array getConditions() 获取日志过滤条件，详细的过滤条件如下：
<li>EdgeResponseStatusCode：按照 EdgeOne 节点响应返回给客户端的状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 0 的整数</li>
<li>OriginResponseStatusCode：按照源站响应状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 -1 的整数</li>
<li>SecurityAction：按照请求命中安全规则后的最终处置动作进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   Monitor：观察<br>   JSChallenge：JavaScript 挑战<br>   Deny：拦截<br>   Allow：放行<br>   BlockIP：IP 封禁<br>   Redirect：重定向<br>   ReturnCustomPage：返回自定义页面<br>   ManagedChallenge：托管挑战<br>   Silence：静默<br>   LongDelay：长时间等待后响应<br>   ShortDelay：短时间等待后响应</li>
<li>SecurityModule：按照最终处置请求的安全模块名称进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   CustomRule：Web防护 - 自定义规则<br>   RateLimitingCustomRule：Web防护 - 速率限制规则<br>   ManagedRule：Web防护 - 托管规则<br>   L7DDoS：Web防护 - CC攻击防护<br>   BotManagement：Bot管理 - Bot基础管理<br>   BotClientReputation：Bot管理 - 客户端画像分析<br>   BotBehaviorAnalysis：Bot管理 - Bot智能分析<br>   BotCustomRule：Bot管理 - 自定义Bot规则<br>   BotActiveDetection：Bot管理 - 主动特征识别</li>
 * @method void setConditions(array $Conditions) 设置日志过滤条件，详细的过滤条件如下：
<li>EdgeResponseStatusCode：按照 EdgeOne 节点响应返回给客户端的状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 0 的整数</li>
<li>OriginResponseStatusCode：按照源站响应状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 -1 的整数</li>
<li>SecurityAction：按照请求命中安全规则后的最终处置动作进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   Monitor：观察<br>   JSChallenge：JavaScript 挑战<br>   Deny：拦截<br>   Allow：放行<br>   BlockIP：IP 封禁<br>   Redirect：重定向<br>   ReturnCustomPage：返回自定义页面<br>   ManagedChallenge：托管挑战<br>   Silence：静默<br>   LongDelay：长时间等待后响应<br>   ShortDelay：短时间等待后响应</li>
<li>SecurityModule：按照最终处置请求的安全模块名称进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   CustomRule：Web防护 - 自定义规则<br>   RateLimitingCustomRule：Web防护 - 速率限制规则<br>   ManagedRule：Web防护 - 托管规则<br>   L7DDoS：Web防护 - CC攻击防护<br>   BotManagement：Bot管理 - Bot基础管理<br>   BotClientReputation：Bot管理 - 客户端画像分析<br>   BotBehaviorAnalysis：Bot管理 - Bot智能分析<br>   BotCustomRule：Bot管理 - 自定义Bot规则<br>   BotActiveDetection：Bot管理 - 主动特征识别</li>
 */
class DeliveryCondition extends AbstractModel
{
    /**
     * @var array 日志过滤条件，详细的过滤条件如下：
<li>EdgeResponseStatusCode：按照 EdgeOne 节点响应返回给客户端的状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 0 的整数</li>
<li>OriginResponseStatusCode：按照源站响应状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 -1 的整数</li>
<li>SecurityAction：按照请求命中安全规则后的最终处置动作进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   Monitor：观察<br>   JSChallenge：JavaScript 挑战<br>   Deny：拦截<br>   Allow：放行<br>   BlockIP：IP 封禁<br>   Redirect：重定向<br>   ReturnCustomPage：返回自定义页面<br>   ManagedChallenge：托管挑战<br>   Silence：静默<br>   LongDelay：长时间等待后响应<br>   ShortDelay：短时间等待后响应</li>
<li>SecurityModule：按照最终处置请求的安全模块名称进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   CustomRule：Web防护 - 自定义规则<br>   RateLimitingCustomRule：Web防护 - 速率限制规则<br>   ManagedRule：Web防护 - 托管规则<br>   L7DDoS：Web防护 - CC攻击防护<br>   BotManagement：Bot管理 - Bot基础管理<br>   BotClientReputation：Bot管理 - 客户端画像分析<br>   BotBehaviorAnalysis：Bot管理 - Bot智能分析<br>   BotCustomRule：Bot管理 - 自定义Bot规则<br>   BotActiveDetection：Bot管理 - 主动特征识别</li>
     */
    public $Conditions;

    /**
     * @param array $Conditions 日志过滤条件，详细的过滤条件如下：
<li>EdgeResponseStatusCode：按照 EdgeOne 节点响应返回给客户端的状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 0 的整数</li>
<li>OriginResponseStatusCode：按照源站响应状态码进行过滤。<br>   支持运算符：equal、great、less、great_equal、less_equal<br>   取值范围：任意大于等于 -1 的整数</li>
<li>SecurityAction：按照请求命中安全规则后的最终处置动作进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   Monitor：观察<br>   JSChallenge：JavaScript 挑战<br>   Deny：拦截<br>   Allow：放行<br>   BlockIP：IP 封禁<br>   Redirect：重定向<br>   ReturnCustomPage：返回自定义页面<br>   ManagedChallenge：托管挑战<br>   Silence：静默<br>   LongDelay：长时间等待后响应<br>   ShortDelay：短时间等待后响应</li>
<li>SecurityModule：按照最终处置请求的安全模块名称进行过滤。<br>   支持运算符：equal<br>   可选项如下：<br>   -：未知/未命中<br>   CustomRule：Web防护 - 自定义规则<br>   RateLimitingCustomRule：Web防护 - 速率限制规则<br>   ManagedRule：Web防护 - 托管规则<br>   L7DDoS：Web防护 - CC攻击防护<br>   BotManagement：Bot管理 - Bot基础管理<br>   BotClientReputation：Bot管理 - 客户端画像分析<br>   BotBehaviorAnalysis：Bot管理 - Bot智能分析<br>   BotCustomRule：Bot管理 - 自定义Bot规则<br>   BotActiveDetection：Bot管理 - 主动特征识别</li>
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
        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
