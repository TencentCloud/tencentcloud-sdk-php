<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站健康检查，源站状态信息
 *
 * @method string getStatus() 获取healthy: 健康，unhealthy: 不健康，process: 探测中
 * @method void setStatus(string $Status) 设置healthy: 健康，unhealthy: 不健康，process: 探测中
 * @method array getHost() 获取host列表，源站组不健康时存在值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(array $Host) 设置host列表，源站组不健康时存在值
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginCheckOriginStatus extends AbstractModel
{
    /**
     * @var string healthy: 健康，unhealthy: 不健康，process: 探测中
     */
    public $Status;

    /**
     * @var array host列表，源站组不健康时存在值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @param string $Status healthy: 健康，unhealthy: 不健康，process: 探测中
     * @param array $Host host列表，源站组不健康时存在值
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
