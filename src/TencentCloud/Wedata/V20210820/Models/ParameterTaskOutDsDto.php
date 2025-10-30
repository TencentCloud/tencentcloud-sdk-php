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
 * 任务参数输出dto
 *
 * @method integer getId() 获取唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamKey() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamKey(string $ParamKey) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDesc() 获取参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDesc(string $ParamDesc) 设置参数描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDefine() 获取参数定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDefine(string $ParamDefine) 设置参数定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParameterTaskOutDsDto extends AbstractModel
{
    /**
     * @var integer 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamKey;

    /**
     * @var string 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDesc;

    /**
     * @var string 参数定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDefine;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @param integer $Id 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamKey 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDesc 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDefine 参数定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ParamDesc",$param) and $param["ParamDesc"] !== null) {
            $this->ParamDesc = $param["ParamDesc"];
        }

        if (array_key_exists("ParamDefine",$param) and $param["ParamDefine"] !== null) {
            $this->ParamDefine = $param["ParamDefine"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
