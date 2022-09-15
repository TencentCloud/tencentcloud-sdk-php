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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGrafanaIntegration请求参数结构体
 *
 * @method string getIntegrationId() 获取集成 ID
 * @method void setIntegrationId(string $IntegrationId) 设置集成 ID
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getKind() 获取集成类型
 * @method void setKind(string $Kind) 设置集成类型
 * @method string getContent() 获取集成内容
 * @method void setContent(string $Content) 设置集成内容
 */
class UpdateGrafanaIntegrationRequest extends AbstractModel
{
    /**
     * @var string 集成 ID
     */
    public $IntegrationId;

    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 集成类型
     */
    public $Kind;

    /**
     * @var string 集成内容
     */
    public $Content;

    /**
     * @param string $IntegrationId 集成 ID
     * @param string $InstanceId 实例 ID
     * @param string $Kind 集成类型
     * @param string $Content 集成内容
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
        if (array_key_exists("IntegrationId",$param) and $param["IntegrationId"] !== null) {
            $this->IntegrationId = $param["IntegrationId"];
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
