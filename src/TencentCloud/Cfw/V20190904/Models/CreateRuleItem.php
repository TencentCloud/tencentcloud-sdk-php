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
 * 互联网边界访问控制规则的完整内容，供新增和修改共用。新增时缺省值按各字段说明处理；修改时完整替换可写内容，省略的可写字段不继承旧值，系统管理字段不受影响。
 *
 * @method integer getDirection() 获取规则方向：1 表示入站，0 表示出站；其它整数或省略会校验失败。方向还决定 SourceType、TargetType、Scope 与 Protocol 的可用组合。
 * @method void setDirection(integer $Direction) 设置规则方向：1 表示入站，0 表示出站；其它整数或省略会校验失败。方向还决定 SourceType、TargetType、Scope 与 Protocol 的可用组合。
 * @method integer getOrderIndex() 获取规则顺序，必须填写。传 -1 时追加到当前方向末尾；正序号表示在对应位置插入并顺延后续规则；0 按 1 处理，其他负数及超范围值不应使用。新增请求包含多条规则时，Direction 必须相同；追加时全部传 -1，插入时按请求顺序传连续递增的正序号。修改请求只接受一条规则。
 * @method void setOrderIndex(integer $OrderIndex) 设置规则顺序，必须填写。传 -1 时追加到当前方向末尾；正序号表示在对应位置插入并顺延后续规则；0 按 1 处理，其他负数及超范围值不应使用。新增请求包含多条规则时，Direction 必须相同；追加时全部传 -1，插入时按请求顺序传连续递增的正序号。修改请求只接受一条规则。
 * @method string getPort() 获取目的端口。Protocol 为 ICMP 时忽略本字段并置为空字符串；其它协议必须提供可解析字符串，可按逗号分隔填写正整数单端口或“起始/结束”范围，起始值不得大于结束值，-1/-1 表示全部端口。FTP 只接受单个正整数。domain 或域名模板目的在 side 或 all 范围下仅接受 -1/-1 或 0/65535。
 * @method void setPort(string $Port) 设置目的端口。Protocol 为 ICMP 时忽略本字段并置为空字符串；其它协议必须提供可解析字符串，可按逗号分隔填写正整数单端口或“起始/结束”范围，起始值不得大于结束值，-1/-1 表示全部端口。FTP 只接受单个正整数。domain 或域名模板目的在 side 或 all 范围下仅接受 -1/-1 或 0/65535。
 * @method string getProtocol() 获取协议，解析不区分大小写。四层值 TCP、UDP、ICMP、ICMPV6、ANY 归一化为大写；应用层值 HTTP、HTTPS、HTTP/HTTPS、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS、TLS/SSL 及别名 domain、TLS、SSL 归一化为对应标准值。ANY 表示不限定协议，不表示省略 Protocol；它同时属于可解析的四层协议和应用协议，domain、TLS、SSL 均归一化为 TLS/SSL。domain 或域名模板目的接受上述应用层协议及 ANY，但不接受 FTP 和其它四层协议；dnsparse、domainiptwoverify 仅接受 TCP 或 UDP 且仅支持 serial；其它目的在公有云环境不接受 FTP、ANY 之外的应用层协议。side 或 all 范围下，入站仅接受 TCP，出站仅接受 TCP、HTTP/HTTPS 或 TLS/SSL。DNS 用于非 domain 目的且目的不是 * 时，目的内容还必须是非 IP 的合法域名规则列表。使用协议端口模板时，模板中的每组协议和端口也执行这些联动校验。
 * @method void setProtocol(string $Protocol) 设置协议，解析不区分大小写。四层值 TCP、UDP、ICMP、ICMPV6、ANY 归一化为大写；应用层值 HTTP、HTTPS、HTTP/HTTPS、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS、TLS/SSL 及别名 domain、TLS、SSL 归一化为对应标准值。ANY 表示不限定协议，不表示省略 Protocol；它同时属于可解析的四层协议和应用协议，domain、TLS、SSL 均归一化为 TLS/SSL。domain 或域名模板目的接受上述应用层协议及 ANY，但不接受 FTP 和其它四层协议；dnsparse、domainiptwoverify 仅接受 TCP 或 UDP 且仅支持 serial；其它目的在公有云环境不接受 FTP、ANY 之外的应用层协议。side 或 all 范围下，入站仅接受 TCP，出站仅接受 TCP、HTTP/HTTPS 或 TLS/SSL。DNS 用于非 domain 目的且目的不是 * 时，目的内容还必须是非 IP 的合法域名规则列表。使用协议端口模板时，模板中的每组协议和端口也执行这些联动校验。
 * @method string getRuleAction() 获取流量处理动作，解析不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。drop 及其拒绝别名还会校验当前账号是否具备互联网边界阻断能力。
 * @method void setRuleAction(string $RuleAction) 设置流量处理动作，解析不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。drop 及其拒绝别名还会校验当前账号是否具备互联网边界阻断能力。
 * @method string getSourceContent() 获取访问源内容。ip 或 net 使用合法 IP/CIDR 列表，普通列表最多 10 项；template 使用当前账号可解析的地址模板标识；Direction=0 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=1 时，location 使用地域 code CSV 并须通过当前账号的新地域规则能力校验，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。location、vendor 保存时会转换为地域或厂商匹配信息。
 * @method void setSourceContent(string $SourceContent) 设置访问源内容。ip 或 net 使用合法 IP/CIDR 列表，普通列表最多 10 项；template 使用当前账号可解析的地址模板标识；Direction=0 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=1 时，location 使用地域 code CSV 并须通过当前账号的新地域规则能力校验，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。location、vendor 保存时会转换为地域或厂商匹配信息。
 * @method string getSourceType() 获取访问源类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商。Direction=1 接受 ip、net、template、location、vendor；Direction=0 接受 ip、net、template、instance、group、tag。ip 与 net 按同一类型处理。
 * @method void setSourceType(string $SourceType) 设置访问源类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商。Direction=1 接受 ip、net、template、location、vendor；Direction=0 接受 ip、net、template、instance、group、tag。ip 与 net 按同一类型处理。
 * @method string getTargetContent() 获取访问目的内容。ip 或 net 使用合法 IP/CIDR 列表；domain 使用合法的 IP、普通域名或通配域名列表，也接受单独的 *；普通列表最多 10 项，通配域名最多 5 级。domain 配合 DNS 协议时不接受 IP。dnsparse 使用单个合法域名、泛域名或当前账号可解析的 mb_ 域名模板，domainiptwoverify 使用单个不含通配符的合法域名或此类模板；两者均不接受单独的 *、IP、逗号列表或段内通配域名。串行 domain 段内通配和 domainiptwoverify 模板要求当前环境支持对应能力。template 使用当前账号可解析的地址模板标识；Direction=1 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=0 时，location 使用地域 code CSV，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。规范化后的内容最长 1023。
 * @method void setTargetContent(string $TargetContent) 设置访问目的内容。ip 或 net 使用合法 IP/CIDR 列表；domain 使用合法的 IP、普通域名或通配域名列表，也接受单独的 *；普通列表最多 10 项，通配域名最多 5 级。domain 配合 DNS 协议时不接受 IP。dnsparse 使用单个合法域名、泛域名或当前账号可解析的 mb_ 域名模板，domainiptwoverify 使用单个不含通配符的合法域名或此类模板；两者均不接受单独的 *、IP、逗号列表或段内通配域名。串行 domain 段内通配和 domainiptwoverify 模板要求当前环境支持对应能力。template 使用当前账号可解析的地址模板标识；Direction=1 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=0 时，location 使用地域 code CSV，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。规范化后的内容最长 1023。
 * @method string getTargetType() 获取访问目的类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商，domain 表示 FQDN 匹配（内容也可传 IP 或 *），dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。Direction=1 接受 ip、net、template、domain、instance、group、tag；Direction=0 接受 ip、net、template、domain、dnsparse、domainiptwoverify、location、vendor。
 * @method void setTargetType(string $TargetType) 设置访问目的类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商，domain 表示 FQDN 匹配（内容也可传 IP 或 *），dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。Direction=1 接受 ip、net、template、domain、instance、group、tag；Direction=0 接受 ip、net、template、domain、dnsparse、domainiptwoverify、location、vendor。
 * @method string getDescription() 获取规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
 * @method void setDescription(string $Description) 设置规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
 * @method string getEnable() 获取启用状态。非空值不区分大小写接受字符串 true 或 false，并归一化为启用或停用；省略或传空字符串时读取当前账号的访问控制默认启用配置，该配置不可用时默认启用。替换现有规则时不继承旧值。
 * @method void setEnable(string $Enable) 设置启用状态。非空值不区分大小写接受字符串 true 或 false，并归一化为启用或停用；省略或传空字符串时读取当前账号的访问控制默认启用配置，该配置不可用时默认启用。替换现有规则时不继承旧值。
 * @method string getLogId() 获取关联告警或来源事件 ID。新增时省略或传空字符串表示不关联；修改时应将 DescribeCfwRules 返回的 rules[].log_id 原样传入，未返回时省略或传空字符串。替换时不会自动继承旧值；From=batch_import_cover 时，非空值还会作为覆盖导入后规则的字符串标识复用。
 * @method void setLogId(string $LogId) 设置关联告警或来源事件 ID。新增时省略或传空字符串表示不关联；修改时应将 DescribeCfwRules 返回的 rules[].log_id 原样传入，未返回时省略或传空字符串。替换时不会自动继承旧值；From=batch_import_cover 时，非空值还会作为覆盖导入后规则的字符串标识复用。
 * @method string getParamTemplateId() 获取协议端口模板 ID。省略或传空字符串表示不使用模板；非空时必须指向当前账号已有且内容格式为“协议:端口”的模板，否则请求失败。模板中的协议和端口须满足 Direction、TargetType 与 Scope 的联动限制。Protocol 和 Port 仍须符合各自字段规则，但不要求固定填写 ANY、-1/-1 或 serial。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置协议端口模板 ID。省略或传空字符串表示不使用模板；非空时必须指向当前账号已有且内容格式为“协议:端口”的模板，否则请求失败。模板中的协议和端口须满足 Direction、TargetType 与 Scope 的联动限制。Protocol 和 Port 仍须符合各自字段规则，但不要求固定填写 ANY、-1/-1 或 serial。
 * @method integer getRuleSource() 获取规则来源：0 表示普通规则，2 表示隔离资产出向访问规则。新增时可以省略，省略按 0 处理；显式传值及修改时仅接受 0 或 2，修改时应传入原规则值。
 * @method void setRuleSource(integer $RuleSource) 设置规则来源：0 表示普通规则，2 表示隔离资产出向访问规则。新增时可以省略，省略按 0 处理；显式传值及修改时仅接受 0 或 2，修改时应传入原规则值。
 * @method string getScope() 获取生效范围，解析不区分大小写：serial 表示仅互联网边界串行防火墙，side 表示仅互联网边界旁路防火墙，all 表示同时作用于串行和旁路防火墙；省略、空字符串或其它值会校验失败。国际站环境会将有效输入统一归一化为 serial。协议、端口、目的类型及协议端口模板的联动限制见 Protocol、Port 和 ParamTemplateId。
 * @method void setScope(string $Scope) 设置生效范围，解析不区分大小写：serial 表示仅互联网边界串行防火墙，side 表示仅互联网边界旁路防火墙，all 表示同时作用于串行和旁路防火墙；省略、空字符串或其它值会校验失败。国际站环境会将有效输入统一归一化为 serial。协议、端口、目的类型及协议端口模板的联动限制见 Protocol、Port 和 ParamTemplateId。
 * @method integer getUuid() 获取规则数值 ID。普通新增、指定位置新增和批量导入会忽略该字段；From=batch_import_cover 时可使用正整数 ID；修改时必须提供当前账号已有且可修改的正整数 ID，用于定位并完整替换原规则，省略、非正整数或不存在的 ID 会导致请求失败。
 * @method void setUuid(integer $Uuid) 设置规则数值 ID。普通新增、指定位置新增和批量导入会忽略该字段；From=batch_import_cover 时可使用正整数 ID；修改时必须提供当前账号已有且可修改的正整数 ID，用于定位并完整替换原规则，省略、非正整数或不存在的 ID 会导致请求失败。
 */
