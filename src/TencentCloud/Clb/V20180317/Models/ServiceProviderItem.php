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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务商详情
 *
 * @method string getServiceProviderId() 获取<p>服务提供商 ID</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>服务提供商 ID</p>
 * @method string getServiceProviderName() 获取<p>用户自定义服务提供商名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>用户自定义服务提供商名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelProvider() 获取<p>模型供应商</p>
 * @method void setModelProvider(string $ModelProvider) 设置<p>模型供应商</p>
 * @method array getInputModalities() 获取<p>该byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
 * @method void setInputModalities(array $InputModalities) 设置<p>该byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
 */
class ServiceProviderItem extends AbstractModel
{
    /**
     * @var string <p>服务提供商 ID</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>用户自定义服务提供商名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceProviderName;

    /**
     * @var string <p>模型供应商</p>
     */
    public $ModelProvider;

    /**
     * @var array <p>该byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
     */
    public $InputModalities;

    /**
     * @param string $ServiceProviderId <p>服务提供商 ID</p>
     * @param string $ServiceProviderName <p>用户自定义服务提供商名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelProvider <p>模型供应商</p>
     * @param array $InputModalities <p>该byok实例下该模型可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul>
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
        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }

        if (array_key_exists("ModelProvider",$param) and $param["ModelProvider"] !== null) {
            $this->ModelProvider = $param["ModelProvider"];
        }

        if (array_key_exists("InputModalities",$param) and $param["InputModalities"] !== null) {
            $this->InputModalities = $param["InputModalities"];
        }
    }
}
