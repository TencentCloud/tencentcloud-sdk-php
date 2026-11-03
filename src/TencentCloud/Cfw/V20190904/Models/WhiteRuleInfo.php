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
 * @method string getDstIP() 获取<p>访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。</p>
 * @method void setDstIP(string $DstIP) 设置<p>访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。</p>
 * @method string getFileMd5() 获取<p>文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。</p>
 * @method void setFileMd5(string $FileMd5) 设置<p>文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。</p>
 * @method string getFileName() 获取<p>文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
 * @method void setFileName(string $FileName) 设置<p>文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
 * @method string getHostName() 获取<p>HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。</p>
 * @method void setHostName(string $HostName) 设置<p>HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。</p>
 * @method integer getId() 获取<p>服务端内部字段。</p>
 * @method void setId(integer $Id) 设置<p>服务端内部字段。</p>
 * @method string getIdsRuleId() 获取<p>IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。</p>
 * @method void setIdsRuleId(string $IdsRuleId) 设置<p>IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。</p>
 * @method string getIdsRuleName() 获取<p>服务端保留字段。</p>
 * @method void setIdsRuleName(string $IdsRuleName) 设置<p>服务端保留字段。</p>
 * @method string getIoc() 获取<p>RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。</p>
 * @method void setIoc(string $Ioc) 设置<p>RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。</p>
 * @method string getSrcIP() 获取<p>访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。</p>
 * @method void setSrcIP(string $SrcIP) 设置<p>访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。</p>
 * @method string getUrl() 获取<p>HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
 * @method void setUrl(string $Url) 设置<p>HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
 * @method string getUserAgent() 获取<p>HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 &lt;#cfw-splite#&gt; 分隔。</p>
 * @method void setUserAgent(string $UserAgent) 设置<p>HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 &lt;#cfw-splite#&gt; 分隔。</p>
 * @method string getWhiteId() 获取<p>白名单策略唯一 ID。</p>
 * @method void setWhiteId(string $WhiteId) 设置<p>白名单策略唯一 ID。</p>
 * @method string getXForwardedFor() 获取<p>HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。</p>
 * @method void setXForwardedFor(string $XForwardedFor) 设置<p>HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。</p>
 * @method string getRiskEventType() 获取<p>风险事件类型</p>
 * @method void setRiskEventType(string $RiskEventType) 设置<p>风险事件类型</p>
 */
class WhiteRuleInfo extends AbstractModel
{
    /**
     * @var string <p>访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。</p>
     */
    public $DstIP;

    /**
     * @var string <p>文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。</p>
     */
    public $FileMd5;

    /**
     * @var string <p>文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
     */
    public $FileName;

    /**
     * @var string <p>HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。</p>
     */
    public $HostName;

    /**
     * @var integer <p>服务端内部字段。</p>
     */
    public $Id;

    /**
     * @var string <p>IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。</p>
     */
    public $IdsRuleId;

    /**
     * @var string <p>服务端保留字段。</p>
     */
    public $IdsRuleName;

    /**
     * @var string <p>RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。</p>
     */
    public $Ioc;

    /**
     * @var string <p>访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。</p>
     */
    public $SrcIP;

    /**
     * @var string <p>HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
     */
    public $Url;

    /**
     * @var string <p>HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 &lt;#cfw-splite#&gt; 分隔。</p>
     */
    public $UserAgent;

    /**
     * @var string <p>白名单策略唯一 ID。</p>
     */
    public $WhiteId;

    /**
     * @var string <p>HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。</p>
     */
    public $XForwardedFor;

    /**
     * @var string <p>风险事件类型</p>
     */
    public $RiskEventType;

    /**
     * @param string $DstIP <p>访问目的。RuleType=2：本字段与 SrcIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 SrcIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 SrcIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；FwType=16 时具体目的 IPv4 可带端口。RuleType=8：IP、CIDR、IP:端口或 CIDR:端口，可与 SrcIP 组合；RuleType=9：IP、CIDR 或带端口地址，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4 或 IPv4:端口。IPv6 带端口时使用 [IPv6]:端口；已选字段的多值用逗号分隔。</p>
     * @param string $FileMd5 <p>文件 MD5，仅 RuleType=9。32 位十六进制；多值逗号分隔，最多 10 个。</p>
     * @param string $FileName <p>文件名，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
     * @param string $HostName <p>HTTP Host，仅 RuleType=9；填写主机名或 IP，支持 ?、* 通配符并区分大小写；多值用逗号分隔。</p>
     * @param integer $Id <p>服务端内部字段。</p>
     * @param string $IdsRuleId <p>IPS 规则 ID，取自 DescribeIpsRuleListNew.Data[].RuleID。RuleType=6 必填；RuleType=9 可选，填写时同时填写 SrcIP 或 DstIP。</p>
     * @param string $IdsRuleName <p>服务端保留字段。</p>
     * @param string $Ioc <p>RuleType=3 填一个合法域名；RuleType=4 填情报 IP、CIDR 或域名。</p>
     * @param string $SrcIP <p>访问源。RuleType=2：本字段与 DstIP 两个字段中恰好填写一个，值为精确 IP；RuleType=5：本字段与 DstIP 两个字段中恰好填写一个，值为资产 instance_id；RuleType=6：与 DstIP 至少一项为具体 IP，另一项可省略或使用同 IP 版本的 0.0.0.0/0、::/0，两项均为具体 IP 时使用相同 IP 版本；RuleType=8：IP 或 CIDR；RuleType=9：IP 或 CIDR，可与 NDR 专属条件组合；搭配 IdsRuleId 时使用 IPv4。源地址使用无端口格式；已选字段的多值用逗号分隔。</p>
     * @param string $Url <p>HTTP URL，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；多值用逗号分隔，最多 10 个。</p>
     * @param string $UserAgent <p>HTTP User-Agent，仅 RuleType=9；支持精确匹配及 ?、* 通配符，区分大小写；单值少于 255 个字符，最多 2 个，多值用 &lt;#cfw-splite#&gt; 分隔。</p>
     * @param string $WhiteId <p>白名单策略唯一 ID。</p>
     * @param string $XForwardedFor <p>HTTP X-Forwarded-For，仅 RuleType=9；精确 IP，多值逗号分隔，最多 50 个。</p>
     * @param string $RiskEventType <p>风险事件类型</p>
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

        if (array_key_exists("RiskEventType",$param) and $param["RiskEventType"] !== null) {
            $this->RiskEventType = $param["RiskEventType"];
        }
    }
}
