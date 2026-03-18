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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicAlgoVersionList返回参数结构体
 *
 * @method integer getTotalCount() 获取算法版本数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置算法版本数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicAlgoVersions() 获取公共算法版本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAlgoVersions(array $PublicAlgoVersions) 设置公共算法版本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAggregatePublicAlgoVersions() 获取聚合后的公共算法版本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggregatePublicAlgoVersions(array $AggregatePublicAlgoVersions) 设置聚合后的公共算法版本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePublicAlgoVersionListResponse extends AbstractModel
{
    /**
     * @var integer 算法版本数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 公共算法版本列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAlgoVersions;

    /**
     * @var array 聚合后的公共算法版本列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AggregatePublicAlgoVersions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 算法版本数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicAlgoVersions 公共算法版本列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AggregatePublicAlgoVersions 聚合后的公共算法版本列表
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

        if (array_key_exists("PublicAlgoVersions",$param) and $param["PublicAlgoVersions"] !== null) {
            $this->PublicAlgoVersions = [];
            foreach ($param["PublicAlgoVersions"] as $key => $value){
                $obj = new PublicAlgoVersion();
                $obj->deserialize($value);
                array_push($this->PublicAlgoVersions, $obj);
            }
        }

        if (array_key_exists("AggregatePublicAlgoVersions",$param) and $param["AggregatePublicAlgoVersions"] !== null) {
            $this->AggregatePublicAlgoVersions = [];
            foreach ($param["AggregatePublicAlgoVersions"] as $key => $value){
                $obj = new AggregatePublicAlgoVersion();
                $obj->deserialize($value);
                array_push($this->AggregatePublicAlgoVersions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
