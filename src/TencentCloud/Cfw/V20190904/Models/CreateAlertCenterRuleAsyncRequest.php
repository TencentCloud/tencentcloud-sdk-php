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
 * CreateAlertCenterRuleAsync请求参数结构体
 *
 * @method integer getAlertDirection() 获取<p>必填的告警方向：0 出向，1 入向，3 内网。用于 HandleIpList 中 IP 目标的处置方向；其它目标也必须传上述有效值。从 DescribeCfwAlerts 复制方向时，将 alerts[].direction 的 outbound、inbound、lateral 分别转换为 JSON 整数 0、1、3。</p>
 * @method void setAlertDirection(integer $AlertDirection) 设置<p>必填的告警方向：0 出向，1 入向，3 内网。用于 HandleIpList 中 IP 目标的处置方向；其它目标也必须传上述有效值。从 DescribeCfwAlerts 复制方向时，将 alerts[].direction 的 outbound、inbound、lateral 分别转换为 JSON 整数 0、1、3。</p>
 * @method string getHandleDirection() 获取<p>必填的处置生效方向。支持空字符串、0（互联网出向）、1（互联网入向）、0,1/1,0（互联网双向）、3（内网访问）、5（内网访问源）、6（内网访问目的）及 5,6/6,5。空字符串表示按告警原方向处置；同一 IP 的已有规则方向会与本次方向合并。</p>
 * @method void setHandleDirection(string $HandleDirection) 设置<p>必填的处置生效方向。支持空字符串、0（互联网出向）、1（互联网入向）、0,1/1,0（互联网双向）、3（内网访问）、5（内网访问源）、6（内网访问目的）及 5,6/6,5。空字符串表示按告警原方向处置；同一 IP 的已有规则方向会与本次方向合并。</p>
 * @method integer getHandleTime() 获取<p>处置有效期：1 表示 1 天，7 表示 7 天，-2 表示永久。</p>
 * @method void setHandleTime(integer $HandleTime) 设置<p>处置有效期：1 表示 1 天，7 表示 7 天，-2 表示永久。</p>
 * @method integer getHandleType() 获取<p>必填的处置类型：1 按 HandleIdList 或 HandleEventIdList 封禁，2 按 HandleIdList、HandleEventIdList 或 BlockDomain 加白，3 按 HandleIpList 加白 IP，4 按 HandleIpList 封禁 IP，5 将 HandleIdList 或 HandleEventIdList 对应的安全基线告警地址加入指定方向的安全基线列表，8 按 HandleEventIdList 关联资产或 AssetIdList 新增隔离。五类目标至少提供一类；HandleType=8 未能从事件解析出资产时必须提供 AssetIdList。IsolateType 和 WhiteIpList 仅用于类型 8。</p>
 * @method void setHandleType(integer $HandleType) 设置<p>必填的处置类型：1 按 HandleIdList 或 HandleEventIdList 封禁，2 按 HandleIdList、HandleEventIdList 或 BlockDomain 加白，3 按 HandleIpList 加白 IP，4 按 HandleIpList 封禁 IP，5 将 HandleIdList 或 HandleEventIdList 对应的安全基线告警地址加入指定方向的安全基线列表，8 按 HandleEventIdList 关联资产或 AssetIdList 新增隔离。五类目标至少提供一类；HandleType=8 未能从事件解析出资产时必须提供 AssetIdList。IsolateType 和 WhiteIpList 仅用于类型 8。</p>
 * @method array getAssetIdList() 获取<p>资产隔离目标列表，可省略；仅 HandleType=8 使用。直接按资产隔离时，调用 DescribeCfwAssets，传 AssetType=host 和目标 InstanceId，解析返回结果；仅在唯一 assets[].instance_id 与目标完全相等时将其写入本字段，不使用资产名称。</p>
 * @method void setAssetIdList(array $AssetIdList) 设置<p>资产隔离目标列表，可省略；仅 HandleType=8 使用。直接按资产隔离时，调用 DescribeCfwAssets，传 AssetType=host 和目标 InstanceId，解析返回结果；仅在唯一 assets[].instance_id 与目标完全相等时将其写入本字段，不使用资产名称。</p>
 * @method string getBlockDomain() 获取<p>域名加白目标，传合法域名；HandleType 必须为 2，并同时传 TargetEventIdList。</p>
 * @method void setBlockDomain(string $BlockDomain) 设置<p>域名加白目标，传合法域名；HandleType 必须为 2，并同时传 TargetEventIdList。</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method string getHandleComment() 获取<p>可选处置说明，最多 50 个 Unicode 字符。</p>
 * @method void setHandleComment(string $HandleComment) 设置<p>可选处置说明，最多 50 个 Unicode 字符。</p>
 * @method array getHandleEventIdList() 获取<p>告警事件 ID 列表，可省略。通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。事件对应的告警日志会与 HandleIdList 合并后参与处置。</p>
 * @method void setHandleEventIdList(array $HandleEventIdList) 设置<p>告警事件 ID 列表，可省略。通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。事件对应的告警日志会与 HandleIdList 合并后参与处置。</p>
 * @method array getHandleIdList() 获取<p>告警日志 ID 列表，可省略；可与 HandleEventIdList 同时使用。调用 DescribeLogs，传 Index=rule_threatinfo 和目标日志的查询条件，解析返回结果，仅使用目标记录的 log_id。告警事件 ID 使用 HandleEventIdList。</p>
 * @method void setHandleIdList(array $HandleIdList) 设置<p>告警日志 ID 列表，可省略；可与 HandleEventIdList 同时使用。调用 DescribeLogs，传 Index=rule_threatinfo 和目标日志的查询条件，解析返回结果，仅使用目标记录的 log_id。告警事件 ID 使用 HandleEventIdList。</p>
 * @method array getHandleIpList() 获取<p>IP 处置目标列表，每项必须是有效 IP 地址。HandleType=3 表示加白，HandleType=4 表示封禁；可使用 DescribeCfwAlerts 返回的 alerts[].src_ip_list 或 alerts[].dst_ip_list。</p>
 * @method void setHandleIpList(array $HandleIpList) 设置<p>IP 处置目标列表，每项必须是有效 IP 地址。HandleType=3 表示加白，HandleType=4 表示封禁；可使用 DescribeCfwAlerts 返回的 alerts[].src_ip_list 或 alerts[].dst_ip_list。</p>
 * @method integer getIgnoreReason() 获取<p>处置原因，可省略：0 未指定原因，1 重复，2 误报，3 紧急加白；主要用于加白记录。</p>
 * @method void setIgnoreReason(integer $IgnoreReason) 设置<p>处置原因，可省略：0 未指定原因，1 重复，2 误报，3 紧急加白；主要用于加白记录。</p>
 * @method array getIsolateType() 获取<p>隔离范围数组，可省略：1 互联网入站，2 互联网出站，4 内网访问。仅 HandleType=8 使用；组合多个范围时传入对应值且不要重复，重复值会改变最终隔离范围。</p>
 * @method void setIsolateType(array $IsolateType) 设置<p>隔离范围数组，可省略：1 互联网入站，2 互联网出站，4 内网访问。仅 HandleType=8 使用；组合多个范围时传入对应值且不要重复，重复值会改变最终隔离范围。</p>
 * @method array getTargetEventIdList() 获取<p>处置关联的来源事件 ID 列表，仅用于 HandleIpList 或 BlockDomain。BlockDomain 处置时必填，HandleIpList 处置时可省略；通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。</p>
 * @method void setTargetEventIdList(array $TargetEventIdList) 设置<p>处置关联的来源事件 ID 列表，仅用于 HandleIpList 或 BlockDomain。BlockDomain 处置时必填，HandleIpList 处置时可省略；通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。</p>
 * @method array getWhiteIpList() 获取<p>隔离后仍允许通信的 IPv4 地址列表，仅 HandleType=8 使用。可省略或传空数组；非空时每项必须是有效 IPv4 地址。</p>
 * @method void setWhiteIpList(array $WhiteIpList) 设置<p>隔离后仍允许通信的 IPv4 地址列表，仅 HandleType=8 使用。可省略或传空数组；非空时每项必须是有效 IPv4 地址。</p>
 */
