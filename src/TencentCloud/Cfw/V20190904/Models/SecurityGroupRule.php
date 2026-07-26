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
 * 企业安全组规则内容。新增和修改规则内容共用此结构；字段的校验、缺省、归一化及在两种操作中的处理行为见各字段说明。
 *
 * @method string getDescription() 获取规则用途或使用场景的描述，不能为空，最多 100 个 Unicode 字符。
 * @method void setDescription(string $Description) 设置规则用途或使用场景的描述，不能为空，最多 100 个 Unicode 字符。
 * @method string getDestContent() 获取访问目的内容，非空且最多 512 字节，格式由 DestType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region；dnsparse 使用合法域名并按小写处理，同时受域名解析配额限制。
 * @method void setDestContent(string $DestContent) 设置访问目的内容，非空且最多 512 字节，格式由 DestType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region；dnsparse 使用合法域名并按小写处理，同时受域名解析配额限制。
 * @method string getDestType() 获取访问目的类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域，dnsparse 表示 DNS 解析匹配。内容必须与类型匹配，并且对当前账号有效。
 * @method void setDestType(string $DestType) 设置访问目的类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域，dnsparse 表示 DNS 解析匹配。内容必须与类型匹配，并且对当前账号有效。
 * @method string getOrderIndex() 获取规则顺序的十进制整数字符串；-1 转换为 uint32 最大值。新增时 Type=0 或 1 会按 Data 数组顺序重新计算最终 Sequence；Type=2 使用首条规则的 OrderIndex 作为插入位置，超过当前最大 Sequence 时按末尾新增处理。修改规则内容时 -1 会被拒绝，超过当前最大 Sequence 的值归一化为当前最大 Sequence。
 * @method void setOrderIndex(string $OrderIndex) 设置规则顺序的十进制整数字符串；-1 转换为 uint32 最大值。新增时 Type=0 或 1 会按 Data 数组顺序重新计算最终 Sequence；Type=2 使用首条规则的 OrderIndex 作为插入位置，超过当前最大 Sequence 时按末尾新增处理。修改规则内容时 -1 会被拒绝，超过当前最大 Sequence 的值归一化为当前最大 Sequence。
 * @method string getRuleAction() 获取访问控制动作，不区分大小写：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。
 * @method void setRuleAction(string $RuleAction) 设置访问控制动作，不区分大小写：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。
 * @method string getSourceContent() 获取访问源内容，非空且最多 512 字节，格式由 SourceType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region。
 * @method void setSourceContent(string $SourceContent) 设置访问源内容，非空且最多 512 字节，格式由 SourceType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region。
 * @method string getSourceType() 获取访问源类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域。内容必须与类型匹配，并且对当前账号有效；dnsparse 作为 SourceType 时仅按普通字符串保存，不提供 DNS 解析匹配，请勿使用；DNS 解析匹配仅用于 DestType。
 * @method void setSourceType(string $SourceType) 设置访问源类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域。内容必须与类型匹配，并且对当前账号有效；dnsparse 作为 SourceType 时仅按普通字符串保存，不提供 DNS 解析匹配，请勿使用；DNS 解析匹配仅用于 DestType。
 * @method string getEnable() 获取规则状态字符串，不区分大小写；true 表示启用，false 表示禁用，省略或空字符串在结构转换时按 true 解析。普通新增最终使用账号的新增规则默认状态；batch_import 和 batch_import_cover 新增保留 Data.Enable 的解析结果；修改规则内容时保留原规则状态，因此 Data.Enable 不改变该修改的启停结果。
 * @method void setEnable(string $Enable) 设置规则状态字符串，不区分大小写；true 表示启用，false 表示禁用，省略或空字符串在结构转换时按 true 解析。普通新增最终使用账号的新增规则默认状态；batch_import 和 batch_import_cover 新增保留 Data.Enable 的解析结果；修改规则内容时保留原规则状态，因此 Data.Enable 不改变该修改的启停结果。
 * @method string getId() 获取规则 ID，使用十进制数字字符串。普通新增由系统分配；仅 IsUseId=1 的新增请求采用 Data.Id。修改规则内容时忽略 Data.Id，并保留 RuleUuid 指定的规则 ID。
 * @method void setId(string $Id) 设置规则 ID，使用十进制数字字符串。普通新增由系统分配；仅 IsUseId=1 的新增请求采用 Data.Id。修改规则内容时忽略 Data.Id，并保留 RuleUuid 指定的规则 ID。
 * @method string getPort() 获取访问控制端口字符串，最多 200 字节。未使用服务模板时必填，可传 1..65535 的单端口、斜杠连接的端口范围、最多 15 个逗号分隔项，或 -1/-1 表示全部端口；Protocol 为 ANY 或 ICMP 时必须为 -1/-1。使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。
 * @method void setPort(string $Port) 设置访问控制端口字符串，最多 200 字节。未使用服务模板时必填，可传 1..65535 的单端口、斜杠连接的端口范围、最多 15 个逗号分隔项，或 -1/-1 表示全部端口；Protocol 为 ANY 或 ICMP 时必须为 -1/-1。使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。
 * @method string getProtocol() 获取IPv4 企业安全组协议，使用区分大小写的大写值 ANY、TCP、UDP 或 ICMP；ANY 表示所有 IPv4 协议。未使用服务模板时必填，ANY 和 ICMP 必须搭配 Port=-1/-1；使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。ICMPv6 使用独立的 IPv6 企业安全组接口。
 * @method void setProtocol(string $Protocol) 设置IPv4 企业安全组协议，使用区分大小写的大写值 ANY、TCP、UDP 或 ICMP；ANY 表示所有 IPv4 协议。未使用服务模板时必填，ANY 和 ICMP 必须搭配 Port=-1/-1；使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。ICMPv6 使用独立的 IPv6 企业安全组接口。
 * @method string getScope() 获取规则生效范围，使用大写 SG、LH、NONE 或无空格的逗号分隔组合；SG 表示安全组，LH 表示轻量应用服务器，NONE 表示未设置范围。新增时省略默认为 SG；修改规则内容时省略或使用 NONE 均保留原范围。组合项会去重。范围包含 LH 时，SourceType、DestType 均不能为 template，且不能使用 ServiceTemplateId。
 * @method void setScope(string $Scope) 设置规则生效范围，使用大写 SG、LH、NONE 或无空格的逗号分隔组合；SG 表示安全组，LH 表示轻量应用服务器，NONE 表示未设置范围。新增时省略默认为 SG；修改规则内容时省略或使用 NONE 均保留原范围。组合项会去重。范围包含 LH 时，SourceType、DestType 均不能为 template，且不能使用 ServiceTemplateId。
 * @method string getServiceTemplateId() 获取协议端口模板 ID，最多 50 字节。仅支持通过 VPC DescribeServiceTemplates 或 DescribeServiceTemplateGroups 查询的广州地域（ap-guangzhou）服务模板，即 ServiceTemplateId（ppm-）或 ServiceTemplateGroupId（ppmg-）。非空时 Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 包含 LH 时不能使用服务模板。
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置协议端口模板 ID，最多 50 字节。仅支持通过 VPC DescribeServiceTemplates 或 DescribeServiceTemplateGroups 查询的广州地域（ap-guangzhou）服务模板，即 ServiceTemplateId（ppm-）或 ServiceTemplateGroupId（ppmg-）。非空时 Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 包含 LH 时不能使用服务模板。
 * @method string getUid() 获取保留字段。新增和修改请求均忽略 Uid，无法通过该字段指定或保留规则标识，建议省略。
 * @method void setUid(string $Uid) 设置保留字段。新增和修改请求均忽略 Uid，无法通过该字段指定或保留规则标识，建议省略。
 */
