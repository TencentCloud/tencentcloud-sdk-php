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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportInstanceSlowQueries请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getStartTime() 获取事务开始最早时间
 * @method void setStartTime(string $StartTime) 设置事务开始最早时间
 * @method string getEndTime() 获取事务开始最晚时间
 * @method void setEndTime(string $EndTime) 设置事务开始最晚时间
 * @method integer getLimit() 获取限制条数
 * @method void setLimit(integer $Limit) 设置限制条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getHost() 获取客户端host
 * @method void setHost(string $Host) 设置客户端host
 * @method string getDatabase() 获取数据库名
 * @method void setDatabase(string $Database) 设置数据库名
 * @method string getFileType() 获取文件类型，可选值：csv, original
 * @method void setFileType(string $FileType) 设置文件类型，可选值：csv, original
 */
class ExportInstanceSlowQueriesRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 事务开始最早时间
     */
    public $StartTime;

    /**
     * @var string 事务开始最晚时间
     */
    public $EndTime;

    /**
     * @var integer 限制条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 客户端host
     */
    public $Host;

    /**
     * @var string 数据库名
     */
    public $Database;

    /**
     * @var string 文件类型，可选值：csv, original
     */
    public $FileType;

    /**
     * @param string $InstanceId 实例ID
     * @param string $StartTime 事务开始最早时间
     * @param string $EndTime 事务开始最晚时间
     * @param integer $Limit 限制条数
     * @param integer $Offset 偏移量
     * @param string $Username 用户名
     * @param string $Host 客户端host
     * @param string $Database 数据库名
     * @param string $FileType 文件类型，可选值：csv, original
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
