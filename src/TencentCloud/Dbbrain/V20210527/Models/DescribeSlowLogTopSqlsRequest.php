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
 * DescribeSlowLogTopSqls请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method string getStartTime() 获取<p>开始时间，如“2019-09-10 12:13:14”。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，如“2019-09-10 12:13:14”。</p>
 * @method string getEndTime() 获取<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
 * @method string getSortBy() 获取<p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。<br>其中：<br>QueryTime-查询耗时<br>ExecTimes-执行次数<br>RowsSent-返回行数<br>LockTime-锁等待时间<br>RowsExamined-扫描行数</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。<br>其中：<br>QueryTime-查询耗时<br>ExecTimes-执行次数<br>RowsSent-返回行数<br>LockTime-锁等待时间<br>RowsExamined-扫描行数</p>
 * @method string getOrderBy() 获取<p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method array getSchemaList() 获取<p>数据库名称数组。</p>
 * @method void setSchemaList(array $SchemaList) 设置<p>数据库名称数组。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL， &quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL， &quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
 */
class DescribeSlowLogTopSqlsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>开始时间，如“2019-09-10 12:13:14”。</p>
     */
    public $StartTime;

    /**
     * @var string <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     */
    public $EndTime;

    /**
     * @var string <p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。<br>其中：<br>QueryTime-查询耗时<br>ExecTimes-执行次数<br>RowsSent-返回行数<br>LockTime-锁等待时间<br>RowsExamined-扫描行数</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>数据库名称数组。</p>
     */
    public $SchemaList;

    /**
     * @var string <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL， &quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param string $StartTime <p>开始时间，如“2019-09-10 12:13:14”。</p>
     * @param string $EndTime <p>截止时间，如“2019-09-11 10:13:14”，截止时间与开始时间的间隔小于7天。</p>
     * @param string $SortBy <p>排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键，默认为QueryTime。<br>其中：<br>QueryTime-查询耗时<br>ExecTimes-执行次数<br>RowsSent-返回行数<br>LockTime-锁等待时间<br>RowsExamined-扫描行数</p>
     * @param string $OrderBy <p>排序方式，支持ASC（升序）以及DESC（降序），默认为DESC。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param array $SchemaList <p>数据库名称数组。</p>
     * @param string $Product <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL， &quot;tdstore&quot; - 云数据库TDSQL Boundless，默认为&quot;mysql&quot;。</p>
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

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SchemaList",$param) and $param["SchemaList"] !== null) {
            $this->SchemaList = [];
            foreach ($param["SchemaList"] as $key => $value){
                $obj = new SchemaItem();
                $obj->deserialize($value);
                array_push($this->SchemaList, $obj);
            }
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
