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
 * 任务执行记录
 *
 * @method integer getId() 获取任务提交记录
 * @method void setId(integer $Id) 设置任务提交记录
 * @method string getScriptContent() 获取脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetails() 获取子任务执行记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置子任务执行记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取任务实例id
 * @method void setInstanceId(string $InstanceId) 设置任务实例id
 * @method string getExecutorId() 获取任务执行者Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorId(string $ExecutorId) 设置任务执行者Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorDisplayName() 获取任务执行者显示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorDisplayName(string $ExecutorDisplayName) 设置任务执行者显示名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdhocRecordInfoDto extends AbstractModel
{
    /**
     * @var integer 任务提交记录
     */
    public $Id;

    /**
     * @var string 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 子任务执行记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @var string 任务实例id
     */
    public $InstanceId;

    /**
     * @var string 任务执行者Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorId;

    /**
     * @var string 任务执行者显示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorDisplayName;

    /**
     * @param integer $Id 任务提交记录
     * @param string $ScriptContent 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Details 子任务执行记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 任务实例id
     * @param string $ExecutorId 任务执行者Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorDisplayName 任务执行者显示名称
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

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new AdhocSubTaskDto();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ExecutorId",$param) and $param["ExecutorId"] !== null) {
            $this->ExecutorId = $param["ExecutorId"];
        }

        if (array_key_exists("ExecutorDisplayName",$param) and $param["ExecutorDisplayName"] !== null) {
            $this->ExecutorDisplayName = $param["ExecutorDisplayName"];
        }
    }
}
