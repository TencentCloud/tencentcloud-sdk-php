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
 * VPC 内网间访问控制规则。新增和修改均根据请求中的源、目的、协议、动作、端口、顺序、状态、生效范围、IP 版本和模板等配置字段重新构造规则；修改是整条替换而不是局部更新。命中信息、名称、时间及其它查询展示字段不参与规则构造。
 *
 * @method string getDescription() 获取<p>规则描述。新增和修改按请求中的字符串保存。</p>
 * @method void setDescription(string $Description) 设置<p>规则描述。新增和修改按请求中的字符串保存。</p>
 * @method string getDestContent() 获取<p>访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。location 会校验地域代码，但解析出的地域代码未写入 VPC 规则且目的内容保存为空；vendor 会校验厂商名称并将其归一化代码写入目的内容。归一化后的目的内容超过 1023 字节时请求失败。</p>
 * @method void setDestContent(string $DestContent) 设置<p>访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。location 会校验地域代码，但解析出的地域代码未写入 VPC 规则且目的内容保存为空；vendor 会校验厂商名称并将其归一化代码写入目的内容。归一化后的目的内容超过 1023 字节时请求失败。</p>
 * @method string getDestType() 获取<p>访问目的类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、domain、template、dnsparse、domainiptwoverify、instance、tag、group、location 或 vendor；url 虽可被通用类型映射识别，但 VPC 出向内容解析不支持。地址模板、dnsparse、domainiptwoverify、严格模式域名模板和段内通配域名分别要求当前 VPC 防火墙引擎支持对应能力，否则返回 UnsupportedOperation。类型及地址模板查询到的实际类型共同决定 DestContent 和 Protocol 的校验。</p>
 * @method void setDestType(string $DestType) 设置<p>访问目的类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、domain、template、dnsparse、domainiptwoverify、instance、tag、group、location 或 vendor；url 虽可被通用类型映射识别，但 VPC 出向内容解析不支持。地址模板、dnsparse、domainiptwoverify、严格模式域名模板和段内通配域名分别要求当前 VPC 防火墙引擎支持对应能力，否则返回 UnsupportedOperation。类型及地址模板查询到的实际类型共同决定 DestContent 和 Protocol 的校验。</p>
 * @method string getEdgeId() 获取<p>规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 间，cfws- 前缀表示指定 VPC 边；其它格式返回参数错误。ALL 还要求相关 VPC 防火墙引擎支持全局规则，否则返回 UnsupportedOperation。</p>
 * @method void setEdgeId(string $EdgeId) 设置<p>规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 间，cfws- 前缀表示指定 VPC 边；其它格式返回参数错误。ALL 还要求相关 VPC 防火墙引擎支持全局规则，否则返回 UnsupportedOperation。</p>
 * @method string getEnable() 获取<p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感；省略或传空字符串时使用租户通知配置中的默认规则状态，该配置没有可用值时默认启用；其它字符串返回参数错误。</p>
 * @method void setEnable(string $Enable) 设置<p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感；省略或传空字符串时使用租户通知配置中的默认规则状态，该配置没有可用值时默认启用；其它字符串返回参数错误。</p>
 * @method integer getOrderIndex() 获取<p>规则在相同 IpVersion 的中间分区内的顺序。请求整数先转换为 uint32，0 归一化为 1，负整数及超出 uint32 范围的整数按该转换结果处理；写入时，顺序为 1 或不大于当前最大顺序的规则在该位置插入并将现有规则后移，通常大于当前最大顺序的值归一化为末尾。例外是 AddVpcAcRule 未使用精确值 insert_rule 且首条规则解析后的顺序为 1 时，本批每条规则都保留其解析后顺序并按该值移动现有规则，因此后续规则即使大于当前最大顺序也不会归一化为末尾。</p>
 * @method void setOrderIndex(integer $OrderIndex) 设置<p>规则在相同 IpVersion 的中间分区内的顺序。请求整数先转换为 uint32，0 归一化为 1，负整数及超出 uint32 范围的整数按该转换结果处理；写入时，顺序为 1 或不大于当前最大顺序的规则在该位置插入并将现有规则后移，通常大于当前最大顺序的值归一化为末尾。例外是 AddVpcAcRule 未使用精确值 insert_rule 且首条规则解析后的顺序为 1 时，本批每条规则都保留其解析后顺序并按该值移动现有规则，因此后续规则即使大于当前最大顺序也不会归一化为末尾。</p>
 * @method string getPort() 获取<p>访问控制策略的端口。除 ICMP 和 ICMPV6 外，该字段按逗号拆分；每项可以是正整数单端口，或以斜杠分隔且起点不大于终点的两个整数，-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略请求值并保存为空字符串；其它协议的空值或非法格式返回参数错误。FTP 只接受正整数单端口，不接受逗号组合或斜杠区间。</p>
 * @method void setPort(string $Port) 设置<p>访问控制策略的端口。除 ICMP 和 ICMPV6 外，该字段按逗号拆分；每项可以是正整数单端口，或以斜杠分隔且起点不大于终点的两个整数，-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略请求值并保存为空字符串；其它协议的空值或非法格式返回参数错误。FTP 只接受正整数单端口，不接受逗号组合或斜杠区间。</p>
 * @method string getProtocol() 获取<p>协议名称，不区分大小写并归一化。IP、instance、tag、group、location、vendor 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议名称，不区分大小写并归一化。IP、instance、tag、group、location、vendor 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。</p>
 * @method string getRuleAction() 获取<p>流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 和 isolateoutaccept 归一化为放行，isolateindrop 和 isolateoutdrop 归一化为拒绝；其它值返回参数错误。</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 和 isolateoutaccept 归一化为放行，isolateindrop 和 isolateoutdrop 归一化为拒绝；其它值返回参数错误。</p>
 * @method string getSourceContent() 获取<p>访问源内容，由 SourceType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；template 接受当前租户的地址模板标识并归一化为模板 UUID，只允许与 IpVersion 一致的 IP 地址模板，域名地址模板不能作为访问源；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。</p>
 * @method void setSourceContent(string $SourceContent) 设置<p>访问源内容，由 SourceType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；template 接受当前租户的地址模板标识并归一化为模板 UUID，只允许与 IpVersion 一致的 IP 地址模板，域名地址模板不能作为访问源；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。</p>
 * @method string getSourceType() 获取<p>访问源类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、template、instance、tag 或 group；url、location 和 vendor 虽可被通用类型映射识别，但 VPC 出向源内容解析不支持。使用 template 要求当前 VPC 防火墙引擎支持地址模板能力。类型及模板查询到的实际类型共同决定 SourceContent 的校验。</p>
 * @method void setSourceType(string $SourceType) 设置<p>访问源类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、template、instance、tag 或 group；url、location 和 vendor 虽可被通用类型映射识别，但 VPC 出向源内容解析不支持。使用 template 要求当前 VPC 防火墙引擎支持地址模板能力。类型及模板查询到的实际类型共同决定 SourceContent 的校验。</p>
 * @method array getBetaList() 获取<p>规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method void setBetaList(array $BetaList) 设置<p>规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method string getCreateTime() 获取<p>规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method integer getDeleted() 获取<p>规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method void setDeleted(integer $Deleted) 设置<p>规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method string getDestValueType() 获取<p>查询结果中对目的实际类型的补充提示，例如 template 可区分 IP 地址模板和域名地址模板。新增和修改处理程序不读取请求中的该字段；实际目的类型由 DestType、DestContent 和模板查询结果确定。</p>
 * @method void setDestValueType(string $DestValueType) 设置<p>查询结果中对目的实际类型的补充提示，例如 template 可区分 IP 地址模板和域名地址模板。新增和修改处理程序不读取请求中的该字段；实际目的类型由 DestType、DestContent 和模板查询结果确定。</p>
 * @method integer getDetectedTimes() 获取<p>规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method void setDetectedTimes(integer $DetectedTimes) 设置<p>规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method string getEdgeName() 获取<p>EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method void setEdgeName(string $EdgeName) 设置<p>EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method string getFwGroupId() 获取<p>规则生效的防火墙组或 CCN 范围，格式比较不区分大小写。ALL 归一化为大写 ALL；cfwg- 前缀和 ccn- 前缀的值保留请求原文；省略、空字符串或其它格式归一化为 ALL，处理程序不因格式无效而返回错误。</p>
 * @method void setFwGroupId(string $FwGroupId) 设置<p>规则生效的防火墙组或 CCN 范围，格式比较不区分大小写。ALL 归一化为大写 ALL；cfwg- 前缀和 ccn- 前缀的值保留请求原文；省略、空字符串或其它格式归一化为 ALL，处理程序不因格式无效而返回错误。</p>
 * @method string getFwGroupName() 获取<p>防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method void setFwGroupName(string $FwGroupName) 设置<p>防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method integer getInternalUuid() 获取<p>内部规则标识。AddVpcAcRule 的精确 batch_import_cover 分支会采用正整数 InternalUuid 替换自动生成的内部标识；其它新增分支和 ModifyVpcAcRule 不读取请求中的该字段。</p>
 * @method void setInternalUuid(integer $InternalUuid) 设置<p>内部规则标识。AddVpcAcRule 的精确 batch_import_cover 分支会采用正整数 InternalUuid 替换自动生成的内部标识；其它新增分支和 ModifyVpcAcRule 不读取请求中的该字段。</p>
 * @method integer getInvalid() 获取<p>查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。</p>
 * @method void setInvalid(integer $Invalid) 设置<p>查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。</p>
 * @method integer getIpVersion() 获取<p>IP 版本，0 表示 IPv4，1 表示 IPv6。省略或传入 0、1 以外的整数时按 IPv4 处理；instance 必须具有对应版本的私网地址，IP 地址模板必须与解析后的版本一致。处理程序不使用该字段校验直接填写的 net IP/CIDR 版本。</p>
 * @method void setIpVersion(integer $IpVersion) 设置<p>IP 版本，0 表示 IPv4，1 表示 IPv6。省略或传入 0、1 以外的整数时按 IPv4 处理；instance 必须具有对应版本的私网地址，IP 地址模板必须与解析后的版本一致。处理程序不使用该字段校验直接填写的 net IP/CIDR 版本。</p>
 * @method string getParamTemplateId() 获取<p>端口协议组 ID。省略或传空字符串时直接使用 Protocol 和 Port；非空时查询当前租户的端口协议组并用组内协议端口项执行目的类型和协议类别校验，模板查询失败时请求失败。无论是否填写该字段，请求中的 Protocol 和非 ICMP/ICMPV6 Port 都会先按普通规则解析，格式无效时请求失败。</p>
 * @method void setParamTemplateId(string $ParamTemplateId) 设置<p>端口协议组 ID。省略或传空字符串时直接使用 Protocol 和 Port；非空时查询当前租户的端口协议组并用组内协议端口项执行目的类型和协议类别校验，模板查询失败时请求失败。无论是否填写该字段，请求中的 Protocol 和非 ICMP/ICMPV6 Port 都会先按普通规则解析，格式无效时请求失败。</p>
 * @method string getParamTemplateName() 获取<p>端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method void setParamTemplateName(string $ParamTemplateName) 设置<p>端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method integer getRulePartition() 获取<p>规则分区展示值，1 表示最前分区，2 表示中间分区，3 表示最后分区。新增和修改处理程序不读取请求中的该字段，写入时固定为中间分区；ModifyVpcAcRule 只能定位并替换中间分区中的现有规则。</p>
 * @method void setRulePartition(integer $RulePartition) 设置<p>规则分区展示值，1 表示最前分区，2 表示中间分区，3 表示最后分区。新增和修改处理程序不读取请求中的该字段，写入时固定为中间分区；ModifyVpcAcRule 只能定位并替换中间分区中的现有规则。</p>
 * @method string getSourceName() 获取<p>访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method void setSourceName(string $SourceName) 设置<p>访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method string getTargetName() 获取<p>访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method void setTargetName(string $TargetName) 设置<p>访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
 * @method string getUpdateTime() 获取<p>规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
 * @method integer getUuid() 获取<p>规则数据库 ID。ModifyVpcAcRule 必须传当前租户中间分区内既有规则的正整数 Uuid；处理程序按该 ID 删除原记录并以同一 ID 插入替换后的规则。AddVpcAcRule 的普通新增、insert_rule 和 batch_import 分支忽略该字段；精确 batch_import_cover 分支会采用正整数 Uuid 作为新记录 ID，非正数值仍由数据库生成 ID。</p>
 * @method void setUuid(integer $Uuid) 设置<p>规则数据库 ID。ModifyVpcAcRule 必须传当前租户中间分区内既有规则的正整数 Uuid；处理程序按该 ID 删除原记录并以同一 ID 插入替换后的规则。AddVpcAcRule 的普通新增、insert_rule 和 batch_import 分支忽略该字段；精确 batch_import_cover 分支会采用正整数 Uuid 作为新记录 ID，非正数值仍由数据库生成 ID。</p>
 */
