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
 * DescribeInstanceByCycleReport请求参数结构体
 *
 * @method string getType() 获取周期类型
 * @method void setType(string $Type) 设置周期类型
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getStartTime() 获取开始日期
 * @method void setStartTime(string $StartTime) 设置开始日期
 * @method string getEndTime() 获取结束日期
 * @method void setEndTime(string $EndTime) 设置结束日期
 */
class DescribeInstanceByCycleReportRequest extends AbstractModel
{
    /**
     * @var string 周期类型
     */
    public $Type;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 开始日期
     */
    public $StartTime;

    /**
     * @var string 结束日期
     */
    public $EndTime;

    /**
     * @param string $Type 周期类型
     * @param string $ProjectId 项目ID
     * @param string $StartTime 开始日期
     * @param string $EndTime 结束日期
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
