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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxyProcessStatistics请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getInstanceProxyId() 获取该实例下需要查询的某一个 ProxyID 。
 * @method void setInstanceProxyId(string $InstanceProxyId) 设置该实例下需要查询的某一个 ProxyID 。
 * @method integer getLimit() 获取返回数量。
 * @method void setLimit(integer $Limit) 设置返回数量。
 * @method string getProduct() 获取服务产品类型，支持值包括： "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "redis" - 云数据库 Redis。
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method string getSortBy() 获取按照某字段排序。支持值包括："AllConn"，"ActiveConn"，"Ip"。
其中：

- AllConn ：表示总连接数（活跃连接 + 非活跃连接）
- ActiveConn：表示活跃连接数
- Ip：表示 IP 地址
 * @method void setSortBy(string $SortBy) 设置按照某字段排序。支持值包括："AllConn"，"ActiveConn"，"Ip"。
其中：

- AllConn ：表示总连接数（活跃连接 + 非活跃连接）
- ActiveConn：表示活跃连接数
- Ip：表示 IP 地址
 * @method string getOrderDirection() 获取排序方向。支持值包括："DESC"，"ASC"。
其中：

- DESC：降序
- ASC：升序
 * @method void setOrderDirection(string $OrderDirection) 设置排序方向。支持值包括："DESC"，"ASC"。
其中：

- DESC：降序
- ASC：升序
 */
class DescribeProxyProcessStatisticsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 该实例下需要查询的某一个 ProxyID 。
     */
    public $InstanceProxyId;

    /**
     * @var integer 返回数量。
     */
    public $Limit;

    /**
     * @var string 服务产品类型，支持值包括： "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var string 按照某字段排序。支持值包括："AllConn"，"ActiveConn"，"Ip"。
其中：

- AllConn ：表示总连接数（活跃连接 + 非活跃连接）
- ActiveConn：表示活跃连接数
- Ip：表示 IP 地址
     */
    public $SortBy;

    /**
     * @var string 排序方向。支持值包括："DESC"，"ASC"。
其中：

- DESC：降序
- ASC：升序
     */
    public $OrderDirection;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $InstanceProxyId 该实例下需要查询的某一个 ProxyID 。
     * @param integer $Limit 返回数量。
     * @param string $Product 服务产品类型，支持值包括： "redis" - 云数据库 Redis。
     * @param integer $Offset 偏移量，默认0。
     * @param string $SortBy 按照某字段排序。支持值包括："AllConn"，"ActiveConn"，"Ip"。
其中：

- AllConn ：表示总连接数（活跃连接 + 非活跃连接）
- ActiveConn：表示活跃连接数
- Ip：表示 IP 地址
     * @param string $OrderDirection 排序方向。支持值包括："DESC"，"ASC"。
其中：

- DESC：降序
- ASC：升序
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceProxyId",$param) and $param["InstanceProxyId"] !== null) {
            $this->InstanceProxyId = $param["InstanceProxyId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
