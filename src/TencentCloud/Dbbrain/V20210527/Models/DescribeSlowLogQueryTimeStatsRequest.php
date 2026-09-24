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
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method string getStartTime() 获取<p>开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method string getEndTime() 获取<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method string getProduct() 获取<p>&quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>&quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
 * @method string getInstanceProxyId() 获取<p>Proxy节点ID。</p>
 * @method void setInstanceProxyId(string $InstanceProxyId) 设置<p>Proxy节点ID。</p>
 * @method string getInstanceNodeId() 获取<p>实例节点ID。</p>
 * @method void setInstanceNodeId(string $InstanceNodeId) 设置<p>实例节点ID。</p>
 * @method string getType() 获取<p>查询类型，目前支持值：mongod，mongos。<br>其中：<br>mongod - MongoDB的数据存储节点<br>mongos - MongoDB的路由节点</p>
 * @method void setType(string $Type) 设置<p>查询类型，目前支持值：mongod，mongos。<br>其中：<br>mongod - MongoDB的数据存储节点<br>mongos - MongoDB的路由节点</p>
 */
class DescribeSlowLogQueryTimeStatsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。</p>
     */
    public $StartTime;

    /**
     * @var string <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     */
    public $EndTime;

    /**
     * @var string <p>&quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @var string <p>Proxy节点ID。</p>
     */
    public $InstanceProxyId;

    /**
     * @var string <p>实例节点ID。</p>
     */
    public $InstanceNodeId;

    /**
     * @var string <p>查询类型，目前支持值：mongod，mongos。<br>其中：<br>mongod - MongoDB的数据存储节点<br>mongos - MongoDB的路由节点</p>
     */
    public $Type;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param string $StartTime <p>开始时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔小于7天。</p>
     * @param string $EndTime <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     * @param string $Product <p>&quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
     * @param string $InstanceProxyId <p>Proxy节点ID。</p>
     * @param string $InstanceNodeId <p>实例节点ID。</p>
     * @param string $Type <p>查询类型，目前支持值：mongod，mongos。<br>其中：<br>mongod - MongoDB的数据存储节点<br>mongos - MongoDB的路由节点</p>
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
