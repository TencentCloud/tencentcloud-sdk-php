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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于记录 Agent Bucket 的 Storage Source
 *
 * @method string getLibraryId() 获取<p>用于传入 AgentBucket 的 LibraryID</p>
 * @method void setLibraryId(string $LibraryId) 设置<p>用于传入 AgentBucket 的 LibraryID</p>
 * @method string getSpaceId() 获取<p>用于传入 AgentBucket 的 spaceId</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>用于传入 AgentBucket 的 spaceId</p>
 * @method string getAccessDomain() 获取<p>用于传入 AgentBucket 的 AccessDomain</p>
 * @method void setAccessDomain(string $AccessDomain) 设置<p>用于传入 AgentBucket 的 AccessDomain</p>
 */
class AgentBucketStorageSource extends AbstractModel
{
    /**
     * @var string <p>用于传入 AgentBucket 的 LibraryID</p>
     */
    public $LibraryId;

    /**
     * @var string <p>用于传入 AgentBucket 的 spaceId</p>
     */
    public $SpaceId;

    /**
     * @var string <p>用于传入 AgentBucket 的 AccessDomain</p>
     */
    public $AccessDomain;

    /**
     * @param string $LibraryId <p>用于传入 AgentBucket 的 LibraryID</p>
     * @param string $SpaceId <p>用于传入 AgentBucket 的 spaceId</p>
     * @param string $AccessDomain <p>用于传入 AgentBucket 的 AccessDomain</p>
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("AccessDomain",$param) and $param["AccessDomain"] !== null) {
            $this->AccessDomain = $param["AccessDomain"];
        }
    }
}
