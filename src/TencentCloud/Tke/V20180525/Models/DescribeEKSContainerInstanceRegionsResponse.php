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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEKSContainerInstanceRegions返回参数结构体
 *
 * @method array getRegions() 获取EKS Container Instance支持的地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegions(array $Regions) 设置EKS Container Instance支持的地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEKSContainerInstanceRegionsResponse extends AbstractModel
{
    /**
     * @var array EKS Container Instance支持的地域信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regions;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Regions EKS Container Instance支持的地域信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总数
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
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new EksCiRegionInfo();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
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
