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
 * Hive表分区信息
 *
 * @method string getPartition() 获取分区信息名称
 * @method void setPartition(string $Partition) 设置分区信息名称
 * @method integer getRecords() 获取分区记录数
 * @method void setRecords(integer $Records) 设置分区记录数
 * @method integer getDataFileStorage() 获取分区数据文件存储量
 * @method void setDataFileStorage(integer $DataFileStorage) 设置分区数据文件存储量
 * @method string getCreateTime() 获取分区创建时间
 * @method void setCreateTime(string $CreateTime) 设置分区创建时间
 * @method string getModifiedTime() 获取分区schema更新时间
 * @method void setModifiedTime(string $ModifiedTime) 设置分区schema更新时间
 * @method string getLastAccessTime() 获取最后一次分区更新的访问时间
 * @method void setLastAccessTime(string $LastAccessTime) 设置最后一次分区更新的访问时间
 */
class HiveTablePartition extends AbstractModel
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
     * @var integer 分区数据文件存储量
     */
    public $DataFileStorage;

    /**
     * @var string 分区创建时间
     */
    public $CreateTime;

    /**
     * @var string 分区schema更新时间
     */
    public $ModifiedTime;

    /**
     * @var string 最后一次分区更新的访问时间
     */
    public $LastAccessTime;

    /**
     * @param string $Partition 分区信息名称
     * @param integer $Records 分区记录数
     * @param integer $DataFileStorage 分区数据文件存储量
     * @param string $CreateTime 分区创建时间
     * @param string $ModifiedTime 分区schema更新时间
     * @param string $LastAccessTime 最后一次分区更新的访问时间
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

        if (array_key_exists("DataFileStorage",$param) and $param["DataFileStorage"] !== null) {
            $this->DataFileStorage = $param["DataFileStorage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }
    }
}
