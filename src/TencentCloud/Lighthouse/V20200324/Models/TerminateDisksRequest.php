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
 * TerminateDisks请求参数结构体
 *
 * @method array getDiskIds() 获取云硬盘ID列表。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。
每次批量请求云硬盘的上限数量为100。
 * @method void setDiskIds(array $DiskIds) 设置云硬盘ID列表。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。
每次批量请求云硬盘的上限数量为100。
 */
class TerminateDisksRequest extends AbstractModel
{
    /**
     * @var array 云硬盘ID列表。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。
每次批量请求云硬盘的上限数量为100。
     */
    public $DiskIds;

    /**
     * @param array $DiskIds 云硬盘ID列表。可通过[DescribeDisks](https://cloud.tencent.com/document/product/1207/66093)接口返回值中的DiskId获取。
每次批量请求云硬盘的上限数量为100。
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
