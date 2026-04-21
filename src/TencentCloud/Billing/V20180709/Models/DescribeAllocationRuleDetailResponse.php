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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllocationRuleDetail返回参数结构体
 *
 * @method integer getId() 获取<p>公摊规则ID</p>
 * @method void setId(integer $Id) 设置<p>公摊规则ID</p>
 * @method string getUin() 获取<p>公摊规则所属UIN</p>
 * @method void setUin(string $Uin) 设置<p>公摊规则所属UIN</p>
 * @method string getName() 获取<p>公摊规则名称</p>
 * @method void setName(string $Name) 设置<p>公摊规则名称</p>
 * @method integer getType() 获取<p>公摊策略类型，枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
 * @method void setType(integer $Type) 设置<p>公摊策略类型，枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
 * @method AllocationRuleExpression getRuleDetail() 获取<p>公摊规则表达式</p>
 * @method void setRuleDetail(AllocationRuleExpression $RuleDetail) 设置<p>公摊规则表达式</p>
 * @method array getRatioDetail() 获取<p>公摊比例表达式，Type为1和2时返回</p>
 * @method void setRatioDetail(array $RatioDetail) 设置<p>公摊比例表达式，Type为1和2时返回</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocationRuleDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>公摊规则ID</p>
     */
    public $Id;

    /**
     * @var string <p>公摊规则所属UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>公摊规则名称</p>
     */
    public $Name;

    /**
     * @var integer <p>公摊策略类型，枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
     */
    public $Type;

    /**
     * @var AllocationRuleExpression <p>公摊规则表达式</p>
     */
    public $RuleDetail;

    /**
     * @var array <p>公摊比例表达式，Type为1和2时返回</p>
     */
    public $RatioDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id <p>公摊规则ID</p>
     * @param string $Uin <p>公摊规则所属UIN</p>
     * @param string $Name <p>公摊规则名称</p>
     * @param integer $Type <p>公摊策略类型，枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
     * @param AllocationRuleExpression $RuleDetail <p>公摊规则表达式</p>
     * @param array $RatioDetail <p>公摊比例表达式，Type为1和2时返回</p>
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