class SecurityGroupRule extends AbstractModel
{
    /**
     * @var string 规则用途或使用场景的描述，不能为空，最多 100 个 Unicode 字符。
     */
    public $Description;

    /**
     * @var string 访问目的内容，非空且最多 512 字节，格式由 DestType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region；dnsparse 使用合法域名并按小写处理，同时受域名解析配额限制。
     */
    public $DestContent;

    /**
     * @var string 访问目的类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域，dnsparse 表示 DNS 解析匹配。内容必须与类型匹配，并且对当前账号有效。
     */
    public $DestType;

    /**
     * @var string 规则顺序的十进制整数字符串；-1 转换为 uint32 最大值。新增时 Type=0 或 1 会按 Data 数组顺序重新计算最终 Sequence；Type=2 使用首条规则的 OrderIndex 作为插入位置，超过当前最大 Sequence 时按末尾新增处理。修改规则内容时 -1 会被拒绝，超过当前最大 Sequence 的值归一化为当前最大 Sequence。
     */
    public $OrderIndex;

    /**
     * @var string 访问控制动作，不区分大小写：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。
     */
    public $RuleAction;

    /**
     * @var string 访问源内容，非空且最多 512 字节，格式由 SourceType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region。
     */
    public $SourceContent;

    /**
     * @var string 访问源类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域。内容必须与类型匹配，并且对当前账号有效；dnsparse 作为 SourceType 时仅按普通字符串保存，不提供 DNS 解析匹配，请勿使用；DNS 解析匹配仅用于 DestType。
     */
    public $SourceType;

