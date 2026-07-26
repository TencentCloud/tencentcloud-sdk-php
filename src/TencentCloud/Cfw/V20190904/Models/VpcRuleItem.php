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
 * VPC边界访问控制规则参数结构，供新增和修改共用。修改时整条替换，省略的可写字段不会继承旧值；查询展示字段在新增和修改请求中均忽略。
 *
 * @method string getDescription() 获取规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
 * @method void setDescription(string $Description) 设置规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
 * @method string getDestContent() 获取访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。归一化后的目的内容超过 1023 字节时请求失败。
 * @method void setDestContent(string $DestContent) 设置访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。归一化后的目的内容超过 1023 字节时请求失败。
 * @method string getDestType() 获取访问目的类型，不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，domain 表示 FQDN 匹配，dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。url 虽可被通用类型映射识别，但 VPC 目的内容不支持。地址模板和部分域名模式要求当前 VPC 防火墙引擎支持对应能力；类型及模板实际类型共同决定 DestContent 和 Protocol 的校验。
 * @method void setDestType(string $DestType) 设置访问目的类型，不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，domain 表示 FQDN 匹配，dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。url 虽可被通用类型映射识别，但 VPC 目的内容不支持。地址模板和部分域名模式要求当前 VPC 防火墙引擎支持对应能力；类型及模板实际类型共同决定 DestContent 和 Protocol 的校验。
 * @method string getEdgeId() 获取规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 边，cfws- 前缀表示指定 VPC 边；其它格式无效。ALL 要求当前环境支持 VPC 全局规则。
 * @method void setEdgeId(string $EdgeId) 设置规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 边，cfws- 前缀表示指定 VPC 边；其它格式无效。ALL 要求当前环境支持 VPC 全局规则。
 * @method string getEnable() 获取规则状态，不区分大小写：true 表示启用，false 表示禁用。省略或为空时使用账号默认状态；没有可用默认值时启用。
 * @method void setEnable(string $Enable) 设置规则状态，不区分大小写：true 表示启用，false 表示禁用。省略或为空时使用账号默认状态；没有可用默认值时启用。
 * @method integer getOrderIndex() 获取规则在相同 IpVersion 下的顺序。-1 表示追加到末尾；正序号表示在对应位置插入并顺延后续规则。0、其它负数及超范围值不应使用。批量新增按 Rules 顺序依次处理。
 * @method void setOrderIndex(integer $OrderIndex) 设置规则在相同 IpVersion 下的顺序。-1 表示追加到末尾；正序号表示在对应位置插入并顺延后续规则。0、其它负数及超范围值不应使用。批量新增按 Rules 顺序依次处理。
 * @method string getPort() 获取访问端口。除 ICMP 和 ICMPV6 外，支持逗号分隔的正整数单端口或“起始/结束”范围，且起始值不大于结束值；-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略该字段；FTP 仅支持单个正整数端口。
 * @method void setPort(string $Port) 设置访问端口。除 ICMP 和 ICMPV6 外，支持逗号分隔的正整数单端口或“起始/结束”范围，且起始值不大于结束值；-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略该字段；FTP 仅支持单个正整数端口。
 * @method string getProtocol() 获取协议名称，不区分大小写并归一化。ANY 表示不限定协议，不表示省略 Protocol。IP、instance、tag、group 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。
 * @method void setProtocol(string $Protocol) 设置协议名称，不区分大小写并归一化。ANY 表示不限定协议，不表示省略 Protocol。IP、instance、tag、group 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。
 * @method string getRuleAction() 获取流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标；其它值返回参数错误。
 * @method void setRuleAction(string $RuleAction) 设置流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标；其它值返回参数错误。
 * @method string getSourceContent() 获取访问源内容，格式由 SourceType 决定：net/ip 使用最多 10 个逗号分隔的 IP 或 CIDR；template 使用当前账号且匹配 IpVersion 的 IP 地址模板 ID，不支持域名模板；instance、tag 必须属于当前账号，instance 须有对应 IpVersion 的私网地址；group 使用资源组 ID。
 * @method void setSourceContent(string $SourceContent) 设置访问源内容，格式由 SourceType 决定：net/ip 使用最多 10 个逗号分隔的 IP 或 CIDR；template 使用当前账号且匹配 IpVersion 的 IP 地址模板 ID，不支持域名模板；instance、tag 必须属于当前账号，instance 须有对应 IpVersion 的私网地址；group 使用资源组 ID。
 * @method string getSourceType() 获取访问源类型，不区分大小写：net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，tag 表示资源标签，group 表示资产分组。类型及模板实际类型决定 SourceContent 的格式；template 要求当前环境支持地址模板。
 * @method void setSourceType(string $SourceType) 设置访问源类型，不区分大小写：net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，tag 表示资源标签，group 表示资产分组。类型及模板实际类型决定 SourceContent 的格式；template 要求当前环境支持地址模板。
 * @method array getBetaList() 获取规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method void setBetaList(array $BetaList) 设置规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method string getCreateTime() 获取规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method void setCreateTime(string $CreateTime) 设置规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method integer getDeleted() 获取规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method void setDeleted(integer $Deleted) 设置规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method string getDestValueType() 获取目的实际类型提示，例如区分 IP 地址模板和域名地址模板；新增和修改请求中忽略。
 * @method void setDestValueType(string $DestValueType) 设置目的实际类型提示，例如区分 IP 地址模板和域名地址模板；新增和修改请求中忽略。
 * @method integer getDetectedTimes() 获取规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method void setDetectedTimes(integer $DetectedTimes) 设置规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method string getEdgeName() 获取EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method void setEdgeName(string $EdgeName) 设置EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method string getFwGroupId() 获取规则生效的防火墙组或 CCN 范围，不区分大小写。支持 ALL、cfwg- 前缀和 ccn- 前缀；省略、为空或格式无效时按 ALL 处理。
 * @method void setFwGroupId(string $FwGroupId) 设置规则生效的防火墙组或 CCN 范围，不区分大小写。支持 ALL、cfwg- 前缀和 ccn- 前缀；省略、为空或格式无效时按 ALL 处理。
 * @method string getFwGroupName() 获取防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method void setFwGroupName(string $FwGroupName) 设置防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method integer getInternalUuid() 获取覆盖导入规则标识。仅 batch_import_cover 接受正整数值；其它新增方式和修改请求中忽略。
 * @method void setInternalUuid(integer $InternalUuid) 设置覆盖导入规则标识。仅 batch_import_cover 接受正整数值；其它新增方式和修改请求中忽略。
 * @method integer getInvalid() 获取查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。
 * @method void setInvalid(integer $Invalid) 设置查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。
 * @method integer getIpVersion() 获取IP 版本：0 表示 IPv4，1 表示 IPv6；省略或传入其它整数时按 IPv4 处理。instance 和 IP 地址模板须匹配该版本；直接填写的 net IP/CIDR 也应使用相同版本。
 * @method void setIpVersion(integer $IpVersion) 设置IP 版本：0 表示 IPv4，1 表示 IPv6；省略或传入其它整数时按 IPv4 处理。instance 和 IP 地址模板须匹配该版本；直接填写的 net IP/CIDR 也应使用相同版本。
 * @method string getParamTemplateId() 获取端口协议组 ID。省略或为空时使用 Protocol 和 Port；非空时必须是当前账号可用的端口协议组，组内协议端口须满足目的类型限制。Protocol 和非 ICMP/ICMPV6 的 Port 仍须使用有效格式。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置端口协议组 ID。省略或为空时使用 Protocol 和 Port；非空时必须是当前账号可用的端口协议组，组内协议端口须满足目的类型限制。Protocol 和非 ICMP/ICMPV6 的 Port 仍须使用有效格式。
 * @method string getParamTemplateName() 获取端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method void setParamTemplateName(string $ParamTemplateName) 设置端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method integer getRulePartition() 获取规则位置展示值：1 表示最前，2 表示中间，3 表示最后。新增和修改请求中忽略；仅位置为 2 的规则可修改。
 * @method void setRulePartition(integer $RulePartition) 设置规则位置展示值：1 表示最前，2 表示中间，3 表示最后。新增和修改请求中忽略；仅位置为 2 的规则可修改。
 * @method string getSourceName() 获取访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method void setSourceName(string $SourceName) 设置访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method string getTargetName() 获取访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method void setTargetName(string $TargetName) 设置访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
 * @method string getUpdateTime() 获取规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method void setUpdateTime(string $UpdateTime) 设置规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
 * @method integer getUuid() 获取规则 ID。修改时必须提供当前账号已有且可修改的正整数 Uuid，并完整替换该规则。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 可使用正整数 ID，非正数值由系统分配。
 * @method void setUuid(integer $Uuid) 设置规则 ID。修改时必须提供当前账号已有且可修改的正整数 Uuid，并完整替换该规则。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 可使用正整数 ID，非正数值由系统分配。
 */
