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
 * API 密钥详情
 *
 * @method string getApiKeyId() 获取API 密钥 ID。
 * @method void setApiKeyId(string $ApiKeyId) 设置API 密钥 ID。
 * @method string getName() 获取名称。
 * @method void setName(string $Name) 设置名称。
 * @method string getApiKey() 获取API 密钥值。接口返回脱敏值
 * @method void setApiKey(string $ApiKey) 设置API 密钥值。接口返回脱敏值
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method string getPlatform() 获取平台类型。当前支持填值：maas
 * @method void setPlatform(string $Platform) 设置平台类型。当前支持填值：maas
 * @method string getUin() 获取主账号。
 * @method void setUin(string $Uin) 设置主账号。
 * @method string getSubUin() 获取子账号。
 * @method void setSubUin(string $SubUin) 设置子账号。
 * @method string getStatus() 获取状态。取值：enable（启用）、disable（禁用）。
 * @method void setStatus(string $Status) 设置状态。取值：enable（启用）、disable（禁用）。
 * @method string getBindType() 获取绑定类型。取值：all（全部模型和服务）、model_all_endpoint_custom（全部模型+自定义服务）、model_custom_endpoint_all（自定义模型+全部服务）、model_custom_endpoint_custom（自定义模型+自定义服务）。
 * @method void setBindType(string $BindType) 设置绑定类型。取值：all（全部模型和服务）、model_all_endpoint_custom（全部模型+自定义服务）、model_custom_endpoint_all（自定义模型+全部服务）、model_custom_endpoint_custom（自定义模型+自定义服务）。
 * @method string getCreateTime() 获取创建时间。格式：YYYY-MM-DD HH:mm:ss。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。格式：YYYY-MM-DD HH:mm:ss。
 * @method string getUpdateTime() 获取更新时间。格式：YYYY-MM-DD HH:mm:ss。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。格式：YYYY-MM-DD HH:mm:ss。
 * @method string getAppId() 获取应用 ID。
 * @method void setAppId(string $AppId) 设置应用 ID。
 * @method boolean getEditable() 获取是否可编辑。true 表示可编辑，false 表示不可编辑。
 * @method void setEditable(boolean $Editable) 设置是否可编辑。true 表示可编辑，false 表示不可编辑。
 * @method array getBindingItems() 获取绑定资源列表，区分 endpoint 和 model 类型。
 * @method void setBindingItems(array $BindingItems) 设置绑定资源列表，区分 endpoint 和 model 类型。
 * @method array getIpWhitelist() 获取IP 白名单列表。支持 IPv4 和 CIDR 格式。空数组表示不限制 IP。
 * @method void setIpWhitelist(array $IpWhitelist) 设置IP 白名单列表。支持 IPv4 和 CIDR 格式。空数组表示不限制 IP。
 * @method string getCreator() 获取当Platform为maas时该字段为空
 * @method void setCreator(string $Creator) 设置当Platform为maas时该字段为空
 */
class ApiKeyDetail extends AbstractModel
{
    /**
     * @var string API 密钥 ID。
     */
    public $ApiKeyId;

    /**
     * @var string 名称。
     */
    public $Name;

    /**
     * @var string API 密钥值。接口返回脱敏值
     */
    public $ApiKey;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var string 平台类型。当前支持填值：maas
     */
    public $Platform;

    /**
     * @var string 主账号。
     */
    public $Uin;

    /**
     * @var string 子账号。
     */
    public $SubUin;

    /**
     * @var string 状态。取值：enable（启用）、disable（禁用）。
     */
    public $Status;

    /**
     * @var string 绑定类型。取值：all（全部模型和服务）、model_all_endpoint_custom（全部模型+自定义服务）、model_custom_endpoint_all（自定义模型+全部服务）、model_custom_endpoint_custom（自定义模型+自定义服务）。
     */
    public $BindType;

    /**
     * @var string 创建时间。格式：YYYY-MM-DD HH:mm:ss。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。格式：YYYY-MM-DD HH:mm:ss。
     */
    public $UpdateTime;

    /**
     * @var string 应用 ID。
     */
    public $AppId;

    /**
     * @var boolean 是否可编辑。true 表示可编辑，false 表示不可编辑。
     */
    public $Editable;

    /**
     * @var array 绑定资源列表，区分 endpoint 和 model 类型。
     */
    public $BindingItems;

    /**
     * @var array IP 白名单列表。支持 IPv4 和 CIDR 格式。空数组表示不限制 IP。
     */
    public $IpWhitelist;

    /**
     * @var string 当Platform为maas时该字段为空
     */
    public $Creator;

    /**
     * @param string $ApiKeyId API 密钥 ID。
     * @param string $Name 名称。
     * @param string $ApiKey API 密钥值。接口返回脱敏值
     * @param string $Remark 备注。
     * @param string $Platform 平台类型。当前支持填值：maas
     * @param string $Uin 主账号。
     * @param string $SubUin 子账号。
     * @param string $Status 状态。取值：enable（启用）、disable（禁用）。
     * @param string $BindType 绑定类型。取值：all（全部模型和服务）、model_all_endpoint_custom（全部模型+自定义服务）、model_custom_endpoint_all（自定义模型+全部服务）、model_custom_endpoint_custom（自定义模型+自定义服务）。
     * @param string $CreateTime 创建时间。格式：YYYY-MM-DD HH:mm:ss。
     * @param string $UpdateTime 更新时间。格式：YYYY-MM-DD HH:mm:ss。
     * @param string $AppId 应用 ID。
     * @param boolean $Editable 是否可编辑。true 表示可编辑，false 表示不可编辑。
     * @param array $BindingItems 绑定资源列表，区分 endpoint 和 model 类型。
     * @param array $IpWhitelist IP 白名单列表。支持 IPv4 和 CIDR 格式。空数组表示不限制 IP。
     * @param string $Creator 当Platform为maas时该字段为空
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }

        if (array_key_exists("BindingItems",$param) and $param["BindingItems"] !== null) {
            $this->BindingItems = [];
            foreach ($param["BindingItems"] as $key => $value){
                $obj = new BindingItem();
                $obj->deserialize($value);
                array_push($this->BindingItems, $obj);
            }
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = $param["IpWhitelist"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
