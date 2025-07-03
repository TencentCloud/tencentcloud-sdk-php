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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneConfigImportResult请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getTaskId() 获取表示需要查询结果的导入配置任务 Id，导入任务 Id 仅支持查询最近 7 天的导入任务。
 * @method void setTaskId(string $TaskId) 设置表示需要查询结果的导入配置任务 Id，导入任务 Id 仅支持查询最近 7 天的导入任务。
 */
class DescribeZoneConfigImportResultRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 表示需要查询结果的导入配置任务 Id，导入任务 Id 仅支持查询最近 7 天的导入任务。
     */
    public $TaskId;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $TaskId 表示需要查询结果的导入配置任务 Id，导入任务 Id 仅支持查询最近 7 天的导入任务。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
