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
 * @method string getDirectionList() 获取生效方向，多个取值以逗号分隔：0 互联网出向、1 互联网入向、5 内网访问源、6 内网访问目的。互联网双向传 "1,0"，内网双向传 "5,6"。RuleType=1 时传 0、1 或 "1,0"；RuleType=2 时，公网 IP 传 0、1 或 "1,0"，私网 IP 传 5、6 或 "5,6"；RuleType=3 时传 0、6 或 "0,6"；RuleType=4 时传 "1,0"；RuleType=5 时传 5、6 或 "5,6"；RuleType=6 时按规则适用方向组合 0、1、5、6，并在创建后查询最终方向。所有 RuleType 均须显式传入非空值。
 * @method void setDirectionList(string $DirectionList) 设置生效方向，多个取值以逗号分隔：0 互联网出向、1 互联网入向、5 内网访问源、6 内网访问目的。互联网双向传 "1,0"，内网双向传 "5,6"。RuleType=1 时传 0、1 或 "1,0"；RuleType=2 时，公网 IP 传 0、1 或 "1,0"，私网 IP 传 5、6 或 "5,6"；RuleType=3 时传 0、6 或 "0,6"；RuleType=4 时传 "1,0"；RuleType=5 时传 5、6 或 "5,6"；RuleType=6 时按规则适用方向组合 0、1、5、6，并在创建后查询最终方向。所有 RuleType 均须显式传入非空值。
 * @method string getEndTime() 获取规则截止时间，使用北京时间（UTC+8）的 YYYY-MM-DD HH:MM:SS 格式，且不得早于服务器处理时刻；3000-01-01 00:00:00 表示长期有效。
 * @method void setEndTime(string $EndTime) 设置规则截止时间，使用北京时间（UTC+8）的 YYYY-MM-DD HH:MM:SS 格式，且不得早于服务器处理时刻；3000-01-01 00:00:00 表示长期有效。
 * @method integer getFwType() 获取RuleType=6 的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR；组合值按位相加，取值范围为 0 至 31。非零值会与源、目的地址适用的引擎取交集，并保留 NDR 位；结果为 0 时，IPv6 或私网 IPv4 地址使用 6，其它地址使用 15。其它 RuleType 不使用该字段。
 * @method void setFwType(integer $FwType) 设置RuleType=6 的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR；组合值按位相加，取值范围为 0 至 31。非零值会与源、目的地址适用的引擎取交集，并保留 NDR 位；结果为 0 时，IPv6 或私网 IPv4 地址使用 6，其它地址使用 15。其它 RuleType 不使用该字段。
 * @method string getIoc() 获取规则对象。RuleType=1 或 2 时传 IP 地址，RuleType=3 时传域名，RuleType=4 时传情报标识，RuleType=5 时使用 DescribeCfwAssets 返回的 assets[].instance_id。RuleType=6 新建时必须显式传空字符串，由服务生成规则 ID，不可省略。更新既有自定义规则时传入该规则的现有 ID。
 * @method void setIoc(string $Ioc) 设置规则对象。RuleType=1 或 2 时传 IP 地址，RuleType=3 时传域名，RuleType=4 时传情报标识，RuleType=5 时使用 DescribeCfwAssets 返回的 assets[].instance_id。RuleType=6 新建时必须显式传空字符串，由服务生成规则 ID，不可省略。更新既有自定义规则时传入该规则的现有 ID。
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
     * @var string 生效方向，多个取值以逗号分隔：0 互联网出向、1 互联网入向、5 内网访问源、6 内网访问目的。互联网双向传 "1,0"，内网双向传 "5,6"。RuleType=1 时传 0、1 或 "1,0"；RuleType=2 时，公网 IP 传 0、1 或 "1,0"，私网 IP 传 5、6 或 "5,6"；RuleType=3 时传 0、6 或 "0,6"；RuleType=4 时传 "1,0"；RuleType=5 时传 5、6 或 "5,6"；RuleType=6 时按规则适用方向组合 0、1、5、6，并在创建后查询最终方向。所有 RuleType 均须显式传入非空值。
     */
    public $DirectionList;

    /**
     * @var string 规则截止时间，使用北京时间（UTC+8）的 YYYY-MM-DD HH:MM:SS 格式，且不得早于服务器处理时刻；3000-01-01 00:00:00 表示长期有效。
     */
    public $EndTime;

    /**
     * @var integer RuleType=6 的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR；组合值按位相加，取值范围为 0 至 31。非零值会与源、目的地址适用的引擎取交集，并保留 NDR 位；结果为 0 时，IPv6 或私网 IPv4 地址使用 6，其它地址使用 15。其它 RuleType 不使用该字段。
     */
    public $FwType;

    /**
     * @var string 规则对象。RuleType=1 或 2 时传 IP 地址，RuleType=3 时传域名，RuleType=4 时传情报标识，RuleType=5 时使用 DescribeCfwAssets 返回的 assets[].instance_id。RuleType=6 新建时必须显式传空字符串，由服务生成规则 ID，不可省略。更新既有自定义规则时传入该规则的现有 ID。
     */
    public $Ioc;

    /**
     * @param string $Comment 规则备注，最多 200 个字符。
     * @param CustomWhiteRule $CustomRule 自定义放通规则详情。RuleType=6 时使用；其它规则类型不读取此字段。
     * @param string $DirectionList 生效方向，多个取值以逗号分隔：0 互联网出向、1 互联网入向、5 内网访问源、6 内网访问目的。互联网双向传 "1,0"，内网双向传 "5,6"。RuleType=1 时传 0、1 或 "1,0"；RuleType=2 时，公网 IP 传 0、1 或 "1,0"，私网 IP 传 5、6 或 "5,6"；RuleType=3 时传 0、6 或 "0,6"；RuleType=4 时传 "1,0"；RuleType=5 时传 5、6 或 "5,6"；RuleType=6 时按规则适用方向组合 0、1、5、6，并在创建后查询最终方向。所有 RuleType 均须显式传入非空值。
     * @param string $EndTime 规则截止时间，使用北京时间（UTC+8）的 YYYY-MM-DD HH:MM:SS 格式，且不得早于服务器处理时刻；3000-01-01 00:00:00 表示长期有效。
     * @param integer $FwType RuleType=6 的生效引擎位图：1 互联网边界旁路、2 NAT 防火墙、4 VPC 防火墙、8 互联网边界串行、16 NDR；组合值按位相加，取值范围为 0 至 31。非零值会与源、目的地址适用的引擎取交集，并保留 NDR 位；结果为 0 时，IPv6 或私网 IPv4 地址使用 6，其它地址使用 15。其它 RuleType 不使用该字段。
     * @param string $Ioc 规则对象。RuleType=1 或 2 时传 IP 地址，RuleType=3 时传域名，RuleType=4 时传情报标识，RuleType=5 时使用 DescribeCfwAssets 返回的 assets[].instance_id。RuleType=6 新建时必须显式传空字符串，由服务生成规则 ID，不可省略。更新既有自定义规则时传入该规则的现有 ID。
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