class CreateRuleItem extends AbstractModel
{
    /**
     * @var integer 规则方向：1 表示入站，0 表示出站；其它整数或省略会校验失败。方向还决定 SourceType、TargetType、Scope 与 Protocol 的可用组合。
     */
    public $Direction;

    /**
     * @var integer 规则顺序，必须填写。传 -1 时追加到当前方向末尾；正序号表示在对应位置插入并顺延后续规则；0 按 1 处理，其他负数及超范围值不应使用。新增请求包含多条规则时，Direction 必须相同；追加时全部传 -1，插入时按请求顺序传连续递增的正序号。修改请求只接受一条规则。
     */
    public $OrderIndex;

    /**
     * @var string 目的端口。Protocol 为 ICMP 时忽略本字段并置为空字符串；其它协议必须提供可解析字符串，可按逗号分隔填写正整数单端口或“起始/结束”范围，起始值不得大于结束值，-1/-1 表示全部端口。FTP 只接受单个正整数。domain 或域名模板目的在 side 或 all 范围下仅接受 -1/-1 或 0/65535。
     */
    public $Port;

    /**
     * @var string 协议，解析不区分大小写。四层值 TCP、UDP、ICMP、ICMPV6、ANY 归一化为大写；应用层值 HTTP、HTTPS、HTTP/HTTPS、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS、TLS/SSL 及别名 domain、TLS、SSL 归一化为对应标准值。ANY 表示不限定协议，不表示省略 Protocol；它同时属于可解析的四层协议和应用协议，domain、TLS、SSL 均归一化为 TLS/SSL。domain 或域名模板目的接受上述应用层协议及 ANY，但不接受 FTP 和其它四层协议；dnsparse、domainiptwoverify 仅接受 TCP 或 UDP 且仅支持 serial；其它目的在公有云环境不接受 FTP、ANY 之外的应用层协议。side 或 all 范围下，入站仅接受 TCP，出站仅接受 TCP、HTTP/HTTPS 或 TLS/SSL。DNS 用于非 domain 目的且目的不是 * 时，目的内容还必须是非 IP 的合法域名规则列表。使用协议端口模板时，模板中的每组协议和端口也执行这些联动校验。
     */
    public $Protocol;

