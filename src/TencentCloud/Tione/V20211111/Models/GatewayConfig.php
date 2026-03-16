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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述网关相关配置
 *
 * @method string getGatewayType() 获取网关类型
 * @method void setGatewayType(string $GatewayType) 设置网关类型
 * @method string getSchedulingAlgorithm() 获取网关调度算法：轮询、一致性哈希等
 * @method void setSchedulingAlgorithm(string $SchedulingAlgorithm) 设置网关调度算法：轮询、一致性哈希等
 * @method string getHashHeaderKey() 获取一致性哈希使用的Header字段名
 * @method void setHashHeaderKey(string $HashHeaderKey) 设置一致性哈希使用的Header字段名
 */
class GatewayConfig extends AbstractModel
{
    /**
     * @var string 网关类型
     */
    public $GatewayType;

    /**
     * @var string 网关调度算法：轮询、一致性哈希等
     */
    public $SchedulingAlgorithm;

    /**
     * @var string 一致性哈希使用的Header字段名
     */
    public $HashHeaderKey;

    /**
     * @param string $GatewayType 网关类型
     * @param string $SchedulingAlgorithm 网关调度算法：轮询、一致性哈希等
     * @param string $HashHeaderKey 一致性哈希使用的Header字段名
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
        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("SchedulingAlgorithm",$param) and $param["SchedulingAlgorithm"] !== null) {
            $this->SchedulingAlgorithm = $param["SchedulingAlgorithm"];
        }

        if (array_key_exists("HashHeaderKey",$param) and $param["HashHeaderKey"] !== null) {
            $this->HashHeaderKey = $param["HashHeaderKey"];
        }
    }
}
