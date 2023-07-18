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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线声音复刻模型下载响应
 *
 * @method string getModel() 获取模型cos地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置模型cos地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVoiceName() 获取音色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceName(string $VoiceName) 设置音色名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVoiceGender() 获取音色性别:
1-male
2-female
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceGender(integer $VoiceGender) 设置音色性别:
1-male
2-female
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVoiceLanguage() 获取语言类型：
1-中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceLanguage(integer $VoiceLanguage) 设置语言类型：
1-中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 */
class DownloadVRSModelRsp extends AbstractModel
{
    /**
     * @var string 模型cos地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var string 音色名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceName;

    /**
     * @var integer 音色性别:
1-male
2-female
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceGender;

    /**
     * @var integer 语言类型：
1-中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceLanguage;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @param string $Model 模型cos地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VoiceName 音色名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VoiceGender 音色性别:
1-male
2-female
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VoiceLanguage 语言类型：
1-中文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceGender",$param) and $param["VoiceGender"] !== null) {
            $this->VoiceGender = $param["VoiceGender"];
        }

        if (array_key_exists("VoiceLanguage",$param) and $param["VoiceLanguage"] !== null) {
            $this->VoiceLanguage = $param["VoiceLanguage"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
