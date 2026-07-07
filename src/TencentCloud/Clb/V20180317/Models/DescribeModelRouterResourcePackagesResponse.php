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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelRouterResourcePackages返回参数结构体
 *
 * @method array getModelRouterResourcePackageSet() 获取<p>模型路由资源包信息</p>
 * @method void setModelRouterResourcePackageSet(array $ModelRouterResourcePackageSet) 设置<p>模型路由资源包信息</p>
 * @method integer getTotalCount() 获取<p>符合查询条件的模型路由资源包数量</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>符合查询条件的模型路由资源包数量</p>
 * @method integer getTotalDosage() 获取<p>资源包的剩余总量</p>
 * @method void setTotalDosage(integer $TotalDosage) 设置<p>资源包的剩余总量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModelRouterResourcePackagesResponse extends AbstractModel
{
    /**
     * @var array <p>模型路由资源包信息</p>
     */
    public $ModelRouterResourcePackageSet;

    /**
     * @var integer <p>符合查询条件的模型路由资源包数量</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>资源包的剩余总量</p>
     */
    public $TotalDosage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ModelRouterResourcePackageSet <p>模型路由资源包信息</p>
     * @param integer $TotalCount <p>符合查询条件的模型路由资源包数量</p>
     * @param integer $TotalDosage <p>资源包的剩余总量</p>
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
        if (array_key_exists("ModelRouterResourcePackageSet",$param) and $param["ModelRouterResourcePackageSet"] !== null) {
            $this->ModelRouterResourcePackageSet = [];
            foreach ($param["ModelRouterResourcePackageSet"] as $key => $value){
                $obj = new ModelRouterPackage();
                $obj->deserialize($value);
                array_push($this->ModelRouterResourcePackageSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalDosage",$param) and $param["TotalDosage"] !== null) {
            $this->TotalDosage = $param["TotalDosage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
