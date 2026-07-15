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
 * DescribeLogAnalysisDownloadTasks请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getArea() 获取<p>数据归属地区，可选值： <ul><li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li></ul> 注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
 * @method void setArea(string $Area) 设置<p>数据归属地区，可选值： <ul><li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li></ul> 注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
 * @method string getLogType() 获取<p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
 * @method array getFilters() 获取<p>过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<ul><li>task-id：按照日志下载任务 ID进行过滤，可选值参考 CreateLogAnalysisDownloadTask 接口返回的 TaskId。</li></ul></p><p>取值参考：CreateLogAnalysisDownloadTask</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<ul><li>task-id：按照日志下载任务 ID进行过滤，可选值参考 CreateLogAnalysisDownloadTask 接口返回的 TaskId。</li></ul></p><p>取值参考：CreateLogAnalysisDownloadTask</p>
 * @method integer getLimit() 获取<p>分页查询限制数目，默认值：20，最大值 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数目，默认值：20，最大值 100。</p>
 * @method integer getOffset() 获取<p>分页查询偏移量，默认为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量，默认为 0。</p>
 */
class DescribeLogAnalysisDownloadTasksRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>数据归属地区，可选值： <ul><li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li></ul> 注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
     */
    public $Area;

    /**
     * @var string <p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
     */
    public $LogType;

    /**
     * @var array <p>过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<ul><li>task-id：按照日志下载任务 ID进行过滤，可选值参考 CreateLogAnalysisDownloadTask 接口返回的 TaskId。</li></ul></p><p>取值参考：CreateLogAnalysisDownloadTask</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询限制数目，默认值：20，最大值 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询偏移量，默认为 0。</p>
     */
    public $Offset;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Area <p>数据归属地区，可选值： <ul><li>mainland：中国大陆境内；</li> <li>overseas：全球（不含中国大陆）。</li></ul> 注意：若站点服务区域为“全球可用区”，获取全部数据需要分别查询 mainland 和 overseas 的数据。</p>
     * @param string $LogType <p>日志类型，可选值：<ul><li> l7-access-logs：七层访问日志；</li><li>web-attack：托管规则日志。</li></ul>默认为 l7-access-logs 。</p>
     * @param array $Filters <p>过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<ul><li>task-id：按照日志下载任务 ID进行过滤，可选值参考 CreateLogAnalysisDownloadTask 接口返回的 TaskId。</li></ul></p><p>取值参考：CreateLogAnalysisDownloadTask</p>
     * @param integer $Limit <p>分页查询限制数目，默认值：20，最大值 100。</p>
     * @param integer $Offset <p>分页查询偏移量，默认为 0。</p>
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
