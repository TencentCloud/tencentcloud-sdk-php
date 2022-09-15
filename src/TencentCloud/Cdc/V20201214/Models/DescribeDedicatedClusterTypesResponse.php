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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterTypes返回参数结构体
 *
 * @method array getDedicatedClusterTypeSet() 获取专用集群配置列表
 * @method void setDedicatedClusterTypeSet(array $DedicatedClusterTypeSet) 设置专用集群配置列表
 * @method integer getTotalCount() 获取符合条件的个数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDedicatedClusterTypesResponse extends AbstractModel
{
    /**
     * @var array 专用集群配置列表
     */
    public $DedicatedClusterTypeSet;

    /**
     * @var integer 符合条件的个数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DedicatedClusterTypeSet 专用集群配置列表
     * @param integer $TotalCount 符合条件的个数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DedicatedClusterTypeSet",$param) and $param["DedicatedClusterTypeSet"] !== null) {
            $this->DedicatedClusterTypeSet = [];
            foreach ($param["DedicatedClusterTypeSet"] as $key => $value){
                $obj = new DedicatedClusterType();
                $obj->deserialize($value);
                array_push($this->DedicatedClusterTypeSet, $obj);
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
