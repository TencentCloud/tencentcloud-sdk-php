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
 * @method string getOp() 获取操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。
 * @method void setOp(string $Op) 设置操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。
 * @method string getFirewallType() 获取防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。
 * @method void setFirewallType(string $FirewallType) 设置防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。
 * @method string getSelectionId() 获取二级下拉选项 ID。fetch_scene 按需传入，值来自 describe_scene 返回的 selection.available_options[].id；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。
 * @method void setSelectionId(string $SelectionId) 设置二级下拉选项 ID。fetch_scene 按需传入，值来自 describe_scene 返回的 selection.available_options[].id；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。
 * @method string getSelectionName() 获取二级下拉显示名称。可替代 SelectionId 按名称匹配，值来自 describe_scene 返回的 selection.available_options[].name。
 * @method void setSelectionName(string $SelectionName) 设置二级下拉显示名称。可替代 SelectionId 按名称匹配，值来自 describe_scene 返回的 selection.available_options[].name。
 * @method string getSelectionInstanceId() 获取引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景，优先使用 describe_scene 返回的 selection.available_options[].instance_id；如只有 instance_ids，则从数组中选择一个字符串值。
 * @method void setSelectionInstanceId(string $SelectionInstanceId) 设置引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景，优先使用 describe_scene 返回的 selection.available_options[].instance_id；如只有 instance_ids，则从数组中选择一个字符串值。
 * @method string getMetric() 获取指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。
 * @method void setMetric(string $Metric) 设置指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。
 * @method string getPerspective() 获取指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。
 * @method void setPerspective(string $Perspective) 设置指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。
 * @method string getIpScope() 获取NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用，其他组合传入将返回 InvalidParameter。
 * @method void setIpScope(string $IpScope) 设置NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用，其他组合传入将返回 InvalidParameter。
 * @method string getTimePreset() 获取预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。
 * @method void setTimePreset(string $TimePreset) 设置预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。
 * @method string getStartTime() 获取自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。
 * @method void setStartTime(string $StartTime) 设置自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。
 * @method string getEndTime() 获取自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。
 * @method void setEndTime(string $EndTime) 设置自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。
 * @method integer getPage() 获取页码，从 1 开始。默认 1；fetch_scene 列表视角使用。
 * @method void setPage(integer $Page) 设置页码，从 1 开始。默认 1；fetch_scene 列表视角使用。
 * @method integer getLimit() 获取每页条数。默认 10，取值 1 至 100；fetch_scene 列表视角使用。
 * @method void setLimit(integer $Limit) 设置每页条数。默认 10，取值 1 至 100；fetch_scene 列表视角使用。
 * @method boolean getOverviewOnly() 获取是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。
 * @method void setOverviewOnly(boolean $OverviewOnly) 设置是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。
 * @method integer getOffset() 获取原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；取值 0 至 10000。
 * @method void setOffset(integer $Offset) 设置原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；取值 0 至 10000。
 * @method string getSortBy() 获取排序字段。可选。互联网边界 IP、NAT IP/子网视角支持 InputMax、OutputMax；VPC switch 视角支持 SwitchName；VPC ip/vpc 视角支持 FlowMax；其他组合不要传。
 * @method void setSortBy(string $SortBy) 设置排序字段。可选。互联网边界 IP、NAT IP/子网视角支持 InputMax、OutputMax；VPC switch 视角支持 SwitchName；VPC ip/vpc 视角支持 FlowMax；其他组合不要传。
 * @method string getSortOrder() 获取排序方向。默认 desc；支持 asc、desc。
 * @method void setSortOrder(string $SortOrder) 设置排序方向。默认 desc；支持 asc、desc。
 * @method array getFilters() 获取过滤条件列表。保留字段；当前公开 fetch_scene 场景均不支持，调用方不要传。
 * @method void setFilters(array $Filters) 设置过滤条件列表。保留字段；当前公开 fetch_scene 场景均不支持，调用方不要传。
 */
class DescribeCfwStatusMonitorRequest extends AbstractModel
{
    /**
     * @var string 操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。
     */
    public $Op;

    /**
     * @var string 防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。
     */
    public $FirewallType;

    /**
     * @var string 二级下拉选项 ID。fetch_scene 按需传入，值来自 describe_scene 返回的 selection.available_options[].id；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。
     */
    public $SelectionId;

    /**
     * @var string 二级下拉显示名称。可替代 SelectionId 按名称匹配，值来自 describe_scene 返回的 selection.available_options[].name。
     */
    public $SelectionName;

    /**
     * @var string 引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景，优先使用 describe_scene 返回的 selection.available_options[].instance_id；如只有 instance_ids，则从数组中选择一个字符串值。
     */
    public $SelectionInstanceId;

