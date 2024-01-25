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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopAdhocTask请求参数结构体
 *
 * @method integer getRecordId() 获取任务提交记录Id
 * @method void setRecordId(integer $RecordId) 设置任务提交记录Id
 * @method string getInstanceId() 获取任务实例Id
 * @method void setInstanceId(string $InstanceId) 设置任务实例Id
 */
class StopAdhocTaskRequest extends AbstractModel
{
    /**
     * @var integer 任务提交记录Id
     */
    public $RecordId;

    /**
     * @var string 任务实例Id
     */
    public $InstanceId;

    /**
     * @param integer $RecordId 任务提交记录Id
     * @param string $InstanceId 任务实例Id
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
