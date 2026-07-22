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
 * NAT 访问控制规则参数结构。新增和修改使用相同的字段解析；字段组合按 Direction、源和目的类型与内容、Protocol、Port、ParamTemplateId、RuleAction 和 Scope 校验。
 *
 * @method integer getDirection() 获取<p>规则方向，JSON 整数：0 表示出站，1 表示入站；其他值被拒绝。方向决定可用的源和目的类型及协议组合。</p>
 * @method void setDirection(integer $Direction) 设置<p>规则方向，JSON 整数：0 表示出站，1 表示入站；其他值被拒绝。方向决定可用的源和目的类型及协议组合。</p>
 * @method integer getOrderIndex() 获取<p>规则序号。入口按 int64 读取后转换为 uint32，转换结果为 0 时归一化为 1；负值不会被单独拒绝，而会按 uint32 转换。写入中间分区时，序号为 1 或不大于当前同方向最大序号会按该位置插入并后移原规则，超过最大序号时通常归一化为末尾序号。新增且 From 不等于 insert_rule 时，如果本批首条规则转换后的序号为 1，则批内后续规则即使超过最大序号也按各自转换后的序号直接插入。</p>
 * @method void setOrderIndex(integer $OrderIndex) 设置<p>规则序号。入口按 int64 读取后转换为 uint32，转换结果为 0 时归一化为 1；负值不会被单独拒绝，而会按 uint32 转换。写入中间分区时，序号为 1 或不大于当前同方向最大序号会按该位置插入并后移原规则，超过最大序号时通常归一化为末尾序号。新增且 From 不等于 insert_rule 时，如果本批首条规则转换后的序号为 1，则批内后续规则即使超过最大序号也按各自转换后的序号直接插入。</p>
 * @method string getPort() 获取<p>目的端口字符串。支持逗号分隔的单端口或以斜杠分隔的起止范围，例如 80、80,443、80/443；-1/-1 表示全部端口。单端口必须是大于 0 的整数；范围只要求两个端点均为整数且起点不大于终点。Protocol 归一化为 ICMP 时忽略该字段并保存为空字符串；FTP 只接受单端口，不接受逗号列表或斜杠范围。</p>
 * @method void setPort(string $Port) 设置<p>目的端口字符串。支持逗号分隔的单端口或以斜杠分隔的起止范围，例如 80、80,443、80/443；-1/-1 表示全部端口。单端口必须是大于 0 的整数；范围只要求两个端点均为整数且起点不大于终点。Protocol 归一化为 ICMP 时忽略该字段并保存为空字符串；FTP 只接受单端口，不接受逗号列表或斜杠范围。</p>
 * @method string getProtocol() 获取<p>协议，大小写不敏感并归一化为大写。四层值为 TCP、UDP、ICMP、ICMPV6、ANY；应用层值为 HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS，其中 domain、tls、ssl 也归一化为 TLS/SSL；ANY 同时可按四层协议和应用协议解析。入站仅允许 ANY、TCP、UDP；domain 目的及解析为域名模板的 template 目的接受上述应用层协议及 ANY，但不接受 FTP；dnsparse 和 domainiptwoverify 目的仅允许 TCP 或 UDP；其他目的不接受 FTP 和 ANY 之外的应用层协议。Protocol=DNS 且目的不是域名模板或单独的 * 时，目的列表只能包含域名，不能包含 IP。</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议，大小写不敏感并归一化为大写。四层值为 TCP、UDP、ICMP、ICMPV6、ANY；应用层值为 HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS，其中 domain、tls、ssl 也归一化为 TLS/SSL；ANY 同时可按四层协议和应用协议解析。入站仅允许 ANY、TCP、UDP；domain 目的及解析为域名模板的 template 目的接受上述应用层协议及 ANY，但不接受 FTP；dnsparse 和 domainiptwoverify 目的仅允许 TCP 或 UDP；其他目的不接受 FTP 和 ANY 之外的应用层协议。Protocol=DNS 且目的不是域名模板或单独的 * 时，目的列表只能包含域名，不能包含 IP。</p>
 * @method string getRuleAction() 获取<p>流量处理方式，大小写不敏感：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept、isolateoutaccept 归一化为 accept，isolateindrop、isolateoutdrop 归一化为 drop。</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>流量处理方式，大小写不敏感：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept、isolateoutaccept 归一化为 accept，isolateindrop、isolateoutdrop 归一化为 drop。</p>
 * @method string getSourceContent() 获取<p>访问源内容，格式由 SourceType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表，最多 10 项；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。</p>
 * @method void setSourceContent(string $SourceContent) 设置<p>访问源内容，格式由 SourceType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表，最多 10 项；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。</p>
 * @method string getSourceType() 获取<p>访问源类型，大小写不敏感。入站支持 net、ip、template、location、vendor；出站支持 net、ip、template、instance、group、tag。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型。</p>
 * @method void setSourceType(string $SourceType) 设置<p>访问源类型，大小写不敏感。入站支持 net、ip、template、location、vendor；出站支持 net、ip、template、instance、group、tag。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型。</p>
 * @method string getTargetContent() 获取<p>访问目的内容，格式由 TargetType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表；domain 使用合法域名或 IP 的逗号列表，也接受单独的 *，标准泛域名和段内通配域名最多 5 级，段内通配域名还要求对应引擎版本支持；dnsparse 使用单个精确域名、最多 5 级的标准泛域名或相应域名模板，不接受单独的 *、段内通配域名、IP 或逗号列表；domainiptwoverify 使用单个精确域名或不含通配符的相应域名模板，不接受单独的 *、任何通配域名、IP 或逗号列表；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。解析后的目的内容最长 1023 字节；IP 或 domain 目的最多包含 10 个逗号分隔项。</p>
 * @method void setTargetContent(string $TargetContent) 设置<p>访问目的内容，格式由 TargetType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表；domain 使用合法域名或 IP 的逗号列表，也接受单独的 *，标准泛域名和段内通配域名最多 5 级，段内通配域名还要求对应引擎版本支持；dnsparse 使用单个精确域名、最多 5 级的标准泛域名或相应域名模板，不接受单独的 *、段内通配域名、IP 或逗号列表；domainiptwoverify 使用单个精确域名或不含通配符的相应域名模板，不接受单独的 *、任何通配域名、IP 或逗号列表；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。解析后的目的内容最长 1023 字节；IP 或 domain 目的最多包含 10 个逗号分隔项。</p>
 * @method string getTargetType() 获取<p>访问目的类型，大小写不敏感。入站支持 net、ip、template、instance、group、tag；出站支持 net、ip、template、domain、dnsparse、domainiptwoverify、location、vendor。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型，入站解析为域名模板时被拒绝。dnsparse 和 domainiptwoverify 分别要求对应引擎版本支持；domainiptwoverify 使用域名模板时还要求严格模式域名模板版本支持；domain 目的使用段内通配域名时要求段内通配域名版本支持。</p>
 * @method void setTargetType(string $TargetType) 设置<p>访问目的类型，大小写不敏感。入站支持 net、ip、template、instance、group、tag；出站支持 net、ip、template、domain、dnsparse、domainiptwoverify、location、vendor。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型，入站解析为域名模板时被拒绝。dnsparse 和 domainiptwoverify 分别要求对应引擎版本支持；domainiptwoverify 使用域名模板时还要求严格模式域名模板版本支持；domain 目的使用段内通配域名时要求段内通配域名版本支持。</p>
 * @method string getDescription() 获取<p>规则描述。省略或传空字符串时保存为空；入口不裁剪内容，也不执行长度归一化或字符数校验。</p>
 * @method void setDescription(string $Description) 设置<p>规则描述。省略或传空字符串时保存为空；入口不裁剪内容，也不执行长度归一化或字符数校验。</p>
 * @method string getEnable() 获取<p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感。省略或传空字符串时读取当前账号的访问控制规则默认状态；配置不存在或无法解析时默认为启用。</p>
 * @method void setEnable(string $Enable) 设置<p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感。省略或传空字符串时读取当前账号的访问控制规则默认状态；配置不存在或无法解析时默认为启用。</p>
 * @method integer getInternalUuid() 获取<p>规则内部 UUID。新增请求仅在 From=batch_import_cover 时采用正整数值替换自动生成的内部 UUID；其他新增路径和修改请求忽略该字段。</p>
 * @method void setInternalUuid(integer $InternalUuid) 设置<p>规则内部 UUID。新增请求仅在 From=batch_import_cover 时采用正整数值替换自动生成的内部 UUID；其他新增路径和修改请求忽略该字段。</p>
 * @method string getParamTemplateId() 获取<p>端口协议模板 ID。省略或传空字符串时直接使用请求中的 Protocol 和 Port；非空时必须指向当前账号已有的端口协议模板，模板条目会逐项参与协议与目的类型联动校验。使用模板时，入口仍先校验请求中的 Protocol，并在该协议不是 ICMP 时校验请求中的 Port；请求值不要求固定为 ANY 和 -1/-1。</p>
 * @method void setParamTemplateId(string $ParamTemplateId) 设置<p>端口协议模板 ID。省略或传空字符串时直接使用请求中的 Protocol 和 Port；非空时必须指向当前账号已有的端口协议模板，模板条目会逐项参与协议与目的类型联动校验。使用模板时，入口仍先校验请求中的 Protocol，并在该协议不是 ICMP 时校验请求中的 Port；请求值不要求固定为 ANY 和 -1/-1。</p>
 * @method string getScope() 获取<p>规则生效范围，值中不能含空白字符。ALL 表示全部 NAT 实例；地域 ID（如 ap-guangzhou）表示地域范围；cfwnat- 或 nat- 开头的实例 ID 表示实例范围。非空值必须是已知地域或当前账号已有的 NAT 实例。省略或传空字符串时，有请求 Region 则使用 Region，否则归一化为 ALL。</p>
 * @method void setScope(string $Scope) 设置<p>规则生效范围，值中不能含空白字符。ALL 表示全部 NAT 实例；地域 ID（如 ap-guangzhou）表示地域范围；cfwnat- 或 nat- 开头的实例 ID 表示实例范围。非空值必须是已知地域或当前账号已有的 NAT 实例。省略或传空字符串时，有请求 Region 则使用 Region，否则归一化为 ALL。</p>
 * @method integer getUuid() 获取<p>规则数据库 ID。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 新增会采用正整数值作为待写入记录 ID。修改请求使用正整数定位中间分区中的现有规则，先删除该记录再以同一 Uuid 重建并返回该 ID；省略、0 或负值无法定位修改目标。</p>
 * @method void setUuid(integer $Uuid) 设置<p>规则数据库 ID。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 新增会采用正整数值作为待写入记录 ID。修改请求使用正整数定位中间分区中的现有规则，先删除该记录再以同一 Uuid 重建并返回该 ID；省略、0 或负值无法定位修改目标。</p>
 */
