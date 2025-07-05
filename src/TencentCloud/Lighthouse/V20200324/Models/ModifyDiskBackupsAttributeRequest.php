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
 * ModifyDiskBackupsAttribute请求参数结构体
 *
 * @method array getDiskBackupIds() 获取云硬盘备份点ID，可通过 [DescribeDiskBackups](https://cloud.tencent.com/document/api/1207/84379) 接口返回值中的 DiskBackupId 获取。列表长度最大值为100。
 * @method void setDiskBackupIds(array $DiskBackupIds) 设置云硬盘备份点ID，可通过 [DescribeDiskBackups](https://cloud.tencent.com/document/api/1207/84379) 接口返回值中的 DiskBackupId 获取。列表长度最大值为100。
 * @method string getDiskBackupName() 获取云硬盘备份点名称，最大长度 90 。
 * @method void setDiskBackupName(string $DiskBackupName) 设置云硬盘备份点名称，最大长度 90 。
 */
class ModifyDiskBackupsAttributeRequest extends AbstractModel
{
    /**
     * @var array 云硬盘备份点ID，可通过 [DescribeDiskBackups](https://cloud.tencent.com/document/api/1207/84379) 接口返回值中的 DiskBackupId 获取。列表长度最大值为100。
     */
    public $DiskBackupIds;

    /**
     * @var string 云硬盘备份点名称，最大长度 90 。
     */
    public $DiskBackupName;

    /**
     * @param array $DiskBackupIds 云硬盘备份点ID，可通过 [DescribeDiskBackups](https://cloud.tencent.com/document/api/1207/84379) 接口返回值中的 DiskBackupId 获取。列表长度最大值为100。
     * @param string $DiskBackupName 云硬盘备份点名称，最大长度 90 。
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

        if (array_key_exists("DiskBackupName",$param) and $param["DiskBackupName"] !== null) {
            $this->DiskBackupName = $param["DiskBackupName"];
        }
    }
}
