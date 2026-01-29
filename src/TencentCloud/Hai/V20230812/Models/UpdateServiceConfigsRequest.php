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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateServiceConfigs请求参数结构体
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method integer getTargetReplicas() 获取期望副本数
 * @method void setTargetReplicas(integer $TargetReplicas) 设置期望副本数
 */
class UpdateServiceConfigsRequest extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var integer 期望副本数
     */
    public $TargetReplicas;

    /**
     * @param string $ServiceId 服务ID
     * @param integer $TargetReplicas 期望副本数
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }
    }
}
