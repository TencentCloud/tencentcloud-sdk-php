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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDataAgentSession请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getSessionId() 获取<p>会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
 * @method array getSessionIds() 获取<p>批量删除 会话id 列表</p>
 * @method void setSessionIds(array $SessionIds) 设置<p>批量删除 会话id 列表</p>
 * @method SurfaceContext getSurfaceContext() 获取<p>上下文</p>
 * @method void setSurfaceContext(SurfaceContext $SurfaceContext) 设置<p>上下文</p>
 */
class DeleteDataAgentSessionRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>会话ID</p>
     */
    public $SessionId;

    /**
     * @var array <p>批量删除 会话id 列表</p>
     */
    public $SessionIds;

    /**
     * @var SurfaceContext <p>上下文</p>
     */
    public $SurfaceContext;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $SessionId <p>会话ID</p>
     * @param array $SessionIds <p>批量删除 会话id 列表</p>
     * @param SurfaceContext $SurfaceContext <p>上下文</p>
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionIds",$param) and $param["SessionIds"] !== null) {
            $this->SessionIds = $param["SessionIds"];
        }

        if (array_key_exists("SurfaceContext",$param) and $param["SurfaceContext"] !== null) {
            $this->SurfaceContext = new SurfaceContext();
            $this->SurfaceContext->deserialize($param["SurfaceContext"]);
        }
    }
}
