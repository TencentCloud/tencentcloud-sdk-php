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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBErrlogs请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID。    可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID。    可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method string getStartTime() 获取<p>查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。</p>
 * @method string getEndTime() 获取<p>查询结束时间，形如2018-01-01 00:00:00。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，形如2018-01-01 00:00:00。</p>
 * @method string getDatabaseName() 获取<p>数据库名字。</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>数据库名字。</p>
 * @method array getSearchKeys() 获取<p>搜索关键字。</p>
 * @method void setSearchKeys(array $SearchKeys) 设置<p>搜索关键字。</p>
 * @method integer getLimit() 获取<p>每页显示数量，取值范围为1-100。默认值为50。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页显示数量，取值范围为1-100。默认值为50。</p>
 * @method integer getOffset() 获取<p>数据偏移量，从0开始。默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>数据偏移量，从0开始。默认值为0。</p>
 * @method array getLogFilters() 获取<p>日志过滤条件。格式为  [{Type: &quot;ApplicationName&quot;, Compare: &quot;INC&quot;, Value: [&quot;123&quot;]}]。</p>
 * @method void setLogFilters(array $LogFilters) 设置<p>日志过滤条件。格式为  [{Type: &quot;ApplicationName&quot;, Compare: &quot;INC&quot;, Value: [&quot;123&quot;]}]。</p>
 */
class DescribeDBErrlogsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。    可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，形如2018-01-01 00:00:00。</p>
     */
    public $EndTime;

    /**
     * @var string <p>数据库名字。</p>
     */
    public $DatabaseName;

    /**
     * @var array <p>搜索关键字。</p>
     */
    public $SearchKeys;

    /**
     * @var integer <p>每页显示数量，取值范围为1-100。默认值为50。</p>
     */
    public $Limit;

    /**
     * @var integer <p>数据偏移量，从0开始。默认值为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>日志过滤条件。格式为  [{Type: &quot;ApplicationName&quot;, Compare: &quot;INC&quot;, Value: [&quot;123&quot;]}]。</p>
     */
    public $LogFilters;

    /**
     * @param string $DBInstanceId <p>实例ID。    可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param string $StartTime <p>查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。</p>
     * @param string $EndTime <p>查询结束时间，形如2018-01-01 00:00:00。</p>
     * @param string $DatabaseName <p>数据库名字。</p>
     * @param array $SearchKeys <p>搜索关键字。</p>
     * @param integer $Limit <p>每页显示数量，取值范围为1-100。默认值为50。</p>
     * @param integer $Offset <p>数据偏移量，从0开始。默认值为0。</p>
     * @param array $LogFilters <p>日志过滤条件。格式为  [{Type: &quot;ApplicationName&quot;, Compare: &quot;INC&quot;, Value: [&quot;123&quot;]}]。</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LogFilters",$param) and $param["LogFilters"] !== null) {
            $this->LogFilters = [];
            foreach ($param["LogFilters"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilters, $obj);
            }
        }
    }
}
