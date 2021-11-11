<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeSlowQueryList请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method string getStartTime() 获取查询起始时间戳，格式 “YYYY-MM-DD HH:mm:ss” ，日志保留时间默认为7天，起始时间不能超出保留时间范围。
 * @method void setStartTime(string $StartTime) 设置查询起始时间戳，格式 “YYYY-MM-DD HH:mm:ss” ，日志保留时间默认为7天，起始时间不能超出保留时间范围。
 * @method string getEndTime() 获取查询结束时间戳，格式 “YYYY-MM-DD HH:mm:ss”。
 * @method void setEndTime(string $EndTime) 设置查询结束时间戳，格式 “YYYY-MM-DD HH:mm:ss”。
 * @method string getDatabaseName() 获取根据数据库名进行筛选，可以为空。
 * @method void setDatabaseName(string $DatabaseName) 设置根据数据库名进行筛选，可以为空。
 * @method string getOrderByType() 获取排序类型。升序asc、降序desc。默认为desc。
 * @method void setOrderByType(string $OrderByType) 设置排序类型。升序asc、降序desc。默认为desc。
 * @method string getOrderBy() 获取排序维度。 可选参数，取值范围[SessionStartTime,Duration]，默认为SessionStartTime。
 * @method void setOrderBy(string $OrderBy) 设置排序维度。 可选参数，取值范围[SessionStartTime,Duration]，默认为SessionStartTime。
 * @method integer getLimit() 获取分页大小。取值范围[1,100],默认为20。
 * @method void setLimit(integer $Limit) 设置分页大小。取值范围[1,100],默认为20。
 * @method integer getOffset() 获取分页偏移。取值范围[0,INF)，默认为0。
 * @method void setOffset(integer $Offset) 设置分页偏移。取值范围[0,INF)，默认为0。
 */
class DescribeSlowQueryListRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 查询起始时间戳，格式 “YYYY-MM-DD HH:mm:ss” ，日志保留时间默认为7天，起始时间不能超出保留时间范围。
     */
    public $StartTime;

    /**
     * @var string 查询结束时间戳，格式 “YYYY-MM-DD HH:mm:ss”。
     */
    public $EndTime;

    /**
     * @var string 根据数据库名进行筛选，可以为空。
     */
    public $DatabaseName;

    /**
     * @var string 排序类型。升序asc、降序desc。默认为desc。
     */
    public $OrderByType;

    /**
     * @var string 排序维度。 可选参数，取值范围[SessionStartTime,Duration]，默认为SessionStartTime。
     */
    public $OrderBy;

    /**
     * @var integer 分页大小。取值范围[1,100],默认为20。
     */
    public $Limit;

    /**
     * @var integer 分页偏移。取值范围[0,INF)，默认为0。
     */
    public $Offset;

    /**
     * @param string $DBInstanceId 实例ID。
     * @param string $StartTime 查询起始时间戳，格式 “YYYY-MM-DD HH:mm:ss” ，日志保留时间默认为7天，起始时间不能超出保留时间范围。
     * @param string $EndTime 查询结束时间戳，格式 “YYYY-MM-DD HH:mm:ss”。
     * @param string $DatabaseName 根据数据库名进行筛选，可以为空。
     * @param string $OrderByType 排序类型。升序asc、降序desc。默认为desc。
     * @param string $OrderBy 排序维度。 可选参数，取值范围[SessionStartTime,Duration]，默认为SessionStartTime。
     * @param integer $Limit 分页大小。取值范围[1,100],默认为20。
     * @param integer $Offset 分页偏移。取值范围[0,INF)，默认为0。
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

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
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
    }
}
