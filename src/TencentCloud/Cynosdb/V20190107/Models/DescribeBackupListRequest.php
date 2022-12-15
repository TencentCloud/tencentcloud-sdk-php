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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupList请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getLimit() 获取备份文件列表大小，取值范围(0,100]
 * @method void setLimit(integer $Limit) 设置备份文件列表大小，取值范围(0,100]
 * @method integer getOffset() 获取备份文件列表偏移，取值范围[0,INF)
 * @method void setOffset(integer $Offset) 设置备份文件列表偏移，取值范围[0,INF)
 * @method string getDbType() 获取数据库类型，取值范围: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) 设置数据库类型，取值范围: 
<li> MYSQL </li>
 * @method array getBackupIds() 获取备份ID
 * @method void setBackupIds(array $BackupIds) 设置备份ID
 * @method string getBackupType() 获取备份类型，可选值：snapshot，快照备份； logic，逻辑备份
 * @method void setBackupType(string $BackupType) 设置备份类型，可选值：snapshot，快照备份； logic，逻辑备份
 * @method string getBackupMethod() 获取备份方式，可选值：auto，自动备份；manual，手动备
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式，可选值：auto，自动备份；manual，手动备
 * @method string getSnapShotType() 获取快照类型，可选值：full，全量；increment，增量
 * @method void setSnapShotType(string $SnapShotType) 设置快照类型，可选值：full，全量；increment，增量
 * @method string getStartTime() 获取备份开始时间
 * @method void setStartTime(string $StartTime) 设置备份开始时间
 * @method string getEndTime() 获取备份结束时间
 * @method void setEndTime(string $EndTime) 设置备份结束时间
 * @method array getFileNames() 获取备份文件名，模糊查询
 * @method void setFileNames(array $FileNames) 设置备份文件名，模糊查询
 * @method array getBackupNames() 获取备份备注名，模糊查询
 * @method void setBackupNames(array $BackupNames) 设置备份备注名，模糊查询
 * @method array getSnapshotIdList() 获取快照备份Id列表
 * @method void setSnapshotIdList(array $SnapshotIdList) 设置快照备份Id列表
 */
class DescribeBackupListRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 备份文件列表大小，取值范围(0,100]
     */
    public $Limit;

    /**
     * @var integer 备份文件列表偏移，取值范围[0,INF)
     */
    public $Offset;

    /**
     * @var string 数据库类型，取值范围: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var array 备份ID
     */
    public $BackupIds;

    /**
     * @var string 备份类型，可选值：snapshot，快照备份； logic，逻辑备份
     */
    public $BackupType;

    /**
     * @var string 备份方式，可选值：auto，自动备份；manual，手动备
     */
    public $BackupMethod;

    /**
     * @var string 快照类型，可选值：full，全量；increment，增量
     */
    public $SnapShotType;

    /**
     * @var string 备份开始时间
     */
    public $StartTime;

    /**
     * @var string 备份结束时间
     */
    public $EndTime;

    /**
     * @var array 备份文件名，模糊查询
     */
    public $FileNames;

    /**
     * @var array 备份备注名，模糊查询
     */
    public $BackupNames;

    /**
     * @var array 快照备份Id列表
     */
    public $SnapshotIdList;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $Limit 备份文件列表大小，取值范围(0,100]
     * @param integer $Offset 备份文件列表偏移，取值范围[0,INF)
     * @param string $DbType 数据库类型，取值范围: 
<li> MYSQL </li>
     * @param array $BackupIds 备份ID
     * @param string $BackupType 备份类型，可选值：snapshot，快照备份； logic，逻辑备份
     * @param string $BackupMethod 备份方式，可选值：auto，自动备份；manual，手动备
     * @param string $SnapShotType 快照类型，可选值：full，全量；increment，增量
     * @param string $StartTime 备份开始时间
     * @param string $EndTime 备份结束时间
     * @param array $FileNames 备份文件名，模糊查询
     * @param array $BackupNames 备份备注名，模糊查询
     * @param array $SnapshotIdList 快照备份Id列表
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("BackupIds",$param) and $param["BackupIds"] !== null) {
            $this->BackupIds = $param["BackupIds"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("SnapShotType",$param) and $param["SnapShotType"] !== null) {
            $this->SnapShotType = $param["SnapShotType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
        }

        if (array_key_exists("BackupNames",$param) and $param["BackupNames"] !== null) {
            $this->BackupNames = $param["BackupNames"];
        }

        if (array_key_exists("SnapshotIdList",$param) and $param["SnapshotIdList"] !== null) {
            $this->SnapshotIdList = $param["SnapshotIdList"];
        }
    }
}
