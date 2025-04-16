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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提交送检任务相应数据
 *
 * @method string getDLPFileDetectionTaskID() 获取提交任务生成的id，也即requestID。用于后续查询
 * @method void setDLPFileDetectionTaskID(string $DLPFileDetectionTaskID) 设置提交任务生成的id，也即requestID。用于后续查询
 */
class CreateDLPFileDetectionTaskData extends AbstractModel
{
    /**
     * @var string 提交任务生成的id，也即requestID。用于后续查询
     */
    public $DLPFileDetectionTaskID;

    /**
     * @param string $DLPFileDetectionTaskID 提交任务生成的id，也即requestID。用于后续查询
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
        if (array_key_exists("DLPFileDetectionTaskID",$param) and $param["DLPFileDetectionTaskID"] !== null) {
            $this->DLPFileDetectionTaskID = $param["DLPFileDetectionTaskID"];
        }
    }
}