class VpcRuleItem extends AbstractModel
{
    /**
     * @var string <p>规则描述。新增和修改按请求中的字符串保存。</p>
     */
    public $Description;

    /**
     * @var string <p>访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。location 会校验地域代码，但解析出的地域代码未写入 VPC 规则且目的内容保存为空；vendor 会校验厂商名称并将其归一化代码写入目的内容。归一化后的目的内容超过 1023 字节时请求失败。</p>
     */
    public $DestContent;

    /**
     * @var string <p>访问目的类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、domain、template、dnsparse、domainiptwoverify、instance、tag、group、location 或 vendor；url 虽可被通用类型映射识别，但 VPC 出向内容解析不支持。地址模板、dnsparse、domainiptwoverify、严格模式域名模板和段内通配域名分别要求当前 VPC 防火墙引擎支持对应能力，否则返回 UnsupportedOperation。类型及地址模板查询到的实际类型共同决定 DestContent 和 Protocol 的校验。</p>
     */
    public $DestType;

    /**
     * @var string <p>规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 间，cfws- 前缀表示指定 VPC 边；其它格式返回参数错误。ALL 还要求相关 VPC 防火墙引擎支持全局规则，否则返回 UnsupportedOperation。</p>
     */
    public $EdgeId;

    /**
     * @var string <p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感；省略或传空字符串时使用租户通知配置中的默认规则状态，该配置没有可用值时默认启用；其它字符串返回参数错误。</p>
     */
    public $Enable;

