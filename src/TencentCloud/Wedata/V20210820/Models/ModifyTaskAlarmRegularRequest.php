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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTaskAlarmRegular请求参数结构体
 *
 * @method string getId() 获取规则ID
 * @method void setId(string $Id) 设置规则ID
 * @method TaskAlarmInfo getTaskAlarmInfo() 获取规则信息
 * @method void setTaskAlarmInfo(TaskAlarmInfo $TaskAlarmInfo) 设置规则信息
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 */
class ModifyTaskAlarmRegularRequest extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $Id;

    /**
     * @var TaskAlarmInfo 规则信息
     */
    public $TaskAlarmInfo;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @param string $Id 规则ID
     * @param TaskAlarmInfo $TaskAlarmInfo 规则信息
     * @param string $ProjectId 项目ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskAlarmInfo",$param) and $param["TaskAlarmInfo"] !== null) {
            $this->TaskAlarmInfo = new TaskAlarmInfo();
            $this->TaskAlarmInfo->deserialize($param["TaskAlarmInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
