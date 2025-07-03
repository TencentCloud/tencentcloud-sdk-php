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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllocationRuleDetail返回参数结构体
 *
 * @method integer getId() 获取公摊规则ID
 * @method void setId(integer $Id) 设置公摊规则ID
 * @method string getUin() 获取公摊规则所属UIN
 * @method void setUin(string $Uin) 设置公摊规则所属UIN
 * @method string getName() 获取公摊规则名称
 * @method void setName(string $Name) 设置公摊规则名称
 * @method integer getType() 获取公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
 * @method void setType(integer $Type) 设置公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
 * @method AllocationRuleExpression getRuleDetail() 获取公摊规则表达式
 * @method void setRuleDetail(AllocationRuleExpression $RuleDetail) 设置公摊规则表达式
 * @method array getRatioDetail() 获取公摊比例表达式，Type为1和2时返回
 * @method void setRatioDetail(array $RatioDetail) 设置公摊比例表达式，Type为1和2时返回
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocationRuleDetailResponse extends AbstractModel
{
    /**
     * @var integer 公摊规则ID
     */
    public $Id;

    /**
     * @var string 公摊规则所属UIN
     */
    public $Uin;

    /**
     * @var string 公摊规则名称
     */
    public $Name;

    /**
     * @var integer 公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
     */
    public $Type;

    /**
     * @var AllocationRuleExpression 公摊规则表达式
     */
    public $RuleDetail;

    /**
     * @var array 公摊比例表达式，Type为1和2时返回
     */
    public $RatioDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id 公摊规则ID
     * @param string $Uin 公摊规则所属UIN
     * @param string $Name 公摊规则名称
     * @param integer $Type 公摊策略类型，枚举值如下：
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
     * @param AllocationRuleExpression $RuleDetail 公摊规则表达式
     * @param array $RatioDetail 公摊比例表达式，Type为1和2时返回
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleDetail",$param) and $param["RuleDetail"] !== null) {
            $this->RuleDetail = new AllocationRuleExpression();
            $this->RuleDetail->deserialize($param["RuleDetail"]);
        }

        if (array_key_exists("RatioDetail",$param) and $param["RatioDetail"] !== null) {
            $this->RatioDetail = [];
            foreach ($param["RatioDetail"] as $key => $value){
                $obj = new AllocationRationExpression();
                $obj->deserialize($value);
                array_push($this->RatioDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
