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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcePoolPacks返回参数结构体
 *
 * @method array getDedicatedResourcePackSet() 获取符合条件的实例资源池列表。
 * @method void setDedicatedResourcePackSet(array $DedicatedResourcePackSet) 设置符合条件的实例资源池列表。
 * @method string getNextToken() 获取下一页数据的标记，用于分页查询。值为空时表示已到最后一页。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextToken(string $NextToken) 设置下一页数据的标记，用于分页查询。值为空时表示已到最后一页。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourcePoolPacksResponse extends AbstractModel
{
    /**
     * @var array 符合条件的实例资源池列表。
     */
    public $DedicatedResourcePackSet;

    /**
     * @var string 下一页数据的标记，用于分页查询。值为空时表示已到最后一页。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextToken;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DedicatedResourcePackSet 符合条件的实例资源池列表。
     * @param string $NextToken 下一页数据的标记，用于分页查询。值为空时表示已到最后一页。
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
        if (array_key_exists("DedicatedResourcePackSet",$param) and $param["DedicatedResourcePackSet"] !== null) {
            $this->DedicatedResourcePackSet = [];
            foreach ($param["DedicatedResourcePackSet"] as $key => $value){
                $obj = new ResourcePoolPack();
                $obj->deserialize($value);
                array_push($this->DedicatedResourcePackSet, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
