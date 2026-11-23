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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSessionArtifactList请求参数结构体
 *
 * @method string getSessionId() 获取<p>会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
 * @method array getArtifactIds() 获取<p>需要删除的物料ID集合</p>
 * @method void setArtifactIds(array $ArtifactIds) 设置<p>需要删除的物料ID集合</p>
 */
class DeleteSessionArtifactListRequest extends AbstractModel
{
    /**
     * @var string <p>会话ID</p>
     */
    public $SessionId;

    /**
     * @var array <p>需要删除的物料ID集合</p>
     */
    public $ArtifactIds;

    /**
     * @param string $SessionId <p>会话ID</p>
     * @param array $ArtifactIds <p>需要删除的物料ID集合</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ArtifactIds",$param) and $param["ArtifactIds"] !== null) {
            $this->ArtifactIds = $param["ArtifactIds"];
        }
    }
}
