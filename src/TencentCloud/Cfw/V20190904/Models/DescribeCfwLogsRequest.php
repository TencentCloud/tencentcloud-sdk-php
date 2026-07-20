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
 * DescribeCfwLogs请求参数结构体
 *
 * @method string getLogType() 获取日志类型。首次查询必填；使用 NextToken 续查时不能传。cfw_netflow_border=互联网边界流量，cfw_netflow_vpc=VPC 东西向流量，cfw_netflow_nat=NAT 防火墙流量，cfw_netflow_nta=NDR/NTA 流量，cfw_netflow_dns=DNS 防火墙日志，cfw_rule_threatinfo=入侵防御/威胁情报告警，cfw_rule_acl=互联网边界访问控制日志，cfw_rule_vpc_acl=VPC 访问控制日志，cfw_rule_nat_acl=NAT 访问控制日志，cfw_ndr_subject_risk=NDR 专题风险，cfw_ndr_dataleak_entry=NDR 敏感数据泄露，cfw_ndr_ai_audit=NDR AI 应用识别与大模型调用审计，cfw_feature_collect=统计特征与基线异常，cfw_behavior_collect=Beacon/DNS/端口/证书/VPC 互访行为，operate_log_all=操作审计日志。
 * @method void setLogType(string $LogType) 设置日志类型。首次查询必填；使用 NextToken 续查时不能传。cfw_netflow_border=互联网边界流量，cfw_netflow_vpc=VPC 东西向流量，cfw_netflow_nat=NAT 防火墙流量，cfw_netflow_nta=NDR/NTA 流量，cfw_netflow_dns=DNS 防火墙日志，cfw_rule_threatinfo=入侵防御/威胁情报告警，cfw_rule_acl=互联网边界访问控制日志，cfw_rule_vpc_acl=VPC 访问控制日志，cfw_rule_nat_acl=NAT 访问控制日志，cfw_ndr_subject_risk=NDR 专题风险，cfw_ndr_dataleak_entry=NDR 敏感数据泄露，cfw_ndr_ai_audit=NDR AI 应用识别与大模型调用审计，cfw_feature_collect=统计特征与基线异常，cfw_behavior_collect=Beacon/DNS/端口/证书/VPC 互访行为，operate_log_all=操作审计日志。
 * @method string getQuery() 获取日志过滤表达式。默认 * 表示不过滤；例如 src_ip:1.1.1.1。可查询字段随 LogType 变化，应优先使用对应 Items 中已返回的字段名，不要猜测不存在的字段；使用 NextToken 续查时不能传。
 * @method void setQuery(string $Query) 设置日志过滤表达式。默认 * 表示不过滤；例如 src_ip:1.1.1.1。可查询字段随 LogType 变化，应优先使用对应 Items 中已返回的字段名，不要猜测不存在的字段；使用 NextToken 续查时不能传。
 * @method string getStartTime() 获取查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。
 * @method void setStartTime(string $StartTime) 设置查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。
 * @method string getTimeRange() 获取查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。
 * @method void setTimeRange(string $TimeRange) 设置查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。
 * @method integer getLimit() 获取单页返回条数。首次查询可选，默认 100；取值 1 至 1000；使用 NextToken 续查时不能传。
 * @method void setLimit(integer $Limit) 设置单页返回条数。首次查询可选，默认 100；取值 1 至 1000；使用 NextToken 续查时不能传。
 * @method string getNextToken() 获取上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改或租户不匹配会被拒绝。
 * @method void setNextToken(string $NextToken) 设置上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改或租户不匹配会被拒绝。
 */
class DescribeCfwLogsRequest extends AbstractModel
{
    /**
     * @var string 日志类型。首次查询必填；使用 NextToken 续查时不能传。cfw_netflow_border=互联网边界流量，cfw_netflow_vpc=VPC 东西向流量，cfw_netflow_nat=NAT 防火墙流量，cfw_netflow_nta=NDR/NTA 流量，cfw_netflow_dns=DNS 防火墙日志，cfw_rule_threatinfo=入侵防御/威胁情报告警，cfw_rule_acl=互联网边界访问控制日志，cfw_rule_vpc_acl=VPC 访问控制日志，cfw_rule_nat_acl=NAT 访问控制日志，cfw_ndr_subject_risk=NDR 专题风险，cfw_ndr_dataleak_entry=NDR 敏感数据泄露，cfw_ndr_ai_audit=NDR AI 应用识别与大模型调用审计，cfw_feature_collect=统计特征与基线异常，cfw_behavior_collect=Beacon/DNS/端口/证书/VPC 互访行为，operate_log_all=操作审计日志。
     */
    public $LogType;

    /**
     * @var string 日志过滤表达式。默认 * 表示不过滤；例如 src_ip:1.1.1.1。可查询字段随 LogType 变化，应优先使用对应 Items 中已返回的字段名，不要猜测不存在的字段；使用 NextToken 续查时不能传。
     */
    public $Query;

    /**
     * @var string 查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。
     */
    public $StartTime;

    /**
     * @var string 查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。
     */
    public $TimeRange;

    /**
     * @var integer 单页返回条数。首次查询可选，默认 100；取值 1 至 1000；使用 NextToken 续查时不能传。
     */
    public $Limit;

    /**
     * @var string 上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改或租户不匹配会被拒绝。
     */
    public $NextToken;

    /**
     * @param string $LogType 日志类型。首次查询必填；使用 NextToken 续查时不能传。cfw_netflow_border=互联网边界流量，cfw_netflow_vpc=VPC 东西向流量，cfw_netflow_nat=NAT 防火墙流量，cfw_netflow_nta=NDR/NTA 流量，cfw_netflow_dns=DNS 防火墙日志，cfw_rule_threatinfo=入侵防御/威胁情报告警，cfw_rule_acl=互联网边界访问控制日志，cfw_rule_vpc_acl=VPC 访问控制日志，cfw_rule_nat_acl=NAT 访问控制日志，cfw_ndr_subject_risk=NDR 专题风险，cfw_ndr_dataleak_entry=NDR 敏感数据泄露，cfw_ndr_ai_audit=NDR AI 应用识别与大模型调用审计，cfw_feature_collect=统计特征与基线异常，cfw_behavior_collect=Beacon/DNS/端口/证书/VPC 互访行为，operate_log_all=操作审计日志。
     * @param string $Query 日志过滤表达式。默认 * 表示不过滤；例如 src_ip:1.1.1.1。可查询字段随 LogType 变化，应优先使用对应 Items 中已返回的字段名，不要猜测不存在的字段；使用 NextToken 续查时不能传。
     * @param string $StartTime 查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。
     * @param string $TimeRange 查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。
     * @param integer $Limit 单页返回条数。首次查询可选，默认 100；取值 1 至 1000；使用 NextToken 续查时不能传。
     * @param string $NextToken 上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改或租户不匹配会被拒绝。
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
