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
 * DescribeDBAuditLogTopSqls请求参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间，如“2019-09-10 12:13:14”。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，如“2019-09-10 12:13:14”。</p>
 * @method string getEndTime() 获取<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，默认为&quot;mysql&quot;。</p>
 * @method string getInstanceId() 获取<p>实例 ID 。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID 。</p>
 * @method string getOrderBy() 获取<p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。</p>
 * @method string getOrderByDirection() 获取<p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
 * @method void setOrderByDirection(string $OrderByDirection) 设置<p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method string getTableName() 获取<p>表名</p>
 * @method void setTableName(string $TableName) 设置<p>表名</p>
 * @method array getHosts() 获取<p>Hosts名</p>
 * @method void setHosts(array $Hosts) 设置<p>Hosts名</p>
 * @method array getSqlCodes() 获取<p>sql codes</p>
 * @method void setSqlCodes(array $SqlCodes) 设置<p>sql codes</p>
 * @method string getSqlSample() 获取<p>sql语句</p>
 * @method void setSqlSample(string $SqlSample) 设置<p>sql语句</p>
 * @method array getUsers() 获取<p>用户名列表</p>
 * @method void setUsers(array $Users) 设置<p>用户名列表</p>
 */
class DescribeDBAuditLogTopSqlsRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间，如“2019-09-10 12:13:14”。</p>
     */
    public $StartTime;

    /**
     * @var string <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     */
    public $EndTime;

    /**
     * @var string <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @var string <p>实例 ID 。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
     */
    public $OrderByDirection;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var string <p>表名</p>
     */
    public $TableName;

    /**
     * @var array <p>Hosts名</p>
     */
    public $Hosts;

    /**
     * @var array <p>sql codes</p>
     */
    public $SqlCodes;

    /**
     * @var string <p>sql语句</p>
     */
    public $SqlSample;

    /**
     * @var array <p>用户名列表</p>
     */
    public $Users;

    /**
     * @param string $StartTime <p>开始时间，如“2019-09-10 12:13:14”。</p>
     * @param string $EndTime <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     * @param string $Product <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，默认为&quot;mysql&quot;。</p>
     * @param string $InstanceId <p>实例 ID 。</p>
     * @param string $OrderBy <p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。</p>
     * @param string $OrderByDirection <p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param string $TableName <p>表名</p>
     * @param array $Hosts <p>Hosts名</p>
     * @param array $SqlCodes <p>sql codes</p>
     * @param string $SqlSample <p>sql语句</p>
     * @param array $Users <p>用户名列表</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByDirection",$param) and $param["OrderByDirection"] !== null) {
            $this->OrderByDirection = $param["OrderByDirection"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("SqlCodes",$param) and $param["SqlCodes"] !== null) {
            $this->SqlCodes = $param["SqlCodes"];
        }

        if (array_key_exists("SqlSample",$param) and $param["SqlSample"] !== null) {
            $this->SqlSample = $param["SqlSample"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }
    }
}
