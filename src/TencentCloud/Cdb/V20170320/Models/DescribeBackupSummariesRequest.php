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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupSummaries请求参数结构体
 *
 * @method string getProduct() 获取需要查询备份实时统计的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点云盘版实例，mysql-cluster 指云盘版（原集群版）实例。
 * @method void setProduct(string $Product) 设置需要查询备份实时统计的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点云盘版实例，mysql-cluster 指云盘版（原集群版）实例。
 * @method integer getOffset() 获取分页查询数据的偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置分页查询数据的偏移量，默认为0。
 * @method integer getLimit() 获取分页查询数据的条目限制，默认值为20。最小值为1，最大值为100。
 * @method void setLimit(integer $Limit) 设置分页查询数据的条目限制，默认值为20。最小值为1，最大值为100。
 * @method string getOrderBy() 获取指定按某一项排序，可选值包括： BackupVolume: 备份容量， DataBackupVolume: 数据备份容量， BinlogBackupVolume: 日志备份容量， AutoBackupVolume: 自动备份容量， ManualBackupVolume: 手动备份容量。默认按照BackupVolume排序。
 * @method void setOrderBy(string $OrderBy) 设置指定按某一项排序，可选值包括： BackupVolume: 备份容量， DataBackupVolume: 数据备份容量， BinlogBackupVolume: 日志备份容量， AutoBackupVolume: 自动备份容量， ManualBackupVolume: 手动备份容量。默认按照BackupVolume排序。
 * @method string getOrderDirection() 获取指定排序方向，可选值包括： ASC: 正序， DESC: 逆序。默认值为 ASC。
 * @method void setOrderDirection(string $OrderDirection) 设置指定排序方向，可选值包括： ASC: 正序， DESC: 逆序。默认值为 ASC。
 */
class DescribeBackupSummariesRequest extends AbstractModel
{
    /**
     * @var string 需要查询备份实时统计的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点云盘版实例，mysql-cluster 指云盘版（原集群版）实例。
     */
    public $Product;

    /**
     * @var integer 分页查询数据的偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 分页查询数据的条目限制，默认值为20。最小值为1，最大值为100。
     */
    public $Limit;

    /**
     * @var string 指定按某一项排序，可选值包括： BackupVolume: 备份容量， DataBackupVolume: 数据备份容量， BinlogBackupVolume: 日志备份容量， AutoBackupVolume: 自动备份容量， ManualBackupVolume: 手动备份容量。默认按照BackupVolume排序。
     */
    public $OrderBy;

    /**
     * @var string 指定排序方向，可选值包括： ASC: 正序， DESC: 逆序。默认值为 ASC。
     */
    public $OrderDirection;

    /**
     * @param string $Product 需要查询备份实时统计的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点云盘版实例，mysql-cluster 指云盘版（原集群版）实例。
     * @param integer $Offset 分页查询数据的偏移量，默认为0。
     * @param integer $Limit 分页查询数据的条目限制，默认值为20。最小值为1，最大值为100。
     * @param string $OrderBy 指定按某一项排序，可选值包括： BackupVolume: 备份容量， DataBackupVolume: 数据备份容量， BinlogBackupVolume: 日志备份容量， AutoBackupVolume: 自动备份容量， ManualBackupVolume: 手动备份容量。默认按照BackupVolume排序。
     * @param string $OrderDirection 指定排序方向，可选值包括： ASC: 正序， DESC: 逆序。默认值为 ASC。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