    /**
     * @var string 指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。
     */
    public $Metric;

    /**
     * @var string 指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。
     */
    public $Perspective;

    /**
     * @var string NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用，其他组合传入将返回 InvalidParameter。
     */
    public $IpScope;

    /**
     * @var string 预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。
     */
    public $TimePreset;

    /**
     * @var string 自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。
     */
    public $StartTime;

    /**
     * @var string 自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。
     */
    public $EndTime;

    /**
     * @var integer 页码，从 1 开始。默认 1；fetch_scene 列表视角使用。
     */
    public $Page;

    /**
     * @var integer 每页条数。默认 10，取值 1 至 100；fetch_scene 列表视角使用。
     */
    public $Limit;

    /**
     * @var boolean 是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。
     */
    public $OverviewOnly;

    /**
     * @var integer 原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；取值 0 至 10000。
     */
    public $Offset;

    /**
     * @var string 排序字段。可选。互联网边界 IP、NAT IP/子网视角支持 InputMax、OutputMax；VPC switch 视角支持 SwitchName；VPC ip/vpc 视角支持 FlowMax；其他组合不要传。
     */
    public $SortBy;

    /**
     * @var string 排序方向。默认 desc；支持 asc、desc。
     */
    public $SortOrder;

    /**
     * @var array 过滤条件列表。保留字段；当前公开 fetch_scene 场景均不支持，调用方不要传。
     */
    public $Filters;

    /**
     * @param string $Op 操作类型。describe_scene 表示发现场景和二级下拉选项；fetch_scene 表示获取具体场景快照。必填。
     * @param string $FirewallType 防火墙场景类型。支持 internet_edge（互联网边界防火墙）、nat_cluster（NAT边界防火墙-集群）、nat_ha（NAT边界防火墙-主备）、vpc_cluster（VPC边界防火墙-集群）、vpc_ha（VPC边界防火墙-主备）。必填。
     * @param string $SelectionId 二级下拉选项 ID。fetch_scene 按需传入，值来自 describe_scene 返回的 selection.available_options[].id；internet_edge 为地域，NAT 为实例 ID，VPC 带宽场景为防火墙组 ID；vpc_cluster 的 connections 汇总场景会忽略该参数。
     * @param string $SelectionName 二级下拉显示名称。可替代 SelectionId 按名称匹配，值来自 describe_scene 返回的 selection.available_options[].name。
     * @param string $SelectionInstanceId 引擎实例 ID。主要用于 vpc_ha 下一个防火墙组对应多个实例的场景，优先使用 describe_scene 返回的 selection.available_options[].instance_id；如只有 instance_ids，则从数组中选择一个字符串值。
     * @param string $Metric 指标页签。fetch_scene 可传；不传时使用该场景默认值。支持 bandwidth、connections。
     * @param string $Perspective 指标下的视角。fetch_scene 可传；不传时使用该场景默认值。支持 ip、subnet、session、switch、vpc，实际可用组合以 describe_scene 返回为准。
     * @param string $IpScope NAT 主备连接数 IP 视角范围。external 表示外部 IP，asset 表示资产 IP；仅 nat_ha + connections + ip 使用，其他组合传入将返回 InvalidParameter。
     * @param string $TimePreset 预设时间范围。默认 24h；fetch_scene 使用。支持 5m、15m、30m、1h、6h、24h、3d、7d、30d、today、yesterday、day_before_yesterday、this_week、last_week、this_month。
     * @param string $StartTime 自定义开始时间。格式 YYYY-MM-DD HH:MM:SS；必须与 EndTime 同时传，最大跨度 30 天。
     * @param string $EndTime 自定义结束时间。格式 YYYY-MM-DD HH:MM:SS；必须与 StartTime 同时传，最大跨度 30 天。
     * @param integer $Page 页码，从 1 开始。默认 1；fetch_scene 列表视角使用。
     * @param integer $Limit 每页条数。默认 10，取值 1 至 100；fetch_scene 列表视角使用。
     * @param boolean $OverviewOnly 是否只获取概览数据。true 时 fetch_scene 只请求 overview，跳过 table/detail，适合只看场景快照汇总。
     * @param integer $Offset 原始偏移量覆盖。可选，传入后覆盖 Page 计算结果；取值 0 至 10000。
     * @param string $SortBy 排序字段。可选。互联网边界 IP、NAT IP/子网视角支持 InputMax、OutputMax；VPC switch 视角支持 SwitchName；VPC ip/vpc 视角支持 FlowMax；其他组合不要传。
     * @param string $SortOrder 排序方向。默认 desc；支持 asc、desc。
     * @param array $Filters 过滤条件列表。保留字段；当前公开 fetch_scene 场景均不支持，调用方不要传。
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
