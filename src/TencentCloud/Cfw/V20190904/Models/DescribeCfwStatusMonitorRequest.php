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
 * DescribeCfwStatusMonitor请求参数结构体
 *
 * @method string getOp() 获取<p>操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。</p>
 * @method void setOp(string $Op) 设置<p>操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。</p>
 * @method string getFirewallType() 获取<p>防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。</p>
 * @method void setFirewallType(string $FirewallType) 设置<p>防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。</p>
 * @method string getSelectionId() 获取<p>二级下拉选项 ID。fetch_scene 按需传入；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。</p>
 * @method void setSelectionId(string $SelectionId) 设置<p>二级下拉选项 ID。fetch_scene 按需传入；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。</p>
 * @method string getSelectionName() 获取<p>二级下拉显示名称。可替代 SelectionId 按名称匹配。</p>
 * @method void setSelectionName(string $SelectionName) 设置<p>二级下拉显示名称。可替代 SelectionId 按名称匹配。</p>
 * @method string getSelectionInstanceId() 获取<p>引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景。</p>
 * @method void setSelectionInstanceId(string $SelectionInstanceId) 设置<p>引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景。</p>
 * @method string getMetric() 获取<p>指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。</p>
 * @method void setMetric(string $Metric) 设置<p>指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。</p>
 * @method string getPerspective() 获取<p>指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。</p>
 * @method void setPerspective(string $Perspective) 设置<p>指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。</p>
 * @method string getIpScope() 获取<p>NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用。</p>
 * @method void setIpScope(string $IpScope) 设置<p>NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用。</p>
 * @method string getTimePreset() 获取<p>预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。</p>
 * @method void setTimePreset(string $TimePreset) 设置<p>预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。</p>
 * @method string getStartTime() 获取<p>自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。</p>
 * @method void setStartTime(string $StartTime) 设置<p>自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。</p>
 * @method string getEndTime() 获取<p>自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。</p>
 * @method integer getPage() 获取<p>页码，从 1 开始。默认 1；fetch_scene 列表视角使用。</p>
 * @method void setPage(integer $Page) 设置<p>页码，从 1 开始。默认 1；fetch_scene 列表视角使用。</p>
 * @method integer getLimit() 获取<p>每页条数。默认 10，最大 100；fetch_scene 列表视角使用。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数。默认 10，最大 100；fetch_scene 列表视角使用。</p>
 * @method boolean getOverviewOnly() 获取<p>是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。</p>
 * @method void setOverviewOnly(boolean $OverviewOnly) 设置<p>是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。</p>
 * @method integer getOffset() 获取<p>原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；必须大于等于 0 且不超过安全上限。</p>
 * @method void setOffset(integer $Offset) 设置<p>原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；必须大于等于 0 且不超过安全上限。</p>
 * @method string getSortBy() 获取<p>排序字段。可选，只接受当前场景后端允许的安全字段。</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段。可选，只接受当前场景后端允许的安全字段。</p>
 * @method string getSortOrder() 获取<p>排序方向。默认 desc；支持 asc、desc。</p>
 * @method void setSortOrder(string $SortOrder) 设置<p>排序方向。默认 desc；支持 asc、desc。</p>
 * @method array getFilters() 获取<p>过滤条件列表。可选，最多 5 个；是否支持以及字段名以具体 fetch_scene 场景为准。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件列表。可选，最多 5 个；是否支持以及字段名以具体 fetch_scene 场景为准。</p>
 */
class DescribeCfwStatusMonitorRequest extends AbstractModel
{
    /**
     * @var string <p>操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。</p>
     */
    public $Op;

    /**
     * @var string <p>防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。</p>
     */
    public $FirewallType;

    /**
     * @var string <p>二级下拉选项 ID。fetch_scene 按需传入；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。</p>
     */
    public $SelectionId;

    /**
     * @var string <p>二级下拉显示名称。可替代 SelectionId 按名称匹配。</p>
     */
    public $SelectionName;

