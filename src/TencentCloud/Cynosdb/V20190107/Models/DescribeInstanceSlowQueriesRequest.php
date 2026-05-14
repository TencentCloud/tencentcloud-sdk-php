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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSlowQueries请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getStartTime() 获取<p>事务开始最早时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>事务开始最早时间</p>
 * @method string getEndTime() 获取<p>事务开始最晚时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>事务开始最晚时间</p>
 * @method integer getLimit() 获取<p>限制条数</p><p>建议控制 limit 大小，当 limit 过大时，由于平台返回结果大小限制，可能会造成截断</p>
 * @method void setLimit(integer $Limit) 设置<p>限制条数</p><p>建议控制 limit 大小，当 limit 过大时，由于平台返回结果大小限制，可能会造成截断</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method string getUsername() 获取<p>用户名</p>
 * @method void setUsername(string $Username) 设置<p>用户名</p>
 * @method string getHost() 获取<p>客户端host</p>
 * @method void setHost(string $Host) 设置<p>客户端host</p>
 * @method string getDatabase() 获取<p>数据库名</p>
 * @method void setDatabase(string $Database) 设置<p>数据库名</p>
 * @method string getOrderBy() 获取<p>排序字段</p><p>枚举值：</p><ul><li>QueryTime： 按照 SQL 语句的总执行时长排序</li><li>LockTime： 按照 SQL 语句在等待锁（如表锁、行锁）上消耗的时间排序</li><li>RowsExamined： 按照 SQL 语句在执行过程中扫描的行数排序</li><li>RowsSent： 按照 SQL 语句最终返回给客户端的结果行数排序</li><li>Timestamp： 按照慢查询语句发生的时间戳排序</li></ul>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段</p><p>枚举值：</p><ul><li>QueryTime： 按照 SQL 语句的总执行时长排序</li><li>LockTime： 按照 SQL 语句在等待锁（如表锁、行锁）上消耗的时间排序</li><li>RowsExamined： 按照 SQL 语句在执行过程中扫描的行数排序</li><li>RowsSent： 按照 SQL 语句最终返回给客户端的结果行数排序</li><li>Timestamp： 按照慢查询语句发生的时间戳排序</li></ul>
 * @method string getOrderByType() 获取<p>排序类型，可选值：asc,desc</p>
 * @method void setOrderByType(string $OrderByType) 设置<p>排序类型，可选值：asc,desc</p>
 * @method string getSqlText() 获取<p>sql语句</p>
 * @method void setSqlText(string $SqlText) 设置<p>sql语句</p>
 */
class DescribeInstanceSlowQueriesRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>事务开始最早时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>事务开始最晚时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>限制条数</p><p>建议控制 limit 大小，当 limit 过大时，由于平台返回结果大小限制，可能会造成截断</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>用户名</p>
     */
    public $Username;

    /**
     * @var string <p>客户端host</p>
     */
    public $Host;

    /**
     * @var string <p>数据库名</p>
     */
    public $Database;

    /**
     * @var string <p>排序字段</p><p>枚举值：</p><ul><li>QueryTime： 按照 SQL 语句的总执行时长排序</li><li>LockTime： 按照 SQL 语句在等待锁（如表锁、行锁）上消耗的时间排序</li><li>RowsExamined： 按照 SQL 语句在执行过程中扫描的行数排序</li><li>RowsSent： 按照 SQL 语句最终返回给客户端的结果行数排序</li><li>Timestamp： 按照慢查询语句发生的时间戳排序</li></ul>
     */
    public $OrderBy;

    /**
     * @var string <p>排序类型，可选值：asc,desc</p>
     */
    public $OrderByType;

    /**
     * @var string <p>sql语句</p>
     */
    public $SqlText;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $StartTime <p>事务开始最早时间</p>
     * @param string $EndTime <p>事务开始最晚时间</p>
     * @param integer $Limit <p>限制条数</p><p>建议控制 limit 大小，当 limit 过大时，由于平台返回结果大小限制，可能会造成截断</p>
     * @param integer $Offset <p>偏移量</p>
     * @param string $Username <p>用户名</p>
     * @param string $Host <p>客户端host</p>
     * @param string $Database <p>数据库名</p>
     * @param string $OrderBy <p>排序字段</p><p>枚举值：</p><ul><li>QueryTime： 按照 SQL 语句的总执行时长排序</li><li>LockTime： 按照 SQL 语句在等待锁（如表锁、行锁）上消耗的时间排序</li><li>RowsExamined： 按照 SQL 语句在执行过程中扫描的行数排序</li><li>RowsSent： 按照 SQL 语句最终返回给客户端的结果行数排序</li><li>Timestamp： 按照慢查询语句发生的时间戳排序</li></ul>
     * @param string $OrderByType <p>排序类型，可选值：asc,desc</p>
     * @param string $SqlText <p>sql语句</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }
    }
}
