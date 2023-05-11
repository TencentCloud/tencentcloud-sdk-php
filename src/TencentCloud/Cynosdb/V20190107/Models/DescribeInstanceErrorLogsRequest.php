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
 * DescribeInstanceErrorLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getLimit() 获取日志条数限制
 * @method void setLimit(integer $Limit) 设置日志条数限制
 * @method integer getOffset() 获取日志条数偏移量
 * @method void setOffset(integer $Offset) 设置日志条数偏移量
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getOrderBy() 获取排序字段，有Timestamp枚举值
 * @method void setOrderBy(string $OrderBy) 设置排序字段，有Timestamp枚举值
 * @method string getOrderByType() 获取排序类型，有ASC,DESC枚举值
 * @method void setOrderByType(string $OrderByType) 设置排序类型，有ASC,DESC枚举值
 * @method array getLogLevels() 获取日志等级，有error、warning、note三种，支持多个等级同时搜索
 * @method void setLogLevels(array $LogLevels) 设置日志等级，有error、warning、note三种，支持多个等级同时搜索
 * @method array getKeyWords() 获取关键字，支持模糊搜索
 * @method void setKeyWords(array $KeyWords) 设置关键字，支持模糊搜索
 */
class DescribeInstanceErrorLogsRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 日志条数限制
     */
    public $Limit;

    /**
     * @var integer 日志条数偏移量
     */
    public $Offset;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 排序字段，有Timestamp枚举值
     */
    public $OrderBy;

    /**
     * @var string 排序类型，有ASC,DESC枚举值
     */
    public $OrderByType;

    /**
     * @var array 日志等级，有error、warning、note三种，支持多个等级同时搜索
     */
    public $LogLevels;

    /**
     * @var array 关键字，支持模糊搜索
     */
    public $KeyWords;

    /**
     * @param string $InstanceId 实例Id
     * @param integer $Limit 日志条数限制
     * @param integer $Offset 日志条数偏移量
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $OrderBy 排序字段，有Timestamp枚举值
     * @param string $OrderByType 排序类型，有ASC,DESC枚举值
     * @param array $LogLevels 日志等级，有error、warning、note三种，支持多个等级同时搜索
     * @param array $KeyWords 关键字，支持模糊搜索
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("LogLevels",$param) and $param["LogLevels"] !== null) {
            $this->LogLevels = $param["LogLevels"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }
    }
}