    /**
     * @var string 规则状态字符串，不区分大小写；true 表示启用，false 表示禁用，省略或空字符串在结构转换时按 true 解析。普通新增最终使用账号的新增规则默认状态；batch_import 和 batch_import_cover 新增保留 Data.Enable 的解析结果；修改规则内容时保留原规则状态，因此 Data.Enable 不改变该修改的启停结果。
     */
    public $Enable;

    /**
     * @var string 规则 ID，使用十进制数字字符串。普通新增由系统分配；仅 IsUseId=1 的新增请求采用 Data.Id。修改规则内容时忽略 Data.Id，并保留 RuleUuid 指定的规则 ID。
     */
    public $Id;

    /**
     * @var string 访问控制端口字符串，最多 200 字节。未使用服务模板时必填，可传 1..65535 的单端口、斜杠连接的端口范围、最多 15 个逗号分隔项，或 -1/-1 表示全部端口；Protocol 为 ANY 或 ICMP 时必须为 -1/-1。使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。
     */
    public $Port;

    /**
     * @var string IPv4 企业安全组协议，使用区分大小写的大写值 ANY、TCP、UDP 或 ICMP；ANY 表示所有 IPv4 协议。未使用服务模板时必填，ANY 和 ICMP 必须搭配 Port=-1/-1；使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。ICMPv6 使用独立的 IPv6 企业安全组接口。
     */
    public $Protocol;

    /**
     * @var string 规则生效范围，使用大写 SG、LH、NONE 或无空格的逗号分隔组合；SG 表示安全组，LH 表示轻量应用服务器，NONE 表示未设置范围。新增时省略默认为 SG；修改规则内容时省略或使用 NONE 均保留原范围。组合项会去重。范围包含 LH 时，SourceType、DestType 均不能为 template，且不能使用 ServiceTemplateId。
     */
    public $Scope;

    /**
     * @var string 协议端口模板 ID，最多 50 字节。仅支持通过 VPC DescribeServiceTemplates 或 DescribeServiceTemplateGroups 查询的广州地域（ap-guangzhou）服务模板，即 ServiceTemplateId（ppm-）或 ServiceTemplateGroupId（ppmg-）。非空时 Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 包含 LH 时不能使用服务模板。
     */
    public $ServiceTemplateId;

    /**
     * @var string 保留字段。新增和修改请求均忽略 Uid，无法通过该字段指定或保留规则标识，建议省略。
     */
    public $Uid;

