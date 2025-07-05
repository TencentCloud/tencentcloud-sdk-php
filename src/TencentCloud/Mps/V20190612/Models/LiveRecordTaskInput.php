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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播录制任务输入参数类型
 *
 * @method integer getDefinition() 获取直播录制模板 ID。
 * @method void setDefinition(integer $Definition) 设置直播录制模板 ID。
 * @method TaskOutputStorage getOutputStorage() 获取直播录制后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置直播录制后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputObjectPath() 获取直播录制后文件的输出路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置直播录制后文件的输出路径。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveRecordTaskInput extends AbstractModel
{
    /**
     * @var integer 直播录制模板 ID。
     */
    public $Definition;

    /**
     * @var TaskOutputStorage 直播录制后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string 直播录制后文件的输出路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition 直播录制模板 ID。
     * @param TaskOutputStorage $OutputStorage 直播录制后文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputObjectPath 直播录制后文件的输出路径。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }
    }
}
