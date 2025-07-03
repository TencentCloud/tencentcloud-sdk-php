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
 * ReportTaskLineage请求参数结构体
 *
 * @method string getChannelType() 获取上报渠道
 * @method void setChannelType(string $ChannelType) 设置上报渠道
 * @method LineageTask getTask() 获取血缘任务
 * @method void setTask(LineageTask $Task) 设置血缘任务
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getTableLineages() 获取表血缘关系
 * @method void setTableLineages(array $TableLineages) 设置表血缘关系
 * @method array getColumnLineages() 获取列血缘关系
 * @method void setColumnLineages(array $ColumnLineages) 设置列血缘关系
 */
class ReportTaskLineageRequest extends AbstractModel
{
    /**
     * @var string 上报渠道
     */
    public $ChannelType;

    /**
     * @var LineageTask 血缘任务
     */
    public $Task;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 表血缘关系
     */
    public $TableLineages;

    /**
     * @var array 列血缘关系
     */
    public $ColumnLineages;

    /**
     * @param string $ChannelType 上报渠道
     * @param LineageTask $Task 血缘任务
     * @param string $ProjectId 项目ID
     * @param array $TableLineages 表血缘关系
     * @param array $ColumnLineages 列血缘关系
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
        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new LineageTask();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TableLineages",$param) and $param["TableLineages"] !== null) {
            $this->TableLineages = [];
            foreach ($param["TableLineages"] as $key => $value){
                $obj = new TableLineagePair();
                $obj->deserialize($value);
                array_push($this->TableLineages, $obj);
            }
        }

        if (array_key_exists("ColumnLineages",$param) and $param["ColumnLineages"] !== null) {
            $this->ColumnLineages = [];
            foreach ($param["ColumnLineages"] as $key => $value){
                $obj = new ColumnLineagePair();
                $obj->deserialize($value);
                array_push($this->ColumnLineages, $obj);
            }
        }
    }
}