class CreateNatRuleItem extends AbstractModel
{
    /**
     * @var integer <p>规则方向，JSON 整数：0 表示出站，1 表示入站；其他值被拒绝。方向决定可用的源和目的类型及协议组合。</p>
     */
    public $Direction;

    /**
     * @var integer <p>规则序号。入口按 int64 读取后转换为 uint32，转换结果为 0 时归一化为 1；负值不会被单独拒绝，而会按 uint32 转换。写入中间分区时，序号为 1 或不大于当前同方向最大序号会按该位置插入并后移原规则，超过最大序号时通常归一化为末尾序号。新增且 From 不等于 insert_rule 时，如果本批首条规则转换后的序号为 1，则批内后续规则即使超过最大序号也按各自转换后的序号直接插入。</p>
     */
    public $OrderIndex;

    /**
     * @var string <p>目的端口字符串。支持逗号分隔的单端口或以斜杠分隔的起止范围，例如 80、80,443、80/443；-1/-1 表示全部端口。单端口必须是大于 0 的整数；范围只要求两个端点均为整数且起点不大于终点。Protocol 归一化为 ICMP 时忽略该字段并保存为空字符串；FTP 只接受单端口，不接受逗号列表或斜杠范围。</p>
     */
    public $Port;

    /**
     * @var string <p>协议，大小写不敏感并归一化为大写。四层值为 TCP、UDP、ICMP、ICMPV6、ANY；应用层值为 HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS，其中 domain、tls、ssl 也归一化为 TLS/SSL；ANY 同时可按四层协议和应用协议解析。入站仅允许 ANY、TCP、UDP；domain 目的及解析为域名模板的 template 目的接受上述应用层协议及 ANY，但不接受 FTP；dnsparse 和 domainiptwoverify 目的仅允许 TCP 或 UDP；其他目的不接受 FTP 和 ANY 之外的应用层协议。Protocol=DNS 且目的不是域名模板或单独的 * 时，目的列表只能包含域名，不能包含 IP。</p>
     */
    public $Protocol;

