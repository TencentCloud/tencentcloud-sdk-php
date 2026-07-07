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
 * DescribeBackupOverview返回参数结构体
 *
 * @method float getBackupTotalVolume() 获取备份总容量
 * @method void setBackupTotalVolume(float $BackupTotalVolume) 设置备份总容量
 * @method float getBackupSnapshotVolume() 获取备份快照容量
 * @method void setBackupSnapshotVolume(float $BackupSnapshotVolume) 设置备份快照容量
 * @method float getBackupLogicVolume() 获取备份逻辑容量
 * @method void setBackupLogicVolume(float $BackupLogicVolume) 设置备份逻辑容量
 * @method float getLogTotalVolume() 获取日志总容量
 * @method void setLogTotalVolume(float $LogTotalVolume) 设置日志总容量
 * @method float getLogBinlogVolume() 获取日志binlog容量
 * @method void setLogBinlogVolume(float $LogBinlogVolume) 设置日志binlog容量
 * @method float getLogRedoLogVolume() 获取日志redolog容量
 * @method void setLogRedoLogVolume(float $LogRedoLogVolume) 设置日志redolog容量
 * @method float getCrossTotalVolume() 获取跨地域备份总容量
 * @method void setCrossTotalVolume(float $CrossTotalVolume) 设置跨地域备份总容量
 * @method float getCrossRegionBackupVolume() 获取跨地域备份容量
 * @method void setCrossRegionBackupVolume(float $CrossRegionBackupVolume) 设置跨地域备份容量
 * @method float getCrossRegionLogVolume() 获取跨地域日志容量
 * @method void setCrossRegionLogVolume(float $CrossRegionLogVolume) 设置跨地域日志容量
 * @method array getBackupVolumeInfos() 获取备份容量详情
 * @method void setBackupVolumeInfos(array $BackupVolumeInfos) 设置备份容量详情
 * @method array getCrossRegionBackupVolumeInfos() 获取跨地域备份容量详情
 * @method void setCrossRegionBackupVolumeInfos(array $CrossRegionBackupVolumeInfos) 设置跨地域备份容量详情
 * @method array getCrossRegions() 获取跨地域信息
 * @method void setCrossRegions(array $CrossRegions) 设置跨地域信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupOverviewResponse extends AbstractModel
{
    /**
     * @var float 备份总容量
     */
    public $BackupTotalVolume;

    /**
     * @var float 备份快照容量
     */
    public $BackupSnapshotVolume;

    /**
     * @var float 备份逻辑容量
     */
    public $BackupLogicVolume;

    /**
     * @var float 日志总容量
     */
    public $LogTotalVolume;

    /**
     * @var float 日志binlog容量
     */
    public $LogBinlogVolume;

    /**
     * @var float 日志redolog容量
     */
    public $LogRedoLogVolume;

    /**
     * @var float 跨地域备份总容量
     */
    public $CrossTotalVolume;

    /**
     * @var float 跨地域备份容量
     */
    public $CrossRegionBackupVolume;

    /**
     * @var float 跨地域日志容量
     */
    public $CrossRegionLogVolume;

    /**
     * @var array 备份容量详情
     */
    public $BackupVolumeInfos;

    /**
     * @var array 跨地域备份容量详情
     */
    public $CrossRegionBackupVolumeInfos;

    /**
     * @var array 跨地域信息
     */
    public $CrossRegions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $BackupTotalVolume 备份总容量
     * @param float $BackupSnapshotVolume 备份快照容量
     * @param float $BackupLogicVolume 备份逻辑容量
     * @param float $LogTotalVolume 日志总容量
     * @param float $LogBinlogVolume 日志binlog容量
     * @param float $LogRedoLogVolume 日志redolog容量
     * @param float $CrossTotalVolume 跨地域备份总容量
     * @param float $CrossRegionBackupVolume 跨地域备份容量
     * @param float $CrossRegionLogVolume 跨地域日志容量
     * @param array $BackupVolumeInfos 备份容量详情
     * @param array $CrossRegionBackupVolumeInfos 跨地域备份容量详情
     * @param array $CrossRegions 跨地域信息
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BackupTotalVolume",$param) and $param["BackupTotalVolume"] !== null) {
            $this->BackupTotalVolume = $param["BackupTotalVolume"];
        }

        if (array_key_exists("BackupSnapshotVolume",$param) and $param["BackupSnapshotVolume"] !== null) {
            $this->BackupSnapshotVolume = $param["BackupSnapshotVolume"];
        }

        if (array_key_exists("BackupLogicVolume",$param) and $param["BackupLogicVolume"] !== null) {
            $this->BackupLogicVolume = $param["BackupLogicVolume"];
        }

        if (array_key_exists("LogTotalVolume",$param) and $param["LogTotalVolume"] !== null) {
            $this->LogTotalVolume = $param["LogTotalVolume"];
        }

        if (array_key_exists("LogBinlogVolume",$param) and $param["LogBinlogVolume"] !== null) {
            $this->LogBinlogVolume = $param["LogBinlogVolume"];
        }

        if (array_key_exists("LogRedoLogVolume",$param) and $param["LogRedoLogVolume"] !== null) {
            $this->LogRedoLogVolume = $param["LogRedoLogVolume"];
        }

        if (array_key_exists("CrossTotalVolume",$param) and $param["CrossTotalVolume"] !== null) {
            $this->CrossTotalVolume = $param["CrossTotalVolume"];
        }

        if (array_key_exists("CrossRegionBackupVolume",$param) and $param["CrossRegionBackupVolume"] !== null) {
            $this->CrossRegionBackupVolume = $param["CrossRegionBackupVolume"];
        }

        if (array_key_exists("CrossRegionLogVolume",$param) and $param["CrossRegionLogVolume"] !== null) {
            $this->CrossRegionLogVolume = $param["CrossRegionLogVolume"];
        }

        if (array_key_exists("BackupVolumeInfos",$param) and $param["BackupVolumeInfos"] !== null) {
            $this->BackupVolumeInfos = [];
            foreach ($param["BackupVolumeInfos"] as $key => $value){
                $obj = new BackupVolumeInfo();
                $obj->deserialize($value);
                array_push($this->BackupVolumeInfos, $obj);
            }
        }

        if (array_key_exists("CrossRegionBackupVolumeInfos",$param) and $param["CrossRegionBackupVolumeInfos"] !== null) {
            $this->CrossRegionBackupVolumeInfos = [];
            foreach ($param["CrossRegionBackupVolumeInfos"] as $key => $value){
                $obj = new BackupVolumeInfo();
                $obj->deserialize($value);
                array_push($this->CrossRegionBackupVolumeInfos, $obj);
            }
        }

        if (array_key_exists("CrossRegions",$param) and $param["CrossRegions"] !== null) {
            $this->CrossRegions = $param["CrossRegions"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
