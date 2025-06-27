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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 链路详情
 *
 * @method string getTimeAt() 获取发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeAt(string $TimeAt) 设置发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModule() 获取模块
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModule(string $Module) 设置模块
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModuleName() 获取模块名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleName(string $ModuleName) 设置模块名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobRecordId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobRecordId(integer $JobRecordId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取目标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置目标
注意：此字段可能返回 null，表示取不到有效值。
 */
class DisplayJobRecordDetail extends AbstractModel
{
    /**
     * @var string 发现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeAt;

    /**
     * @var string 模块
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Module;

    /**
     * @var string 模块名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleName;

    /**
     * @var integer 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobRecordId;

    /**
     * @var array 目标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param string $TimeAt 发现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Module 模块
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModuleName 模块名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobRecordId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 目标
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
        if (array_key_exists("TimeAt",$param) and $param["TimeAt"] !== null) {
            $this->TimeAt = $param["TimeAt"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }

        if (array_key_exists("JobRecordId",$param) and $param["JobRecordId"] !== null) {
            $this->JobRecordId = $param["JobRecordId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new IdndValue();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