    /**
     * @param string $Description 规则用途或使用场景的描述，不能为空，最多 100 个 Unicode 字符。
     * @param string $DestContent 访问目的内容，非空且最多 512 字节，格式由 DestType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region；dnsparse 使用合法域名并按小写处理，同时受域名解析配额限制。
     * @param string $DestType 访问目的类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域，dnsparse 表示 DNS 解析匹配。内容必须与类型匹配，并且对当前账号有效。
     * @param string $OrderIndex 规则顺序的十进制整数字符串；-1 转换为 uint32 最大值。新增时 Type=0 或 1 会按 Data 数组顺序重新计算最终 Sequence；Type=2 使用首条规则的 OrderIndex 作为插入位置，超过当前最大 Sequence 时按末尾新增处理。修改规则内容时 -1 会被拒绝，超过当前最大 Sequence 的值归一化为当前最大 Sequence。
     * @param string $RuleAction 访问控制动作，不区分大小写：accept 表示放行，drop 表示拒绝，log 表示观察；isolateinaccept 表示放行访问隔离资产的白名单流量，isolateindrop 表示阻断访问隔离资产的其它流量，isolateoutaccept 表示放行隔离资产访问白名单目标，isolateoutdrop 表示阻断隔离资产访问其它目标。
     * @param string $SourceContent 访问源内容，非空且最多 512 字节，格式由 SourceType 决定：net 使用 IPv4 IP/CIDR，且不接受裸地址 0.0.0.0，表示全部 IPv4 地址时使用 0.0.0.0/0；template 使用通过 VPC DescribeAddressTemplates 或 DescribeAddressTemplateGroups 查询的广州地域（ap-guangzhou）地址模板 ID，即 AddressTemplateId（ipm-）或 AddressTemplateGroupId（ipmg-）；instance 使用 DescribeCfwAssets 返回的 assets[].instance_id；resourcegroup 使用 DescribeResourceGroupNew（QueryType=resource）返回的 GroupId；tag 根据 DescribeResourceGroupNew（QueryType=tag）返回的 GroupName 构造 {\"Key\":\"标签键\",\"Value\":\"标签值\"}；region 使用 DescribeSecurityGroupRegionList 返回的 Data[].Region。
     * @param string $SourceType 访问源类型，不区分大小写：net 表示 IP/CIDR，template 表示地址模板，instance 表示资产实例，resourcegroup 表示资产分组，tag 表示资源标签，region 表示资产地域。内容必须与类型匹配，并且对当前账号有效；dnsparse 作为 SourceType 时仅按普通字符串保存，不提供 DNS 解析匹配，请勿使用；DNS 解析匹配仅用于 DestType。
     * @param string $Enable 规则状态字符串，不区分大小写；true 表示启用，false 表示禁用，省略或空字符串在结构转换时按 true 解析。普通新增最终使用账号的新增规则默认状态；batch_import 和 batch_import_cover 新增保留 Data.Enable 的解析结果；修改规则内容时保留原规则状态，因此 Data.Enable 不改变该修改的启停结果。
     * @param string $Id 规则 ID，使用十进制数字字符串。普通新增由系统分配；仅 IsUseId=1 的新增请求采用 Data.Id。修改规则内容时忽略 Data.Id，并保留 RuleUuid 指定的规则 ID。
     * @param string $Port 访问控制端口字符串，最多 200 字节。未使用服务模板时必填，可传 1..65535 的单端口、斜杠连接的端口范围、最多 15 个逗号分隔项，或 -1/-1 表示全部端口；Protocol 为 ANY 或 ICMP 时必须为 -1/-1。使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。
     * @param string $Protocol IPv4 企业安全组协议，使用区分大小写的大写值 ANY、TCP、UDP 或 ICMP；ANY 表示所有 IPv4 协议。未使用服务模板时必填，ANY 和 ICMP 必须搭配 Port=-1/-1；使用 ServiceTemplateId 时，Protocol 和 Port 可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。ICMPv6 使用独立的 IPv6 企业安全组接口。
     * @param string $Scope 规则生效范围，使用大写 SG、LH、NONE 或无空格的逗号分隔组合；SG 表示安全组，LH 表示轻量应用服务器，NONE 表示未设置范围。新增时省略默认为 SG；修改规则内容时省略或使用 NONE 均保留原范围。组合项会去重。范围包含 LH 时，SourceType、DestType 均不能为 template，且不能使用 ServiceTemplateId。
     * @param string $ServiceTemplateId 协议端口模板 ID，最多 50 字节。仅支持通过 VPC DescribeServiceTemplates 或 DescribeServiceTemplateGroups 查询的广州地域（ap-guangzhou）服务模板，即 ServiceTemplateId（ppm-）或 ServiceTemplateGroupId（ppmg-）。非空时 Protocol 和 Port 可同时省略或留空；如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 包含 LH 时不能使用服务模板。
     * @param string $Uid 保留字段。新增和修改请求均忽略 Uid，无法通过该字段指定或保留规则标识，建议省略。
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

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }
    }
}
