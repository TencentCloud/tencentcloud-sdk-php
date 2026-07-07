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
 * DescribeTargetGroups返回参数结构体
 *
 * @method string getNextToken() 获取下一次查询的Token值，如果当前是最后一页，返回为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextToken(string $NextToken) 设置下一次查询的Token值，如果当前是最后一页，返回为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetGroups() 获取目标组信息。
 * @method void setTargetGroups(array $TargetGroups) 设置目标组信息。
 * @method integer getTotalCount() 获取目标组总数。
 * @method void setTotalCount(integer $TotalCount) 设置目标组总数。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTargetGroupsResponse extends AbstractModel
{
    /**
     * @var string 下一次查询的Token值，如果当前是最后一页，返回为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextToken;

    /**
     * @var array 目标组信息。
     */
    public $TargetGroups;

    /**
     * @var integer 目标组总数。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NextToken 下一次查询的Token值，如果当前是最后一页，返回为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetGroups 目标组信息。
     * @param integer $TotalCount 目标组总数。
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

        if (array_key_exists("TargetGroups",$param) and $param["TargetGroups"] !== null) {
            $this->TargetGroups = [];
            foreach ($param["TargetGroups"] as $key => $value){
                $obj = new TargetGroupOutput();
                $obj->deserialize($value);
                array_push($this->TargetGroups, $obj);
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