    /**
     * @var string 流量处理动作，解析不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。drop 及其拒绝别名还会校验当前账号是否具备互联网边界阻断能力。
     */
    public $RuleAction;

    /**
     * @var string 访问源内容。ip 或 net 使用合法 IP/CIDR 列表，普通列表最多 10 项；template 使用当前账号可解析的地址模板标识；Direction=0 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=1 时，location 使用地域 code CSV 并须通过当前账号的新地域规则能力校验，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。location、vendor 保存时会转换为地域或厂商匹配信息。
     */
    public $SourceContent;

    /**
     * @var string 访问源类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商。Direction=1 接受 ip、net、template、location、vendor；Direction=0 接受 ip、net、template、instance、group、tag。ip 与 net 按同一类型处理。
     */
    public $SourceType;

    /**
     * @var string 访问目的内容。ip 或 net 使用合法 IP/CIDR 列表；domain 使用合法的 IP、普通域名或通配域名列表，也接受单独的 *；普通列表最多 10 项，通配域名最多 5 级。domain 配合 DNS 协议时不接受 IP。dnsparse 使用单个合法域名、泛域名或当前账号可解析的 mb_ 域名模板，domainiptwoverify 使用单个不含通配符的合法域名或此类模板；两者均不接受单独的 *、IP、逗号列表或段内通配域名。串行 domain 段内通配和 domainiptwoverify 模板要求当前环境支持对应能力。template 使用当前账号可解析的地址模板标识；Direction=1 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=0 时，location 使用地域 code CSV，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。规范化后的内容最长 1023。
     */
    public $TargetContent;

