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
 * InquirePriceModifyDiskBackupQuota请求参数结构体
 *
 * @method string getDiskId() 获取云硬盘ID， 通过DescribeDisks（查询云硬盘信息）接口查询。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID， 通过DescribeDisks（查询云硬盘信息）接口查询。
 * @method integer getDiskBackupQuota() 获取修改后的云硬盘备份点配额，即云盘可以拥有的备份点数量，单位为个。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置修改后的云硬盘备份点配额，即云盘可以拥有的备份点数量，单位为个。
 */
class InquirePriceModifyDiskBackupQuotaRequest extends AbstractModel
{
    /**
     * @var string 云硬盘ID， 通过DescribeDisks（查询云硬盘信息）接口查询。
     */
    public $DiskId;

    /**
     * @var integer 修改后的云硬盘备份点配额，即云盘可以拥有的备份点数量，单位为个。
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskId 云硬盘ID， 通过DescribeDisks（查询云硬盘信息）接口查询。
     * @param integer $DiskBackupQuota 修改后的云硬盘备份点配额，即云盘可以拥有的备份点数量，单位为个。
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