    /**
     * @var string <p>流量处理方式，大小写不敏感：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept、isolateoutaccept 归一化为 accept，isolateindrop、isolateoutdrop 归一化为 drop。</p>
     */
    public $RuleAction;

    /**
     * @var string <p>访问源内容，格式由 SourceType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表，最多 10 项；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。</p>
     */
    public $SourceContent;

    /**
     * @var string <p>访问源类型，大小写不敏感。入站支持 net、ip、template、location、vendor；出站支持 net、ip、template、instance、group、tag。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型。</p>
     */
    public $SourceType;

    /**
     * @var string <p>访问目的内容，格式由 TargetType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表；domain 使用合法域名或 IP 的逗号列表，也接受单独的 *，标准泛域名和段内通配域名最多 5 级，段内通配域名还要求对应引擎版本支持；dnsparse 使用单个精确域名、最多 5 级的标准泛域名或相应域名模板，不接受单独的 *、段内通配域名、IP 或逗号列表；domainiptwoverify 使用单个精确域名或不含通配符的相应域名模板，不接受单独的 *、任何通配域名、IP 或逗号列表；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。解析后的目的内容最长 1023 字节；IP 或 domain 目的最多包含 10 个逗号分隔项。</p>
     */
    public $TargetContent;

    /**
     * @var string <p>访问目的类型，大小写不敏感。入站支持 net、ip、template、instance、group、tag；出站支持 net、ip、template、domain、dnsparse、domainiptwoverify、location、vendor。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型，入站解析为域名模板时被拒绝。dnsparse 和 domainiptwoverify 分别要求对应引擎版本支持；domainiptwoverify 使用域名模板时还要求严格模式域名模板版本支持；domain 目的使用段内通配域名时要求段内通配域名版本支持。</p>
     */
    public $TargetType;