    /**
     * @var string 访问目的类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商，domain 表示 FQDN 匹配（内容也可传 IP 或 *），dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。Direction=1 接受 ip、net、template、domain、instance、group、tag；Direction=0 接受 ip、net、template、domain、dnsparse、domainiptwoverify、location、vendor。
     */
    public $TargetType;

    /**
     * @var string 规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
     */
    public $Description;

    /**
     * @var string 启用状态。非空值不区分大小写接受字符串 true 或 false，并归一化为启用或停用；省略或传空字符串时读取当前账号的访问控制默认启用配置，该配置不可用时默认启用。替换现有规则时不继承旧值。
     */
    public $Enable;

    /**
     * @var string 关联告警或来源事件 ID。新增时省略或传空字符串表示不关联；修改时应将 DescribeCfwRules 返回的 rules[].log_id 原样传入，未返回时省略或传空字符串。替换时不会自动继承旧值；From=batch_import_cover 时，非空值还会作为覆盖导入后规则的字符串标识复用。
     */
    public $LogId;

    /**
     * @var string 协议端口模板 ID。省略或传空字符串表示不使用模板；非空时必须指向当前账号已有且内容格式为“协议:端口”的模板，否则请求失败。模板中的协议和端口须满足 Direction、TargetType 与 Scope 的联动限制。Protocol 和 Port 仍须符合各自字段规则，但不要求固定填写 ANY、-1/-1 或 serial。
     */
    public $ParamTemplateId;

