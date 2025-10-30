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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopMigrationTask返回参数结构体
 *
 * @method string getTaskId() 获取迁移任务Id
 * @method void setTaskId(string $TaskId) 设置迁移任务Id
 * @method integer getStatus() 获取迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中
 * @method void setStatus(integer $Status) 设置迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class StopMigrationTaskResponse extends AbstractModel
{
    /**
     * @var string 迁移任务Id
     */
    public $TaskId;

    /**
     * @var integer 迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 迁移任务Id
     * @param integer $Status 迁移状态。0: 已完成；1: 创建中；2: 运行中；3: 终止中；4: 已终止；5: 创建失败；6: 运行失败；7: 结束中；8: 删除中；9: 等待中
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