    /**
     * @var string <p>引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景。</p>
     */
    public $SelectionInstanceId;

    /**
     * @var string <p>指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。</p>
     */
    public $Metric;

    /**
     * @var string <p>指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。</p>
     */
    public $Perspective;

    /**
     * @var string <p>NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用。</p>
     */
    public $IpScope;

    /**
     * @var string <p>预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。</p>
     */
    public $TimePreset;

    /**
     * @var string <p>自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。</p>
     */
    public $StartTime;

    /**
     * @var string <p>自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>页码，从 1 开始。默认 1；fetch_scene 列表视角使用。</p>
     */
    public $Page;

    /**
     * @var integer <p>每页条数。默认 10，最大 100；fetch_scene 列表视角使用。</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。</p>
     */
    public $OverviewOnly;

    /**
     * @var integer <p>原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；必须大于等于 0 且不超过安全上限。</p>
     */
    public $Offset;

    /**
     * @var string <p>排序字段。可选，只接受当前场景后端允许的安全字段。</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方向。默认 desc；支持 asc、desc。</p>
     */
    public $SortOrder;

    /**
     * @var array <p>过滤条件列表。可选，最多 5 个；是否支持以及字段名以具体 fetch_scene 场景为准。</p>
     */
    public $Filters;

    /**
     * @param string $Op <p>操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。</p>
     * @param string $FirewallType <p>防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。</p>
     * @param string $SelectionId <p>二级下拉选项 ID。fetch_scene 按需传入；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。</p>
     * @param string $SelectionName <p>二级下拉显示名称。可替代 SelectionId 按名称匹配。</p>
     * @param string $SelectionInstanceId <p>引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景。</p>
     * @param string $Metric <p>指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。</p>
     * @param string $Perspective <p>指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。</p>
     * @param string $IpScope <p>NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用。</p>
     * @param string $TimePreset <p>预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。</p>
     * @param string $StartTime <p>自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。</p>
     * @param string $EndTime <p>自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。</p>
     * @param integer $Page <p>页码，从 1 开始。默认 1；fetch_scene 列表视角使用。</p>
     * @param integer $Limit <p>每页条数。默认 10，最大 100；fetch_scene 列表视角使用。</p>
     * @param boolean $OverviewOnly <p>是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。</p>
     * @param integer $Offset <p>原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；必须大于等于 0 且不超过安全上限。</p>
     * @param string $SortBy <p>排序字段。可选，只接受当前场景后端允许的安全字段。</p>
     * @param string $SortOrder <p>排序方向。默认 desc；支持 asc、desc。</p>
     * @param array $Filters <p>过滤条件列表。可选，最多 5 个；是否支持以及字段名以具体 fetch_scene 场景为准。</p>
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
        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("FirewallType",$param) and $param["FirewallType"] !== null) {
            $this->FirewallType = $param["FirewallType"];
        }

        if (array_key_exists("SelectionId",$param) and $param["SelectionId"] !== null) {
            $this->SelectionId = $param["SelectionId"];
        }

        if (array_key_exists("SelectionName",$param) and $param["SelectionName"] !== null) {
            $this->SelectionName = $param["SelectionName"];
        }

        if (array_key_exists("SelectionInstanceId",$param) and $param["SelectionInstanceId"] !== null) {
            $this->SelectionInstanceId = $param["SelectionInstanceId"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Perspective",$param) and $param["Perspective"] !== null) {
            $this->Perspective = $param["Perspective"];
        }

        if (array_key_exists("IpScope",$param) and $param["IpScope"] !== null) {
            $this->IpScope = $param["IpScope"];
        }

        if (array_key_exists("TimePreset",$param) and $param["TimePreset"] !== null) {
            $this->TimePreset = $param["TimePreset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OverviewOnly",$param) and $param["OverviewOnly"] !== null) {
            $this->OverviewOnly = $param["OverviewOnly"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CfwStatusMonitorFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
