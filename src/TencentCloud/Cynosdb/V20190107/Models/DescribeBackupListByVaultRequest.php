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
 * DescribeBackupListByVault请求参数结构体
 *
 * @method string getVaultId() 获取保险箱ID，长度必须大于0
 * @method void setVaultId(string $VaultId) 设置保险箱ID，长度必须大于0
 * @method array getBackupIds() 获取备份文件ID列表，用于筛选特定备份
 * @method void setBackupIds(array $BackupIds) 设置备份文件ID列表，用于筛选特定备份
 * @method string getClusterId() 获取集群ID，用于筛选特定集群的备份
 * @method void setClusterId(string $ClusterId) 设置集群ID，用于筛选特定集群的备份
 * @method array getBackupNames() 获取备份名称列表，用于精确匹配筛选
 * @method void setBackupNames(array $BackupNames) 设置备份名称列表，用于精确匹配筛选
 * @method array getFileNames() 获取文件名称列表，用于精确匹配筛选
 * @method void setFileNames(array $FileNames) 设置文件名称列表，用于精确匹配筛选
 * @method integer getLimit() 获取分页数量，取值范围：(0, 100]，默认100
 * @method void setLimit(integer $Limit) 设置分页数量，取值范围：(0, 100]，默认100
 * @method integer getOffset() 获取分页偏移量，取值范围：[0, INF)，默认0
 * @method void setOffset(integer $Offset) 设置分页偏移量，取值范围：[0, INF)，默认0
 * @method string getOrderBy() 获取排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime，默认createTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime，默认createTime
 * @method string getOrderByType() 获取排序方式，可选值：desc, asc, DESC, ASC，默认desc
 * @method void setOrderByType(string $OrderByType) 设置排序方式，可选值：desc, asc, DESC, ASC，默认desc
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 */
class DescribeBackupListByVaultRequest extends AbstractModel
{
    /**
     * @var string 保险箱ID，长度必须大于0
     */
    public $VaultId;

    /**
     * @var array 备份文件ID列表，用于筛选特定备份
     */
    public $BackupIds;

    /**
     * @var string 集群ID，用于筛选特定集群的备份
     */
    public $ClusterId;

    /**
     * @var array 备份名称列表，用于精确匹配筛选
     */
    public $BackupNames;

    /**
     * @var array 文件名称列表，用于精确匹配筛选
     */
    public $FileNames;

    /**
     * @var integer 分页数量，取值范围：(0, 100]，默认100
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，取值范围：[0, INF)，默认0
     */
    public $Offset;

    /**
     * @var string 排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime，默认createTime
     */
    public $OrderBy;

    /**
     * @var string 排序方式，可选值：desc, asc, DESC, ASC，默认desc
     */
    public $OrderByType;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @param string $VaultId 保险箱ID，长度必须大于0
     * @param array $BackupIds 备份文件ID列表，用于筛选特定备份
     * @param string $ClusterId 集群ID，用于筛选特定集群的备份
     * @param array $BackupNames 备份名称列表，用于精确匹配筛选
     * @param array $FileNames 文件名称列表，用于精确匹配筛选
     * @param integer $Limit 分页数量，取值范围：(0, 100]，默认100
     * @param integer $Offset 分页偏移量，取值范围：[0, INF)，默认0
     * @param string $OrderBy 排序字段，可选值：VaultId, VaultName, BackupSaveSeconds, LockedTime, CreateTime, UpdateTime，默认createTime
     * @param string $OrderByType 排序方式，可选值：desc, asc, DESC, ASC，默认desc
     * @param string $Status 状态
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
        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BackupNames",$param) and $param["BackupNames"] !== null) {
            $this->BackupNames = $param["BackupNames"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
