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
 * 直播流录制结果
 *
 * @method integer getRecordOver() 获取录制是否结束。
0：录制未结束，返回单个文件结果
1：录制结束，返回所有录制文件结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordOver(integer $RecordOver) 设置录制是否结束。
0：录制未结束，返回单个文件结果
1：录制结束，返回所有录制文件结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileResults() 获取文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileResults(array $FileResults) 设置文件列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamRecordResultInfo extends AbstractModel
{
    /**
     * @var integer 录制是否结束。
0：录制未结束，返回单个文件结果
1：录制结束，返回所有录制文件结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordOver;

    /**
     * @var array 文件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileResults;

    /**
     * @param integer $RecordOver 录制是否结束。
0：录制未结束，返回单个文件结果
1：录制结束，返回所有录制文件结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileResults 文件列表
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
        if (array_key_exists("RecordOver",$param) and $param["RecordOver"] !== null) {
            $this->RecordOver = $param["RecordOver"];
        }

        if (array_key_exists("FileResults",$param) and $param["FileResults"] !== null) {
            $this->FileResults = [];
            foreach ($param["FileResults"] as $key => $value){
                $obj = new LiveRecordFile();
                $obj->deserialize($value);
                array_push($this->FileResults, $obj);
            }
        }
    }
}