class VpcRuleItem extends AbstractModel
{
    /**
     * @var string 规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
     */
    public $Description;

    /**
     * @var string 访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。归一化后的目的内容超过 1023 字节时请求失败。
     */
    public $DestContent;

    /**
     * @var string 访问目的类型，不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，domain 表示 FQDN 匹配，dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。url 虽可被通用类型映射识别，但 VPC 目的内容不支持。地址模板和部分域名模式要求当前 VPC 防火墙引擎支持对应能力；类型及模板实际类型共同决定 DestContent 和 Protocol 的校验。
     */
    public $DestType;

    /**
     * @var string 规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 边，cfws- 前缀表示指定 VPC 边；其它格式无效。ALL 要求当前环境支持 VPC 全局规则。
     */
    public $EdgeId;

    /**
     * @var string 规则状态，不区分大小写：true 表示启用，false 表示禁用。省略或为空时使用账号默认状态；没有可用默认值时启用。
     */
    public $Enable;

    /**
     * @var integer 规则在相同 IpVersion 下的顺序。-1 表示追加到末尾；正序号表示在对应位置插入并顺延后续规则。0、其它负数及超范围值不应使用。批量新增按 Rules 顺序依次处理。
     */
    public $OrderIndex;

    /**
     * @var string 访问端口。除 ICMP 和 ICMPV6 外，支持逗号分隔的正整数单端口或“起始/结束”范围，且起始值不大于结束值；-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略该字段；FTP 仅支持单个正整数端口。
     */
    public $Port;

