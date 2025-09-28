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
 * DescribeSlowLogQueryTimeStats请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getStartTime() 获取开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。
 * @method string getEndTime() 获取截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
 * @method void setEndTime(string $EndTime) 设置截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
 * @method string getProduct() 获取"mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
 * @method void setProduct(string $Product) 设置"mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
 * @method string getInstanceProxyId() 获取Proxy节点ID。
 * @method void setInstanceProxyId(string $InstanceProxyId) 设置Proxy节点ID。
 * @method string getInstanceNodeId() 获取实例节点ID。
 * @method void setInstanceNodeId(string $InstanceNodeId) 设置实例节点ID。
 * @method string getType() 获取查询类型，目前支持值：mongod，mongos。
其中：
mongod - MongoDB的数据存储节点
mongos - MongoDB的路由节点
 * @method void setType(string $Type) 设置查询类型，目前支持值：mongod，mongos。
其中：
mongod - MongoDB的数据存储节点
mongos - MongoDB的路由节点
 */
class DescribeSlowLogQueryTimeStatsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。
     */
    public $StartTime;

    /**
     * @var string 截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
     */
    public $EndTime;

    /**
     * @var string "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
     */
    public $Product;

    /**
     * @var string Proxy节点ID。
     */
    public $InstanceProxyId;

    /**
     * @var string 实例节点ID。
     */
    public $InstanceNodeId;

    /**
     * @var string 查询类型，目前支持值：mongod，mongos。
其中：
mongod - MongoDB的数据存储节点
mongos - MongoDB的路由节点
     */
    public $Type;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $StartTime 开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。
     * @param string $EndTime 截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。
     * @param string $Product "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，"redis" - 云数据库 Redis，"mongodb" - 云数据库 MongoDB，默认为"mysql"。
     * @param string $InstanceProxyId Proxy节点ID。
     * @param string $InstanceNodeId 实例节点ID。
     * @param string $Type 查询类型，目前支持值：mongod，mongos。
其中：
mongod - MongoDB的数据存储节点
mongos - MongoDB的路由节点
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceProxyId",$param) and $param["InstanceProxyId"] !== null) {
            $this->InstanceProxyId = $param["InstanceProxyId"];
        }

        if (array_key_exists("InstanceNodeId",$param) and $param["InstanceNodeId"] !== null) {
            $this->InstanceNodeId = $param["InstanceNodeId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
