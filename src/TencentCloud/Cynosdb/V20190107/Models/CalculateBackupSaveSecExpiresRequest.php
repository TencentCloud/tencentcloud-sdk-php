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
 * CalculateBackupSaveSecExpires请求参数结构体
 *
 * @method string getVaultId() 获取备份保险箱ID
 * @method void setVaultId(string $VaultId) 设置备份保险箱ID
 * @method integer getBackupSaveSeconds() 获取备份保留时长（秒），必须大于0
 * @method void setBackupSaveSeconds(integer $BackupSaveSeconds) 设置备份保留时长（秒），必须大于0
 * @method integer getLimit() 获取每页数量，范围(0,100]，默认10
 * @method void setLimit(integer $Limit) 设置每页数量，范围(0,100]，默认10
 * @method integer getOffset() 获取偏移量，范围[0,INF)，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，范围[0,INF)，默认0
 * @method string getOrderBy() 获取排序字段，可选值：VaultId,VaultName,BackupSaveSeconds,LockedTime,CreateTime,UpdateTime，默认endTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，可选值：VaultId,VaultName,BackupSaveSeconds,LockedTime,CreateTime,UpdateTime，默认endTime
 * @method string getOrderByType() 获取排序方式，可选值：desc,asc,DESC,ASC，默认desc
 * @method void setOrderByType(string $OrderByType) 设置排序方式，可选值：desc,asc,DESC,ASC，默认desc
 */
class CalculateBackupSaveSecExpiresRequest extends AbstractModel
{
    /**
     * @var string 备份保险箱ID
     */
    public $VaultId;

    /**
     * @var integer 备份保留时长（秒），必须大于0
     */
    public $BackupSaveSeconds;

    /**
     * @var integer 每页数量，范围(0,100]，默认10
     */
    public $Limit;

    /**
     * @var integer 偏移量，范围[0,INF)，默认0
     */
    public $Offset;

    /**
     * @var string 排序字段，可选值：VaultId,VaultName,BackupSaveSeconds,LockedTime,CreateTime,UpdateTime，默认endTime
     */
    public $OrderBy;

    /**
     * @var string 排序方式，可选值：desc,asc,DESC,ASC，默认desc
     */
    public $OrderByType;

    /**
     * @param string $VaultId 备份保险箱ID
     * @param integer $BackupSaveSeconds 备份保留时长（秒），必须大于0
     * @param integer $Limit 每页数量，范围(0,100]，默认10
     * @param integer $Offset 偏移量，范围[0,INF)，默认0
     * @param string $OrderBy 排序字段，可选值：VaultId,VaultName,BackupSaveSeconds,LockedTime,CreateTime,UpdateTime，默认endTime
     * @param string $OrderByType 排序方式，可选值：desc,asc,DESC,ASC，默认desc
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

        if (array_key_exists("BackupSaveSeconds",$param) and $param["BackupSaveSeconds"] !== null) {
            $this->BackupSaveSeconds = $param["BackupSaveSeconds"];
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
