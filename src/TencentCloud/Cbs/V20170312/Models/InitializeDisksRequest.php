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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InitializeDisks请求参数结构体
 *
 * @method array getDiskIds() 获取待重新初始化的云硬盘ID列表，可以通过[DescribeDisks](/document/product/362/16315)接口查询， 单次初始化限制20块以内
 * @method void setDiskIds(array $DiskIds) 设置待重新初始化的云硬盘ID列表，可以通过[DescribeDisks](/document/product/362/16315)接口查询， 单次初始化限制20块以内
 */
class InitializeDisksRequest extends AbstractModel
{
    /**
     * @var array 待重新初始化的云硬盘ID列表，可以通过[DescribeDisks](/document/product/362/16315)接口查询， 单次初始化限制20块以内
     */
    public $DiskIds;

    /**
     * @param array $DiskIds 待重新初始化的云硬盘ID列表，可以通过[DescribeDisks](/document/product/362/16315)接口查询， 单次初始化限制20块以内
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }
    }
}
