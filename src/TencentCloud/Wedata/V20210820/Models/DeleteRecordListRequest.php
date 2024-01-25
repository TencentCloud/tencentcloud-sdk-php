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
 * DeleteRecordList请求参数结构体
 *
 * @method array getRecordIds() 获取任务提交记录Id列表
 * @method void setRecordIds(array $RecordIds) 设置任务提交记录Id列表
 */
class DeleteRecordListRequest extends AbstractModel
{
    /**
     * @var array 任务提交记录Id列表
     */
    public $RecordIds;

    /**
     * @param array $RecordIds 任务提交记录Id列表
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
        if (array_key_exists("RecordIds",$param) and $param["RecordIds"] !== null) {
            $this->RecordIds = $param["RecordIds"];
        }
    }
}
