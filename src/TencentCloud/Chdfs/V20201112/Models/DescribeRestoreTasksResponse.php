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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRestoreTasks返回参数结构体
 *
 * @method array getRestoreTasks() 获取回热任务列表
 * @method void setRestoreTasks(array $RestoreTasks) 设置回热任务列表
 * @method boolean getIsOver() 获取标识是否已获取全量
 * @method void setIsOver(boolean $IsOver) 设置标识是否已获取全量
 * @method integer getNextRestoreTaskIdMarker() 获取下一次请求起始回热任务ID标记
 * @method void setNextRestoreTaskIdMarker(integer $NextRestoreTaskIdMarker) 设置下一次请求起始回热任务ID标记
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRestoreTasksResponse extends AbstractModel
{
    /**
     * @var array 回热任务列表
     */
    public $RestoreTasks;

    /**
     * @var boolean 标识是否已获取全量
     */
    public $IsOver;

    /**
     * @var integer 下一次请求起始回热任务ID标记
     */
    public $NextRestoreTaskIdMarker;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RestoreTasks 回热任务列表
     * @param boolean $IsOver 标识是否已获取全量
     * @param integer $NextRestoreTaskIdMarker 下一次请求起始回热任务ID标记
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
        if (array_key_exists("RestoreTasks",$param) and $param["RestoreTasks"] !== null) {
            $this->RestoreTasks = [];
            foreach ($param["RestoreTasks"] as $key => $value){
                $obj = new RestoreTask();
                $obj->deserialize($value);
                array_push($this->RestoreTasks, $obj);
            }
        }

        if (array_key_exists("IsOver",$param) and $param["IsOver"] !== null) {
            $this->IsOver = $param["IsOver"];
        }

        if (array_key_exists("NextRestoreTaskIdMarker",$param) and $param["NextRestoreTaskIdMarker"] !== null) {
            $this->NextRestoreTaskIdMarker = $param["NextRestoreTaskIdMarker"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
