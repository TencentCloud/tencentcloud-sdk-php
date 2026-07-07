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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRules返回参数结构体
 *
 * @method string getNextToken() 获取下一次查询的Token值，如果当前是最后一页，返回为空。
 * @method void setNextToken(string $NextToken) 设置下一次查询的Token值，如果当前是最后一页，返回为空。
 * @method array getRules() 获取转发规则列表。
 * @method void setRules(array $Rules) 设置转发规则列表。
 * @method integer getTotalCount() 获取总的转发规则个数（根据监听器ID、规则ID等条件过滤后）。
 * @method void setTotalCount(integer $TotalCount) 设置总的转发规则个数（根据监听器ID、规则ID等条件过滤后）。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRulesResponse extends AbstractModel
{
    /**
     * @var string 下一次查询的Token值，如果当前是最后一页，返回为空。
     */
    public $NextToken;

    /**
     * @var array 转发规则列表。
     */
    public $Rules;

    /**
     * @var integer 总的转发规则个数（根据监听器ID、规则ID等条件过滤后）。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NextToken 下一次查询的Token值，如果当前是最后一页，返回为空。
     * @param array $Rules 转发规则列表。
     * @param integer $TotalCount 总的转发规则个数（根据监听器ID、规则ID等条件过滤后）。
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
        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleOutput();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