    /**
     * @var string 协议名称，不区分大小写并归一化。ANY 表示不限定协议，不表示省略 Protocol。IP、instance、tag、group 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。
     */
    public $Protocol;

    /**
     * @var string 流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标；其它值返回参数错误。
     */
    public $RuleAction;

    /**
     * @var string 访问源内容，格式由 SourceType 决定：net/ip 使用最多 10 个逗号分隔的 IP 或 CIDR；template 使用当前账号且匹配 IpVersion 的 IP 地址模板 ID，不支持域名模板；instance、tag 必须属于当前账号，instance 须有对应 IpVersion 的私网地址；group 使用资源组 ID。
     */
    public $SourceContent;

    /**
     * @var string 访问源类型，不区分大小写：net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，tag 表示资源标签，group 表示资产分组。类型及模板实际类型决定 SourceContent 的格式；template 要求当前环境支持地址模板。
     */
    public $SourceType;

    /**
     * @var array 规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     */
    public $BetaList;

    /**
     * @var string 规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     */
    public $CreateTime;

    /**
     * @var integer 规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     */
    public $Deleted;

    /**
     * @var string 目的实际类型提示，例如区分 IP 地址模板和域名地址模板；新增和修改请求中忽略。
     */
    public $DestValueType;

    /**
     * @var integer 规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     */
    public $DetectedTimes;

    /**
     * @var string EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     */
    public $EdgeName;

    /**
     * @var string 规则生效的防火墙组或 CCN 范围，不区分大小写。支持 ALL、cfwg- 前缀和 ccn- 前缀；省略、为空或格式无效时按 ALL 处理。
     */
    public $FwGroupId;

    /**
     * @var string 防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     */
    public $FwGroupName;

    /**
     * @var integer 覆盖导入规则标识。仅 batch_import_cover 接受正整数值；其它新增方式和修改请求中忽略。
     */
    public $InternalUuid;

    /**
     * @var integer 查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。
     */
    public $Invalid;

    /**
     * @var integer IP 版本：0 表示 IPv4，1 表示 IPv6；省略或传入其它整数时按 IPv4 处理。instance 和 IP 地址模板须匹配该版本；直接填写的 net IP/CIDR 也应使用相同版本。
     */
    public $IpVersion;

    /**
     * @var string 端口协议组 ID。省略或为空时使用 Protocol 和 Port；非空时必须是当前账号可用的端口协议组，组内协议端口须满足目的类型限制。Protocol 和非 ICMP/ICMPV6 的 Port 仍须使用有效格式。
     */
    public $ParamTemplateId;

    /**
     * @var string 端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     */
    public $ParamTemplateName;

    /**
     * @var integer 规则位置展示值：1 表示最前，2 表示中间，3 表示最后。新增和修改请求中忽略；仅位置为 2 的规则可修改。
     */
    public $RulePartition;

    /**
     * @var string 访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     */
    public $SourceName;

    /**
     * @var string 访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     */
    public $TargetName;

    /**
     * @var string 规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     */
    public $UpdateTime;

    /**
     * @var integer 规则 ID。修改时必须提供当前账号已有且可修改的正整数 Uuid，并完整替换该规则。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 可使用正整数 ID，非正数值由系统分配。
     */
    public $Uuid;

