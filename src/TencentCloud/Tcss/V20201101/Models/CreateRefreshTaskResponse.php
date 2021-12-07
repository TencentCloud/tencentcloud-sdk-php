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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRefreshTask返回参数结构体
 *
 * @method integer getTaskId() 获取返回创建的集群检查任务的ID，为0表示创建失败。
 * @method void setTaskId(integer $TaskId) 设置返回创建的集群检查任务的ID，为0表示创建失败。
 * @method string getCreateResult() 获取创建检查任务的结果，"Succ"为成功，"Failed"为失败
 * @method void setCreateResult(string $CreateResult) 设置创建检查任务的结果，"Succ"为成功，"Failed"为失败
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateRefreshTaskResponse extends AbstractModel
{
    /**
     * @var integer 返回创建的集群检查任务的ID，为0表示创建失败。
     */
    public $TaskId;

    /**
     * @var string 创建检查任务的结果，"Succ"为成功，"Failed"为失败
     */
    public $CreateResult;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskId 返回创建的集群检查任务的ID，为0表示创建失败。
     * @param string $CreateResult 创建检查任务的结果，"Succ"为成功，"Failed"为失败
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CreateResult",$param) and $param["CreateResult"] !== null) {
            $this->CreateResult = $param["CreateResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