    /**
     * @var string <p>规则描述。省略或传空字符串时保存为空；入口不裁剪内容，也不执行长度归一化或字符数校验。</p>
     */
    public $Description;

    /**
     * @var string <p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感。省略或传空字符串时读取当前账号的访问控制规则默认状态；配置不存在或无法解析时默认为启用。</p>
     */
    public $Enable;

    /**
     * @var integer <p>规则内部 UUID。新增请求仅在 From=batch_import_cover 时采用正整数值替换自动生成的内部 UUID；其他新增路径和修改请求忽略该字段。</p>
     */
    public $InternalUuid;

    /**
     * @var string <p>端口协议模板 ID。省略或传空字符串时直接使用请求中的 Protocol 和 Port；非空时必须指向当前账号已有的端口协议模板，模板条目会逐项参与协议与目的类型联动校验。使用模板时，入口仍先校验请求中的 Protocol，并在该协议不是 ICMP 时校验请求中的 Port；请求值不要求固定为 ANY 和 -1/-1。</p>
     */
    public $ParamTemplateId;

    /**
     * @var string <p>规则生效范围，值中不能含空白字符。ALL 表示全部 NAT 实例；地域 ID（如 ap-guangzhou）表示地域范围；cfwnat- 或 nat- 开头的实例 ID 表示实例范围。非空值必须是已知地域或当前账号已有的 NAT 实例。省略或传空字符串时，有请求 Region 则使用 Region，否则归一化为 ALL。</p>
     */
    public $Scope;

    /**
     * @var integer <p>规则数据库 ID。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 新增会采用正整数值作为待写入记录 ID。修改请求使用正整数定位中间分区中的现有规则，先删除该记录再以同一 Uuid 重建并返回该 ID；省略、0 或负值无法定位修改目标。</p>
     */
    public $Uuid;

