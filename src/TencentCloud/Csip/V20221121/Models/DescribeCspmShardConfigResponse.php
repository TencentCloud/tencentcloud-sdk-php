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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCspmShardConfig返回参数结构体
 *
 * @method integer getShardFromAppID() 获取<p>共享配额来源appid</p>
 * @method void setShardFromAppID(integer $ShardFromAppID) 设置<p>共享配额来源appid</p>
 * @method integer getAutoShardStatus() 获取<p>自动共享开关状态</p>
 * @method void setAutoShardStatus(integer $AutoShardStatus) 设置<p>自动共享开关状态</p>
 * @method array getShardAppIDs() 获取<p>已被共享配额的目标appid列表</p>
 * @method void setShardAppIDs(array $ShardAppIDs) 设置<p>已被共享配额的目标appid列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCspmShardConfigResponse extends AbstractModel
{
    /**
     * @var integer <p>共享配额来源appid</p>
     */
    public $ShardFromAppID;

    /**
     * @var integer <p>自动共享开关状态</p>
     */
    public $AutoShardStatus;

    /**
     * @var array <p>已被共享配额的目标appid列表</p>
     */
    public $ShardAppIDs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ShardFromAppID <p>共享配额来源appid</p>
     * @param integer $AutoShardStatus <p>自动共享开关状态</p>
     * @param array $ShardAppIDs <p>已被共享配额的目标appid列表</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ShardFromAppID",$param) and $param["ShardFromAppID"] !== null) {
            $this->ShardFromAppID = $param["ShardFromAppID"];
        }

        if (array_key_exists("AutoShardStatus",$param) and $param["AutoShardStatus"] !== null) {
            $this->AutoShardStatus = $param["AutoShardStatus"];
        }

        if (array_key_exists("ShardAppIDs",$param) and $param["ShardAppIDs"] !== null) {
            $this->ShardAppIDs = $param["ShardAppIDs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
