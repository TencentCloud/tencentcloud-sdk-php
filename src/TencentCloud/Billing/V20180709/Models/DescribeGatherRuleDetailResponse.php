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
 * DescribeGatherRuleDetail返回参数结构体
 *
 * @method integer getId() 获取归集规则ID
 * @method void setId(integer $Id) 设置归集规则ID
 * @method string getUin() 获取归集规则所属UIN
 * @method void setUin(string $Uin) 设置归集规则所属UIN
 * @method string getUpdateTime() 获取归集规则最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置归集规则最后更新时间
 * @method AllocationRuleExpression getRuleDetail() 获取归集规则详情
 * @method void setRuleDetail(AllocationRuleExpression $RuleDetail) 设置归集规则详情
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGatherRuleDetailResponse extends AbstractModel
{
    /**
     * @var integer 归集规则ID
     */
    public $Id;

    /**
     * @var string 归集规则所属UIN
     */
    public $Uin;

    /**
     * @var string 归集规则最后更新时间
     */
    public $UpdateTime;

    /**
     * @var AllocationRuleExpression 归集规则详情
     */
    public $RuleDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id 归集规则ID
     * @param string $Uin 归集规则所属UIN
     * @param string $UpdateTime 归集规则最后更新时间
     * @param AllocationRuleExpression $RuleDetail 归集规则详情
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RuleDetail",$param) and $param["RuleDetail"] !== null) {
            $this->RuleDetail = new AllocationRuleExpression();
            $this->RuleDetail->deserialize($param["RuleDetail"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
