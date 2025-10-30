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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLog请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getLimit() 获取返回数量，默认为20，最大值为2000
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为2000
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method string getDatabase() 获取数据库
 * @method void setDatabase(string $Database) 设置数据库
 * @method string getOrderBy() 获取排序根据
 * @method void setOrderBy(string $OrderBy) 设置排序根据
 * @method string getOrderByType() 获取升降序
 * @method void setOrderByType(string $OrderByType) 设置升降序
 * @method float getDuration() 获取过滤时间
 * @method void setDuration(float $Duration) 设置过滤时间
 * @method string getUserName() 获取执行用户
 * @method void setUserName(string $UserName) 设置执行用户
 * @method string getQueryString() 获取query 语句
 * @method void setQueryString(string $QueryString) 设置query 语句
 */
class DescribeSlowLogRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 返回数量，默认为20，最大值为2000
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var string 数据库
     */
    public $Database;

    /**
     * @var string 排序根据
     */
    public $OrderBy;

    /**
     * @var string 升降序
     */
    public $OrderByType;

    /**
     * @var float 过滤时间
     */
    public $Duration;

    /**
     * @var string 执行用户
     */
    public $UserName;

    /**
     * @var string query 语句
     */
    public $QueryString;

    /**
     * @param string $InstanceId 集群实例ID
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param integer $Limit 返回数量，默认为20，最大值为2000
     * @param integer $Offset 偏移量，默认为0
     * @param string $Database 数据库
     * @param string $OrderBy 排序根据
     * @param string $OrderByType 升降序
     * @param float $Duration 过滤时间
     * @param string $UserName 执行用户
     * @param string $QueryString query 语句
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }
    }
}
