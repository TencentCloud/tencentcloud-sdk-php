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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAlarmLog请求参数结构体
 *
 * @method integer getFrom() 获取要查询的执行详情的起始时间，Unix时间戳，单位ms
 * @method void setFrom(integer $From) 设置要查询的执行详情的起始时间，Unix时间戳，单位ms
 * @method integer getTo() 获取要查询的执行详情的结束时间，Unix时间戳，单位ms
 * @method void setTo(integer $To) 设置要查询的执行详情的结束时间，Unix时间戳，单位ms
 * @method string getQuery() 获取查询过滤条件，例如：
- 按告警策略ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- 按监控对象ID查询：`monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b") `
- 按告警策略ID及监控对象ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b")`
 * @method void setQuery(string $Query) 设置查询过滤条件，例如：
- 按告警策略ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- 按监控对象ID查询：`monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b") `
- 按告警策略ID及监控对象ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b")`
 * @method integer getLimit() 获取单次查询返回的执行详情条数，最大值为1000
 * @method void setLimit(integer $Limit) 设置单次查询返回的执行详情条数，最大值为1000
 * @method string getContext() 获取加载更多详情时使用，透传上次返回的Context值，获取后续的执行详情
 * @method void setContext(string $Context) 设置加载更多详情时使用，透传上次返回的Context值，获取后续的执行详情
 * @method string getSort() 获取执行详情是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
 * @method void setSort(string $Sort) 设置执行详情是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
 * @method boolean getUseNewAnalysis() 获取如果Query包含SQL语句，UseNewAnalysis为true时响应参数AnalysisRecords和Columns有效， UseNewAnalysis为false时响应参数AnalysisResults和ColNames有效
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) 设置如果Query包含SQL语句，UseNewAnalysis为true时响应参数AnalysisRecords和Columns有效， UseNewAnalysis为false时响应参数AnalysisResults和ColNames有效
 */
class GetAlarmLogRequest extends AbstractModel
{
    /**
     * @var integer 要查询的执行详情的起始时间，Unix时间戳，单位ms
     */
    public $From;

    /**
     * @var integer 要查询的执行详情的结束时间，Unix时间戳，单位ms
     */
    public $To;

    /**
     * @var string 查询过滤条件，例如：
- 按告警策略ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- 按监控对象ID查询：`monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b") `
- 按告警策略ID及监控对象ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b")`
     */
    public $Query;

    /**
     * @var integer 单次查询返回的执行详情条数，最大值为1000
     */
    public $Limit;

    /**
     * @var string 加载更多详情时使用，透传上次返回的Context值，获取后续的执行详情
     */
    public $Context;

    /**
     * @var string 执行详情是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
     */
    public $Sort;

    /**
     * @var boolean 如果Query包含SQL语句，UseNewAnalysis为true时响应参数AnalysisRecords和Columns有效， UseNewAnalysis为false时响应参数AnalysisResults和ColNames有效
     */
    public $UseNewAnalysis;

    /**
     * @param integer $From 要查询的执行详情的起始时间，Unix时间戳，单位ms
     * @param integer $To 要查询的执行详情的结束时间，Unix时间戳，单位ms
     * @param string $Query 查询过滤条件，例如：
- 按告警策略ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971"`
- 按监控对象ID查询：`monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b") `
- 按告警策略ID及监控对象ID查询：`alert_id:"alarm-0745ec00-e605-xxxx-b50b-54afe61fc971" AND monitored_object:"823d8bfa-76a7-xxxx-8399-8cda74d4009b")`
     * @param integer $Limit 单次查询返回的执行详情条数，最大值为1000
     * @param string $Context 加载更多详情时使用，透传上次返回的Context值，获取后续的执行详情
     * @param string $Sort 执行详情是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
     * @param boolean $UseNewAnalysis 如果Query包含SQL语句，UseNewAnalysis为true时响应参数AnalysisRecords和Columns有效， UseNewAnalysis为false时响应参数AnalysisResults和ColNames有效
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
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

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }
    }
}
