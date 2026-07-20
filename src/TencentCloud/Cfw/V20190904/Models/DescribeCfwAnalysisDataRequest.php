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
 * DescribeCfwAnalysisData请求参数结构体
 *
 * @method string getScenario() 获取分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。
 * @method void setScenario(string $Scenario) 设置分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。
 * @method string getStartTime() 获取查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。
 * @method void setStartTime(string $StartTime) 设置查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。
 * @method string getEndTime() 获取查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。
 * @method void setEndTime(string $EndTime) 设置查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。
 * @method string getObjectType() 获取分析对象类型。可选，默认 user；user 表示租户全局，asset 表示资产上下文，vpc 表示 VPC 上下文，domain 表示域名上下文。选择非 user 时建议同时传 ObjectId 以限定具体对象；当前未传 ObjectId 时仍按该对象类型执行宽查询。
 * @method void setObjectType(string $ObjectType) 设置分析对象类型。可选，默认 user；user 表示租户全局，asset 表示资产上下文，vpc 表示 VPC 上下文，domain 表示域名上下文。选择非 user 时建议同时传 ObjectId 以限定具体对象；当前未传 ObjectId 时仍按该对象类型执行宽查询。
 * @method string getObjectId() 获取分析对象标识。ObjectType 为 asset、vpc 或 domain 时可传，用于限定具体 IP、实例 ID、VPC ID 或域名；当前为可选参数，省略时不会按具体对象过滤。
 * @method void setObjectId(string $ObjectId) 设置分析对象标识。ObjectType 为 asset、vpc 或 domain 时可传，用于限定具体 IP、实例 ID、VPC ID 或域名；当前为可选参数，省略时不会按具体对象过滤。
 * @method string getTarget() 获取目标 IP 或域名过滤。可选，常用于 access_troubleshoot，也可用于其他 Scenario；传入后优先于 ObjectType/ObjectId，并对该场景全部分析段追加源 IP、目的 IP 或目的域名过滤。
 * @method void setTarget(string $Target) 设置目标 IP 或域名过滤。可选，常用于 access_troubleshoot，也可用于其他 Scenario；传入后优先于 ObjectType/ObjectId，并对该场景全部分析段追加源 IP、目的 IP 或目的域名过滤。
 * @method array getSkipSections() 获取需要跳过的分析段名称列表。可选；不传或传空数组时执行该场景全部分析段。full_traffic 支持 beacon、dns_large、dns_dga、dns_dga_fine、dns_tunnel、icmp_tunnel、mining、p2p、remote_tool、file_transfer、high_risk_outbound、lateral_baseline、vpc_sensitive、smb_write、outbound_baseline、inbound_high_risk、tls_expired、tls_self_signed、first_seen_ip、first_seen_country、first_seen_port；east_west 支持 vpc_inter_vpc、subnet_inter、service_port、lateral_baseline、vpc_sensitive、smb_write、database_lateral；alert_comprehensive 支持 outbound_baseline、lateral_baseline、beacon、inbound_high_risk、first_seen_ip、first_seen_country、first_seen_port；asset_exposure 支持 inbound_high_risk、tls_expired、tls_self_signed、high_risk_outbound；access_troubleshoot 支持 acl_border_block、acl_nat_block、acl_vpc_block、ips_block。传入当前 Scenario 不支持的名称会返回 InvalidParameter。
 * @method void setSkipSections(array $SkipSections) 设置需要跳过的分析段名称列表。可选；不传或传空数组时执行该场景全部分析段。full_traffic 支持 beacon、dns_large、dns_dga、dns_dga_fine、dns_tunnel、icmp_tunnel、mining、p2p、remote_tool、file_transfer、high_risk_outbound、lateral_baseline、vpc_sensitive、smb_write、outbound_baseline、inbound_high_risk、tls_expired、tls_self_signed、first_seen_ip、first_seen_country、first_seen_port；east_west 支持 vpc_inter_vpc、subnet_inter、service_port、lateral_baseline、vpc_sensitive、smb_write、database_lateral；alert_comprehensive 支持 outbound_baseline、lateral_baseline、beacon、inbound_high_risk、first_seen_ip、first_seen_country、first_seen_port；asset_exposure 支持 inbound_high_risk、tls_expired、tls_self_signed、high_risk_outbound；access_troubleshoot 支持 acl_border_block、acl_nat_block、acl_vpc_block、ips_block。传入当前 Scenario 不支持的名称会返回 InvalidParameter。
 */
