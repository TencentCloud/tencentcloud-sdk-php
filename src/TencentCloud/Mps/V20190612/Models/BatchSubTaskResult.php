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
 * 批量任务子任务结果
 *
 * @method array getInputInfos() 获取批量任务输入信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfos(array $InputInfos) 设置批量任务输入信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetadatas() 获取原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadatas(array $Metadatas) 设置原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method BatchSmartSubtitlesResult getSmartSubtitlesTaskResult() 获取智能字幕任务的执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartSubtitlesTaskResult(BatchSmartSubtitlesResult $SmartSubtitlesTaskResult) 设置智能字幕任务的执行结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchSubTaskResult extends AbstractModel
{
    /**
     * @var array 批量任务输入信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfos;

    /**
     * @var array 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadatas;

    /**
     * @var BatchSmartSubtitlesResult 智能字幕任务的执行结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartSubtitlesTaskResult;

    /**
     * @param array $InputInfos 批量任务输入信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Metadatas 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param BatchSmartSubtitlesResult $SmartSubtitlesTaskResult 智能字幕任务的执行结果
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
        if (array_key_exists("InputInfos",$param) and $param["InputInfos"] !== null) {
            $this->InputInfos = [];
            foreach ($param["InputInfos"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->InputInfos, $obj);
            }
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new MediaMetaData();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("SmartSubtitlesTaskResult",$param) and $param["SmartSubtitlesTaskResult"] !== null) {
            $this->SmartSubtitlesTaskResult = new BatchSmartSubtitlesResult();
            $this->SmartSubtitlesTaskResult->deserialize($param["SmartSubtitlesTaskResult"]);
        }
    }
}
