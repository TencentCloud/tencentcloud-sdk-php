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
 * 按模型标识聚合的信息
 *
 * @method string getModelName() 获取<p>模型标识显示名称（优先使用 model_alias，否则使用 model_name）</p>
 * @method void setModelName(string $ModelName) 设置<p>模型标识显示名称（优先使用 model_alias，否则使用 model_name）</p>
 * @method array getServiceProviders() 获取<p>关联的服务商列表</p>
 * @method void setServiceProviders(array $ServiceProviders) 设置<p>关联的服务商列表</p>
 * @method array getInputModalitiesUnion() 获取<p>该模型最大可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 * @method void setInputModalitiesUnion(array $InputModalitiesUnion) 设置<p>该模型最大可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 */
class ModelNameAggregatedItem extends AbstractModel
{
    /**
     * @var string <p>模型标识显示名称（优先使用 model_alias，否则使用 model_name）</p>
     */
    public $ModelName;

    /**
     * @var array <p>关联的服务商列表</p>
     */
    public $ServiceProviders;

    /**
     * @var array <p>该模型最大可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
     */
    public $InputModalitiesUnion;

    /**
     * @param string $ModelName <p>模型标识显示名称（优先使用 model_alias，否则使用 model_name）</p>
     * @param array $ServiceProviders <p>关联的服务商列表</p>
     * @param array $InputModalitiesUnion <p>该模型最大可支持的输入多模态能力列表。</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ServiceProviders",$param) and $param["ServiceProviders"] !== null) {
            $this->ServiceProviders = [];
            foreach ($param["ServiceProviders"] as $key => $value){
                $obj = new ServiceProviderItem();
                $obj->deserialize($value);
                array_push($this->ServiceProviders, $obj);
            }
        }

        if (array_key_exists("InputModalitiesUnion",$param) and $param["InputModalitiesUnion"] !== null) {
            $this->InputModalitiesUnion = $param["InputModalitiesUnion"];
        }
    }
}
