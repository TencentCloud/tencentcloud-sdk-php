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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频文件分析结果数据
 *
 * @method array getAudioInfoSet() 获取音频识别文本结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioInfoSet(array $AudioInfoSet) 设置音频识别文本结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiLevelTag getTextTagSet() 获取音频识别标签数据
 * @method void setTextTagSet(MultiLevelTag $TextTagSet) 设置音频识别标签数据
 * @method string getWebMediaURL() 获取音频下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebMediaURL(string $WebMediaURL) 设置音频下载地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioData extends AbstractModel
{
    /**
     * @var array 音频识别文本结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioInfoSet;

    /**
     * @var MultiLevelTag 音频识别标签数据
     */
    public $TextTagSet;

    /**
     * @var string 音频下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebMediaURL;

    /**
     * @param array $AudioInfoSet 音频识别文本结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiLevelTag $TextTagSet 音频识别标签数据
     * @param string $WebMediaURL 音频下载地址
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
        if (array_key_exists("AudioInfoSet",$param) and $param["AudioInfoSet"] !== null) {
            $this->AudioInfoSet = [];
            foreach ($param["AudioInfoSet"] as $key => $value){
                $obj = new AudioInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfoSet, $obj);
            }
        }

        if (array_key_exists("TextTagSet",$param) and $param["TextTagSet"] !== null) {
            $this->TextTagSet = new MultiLevelTag();
            $this->TextTagSet->deserialize($param["TextTagSet"]);
        }

        if (array_key_exists("WebMediaURL",$param) and $param["WebMediaURL"] !== null) {
            $this->WebMediaURL = $param["WebMediaURL"];
        }
    }
}