    /**
     * @var integer 规则来源：0 表示普通规则，2 表示隔离资产出向访问规则。新增时可以省略，省略按 0 处理；显式传值及修改时仅接受 0 或 2，修改时应传入原规则值。
     */
    public $RuleSource;

    /**
     * @var string 生效范围，解析不区分大小写：serial 表示仅互联网边界串行防火墙，side 表示仅互联网边界旁路防火墙，all 表示同时作用于串行和旁路防火墙；省略、空字符串或其它值会校验失败。国际站环境会将有效输入统一归一化为 serial。协议、端口、目的类型及协议端口模板的联动限制见 Protocol、Port 和 ParamTemplateId。
     */
    public $Scope;

    /**
     * @var integer 规则数值 ID。普通新增、指定位置新增和批量导入会忽略该字段；From=batch_import_cover 时可使用正整数 ID；修改时必须提供当前账号已有且可修改的正整数 ID，用于定位并完整替换原规则，省略、非正整数或不存在的 ID 会导致请求失败。
     */
    public $Uuid;

    /**
     * @param integer $Direction 规则方向：1 表示入站，0 表示出站；其它整数或省略会校验失败。方向还决定 SourceType、TargetType、Scope 与 Protocol 的可用组合。
     * @param integer $OrderIndex 规则顺序，必须填写。传 -1 时追加到当前方向末尾；正序号表示在对应位置插入并顺延后续规则；0 按 1 处理，其他负数及超范围值不应使用。新增请求包含多条规则时，Direction 必须相同；追加时全部传 -1，插入时按请求顺序传连续递增的正序号。修改请求只接受一条规则。
     * @param string $Port 目的端口。Protocol 为 ICMP 时忽略本字段并置为空字符串；其它协议必须提供可解析字符串，可按逗号分隔填写正整数单端口或“起始/结束”范围，起始值不得大于结束值，-1/-1 表示全部端口。FTP 只接受单个正整数。domain 或域名模板目的在 side 或 all 范围下仅接受 -1/-1 或 0/65535。
     * @param string $Protocol 协议，解析不区分大小写。四层值 TCP、UDP、ICMP、ICMPV6、ANY 归一化为大写；应用层值 HTTP、HTTPS、HTTP/HTTPS、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS、TLS/SSL 及别名 domain、TLS、SSL 归一化为对应标准值。ANY 表示不限定协议，不表示省略 Protocol；它同时属于可解析的四层协议和应用协议，domain、TLS、SSL 均归一化为 TLS/SSL。domain 或域名模板目的接受上述应用层协议及 ANY，但不接受 FTP 和其它四层协议；dnsparse、domainiptwoverify 仅接受 TCP 或 UDP 且仅支持 serial；其它目的在公有云环境不接受 FTP、ANY 之外的应用层协议。side 或 all 范围下，入站仅接受 TCP，出站仅接受 TCP、HTTP/HTTPS 或 TLS/SSL。DNS 用于非 domain 目的且目的不是 * 时，目的内容还必须是非 IP 的合法域名规则列表。使用协议端口模板时，模板中的每组协议和端口也执行这些联动校验。
     * @param string $RuleAction 流量处理动作，解析不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。drop 及其拒绝别名还会校验当前账号是否具备互联网边界阻断能力。
     * @param string $SourceContent 访问源内容。ip 或 net 使用合法 IP/CIDR 列表，普通列表最多 10 项；template 使用当前账号可解析的地址模板标识；Direction=0 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=1 时，location 使用地域 code CSV 并须通过当前账号的新地域规则能力校验，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。location、vendor 保存时会转换为地域或厂商匹配信息。
     * @param string $SourceType 访问源类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商。Direction=1 接受 ip、net、template、location、vendor；Direction=0 接受 ip、net、template、instance、group、tag。ip 与 net 按同一类型处理。
     * @param string $TargetContent 访问目的内容。ip 或 net 使用合法 IP/CIDR 列表；domain 使用合法的 IP、普通域名或通配域名列表，也接受单独的 *；普通列表最多 10 项，通配域名最多 5 级。domain 配合 DNS 协议时不接受 IP。dnsparse 使用单个合法域名、泛域名或当前账号可解析的 mb_ 域名模板，domainiptwoverify 使用单个不含通配符的合法域名或此类模板；两者均不接受单独的 *、IP、逗号列表或段内通配域名。串行 domain 段内通配和 domainiptwoverify 模板要求当前环境支持对应能力。template 使用当前账号可解析的地址模板标识；Direction=1 时，instance、group、tag 使用相应资源标识，其中 instance 必须能解析到公网 IP，tag 必须存在且格式为 {"Key":"标签键","Value":"标签值"}；Direction=0 时，location 使用地域 code CSV，vendor 使用 tencent、aliyun、aws、huawei、azure 或 all 的 CSV。规范化后的内容最长 1023。
     * @param string $TargetType 访问目的类型，解析不区分大小写。net、ip 均表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，group 表示资产分组，tag 表示资源标签，location 表示地域，vendor 表示云厂商，domain 表示 FQDN 匹配（内容也可传 IP 或 *），dnsparse 表示宽松匹配：Host/SNI 与域名匹配，或目的 IP 属于该域名当前 DNS 解析结果，满足任一条件即命中；domainiptwoverify 表示严格匹配：上述两个条件必须同时满足。Direction=1 接受 ip、net、template、domain、instance、group、tag；Direction=0 接受 ip、net、template、domain、dnsparse、domainiptwoverify、location、vendor。
     * @param string $Description 规则描述，不超过 100 个字符。新增时按请求值保存；修改时完整替换，不继承旧值。
     * @param string $Enable 启用状态。非空值不区分大小写接受字符串 true 或 false，并归一化为启用或停用；省略或传空字符串时读取当前账号的访问控制默认启用配置，该配置不可用时默认启用。替换现有规则时不继承旧值。
     * @param string $LogId 关联告警或来源事件 ID。新增时省略或传空字符串表示不关联；修改时应将 DescribeCfwRules 返回的 rules[].log_id 原样传入，未返回时省略或传空字符串。替换时不会自动继承旧值；From=batch_import_cover 时，非空值还会作为覆盖导入后规则的字符串标识复用。
     * @param string $ParamTemplateId 协议端口模板 ID。省略或传空字符串表示不使用模板；非空时必须指向当前账号已有且内容格式为“协议:端口”的模板，否则请求失败。模板中的协议和端口须满足 Direction、TargetType 与 Scope 的联动限制。Protocol 和 Port 仍须符合各自字段规则，但不要求固定填写 ANY、-1/-1 或 serial。
     * @param integer $RuleSource 规则来源：0 表示普通规则，2 表示隔离资产出向访问规则。新增时可以省略，省略按 0 处理；显式传值及修改时仅接受 0 或 2，修改时应传入原规则值。
     * @param string $Scope 生效范围，解析不区分大小写：serial 表示仅互联网边界串行防火墙，side 表示仅互联网边界旁路防火墙，all 表示同时作用于串行和旁路防火墙；省略、空字符串或其它值会校验失败。国际站环境会将有效输入统一归一化为 serial。协议、端口、目的类型及协议端口模板的联动限制见 Protocol、Port 和 ParamTemplateId。
     * @param integer $Uuid 规则数值 ID。普通新增、指定位置新增和批量导入会忽略该字段；From=batch_import_cover 时可使用正整数 ID；修改时必须提供当前账号已有且可修改的正整数 ID，用于定位并完整替换原规则，省略、非正整数或不存在的 ID 会导致请求失败。
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
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

        if (array_key_exists("TargetContent",$param) and $param["TargetContent"] !== null) {
            $this->TargetContent = $param["TargetContent"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("RuleSource",$param) and $param["RuleSource"] !== null) {
            $this->RuleSource = $param["RuleSource"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
