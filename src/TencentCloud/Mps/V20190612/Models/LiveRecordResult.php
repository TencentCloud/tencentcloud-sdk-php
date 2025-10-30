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
 * 直播录制结果
 *
 * @method TaskOutputStorage getOutputStorage() 获取直播录制文件的目标存储。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置直播录制文件的目标存储。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileList() 获取直播录制文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileList(array $FileList) 设置直播录制文件列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveRecordResult extends AbstractModel
{
    /**
     * @var TaskOutputStorage 直播录制文件的目标存储。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var array 直播录制文件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileList;

    /**
     * @param TaskOutputStorage $OutputStorage 直播录制文件的目标存储。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileList 直播录制文件列表
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = [];
            foreach ($param["FileList"] as $key => $value){
                $obj = new LiveRecordFile();
                $obj->deserialize($value);
                array_push($this->FileList, $obj);
            }
        }
    }
}
