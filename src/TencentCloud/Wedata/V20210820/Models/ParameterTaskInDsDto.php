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
 * 查询任务输入参数Dto
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
 * @method string getFromTaskId() 获取父任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromTaskId(string $FromTaskId) 设置父任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromParamKey() 获取父任务参数key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromParamKey(string $FromParamKey) 设置父任务参数key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取升级时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置升级时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromTaskName() 获取父任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromTaskName(string $FromTaskName) 设置父任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromProjectId() 获取父任务项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromProjectId(string $FromProjectId) 设置父任务项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFromProjectName() 获取父任务项目名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFromProjectName(string $FromProjectName) 设置父任务项目名
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParameterTaskInDsDto extends AbstractModel
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
     * @var string 父任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromTaskId;

    /**
     * @var string 父任务参数key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromParamKey;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 升级时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 父任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromTaskName;

    /**
     * @var string 父任务项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromProjectId;

    /**
     * @var string 父任务项目名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FromProjectName;

    /**
     * @param integer $Id 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamKey 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDesc 参数描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromTaskId 父任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromParamKey 父任务参数key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 升级时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromTaskName 父任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromProjectId 父任务项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FromProjectName 父任务项目名
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

        if (array_key_exists("FromTaskId",$param) and $param["FromTaskId"] !== null) {
            $this->FromTaskId = $param["FromTaskId"];
        }

        if (array_key_exists("FromParamKey",$param) and $param["FromParamKey"] !== null) {
            $this->FromParamKey = $param["FromParamKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FromTaskName",$param) and $param["FromTaskName"] !== null) {
            $this->FromTaskName = $param["FromTaskName"];
        }

        if (array_key_exists("FromProjectId",$param) and $param["FromProjectId"] !== null) {
            $this->FromProjectId = $param["FromProjectId"];
        }

        if (array_key_exists("FromProjectName",$param) and $param["FromProjectName"] !== null) {
            $this->FromProjectName = $param["FromProjectName"];
        }
    }
}
