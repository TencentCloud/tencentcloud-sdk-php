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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频信息
 *
 * @method string getFormat() 获取音频文件格式
 * @method void setFormat(string $Format) 设置音频文件格式
 * @method string getAudioUrl() 获取音频文件地址
 * @method void setAudioUrl(string $AudioUrl) 设置音频文件地址
 * @method string getTitle() 获取音频标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置音频标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取音频文件在正文中的位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置音频文件在正文中的位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudioTranscripts() 获取音频转录后的文字列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioTranscripts(array $AudioTranscripts) 设置音频转录后的文字列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Audio extends AbstractModel
{
    /**
     * @var string 音频文件格式
     */
    public $Format;

    /**
     * @var string 音频文件地址
     */
    public $AudioUrl;

    /**
     * @var string 音频标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var integer 音频文件在正文中的位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var array 音频转录后的文字列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioTranscripts;

    /**
     * @param string $Format 音频文件格式
     * @param string $AudioUrl 音频文件地址
     * @param string $Title 音频标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 音频文件在正文中的位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudioTranscripts 音频转录后的文字列表
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("AudioTranscripts",$param) and $param["AudioTranscripts"] !== null) {
            $this->AudioTranscripts = [];
            foreach ($param["AudioTranscripts"] as $key => $value){
                $obj = new AudioTranscript();
                $obj->deserialize($value);
                array_push($this->AudioTranscripts, $obj);
            }
        }
    }
}
