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
 * DescribeIntegrationStatisticsRecordsTrend请求参数结构体
 *
 * @method integer getTaskType() 获取任务类型（实时：201，离线：202）
 * @method void setTaskType(integer $TaskType) 设置任务类型（实时：201，离线：202）
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getQueryDate() 获取查询日期
 * @method void setQueryDate(string $QueryDate) 设置查询日期
 */
class DescribeIntegrationStatisticsRecordsTrendRequest extends AbstractModel
{
    /**
     * @var integer 任务类型（实时：201，离线：202）
     */
    public $TaskType;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 查询日期
     */
    public $QueryDate;

    /**
     * @param integer $TaskType 任务类型（实时：201，离线：202）
     * @param string $ProjectId 项目id
     * @param string $QueryDate 查询日期
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("QueryDate",$param) and $param["QueryDate"] !== null) {
            $this->QueryDate = $param["QueryDate"];
        }
    }
}
