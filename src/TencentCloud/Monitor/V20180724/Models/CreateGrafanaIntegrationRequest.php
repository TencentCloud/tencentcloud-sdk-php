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
 * CreateGrafanaIntegration请求参数结构体
 *
 * @method string getInstanceId() 获取<p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
 * @method string getKind() 获取<p>集成类型(接口DescribeGrafanaIntegrationOverviews返回的集成信息中的Code字段)</p>
 * @method void setKind(string $Kind) 设置<p>集成类型(接口DescribeGrafanaIntegrationOverviews返回的集成信息中的Code字段)</p>
 * @method string getContent() 获取<p>集成配置</p>
 * @method void setContent(string $Content) 设置<p>集成配置</p>
 */
class CreateGrafanaIntegrationRequest extends AbstractModel
{
    /**
     * @var string <p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
     */
    public $InstanceId;

    /**
     * @var string <p>集成类型(接口DescribeGrafanaIntegrationOverviews返回的集成信息中的Code字段)</p>
     */
    public $Kind;

    /**
     * @var string <p>集成配置</p>
     */
    public $Content;

    /**
     * @param string $InstanceId <p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
     * @param string $Kind <p>集成类型(接口DescribeGrafanaIntegrationOverviews返回的集成信息中的Code字段)</p>
     * @param string $Content <p>集成配置</p>
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
