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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>模型提供商基本信息（已弃用，请使用 ModelProviderProfile）</p>
 *
 * @method string getAlias() 获取<p>模型提供商别名</p>
 * @method void setAlias(string $Alias) 设置<p>模型提供商别名</p>
 * @method string getName() 获取<p>模型提供商名称</p>
 * @method void setName(string $Name) 设置<p>模型提供商名称</p>
 * @method integer getProviderType() 获取<p>模型提供商类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>自有提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>自定义模型提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>第三方模型提供商</td></tr></table>
 * @method void setProviderType(integer $ProviderType) 设置<p>模型提供商类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>自有提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>自定义模型提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>第三方模型提供商</td></tr></table>
 */
class ModelProviderBasic extends AbstractModel
{
    /**
     * @var string <p>模型提供商别名</p>
     */
    public $Alias;

    /**
     * @var string <p>模型提供商名称</p>
     */
    public $Name;

    /**
     * @var integer <p>模型提供商类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>自有提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>自定义模型提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>第三方模型提供商</td></tr></table>
     */
    public $ProviderType;

    /**
     * @param string $Alias <p>模型提供商别名</p>
     * @param string $Name <p>模型提供商名称</p>
     * @param integer $ProviderType <p>模型提供商类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_PROVIDER_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_PROVIDER_TYPE_SELF</td><td>1</td><td>自有提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_CUSTOM</td><td>2</td><td>自定义模型提供商</td></tr><tr><td>MODEL_PROVIDER_TYPE_THIRD</td><td>3</td><td>第三方模型提供商</td></tr></table>
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }
    }
}
