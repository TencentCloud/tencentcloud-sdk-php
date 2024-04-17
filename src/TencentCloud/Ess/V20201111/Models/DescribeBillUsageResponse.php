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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillUsage返回参数结构体
 *
 * @method array getSummary() 获取企业套餐余额及使用情况
 * @method void setSummary(array $Summary) 设置企业套餐余额及使用情况
 * @method array getSubOrgSummary() 获取集团子企业套餐使用情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubOrgSummary(array $SubOrgSummary) 设置集团子企业套餐使用情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBillUsageResponse extends AbstractModel
{
    /**
     * @var array 企业套餐余额及使用情况
     */
    public $Summary;

    /**
     * @var array 集团子企业套餐使用情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubOrgSummary;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Summary 企业套餐余额及使用情况
     * @param array $SubOrgSummary 集团子企业套餐使用情况
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
        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = [];
            foreach ($param["Summary"] as $key => $value){
                $obj = new OrgBillSummary();
                $obj->deserialize($value);
                array_push($this->Summary, $obj);
            }
        }

        if (array_key_exists("SubOrgSummary",$param) and $param["SubOrgSummary"] !== null) {
            $this->SubOrgSummary = [];
            foreach ($param["SubOrgSummary"] as $key => $value){
                $obj = new SubOrgBillSummary();
                $obj->deserialize($value);
                array_push($this->SubOrgSummary, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
