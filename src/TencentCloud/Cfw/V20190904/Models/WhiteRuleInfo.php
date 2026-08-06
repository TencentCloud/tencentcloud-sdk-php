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
 * 白名单匹配条件；各字段的适用 RuleType 和取值要求见字段说明。
 *
 * @method string getDstIP() 获取访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。
 * @method void setDstIP(string $DstIP) 设置访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。
 * @method string getFileMd5() 获取文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。
 * @method void setFileMd5(string $FileMd5) 设置文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。
 * @method string getFileName() 获取文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
 * @method void setFileName(string $FileName) 设置文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
 * @method string getHostName() 获取HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。
 * @method void setHostName(string $HostName) 设置HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。
 * @method integer getId() 获取服务端内部字段。
 * @method void setId(integer $Id) 设置服务端内部字段。
 * @method string getIdsRuleId() 获取IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。
 * @method void setIdsRuleId(string $IdsRuleId) 设置IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。
 * @method string getIdsRuleName() 获取服务端保留字段。
 * @method void setIdsRuleName(string $IdsRuleName) 设置服务端保留字段。
 * @method string getIoc() 获取RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。
 * @method void setIoc(string $Ioc) 设置RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。
 * @method string getSrcIP() 获取访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。
 * @method void setSrcIP(string $SrcIP) 设置访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。
 * @method string getUrl() 获取HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
 * @method void setUrl(string $Url) 设置HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
 * @method string getUserAgent() 获取HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 <#cfw-splite#> 分隔。
 * @method void setUserAgent(string $UserAgent) 设置HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 <#cfw-splite#> 分隔。
 * @method string getWhiteId() 获取白名单策略唯一 ID。
 * @method void setWhiteId(string $WhiteId) 设置白名单策略唯一 ID。
 * @method string getXForwardedFor() 获取HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。
 * @method void setXForwardedFor(string $XForwardedFor) 设置HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。
 */
class WhiteRuleInfo extends AbstractModel
{
    /**
     * @var string 访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。
     */
    public $DstIP;

    /**
     * @var string 文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。
     */
    public $FileMd5;

    /**
     * @var string 文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
     */
    public $FileName;

    /**
     * @var string HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。
     */
    public $HostName;

    /**
     * @var integer 服务端内部字段。
     */
    public $Id;

    /**
     * @var string IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。
     */
    public $IdsRuleId;

    /**
     * @var string 服务端保留字段。
     */
    public $IdsRuleName;

    /**
     * @var string RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。
     */
    public $Ioc;

    /**
     * @var string 访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。
     */
    public $SrcIP;

    /**
     * @var string HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
     */
    public $Url;

    /**
     * @var string HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 <#cfw-splite#> 分隔。
     */
    public $UserAgent;

    /**
     * @var string 白名单策略唯一 ID。
     */
    public $WhiteId;

    /**
     * @var string HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。
     */
    public $XForwardedFor;

    /**
     * @param string $DstIP 访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。
     * @param string $FileMd5 文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。
     * @param string $FileName 文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
     * @param string $HostName HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。
     * @param integer $Id 服务端内部字段。
     * @param string $IdsRuleId IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。
     * @param string $IdsRuleName 服务端保留字段。
     * @param string $Ioc RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。
     * @param string $SrcIP 访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。
     * @param string $Url HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。
     * @param string $UserAgent HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 <#cfw-splite#> 分隔。
     * @param string $WhiteId 白名单策略唯一 ID。
     * @param string $XForwardedFor HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。
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
        if (array_key_exists("DstIP",$param) and $param["DstIP"] !== null) {
            $this->DstIP = $param["DstIP"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IdsRuleId",$param) and $param["IdsRuleId"] !== null) {
            $this->IdsRuleId = $param["IdsRuleId"];
        }

        if (array_key_exists("IdsRuleName",$param) and $param["IdsRuleName"] !== null) {
            $this->IdsRuleName = $param["IdsRuleName"];
        }

        if (array_key_exists("Ioc",$param) and $param["Ioc"] !== null) {
            $this->Ioc = $param["Ioc"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("WhiteId",$param) and $param["WhiteId"] !== null) {
            $this->WhiteId = $param["WhiteId"];
        }

        if (array_key_exists("XForwardedFor",$param) and $param["XForwardedFor"] !== null) {
            $this->XForwardedFor = $param["XForwardedFor"];
        }
    }
}
