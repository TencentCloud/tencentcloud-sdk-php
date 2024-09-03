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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表的分区数据
 *
 * @method string getPartitionName() 获取分区名称
 * @method void setPartitionName(string $PartitionName) 设置分区名称
 * @method integer getRecordCount() 获取分区记录数
 * @method void setRecordCount(integer $RecordCount) 设置分区记录数
 * @method string getStorageSize() 获取分区数据存储大小，字节数
 * @method void setStorageSize(string $StorageSize) 设置分区数据存储大小，字节数
 * @method string getCreateTime() 获取分区创建时间
 * @method void setCreateTime(string $CreateTime) 设置分区创建时间
 * @method string getModifiedTime() 获取分区修改时间
 * @method void setModifiedTime(string $ModifiedTime) 设置分区修改时间
 * @method string getStorageSizeWithUnit() 获取分区数据存储大小，已转为适合的单位
 * @method void setStorageSizeWithUnit(string $StorageSizeWithUnit) 设置分区数据存储大小，已转为适合的单位
 * @method integer getNumFiles() 获取文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumFiles(integer $NumFiles) 设置文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAverageFileSizeWithUnit() 获取平均文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverageFileSizeWithUnit(string $AverageFileSizeWithUnit) 设置平均文件大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class TablePartition extends AbstractModel
{
    /**
     * @var string 分区名称
     */
    public $PartitionName;

    /**
     * @var integer 分区记录数
     */
    public $RecordCount;

    /**
     * @var string 分区数据存储大小，字节数
     */
    public $StorageSize;

    /**
     * @var string 分区创建时间
     */
    public $CreateTime;

    /**
     * @var string 分区修改时间
     */
    public $ModifiedTime;

    /**
     * @var string 分区数据存储大小，已转为适合的单位
     */
    public $StorageSizeWithUnit;

    /**
     * @var integer 文件数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumFiles;

    /**
     * @var string 平均文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AverageFileSizeWithUnit;

    /**
     * @param string $PartitionName 分区名称
     * @param integer $RecordCount 分区记录数
     * @param string $StorageSize 分区数据存储大小，字节数
     * @param string $CreateTime 分区创建时间
     * @param string $ModifiedTime 分区修改时间
     * @param string $StorageSizeWithUnit 分区数据存储大小，已转为适合的单位
     * @param integer $NumFiles 文件数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AverageFileSizeWithUnit 平均文件大小
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("StorageSizeWithUnit",$param) and $param["StorageSizeWithUnit"] !== null) {
            $this->StorageSizeWithUnit = $param["StorageSizeWithUnit"];
        }

        if (array_key_exists("NumFiles",$param) and $param["NumFiles"] !== null) {
            $this->NumFiles = $param["NumFiles"];
        }

        if (array_key_exists("AverageFileSizeWithUnit",$param) and $param["AverageFileSizeWithUnit"] !== null) {
            $this->AverageFileSizeWithUnit = $param["AverageFileSizeWithUnit"];
        }
    }
}
