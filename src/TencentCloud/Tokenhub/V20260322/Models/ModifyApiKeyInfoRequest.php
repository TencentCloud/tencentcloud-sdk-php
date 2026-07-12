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
 * ModifyApiKeyInfo请求参数结构体
 *
 * @method string getApiKeyId() 获取<p>API 密钥 ID。</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>API 密钥 ID。</p>
 * @method string getPlatform() 获取<p>平台类型。取值：maas。</p>
 * @method void setPlatform(string $Platform) 设置<p>平台类型。取值：maas。</p>
 * @method string getApiKeyName() 获取<p>API 密钥名称。最大 128 字符。不传表示不修改。</p>
 * @method void setApiKeyName(string $ApiKeyName) 设置<p>API 密钥名称。最大 128 字符。不传表示不修改。</p>
 * @method string getRemark() 获取<p>备注。</p>
 * @method void setRemark(string $Remark) 设置<p>备注。</p>
 * @method array getIpWhitelist() 获取<p>IP 白名单列表。支持 IPv4（如 1.2.3.4）、CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个，不支持重复。传入空数组表示清空白名单（不限制 IP）。不传表示不修改。</p>
 * @method void setIpWhitelist(array $IpWhitelist) 设置<p>IP 白名单列表。支持 IPv4（如 1.2.3.4）、CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个，不支持重复。传入空数组表示清空白名单（不限制 IP）。不传表示不修改。</p>
 * @method array getQuotasDesired() 获取<p>【修改限额推荐使用QuotaDesired参数】Token 限额期望状态。可选，不传表示不修改，传入空数组表示清空。和 Quotas（Token限额配置）字段互斥，不支持同时传入</p>
 * @method void setQuotasDesired(array $QuotasDesired) 设置<p>【修改限额推荐使用QuotaDesired参数】Token 限额期望状态。可选，不传表示不修改，传入空数组表示清空。和 Quotas（Token限额配置）字段互斥，不支持同时传入</p>
 */
class ModifyApiKeyInfoRequest extends AbstractModel
{
    /**
     * @var string <p>API 密钥 ID。</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>平台类型。取值：maas。</p>
     */
    public $Platform;

    /**
     * @var string <p>API 密钥名称。最大 128 字符。不传表示不修改。</p>
     */
    public $ApiKeyName;

    /**
     * @var string <p>备注。</p>
     */
    public $Remark;

    /**
     * @var array <p>IP 白名单列表。支持 IPv4（如 1.2.3.4）、CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个，不支持重复。传入空数组表示清空白名单（不限制 IP）。不传表示不修改。</p>
     */
    public $IpWhitelist;

    /**
     * @var array <p>【修改限额推荐使用QuotaDesired参数】Token 限额期望状态。可选，不传表示不修改，传入空数组表示清空。和 Quotas（Token限额配置）字段互斥，不支持同时传入</p>
     */
    public $QuotasDesired;

    /**
     * @param string $ApiKeyId <p>API 密钥 ID。</p>
     * @param string $Platform <p>平台类型。取值：maas。</p>
     * @param string $ApiKeyName <p>API 密钥名称。最大 128 字符。不传表示不修改。</p>
     * @param string $Remark <p>备注。</p>
     * @param array $IpWhitelist <p>IP 白名单列表。支持 IPv4（如 1.2.3.4）、CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个，不支持重复。传入空数组表示清空白名单（不限制 IP）。不传表示不修改。</p>
     * @param array $QuotasDesired <p>【修改限额推荐使用QuotaDesired参数】Token 限额期望状态。可选，不传表示不修改，传入空数组表示清空。和 Quotas（Token限额配置）字段互斥，不支持同时传入</p>
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
        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ApiKeyName",$param) and $param["ApiKeyName"] !== null) {
            $this->ApiKeyName = $param["ApiKeyName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = $param["IpWhitelist"];
        }

        if (array_key_exists("QuotasDesired",$param) and $param["QuotasDesired"] !== null) {
            $this->QuotasDesired = [];
            foreach ($param["QuotasDesired"] as $key => $value){
                $obj = new QuotasDesired();
                $obj->deserialize($value);
                array_push($this->QuotasDesired, $obj);
            }
        }
    }
}
