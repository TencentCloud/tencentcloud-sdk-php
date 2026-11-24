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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTokenPlanApiKeys请求参数结构体
 *
 * @method string getTeamId() 获取<p>套餐 ID。可通过DescribeTokenPlanList接口获取。</p>
 * @method void setTeamId(string $TeamId) 设置<p>套餐 ID。可通过DescribeTokenPlanList接口获取。</p>
 * @method string getApiKeyName() 获取<p>API Key 名称，最大 128 字符。如果创建 API Key 的数量超过1个，实际名称格式为 {ApiKeyName}-{序号}（如 mykey-1, mykey-2）。</p>
 * @method void setApiKeyName(string $ApiKeyName) 设置<p>API Key 名称，最大 128 字符。如果创建 API Key 的数量超过1个，实际名称格式为 {ApiKeyName}-{序号}（如 mykey-1, mykey-2）。</p>
 * @method integer getCount() 获取<p>创建数量。取值范围：1 ~ 10。</p>
 * @method void setCount(integer $Count) 设置<p>创建数量。取值范围：1 ~ 10。</p>
 * @method array getAllowedModels() 获取<p>可用模型列表。如果套餐类型为企业版专业套餐，该字段必传！可以指定模型，也可以传入“all”，传入 “all“表示可以使用套餐支持的所有模型，如果要指定具体模型，传入 Model ID，“all“和具体的 Model ID 不能同时传入。如果套餐类型为企业版轻享套餐，则无论是否传入该字段，以及该字段传入什么值，都会被强制覆盖为[&quot;auto&quot;]。</p>
 * @method void setAllowedModels(array $AllowedModels) 设置<p>可用模型列表。如果套餐类型为企业版专业套餐，该字段必传！可以指定模型，也可以传入“all”，传入 “all“表示可以使用套餐支持的所有模型，如果要指定具体模型，传入 Model ID，“all“和具体的 Model ID 不能同时传入。如果套餐类型为企业版轻享套餐，则无论是否传入该字段，以及该字段传入什么值，都会被强制覆盖为[&quot;auto&quot;]。</p>
 * @method integer getExclusiveQuota() 获取<p>独占额度。不传则为0，代表该 API Key 不被分配任何独占配额。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setExclusiveQuota(integer $ExclusiveQuota) 设置<p>独占额度。不传则为0，代表该 API Key 不被分配任何独占配额。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method integer getTotalQuota() 获取<p>总额度上限。-1 表示不限，必须为 -1 或 &gt;= API Key 当前的 ExclusiveQuota（独占额度）。不传表示不设置上限。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setTotalQuota(integer $TotalQuota) 设置<p>总额度上限。-1 表示不限，必须为 -1 或 &gt;= API Key 当前的 ExclusiveQuota（独占额度）。不传表示不设置上限。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method integer getTPM() 获取<p>TPM（Tokens Per Minute）限制。不传使用套餐级别 TPM。必须 &gt;= 0 且 &lt;= 套餐 TPM。</p>
 * @method void setTPM(integer $TPM) 设置<p>TPM（Tokens Per Minute）限制。不传使用套餐级别 TPM。必须 &gt;= 0 且 &lt;= 套餐 TPM。</p>
 * @method array getIpWhitelist() 获取<p>IP 白名单列表。支持 IPv4 单地址（如 1.2.3.4）和 IPv4 CIDR（如 10.0.0.0/24）格式。最多 50 个条目，不允许重复；不支持 IPv6 与 IP 范围。不传或传空数组表示不限制。批量创建时所有 APIKey 共用同一份白名单。</p>
 * @method void setIpWhitelist(array $IpWhitelist) 设置<p>IP 白名单列表。支持 IPv4 单地址（如 1.2.3.4）和 IPv4 CIDR（如 10.0.0.0/24）格式。最多 50 个条目，不允许重复；不支持 IPv6 与 IP 范围。不传或传空数组表示不限制。批量创建时所有 APIKey 共用同一份白名单。</p>
 * @method boolean getOverageEnabled() 获取<p>是否开启超额按量计费。默认值为 false。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式，该部分将按所用模型的按量计费定价额外计费；未开启时用量达上限后调用报错。</p>
 * @method void setOverageEnabled(boolean $OverageEnabled) 设置<p>是否开启超额按量计费。默认值为 false。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式，该部分将按所用模型的按量计费定价额外计费；未开启时用量达上限后调用报错。</p>
 */
class CreateTokenPlanApiKeysRequest extends AbstractModel
{
    /**
     * @var string <p>套餐 ID。可通过DescribeTokenPlanList接口获取。</p>
     */
    public $TeamId;

    /**
     * @var string <p>API Key 名称，最大 128 字符。如果创建 API Key 的数量超过1个，实际名称格式为 {ApiKeyName}-{序号}（如 mykey-1, mykey-2）。</p>
     */
    public $ApiKeyName;

