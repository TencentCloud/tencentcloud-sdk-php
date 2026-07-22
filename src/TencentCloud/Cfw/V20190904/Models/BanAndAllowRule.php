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
 * 封禁或放通规则条目；各字段的校验、归一化和实际用途由 RuleType 决定。
 *
 * @method string getComment() 获取规则备注，最多 200 个字符。
 * @method void setComment(string $Comment) 设置规则备注，最多 200 个字符。
 * @method CustomWhiteRule getCustomRule() 获取自定义放通规则详情。RuleType=6 时使用；其它规则类型不读取此字段。
 * @method void setCustomRule(CustomWhiteRule $CustomRule) 设置自定义放通规则详情。RuleType=6 时使用；其它规则类型不读取此字段。
 * @method string getDirectionList() 获取生效方向，使用逗号分隔的整数：0 互联网出站、1 互联网入站、2 双向、3 东西向、4 情报误报反馈、5 内网访问源、6 内网访问目的；每项都必须属于 0 至 6。该字段不可为空；RuleType=6 时通过初始校验后，处理器会根据 CustomRule 的源、目的地址重新计算方向。
 * @method void setDirectionList(string $DirectionList) 设置生效方向，使用逗号分隔的整数：0 互联网出站、1 互联网入站、2 双向、3 东西向、4 情报误报反馈、5 内网访问源、6 内网访问目的；每项都必须属于 0 至 6。该字段不可为空；RuleType=6 时通过初始校验后，处理器会根据 CustomRule 的源、目的地址重新计算方向。
 * @method string getEndTime() 获取规则截止时间，必须使用 YYYY-MM-DD HH:MM:SS 格式且不得早于服务器处理时刻；3000-01-01 00:00:00 作为长期有效时间。
 * @method void setEndTime(string $EndTime) 设置规则截止时间，必须使用 YYYY-MM-DD HH:MM:SS 格式且不得早于服务器处理时刻；3000-01-01 00:00:00 作为长期有效时间。
 * @method integer getFwType() 获取自定义放通规则的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR，组合值按位相加。处理器接受 0 至 31。RuleType=6 时，非零值会按源、目的地址组合与适用引擎位求交，并保留 NDR 位 16；归一化结果大于 0 时使用该结果，结果为 0 时与省略或传 0 相同：任一地址为 IPv6 或私网 IPv4 则实际使用 6，否则实际使用 15。其它 RuleType 仅校验该字段而不使用其值。
 * @method void setFwType(integer $FwType) 设置自定义放通规则的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR，组合值按位相加。处理器接受 0 至 31。RuleType=6 时，非零值会按源、目的地址组合与适用引擎位求交，并保留 NDR 位 16；归一化结果大于 0 时使用该结果，结果为 0 时与省略或传 0 相同：任一地址为 IPv6 或私网 IPv4 则实际使用 6，否则实际使用 15。其它 RuleType 仅校验该字段而不使用其值。
 * @method string getIoc() 获取规则对象。RuleType=1 或 2 时必须是 IP 地址，RuleType=3 时必须是合法域名，RuleType=4 时不能为空，RuleType=5 时必须是资产表中存在的实例 ID；RuleType=6 时表示自定义规则 ID：新增时可省略并由处理器生成；修改时作为既有规则的查询和更新键，省略时不会命中既有规则。其它受理的 RuleType 不校验对象格式。
 * @method void setIoc(string $Ioc) 设置规则对象。RuleType=1 或 2 时必须是 IP 地址，RuleType=3 时必须是合法域名，RuleType=4 时不能为空，RuleType=5 时必须是资产表中存在的实例 ID；RuleType=6 时表示自定义规则 ID：新增时可省略并由处理器生成；修改时作为既有规则的查询和更新键，省略时不会命中既有规则。其它受理的 RuleType 不校验对象格式。
 */
