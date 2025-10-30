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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源关联任务信息
 *
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskInfo() 获取数据源关联任务信息，本期仅支持数据开发任务接口返回数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfo(array $TaskInfo) 设置数据源关联任务信息，本期仅支持数据开发任务接口返回数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatasourceRelationTaskInfo extends AbstractModel
{
    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var array 数据源关联任务信息，本期仅支持数据开发任务接口返回数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfo;

    /**
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskInfo 数据源关联任务信息，本期仅支持数据开发任务接口返回数据
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = [];
            foreach ($param["TaskInfo"] as $key => $value){
                $obj = new RelateTask();
                $obj->deserialize($value);
                array_push($this->TaskInfo, $obj);
            }
        }
    }
}
