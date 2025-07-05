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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 四层代理转发规则详情。
 *
 * @method string getRuleId() 获取转发规则 ID。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数请勿填写；在 ModifyL4ProxyRules 作为入参使用时，该参数必填。
 * @method void setRuleId(string $RuleId) 设置转发规则 ID。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数请勿填写；在 ModifyL4ProxyRules 作为入参使用时，该参数必填。
 * @method string getProtocol() 获取转发协议。取值有：
<li>TCP：TCP 协议；</li>
<li>UDP：UDP 协议。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method void setProtocol(string $Protocol) 设置转发协议。取值有：
<li>TCP：TCP 协议；</li>
<li>UDP：UDP 协议。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method array getPortRange() 获取转发端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85。表示 81、82、83、84、85 五个端口。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method void setPortRange(array $PortRange) 设置转发端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85。表示 81、82、83、84、85 五个端口。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method string getOriginType() 获取源站类型，取值有：
<li>IP_DOMAIN：IP/域名源站；</li>
<li>ORIGIN_GROUP：源站组；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method void setOriginType(string $OriginType) 设置源站类型，取值有：
<li>IP_DOMAIN：IP/域名源站；</li>
<li>ORIGIN_GROUP：源站组；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method array getOriginValue() 获取源站地址：
<li>当 OriginType 为 IP_DOMAIN 时，填写 IP 或域名，如 8.8.8.8 或 test.com ；</li>
<li>当 OriginType 为 ORIGIN_GROUP 时，填写源站组 ID，如 og-537y24vf5b41；</li>
<li>当 OriginType 为 LB 时，填写负载均衡实例 ID，如 lb-2qwk30xf7s9g。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。

 * @method void setOriginValue(array $OriginValue) 设置源站地址：
<li>当 OriginType 为 IP_DOMAIN 时，填写 IP 或域名，如 8.8.8.8 或 test.com ；</li>
<li>当 OriginType 为 ORIGIN_GROUP 时，填写源站组 ID，如 og-537y24vf5b41；</li>
<li>当 OriginType 为 LB 时，填写负载均衡实例 ID，如 lb-2qwk30xf7s9g。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。

 * @method string getOriginPortRange() 获取源站端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85，表示 81、82、83、84、85 五个端口。填写端口段时，则需要与转发端口段长度保持一致，例如转发端口：80-90，则转发端口：90-100。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method void setOriginPortRange(string $OriginPortRange) 设置源站端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85，表示 81、82、83、84、85 五个端口。填写端口段时，则需要与转发端口段长度保持一致，例如转发端口：80-90，则转发端口：90-100。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
 * @method string getClientIPPassThroughMode() 获取传递客户端 IP 的形式，取值有：
<li>TOA：TOA（仅 Protocol = TCP 时可选）；</li> 
<li>PPV1：Proxy Protocol 传递，协议版本 V1（仅 Protocol = TCP 时可选）；</li>
<li>PPV2：Proxy Protocol 传递，协议版本 V2；</li> 
<li>SPP：Simple Proxy Protocol 传递，（仅 Protocol = UDP 时可选）；</li> 
<li>OFF：不传递。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 OFF；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method void setClientIPPassThroughMode(string $ClientIPPassThroughMode) 设置传递客户端 IP 的形式，取值有：
<li>TOA：TOA（仅 Protocol = TCP 时可选）；</li> 
<li>PPV1：Proxy Protocol 传递，协议版本 V1（仅 Protocol = TCP 时可选）；</li>
<li>PPV2：Proxy Protocol 传递，协议版本 V2；</li> 
<li>SPP：Simple Proxy Protocol 传递，（仅 Protocol = UDP 时可选）；</li> 
<li>OFF：不传递。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 OFF；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method string getSessionPersist() 获取是否开启会话保持，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 off；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method void setSessionPersist(string $SessionPersist) 设置是否开启会话保持，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 off；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method integer getSessionPersistTime() 获取会话保持时间，取值范围为 30-3600，单位为秒。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，仅当 SessionPersist = on 时，该值才会生效，且当 SessionPersist = on ，该值不填写默认为 3600；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method void setSessionPersistTime(integer $SessionPersistTime) 设置会话保持时间，取值范围为 30-3600，单位为秒。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，仅当 SessionPersist = on 时，该值才会生效，且当 SessionPersist = on ，该值不填写默认为 3600；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method string getRuleTag() 获取规则标签。可输入1-50 个任意字符。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method void setRuleTag(string $RuleTag) 设置规则标签。可输入1-50 个任意字符。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
 * @method string getStatus() 获取规则状态，取值有：
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules、ModifyL4ProxyRules 作为入参使用时，该参数请勿填写。
 * @method void setStatus(string $Status) 设置规则状态，取值有：
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules、ModifyL4ProxyRules 作为入参使用时，该参数请勿填写。
 * @method string getBuId() 获取BuID。
 * @method void setBuId(string $BuId) 设置BuID。
 * @method L4ProxyRemoteAuth getRemoteAuth() 获取远程鉴权信息。
