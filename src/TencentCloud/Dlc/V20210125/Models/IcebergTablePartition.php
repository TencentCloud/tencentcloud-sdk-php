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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Iceberg表分区信息
 *
 * @method string getPartition() 获取分区信息名称
 * @method void setPartition(string $Partition) 设置分区信息名称
 * @method integer getRecords() 获取分区记录数
 * @method void setRecords(integer $Records) 设置分区记录数
 * @method integer getDataFileSize() 获取分区数据文件数量
 * @method void setDataFileSize(integer $DataFileSize) 设置分区数据文件数量
 * @method integer getDataFileStorage() 获取分区数据文件存储量
 * @method void setDataFileStorage(integer $DataFileStorage) 设置分区数据文件存储量
 * @method string getCreateTime() 获取分区创建时间
 * @method void setCreateTime(string $CreateTime) 设置分区创建时间
 * @method string getUpdateTime() 获取分区更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置分区更新时间
 * @method string getLastUpdateSnapshotId() 获取最后一次分区更新的快照ID
 * @method void setLastUpdateSnapshotId(string $LastUpdateSnapshotId) 设置最后一次分区更新的快照ID
 * @method LocationInfo getLocation() 获取分区的location
 * @method void setLocation(LocationInfo $Location) 设置分区的location
 */
class IcebergTablePartition extends AbstractModel
{
    /**
     * @var string 分区信息名称
     */
    public $Partition;

    /**
     * @var integer 分区记录数
     */
    public $Records;

    /**
     * @var integer 分区数据文件数量
     */
    public $DataFileSize;

    /**
     * @var integer 分区数据文件存储量
     */
    public $DataFileStorage;

    /**
     * @var string 分区创建时间
     */
    public $CreateTime;

    /**
     * @var string 分区更新时间
     */
    public $UpdateTime;

    /**
     * @var string 最后一次分区更新的快照ID
     */
    public $LastUpdateSnapshotId;

    /**
     * @var LocationInfo 分区的location
     */
    public $Location;

    /**
     * @param string $Partition 分区信息名称
     * @param integer $Records 分区记录数
     * @param integer $DataFileSize 分区数据文件数量
     * @param integer $DataFileStorage 分区数据文件存储量
     * @param string $CreateTime 分区创建时间
     * @param string $UpdateTime 分区更新时间
     * @param string $LastUpdateSnapshotId 最后一次分区更新的快照ID
     * @param LocationInfo $Location 分区的location
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
        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = $param["Records"];
        }

        if (array_key_exists("DataFileSize",$param) and $param["DataFileSize"] !== null) {
            $this->DataFileSize = $param["DataFileSize"];
        }

        if (array_key_exists("DataFileStorage",$param) and $param["DataFileStorage"] !== null) {
            $this->DataFileStorage = $param["DataFileStorage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastUpdateSnapshotId",$param) and $param["LastUpdateSnapshotId"] !== null) {
            $this->LastUpdateSnapshotId = $param["LastUpdateSnapshotId"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new LocationInfo();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