    /**
     * @var integer <p>规则在相同 IpVersion 的中间分区内的顺序。请求整数先转换为 uint32，0 归一化为 1，负整数及超出 uint32 范围的整数按该转换结果处理；写入时，顺序为 1 或不大于当前最大顺序的规则在该位置插入并将现有规则后移，通常大于当前最大顺序的值归一化为末尾。例外是 AddVpcAcRule 未使用精确值 insert_rule 且首条规则解析后的顺序为 1 时，本批每条规则都保留其解析后顺序并按该值移动现有规则，因此后续规则即使大于当前最大顺序也不会归一化为末尾。</p>
     */
    public $OrderIndex;

    /**
     * @var string <p>访问控制策略的端口。除 ICMP 和 ICMPV6 外，该字段按逗号拆分；每项可以是正整数单端口，或以斜杠分隔且起点不大于终点的两个整数，-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略请求值并保存为空字符串；其它协议的空值或非法格式返回参数错误。FTP 只接受正整数单端口，不接受逗号组合或斜杠区间。</p>
     */
    public $Port;

    /**
     * @var string <p>协议名称，不区分大小写并归一化。IP、instance、tag、group、location、vendor 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。</p>
     */
    public $Protocol;

    /**
     * @var string <p>流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 和 isolateoutaccept 归一化为放行，isolateindrop 和 isolateoutdrop 归一化为拒绝；其它值返回参数错误。</p>
     */
    public $RuleAction;

