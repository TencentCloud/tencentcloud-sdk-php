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
 * 视频结构化结果
 *
 * @method string getDate() 获取节目日期(只在新闻有效)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置节目日期(只在新闻有效)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogo() 获取台标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogo(string $Logo) 设置台标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumn() 获取节目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumn(string $Column) 设置节目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取来源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置来源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCoverImageURL() 获取节目封面
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverImageURL(string $CoverImageURL) 设置节目封面
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSummarySet() 获取节目内容概要列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummarySet(array $SummarySet) 设置节目内容概要列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTitleSet() 获取节目片段标题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitleSet(array $TitleSet) 设置节目片段标题列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudioInfoSet() 获取音频识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioInfoSet(array $AudioInfoSet) 设置音频识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTextInfoSet() 获取可视文字识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextInfoSet(array $TextInfoSet) 设置可视文字识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClassifiedPersonInfoSet() 获取已分类人物信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassifiedPersonInfoSet(array $ClassifiedPersonInfoSet) 设置已分类人物信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiLevelTag getTextTagSet() 获取文本标签列表，包含标签内容和出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextTagSet(MultiLevelTag $TextTagSet) 设置文本标签列表，包含标签内容和出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiLevelTag getFrameTagSet() 获取帧标签列表，包括人物信息，场景信息等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameTagSet(MultiLevelTag $FrameTagSet) 设置帧标签列表，包括人物信息，场景信息等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebMediaURL() 获取视频下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebMediaURL(string $WebMediaURL) 设置视频下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMediaClassifierSet() 获取媒资分类信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaClassifierSet(array $MediaClassifierSet) 设置媒资分类信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSummaryTagSet() 获取概要标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummaryTagSet(array $SummaryTagSet) 设置概要标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUnknownPersonSet() 获取未知人物信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnknownPersonSet(array $UnknownPersonSet) 设置未知人物信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultiLevelPersonInfoSet() 获取树状已分类人物信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiLevelPersonInfoSet(array $MultiLevelPersonInfoSet) 设置树状已分类人物信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShowInfo extends AbstractModel
{
    /**
     * @var string 节目日期(只在新闻有效)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string 台标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logo;

    /**
     * @var string 节目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Column;

    /**
     * @var string 来源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 节目封面
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverImageURL;

    /**
     * @var array 节目内容概要列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SummarySet;

    /**
     * @var array 节目片段标题列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TitleSet;

    /**
     * @var array 音频识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioInfoSet;

    /**
     * @var array 可视文字识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextInfoSet;

    /**
     * @var array 已分类人物信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassifiedPersonInfoSet;

    /**
     * @var MultiLevelTag 文本标签列表，包含标签内容和出现信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextTagSet;

    /**
     * @var MultiLevelTag 帧标签列表，包括人物信息，场景信息等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameTagSet;

    /**
     * @var string 视频下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebMediaURL;

    /**
     * @var array 媒资分类信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaClassifierSet;

    /**
     * @var array 概要标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SummaryTagSet;

    /**
     * @var array 未知人物信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnknownPersonSet;

    /**
     * @var array 树状已分类人物信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiLevelPersonInfoSet;

    /**
     * @param string $Date 节目日期(只在新闻有效)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Logo 台标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Column 节目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 来源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CoverImageURL 节目封面
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SummarySet 节目内容概要列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TitleSet 节目片段标题列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudioInfoSet 音频识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TextInfoSet 可视文字识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClassifiedPersonInfoSet 已分类人物信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiLevelTag $TextTagSet 文本标签列表，包含标签内容和出现信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiLevelTag $FrameTagSet 帧标签列表，包括人物信息，场景信息等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebMediaURL 视频下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MediaClassifierSet 媒资分类信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SummaryTagSet 概要标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UnknownPersonSet 未知人物信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultiLevelPersonInfoSet 树状已分类人物信息
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Column",$param) and $param["Column"] !== null) {
            $this->Column = $param["Column"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("CoverImageURL",$param) and $param["CoverImageURL"] !== null) {
            $this->CoverImageURL = $param["CoverImageURL"];
        }

        if (array_key_exists("SummarySet",$param) and $param["SummarySet"] !== null) {
            $this->SummarySet = $param["SummarySet"];
        }

        if (array_key_exists("TitleSet",$param) and $param["TitleSet"] !== null) {
            $this->TitleSet = $param["TitleSet"];
        }

        if (array_key_exists("AudioInfoSet",$param) and $param["AudioInfoSet"] !== null) {
            $this->AudioInfoSet = [];
            foreach ($param["AudioInfoSet"] as $key => $value){
                $obj = new AudioInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfoSet, $obj);
            }
        }

        if (array_key_exists("TextInfoSet",$param) and $param["TextInfoSet"] !== null) {
            $this->TextInfoSet = [];
            foreach ($param["TextInfoSet"] as $key => $value){
                $obj = new TextInfo();
                $obj->deserialize($value);
                array_push($this->TextInfoSet, $obj);
            }
        }

        if (array_key_exists("ClassifiedPersonInfoSet",$param) and $param["ClassifiedPersonInfoSet"] !== null) {
            $this->ClassifiedPersonInfoSet = [];
            foreach ($param["ClassifiedPersonInfoSet"] as $key => $value){
                $obj = new ClassifiedPersonInfo();
                $obj->deserialize($value);
                array_push($this->ClassifiedPersonInfoSet, $obj);
            }
        }

        if (array_key_exists("TextTagSet",$param) and $param["TextTagSet"] !== null) {
            $this->TextTagSet = new MultiLevelTag();
            $this->TextTagSet->deserialize($param["TextTagSet"]);
        }

        if (array_key_exists("FrameTagSet",$param) and $param["FrameTagSet"] !== null) {
            $this->FrameTagSet = new MultiLevelTag();
            $this->FrameTagSet->deserialize($param["FrameTagSet"]);
        }

        if (array_key_exists("WebMediaURL",$param) and $param["WebMediaURL"] !== null) {
            $this->WebMediaURL = $param["WebMediaURL"];
        }

        if (array_key_exists("MediaClassifierSet",$param) and $param["MediaClassifierSet"] !== null) {
            $this->MediaClassifierSet = $param["MediaClassifierSet"];
        }

        if (array_key_exists("SummaryTagSet",$param) and $param["SummaryTagSet"] !== null) {
            $this->SummaryTagSet = $param["SummaryTagSet"];
        }

        if (array_key_exists("UnknownPersonSet",$param) and $param["UnknownPersonSet"] !== null) {
            $this->UnknownPersonSet = [];
            foreach ($param["UnknownPersonSet"] as $key => $value){
                $obj = new UnknownPerson();
                $obj->deserialize($value);
                array_push($this->UnknownPersonSet, $obj);
            }
        }

        if (array_key_exists("MultiLevelPersonInfoSet",$param) and $param["MultiLevelPersonInfoSet"] !== null) {
            $this->MultiLevelPersonInfoSet = [];
            foreach ($param["MultiLevelPersonInfoSet"] as $key => $value){
                $obj = new MultiLevelPersonInfo();
                $obj->deserialize($value);
                array_push($this->MultiLevelPersonInfoSet, $obj);
            }
        }
    }
}