class CreateAlertCenterRuleAsyncRequest extends AbstractModel
{
    /**
     * @var integer <p>必填的告警方向：0 出向，1 入向，3 内网。用于 HandleIpList 中 IP 目标的处置方向；其它目标也必须传上述有效值。从 DescribeCfwAlerts 复制方向时，将 alerts[].direction 的 outbound、inbound、lateral 分别转换为 JSON 整数 0、1、3。</p>
     */
    public $AlertDirection;

    /**
     * @var string <p>必填的处置生效方向。支持空字符串、0（互联网出向）、1（互联网入向）、0,1/1,0（互联网双向）、3（内网访问）、5（内网访问源）、6（内网访问目的）及 5,6/6,5。空字符串表示按告警原方向处置；同一 IP 的已有规则方向会与本次方向合并。</p>
     */
    public $HandleDirection;

    /**
     * @var integer <p>处置有效期：1 表示 1 天，7 表示 7 天，-2 表示永久。</p>
     */
    public $HandleTime;

    /**
     * @var integer <p>必填的处置类型：1 按 HandleIdList 或 HandleEventIdList 封禁，2 按 HandleIdList、HandleEventIdList 或 BlockDomain 加白，3 按 HandleIpList 加白 IP，4 按 HandleIpList 封禁 IP，5 将 HandleIdList 或 HandleEventIdList 对应的安全基线告警地址加入指定方向的安全基线列表，8 按 HandleEventIdList 关联资产或 AssetIdList 新增隔离。五类目标至少提供一类；HandleType=8 未能从事件解析出资产时必须提供 AssetIdList。IsolateType 和 WhiteIpList 仅用于类型 8。</p>
     */
    public $HandleType;