    /**
     * @param string $Description 规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
     * @param string $DestContent 访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。归一化后的目的内容超过 1023 字节时请求失败。
     * @param string $DestType 访问目的类型，不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，domain 表示 FQDN 匹配，dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。url 虽可被通用类型映射识别，但 VPC 目的内容不支持。地址模板和部分域名模式要求当前 VPC 防火墙引擎支持对应能力；类型及模板实际类型共同决定 DestContent 和 Protocol 的校验。
     * @param string $EdgeId 规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 边，cfws- 前缀表示指定 VPC 边；其它格式无效。ALL 要求当前环境支持 VPC 全局规则。
     * @param string $Enable 规则状态，不区分大小写：true 表示启用，false 表示禁用。省略或为空时使用账号默认状态；没有可用默认值时启用。
     * @param integer $OrderIndex 规则在相同 IpVersion 下的顺序。-1 表示追加到末尾；正序号表示在对应位置插入并顺延后续规则。0、其它负数及超范围值不应使用。批量新增按 Rules 顺序依次处理。
     * @param string $Port 访问端口。除 ICMP 和 ICMPV6 外，支持逗号分隔的正整数单端口或“起始/结束”范围，且起始值不大于结束值；-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略该字段；FTP 仅支持单个正整数端口。
     * @param string $Protocol 协议名称，不区分大小写并归一化。ANY 表示不限定协议，不表示省略 Protocol。IP、instance、tag、group 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。
     * @param string $RuleAction 流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标；其它值返回参数错误。
     * @param string $SourceContent 访问源内容，格式由 SourceType 决定：net/ip 使用最多 10 个逗号分隔的 IP 或 CIDR；template 使用当前账号且匹配 IpVersion 的 IP 地址模板 ID，不支持域名模板；instance、tag 必须属于当前账号，instance 须有对应 IpVersion 的私网地址；group 使用资源组 ID。
     * @param string $SourceType 访问源类型，不区分大小写：net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，tag 表示资源标签，group 表示资产分组。类型及模板实际类型决定 SourceContent 的格式；template 要求当前环境支持地址模板。
     * @param array $BetaList 规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     * @param string $CreateTime 规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     * @param integer $Deleted 规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     * @param string $DestValueType 目的实际类型提示，例如区分 IP 地址模板和域名地址模板；新增和修改请求中忽略。
     * @param integer $DetectedTimes 规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     * @param string $EdgeName EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     * @param string $FwGroupId 规则生效的防火墙组或 CCN 范围，不区分大小写。支持 ALL、cfwg- 前缀和 ccn- 前缀；省略、为空或格式无效时按 ALL 处理。
     * @param string $FwGroupName 防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     * @param integer $InternalUuid 覆盖导入规则标识。仅 batch_import_cover 接受正整数值；其它新增方式和修改请求中忽略。
     * @param integer $Invalid 查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。
     * @param integer $IpVersion IP 版本：0 表示 IPv4，1 表示 IPv6；省略或传入其它整数时按 IPv4 处理。instance 和 IP 地址模板须匹配该版本；直接填写的 net IP/CIDR 也应使用相同版本。
     * @param string $ParamTemplateId 端口协议组 ID。省略或为空时使用 Protocol 和 Port；非空时必须是当前账号可用的端口协议组，组内协议端口须满足目的类型限制。Protocol 和非 ICMP/ICMPV6 的 Port 仍须使用有效格式。
     * @param string $ParamTemplateName 端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     * @param integer $RulePartition 规则位置展示值：1 表示最前，2 表示中间，3 表示最后。新增和修改请求中忽略；仅位置为 2 的规则可修改。
     * @param string $SourceName 访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     * @param string $TargetName 访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。
     * @param string $UpdateTime 规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。
     * @param integer $Uuid 规则 ID。修改时必须提供当前账号已有且可修改的正整数 Uuid，并完整替换该规则。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 可使用正整数 ID，非正数值由系统分配。
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("BetaList",$param) and $param["BetaList"] !== null) {
            $this->BetaList = [];
            foreach ($param["BetaList"] as $key => $value){
                $obj = new BetaInfoByACL();
                $obj->deserialize($value);
                array_push($this->BetaList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("DestValueType",$param) and $param["DestValueType"] !== null) {
            $this->DestValueType = $param["DestValueType"];
        }

        if (array_key_exists("DetectedTimes",$param) and $param["DetectedTimes"] !== null) {
            $this->DetectedTimes = $param["DetectedTimes"];
        }

        if (array_key_exists("EdgeName",$param) and $param["EdgeName"] !== null) {
            $this->EdgeName = $param["EdgeName"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("Invalid",$param) and $param["Invalid"] !== null) {
            $this->Invalid = $param["Invalid"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("ParamTemplateName",$param) and $param["ParamTemplateName"] !== null) {
            $this->ParamTemplateName = $param["ParamTemplateName"];
        }

        if (array_key_exists("RulePartition",$param) and $param["RulePartition"] !== null) {
            $this->RulePartition = $param["RulePartition"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
