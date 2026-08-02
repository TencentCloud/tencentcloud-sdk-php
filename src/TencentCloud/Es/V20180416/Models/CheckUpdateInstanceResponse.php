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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckUpdateInstance返回参数结构体
 *
 * @method boolean getAllowUpdate() 获取是否允许变配操作
 * @method void setAllowUpdate(boolean $AllowUpdate) 设置是否允许变配操作
 * @method string getErrMsg() 获取不允许变配的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置不允许变配的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeedSetShards() 获取是否需要设置分片迁移并发相关参数
 * @method void setNeedSetShards(boolean $NeedSetShards) 设置是否需要设置分片迁移并发相关参数
 * @method boolean getEnableScheduleRecoverGroupTask() 获取是否需要开启置放群组异步任务
 * @method void setEnableScheduleRecoverGroupTask(boolean $EnableScheduleRecoverGroupTask) 设置是否需要开启置放群组异步任务
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckUpdateInstanceResponse extends AbstractModel
{
    /**
     * @var boolean 是否允许变配操作
     */
    public $AllowUpdate;

    /**
     * @var string 不允许变配的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var boolean 是否需要设置分片迁移并发相关参数
     */
    public $NeedSetShards;

    /**
     * @var boolean 是否需要开启置放群组异步任务
     */
    public $EnableScheduleRecoverGroupTask;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $AllowUpdate 是否允许变配操作
     * @param string $ErrMsg 不允许变配的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NeedSetShards 是否需要设置分片迁移并发相关参数
     * @param boolean $EnableScheduleRecoverGroupTask 是否需要开启置放群组异步任务
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
        if (array_key_exists("AllowUpdate",$param) and $param["AllowUpdate"] !== null) {
            $this->AllowUpdate = $param["AllowUpdate"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("NeedSetShards",$param) and $param["NeedSetShards"] !== null) {
            $this->NeedSetShards = $param["NeedSetShards"];
        }

        if (array_key_exists("EnableScheduleRecoverGroupTask",$param) and $param["EnableScheduleRecoverGroupTask"] !== null) {
            $this->EnableScheduleRecoverGroupTask = $param["EnableScheduleRecoverGroupTask"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