    /**
     * @var array <p>资产隔离目标列表，可省略；仅 HandleType=8 使用。直接按资产隔离时，调用 DescribeCfwAssets，传 AssetType=host 和目标 InstanceId，解析返回结果；仅在唯一 assets[].instance_id 与目标完全相等时将其写入本字段，不使用资产名称。</p>
     */
    public $AssetIdList;

    /**
     * @var string <p>域名加白目标，传合法域名；HandleType 必须为 2，并同时传 TargetEventIdList。</p>
     */
    public $BlockDomain;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var string <p>可选处置说明，最多 50 个 Unicode 字符。</p>
     */
    public $HandleComment;

    /**
     * @var array <p>告警事件 ID 列表，可省略。通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。事件对应的告警日志会与 HandleIdList 合并后参与处置。</p>
     */
    public $HandleEventIdList;

    /**
     * @var array <p>告警日志 ID 列表，可省略；可与 HandleEventIdList 同时使用。调用 DescribeLogs，传 Index=rule_threatinfo 和目标日志的查询条件，解析返回结果，仅使用目标记录的 log_id。告警事件 ID 使用 HandleEventIdList。</p>
     */
    public $HandleIdList;

    /**
     * @var array <p>IP 处置目标列表，每项必须是有效 IP 地址。HandleType=3 表示加白，HandleType=4 表示封禁；可使用 DescribeCfwAlerts 返回的 alerts[].src_ip_list 或 alerts[].dst_ip_list。</p>
     */
    public $HandleIpList;

    /**
     * @var integer <p>处置原因，可省略：0 未指定原因，1 重复，2 误报，3 紧急加白；主要用于加白记录。</p>
     */
    public $IgnoreReason;

    /**
     * @var array <p>隔离范围数组，可省略：1 互联网入站，2 互联网出站，4 内网访问。仅 HandleType=8 使用；组合多个范围时传入对应值且不要重复，重复值会改变最终隔离范围。</p>
     */
    public $IsolateType;

    /**
     * @var array <p>处置关联的来源事件 ID 列表，仅用于 HandleIpList 或 BlockDomain。BlockDomain 处置时必填，HandleIpList 处置时可省略；通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。</p>
     */
    public $TargetEventIdList;

    /**
     * @var array <p>隔离后仍允许通信的 IPv4 地址列表，仅 HandleType=8 使用。可省略或传空数组；非空时每项必须是有效 IPv4 地址。</p>
     */
    public $WhiteIpList;

