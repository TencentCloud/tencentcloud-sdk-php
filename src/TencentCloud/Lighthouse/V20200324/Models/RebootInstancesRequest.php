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
 * RebootInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method string getStopType() 获取关机类型。
取值范围：
- SOFT：表示软关机 
- HARD：表示硬关机 
- SOFT_FIRST：表示优先软关机，失败再执行硬关机  

默认取值：SOFT_FIRST。
 * @method void setStopType(string $StopType) 设置关机类型。
取值范围：
- SOFT：表示软关机 
- HARD：表示硬关机 
- SOFT_FIRST：表示优先软关机，失败再执行硬关机  

默认取值：SOFT_FIRST。
 */
class RebootInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     */
    public $InstanceIds;

    /**
     * @var string 关机类型。
取值范围：
- SOFT：表示软关机 
- HARD：表示硬关机 
- SOFT_FIRST：表示优先软关机，失败再执行硬关机  

默认取值：SOFT_FIRST。
     */
    public $StopType;

    /**
     * @param array $InstanceIds 实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     * @param string $StopType 关机类型。
取值范围：
- SOFT：表示软关机 
- HARD：表示硬关机 
- SOFT_FIRST：表示优先软关机，失败再执行硬关机  

默认取值：SOFT_FIRST。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("StopType",$param) and $param["StopType"] !== null) {
            $this->StopType = $param["StopType"];
        }
    }
}