    /**
     * @var string <p>访问源内容，由 SourceType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；template 接受当前租户的地址模板标识并归一化为模板 UUID，只允许与 IpVersion 一致的 IP 地址模板，域名地址模板不能作为访问源；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。</p>
     */
    public $SourceContent;

    /**
     * @var string <p>访问源类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、template、instance、tag 或 group；url、location 和 vendor 虽可被通用类型映射识别，但 VPC 出向源内容解析不支持。使用 template 要求当前 VPC 防火墙引擎支持地址模板能力。类型及模板查询到的实际类型共同决定 SourceContent 的校验。</p>
     */
    public $SourceType;

    /**
     * @var array <p>规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     */
    public $BetaList;

    /**
     * @var string <p>规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     */
    public $Deleted;

    /**
     * @var string <p>查询结果中对目的实际类型的补充提示，例如 template 可区分 IP 地址模板和域名地址模板。新增和修改处理程序不读取请求中的该字段；实际目的类型由 DestType、DestContent 和模板查询结果确定。</p>
     */
    public $DestValueType;

    /**
     * @var integer <p>规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     */
    public $DetectedTimes;

    /**
     * @var string <p>EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     */
    public $EdgeName;

    /**
     * @var string <p>规则生效的防火墙组或 CCN 范围，格式比较不区分大小写。ALL 归一化为大写 ALL；cfwg- 前缀和 ccn- 前缀的值保留请求原文；省略、空字符串或其它格式归一化为 ALL，处理程序不因格式无效而返回错误。</p>
     */
    public $FwGroupId;

