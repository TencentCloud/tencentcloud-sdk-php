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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGrafanaIntegrations请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getIntegrationId() 获取<p>集成 ID</p>
 * @method void setIntegrationId(string $IntegrationId) 设置<p>集成 ID</p>
 * @method string getKind() 获取<p>类型</p>
 * @method void setKind(string $Kind) 设置<p>类型</p>
 */
class DescribeGrafanaIntegrationsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>集成 ID</p>
     */
    public $IntegrationId;

    /**
     * @var string <p>类型</p>
     */
    public $Kind;

    /**
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $IntegrationId <p>集成 ID</p>
     * @param string $Kind <p>类型</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IntegrationId",$param) and $param["IntegrationId"] !== null) {
            $this->IntegrationId = $param["IntegrationId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}
