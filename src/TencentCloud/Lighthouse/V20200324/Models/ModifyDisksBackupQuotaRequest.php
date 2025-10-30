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
 * ModifyDisksBackupQuota请求参数结构体
 *
 * @method array getDiskIds() 获取云硬盘ID列表，可通过[DescribeDisks](https://cloud.tencent.com/document/api/1207/66093)接口查询。列表最大长度为15。
 * @method void setDiskIds(array $DiskIds) 设置云硬盘ID列表，可通过[DescribeDisks](https://cloud.tencent.com/document/api/1207/66093)接口查询。列表最大长度为15。
 * @method integer getDiskBackupQuota() 获取云硬盘备份点配额。取值范围: [0, 500]。调整后的配额必须大于等于已存在的备份点数量。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置云硬盘备份点配额。取值范围: [0, 500]。调整后的配额必须大于等于已存在的备份点数量。
 */
class ModifyDisksBackupQuotaRequest extends AbstractModel
{
    /**
     * @var array 云硬盘ID列表，可通过[DescribeDisks](https://cloud.tencent.com/document/api/1207/66093)接口查询。列表最大长度为15。
     */
    public $DiskIds;

    /**
     * @var integer 云硬盘备份点配额。取值范围: [0, 500]。调整后的配额必须大于等于已存在的备份点数量。
     */
    public $DiskBackupQuota;

    /**
     * @param array $DiskIds 云硬盘ID列表，可通过[DescribeDisks](https://cloud.tencent.com/document/api/1207/66093)接口查询。列表最大长度为15。
     * @param integer $DiskBackupQuota 云硬盘备份点配额。取值范围: [0, 500]。调整后的配额必须大于等于已存在的备份点数量。
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

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
