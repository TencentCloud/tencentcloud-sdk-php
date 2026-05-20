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
 * @method string getModelServiceId() 获取模型服务id
 * @method void setModelServiceId(string $ModelServiceId) 设置模型服务id
 * @method integer getWeight() 获取权重值
 * @method void setWeight(integer $Weight) 设置权重值
 */
class CloudNativeAPIGatewayLLMModelServiceRouteWeightedStrategy extends AbstractModel
{
    /**
     * @var string 模型服务id
     */
    public $ModelServiceId;

    /**
     * @var integer 权重值
     */
    public $Weight;

    /**
     * @param string $ModelServiceId 模型服务id
     * @param integer $Weight 权重值
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
    }
}
