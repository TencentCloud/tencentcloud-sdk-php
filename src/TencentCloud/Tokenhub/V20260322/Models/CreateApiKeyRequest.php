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
 * CreateApiKey请求参数结构体
 *
 * @method string getApiKeyName() 获取<p>API 密钥名称，创建后不可修改。</p>
 * @method void setApiKeyName(string $ApiKeyName) 设置<p>API 密钥名称，创建后不可修改。</p>
 * @method string getPlatform() 获取<p>平台类型。取值：maas</p>
 * @method void setPlatform(string $Platform) 设置<p>平台类型。取值：maas</p>
 * @method string getBindType() 获取<p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>all： 全部模型和接入点</li><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
 * @method void setBindType(string $BindType) 设置<p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>all： 全部模型和接入点</li><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method string getStatus() 获取<p>初始状态。取值：enable（启用）、disable（禁用）。不传默认 enable。</p>
 * @method void setStatus(string $Status) 设置<p>初始状态。取值：enable（启用）、disable（禁用）。不传默认 enable。</p>
 * @method array getBindings() 获取<p>资源绑定列表（model 和 endpoint 混合），每项需显式指定 ResourceType。BindType 为 all 时不填；BindType 为model_custom_endpoint_custom时必填。</p>
 * @method void setBindings(array $Bindings) 设置<p>资源绑定列表（model 和 endpoint 混合），每项需显式指定 ResourceType。BindType 为 all 时不填；BindType 为model_custom_endpoint_custom时必填。</p>
 * @method array getIpWhitelist() 获取<p>IP 白名单列表。支持 IPv4（如 1.2.3.4）和 CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个条目，不支持重复。不传或传空数组表示不限制 IP。</p>
 * @method void setIpWhitelist(array $IpWhitelist) 设置<p>IP 白名单列表。支持 IPv4（如 1.2.3.4）和 CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个条目，不支持重复。不传或传空数组表示不限制 IP。</p>
 * @method array getQuotas() 获取<p>Token 限额配置多维度列表。可选，不传表示不开启限额。</p>
 * @method void setQuotas(array $Quotas) 设置<p>Token 限额配置多维度列表。可选，不传表示不开启限额。</p>
 */
class CreateApiKeyRequest extends AbstractModel
{
    /**
     * @var string <p>API 密钥名称，创建后不可修改。</p>
     */
    public $ApiKeyName;

    /**
     * @var string <p>平台类型。取值：maas</p>
     */
    public $Platform;

    /**
     * @var string <p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>all： 全部模型和接入点</li><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
     */
    public $BindType;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var string <p>初始状态。取值：enable（启用）、disable（禁用）。不传默认 enable。</p>
     */
    public $Status;

    /**
     * @var array <p>资源绑定列表（model 和 endpoint 混合），每项需显式指定 ResourceType。BindType 为 all 时不填；BindType 为model_custom_endpoint_custom时必填。</p>
     */
    public $Bindings;

    /**
     * @var array <p>IP 白名单列表。支持 IPv4（如 1.2.3.4）和 CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个条目，不支持重复。不传或传空数组表示不限制 IP。</p>
     */
    public $IpWhitelist;

    /**
     * @var array <p>Token 限额配置多维度列表。可选，不传表示不开启限额。</p>
     */
    public $Quotas;

    /**
     * @param string $ApiKeyName <p>API 密钥名称，创建后不可修改。</p>
     * @param string $Platform <p>平台类型。取值：maas</p>
     * @param string $BindType <p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>all： 全部模型和接入点</li><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
     * @param string $Remark <p>备注信息</p>
     * @param string $Status <p>初始状态。取值：enable（启用）、disable（禁用）。不传默认 enable。</p>
     * @param array $Bindings <p>资源绑定列表（model 和 endpoint 混合），每项需显式指定 ResourceType。BindType 为 all 时不填；BindType 为model_custom_endpoint_custom时必填。</p>
     * @param array $IpWhitelist <p>IP 白名单列表。支持 IPv4（如 1.2.3.4）和 CIDR（如 10.0.0.0/24）格式，IPv6暂不支持。最多 50 个条目，不支持重复。不传或传空数组表示不限制 IP。</p>
     * @param array $Quotas <p>Token 限额配置多维度列表。可选，不传表示不开启限额。</p>
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
        if (array_key_exists("ApiKeyName",$param) and $param["ApiKeyName"] !== null) {
            $this->ApiKeyName = $param["ApiKeyName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Bindings",$param) and $param["Bindings"] !== null) {
            $this->Bindings = [];
            foreach ($param["Bindings"] as $key => $value){
                $obj = new BindingItem();
                $obj->deserialize($value);
                array_push($this->Bindings, $obj);
            }
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = $param["IpWhitelist"];
        }

        if (array_key_exists("Quotas",$param) and $param["Quotas"] !== null) {
            $this->Quotas = [];
            foreach ($param["Quotas"] as $key => $value){
                $obj = new QuotaCreateItem();
                $obj->deserialize($value);
                array_push($this->Quotas, $obj);
            }
        }
    }
}