    /**
     * @param integer $AlertDirection <p>必填的告警方向：0 出向，1 入向，3 内网。用于 HandleIpList 中 IP 目标的处置方向；其它目标也必须传上述有效值。从 DescribeCfwAlerts 复制方向时，将 alerts[].direction 的 outbound、inbound、lateral 分别转换为 JSON 整数 0、1、3。</p>
     * @param string $HandleDirection <p>必填的处置生效方向。支持空字符串、0（互联网出向）、1（互联网入向）、0,1/1,0（互联网双向）、3（内网访问）、5（内网访问源）、6（内网访问目的）及 5,6/6,5。空字符串表示按告警原方向处置；同一 IP 的已有规则方向会与本次方向合并。</p>
     * @param integer $HandleTime <p>处置有效期：1 表示 1 天，7 表示 7 天，-2 表示永久。</p>
     * @param integer $HandleType <p>必填的处置类型：1 按 HandleIdList 或 HandleEventIdList 封禁，2 按 HandleIdList、HandleEventIdList 或 BlockDomain 加白，3 按 HandleIpList 加白 IP，4 按 HandleIpList 封禁 IP，5 将 HandleIdList 或 HandleEventIdList 对应的安全基线告警地址加入指定方向的安全基线列表，8 按 HandleEventIdList 关联资产或 AssetIdList 新增隔离。五类目标至少提供一类；HandleType=8 未能从事件解析出资产时必须提供 AssetIdList。IsolateType 和 WhiteIpList 仅用于类型 8。</p>
     * @param array $AssetIdList <p>资产隔离目标列表，可省略；仅 HandleType=8 使用。直接按资产隔离时，调用 DescribeCfwAssets，传 AssetType=host 和目标 InstanceId，解析返回结果；仅在唯一 assets[].instance_id 与目标完全相等时将其写入本字段，不使用资产名称。</p>
     * @param string $BlockDomain <p>域名加白目标，传合法域名；HandleType 必须为 2，并同时传 TargetEventIdList。</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param string $HandleComment <p>可选处置说明，最多 50 个 Unicode 字符。</p>
     * @param array $HandleEventIdList <p>告警事件 ID 列表，可省略。通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。事件对应的告警日志会与 HandleIdList 合并后参与处置。</p>
     * @param array $HandleIdList <p>告警日志 ID 列表，可省略；可与 HandleEventIdList 同时使用。调用 DescribeLogs，传 Index=rule_threatinfo 和目标日志的查询条件，解析返回结果，仅使用目标记录的 log_id。告警事件 ID 使用 HandleEventIdList。</p>
     * @param array $HandleIpList <p>IP 处置目标列表，每项必须是有效 IP 地址。HandleType=3 表示加白，HandleType=4 表示封禁；可使用 DescribeCfwAlerts 返回的 alerts[].src_ip_list 或 alerts[].dst_ip_list。</p>
     * @param integer $IgnoreReason <p>处置原因，可省略：0 未指定原因，1 重复，2 误报，3 紧急加白；主要用于加白记录。</p>
     * @param array $IsolateType <p>隔离范围数组，可省略：1 互联网入站，2 互联网出站，4 内网访问。仅 HandleType=8 使用；组合多个范围时传入对应值且不要重复，重复值会改变最终隔离范围。</p>
     * @param array $TargetEventIdList <p>处置关联的来源事件 ID 列表，仅用于 HandleIpList 或 BlockDomain。BlockDomain 处置时必填，HandleIpList 处置时可省略；通过 DescribeCfwAlerts 获取，返回 alerts[].current_event_id 时使用该值，否则使用 alerts[].event_id。</p>
     * @param array $WhiteIpList <p>隔离后仍允许通信的 IPv4 地址列表，仅 HandleType=8 使用。可省略或传空数组；非空时每项必须是有效 IPv4 地址。</p>
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
        if (array_key_exists("AlertDirection",$param) and $param["AlertDirection"] !== null) {
            $this->AlertDirection = $param["AlertDirection"];
        }

        if (array_key_exists("HandleDirection",$param) and $param["HandleDirection"] !== null) {
            $this->HandleDirection = $param["HandleDirection"];
        }

        if (array_key_exists("HandleTime",$param) and $param["HandleTime"] !== null) {
            $this->HandleTime = $param["HandleTime"];
        }

        if (array_key_exists("HandleType",$param) and $param["HandleType"] !== null) {
            $this->HandleType = $param["HandleType"];
        }

        if (array_key_exists("AssetIdList",$param) and $param["AssetIdList"] !== null) {
            $this->AssetIdList = $param["AssetIdList"];
        }

        if (array_key_exists("BlockDomain",$param) and $param["BlockDomain"] !== null) {
            $this->BlockDomain = $param["BlockDomain"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("HandleComment",$param) and $param["HandleComment"] !== null) {
            $this->HandleComment = $param["HandleComment"];
        }

        if (array_key_exists("HandleEventIdList",$param) and $param["HandleEventIdList"] !== null) {
            $this->HandleEventIdList = $param["HandleEventIdList"];
        }

        if (array_key_exists("HandleIdList",$param) and $param["HandleIdList"] !== null) {
            $this->HandleIdList = $param["HandleIdList"];
        }

        if (array_key_exists("HandleIpList",$param) and $param["HandleIpList"] !== null) {
            $this->HandleIpList = $param["HandleIpList"];
        }

        if (array_key_exists("IgnoreReason",$param) and $param["IgnoreReason"] !== null) {
            $this->IgnoreReason = $param["IgnoreReason"];
        }

        if (array_key_exists("IsolateType",$param) and $param["IsolateType"] !== null) {
            $this->IsolateType = $param["IsolateType"];
        }

        if (array_key_exists("TargetEventIdList",$param) and $param["TargetEventIdList"] !== null) {
            $this->TargetEventIdList = $param["TargetEventIdList"];
        }

        if (array_key_exists("WhiteIpList",$param) and $param["WhiteIpList"] !== null) {
            $this->WhiteIpList = $param["WhiteIpList"];
        }
    }
}