    /**
     * @var string <p>防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     */
    public $FwGroupName;

    /**
     * @var integer <p>内部规则标识。AddVpcAcRule 的精确 batch_import_cover 分支会采用正整数 InternalUuid 替换自动生成的内部标识；其它新增分支和 ModifyVpcAcRule 不读取请求中的该字段。</p>
     */
    public $InternalUuid;

    /**
     * @var integer <p>查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。</p>
     */
    public $Invalid;

    /**
     * @var integer <p>IP 版本，0 表示 IPv4，1 表示 IPv6。省略或传入 0、1 以外的整数时按 IPv4 处理；instance 必须具有对应版本的私网地址，IP 地址模板必须与解析后的版本一致。处理程序不使用该字段校验直接填写的 net IP/CIDR 版本。</p>
     */
    public $IpVersion;

    /**
     * @var string <p>端口协议组 ID。省略或传空字符串时直接使用 Protocol 和 Port；非空时查询当前租户的端口协议组并用组内协议端口项执行目的类型和协议类别校验，模板查询失败时请求失败。无论是否填写该字段，请求中的 Protocol 和非 ICMP/ICMPV6 Port 都会先按普通规则解析，格式无效时请求失败。</p>
     */
    public $ParamTemplateId;

    /**
     * @var string <p>端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     */
    public $ParamTemplateName;

    /**
     * @var integer <p>规则分区展示值，1 表示最前分区，2 表示中间分区，3 表示最后分区。新增和修改处理程序不读取请求中的该字段，写入时固定为中间分区；ModifyVpcAcRule 只能定位并替换中间分区中的现有规则。</p>
     */
    public $RulePartition;

    /**
     * @var string <p>访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     */
    public $SourceName;

    /**
     * @var string <p>访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     */
    public $TargetName;

    /**
     * @var string <p>规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>规则数据库 ID。ModifyVpcAcRule 必须传当前租户中间分区内既有规则的正整数 Uuid；处理程序按该 ID 删除原记录并以同一 ID 插入替换后的规则。AddVpcAcRule 的普通新增、insert_rule 和 batch_import 分支忽略该字段；精确 batch_import_cover 分支会采用正整数 Uuid 作为新记录 ID，非正数值仍由数据库生成 ID。</p>
     */
    public $Uuid;

