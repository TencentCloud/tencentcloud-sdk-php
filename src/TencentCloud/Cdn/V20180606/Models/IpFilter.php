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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP 黑白名单配置，默认为关闭状态
 *
 * @method string getSwitch() 获取IP 黑白名单配置开关，取值有
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置IP 黑白名单配置开关，取值有
on：开启
off：关闭
 * @method string getFilterType() 获取IP 黑白名单类型
whitelist：白名单
blacklist：黑名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterType(string $FilterType) 设置IP 黑白名单类型
whitelist：白名单
blacklist：黑名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilters() 获取IP 黑白名单列表
支持 X.X.X.X 格式IPV4地址 或X:X:X:X:X:X:X:X 格式IPV6地址， 或网段格式/X（IPV4:1≤X≤32；IPV6:1≤X≤128）
最多可填充 200 个白名单或 200 个黑名单；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilters(array $Filters) 设置IP 黑白名单列表
支持 X.X.X.X 格式IPV4地址 或X:X:X:X:X:X:X:X 格式IPV6地址， 或网段格式/X（IPV4:1≤X≤32；IPV6:1≤X≤128）
最多可填充 200 个白名单或 200 个黑名单；
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterRules() 获取IP 黑白名单分路径配置。黑白名单 IP 总数不能超过 1000 个。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterRules(array $FilterRules) 设置IP 黑白名单分路径配置。黑白名单 IP 总数不能超过 1000 个。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReturnCode() 获取IP 黑白名单验证失败时返回的状态码。
注意：
请求拒绝时，平台默认响应514状态。
支持自定义为403，404，609状态码，空值时或自定义的不在范围内，均默认为514.
非514状态码将计入HTTPS计费统计，最终账单将按您的计费规则生成。
若您开启了自定义状态码，则默认您认同<a href="https://cloud.tencent.com/document/product/228/75563">HTTPS计费规则</a>。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnCode(integer $ReturnCode) 设置IP 黑白名单验证失败时返回的状态码。
注意：
请求拒绝时，平台默认响应514状态。
支持自定义为403，404，609状态码，空值时或自定义的不在范围内，均默认为514.
非514状态码将计入HTTPS计费统计，最终账单将按您的计费规则生成。
若您开启了自定义状态码，则默认您认同<a href="https://cloud.tencent.com/document/product/228/75563">HTTPS计费规则</a>。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IpFilter extends AbstractModel
{
    /**
     * @var string IP 黑白名单配置开关，取值有
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var string IP 黑白名单类型
whitelist：白名单
blacklist：黑名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterType;

    /**
     * @var array IP 黑白名单列表
支持 X.X.X.X 格式IPV4地址 或X:X:X:X:X:X:X:X 格式IPV6地址， 或网段格式/X（IPV4:1≤X≤32；IPV6:1≤X≤128）
最多可填充 200 个白名单或 200 个黑名单；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filters;

    /**
     * @var array IP 黑白名单分路径配置。黑白名单 IP 总数不能超过 1000 个。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterRules;

    /**
     * @var integer IP 黑白名单验证失败时返回的状态码。
注意：
请求拒绝时，平台默认响应514状态。
支持自定义为403，404，609状态码，空值时或自定义的不在范围内，均默认为514.
非514状态码将计入HTTPS计费统计，最终账单将按您的计费规则生成。
若您开启了自定义状态码，则默认您认同<a href="https://cloud.tencent.com/document/product/228/75563">HTTPS计费规则</a>。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnCode;

    /**
     * @param string $Switch IP 黑白名单配置开关，取值有
on：开启
off：关闭
     * @param string $FilterType IP 黑白名单类型
whitelist：白名单
blacklist：黑名单
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Filters IP 黑白名单列表
支持 X.X.X.X 格式IPV4地址 或X:X:X:X:X:X:X:X 格式IPV6地址， 或网段格式/X（IPV4:1≤X≤32；IPV6:1≤X≤128）
最多可填充 200 个白名单或 200 个黑名单；
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterRules IP 黑白名单分路径配置。黑白名单 IP 总数不能超过 1000 个。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReturnCode IP 黑白名单验证失败时返回的状态码。
注意：
请求拒绝时，平台默认响应514状态。
支持自定义为403，404，609状态码，空值时或自定义的不在范围内，均默认为514.
非514状态码将计入HTTPS计费统计，最终账单将按您的计费规则生成。
若您开启了自定义状态码，则默认您认同<a href="https://cloud.tencent.com/document/product/228/75563">HTTPS计费规则</a>。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("FilterRules",$param) and $param["FilterRules"] !== null) {
            $this->FilterRules = [];
            foreach ($param["FilterRules"] as $key => $value){
                $obj = new IpFilterPathRule();
                $obj->deserialize($value);
                array_push($this->FilterRules, $obj);
            }
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }
    }
}
