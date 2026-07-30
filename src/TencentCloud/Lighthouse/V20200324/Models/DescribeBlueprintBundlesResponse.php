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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlueprintBundles返回参数结构体
 *
 * @method array getBlueprintBundleSet() 获取镜像套餐详细信息列表。 
 * @method void setBlueprintBundleSet(array $BlueprintBundleSet) 设置镜像套餐详细信息列表。 
 * @method integer getTotalCount() 获取符合要求的套餐总数，用于分页展示。
 * @method void setTotalCount(integer $TotalCount) 设置符合要求的套餐总数，用于分页展示。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBlueprintBundlesResponse extends AbstractModel
{
    /**
     * @var array 镜像套餐详细信息列表。 
     */
    public $BlueprintBundleSet;

    /**
     * @var integer 符合要求的套餐总数，用于分页展示。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BlueprintBundleSet 镜像套餐详细信息列表。 
     * @param integer $TotalCount 符合要求的套餐总数，用于分页展示。
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
        if (array_key_exists("BlueprintBundleSet",$param) and $param["BlueprintBundleSet"] !== null) {
            $this->BlueprintBundleSet = [];
            foreach ($param["BlueprintBundleSet"] as $key => $value){
                $obj = new BlueprintBundle();
                $obj->deserialize($value);
                array_push($this->BlueprintBundleSet, $obj);
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
