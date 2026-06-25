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
 * 降级服务元素
 *
 * @method string getModelServiceId() 获取<p>模型服务 Id</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务 Id</p>
 * @method string getModelServiceName() 获取<p>模型服务名</p>
 * @method void setModelServiceName(string $ModelServiceName) 设置<p>模型服务名</p>
 */
class AIGWFallbackServiceItem extends AbstractModel
{
    /**
     * @var string <p>模型服务 Id</p>
     */
    public $ModelServiceId;

    /**
     * @var string <p>模型服务名</p>
     */
    public $ModelServiceName;

    /**
     * @param string $ModelServiceId <p>模型服务 Id</p>
     * @param string $ModelServiceName <p>模型服务名</p>
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

        if (array_key_exists("ModelServiceName",$param) and $param["ModelServiceName"] !== null) {
            $this->ModelServiceName = $param["ModelServiceName"];
        }
    }
}
