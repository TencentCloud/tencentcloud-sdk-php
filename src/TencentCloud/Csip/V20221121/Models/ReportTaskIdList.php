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
 * 报告中的task_id list
 *
 * @method array getTaskIdList() 获取任务id列表
 * @method void setTaskIdList(array $TaskIdList) 设置任务id列表
 * @method string getAppId() 获取租户ID
 * @method void setAppId(string $AppId) 设置租户ID
 */
class ReportTaskIdList extends AbstractModel
{
    /**
     * @var array 任务id列表
     */
    public $TaskIdList;

    /**
     * @var string 租户ID
     */
    public $AppId;

    /**
     * @param array $TaskIdList 任务id列表
     * @param string $AppId 租户ID
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
        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
