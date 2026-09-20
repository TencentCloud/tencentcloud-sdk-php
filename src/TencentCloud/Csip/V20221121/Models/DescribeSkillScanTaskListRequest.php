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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillScanTaskList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认 0
 * @method integer getLimit() 获取每页数量，默认 10，上限 200
 * @method void setLimit(integer $Limit) 设置每页数量，默认 10，上限 200
 * @method string getStartTime() 获取开始时间，筛选上传时间不早于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
使用约束：StartTime 与 EndTime 要么同时传入，要么都不传；都不传时默认查询本月数据
 * @method void setStartTime(string $StartTime) 设置开始时间，筛选上传时间不早于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
使用约束：StartTime 与 EndTime 要么同时传入，要么都不传；都不传时默认查询本月数据
 * @method string getEndTime() 获取结束时间，筛选上传时间不晚于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
建议与 StartTime 同时传入；未传入时默认使用当前时间作为结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间，筛选上传时间不晚于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
建议与 StartTime 同时传入；未传入时默认使用当前时间作为结束时间
 * @method string getOrder() 获取排序方式
最大长度：128 字符
枚举值：
ASC：升序
DESC：降序（默认）
 * @method void setOrder(string $Order) 设置排序方式
最大长度：128 字符
枚举值：
ASC：升序
DESC：降序（默认）
 * @method string getBy() 获取排序字段
最大长度：128 字符
枚举值：
InsertTime：上传时间（默认）
 * @method void setBy(string $By) 设置排序字段
最大长度：128 字符
枚举值：
InsertTime：上传时间（默认）
 */
class DescribeSkillScanTaskListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认 0
     */
    public $Offset;

    /**
     * @var integer 每页数量，默认 10，上限 200
     */
    public $Limit;

    /**
     * @var string 开始时间，筛选上传时间不早于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
使用约束：StartTime 与 EndTime 要么同时传入，要么都不传；都不传时默认查询本月数据
     */
    public $StartTime;

    /**
     * @var string 结束时间，筛选上传时间不晚于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
建议与 StartTime 同时传入；未传入时默认使用当前时间作为结束时间
     */
    public $EndTime;

    /**
     * @var string 排序方式
最大长度：128 字符
枚举值：
ASC：升序
DESC：降序（默认）
     */
    public $Order;

    /**
     * @var string 排序字段
最大长度：128 字符
枚举值：
InsertTime：上传时间（默认）
     */
    public $By;

    /**
     * @param integer $Offset 偏移量，默认 0
     * @param integer $Limit 每页数量，默认 10，上限 200
     * @param string $StartTime 开始时间，筛选上传时间不早于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
使用约束：StartTime 与 EndTime 要么同时传入，要么都不传；都不传时默认查询本月数据
     * @param string $EndTime 结束时间，筛选上传时间不晚于该时刻的任务
参数格式：YYYY-MM-DD HH:mm:ss
最大长度：128 字符
建议与 StartTime 同时传入；未传入时默认使用当前时间作为结束时间
     * @param string $Order 排序方式
最大长度：128 字符
枚举值：
ASC：升序
DESC：降序（默认）
     * @param string $By 排序字段
最大长度：128 字符
枚举值：
InsertTime：上传时间（默认）
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
