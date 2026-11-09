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
 * ModifyApiKeyBindings请求参数结构体
 *
 * @method string getApiKeyId() 获取<p>API 密钥 ID。</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>API 密钥 ID。</p>
 * @method string getPlatform() 获取<p>平台类型。取值：maas。</p>
 * @method void setPlatform(string $Platform) 设置<p>平台类型。取值：maas。</p>
 * @method string getBindType() 获取<p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
 * @method void setBindType(string $BindType) 设置<p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
 * @method array getBindings() 获取<p>修改后的apikey的模型或服务绑定列表</p>
 * @method void setBindings(array $Bindings) 设置<p>修改后的apikey的模型或服务绑定列表</p>
 */
class ModifyApiKeyBindingsRequest extends AbstractModel
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
     * @var string <p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
     */
    public $BindType;

    /**
     * @var array <p>修改后的apikey的模型或服务绑定列表</p>
     */
    public $Bindings;

    /**
     * @param string $ApiKeyId <p>API 密钥 ID。</p>
     * @param string $Platform <p>平台类型。取值：maas。</p>
     * @param string $BindType <p>绑定类型。取值：all（全部模型和接入点）、model_custom_endpoint_custom（自定义模型+自定义接入点）。</p><p>枚举值：</p><ul><li>model_custom_endpoint_custom： 自定义模型+自定义接入点</li></ul>
     * @param array $Bindings <p>修改后的apikey的模型或服务绑定列表</p>
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

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Bindings",$param) and $param["Bindings"] !== null) {
            $this->Bindings = [];
            foreach ($param["Bindings"] as $key => $value){
                $obj = new BindingItem();
                $obj->deserialize($value);
                array_push($this->Bindings, $obj);
            }
        }
    }
}
