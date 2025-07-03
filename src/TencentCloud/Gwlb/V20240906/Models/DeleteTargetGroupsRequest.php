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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTargetGroups请求参数结构体
 *
 * @method array getTargetGroupIds() 获取目标组ID列表。 可以通过接口[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
 * @method void setTargetGroupIds(array $TargetGroupIds) 设置目标组ID列表。 可以通过接口[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
 */
class DeleteTargetGroupsRequest extends AbstractModel
{
    /**
     * @var array 目标组ID列表。 可以通过接口[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
     */
    public $TargetGroupIds;

    /**
     * @param array $TargetGroupIds 目标组ID列表。 可以通过接口[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
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
        if (array_key_exists("TargetGroupIds",$param) and $param["TargetGroupIds"] !== null) {
            $this->TargetGroupIds = $param["TargetGroupIds"];
        }
    }
}
