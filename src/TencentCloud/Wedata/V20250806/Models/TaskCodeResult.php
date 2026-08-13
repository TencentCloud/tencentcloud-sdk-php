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
 * 任务代码
 *
 * @method string getCodeInfo() 获取<p>base64编码的代码内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeInfo(string $CodeInfo) 设置<p>base64编码的代码内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeFileSize() 获取<p>代码文件大小，单位KB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFileSize(string $CodeFileSize) 设置<p>代码文件大小，单位KB</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskCodeResult extends AbstractModel
{
    /**
     * @var string <p>base64编码的代码内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeInfo;

    /**
     * @var string <p>代码文件大小，单位KB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFileSize;

    /**
     * @param string $CodeInfo <p>base64编码的代码内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeFileSize <p>代码文件大小，单位KB</p>
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
        if (array_key_exists("CodeInfo",$param) and $param["CodeInfo"] !== null) {
            $this->CodeInfo = $param["CodeInfo"];
        }

        if (array_key_exists("CodeFileSize",$param) and $param["CodeFileSize"] !== null) {
            $this->CodeFileSize = $param["CodeFileSize"];
        }
    }
}
