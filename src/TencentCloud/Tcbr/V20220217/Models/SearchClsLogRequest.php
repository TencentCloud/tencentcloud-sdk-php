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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchClsLog请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getQueryString() 获取查询语句，详情参考 https://cloud.tencent.com/document/product/614/47044
 * @method void setQueryString(string $QueryString) 设置查询语句，详情参考 https://cloud.tencent.com/document/product/614/47044
 * @method integer getLimit() 获取单次要返回的日志条数，单次返回的最大条数为100
 * @method void setLimit(integer $Limit) 设置单次要返回的日志条数，单次返回的最大条数为100
 * @method string getContext() 获取加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
 * @method void setContext(string $Context) 设置加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
 * @method string getSort() 获取按时间排序 asc（升序）或者 desc（降序），默认为 desc
 * @method void setSort(string $Sort) 设置按时间排序 asc（升序）或者 desc（降序），默认为 desc
 * @method boolean getUseLucene() 获取是否使用Lucene语法，默认为false
 * @method void setUseLucene(boolean $UseLucene) 设置是否使用Lucene语法，默认为false
 * @method integer getLogType() 获取日志类型
 * @method void setLogType(integer $LogType) 设置日志类型
 */
class SearchClsLogRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 查询语句，详情参考 https://cloud.tencent.com/document/product/614/47044
     */
    public $QueryString;

    /**
     * @var integer 单次要返回的日志条数，单次返回的最大条数为100
     */
    public $Limit;

    /**
     * @var string 加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
     */
    public $Context;

    /**
     * @var string 按时间排序 asc（升序）或者 desc（降序），默认为 desc
     */
    public $Sort;

    /**
     * @var boolean 是否使用Lucene语法，默认为false
     */
    public $UseLucene;

    /**
     * @var integer 日志类型
     */
    public $LogType;

    /**
     * @param string $EnvId 环境Id
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $QueryString 查询语句，详情参考 https://cloud.tencent.com/document/product/614/47044
     * @param integer $Limit 单次要返回的日志条数，单次返回的最大条数为100
     * @param string $Context 加载更多使用，透传上次返回的 context 值，获取后续的日志内容，通过游标最多可获取10000条，请尽可能缩小时间范围
     * @param string $Sort 按时间排序 asc（升序）或者 desc（降序），默认为 desc
     * @param boolean $UseLucene 是否使用Lucene语法，默认为false
     * @param integer $LogType 日志类型
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("UseLucene",$param) and $param["UseLucene"] !== null) {
            $this->UseLucene = $param["UseLucene"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