class DescribeCfwAnalysisDataRequest extends AbstractModel
{
    /**
     * @var string 分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。
     */
    public $Scenario;

    /**
     * @var string 查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。
     */
    public $StartTime;

    /**
     * @var string 查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。
     */
    public $EndTime;

    /**
     * @var string 分析对象类型。可选，默认 user；user 表示租户全局，asset 表示资产上下文，vpc 表示 VPC 上下文，domain 表示域名上下文。选择非 user 时建议同时传 ObjectId 以限定具体对象；当前未传 ObjectId 时仍按该对象类型执行宽查询。
     */
    public $ObjectType;

    /**
     * @var string 分析对象标识。ObjectType 为 asset、vpc 或 domain 时可传，用于限定具体 IP、实例 ID、VPC ID 或域名；当前为可选参数，省略时不会按具体对象过滤。
     */
    public $ObjectId;

    /**
     * @var string 目标 IP 或域名过滤。可选，常用于 access_troubleshoot，也可用于其他 Scenario；传入后优先于 ObjectType/ObjectId，并对该场景全部分析段追加源 IP、目的 IP 或目的域名过滤。
     */
    public $Target;

    /**
     * @var array 需要跳过的分析段名称列表。可选；不传或传空数组时执行该场景全部分析段。full_traffic 支持 beacon、dns_large、dns_dga、dns_dga_fine、dns_tunnel、icmp_tunnel、mining、p2p、remote_tool、file_transfer、high_risk_outbound、lateral_baseline、vpc_sensitive、smb_write、outbound_baseline、inbound_high_risk、tls_expired、tls_self_signed、first_seen_ip、first_seen_country、first_seen_port；east_west 支持 vpc_inter_vpc、subnet_inter、service_port、lateral_baseline、vpc_sensitive、smb_write、database_lateral；alert_comprehensive 支持 outbound_baseline、lateral_baseline、beacon、inbound_high_risk、first_seen_ip、first_seen_country、first_seen_port；asset_exposure 支持 inbound_high_risk、tls_expired、tls_self_signed、high_risk_outbound；access_troubleshoot 支持 acl_border_block、acl_nat_block、acl_vpc_block、ips_block。传入当前 Scenario 不支持的名称会返回 InvalidParameter。
     */
    public $SkipSections;

    /**
     * @param string $Scenario 分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。
     * @param string $StartTime 查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。
     * @param string $EndTime 查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。
     * @param string $ObjectType 分析对象类型。可选，默认 user；user 表示租户全局，asset 表示资产上下文，vpc 表示 VPC 上下文，domain 表示域名上下文。选择非 user 时建议同时传 ObjectId 以限定具体对象；当前未传 ObjectId 时仍按该对象类型执行宽查询。
     * @param string $ObjectId 分析对象标识。ObjectType 为 asset、vpc 或 domain 时可传，用于限定具体 IP、实例 ID、VPC ID 或域名；当前为可选参数，省略时不会按具体对象过滤。
     * @param string $Target 目标 IP 或域名过滤。可选，常用于 access_troubleshoot，也可用于其他 Scenario；传入后优先于 ObjectType/ObjectId，并对该场景全部分析段追加源 IP、目的 IP 或目的域名过滤。
     * @param array $SkipSections 需要跳过的分析段名称列表。可选；不传或传空数组时执行该场景全部分析段。full_traffic 支持 beacon、dns_large、dns_dga、dns_dga_fine、dns_tunnel、icmp_tunnel、mining、p2p、remote_tool、file_transfer、high_risk_outbound、lateral_baseline、vpc_sensitive、smb_write、outbound_baseline、inbound_high_risk、tls_expired、tls_self_signed、first_seen_ip、first_seen_country、first_seen_port；east_west 支持 vpc_inter_vpc、subnet_inter、service_port、lateral_baseline、vpc_sensitive、smb_write、database_lateral；alert_comprehensive 支持 outbound_baseline、lateral_baseline、beacon、inbound_high_risk、first_seen_ip、first_seen_country、first_seen_port；asset_exposure 支持 inbound_high_risk、tls_expired、tls_self_signed、high_risk_outbound；access_troubleshoot 支持 acl_border_block、acl_nat_block、acl_vpc_block、ips_block。传入当前 Scenario 不支持的名称会返回 InvalidParameter。
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
        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("SkipSections",$param) and $param["SkipSections"] !== null) {
            $this->SkipSections = $param["SkipSections"];
        }
    }
}
