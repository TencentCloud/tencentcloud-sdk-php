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
 * DLC分区信息查询返回数据结构
 *
 * @method string getTableFormat() 获取数据表格式
 * @method void setTableFormat(string $TableFormat) 设置数据表格式
 * @method integer getTotalSize() 获取分区总数
 * @method void setTotalSize(integer $TotalSize) 设置分区总数
 * @method string getNextCursor() 获取分页查询的游标信息，在获取下一页信息时需要回传到服务端
 * @method void setNextCursor(string $NextCursor) 设置分页查询的游标信息，在获取下一页信息时需要回传到服务端
 * @method array getIcebergPartitions() 获取iceberg表分区信息
 * @method void setIcebergPartitions(array $IcebergPartitions) 设置iceberg表分区信息
 * @method array getHivePartitions() 获取hive表分区信息
 * @method void setHivePartitions(array $HivePartitions) 设置hive表分区信息
 */
class MixedTablePartitions extends AbstractModel
{
    /**
     * @var string 数据表格式
     */
    public $TableFormat;

    /**
     * @var integer 分区总数
     */
    public $TotalSize;

    /**
     * @var string 分页查询的游标信息，在获取下一页信息时需要回传到服务端
     */
    public $NextCursor;

    /**
     * @var array iceberg表分区信息
     */
    public $IcebergPartitions;

    /**
     * @var array hive表分区信息
     */
    public $HivePartitions;

    /**
     * @param string $TableFormat 数据表格式
     * @param integer $TotalSize 分区总数
     * @param string $NextCursor 分页查询的游标信息，在获取下一页信息时需要回传到服务端
     * @param array $IcebergPartitions iceberg表分区信息
     * @param array $HivePartitions hive表分区信息
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
        if (array_key_exists("TableFormat",$param) and $param["TableFormat"] !== null) {
            $this->TableFormat = $param["TableFormat"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }

        if (array_key_exists("IcebergPartitions",$param) and $param["IcebergPartitions"] !== null) {
            $this->IcebergPartitions = [];
            foreach ($param["IcebergPartitions"] as $key => $value){
                $obj = new IcebergTablePartition();
                $obj->deserialize($value);
                array_push($this->IcebergPartitions, $obj);
            }
        }

        if (array_key_exists("HivePartitions",$param) and $param["HivePartitions"] !== null) {
            $this->HivePartitions = [];
            foreach ($param["HivePartitions"] as $key => $value){
                $obj = new HiveTablePartition();
                $obj->deserialize($value);
                array_push($this->HivePartitions, $obj);
            }
        }
    }
}
