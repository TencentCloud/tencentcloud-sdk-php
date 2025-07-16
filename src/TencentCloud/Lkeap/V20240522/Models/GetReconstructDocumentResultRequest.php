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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetReconstructDocumentResult请求参数结构体
 *
 * @method string getTaskId() 获取说明：解析任务ID
备注：仅支持单个任务ID
 * @method void setTaskId(string $TaskId) 设置说明：解析任务ID
备注：仅支持单个任务ID
 */
class GetReconstructDocumentResultRequest extends AbstractModel
{
    /**
     * @var string 说明：解析任务ID
备注：仅支持单个任务ID
     */
    public $TaskId;

    /**
     * @param string $TaskId 说明：解析任务ID
备注：仅支持单个任务ID
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
    }
}
