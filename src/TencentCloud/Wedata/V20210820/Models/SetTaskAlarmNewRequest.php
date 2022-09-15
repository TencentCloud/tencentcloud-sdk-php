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
 * SetTaskAlarmNew请求参数结构体
 *
 * @method array getAlarmInfoList() 获取设置任务超时告警和失败告警信息
 * @method void setAlarmInfoList(array $AlarmInfoList) 设置设置任务超时告警和失败告警信息
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 */
class SetTaskAlarmNewRequest extends AbstractModel
{
    /**
     * @var array 设置任务超时告警和失败告警信息
     */
    public $AlarmInfoList;

    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @param array $AlarmInfoList 设置任务超时告警和失败告警信息
     * @param string $ProjectId 项目Id
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
        if (array_key_exists("AlarmInfoList",$param) and $param["AlarmInfoList"] !== null) {
            $this->AlarmInfoList = [];
            foreach ($param["AlarmInfoList"] as $key => $value){
                $obj = new AlarmInfo();
                $obj->deserialize($value);
                array_push($this->AlarmInfoList, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
