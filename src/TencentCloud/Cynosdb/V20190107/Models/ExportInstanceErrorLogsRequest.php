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
 * ExportInstanceErrorLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getStartTime() 获取日志最早时间
 * @method void setStartTime(string $StartTime) 设置日志最早时间
 * @method string getEndTime() 获取日志最晚时间
 * @method void setEndTime(string $EndTime) 设置日志最晚时间
 * @method integer getLimit() 获取限制条数
 * @method void setLimit(integer $Limit) 设置限制条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method array getLogLevels() 获取日志等级
 * @method void setLogLevels(array $LogLevels) 设置日志等级
 * @method array getKeyWords() 获取关键字
 * @method void setKeyWords(array $KeyWords) 设置关键字
 * @method string getFileType() 获取文件类型，可选值：csv, original
 * @method void setFileType(string $FileType) 设置文件类型，可选值：csv, original
 * @method string getOrderBy() 获取可选值Timestamp
 * @method void setOrderBy(string $OrderBy) 设置可选值Timestamp
 * @method string getOrderByType() 获取ASC或DESC
 * @method void setOrderByType(string $OrderByType) 设置ASC或DESC
 */
class ExportInstanceErrorLogsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 日志最早时间
     */
    public $StartTime;

    /**
     * @var string 日志最晚时间
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
     * @var array 日志等级
     */
    public $LogLevels;

    /**
     * @var array 关键字
     */
    public $KeyWords;

    /**
     * @var string 文件类型，可选值：csv, original
     */
    public $FileType;

    /**
     * @var string 可选值Timestamp
     */
    public $OrderBy;

    /**
     * @var string ASC或DESC
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 实例ID
     * @param string $StartTime 日志最早时间
     * @param string $EndTime 日志最晚时间
     * @param integer $Limit 限制条数
     * @param integer $Offset 偏移量
     * @param array $LogLevels 日志等级
     * @param array $KeyWords 关键字
     * @param string $FileType 文件类型，可选值：csv, original
     * @param string $OrderBy 可选值Timestamp
     * @param string $OrderByType ASC或DESC
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

        if (array_key_exists("LogLevels",$param) and $param["LogLevels"] !== null) {
            $this->LogLevels = $param["LogLevels"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
