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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVaults请求参数结构体
 *
 * @method array getVaultIds() 获取保险箱ID列表，用于精确筛选
 * @method void setVaultIds(array $VaultIds) 设置保险箱ID列表，用于精确筛选
 * @method string getVaultName() 获取保险箱名称，用于模糊筛选
 * @method void setVaultName(string $VaultName) 设置保险箱名称，用于模糊筛选
 * @method array getStatus() 获取保险箱状态列表，用于筛选
 * @method void setStatus(array $Status) 设置保险箱状态列表，用于筛选
 * @method integer getLimit() 获取每页数量，范围(0,100]，默认100
 * @method void setLimit(integer $Limit) 设置每页数量，范围(0,100]，默认100
 * @method integer getOffset() 获取偏移量，范围[0,+∞)，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，范围[0,+∞)，默认0
 * @method string getOrderBy() 获取排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
 * @method string getOrderByType() 获取排序方式，可选值：desc, asc, DESC, ASC
 * @method void setOrderByType(string $OrderByType) 设置排序方式，可选值：desc, asc, DESC, ASC
 */
class DescribeVaultsRequest extends AbstractModel
{
    /**
     * @var array 保险箱ID列表，用于精确筛选
     */
    public $VaultIds;

    /**
     * @var string 保险箱名称，用于模糊筛选
     */
    public $VaultName;

    /**
     * @var array 保险箱状态列表，用于筛选
     */
    public $Status;

    /**
     * @var integer 每页数量，范围(0,100]，默认100
     */
    public $Limit;

    /**
     * @var integer 偏移量，范围[0,+∞)，默认0
     */
    public $Offset;

    /**
     * @var string 排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
     */
    public $OrderBy;

    /**
     * @var string 排序方式，可选值：desc, asc, DESC, ASC
     */
    public $OrderByType;

    /**
     * @param array $VaultIds 保险箱ID列表，用于精确筛选
     * @param string $VaultName 保险箱名称，用于模糊筛选
     * @param array $Status 保险箱状态列表，用于筛选
     * @param integer $Limit 每页数量，范围(0,100]，默认100
     * @param integer $Offset 偏移量，范围[0,+∞)，默认0
     * @param string $OrderBy 排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime
     * @param string $OrderByType 排序方式，可选值：desc, asc, DESC, ASC
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
        if (array_key_exists("VaultIds",$param) and $param["VaultIds"] !== null) {
            $this->VaultIds = $param["VaultIds"];
        }

        if (array_key_exists("VaultName",$param) and $param["VaultName"] !== null) {
            $this->VaultName = $param["VaultName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
