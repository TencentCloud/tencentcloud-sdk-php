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
 * GetTaskInstance请求参数结构体
 *
 * @method string getProjectId() 获取**项目ID**
 * @method void setProjectId(string $ProjectId) 设置**项目ID**
 * @method string getInstanceKey() 获取**实例唯一标识**
 * @method void setInstanceKey(string $InstanceKey) 设置**实例唯一标识**
 * @method string getScheduleTimeZone() 获取**时区**
timeZone, 默认UTC+8
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置**时区**
timeZone, 默认UTC+8
 */
class GetTaskInstanceRequest extends AbstractModel
{
    /**
     * @var string **项目ID**
     */
    public $ProjectId;

    /**
     * @var string **实例唯一标识**
     */
    public $InstanceKey;

    /**
     * @var string **时区**
timeZone, 默认UTC+8
     */
    public $ScheduleTimeZone;

    /**
     * @param string $ProjectId **项目ID**
     * @param string $InstanceKey **实例唯一标识**
     * @param string $ScheduleTimeZone **时区**
timeZone, 默认UTC+8
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }
    }
}