注意：RemoteAuth 在 CreateL4ProxyRules 或 ModifyL4ProxyRules 不可作为入参使用，如有传此参数，会忽略。在 DescribeL4ProxyRules 返回为空时，表示没有开启远程鉴权。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteAuth(L4ProxyRemoteAuth $RemoteAuth) 设置远程鉴权信息。
注意：RemoteAuth 在 CreateL4ProxyRules 或 ModifyL4ProxyRules 不可作为入参使用，如有传此参数，会忽略。在 DescribeL4ProxyRules 返回为空时，表示没有开启远程鉴权。
注意：此字段可能返回 null，表示取不到有效值。
 */
class L4ProxyRule extends AbstractModel
{
    /**
     * @var string 转发规则 ID。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数请勿填写；在 ModifyL4ProxyRules 作为入参使用时，该参数必填。
     */
    public $RuleId;

    /**
     * @var string 转发协议。取值有：
<li>TCP：TCP 协议；</li>
<li>UDP：UDP 协议。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     */
    public $Protocol;

    /**
     * @var array 转发端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85。表示 81、82、83、84、85 五个端口。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     */
    public $PortRange;

    /**
     * @var string 源站类型，取值有：
<li>IP_DOMAIN：IP/域名源站；</li>
<li>ORIGIN_GROUP：源站组；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     */
    public $OriginType;

    /**
     * @var array 源站地址：
<li>当 OriginType 为 IP_DOMAIN 时，填写 IP 或域名，如 8.8.8.8 或 test.com ；</li>
<li>当 OriginType 为 ORIGIN_GROUP 时，填写源站组 ID，如 og-537y24vf5b41；</li>
<li>当 OriginType 为 LB 时，填写负载均衡实例 ID，如 lb-2qwk30xf7s9g。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。

     */
    public $OriginValue;

    /**
     * @var string 源站端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85，表示 81、82、83、84、85 五个端口。填写端口段时，则需要与转发端口段长度保持一致，例如转发端口：80-90，则转发端口：90-100。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     */
    public $OriginPortRange;

    /**
     * @var string 传递客户端 IP 的形式，取值有：
<li>TOA：TOA（仅 Protocol = TCP 时可选）；</li> 
<li>PPV1：Proxy Protocol 传递，协议版本 V1（仅 Protocol = TCP 时可选）；</li>
<li>PPV2：Proxy Protocol 传递，协议版本 V2；</li> 
<li>SPP：Simple Proxy Protocol 传递，（仅 Protocol = UDP 时可选）；</li> 
<li>OFF：不传递。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 OFF；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     */
    public $ClientIPPassThroughMode;

    /**
     * @var string 是否开启会话保持，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 off；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     */
    public $SessionPersist;

    /**
     * @var integer 会话保持时间，取值范围为 30-3600，单位为秒。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，仅当 SessionPersist = on 时，该值才会生效，且当 SessionPersist = on ，该值不填写默认为 3600；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     */
    public $SessionPersistTime;

    /**
     * @var string 规则标签。可输入1-50 个任意字符。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     */
    public $RuleTag;

    /**
     * @var string 规则状态，取值有：
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules、ModifyL4ProxyRules 作为入参使用时，该参数请勿填写。
     */
    public $Status;

    /**
     * @var string BuID。
     */
    public $BuId;

