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
 * CreateLogAnalysisDownloadTask请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getArea() 获取<p>数据归属地区，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul>注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
 * @method void setArea(string $Area) 设置<p>数据归属地区，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul>注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
 * @method string getStartTime() 获取<p>开始时间，示例值：2020-04-29T00:00:00Z。套餐版本不同，支持的可查询开始时间至今的最大时间跨度不同，详情请见 <a href="https://cloud.tencent.com/document/product/1552/94165#45435466-9103-4ff6-be22-e31717044fb2">套餐选型对比</a>。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，示例值：2020-04-29T00:00:00Z。套餐版本不同，支持的可查询开始时间至今的最大时间跨度不同，详情请见 <a href="https://cloud.tencent.com/document/product/1552/94165#45435466-9103-4ff6-be22-e31717044fb2">套餐选型对比</a>。</p>
 * @method string getEndTime() 获取<p>结束时间，示例值：2020-04-30T00:00:00Z。单次查询的开始时间到结束时间跨度最大为 31 天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，示例值：2020-04-30T00:00:00Z。单次查询的开始时间到结束时间跨度最大为 31 天。</p>
 * @method string getLogType() 获取<p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
 * @method string getCondition() 获取<p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，最大长度 12KB。</p>
 * @method void setCondition(string $Condition) 设置<p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，最大长度 12KB。</p>
 * @method string getFormat() 获取<p>文件格式，可选值：<ul><li>csv</li></ul>默认为 csv。</p>
 * @method void setFormat(string $Format) 设置<p>文件格式，可选值：<ul><li>csv</li></ul>默认为 csv。</p>
 * @method string getSort() 获取<p>原始日志的时间排序，可选值：  <ul><li>asc：升序；</li>  <li>desc：降序。</li></ul>  默认为 desc。</p>
 * @method void setSort(string $Sort) 设置<p>原始日志的时间排序，可选值：  <ul><li>asc：升序；</li>  <li>desc：降序。</li></ul>  默认为 desc。</p>
 */
class CreateLogAnalysisDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>数据归属地区，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul>注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
     */
    public $Area;

    /**
     * @var string <p>开始时间，示例值：2020-04-29T00:00:00Z。套餐版本不同，支持的可查询开始时间至今的最大时间跨度不同，详情请见 <a href="https://cloud.tencent.com/document/product/1552/94165#45435466-9103-4ff6-be22-e31717044fb2">套餐选型对比</a>。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，示例值：2020-04-30T00:00:00Z。单次查询的开始时间到结束时间跨度最大为 31 天。</p>
     */
    public $EndTime;

    /**
     * @var string <p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
     */
    public $LogType;

    /**
     * @var string <p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，最大长度 12KB。</p>
     */
    public $Condition;

    /**
     * @var string <p>文件格式，可选值：<ul><li>csv</li></ul>默认为 csv。</p>
     */
    public $Format;

    /**
     * @var string <p>原始日志的时间排序，可选值：  <ul><li>asc：升序；</li>  <li>desc：降序。</li></ul>  默认为 desc。</p>
     */
    public $Sort;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Area <p>数据归属地区，可选值：<ul><li>mainland：中国大陆境内；</li><li>overseas：全球（不含中国大陆）。</li></ul>注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
     * @param string $StartTime <p>开始时间，示例值：2020-04-29T00:00:00Z。套餐版本不同，支持的可查询开始时间至今的最大时间跨度不同，详情请见 <a href="https://cloud.tencent.com/document/product/1552/94165#45435466-9103-4ff6-be22-e31717044fb2">套餐选型对比</a>。</p>
     * @param string $EndTime <p>结束时间，示例值：2020-04-30T00:00:00Z。单次查询的开始时间到结束时间跨度最大为 31 天。</p>
     * @param string $LogType <p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
     * @param string $Condition <p><a href="https://cloud.tencent.com/document/product/1552/124662">日志匹配条件</a>，最大长度 12KB。</p>
     * @param string $Format <p>文件格式，可选值：<ul><li>csv</li></ul>默认为 csv。</p>
     * @param string $Sort <p>原始日志的时间排序，可选值：  <ul><li>asc：升序；</li>  <li>desc：降序。</li></ul>  默认为 desc。</p>
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
    }
}
