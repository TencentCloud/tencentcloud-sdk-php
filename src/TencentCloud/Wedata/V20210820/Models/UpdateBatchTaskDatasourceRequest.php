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
 * UpdateBatchTaskDatasource请求参数结构体
 *
 * @method array getTaskIds() 获取待更新的任务ID
 * @method void setTaskIds(array $TaskIds) 设置待更新的任务ID
 * @method string getDatasourceId() 获取数据源ID
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getDatasourceType() 获取数据源类型
 * @method void setDatasourceType(string $DatasourceType) 设置数据源类型
 */
class UpdateBatchTaskDatasourceRequest extends AbstractModel
{
    /**
     * @var array 待更新的任务ID
     */
    public $TaskIds;

    /**
     * @var string 数据源ID
     */
    public $DatasourceId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 数据源类型
     */
    public $DatasourceType;

    /**
     * @param array $TaskIds 待更新的任务ID
     * @param string $DatasourceId 数据源ID
     * @param string $ProjectId 项目ID
     * @param string $DatasourceType 数据源类型
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
