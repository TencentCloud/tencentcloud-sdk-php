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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopRiskCenterTask请求参数结构体
 *
 * @method array getTaskIdList() 获取任务id 列表
 * @method void setTaskIdList(array $TaskIdList) 设置任务id 列表
 */
class StopRiskCenterTaskRequest extends AbstractModel
{
    /**
     * @var array 任务id 列表
     */
    public $TaskIdList;

    /**
     * @param array $TaskIdList 任务id 列表
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
            $this->TaskIdList = [];
            foreach ($param["TaskIdList"] as $key => $value){
                $obj = new TaskIdListKey();
                $obj->deserialize($value);
                array_push($this->TaskIdList, $obj);
            }
        }
    }
}
