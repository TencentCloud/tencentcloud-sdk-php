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
 * RuleType=6 使用的自定义放通规则详情。SrcIP、DstIP 至少一项必须是具体 IP；另一项可省略或使用与具体 IP 同版本的通配网段 0.0.0.0/0、::/0。两项均为具体 IP 时，当前处理器拒绝源 IPv6、目的 IPv4 的组合；源 IPv4、目的 IPv6 的反向组合当前不受该版本检查限制。资产判定中，私网 IPv4 和任意 IPv6 直接通过，公网 IPv4 必须存在于当前账号 cfw_public_ip。两项均为具体 IP 时至少一项须通过资产判定；仅一项为具体 IP 且另一项省略或为同版本通配网段时，若实际 FwType 包含互联网边界位 1，该具体 IP 也必须通过资产判定。处理器据此计算规则方向和适用引擎。
 *
 * @method string getDstIP() 获取自定义规则的目的地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 SrcIP 为具体 IP 时可省略或使用与 SrcIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
 * @method void setDstIP(string $DstIP) 设置自定义规则的目的地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 SrcIP 为具体 IP 时可省略或使用与 SrcIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
 * @method string getIdsRuleId() 获取自定义规则关联的入侵防御规则 ID；必须是可转换为整数且在入侵防御规则模板中存在的 ID。
 * @method void setIdsRuleId(string $IdsRuleId) 设置自定义规则关联的入侵防御规则 ID；必须是可转换为整数且在入侵防御规则模板中存在的 ID。
 * @method string getIdsRuleName() 获取自定义规则名称；处理器不对内容做额外校验。
 * @method void setIdsRuleName(string $IdsRuleName) 设置自定义规则名称；处理器不对内容做额外校验。
 * @method string getSrcIP() 获取自定义规则的源地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 DstIP 为具体 IP 时可省略或使用与 DstIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
 * @method void setSrcIP(string $SrcIP) 设置自定义规则的源地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 DstIP 为具体 IP 时可省略或使用与 DstIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
 */
class CustomWhiteRule extends AbstractModel
{
    /**
     * @var string 自定义规则的目的地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 SrcIP 为具体 IP 时可省略或使用与 SrcIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
     */
    public $DstIP;

    /**
     * @var string 自定义规则关联的入侵防御规则 ID；必须是可转换为整数且在入侵防御规则模板中存在的 ID。
     */
    public $IdsRuleId;

    /**
     * @var string 自定义规则名称；处理器不对内容做额外校验。
     */
    public $IdsRuleName;

    /**
     * @var string 自定义规则的源地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 DstIP 为具体 IP 时可省略或使用与 DstIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
     */
    public $SrcIP;

    /**
     * @param string $DstIP 自定义规则的目的地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 SrcIP 为具体 IP 时可省略或使用与 SrcIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
     * @param string $IdsRuleId 自定义规则关联的入侵防御规则 ID；必须是可转换为整数且在入侵防御规则模板中存在的 ID。
     * @param string $IdsRuleName 自定义规则名称；处理器不对内容做额外校验。
     * @param string $SrcIP 自定义规则的源地址。SrcIP、DstIP 至少一项必须是具体 IP；本字段仅在 DstIP 为具体 IP 时可省略或使用与 DstIP 同版本的通配网段。两项均为具体 IP 时，源 IPv6、目的 IPv4 会被拒绝，源 IPv4、目的 IPv6 当前不受该版本检查限制。私网 IPv4 和任意 IPv6 直接通过资产判定，公网 IPv4 必须存在于当前账号 cfw_public_ip；是否要求通过资产判定由两侧地址与实际 FwType 联动决定。
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

        if (array_key_exists("IdsRuleId",$param) and $param["IdsRuleId"] !== null) {
            $this->IdsRuleId = $param["IdsRuleId"];
        }

        if (array_key_exists("IdsRuleName",$param) and $param["IdsRuleName"] !== null) {
            $this->IdsRuleName = $param["IdsRuleName"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }
    }
}