    /**
     * @param integer $Direction <p>规则方向，JSON 整数：0 表示出站，1 表示入站；其他值被拒绝。方向决定可用的源和目的类型及协议组合。</p>
     * @param integer $OrderIndex <p>规则序号。入口按 int64 读取后转换为 uint32，转换结果为 0 时归一化为 1；负值不会被单独拒绝，而会按 uint32 转换。写入中间分区时，序号为 1 或不大于当前同方向最大序号会按该位置插入并后移原规则，超过最大序号时通常归一化为末尾序号。新增且 From 不等于 insert_rule 时，如果本批首条规则转换后的序号为 1，则批内后续规则即使超过最大序号也按各自转换后的序号直接插入。</p>
     * @param string $Port <p>目的端口字符串。支持逗号分隔的单端口或以斜杠分隔的起止范围，例如 80、80,443、80/443；-1/-1 表示全部端口。单端口必须是大于 0 的整数；范围只要求两个端点均为整数且起点不大于终点。Protocol 归一化为 ICMP 时忽略该字段并保存为空字符串；FTP 只接受单端口，不接受逗号列表或斜杠范围。</p>
     * @param string $Protocol <p>协议，大小写不敏感并归一化为大写。四层值为 TCP、UDP、ICMP、ICMPV6、ANY；应用层值为 HTTP、HTTPS、HTTP/HTTPS、TLS/SSL、SMTP、SMTPS、SMTP/SMTPS、FTP、DNS，其中 domain、tls、ssl 也归一化为 TLS/SSL；ANY 同时可按四层协议和应用协议解析。入站仅允许 ANY、TCP、UDP；domain 目的及解析为域名模板的 template 目的接受上述应用层协议及 ANY，但不接受 FTP；dnsparse 和 domainiptwoverify 目的仅允许 TCP 或 UDP；其他目的不接受 FTP 和 ANY 之外的应用层协议。Protocol=DNS 且目的不是域名模板或单独的 * 时，目的列表只能包含域名，不能包含 IP。</p>
     * @param string $RuleAction <p>流量处理方式，大小写不敏感：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept、isolateoutaccept 归一化为 accept，isolateindrop、isolateoutdrop 归一化为 drop。</p>
     * @param string $SourceContent <p>访问源内容，格式由 SourceType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表，最多 10 项；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。</p>
     * @param string $SourceType <p>访问源类型，大小写不敏感。入站支持 net、ip、template、location、vendor；出站支持 net、ip、template、instance、group、tag。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型。</p>
     * @param string $TargetContent <p>访问目的内容，格式由 TargetType 和 Direction 决定。net/ip 使用合法 IP 或 CIDR 的逗号列表；domain 使用合法域名或 IP 的逗号列表，也接受单独的 *，标准泛域名和段内通配域名最多 5 级，段内通配域名还要求对应引擎版本支持；dnsparse 使用单个精确域名、最多 5 级的标准泛域名或相应域名模板，不接受单独的 *、段内通配域名、IP 或逗号列表；domainiptwoverify 使用单个精确域名或不含通配符的相应域名模板，不接受单独的 *、任何通配域名、IP 或逗号列表；location 使用地域 code，空字符串归一化为默认全地域掩码；vendor 使用 tencent、aliyun、aws、huawei、azure 或 all，可用逗号分隔；template 使用当前账号可解析的地址模板标识；instance 和 tag 必须引用当前账号已有对象；group 使用资源组标识，入口不校验其是否存在。解析后的目的内容最长 1023 字节；IP 或 domain 目的最多包含 10 个逗号分隔项。</p>
     * @param string $TargetType <p>访问目的类型，大小写不敏感。入站支持 net、ip、template、instance、group、tag；出站支持 net、ip、template、domain、dnsparse、domainiptwoverify、location、vendor。ip 和 net 均归一化为 IP 类型；template 会解析为模板的实际类型，入站解析为域名模板时被拒绝。dnsparse 和 domainiptwoverify 分别要求对应引擎版本支持；domainiptwoverify 使用域名模板时还要求严格模式域名模板版本支持；domain 目的使用段内通配域名时要求段内通配域名版本支持。</p>
     * @param string $Description <p>规则描述。省略或传空字符串时保存为空；入口不裁剪内容，也不执行长度归一化或字符数校验。</p>
     * @param string $Enable <p>规则状态。字符串 true 表示启用，false 表示禁用，大小写不敏感。省略或传空字符串时读取当前账号的访问控制规则默认状态；配置不存在或无法解析时默认为启用。</p>
     * @param integer $InternalUuid <p>规则内部 UUID。新增请求仅在 From=batch_import_cover 时采用正整数值替换自动生成的内部 UUID；其他新增路径和修改请求忽略该字段。</p>
     * @param string $ParamTemplateId <p>端口协议模板 ID。省略或传空字符串时直接使用请求中的 Protocol 和 Port；非空时必须指向当前账号已有的端口协议模板，模板条目会逐项参与协议与目的类型联动校验。使用模板时，入口仍先校验请求中的 Protocol，并在该协议不是 ICMP 时校验请求中的 Port；请求值不要求固定为 ANY 和 -1/-1。</p>
     * @param string $Scope <p>规则生效范围，值中不能含空白字符。ALL 表示全部 NAT 实例；地域 ID（如 ap-guangzhou）表示地域范围；cfwnat- 或 nat- 开头的实例 ID 表示实例范围。非空值必须是已知地域或当前账号已有的 NAT 实例。省略或传空字符串时，有请求 Region 则使用 Region，否则归一化为 ALL。</p>
     * @param integer $Uuid <p>规则数据库 ID。普通新增、insert_rule 和 batch_import 忽略该字段；batch_import_cover 新增会采用正整数值作为待写入记录 ID。修改请求使用正整数定位中间分区中的现有规则，先删除该记录再以同一 Uuid 重建并返回该 ID；省略、0 或负值无法定位修改目标。</p>
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

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
