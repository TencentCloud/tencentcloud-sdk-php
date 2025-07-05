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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLogExport请求参数结构体
 *
 * @method integer getCount() 获取日志导出数量, 最大值5000万
 * @method void setCount(integer $Count) 设置日志导出数量, 最大值5000万
 * @method integer getStartTime() 获取日志导出起始时间，毫秒时间戳
 * @method void setStartTime(integer $StartTime) 设置日志导出起始时间，毫秒时间戳
 * @method integer getEndTime() 获取日志导出结束时间，毫秒时间戳
 * @method void setEndTime(integer $EndTime) 设置日志导出结束时间，毫秒时间戳
 * @method string getQueryString() 获取日志导出检索语句，不支持[SQL语句]
 * @method void setQueryString(string $QueryString) 设置日志导出检索语句，不支持[SQL语句]
 * @method string getSort() 获取日志导出时间排序。desc，asc，默认为desc
 * @method void setSort(string $Sort) 设置日志导出时间排序。desc，asc，默认为desc
 * @method string getFormat() 获取日志导出数据格式。json，csv，默认为json
 * @method void setFormat(string $Format) 设置日志导出数据格式。json，csv，默认为json
 */
class CreateLogExportRequest extends AbstractModel
{
    /**
     * @var integer 日志导出数量, 最大值5000万
     */
    public $Count;

    /**
     * @var integer 日志导出起始时间，毫秒时间戳
     */
    public $StartTime;

    /**
     * @var integer 日志导出结束时间，毫秒时间戳
     */
    public $EndTime;

    /**
     * @var string 日志导出检索语句，不支持[SQL语句]
     */
    public $QueryString;

    /**
     * @var string 日志导出时间排序。desc，asc，默认为desc
     */
    public $Sort;

    /**
     * @var string 日志导出数据格式。json，csv，默认为json
     */
    public $Format;

    /**
     * @param integer $Count 日志导出数量, 最大值5000万
     * @param integer $StartTime 日志导出起始时间，毫秒时间戳
     * @param integer $EndTime 日志导出结束时间，毫秒时间戳
     * @param string $QueryString 日志导出检索语句，不支持[SQL语句]
     * @param string $Sort 日志导出时间排序。desc，asc，默认为desc
     * @param string $Format 日志导出数据格式。json，csv，默认为json
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
