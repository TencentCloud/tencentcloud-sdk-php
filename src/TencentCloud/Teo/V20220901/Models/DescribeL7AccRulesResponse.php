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
 * DescribeL7AccRules返回参数结构体
 *
 * @method integer getTotalCount() 获取规则总数。
 * @method void setTotalCount(integer $TotalCount) 设置规则总数。
 * @method array getRules() 获取规则列表，规则按照从上到下的顺序执行，详情参考[规则生效优先级](https://cloud.tencent.com/document/product/1552/70901#.E4.BC.98.E5.85.88.E7.BA.A7)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置规则列表，规则按照从上到下的顺序执行，详情参考[规则生效优先级](https://cloud.tencent.com/document/product/1552/70901#.E4.BC.98.E5.85.88.E7.BA.A7)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeL7AccRulesResponse extends AbstractModel
{
    /**
     * @var integer 规则总数。
     */
    public $TotalCount;

    /**
     * @var array 规则列表，规则按照从上到下的顺序执行，详情参考[规则生效优先级](https://cloud.tencent.com/document/product/1552/70901#.E4.BC.98.E5.85.88.E7.BA.A7)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 规则总数。
     * @param array $Rules 规则列表，规则按照从上到下的顺序执行，详情参考[规则生效优先级](https://cloud.tencent.com/document/product/1552/70901#.E4.BC.98.E5.85.88.E7.BA.A7)。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleEngineItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
