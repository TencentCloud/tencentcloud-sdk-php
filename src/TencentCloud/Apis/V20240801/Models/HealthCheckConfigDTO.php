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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HealthCheckConfigDTO
 *
 * @method string getHealthCheckPath() 获取健康检查路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckPath(string $HealthCheckPath) 设置健康检查路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValidHealthCheckStatusCode() 获取状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidHealthCheckStatusCode(array $ValidHealthCheckStatusCode) 设置状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHealthCheckTimeout() 获取请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckTimeout(integer $HealthCheckTimeout) 设置请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class HealthCheckConfigDTO extends AbstractModel
{
    /**
     * @var string 健康检查路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckPath;

    /**
     * @var array 状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidHealthCheckStatusCode;

    /**
     * @var integer 请求的超时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckTimeout;

    /**
     * @param string $HealthCheckPath 健康检查路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ValidHealthCheckStatusCode 状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HealthCheckTimeout 请求的超时时间
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
        if (array_key_exists("HealthCheckPath",$param) and $param["HealthCheckPath"] !== null) {
            $this->HealthCheckPath = $param["HealthCheckPath"];
        }

        if (array_key_exists("ValidHealthCheckStatusCode",$param) and $param["ValidHealthCheckStatusCode"] !== null) {
            $this->ValidHealthCheckStatusCode = $param["ValidHealthCheckStatusCode"];
        }

        if (array_key_exists("HealthCheckTimeout",$param) and $param["HealthCheckTimeout"] !== null) {
            $this->HealthCheckTimeout = $param["HealthCheckTimeout"];
        }
    }
}
