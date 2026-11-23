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
 * DescribeCustomGroups返回参数结构体
 *
 * @method integer getGroupTotalCount() 获取<p>满足类型列表条件的自定义组总数量。</p>
 * @method void setGroupTotalCount(integer $GroupTotalCount) 设置<p>满足类型列表条件的自定义组总数量。</p>
 * @method array getCustomGroups() 获取<p>满足类型列表条件的自定义组列表。</p>
 * @method void setCustomGroups(array $CustomGroups) 设置<p>满足类型列表条件的自定义组列表。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCustomGroupsResponse extends AbstractModel
{
    /**
     * @var integer <p>满足类型列表条件的自定义组总数量。</p>
     */
    public $GroupTotalCount;

    /**
     * @var array <p>满足类型列表条件的自定义组列表。</p>
     */
    public $CustomGroups;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $GroupTotalCount <p>满足类型列表条件的自定义组总数量。</p>
     * @param array $CustomGroups <p>满足类型列表条件的自定义组列表。</p>
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
        if (array_key_exists("GroupTotalCount",$param) and $param["GroupTotalCount"] !== null) {
            $this->GroupTotalCount = $param["GroupTotalCount"];
        }

        if (array_key_exists("CustomGroups",$param) and $param["CustomGroups"] !== null) {
            $this->CustomGroups = [];
            foreach ($param["CustomGroups"] as $key => $value){
                $obj = new CustomGroup();
                $obj->deserialize($value);
                array_push($this->CustomGroups, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
