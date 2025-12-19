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
 * LineageProcessVO
 *
 * @method string getProcessId() 获取原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessId(string $ProcessId) 设置原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessType(string $ProcessType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessSubType() 获取任务子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessSubType(string $ProcessSubType) 设置任务子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessName(string $ProcessName) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQualifiedId() 获取唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualifiedId(string $QualifiedId) 设置唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlatform() 获取来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlatform(string $Platform) 设置来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcessProperties() 获取额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessProperties(array $ProcessProperties) 设置额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class LineageProcessVO extends AbstractModel
{
    /**
     * @var string 原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessId;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessType;

    /**
     * @var string 任务子类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessSubType;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessName;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualifiedId;

    /**
     * @var string 来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Platform;

    /**
     * @var array 额外扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessProperties;

    /**
     * @param string $ProcessId 原始唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessSubType 任务子类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessName 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QualifiedId 唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Platform 来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProcessProperties 额外扩展参数
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
        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("ProcessSubType",$param) and $param["ProcessSubType"] !== null) {
            $this->ProcessSubType = $param["ProcessSubType"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("QualifiedId",$param) and $param["QualifiedId"] !== null) {
            $this->QualifiedId = $param["QualifiedId"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProcessProperties",$param) and $param["ProcessProperties"] !== null) {
            $this->ProcessProperties = [];
            foreach ($param["ProcessProperties"] as $key => $value){
                $obj = new LineageProperty();
                $obj->deserialize($value);
                array_push($this->ProcessProperties, $obj);
            }
        }
    }
}
