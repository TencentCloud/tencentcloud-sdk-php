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
 * @method array getExistedInstanceSet() 获取已经存在的实例信息数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExistedInstanceSet(array $ExistedInstanceSet) 设置已经存在的实例信息数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取符合条件的实例数量。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的实例数量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeExistedInstances返回参数结构体
 */
class DescribeExistedInstancesResponse extends AbstractModel
{
    /**
     * @var array 已经存在的实例信息数组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExistedInstanceSet;

    /**
     * @var integer 符合条件的实例数量。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $ExistedInstanceSet 已经存在的实例信息数组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 符合条件的实例数量。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ExistedInstanceSet",$param) and $param["ExistedInstanceSet"] !== null) {
            $this->ExistedInstanceSet = [];
            foreach ($param["ExistedInstanceSet"] as $key => $value){
                $obj = new ExistedInstance();
                $obj->deserialize($value);
                array_push($this->ExistedInstanceSet, $obj);
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
