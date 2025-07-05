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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVRSVoiceTypes请求参数结构体
 *
 * @method integer getTaskType() 获取复刻类型。
0 - 除快速声音复刻外其他复刻类型（默认）；
5 - 一句话声音复刻。
 * @method void setTaskType(integer $TaskType) 设置复刻类型。
0 - 除快速声音复刻外其他复刻类型（默认）；
5 - 一句话声音复刻。
 */
class GetVRSVoiceTypesRequest extends AbstractModel
{
    /**
     * @var integer 复刻类型。
0 - 除快速声音复刻外其他复刻类型（默认）；
5 - 一句话声音复刻。
     */
    public $TaskType;

    /**
     * @param integer $TaskType 复刻类型。
0 - 除快速声音复刻外其他复刻类型（默认）；
5 - 一句话声音复刻。
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
