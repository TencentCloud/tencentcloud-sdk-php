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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权重路由配置
 *
 * @method string getModelServiceId() 获取<p>模型服务id</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务id</p>
 * @method integer getWeight() 获取<p>权重值</p>
 * @method void setWeight(integer $Weight) 设置<p>权重值</p>
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
     * @param string $ModelServiceId <p>模型服务id</p>
     * @param integer $Weight <p>权重值</p>
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
