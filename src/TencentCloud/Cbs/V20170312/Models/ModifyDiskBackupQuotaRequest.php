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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiskBackupQuota请求参数结构体
 *
 * @method string getDiskId() 获取云硬盘ID。可通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID。可通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method integer getDiskBackupQuota() 获取调整之后的云硬盘备份点配额。取值范围为1 ~ 1024。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置调整之后的云硬盘备份点配额。取值范围为1 ~ 1024。
 */
class ModifyDiskBackupQuotaRequest extends AbstractModel
{
    /**
     * @var string 云硬盘ID。可通过[DescribeDisks](/document/product/362/16315)接口查询。
     */
    public $DiskId;

    /**
     * @var integer 调整之后的云硬盘备份点配额。取值范围为1 ~ 1024。
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskId 云硬盘ID。可通过[DescribeDisks](/document/product/362/16315)接口查询。
     * @param integer $DiskBackupQuota 调整之后的云硬盘备份点配额。取值范围为1 ~ 1024。
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
