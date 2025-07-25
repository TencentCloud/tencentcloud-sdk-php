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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMicroservice请求参数结构体
 *
 * @method string getMicroserviceId() 获取微服务 ID
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务 ID
 * @method string getMicroserviceDesc() 获取微服务备注信息
 * @method void setMicroserviceDesc(string $MicroserviceDesc) 设置微服务备注信息
 */
class ModifyMicroserviceRequest extends AbstractModel
{
    /**
     * @var string 微服务 ID
     */
    public $MicroserviceId;

    /**
     * @var string 微服务备注信息
     */
    public $MicroserviceDesc;

    /**
     * @param string $MicroserviceId 微服务 ID
     * @param string $MicroserviceDesc 微服务备注信息
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
        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("MicroserviceDesc",$param) and $param["MicroserviceDesc"] !== null) {
            $this->MicroserviceDesc = $param["MicroserviceDesc"];
        }
    }
}
