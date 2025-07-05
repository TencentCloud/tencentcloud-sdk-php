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
 * DescribeDiskBackupsDeniedActions请求参数结构体
 *
 * @method array getDiskBackupIds() 获取云硬盘备份点 ID 列表, 可通过<a href="https://cloud.tencent.com/document/product/1207/84379" target="_blank">DescribeDiskBackups</a>接口查询。列表长度最大值为100。
 * @method void setDiskBackupIds(array $DiskBackupIds) 设置云硬盘备份点 ID 列表, 可通过<a href="https://cloud.tencent.com/document/product/1207/84379" target="_blank">DescribeDiskBackups</a>接口查询。列表长度最大值为100。
 */
class DescribeDiskBackupsDeniedActionsRequest extends AbstractModel
{
    /**
     * @var array 云硬盘备份点 ID 列表, 可通过<a href="https://cloud.tencent.com/document/product/1207/84379" target="_blank">DescribeDiskBackups</a>接口查询。列表长度最大值为100。
     */
    public $DiskBackupIds;

    /**
     * @param array $DiskBackupIds 云硬盘备份点 ID 列表, 可通过<a href="https://cloud.tencent.com/document/product/1207/84379" target="_blank">DescribeDiskBackups</a>接口查询。列表长度最大值为100。
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
        if (array_key_exists("DiskBackupIds",$param) and $param["DiskBackupIds"] !== null) {
            $this->DiskBackupIds = $param["DiskBackupIds"];
        }
    }
}