    /**
     * @var L4ProxyRemoteAuth 远程鉴权信息。
注意：RemoteAuth 在 CreateL4ProxyRules 或 ModifyL4ProxyRules 不可作为入参使用，如有传此参数，会忽略。在 DescribeL4ProxyRules 返回为空时，表示没有开启远程鉴权。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteAuth;

    /**
     * @param string $RuleId 转发规则 ID。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数请勿填写；在 ModifyL4ProxyRules 作为入参使用时，该参数必填。
     * @param string $Protocol 转发协议。取值有：
<li>TCP：TCP 协议；</li>
<li>UDP：UDP 协议。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     * @param array $PortRange 转发端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85。表示 81、82、83、84、85 五个端口。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     * @param string $OriginType 源站类型，取值有：
<li>IP_DOMAIN：IP/域名源站；</li>
<li>ORIGIN_GROUP：源站组；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     * @param array $OriginValue 源站地址：
<li>当 OriginType 为 IP_DOMAIN 时，填写 IP 或域名，如 8.8.8.8 或 test.com ；</li>
<li>当 OriginType 为 ORIGIN_GROUP 时，填写源站组 ID，如 og-537y24vf5b41；</li>
<li>当 OriginType 为 LB 时，填写负载均衡实例 ID，如 lb-2qwk30xf7s9g。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。

     * @param string $OriginPortRange 源站端口，支持按照以下形式填写：
<li>单端口，如：80；</li>
<li>端口段，如：81-85，表示 81、82、83、84、85 五个端口。填写端口段时，则需要与转发端口段长度保持一致，例如转发端口：80-90，则转发端口：90-100。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数必填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写时表示不修改。
     * @param string $ClientIPPassThroughMode 传递客户端 IP 的形式，取值有：
<li>TOA：TOA（仅 Protocol = TCP 时可选）；</li> 
<li>PPV1：Proxy Protocol 传递，协议版本 V1（仅 Protocol = TCP 时可选）；</li>
<li>PPV2：Proxy Protocol 传递，协议版本 V2；</li> 
<li>SPP：Simple Proxy Protocol 传递，（仅 Protocol = UDP 时可选）；</li> 
<li>OFF：不传递。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 OFF；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     * @param string $SessionPersist 是否开启会话保持，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，不填写时默认为 off；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     * @param integer $SessionPersistTime 会话保持时间，取值范围为 30-3600，单位为秒。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填，仅当 SessionPersist = on 时，该值才会生效，且当 SessionPersist = on ，该值不填写默认为 3600；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     * @param string $RuleTag 规则标签。可输入1-50 个任意字符。
注意：L4ProxyRule 在 CreateL4ProxyRules 作为入参使用时，该参数选填；在 ModifyL4ProxyRules 作为入参使用时，该参数选填，不填写表示不修改。
     * @param string $Status 规则状态，取值有：
<li>online：已启用；</li>
<li>offline：已停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
注意：L4ProxyRule 在 CreateL4ProxyRules、ModifyL4ProxyRules 作为入参使用时，该参数请勿填写。
     * @param string $BuId BuID。
     * @param L4ProxyRemoteAuth $RemoteAuth 远程鉴权信息。
注意：RemoteAuth 在 CreateL4ProxyRules 或 ModifyL4ProxyRules 不可作为入参使用，如有传此参数，会忽略。在 DescribeL4ProxyRules 返回为空时，表示没有开启远程鉴权。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("OriginPortRange",$param) and $param["OriginPortRange"] !== null) {
            $this->OriginPortRange = $param["OriginPortRange"];
        }

        if (array_key_exists("ClientIPPassThroughMode",$param) and $param["ClientIPPassThroughMode"] !== null) {
            $this->ClientIPPassThroughMode = $param["ClientIPPassThroughMode"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("RuleTag",$param) and $param["RuleTag"] !== null) {
            $this->RuleTag = $param["RuleTag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BuId",$param) and $param["BuId"] !== null) {
            $this->BuId = $param["BuId"];
        }

        if (array_key_exists("RemoteAuth",$param) and $param["RemoteAuth"] !== null) {
            $this->RemoteAuth = new L4ProxyRemoteAuth();
            $this->RemoteAuth->deserialize($param["RemoteAuth"]);
        }
    }
}
