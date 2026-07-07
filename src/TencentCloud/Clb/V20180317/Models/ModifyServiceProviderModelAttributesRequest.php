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
 * ModifyServiceProviderModelAttributes请求参数结构体
 *
 * @method string getServiceProviderId() 获取<p>BYOK 实例 ID</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK 实例 ID</p>
 * @method string getModelName() 获取<p>待修改的模型的名称（原始模型名称）</p>
 * @method void setModelName(string $ModelName) 设置<p>待修改的模型的名称（原始模型名称）</p>
 * @method array getInputModalities() 获取<p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 * @method void setInputModalities(array $InputModalities) 设置<p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 */
class ModifyServiceProviderModelAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>BYOK 实例 ID</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>待修改的模型的名称（原始模型名称）</p>
     */
    public $ModelName;

    /**
     * @var array <p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
     */
    public $InputModalities;

    /**
     * @param string $ServiceProviderId <p>BYOK 实例 ID</p>
     * @param string $ModelName <p>待修改的模型的名称（原始模型名称）</p>
     * @param array $InputModalities <p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
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

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("InputModalities",$param) and $param["InputModalities"] !== null) {
            $this->InputModalities = $param["InputModalities"];
        }
    }
}
