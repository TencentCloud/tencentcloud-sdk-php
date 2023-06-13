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
 * DescribeDBErrlogs请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。	
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。	
 * @method string getStartTime() 获取查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。	
 * @method void setStartTime(string $StartTime) 设置查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。	
 * @method string getEndTime() 获取查询结束时间，形如2018-01-01 00:00:00。	
 * @method void setEndTime(string $EndTime) 设置查询结束时间，形如2018-01-01 00:00:00。	
 * @method string getDatabaseName() 获取数据库名字。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名字。
 * @method array getSearchKeys() 获取搜索关键字。
 * @method void setSearchKeys(array $SearchKeys) 设置搜索关键字。
 * @method integer getLimit() 获取每页显示数量，取值范围为1-100。默认值为50。	
 * @method void setLimit(integer $Limit) 设置每页显示数量，取值范围为1-100。默认值为50。	
 * @method integer getOffset() 获取数据偏移量，从0开始。默认值为0。	
 * @method void setOffset(integer $Offset) 设置数据偏移量，从0开始。默认值为0。	
 */
class DescribeDBErrlogsRequest extends AbstractModel
{
    /**
     * @var string 实例ID。	
     */
    public $DBInstanceId;

    /**
     * @var string 查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。	
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，形如2018-01-01 00:00:00。	
     */
    public $EndTime;

    /**
     * @var string 数据库名字。
     */
    public $DatabaseName;

    /**
     * @var array 搜索关键字。
     */
    public $SearchKeys;

    /**
     * @var integer 每页显示数量，取值范围为1-100。默认值为50。	
     */
    public $Limit;

    /**
     * @var integer 数据偏移量，从0开始。默认值为0。	
     */
    public $Offset;

    /**
     * @param string $DBInstanceId 实例ID。	
     * @param string $StartTime 查询起始时间，形如2018-01-01 00:00:00。日志保留时间默认为7天，起始时间不能超出保留时间范围。	
     * @param string $EndTime 查询结束时间，形如2018-01-01 00:00:00。	
     * @param string $DatabaseName 数据库名字。
     * @param array $SearchKeys 搜索关键字。
     * @param integer $Limit 每页显示数量，取值范围为1-100。默认值为50。	
     * @param integer $Offset 数据偏移量，从0开始。默认值为0。	
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
    }
}
