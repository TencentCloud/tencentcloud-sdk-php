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
 * @method string getLogType() 获取<p>日志类型。首次查询必填；使用 NextToken 续查时不能传。枚举值包括 cfw_netflow_border、cfw_netflow_vpc、cfw_netflow_nat、cfw_netflow_nta、cfw_netflow_dns、cfw_rule_threatinfo、cfw_rule_acl、cfw_rule_vpc_acl、cfw_rule_nat_acl、cfw_ndr_subject_risk、cfw_ndr_dataleak_entry、cfw_ndr_ai_audit、cfw_feature_collect、cfw_behavior_collect、operate_log_all。</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型。首次查询必填；使用 NextToken 续查时不能传。枚举值包括 cfw_netflow_border、cfw_netflow_vpc、cfw_netflow_nat、cfw_netflow_nta、cfw_netflow_dns、cfw_rule_threatinfo、cfw_rule_acl、cfw_rule_vpc_acl、cfw_rule_nat_acl、cfw_ndr_subject_risk、cfw_ndr_dataleak_entry、cfw_ndr_ai_audit、cfw_feature_collect、cfw_behavior_collect、operate_log_all。</p>
 * @method string getQuery() 获取<p>CLS CQL 查询语句。默认 *；使用 NextToken 续查时不能传。</p>
 * @method void setQuery(string $Query) 设置<p>CLS CQL 查询语句。默认 *；使用 NextToken 续查时不能传。</p>
 * @method string getStartTime() 获取<p>查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。</p>
 * @method string getTimeRange() 获取<p>查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。</p>
 * @method void setTimeRange(string $TimeRange) 设置<p>查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。</p>
 * @method integer getLimit() 获取<p>单页返回条数。默认 100，最大 1000；使用 NextToken 续查时不能传。</p>
 * @method void setLimit(integer $Limit) 设置<p>单页返回条数。默认 100，最大 1000；使用 NextToken 续查时不能传。</p>
 * @method string getNextToken() 获取<p>上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改、过期或租户不匹配会被拒绝。</p>
 * @method void setNextToken(string $NextToken) 设置<p>上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改、过期或租户不匹配会被拒绝。</p>
 */
class DescribeCfwLogsRequest extends AbstractModel
{
    /**
     * @var string <p>日志类型。首次查询必填；使用 NextToken 续查时不能传。枚举值包括 cfw_netflow_border、cfw_netflow_vpc、cfw_netflow_nat、cfw_netflow_nta、cfw_netflow_dns、cfw_rule_threatinfo、cfw_rule_acl、cfw_rule_vpc_acl、cfw_rule_nat_acl、cfw_ndr_subject_risk、cfw_ndr_dataleak_entry、cfw_ndr_ai_audit、cfw_feature_collect、cfw_behavior_collect、operate_log_all。</p>
     */
    public $LogType;

    /**
     * @var string <p>CLS CQL 查询语句。默认 *；使用 NextToken 续查时不能传。</p>
     */
    public $Query;

    /**
     * @var string <p>查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。</p>
     */
    public $TimeRange;

    /**
     * @var integer <p>单页返回条数。默认 100，最大 1000；使用 NextToken 续查时不能传。</p>
     */
    public $Limit;

    /**
     * @var string <p>上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改、过期或租户不匹配会被拒绝。</p>
     */
    public $NextToken;

    /**
     * @param string $LogType <p>日志类型。首次查询必填；使用 NextToken 续查时不能传。枚举值包括 cfw_netflow_border、cfw_netflow_vpc、cfw_netflow_nat、cfw_netflow_nta、cfw_netflow_dns、cfw_rule_threatinfo、cfw_rule_acl、cfw_rule_vpc_acl、cfw_rule_nat_acl、cfw_ndr_subject_risk、cfw_ndr_dataleak_entry、cfw_ndr_ai_audit、cfw_feature_collect、cfw_behavior_collect、operate_log_all。</p>
     * @param string $Query <p>CLS CQL 查询语句。默认 *；使用 NextToken 续查时不能传。</p>
     * @param string $StartTime <p>查询起始时间。支持 RFC3339、YYYY-MM-DD HH:MM:SS、YYYY-MM-DD 或 Unix 时间戳；传入后从该时间向后查询 TimeRange；使用 NextToken 续查时不能传。</p>
     * @param string $TimeRange <p>查询时间范围。默认 1h；格式为正整数加单位 m/h/d，例如 5m、1h、24h、7d；使用 NextToken 续查时不能传。</p>
     * @param integer $Limit <p>单页返回条数。默认 100，最大 1000；使用 NextToken 续查时不能传。</p>
     * @param string $NextToken <p>上一页 Response.Data 返回的不透明续查 token。首次查询不传；续查时只传 NextToken。无效、篡改、过期或租户不匹配会被拒绝。</p>
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
