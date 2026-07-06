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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog请求参数结构体
 *
 * @method integer getFrom() 获取<p>要检索分析的日志的起始时间，Unix时间戳（毫秒）</p>
 * @method void setFrom(integer $From) 设置<p>要检索分析的日志的起始时间，Unix时间戳（毫秒）</p>
 * @method integer getTo() 获取<p>要检索分析的日志的结束时间，Unix时间戳（毫秒）</p>
 * @method void setTo(integer $To) 设置<p>要检索分析的日志的结束时间，Unix时间戳（毫秒）</p>
 * @method string getQuery() 获取<p>检索分析语句，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code> | </code>及SQL语句<br>使用*或空字符串可查询所有日志</p>
 * @method void setQuery(string $Query) 设置<p>检索分析语句，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code> | </code>及SQL语句<br>使用*或空字符串可查询所有日志</p>
 * @method integer getSyntaxRule() 获取<p>检索语法规则，默认值为0，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（日志服务专用检索语法，控制台默认也使用该语法规则）。</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a></p>
 * @method void setSyntaxRule(integer $SyntaxRule) 设置<p>检索语法规则，默认值为0，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（日志服务专用检索语法，控制台默认也使用该语法规则）。</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a></p>
 * @method string getTopicId() 获取<ul><li>要检索分析的日志主题ID，仅能指定一个日志主题。</li><li>如需同时检索多个日志主题，请使用Topics参数。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。<br>各日志主题ID如下<br>访问控制-互联网边界 cfw_rule_acl<br>访问控制-NAT边界 cfw_rule_nat_acl<br>访问控制-VPC边界 cfw_rule_vpc_acl<br>访问控制-DNS开关 cfw_rule_dns_acl<br>入侵防御 cfw_rule_threatinfo<br>全流量检测与响应日志-流量分析 cfw_netflow_nta<br>全流量检测与响应日志-流量告警 cfw_rule_ndr_threatinfo<br>零信任运维-数据库登录 cfw_operate_db<br>零信任运维-服务器访问 operate_remote_om<br>零信任运维-Web服务访问 operate_web_access<br>零信任运维-行为审计 remoteom_commands<br>流量日志-互联网边界 cfw_netflow_border<br>流量日志-NAT边界 cfw_netflow_nat<br>流量日志-VPC边界 cfw_netflow_vpc<br>流量日志-DNS开关 cfw_netflow_dns<br>流量日志-内网流量 cfw_netflow_fl<br>操作日志 operate_log_all</li></ul>
 * @method void setTopicId(string $TopicId) 设置<ul><li>要检索分析的日志主题ID，仅能指定一个日志主题。</li><li>如需同时检索多个日志主题，请使用Topics参数。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。<br>各日志主题ID如下<br>访问控制-互联网边界 cfw_rule_acl<br>访问控制-NAT边界 cfw_rule_nat_acl<br>访问控制-VPC边界 cfw_rule_vpc_acl<br>访问控制-DNS开关 cfw_rule_dns_acl<br>入侵防御 cfw_rule_threatinfo<br>全流量检测与响应日志-流量分析 cfw_netflow_nta<br>全流量检测与响应日志-流量告警 cfw_rule_ndr_threatinfo<br>零信任运维-数据库登录 cfw_operate_db<br>零信任运维-服务器访问 operate_remote_om<br>零信任运维-Web服务访问 operate_web_access<br>零信任运维-行为审计 remoteom_commands<br>流量日志-互联网边界 cfw_netflow_border<br>流量日志-NAT边界 cfw_netflow_nat<br>流量日志-VPC边界 cfw_netflow_vpc<br>流量日志-DNS开关 cfw_netflow_dns<br>流量日志-内网流量 cfw_netflow_fl<br>操作日志 operate_log_all</li></ul>
 * @method array getTopics() 获取<ul><li>要检索分析的日志主题列表，最大支持50个日志主题。</li><li>检索单个日志主题时请使用TopicId。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。</li></ul>
 * @method void setTopics(array $Topics) 设置<ul><li>要检索分析的日志主题列表，最大支持50个日志主题。</li><li>检索单个日志主题时请使用TopicId。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。</li></ul>
 * @method string getSort() 获取<p>原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY语法</a></li></ul>
 * @method void setSort(string $Sort) 设置<p>原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY语法</a></li></ul>
 * @method integer getLimit() 获取<p>表示单次查询返回的原始日志条数，默认为100，最大值为1000。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul><p>可通过两种方式获取后续更多日志：</p><ul><li>Context:透传上次接口返回的Context值，获取后续更多日志，总计最多可获取1万条原始日志</li><li>Offset:偏移量，表示从第几行开始返回原始日志，无日志条数限制</li></ul>
 * @method void setLimit(integer $Limit) 设置<p>表示单次查询返回的原始日志条数，默认为100，最大值为1000。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul><p>可通过两种方式获取后续更多日志：</p><ul><li>Context:透传上次接口返回的Context值，获取后续更多日志，总计最多可获取1万条原始日志</li><li>Offset:偏移量，表示从第几行开始返回原始日志，无日志条数限制</li></ul>
 * @method integer getOffset() 获取<p>查询原始日志的偏移量，表示从第几行开始返回原始日志，默认为0。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>不能与Context参数同时使用</li><li>仅适用于单日志主题检索</li></ul>
 * @method void setOffset(integer $Offset) 设置<p>查询原始日志的偏移量，表示从第几行开始返回原始日志，默认为0。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>不能与Context参数同时使用</li><li>仅适用于单日志主题检索</li></ul>
 * @method string getContext() 获取<p>透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时。<br>注意：</p><ul><li>透传该参数时，请勿修改除该参数外的其它参数</li><li>仅适用于单日志主题检索，检索多个日志主题时，请使用Topics中的Context</li><li>仅当检索分析语句(Query)不包含SQL时有效，SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul>
 * @method void setContext(string $Context) 设置<p>透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时。<br>注意：</p><ul><li>透传该参数时，请勿修改除该参数外的其它参数</li><li>仅适用于单日志主题检索，检索多个日志主题时，请使用Topics中的Context</li><li>仅当检索分析语句(Query)不包含SQL时有效，SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul>
 * @method float getSamplingRate() 获取<p>执行统计分析（Query中包含SQL）时，是否对原始日志先进行采样，再进行统计分析。<br>0：自动采样;<br>0～1：按指定采样率采样，例如0.02;<br>1：不采样，即精确分析<br>默认值为1</p>
 * @method void setSamplingRate(float $SamplingRate) 设置<p>执行统计分析（Query中包含SQL）时，是否对原始日志先进行采样，再进行统计分析。<br>0：自动采样;<br>0～1：按指定采样率采样，例如0.02;<br>1：不采样，即精确分析<br>默认值为1</p>
 * @method boolean getUseNewAnalysis() 获取<p>为true代表使用新的检索结果返回方式，输出参数AnalysisRecords和Columns有效<br>为false时代表使用老的检索结果返回方式, 输出AnalysisResults和ColNames有效<br>两种返回方式在编码格式上有少量区别，建议使用true</p>
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) 设置<p>为true代表使用新的检索结果返回方式，输出参数AnalysisRecords和Columns有效<br>为false时代表使用老的检索结果返回方式, 输出AnalysisResults和ColNames有效<br>两种返回方式在编码格式上有少量区别，建议使用true</p>
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer <p>要检索分析的日志的起始时间，Unix时间戳（毫秒）</p>
     */
    public $From;

    /**
     * @var integer <p>要检索分析的日志的结束时间，Unix时间戳（毫秒）</p>
     */
    public $To;

    /**
     * @var string <p>检索分析语句，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code> | </code>及SQL语句<br>使用*或空字符串可查询所有日志</p>
     */
    public $Query;

    /**
     * @var integer <p>检索语法规则，默认值为0，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（日志服务专用检索语法，控制台默认也使用该语法规则）。</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a></p>
     */
    public $SyntaxRule;

    /**
     * @var string <ul><li>要检索分析的日志主题ID，仅能指定一个日志主题。</li><li>如需同时检索多个日志主题，请使用Topics参数。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。<br>各日志主题ID如下<br>访问控制-互联网边界 cfw_rule_acl<br>访问控制-NAT边界 cfw_rule_nat_acl<br>访问控制-VPC边界 cfw_rule_vpc_acl<br>访问控制-DNS开关 cfw_rule_dns_acl<br>入侵防御 cfw_rule_threatinfo<br>全流量检测与响应日志-流量分析 cfw_netflow_nta<br>全流量检测与响应日志-流量告警 cfw_rule_ndr_threatinfo<br>零信任运维-数据库登录 cfw_operate_db<br>零信任运维-服务器访问 operate_remote_om<br>零信任运维-Web服务访问 operate_web_access<br>零信任运维-行为审计 remoteom_commands<br>流量日志-互联网边界 cfw_netflow_border<br>流量日志-NAT边界 cfw_netflow_nat<br>流量日志-VPC边界 cfw_netflow_vpc<br>流量日志-DNS开关 cfw_netflow_dns<br>流量日志-内网流量 cfw_netflow_fl<br>操作日志 operate_log_all</li></ul>
     */
    public $TopicId;

    /**
     * @var array <ul><li>要检索分析的日志主题列表，最大支持50个日志主题。</li><li>检索单个日志主题时请使用TopicId。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。</li></ul>
     */
    public $Topics;

    /**
     * @var string <p>原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY语法</a></li></ul>
     */
    public $Sort;

    /**
     * @var integer <p>表示单次查询返回的原始日志条数，默认为100，最大值为1000。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul><p>可通过两种方式获取后续更多日志：</p><ul><li>Context:透传上次接口返回的Context值，获取后续更多日志，总计最多可获取1万条原始日志</li><li>Offset:偏移量，表示从第几行开始返回原始日志，无日志条数限制</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>查询原始日志的偏移量，表示从第几行开始返回原始日志，默认为0。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>不能与Context参数同时使用</li><li>仅适用于单日志主题检索</li></ul>
     */
    public $Offset;

    /**
     * @var string <p>透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时。<br>注意：</p><ul><li>透传该参数时，请勿修改除该参数外的其它参数</li><li>仅适用于单日志主题检索，检索多个日志主题时，请使用Topics中的Context</li><li>仅当检索分析语句(Query)不包含SQL时有效，SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul>
     */
    public $Context;

    /**
     * @var float <p>执行统计分析（Query中包含SQL）时，是否对原始日志先进行采样，再进行统计分析。<br>0：自动采样;<br>0～1：按指定采样率采样，例如0.02;<br>1：不采样，即精确分析<br>默认值为1</p>
     */
    public $SamplingRate;

    /**
     * @var boolean <p>为true代表使用新的检索结果返回方式，输出参数AnalysisRecords和Columns有效<br>为false时代表使用老的检索结果返回方式, 输出AnalysisResults和ColNames有效<br>两种返回方式在编码格式上有少量区别，建议使用true</p>
     */
    public $UseNewAnalysis;

    /**
     * @param integer $From <p>要检索分析的日志的起始时间，Unix时间戳（毫秒）</p>
     * @param integer $To <p>要检索分析的日志的结束时间，Unix时间戳（毫秒）</p>
     * @param string $Query <p>检索分析语句，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code> | </code>及SQL语句<br>使用*或空字符串可查询所有日志</p>
     * @param integer $SyntaxRule <p>检索语法规则，默认值为0，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（日志服务专用检索语法，控制台默认也使用该语法规则）。</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a></p>
     * @param string $TopicId <ul><li>要检索分析的日志主题ID，仅能指定一个日志主题。</li><li>如需同时检索多个日志主题，请使用Topics参数。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。<br>各日志主题ID如下<br>访问控制-互联网边界 cfw_rule_acl<br>访问控制-NAT边界 cfw_rule_nat_acl<br>访问控制-VPC边界 cfw_rule_vpc_acl<br>访问控制-DNS开关 cfw_rule_dns_acl<br>入侵防御 cfw_rule_threatinfo<br>全流量检测与响应日志-流量分析 cfw_netflow_nta<br>全流量检测与响应日志-流量告警 cfw_rule_ndr_threatinfo<br>零信任运维-数据库登录 cfw_operate_db<br>零信任运维-服务器访问 operate_remote_om<br>零信任运维-Web服务访问 operate_web_access<br>零信任运维-行为审计 remoteom_commands<br>流量日志-互联网边界 cfw_netflow_border<br>流量日志-NAT边界 cfw_netflow_nat<br>流量日志-VPC边界 cfw_netflow_vpc<br>流量日志-DNS开关 cfw_netflow_dns<br>流量日志-内网流量 cfw_netflow_fl<br>操作日志 operate_log_all</li></ul>
     * @param array $Topics <ul><li>要检索分析的日志主题列表，最大支持50个日志主题。</li><li>检索单个日志主题时请使用TopicId。</li><li>TopicId 和 Topics 不能同时使用，在一次请求中有且只能选择一个。</li></ul>
     * @param string $Sort <p>原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY语法</a></li></ul>
     * @param integer $Limit <p>表示单次查询返回的原始日志条数，默认为100，最大值为1000。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul><p>可通过两种方式获取后续更多日志：</p><ul><li>Context:透传上次接口返回的Context值，获取后续更多日志，总计最多可获取1万条原始日志</li><li>Offset:偏移量，表示从第几行开始返回原始日志，无日志条数限制</li></ul>
     * @param integer $Offset <p>查询原始日志的偏移量，表示从第几行开始返回原始日志，默认为0。<br>注意：</p><ul><li>仅当检索分析语句(Query)不包含SQL时有效</li><li>不能与Context参数同时使用</li><li>仅适用于单日志主题检索</li></ul>
     * @param string $Context <p>透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时。<br>注意：</p><ul><li>透传该参数时，请勿修改除该参数外的其它参数</li><li>仅适用于单日志主题检索，检索多个日志主题时，请使用Topics中的Context</li><li>仅当检索分析语句(Query)不包含SQL时有效，SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a></li></ul>
     * @param float $SamplingRate <p>执行统计分析（Query中包含SQL）时，是否对原始日志先进行采样，再进行统计分析。<br>0：自动采样;<br>0～1：按指定采样率采样，例如0.02;<br>1：不采样，即精确分析<br>默认值为1</p>
     * @param boolean $UseNewAnalysis <p>为true代表使用新的检索结果返回方式，输出参数AnalysisRecords和Columns有效<br>为false时代表使用老的检索结果返回方式, 输出AnalysisResults和ColNames有效<br>两种返回方式在编码格式上有少量区别，建议使用true</p>
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

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new MultiTopicSearchInformation();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }
    }
}
