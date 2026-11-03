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
 * 自定义安全护栏资源同步失败信息
 *
 * @method string getResourceType() 获取<p>资源类型；策略级错误时为 policy</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型；策略级错误时为 policy</p>
 * @method string getResourceId() 获取<p>资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源 ID</p>
 * @method string getRouteId() 获取<p>底层 Kong Route ID</p>
 * @method void setRouteId(string $RouteId) 设置<p>底层 Kong Route ID</p>
 * @method string getError() 获取<p>错误摘要</p>
 * @method void setError(string $Error) 设置<p>错误摘要</p>
 */
class CustomGuardrailSyncFailure extends AbstractModel
{
    /**
     * @var string <p>资源类型；策略级错误时为 policy</p>
     */
    public $ResourceType;

    /**
     * @var string <p>资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>底层 Kong Route ID</p>
     */
    public $RouteId;

    /**
     * @var string <p>错误摘要</p>
     */
    public $Error;

    /**
     * @param string $ResourceType <p>资源类型；策略级错误时为 policy</p>
     * @param string $ResourceId <p>资源 ID</p>
     * @param string $RouteId <p>底层 Kong Route ID</p>
     * @param string $Error <p>错误摘要</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
