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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权重路由配置
 *
 * @method string getModelServiceId() 获取<p>模型服务id</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务id</p>
 * @method integer getWeight() 获取<p>权重值</p>
 * @method void setWeight(integer $Weight) 设置<p>权重值</p>
 * @method string getStandardModelName() 获取<p>当前权重路由条目中 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
 * @method void setStandardModelName(string $StandardModelName) 设置<p>当前权重路由条目中 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
 */
class CloudNativeAPIGatewayLLMModelServiceRouteWeightedStrategy extends AbstractModel
{
    /**
     * @var string <p>模型服务id</p>
     */
    public $ModelServiceId;

    /**
     * @var integer <p>权重值</p>
     */
    public $Weight;

    /**
     * @var string <p>当前权重路由条目中 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
     */
    public $StandardModelName;

    /**
     * @param string $ModelServiceId <p>模型服务id</p>
     * @param integer $Weight <p>权重值</p>
     * @param string $StandardModelName <p>当前权重路由条目中 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
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
        if (array_key_exists("ModelServiceId",$param) and $param["ModelServiceId"] !== null) {
            $this->ModelServiceId = $param["ModelServiceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("StandardModelName",$param) and $param["StandardModelName"] !== null) {
            $this->StandardModelName = $param["StandardModelName"];
        }
    }
}
