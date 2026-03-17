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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageDenyRuleSummary返回参数结构体
 *
 * @method integer getRuleTotalCount() 获取镜像拦截规则总数(含关闭的和开启的)
 * @method void setRuleTotalCount(integer $RuleTotalCount) 设置镜像拦截规则总数(含关闭的和开启的)
 * @method integer getEnabledRuleCount() 获取开启的镜像拦截规则数
 * @method void setEnabledRuleCount(integer $EnabledRuleCount) 设置开启的镜像拦截规则数
 * @method integer getObservedRuleCount() 获取观察期中的镜像拦截规则数
 * @method void setObservedRuleCount(integer $ObservedRuleCount) 设置观察期中的镜像拦截规则数
 * @method integer getEffectiveRuleCount() 获取已生效的镜像拦截规则数
 * @method void setEffectiveRuleCount(integer $EffectiveRuleCount) 设置已生效的镜像拦截规则数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageDenyRuleSummaryResponse extends AbstractModel
{
    /**
     * @var integer 镜像拦截规则总数(含关闭的和开启的)
     */
    public $RuleTotalCount;

    /**
     * @var integer 开启的镜像拦截规则数
     */
    public $EnabledRuleCount;

    /**
     * @var integer 观察期中的镜像拦截规则数
     */
    public $ObservedRuleCount;

    /**
     * @var integer 已生效的镜像拦截规则数
     */
    public $EffectiveRuleCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RuleTotalCount 镜像拦截规则总数(含关闭的和开启的)
     * @param integer $EnabledRuleCount 开启的镜像拦截规则数
     * @param integer $ObservedRuleCount 观察期中的镜像拦截规则数
     * @param integer $EffectiveRuleCount 已生效的镜像拦截规则数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RuleTotalCount",$param) and $param["RuleTotalCount"] !== null) {
            $this->RuleTotalCount = $param["RuleTotalCount"];
        }

        if (array_key_exists("EnabledRuleCount",$param) and $param["EnabledRuleCount"] !== null) {
            $this->EnabledRuleCount = $param["EnabledRuleCount"];
        }

        if (array_key_exists("ObservedRuleCount",$param) and $param["ObservedRuleCount"] !== null) {
            $this->ObservedRuleCount = $param["ObservedRuleCount"];
        }

        if (array_key_exists("EffectiveRuleCount",$param) and $param["EffectiveRuleCount"] !== null) {
            $this->EffectiveRuleCount = $param["EffectiveRuleCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
