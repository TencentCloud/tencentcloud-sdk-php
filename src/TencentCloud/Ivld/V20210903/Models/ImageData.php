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
 * 图片文件标签结果
 *
 * @method array getOcrSet() 获取图片中出现的可视文本识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrSet(array $OcrSet) 设置图片中出现的可视文本识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method MultiLevelTag getFrameTagSet() 获取图片中出现的帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameTagSet(MultiLevelTag $FrameTagSet) 设置图片中出现的帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultiLevelPersonInfoSet() 获取图片中出现的层级人物识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiLevelPersonInfoSet(array $MultiLevelPersonInfoSet) 设置图片中出现的层级人物识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageLogo getTvLogo() 获取图片中出现的台标识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTvLogo(ImageLogo $TvLogo) 设置图片中出现的台标识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageLogo getSourceLogo() 获取图片中出现的来源信息识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceLogo(ImageLogo $SourceLogo) 设置图片中出现的来源信息识别结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageData extends AbstractModel
{
    /**
     * @var array 图片中出现的可视文本识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrSet;

    /**
     * @var MultiLevelTag 图片中出现的帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameTagSet;

    /**
     * @var array 图片中出现的层级人物识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiLevelPersonInfoSet;

    /**
     * @var ImageLogo 图片中出现的台标识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TvLogo;

    /**
     * @var ImageLogo 图片中出现的来源信息识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceLogo;

    /**
     * @param array $OcrSet 图片中出现的可视文本识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param MultiLevelTag $FrameTagSet 图片中出现的帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultiLevelPersonInfoSet 图片中出现的层级人物识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageLogo $TvLogo 图片中出现的台标识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageLogo $SourceLogo 图片中出现的来源信息识别结果
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
        if (array_key_exists("OcrSet",$param) and $param["OcrSet"] !== null) {
            $this->OcrSet = [];
            foreach ($param["OcrSet"] as $key => $value){
                $obj = new ImageOcr();
                $obj->deserialize($value);
                array_push($this->OcrSet, $obj);
            }
        }

        if (array_key_exists("FrameTagSet",$param) and $param["FrameTagSet"] !== null) {
            $this->FrameTagSet = new MultiLevelTag();
            $this->FrameTagSet->deserialize($param["FrameTagSet"]);
        }

        if (array_key_exists("MultiLevelPersonInfoSet",$param) and $param["MultiLevelPersonInfoSet"] !== null) {
            $this->MultiLevelPersonInfoSet = [];
            foreach ($param["MultiLevelPersonInfoSet"] as $key => $value){
                $obj = new MultiLevelPersonInfo();
                $obj->deserialize($value);
                array_push($this->MultiLevelPersonInfoSet, $obj);
            }
        }

        if (array_key_exists("TvLogo",$param) and $param["TvLogo"] !== null) {
            $this->TvLogo = new ImageLogo();
            $this->TvLogo->deserialize($param["TvLogo"]);
        }

        if (array_key_exists("SourceLogo",$param) and $param["SourceLogo"] !== null) {
            $this->SourceLogo = new ImageLogo();
            $this->SourceLogo->deserialize($param["SourceLogo"]);
        }
    }
}