    /**
     * @param string $Description <p>规则描述。新增和修改按请求中的字符串保存。</p>
     * @param string $DestContent <p>访问目的内容，由 DestType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；domain 接受合法域名的逗号分隔列表或单独的 *，最多 10 项，通配域名最多 5 级，段内通配域名还要求引擎支持对应能力；template 接受当前租户的地址模板标识并归一化为模板 UUID，IP 地址模板必须与 IpVersion 一致，域名地址模板按域名目的校验；dnsparse 接受单个非 IP 域名或当前租户的域名模板，可使用符合级数限制的 *. 前缀泛域名，但不接受单独的 * 或段内通配；domainiptwoverify 接受单个非 IP 精确域名或不含任何通配符的当前租户域名模板；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。location 会校验地域代码，但解析出的地域代码未写入 VPC 规则且目的内容保存为空；vendor 会校验厂商名称并将其归一化代码写入目的内容。归一化后的目的内容超过 1023 字节时请求失败。</p>
     * @param string $DestType <p>访问目的类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、domain、template、dnsparse、domainiptwoverify、instance、tag、group、location 或 vendor；url 虽可被通用类型映射识别，但 VPC 出向内容解析不支持。地址模板、dnsparse、domainiptwoverify、严格模式域名模板和段内通配域名分别要求当前 VPC 防火墙引擎支持对应能力，否则返回 UnsupportedOperation。类型及地址模板查询到的实际类型共同决定 DestContent 和 Protocol 的校验。</p>
     * @param string $EdgeId <p>规则生效的 VPC 边范围，不区分大小写。ALL 表示全部 VPC 间，cfws- 前缀表示指定 VPC 边；其它格式返回参数错误。ALL 还要求相关 VPC 防火墙引擎支持全局规则，否则返回 UnsupportedOperation。</p>
     * @param string $Enable <p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感；省略或传空字符串时使用租户通知配置中的默认规则状态，该配置没有可用值时默认启用；其它字符串返回参数错误。</p>
     * @param integer $OrderIndex <p>规则在相同 IpVersion 的中间分区内的顺序。请求整数先转换为 uint32，0 归一化为 1，负整数及超出 uint32 范围的整数按该转换结果处理；写入时，顺序为 1 或不大于当前最大顺序的规则在该位置插入并将现有规则后移，通常大于当前最大顺序的值归一化为末尾。例外是 AddVpcAcRule 未使用精确值 insert_rule 且首条规则解析后的顺序为 1 时，本批每条规则都保留其解析后顺序并按该值移动现有规则，因此后续规则即使大于当前最大顺序也不会归一化为末尾。</p>
     * @param string $Port <p>访问控制策略的端口。除 ICMP 和 ICMPV6 外，该字段按逗号拆分；每项可以是正整数单端口，或以斜杠分隔且起点不大于终点的两个整数，-1/-1 表示全部端口。ICMP 和 ICMPV6 忽略请求值并保存为空字符串；其它协议的空值或非法格式返回参数错误。FTP 只接受正整数单端口，不接受逗号组合或斜杠区间。</p>
     * @param string $Protocol <p>协议名称，不区分大小写并归一化。IP、instance、tag、group、location、vendor 及 IP 地址模板目的支持 TCP、UDP、ICMP、ICMPV6、ANY 和 FTP，其中 FTP 只接受单端口；domain 及域名地址模板目的支持 ANY、HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS 和 DNS，不支持 FTP，domain、tls、ssl 归一化为 TLS/SSL；dnsparse 和 domainiptwoverify 仅支持 TCP 或 UDP。template 按查询到的实际模板类型应用上述限制；填写 ParamTemplateId 时，组内每个协议端口项还会应用相同的目的类型限制。</p>
     * @param string $RuleAction <p>流量通过云防火墙时的处理方式，不区分大小写。accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 和 isolateoutaccept 归一化为放行，isolateindrop 和 isolateoutdrop 归一化为拒绝；其它值返回参数错误。</p>
     * @param string $SourceContent <p>访问源内容，由 SourceType 决定格式和校验。net/ip 接受合法 IP 或 CIDR 的逗号分隔列表，最多 10 项；template 接受当前租户的地址模板标识并归一化为模板 UUID，只允许与 IpVersion 一致的 IP 地址模板，域名地址模板不能作为访问源；instance 和 tag 必须在当前租户存在，其中 instance 必须具有 IpVersion 对应的私网地址；group 接受资源组标识。</p>
     * @param string $SourceType <p>访问源类型，不区分大小写。VPC 规则可用 net（ip 为同义值）、template、instance、tag 或 group；url、location 和 vendor 虽可被通用类型映射识别，但 VPC 出向源内容解析不支持。使用 template 要求当前 VPC 防火墙引擎支持地址模板能力。类型及模板查询到的实际类型共同决定 SourceContent 的校验。</p>
     * @param array $BetaList <p>规则关联的 beta 任务详情。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     * @param string $CreateTime <p>规则创建时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     * @param integer $Deleted <p>规则删除标记，1 表示已删除，0 表示未删除。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     * @param string $DestValueType <p>查询结果中对目的实际类型的补充提示，例如 template 可区分 IP 地址模板和域名地址模板。新增和修改处理程序不读取请求中的该字段；实际目的类型由 DestType、DestContent 和模板查询结果确定。</p>
     * @param integer $DetectedTimes <p>规则命中次数。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     * @param string $EdgeName <p>EdgeId 对应的 VPC 边名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     * @param string $FwGroupId <p>规则生效的防火墙组或 CCN 范围，格式比较不区分大小写。ALL 归一化为大写 ALL；cfwg- 前缀和 ccn- 前缀的值保留请求原文；省略、空字符串或其它格式归一化为 ALL，处理程序不因格式无效而返回错误。</p>
     * @param string $FwGroupName <p>防火墙组或 CCN 名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     * @param integer $InternalUuid <p>内部规则标识。AddVpcAcRule 的精确 batch_import_cover 分支会采用正整数 InternalUuid 替换自动生成的内部标识；其它新增分支和 ModifyVpcAcRule 不读取请求中的该字段。</p>
     * @param integer $Invalid <p>查询结果中的规则有效性标记，0 表示有效，1 表示无效。请求中的该字段不参与新增或修改规则构造。</p>
     * @param integer $IpVersion <p>IP 版本，0 表示 IPv4，1 表示 IPv6。省略或传入 0、1 以外的整数时按 IPv4 处理；instance 必须具有对应版本的私网地址，IP 地址模板必须与解析后的版本一致。处理程序不使用该字段校验直接填写的 net IP/CIDR 版本。</p>
     * @param string $ParamTemplateId <p>端口协议组 ID。省略或传空字符串时直接使用 Protocol 和 Port；非空时查询当前租户的端口协议组并用组内协议端口项执行目的类型和协议类别校验，模板查询失败时请求失败。无论是否填写该字段，请求中的 Protocol 和非 ICMP/ICMPV6 Port 都会先按普通规则解析，格式无效时请求失败。</p>
     * @param string $ParamTemplateName <p>端口协议组名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     * @param integer $RulePartition <p>规则分区展示值，1 表示最前分区，2 表示中间分区，3 表示最后分区。新增和修改处理程序不读取请求中的该字段，写入时固定为中间分区；ModifyVpcAcRule 只能定位并替换中间分区中的现有规则。</p>
     * @param string $SourceName <p>访问源名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     * @param string $TargetName <p>访问目的名称。请求中的该字段不参与新增或修改规则构造，主要用于查询返回和操作记录展示。</p>
     * @param string $UpdateTime <p>规则最近更新时间。请求中的该字段不参与新增或修改规则构造，主要用于查询返回。</p>
     * @param integer $Uuid <p>规则数据库 ID。ModifyVpcAcRule 必须传当前租户中间分区内既有规则的正整数 Uuid；处理程序按该 ID 删除原记录并以同一 ID 插入替换后的规则。AddVpcAcRule 的普通新增、insert_rule 和 batch_import 分支忽略该字段；精确 batch_import_cover 分支会采用正整数 Uuid 作为新记录 ID，非正数值仍由数据库生成 ID。</p>
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