    /**
     * @var integer <p>创建数量。取值范围：1 ~ 10。</p>
     */
    public $Count;

    /**
     * @var array <p>可用模型列表。如果套餐类型为企业版专业套餐，该字段必传！可以指定模型，也可以传入“all”，传入 “all“表示可以使用套餐支持的所有模型，如果要指定具体模型，传入 Model ID，“all“和具体的 Model ID 不能同时传入。如果套餐类型为企业版轻享套餐，则无论是否传入该字段，以及该字段传入什么值，都会被强制覆盖为[&quot;auto&quot;]。</p>
     */
    public $AllowedModels;

    /**
     * @var integer <p>独占额度。不传则为0，代表该 API Key 不被分配任何独占配额。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $ExclusiveQuota;

    /**
     * @var integer <p>总额度上限。-1 表示不限，必须为 -1 或 &gt;= API Key 当前的 ExclusiveQuota（独占额度）。不传表示不设置上限。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $TotalQuota;

    /**
     * @var integer <p>TPM（Tokens Per Minute）限制。不传使用套餐级别 TPM。必须 &gt;= 0 且 &lt;= 套餐 TPM。</p>
     */
    public $TPM;

    /**
     * @var array <p>IP 白名单列表。支持 IPv4 单地址（如 1.2.3.4）和 IPv4 CIDR（如 10.0.0.0/24）格式。最多 50 个条目，不允许重复；不支持 IPv6 与 IP 范围。不传或传空数组表示不限制。批量创建时所有 APIKey 共用同一份白名单。</p>
     */
    public $IpWhitelist;

    /**
     * @var boolean <p>是否开启超额按量计费。默认值为 false。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式，该部分将按所用模型的按量计费定价额外计费；未开启时用量达上限后调用报错。</p>
     */
    public $OverageEnabled;

    /**
     * @param string $TeamId <p>套餐 ID。可通过DescribeTokenPlanList接口获取。</p>
     * @param string $ApiKeyName <p>API Key 名称，最大 128 字符。如果创建 API Key 的数量超过1个，实际名称格式为 {ApiKeyName}-{序号}（如 mykey-1, mykey-2）。</p>
     * @param integer $Count <p>创建数量。取值范围：1 ~ 10。</p>
     * @param array $AllowedModels <p>可用模型列表。如果套餐类型为企业版专业套餐，该字段必传！可以指定模型，也可以传入“all”，传入 “all“表示可以使用套餐支持的所有模型，如果要指定具体模型，传入 Model ID，“all“和具体的 Model ID 不能同时传入。如果套餐类型为企业版轻享套餐，则无论是否传入该字段，以及该字段传入什么值，都会被强制覆盖为[&quot;auto&quot;]。</p>
     * @param integer $ExclusiveQuota <p>独占额度。不传则为0，代表该 API Key 不被分配任何独占配额。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param integer $TotalQuota <p>总额度上限。-1 表示不限，必须为 -1 或 &gt;= API Key 当前的 ExclusiveQuota（独占额度）。不传表示不设置上限。单位说明如下：</p><ul><li>套餐类型为专业，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param integer $TPM <p>TPM（Tokens Per Minute）限制。不传使用套餐级别 TPM。必须 &gt;= 0 且 &lt;= 套餐 TPM。</p>
     * @param array $IpWhitelist <p>IP 白名单列表。支持 IPv4 单地址（如 1.2.3.4）和 IPv4 CIDR（如 10.0.0.0/24）格式。最多 50 个条目，不允许重复；不支持 IPv6 与 IP 范围。不传或传空数组表示不限制。批量创建时所有 APIKey 共用同一份白名单。</p>
     * @param boolean $OverageEnabled <p>是否开启超额按量计费。默认值为 false。开启后，若 APIKey 用量达到总额度上限，并且使用的模型已开启按量计费，将自动切换至按量计费模式，该部分将按所用模型的按量计费定价额外计费；未开启时用量达上限后调用报错。</p>
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("ApiKeyName",$param) and $param["ApiKeyName"] !== null) {
            $this->ApiKeyName = $param["ApiKeyName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AllowedModels",$param) and $param["AllowedModels"] !== null) {
            $this->AllowedModels = $param["AllowedModels"];
        }

        if (array_key_exists("ExclusiveQuota",$param) and $param["ExclusiveQuota"] !== null) {
            $this->ExclusiveQuota = $param["ExclusiveQuota"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = $param["IpWhitelist"];
        }

        if (array_key_exists("OverageEnabled",$param) and $param["OverageEnabled"] !== null) {
            $this->OverageEnabled = $param["OverageEnabled"];
        }
    }
}
