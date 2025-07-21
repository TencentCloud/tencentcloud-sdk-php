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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多媒体详情
 *
 * @method string getType() 获取多媒体类型，可选值包括 image、music、album、playlist。
说明：
1. image：图片；music：单曲，类型为单曲时，会返回详细歌手和歌曲信息；album：专辑；playlist：歌单。
2. 当 type 为 music、album、playlist 时，需要配合 [QQ音乐SDK](https://developer.y.qq.com/) 使用。
 * @method void setType(string $Type) 设置多媒体类型，可选值包括 image、music、album、playlist。
说明：
1. image：图片；music：单曲，类型为单曲时，会返回详细歌手和歌曲信息；album：专辑；playlist：歌单。
2. 当 type 为 music、album、playlist 时，需要配合 [QQ音乐SDK](https://developer.y.qq.com/) 使用。
 * @method string getUrl() 获取多媒体地址。
说明：
1. type 为 image 时，地址为图片的预览地址；其他类型时，地址为封面图地址。
 * @method void setUrl(string $Url) 设置多媒体地址。
说明：
1. type 为 image 时，地址为图片的预览地址；其他类型时，地址为封面图地址。
 * @method integer getWidth() 获取如果Url为图片地址，标识图片宽度。
 * @method void setWidth(integer $Width) 设置如果Url为图片地址，标识图片宽度。
 * @method integer getHeight() 获取如果Url为图片地址，标识图片高度。
 * @method void setHeight(integer $Height) 设置如果Url为图片地址，标识图片高度。
 * @method string getJumpUrl() 获取多媒体详情地址。
说明：
1. 仅 type 为 image 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJumpUrl(string $JumpUrl) 设置多媒体详情地址。
说明：
1. 仅 type 为 image 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThumbURL() 获取缩略图地址。
 * @method void setThumbURL(string $ThumbURL) 设置缩略图地址。
 * @method integer getThumbWidth() 获取缩略图宽度
 * @method void setThumbWidth(integer $ThumbWidth) 设置缩略图宽度
 * @method integer getThumbHeight() 获取缩略图高度
 * @method void setThumbHeight(integer $ThumbHeight) 设置缩略图高度
 * @method string getTitle() 获取名称。
说明：
1. type 为 image 时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置名称。
说明：
1. type 为 image 时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSinger() 获取歌手名称。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSinger(string $Singer) 设置歌手名称。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SongExt getExt() 获取歌曲详情。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(SongExt $Ext) 设置歌曲详情。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishTime() 获取发布时间。
 * @method void setPublishTime(string $PublishTime) 设置发布时间。
 * @method string getSiteName() 获取站点名称
 * @method void setSiteName(string $SiteName) 设置站点名称
 * @method string getSiteIcon() 获取站点图标
 * @method void setSiteIcon(string $SiteIcon) 设置站点图标
 */
class Multimedia extends AbstractModel
{
    /**
     * @var string 多媒体类型，可选值包括 image、music、album、playlist。
说明：
1. image：图片；music：单曲，类型为单曲时，会返回详细歌手和歌曲信息；album：专辑；playlist：歌单。
2. 当 type 为 music、album、playlist 时，需要配合 [QQ音乐SDK](https://developer.y.qq.com/) 使用。
     */
    public $Type;

    /**
     * @var string 多媒体地址。
说明：
1. type 为 image 时，地址为图片的预览地址；其他类型时，地址为封面图地址。
     */
    public $Url;

    /**
     * @var integer 如果Url为图片地址，标识图片宽度。
     */
    public $Width;

    /**
     * @var integer 如果Url为图片地址，标识图片高度。
     */
    public $Height;

    /**
     * @var string 多媒体详情地址。
说明：
1. 仅 type 为 image 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JumpUrl;

    /**
     * @var string 缩略图地址。
     */
    public $ThumbURL;

    /**
     * @var integer 缩略图宽度
     */
    public $ThumbWidth;

    /**
     * @var integer 缩略图高度
     */
    public $ThumbHeight;

    /**
     * @var string 名称。
说明：
1. type 为 image 时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 歌手名称。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Singer;

    /**
     * @var SongExt 歌曲详情。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @var string 发布时间。
     */
    public $PublishTime;

    /**
     * @var string 站点名称
     */
    public $SiteName;

    /**
     * @var string 站点图标
     */
    public $SiteIcon;

    /**
     * @param string $Type 多媒体类型，可选值包括 image、music、album、playlist。
说明：
1. image：图片；music：单曲，类型为单曲时，会返回详细歌手和歌曲信息；album：专辑；playlist：歌单。
2. 当 type 为 music、album、playlist 时，需要配合 [QQ音乐SDK](https://developer.y.qq.com/) 使用。
     * @param string $Url 多媒体地址。
说明：
1. type 为 image 时，地址为图片的预览地址；其他类型时，地址为封面图地址。
     * @param integer $Width 如果Url为图片地址，标识图片宽度。
     * @param integer $Height 如果Url为图片地址，标识图片高度。
     * @param string $JumpUrl 多媒体详情地址。
说明：
1. 仅 type 为 image 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThumbURL 缩略图地址。
     * @param integer $ThumbWidth 缩略图宽度
     * @param integer $ThumbHeight 缩略图高度
     * @param string $Title 名称。
说明：
1. type 为 image 时，该字段为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Singer 歌手名称。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SongExt $Ext 歌曲详情。
说明：
1. 仅 type 为 music 时，该字段有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishTime 发布时间。
     * @param string $SiteName 站点名称
     * @param string $SiteIcon 站点图标
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("ThumbURL",$param) and $param["ThumbURL"] !== null) {
            $this->ThumbURL = $param["ThumbURL"];
        }

        if (array_key_exists("ThumbWidth",$param) and $param["ThumbWidth"] !== null) {
            $this->ThumbWidth = $param["ThumbWidth"];
        }

        if (array_key_exists("ThumbHeight",$param) and $param["ThumbHeight"] !== null) {
            $this->ThumbHeight = $param["ThumbHeight"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Singer",$param) and $param["Singer"] !== null) {
            $this->Singer = $param["Singer"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = new SongExt();
            $this->Ext->deserialize($param["Ext"]);
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("SiteName",$param) and $param["SiteName"] !== null) {
            $this->SiteName = $param["SiteName"];
        }

        if (array_key_exists("SiteIcon",$param) and $param["SiteIcon"] !== null) {
            $this->SiteIcon = $param["SiteIcon"];
        }
    }
}
