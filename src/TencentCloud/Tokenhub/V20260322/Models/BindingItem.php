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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定资源项
 *
 * @method string getResourceId() 获取资源 ID（模型 ID 或服务 ID）。
 * @method void setResourceId(string $ResourceId) 设置资源 ID（模型 ID 或服务 ID）。
 * @method string getResourceType() 获取资源类型。取值：endpoint（服务）、model（模型）。
 * @method void setResourceType(string $ResourceType) 设置资源类型。取值：endpoint（服务）、model（模型）。
 * @method string getStatus() 获取资源状态
 * @method void setStatus(string $Status) 设置资源状态
 */
class BindingItem extends AbstractModel
{
    /**
     * @var string 资源 ID（模型 ID 或服务 ID）。
     */
    public $ResourceId;

    /**
     * @var string 资源类型。取值：endpoint（服务）、model（模型）。
     */
    public $ResourceType;

    /**
     * @var string 资源状态
     */
    public $Status;

    /**
     * @param string $ResourceId 资源 ID（模型 ID 或服务 ID）。
     * @param string $ResourceType 资源类型。取值：endpoint（服务）、model（模型）。
     * @param string $Status 资源状态
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
