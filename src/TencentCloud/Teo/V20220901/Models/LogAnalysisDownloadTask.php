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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志分析日志下载任务。
 *
 * @method string getTaskId() 获取<p>任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID。</p>
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getArea() 获取<p>数据归属地区，取值有：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
 * @method void setArea(string $Area) 设置<p>数据归属地区，取值有：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
 * @method string getStartTime() 获取<p>开始时间，示例值：2020-04-29T00:00:00Z。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，示例值：2020-04-29T00:00:00Z。</p>
 * @method string getEndTime() 获取<p>结束时间，示例值：2020-04-30T00:00:00Z。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，示例值：2020-04-30T00:00:00Z。</p>
 * @method string getLogType() 获取<p>日志类型，取值有：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul></p>
 * @method void setLogType(string $LogType) 设置<p>日志类型，取值有：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul></p>
 * @method string getCondition() 获取<p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，长度上限 12KB。</p>
 * @method void setCondition(string $Condition) 设置<p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，长度上限 12KB。</p>
 * @method string getFormat() 获取<p>文件格式，取值有：</p><ul><li>csv 。</li></ul>
 * @method void setFormat(string $Format) 设置<p>文件格式，取值有：</p><ul><li>csv 。</li></ul>
 * @method string getSort() 获取<p>原始日志是否按时间排序返回，取值有：<ul><li>asc：升序；</li><li>desc：降序。</li></ul></p>
 * @method void setSort(string $Sort) 设置<p>原始日志是否按时间排序返回，取值有：<ul><li>asc：升序；</li><li>desc：降序。</li></ul></p>
 * @method string getStatus() 获取<p>任务状态，取值有：<ul><li>loading：处理中，等待生成下载链接；</li><li> failed: 处理失败，当前任务无法下载;</li><li>completed：已完成打包，可以下载。</li></ul></p>
 * @method void setStatus(string $Status) 设置<p>任务状态，取值有：<ul><li>loading：处理中，等待生成下载链接；</li><li> failed: 处理失败，当前任务无法下载;</li><li>completed：已完成打包，可以下载。</li></ul></p>
 * @method string getCreateTime() 获取<p>任务创建时间，任务创建成功后将保留3天。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间，任务创建成功后将保留3天。</p>
 * @method string getUrl() 获取<p>下载地址，仅当 Status = completed 时有返回值。</p>
 * @method void setUrl(string $Url) 设置<p>下载地址，仅当 Status = completed 时有返回值。</p>
 * @method string getExpireTime() 获取<p>下载任务过期时间，过期后下载地址将不可用，请通过本接口获取新的下载地址。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>下载任务过期时间，过期后下载地址将不可用，请通过本接口获取新的下载地址。</p>
 */
class LogAnalysisDownloadTask extends AbstractModel
{
    /**
     * @var string <p>任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>数据归属地区，取值有：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
     */
    public $Area;

    /**
     * @var string <p>开始时间，示例值：2020-04-29T00:00:00Z。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，示例值：2020-04-30T00:00:00Z。</p>
     */
    public $EndTime;

    /**
     * @var string <p>日志类型，取值有：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul></p>
     */
    public $LogType;

    /**
     * @var string <p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，长度上限 12KB。</p>
     */
    public $Condition;

    /**
     * @var string <p>文件格式，取值有：</p><ul><li>csv 。</li></ul>
     */
    public $Format;

    /**
     * @var string <p>原始日志是否按时间排序返回，取值有：<ul><li>asc：升序；</li><li>desc：降序。</li></ul></p>
     */
    public $Sort;

    /**
     * @var string <p>任务状态，取值有：<ul><li>loading：处理中，等待生成下载链接；</li><li> failed: 处理失败，当前任务无法下载;</li><li>completed：已完成打包，可以下载。</li></ul></p>
     */
    public $Status;

    /**
     * @var string <p>任务创建时间，任务创建成功后将保留3天。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>下载地址，仅当 Status = completed 时有返回值。</p>
     */
    public $Url;

    /**
     * @var string <p>下载任务过期时间，过期后下载地址将不可用，请通过本接口获取新的下载地址。</p>
     */
    public $ExpireTime;

    /**
     * @param string $TaskId <p>任务 ID。</p>
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Area <p>数据归属地区，取值有：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul></p>
     * @param string $StartTime <p>开始时间，示例值：2020-04-29T00:00:00Z。</p>
     * @param string $EndTime <p>结束时间，示例值：2020-04-30T00:00:00Z。</p>
     * @param string $LogType <p>日志类型，取值有：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul></p>
     * @param string $Condition <p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，长度上限 12KB。</p>
     * @param string $Format <p>文件格式，取值有：</p><ul><li>csv 。</li></ul>
     * @param string $Sort <p>原始日志是否按时间排序返回，取值有：<ul><li>asc：升序；</li><li>desc：降序。</li></ul></p>
     * @param string $Status <p>任务状态，取值有：<ul><li>loading：处理中，等待生成下载链接；</li><li> failed: 处理失败，当前任务无法下载;</li><li>completed：已完成打包，可以下载。</li></ul></p>
     * @param string $CreateTime <p>任务创建时间，任务创建成功后将保留3天。</p>
     * @param string $Url <p>下载地址，仅当 Status = completed 时有返回值。</p>
     * @param string $ExpireTime <p>下载任务过期时间，过期后下载地址将不可用，请通过本接口获取新的下载地址。</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
