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
 * 负载均衡实例中需要绑定的源站组和优先级关系。
 *
 * @method string getPriority() 获取优先级，填写格式为 "priority_" + "数字"，最高优先级为 "priority_1"。参考取值有：
<li>priority_1：第一优先级；</li>
<li>priority_2：第二优先级；</li>
<li>priority_3：第三优先级。</li>其他优先级可以将数字递增，最多可以递增至 "priority_10"。
 * @method void setPriority(string $Priority) 设置优先级，填写格式为 "priority_" + "数字"，最高优先级为 "priority_1"。参考取值有：
<li>priority_1：第一优先级；</li>
<li>priority_2：第二优先级；</li>
<li>priority_3：第三优先级。</li>其他优先级可以将数字递增，最多可以递增至 "priority_10"。
 * @method string getOriginGroupId() 获取源站组 ID。
 * @method void setOriginGroupId(string $OriginGroupId) 设置源站组 ID。
 */
class OriginGroupInLoadBalancer extends AbstractModel
{
    /**
     * @var string 优先级，填写格式为 "priority_" + "数字"，最高优先级为 "priority_1"。参考取值有：
<li>priority_1：第一优先级；</li>
<li>priority_2：第二优先级；</li>
<li>priority_3：第三优先级。</li>其他优先级可以将数字递增，最多可以递增至 "priority_10"。
     */
    public $Priority;

    /**
     * @var string 源站组 ID。
     */
    public $OriginGroupId;

    /**
     * @param string $Priority 优先级，填写格式为 "priority_" + "数字"，最高优先级为 "priority_1"。参考取值有：
<li>priority_1：第一优先级；</li>
<li>priority_2：第二优先级；</li>
<li>priority_3：第三优先级。</li>其他优先级可以将数字递增，最多可以递增至 "priority_10"。
     * @param string $OriginGroupId 源站组 ID。
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
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }
    }
}