class BanAndAllowRule extends AbstractModel
{
    /**
     * @var string 规则备注，最多 200 个字符。
     */
    public $Comment;

    /**
     * @var CustomWhiteRule 自定义放通规则详情。RuleType=6 时使用；其它规则类型不读取此字段。
     */
    public $CustomRule;

    /**
     * @var string 生效方向，使用逗号分隔的整数：0 互联网出站、1 互联网入站、2 双向、3 东西向、4 情报误报反馈、5 内网访问源、6 内网访问目的；每项都必须属于 0 至 6。该字段不可为空；RuleType=6 时通过初始校验后，处理器会根据 CustomRule 的源、目的地址重新计算方向。
     */
    public $DirectionList;

    /**
     * @var string 规则截止时间，必须使用 YYYY-MM-DD HH:MM:SS 格式且不得早于服务器处理时刻；3000-01-01 00:00:00 作为长期有效时间。
     */
    public $EndTime;

    /**
     * @var integer 自定义放通规则的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR，组合值按位相加。处理器接受 0 至 31。RuleType=6 时，非零值会按源、目的地址组合与适用引擎位求交，并保留 NDR 位 16；归一化结果大于 0 时使用该结果，结果为 0 时与省略或传 0 相同：任一地址为 IPv6 或私网 IPv4 则实际使用 6，否则实际使用 15。其它 RuleType 仅校验该字段而不使用其值。
     */
    public $FwType;

    /**
     * @var string 规则对象。RuleType=1 或 2 时必须是 IP 地址，RuleType=3 时必须是合法域名，RuleType=4 时不能为空，RuleType=5 时必须是资产表中存在的实例 ID；RuleType=6 时表示自定义规则 ID：新增时可省略并由处理器生成；修改时作为既有规则的查询和更新键，省略时不会命中既有规则。其它受理的 RuleType 不校验对象格式。
     */
    public $Ioc;

    /**
     * @param string $Comment 规则备注，最多 200 个字符。
     * @param CustomWhiteRule $CustomRule 自定义放通规则详情。RuleType=6 时使用；其它规则类型不读取此字段。
     * @param string $DirectionList 生效方向，使用逗号分隔的整数：0 互联网出站、1 互联网入站、2 双向、3 东西向、4 情报误报反馈、5 内网访问源、6 内网访问目的；每项都必须属于 0 至 6。该字段不可为空；RuleType=6 时通过初始校验后，处理器会根据 CustomRule 的源、目的地址重新计算方向。
     * @param string $EndTime 规则截止时间，必须使用 YYYY-MM-DD HH:MM:SS 格式且不得早于服务器处理时刻；3000-01-01 00:00:00 作为长期有效时间。
     * @param integer $FwType 自定义放通规则的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR，组合值按位相加。处理器接受 0 至 31。RuleType=6 时，非零值会按源、目的地址组合与适用引擎位求交，并保留 NDR 位 16；归一化结果大于 0 时使用该结果，结果为 0 时与省略或传 0 相同：任一地址为 IPv6 或私网 IPv4 则实际使用 6，否则实际使用 15。其它 RuleType 仅校验该字段而不使用其值。
     * @param string $Ioc 规则对象。RuleType=1 或 2 时必须是 IP 地址，RuleType=3 时必须是合法域名，RuleType=4 时不能为空，RuleType=5 时必须是资产表中存在的实例 ID；RuleType=6 时表示自定义规则 ID：新增时可省略并由处理器生成；修改时作为既有规则的查询和更新键，省略时不会命中既有规则。其它受理的 RuleType 不校验对象格式。
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
        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = new CustomWhiteRule();
            $this->CustomRule->deserialize($param["CustomRule"]);
        }

        if (array_key_exists("DirectionList",$param) and $param["DirectionList"] !== null) {
            $this->DirectionList = $param["DirectionList"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Ioc",$param) and $param["Ioc"] !== null) {
            $this->Ioc = $param["Ioc"];
        }
    }
}
