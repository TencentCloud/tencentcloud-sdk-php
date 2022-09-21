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
 * 描述输入媒资的先验知识，例如文件类型(视频)，媒体类型(新闻/综艺等)

MediaPreknownInfo.MediaType:

| MediaType 名称|  MediaType取值 | MediaType描述 |
|---|---|---|
| MEDIA_TYPE_INVALID | 0 | 非法的媒资文件类型 | 
| MEDIA_TYPE_IMAGE | 1 | 图片 |
| MEDIA_TYPE_VIDEO | 2 | 视频 |
| MEDIA_TYPE_AUDIO | 3 | 音频 |
| MEDIA_TYPE_VIDEO_STREAM | 4 | 视频流，暂不支持 |
| MEDIA_TYPE_TEXT | 5 | 文本 |

MediaPreknownInfo.MediaLabel:

| MediaLabel名称 | MediaLabel取值 | MediaLabel描述 |
|---|---|---|
| MEDIA_LABEL_INVALID | 0 | 非法的一级媒资素材类型 |
| MEDIA_LABEL_NEWS | 1 | 新闻 |
| MEDIA_LABEL_ENTERTAINMENT | 2 | 综艺|
| MEDIA_LABEL_INTERNET_INFO | 3 | 互联网资讯 | 
| MEDIA_LABEL_MOVIE | 4 | 电影 |
| MEDIA_LABEL_SERIES | 5 | 电视连续剧 |
| MEDIA_LABEL_SPECIAL | 6 | 专题 |
| MEDIA_LABEL_SPORT | 7 | 体育 |

MediaPreknownInfo.MediaSecondLabel
请注意：**当且仅当MediaLabel=2(综艺)时MediaSecondLabel才有意义**

| MediaSecondLabel名称 | MediaSecondLabel取值 | MediaSecondLabel 描述|
|---|---|---|
| MEDIA_SECOND_LABEL_INVALID |  0  | 非法的MediaSecondLabel |
| MEDIA_SECOND_LABEL_EVENING | 1 | 综艺晚会 |
| MEDIA_SECOND_LABEL_OTHERS | 2 | 其他 |

MediaMeta.MediaLang

| MediaLang名称 | MediaLang取值 | MediaLang描述 |
|---|---|---|
| MEDIA_LANG_INVALID | 0 | 非法的MediaLang |
| MEDIA_LANG_MANDARIN | 1 | 普通话 |
| MEDIA_LANG_CANTONESE | 2 | 粤语 | 
 *
 * @method integer getMediaType() 获取媒资文件类型，参见MediaPreknownInfo结构体定义
 * @method void setMediaType(integer $MediaType) 设置媒资文件类型，参见MediaPreknownInfo结构体定义
 * @method integer getMediaLabel() 获取媒资素材一级类型，参见MediaPreknownInfo结构体定义
 * @method void setMediaLabel(integer $MediaLabel) 设置媒资素材一级类型，参见MediaPreknownInfo结构体定义
 * @method integer getMediaSecondLabel() 获取媒资素材二级类型，参见MediaPreknownInfo结构体定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaSecondLabel(integer $MediaSecondLabel) 设置媒资素材二级类型，参见MediaPreknownInfo结构体定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMediaLang() 获取媒资音频类型，参见MediaPreknownInfo结构体定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaLang(integer $MediaLang) 设置媒资音频类型，参见MediaPreknownInfo结构体定义
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaPreknownInfo extends AbstractModel
{
    /**
     * @var integer 媒资文件类型，参见MediaPreknownInfo结构体定义
     */
    public $MediaType;

    /**
     * @var integer 媒资素材一级类型，参见MediaPreknownInfo结构体定义
     */
    public $MediaLabel;

    /**
     * @var integer 媒资素材二级类型，参见MediaPreknownInfo结构体定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaSecondLabel;

    /**
     * @var integer 媒资音频类型，参见MediaPreknownInfo结构体定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaLang;

    /**
     * @param integer $MediaType 媒资文件类型，参见MediaPreknownInfo结构体定义
     * @param integer $MediaLabel 媒资素材一级类型，参见MediaPreknownInfo结构体定义
     * @param integer $MediaSecondLabel 媒资素材二级类型，参见MediaPreknownInfo结构体定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MediaLang 媒资音频类型，参见MediaPreknownInfo结构体定义
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
        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("MediaLabel",$param) and $param["MediaLabel"] !== null) {
            $this->MediaLabel = $param["MediaLabel"];
        }

        if (array_key_exists("MediaSecondLabel",$param) and $param["MediaSecondLabel"] !== null) {
            $this->MediaSecondLabel = $param["MediaSecondLabel"];
        }

        if (array_key_exists("MediaLang",$param) and $param["MediaLang"] !== null) {
            $this->MediaLang = $param["MediaLang"];
        }
    }
}
