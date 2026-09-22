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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExpertList返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>符合条件的专家总数（按 ID 批量时为实际命中数）</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>符合条件的专家总数（按 ID 批量时为实际命中数）</p>
 * @method array getExpertSet() 获取<p>专家列表</p>
 * @method void setExpertSet(array $ExpertSet) 设置<p>专家列表</p>
 * @method ExpertCounts getCounts() 获取<p>全局计数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCounts(ExpertCounts $Counts) 设置<p>全局计数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExpertListResponse extends AbstractModel
{
    /**
     * @var integer <p>符合条件的专家总数（按 ID 批量时为实际命中数）</p>
     */
    public $TotalCount;

    /**
     * @var array <p>专家列表</p>
     */
    public $ExpertSet;

    /**
     * @var ExpertCounts <p>全局计数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Counts;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>符合条件的专家总数（按 ID 批量时为实际命中数）</p>
     * @param array $ExpertSet <p>专家列表</p>
     * @param ExpertCounts $Counts <p>全局计数</p>
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

        if (array_key_exists("ExpertSet",$param) and $param["ExpertSet"] !== null) {
            $this->ExpertSet = [];
            foreach ($param["ExpertSet"] as $key => $value){
                $obj = new ExpertItem();
                $obj->deserialize($value);
                array_push($this->ExpertSet, $obj);
            }
        }

        if (array_key_exists("Counts",$param) and $param["Counts"] !== null) {
            $this->Counts = new ExpertCounts();
            $this->Counts->deserialize($param["Counts"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
