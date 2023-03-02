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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制的混流布局参数。
 *
 * @method integer getMixLayoutMode() 获取布局模式:
1：悬浮布局；
2：屏幕分享布局；
3：九宫格布局（默认）；
4：自定义布局；

悬浮布局：默认第一个进入房间的主播（也可以指定一个主播）的视频画面会铺满整个屏幕。其他主播的视频画面从左下角开始依次按照进房顺序水平排列，显示为小画面，小画面悬浮于大画面之上。当画面数量小于等于17个时，每行4个（4 x 4排列）。当画面数量大于17个时，重新布局小画面为每行5个（5 x 5）排列。最多支持25个画面，如果用户只发送音频，仍然会占用画面位置。

屏幕分享布局：指定一个主播在屏幕左侧的大画面位置（如果不指定，那么大画面位置为背景色），其他主播自上而下依次垂直排列于右侧。当画面数量少于17个的时候，右侧每列最多8人，最多占据两列。当画面数量多于17个的时候，超过17个画面的主播从左下角开始依次水平排列。最多支持25个画面，如果主播只发送音频，仍然会占用画面位置。

九宫格布局：根据主播的数量自动调整每个画面的大小，每个主播的画面大小一致，最多支持25个画面。

自定义布局：根据需要在MixLayoutList内定制每个主播画面的布局。
 * @method void setMixLayoutMode(integer $MixLayoutMode) 设置布局模式:
1：悬浮布局；
2：屏幕分享布局；
3：九宫格布局（默认）；
4：自定义布局；

悬浮布局：默认第一个进入房间的主播（也可以指定一个主播）的视频画面会铺满整个屏幕。其他主播的视频画面从左下角开始依次按照进房顺序水平排列，显示为小画面，小画面悬浮于大画面之上。当画面数量小于等于17个时，每行4个（4 x 4排列）。当画面数量大于17个时，重新布局小画面为每行5个（5 x 5）排列。最多支持25个画面，如果用户只发送音频，仍然会占用画面位置。

屏幕分享布局：指定一个主播在屏幕左侧的大画面位置（如果不指定，那么大画面位置为背景色），其他主播自上而下依次垂直排列于右侧。当画面数量少于17个的时候，右侧每列最多8人，最多占据两列。当画面数量多于17个的时候，超过17个画面的主播从左下角开始依次水平排列。最多支持25个画面，如果主播只发送音频，仍然会占用画面位置。

九宫格布局：根据主播的数量自动调整每个画面的大小，每个主播的画面大小一致，最多支持25个画面。

自定义布局：根据需要在MixLayoutList内定制每个主播画面的布局。
 * @method array getMixLayoutList() 获取如果MixLayoutMode 选择为4自定义布局模式的话，设置此参数为每个主播所对应的布局画面的详细信息，最大不超过25个。
 * @method void setMixLayoutList(array $MixLayoutList) 设置如果MixLayoutMode 选择为4自定义布局模式的话，设置此参数为每个主播所对应的布局画面的详细信息，最大不超过25个。
 * @method string getBackGroundColor() 获取录制背景颜色，RGB的颜色表的16进制表示，每个颜色通过8bit长度标识，默认为黑色。比如橙色对应的RGB为 R:255 G:165 B:0, 那么对应的字符串描述为#FFA500，格式规范：‘#‘开头，后面跟固定RGB的颜色值
 * @method void setBackGroundColor(string $BackGroundColor) 设置录制背景颜色，RGB的颜色表的16进制表示，每个颜色通过8bit长度标识，默认为黑色。比如橙色对应的RGB为 R:255 G:165 B:0, 那么对应的字符串描述为#FFA500，格式规范：‘#‘开头，后面跟固定RGB的颜色值
 * @method string getMaxResolutionUserId() 获取在布局模式为1：悬浮布局和 2：屏幕分享布局时，设定为显示大视频画面的UserId。不填的话：悬浮布局默认是第一个进房间的主播，屏幕分享布局默认是背景色
 * @method void setMaxResolutionUserId(string $MaxResolutionUserId) 设置在布局模式为1：悬浮布局和 2：屏幕分享布局时，设定为显示大视频画面的UserId。不填的话：悬浮布局默认是第一个进房间的主播，屏幕分享布局默认是背景色
 * @method integer getMediaId() 获取主辅路标识，
0：主流（默认）；
1：辅流（屏幕分享）；
这个位置的MediaId代表的是对应MaxResolutionUserId的主辅路，MixLayoutList内代表的是自定义用户的主辅路。
 * @method void setMediaId(integer $MediaId) 设置主辅路标识，
0：主流（默认）；
1：辅流（屏幕分享）；
这个位置的MediaId代表的是对应MaxResolutionUserId的主辅路，MixLayoutList内代表的是自定义用户的主辅路。
 * @method string getBackgroundImageUrl() 获取图片的url地址， 只支持jpg， png，大小限制不超过5M，url不可包含中文。
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) 设置图片的url地址， 只支持jpg， png，大小限制不超过5M，url不可包含中文。
 * @method integer getPlaceHolderMode() 获取设置为1时代表启用占位图功能，0时代表不启用占位图功能，默认为0。启用占位图功能时，在预设位置的用户没有上行视频时可显示对应的占位图。
 * @method void setPlaceHolderMode(integer $PlaceHolderMode) 设置设置为1时代表启用占位图功能，0时代表不启用占位图功能，默认为0。启用占位图功能时，在预设位置的用户没有上行视频时可显示对应的占位图。
 * @method integer getBackgroundImageRenderMode() 获取背景画面宽高比不一致的时候处理方案，与MixLayoufList定义的RenderMode一致。
 * @method void setBackgroundImageRenderMode(integer $BackgroundImageRenderMode) 设置背景画面宽高比不一致的时候处理方案，与MixLayoufList定义的RenderMode一致。
 * @method string getDefaultSubBackgroundImage() 获取子画面占位图url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
 * @method void setDefaultSubBackgroundImage(string $DefaultSubBackgroundImage) 设置子画面占位图url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
 * @method array getWaterMarkList() 获取水印布局参数， 最多支持25个。
 * @method void setWaterMarkList(array $WaterMarkList) 设置水印布局参数， 最多支持25个。
 * @method integer getRenderMode() 获取模板布局下，背景画面宽高比不一致的时候处理方案。自定义布局不生效，与MixLayoufList定义的RenderMode一致。
 * @method void setRenderMode(integer $RenderMode) 设置模板布局下，背景画面宽高比不一致的时候处理方案。自定义布局不生效，与MixLayoufList定义的RenderMode一致。
 * @method integer getMaxResolutionUserAlign() 获取屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
 * @method void setMaxResolutionUserAlign(integer $MaxResolutionUserAlign) 设置屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
 */
class MixLayoutParams extends AbstractModel
{
    /**
     * @var integer 布局模式:
1：悬浮布局；
2：屏幕分享布局；
3：九宫格布局（默认）；
4：自定义布局；

悬浮布局：默认第一个进入房间的主播（也可以指定一个主播）的视频画面会铺满整个屏幕。其他主播的视频画面从左下角开始依次按照进房顺序水平排列，显示为小画面，小画面悬浮于大画面之上。当画面数量小于等于17个时，每行4个（4 x 4排列）。当画面数量大于17个时，重新布局小画面为每行5个（5 x 5）排列。最多支持25个画面，如果用户只发送音频，仍然会占用画面位置。

屏幕分享布局：指定一个主播在屏幕左侧的大画面位置（如果不指定，那么大画面位置为背景色），其他主播自上而下依次垂直排列于右侧。当画面数量少于17个的时候，右侧每列最多8人，最多占据两列。当画面数量多于17个的时候，超过17个画面的主播从左下角开始依次水平排列。最多支持25个画面，如果主播只发送音频，仍然会占用画面位置。

九宫格布局：根据主播的数量自动调整每个画面的大小，每个主播的画面大小一致，最多支持25个画面。

自定义布局：根据需要在MixLayoutList内定制每个主播画面的布局。
     */
    public $MixLayoutMode;

    /**
     * @var array 如果MixLayoutMode 选择为4自定义布局模式的话，设置此参数为每个主播所对应的布局画面的详细信息，最大不超过25个。
     */
    public $MixLayoutList;

    /**
     * @var string 录制背景颜色，RGB的颜色表的16进制表示，每个颜色通过8bit长度标识，默认为黑色。比如橙色对应的RGB为 R:255 G:165 B:0, 那么对应的字符串描述为#FFA500，格式规范：‘#‘开头，后面跟固定RGB的颜色值
     */
    public $BackGroundColor;

    /**
     * @var string 在布局模式为1：悬浮布局和 2：屏幕分享布局时，设定为显示大视频画面的UserId。不填的话：悬浮布局默认是第一个进房间的主播，屏幕分享布局默认是背景色
     */
    public $MaxResolutionUserId;

    /**
     * @var integer 主辅路标识，
0：主流（默认）；
1：辅流（屏幕分享）；
这个位置的MediaId代表的是对应MaxResolutionUserId的主辅路，MixLayoutList内代表的是自定义用户的主辅路。
     */
    public $MediaId;

    /**
     * @var string 图片的url地址， 只支持jpg， png，大小限制不超过5M，url不可包含中文。
     */
    public $BackgroundImageUrl;

    /**
     * @var integer 设置为1时代表启用占位图功能，0时代表不启用占位图功能，默认为0。启用占位图功能时，在预设位置的用户没有上行视频时可显示对应的占位图。
     */
    public $PlaceHolderMode;

    /**
     * @var integer 背景画面宽高比不一致的时候处理方案，与MixLayoufList定义的RenderMode一致。
     */
    public $BackgroundImageRenderMode;

    /**
     * @var string 子画面占位图url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
     */
    public $DefaultSubBackgroundImage;

    /**
     * @var array 水印布局参数， 最多支持25个。
     */
    public $WaterMarkList;

    /**
     * @var integer 模板布局下，背景画面宽高比不一致的时候处理方案。自定义布局不生效，与MixLayoufList定义的RenderMode一致。
     */
    public $RenderMode;

    /**
     * @var integer 屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
     */
    public $MaxResolutionUserAlign;

    /**
     * @param integer $MixLayoutMode 布局模式:
1：悬浮布局；
2：屏幕分享布局；
3：九宫格布局（默认）；
4：自定义布局；

悬浮布局：默认第一个进入房间的主播（也可以指定一个主播）的视频画面会铺满整个屏幕。其他主播的视频画面从左下角开始依次按照进房顺序水平排列，显示为小画面，小画面悬浮于大画面之上。当画面数量小于等于17个时，每行4个（4 x 4排列）。当画面数量大于17个时，重新布局小画面为每行5个（5 x 5）排列。最多支持25个画面，如果用户只发送音频，仍然会占用画面位置。

屏幕分享布局：指定一个主播在屏幕左侧的大画面位置（如果不指定，那么大画面位置为背景色），其他主播自上而下依次垂直排列于右侧。当画面数量少于17个的时候，右侧每列最多8人，最多占据两列。当画面数量多于17个的时候，超过17个画面的主播从左下角开始依次水平排列。最多支持25个画面，如果主播只发送音频，仍然会占用画面位置。

九宫格布局：根据主播的数量自动调整每个画面的大小，每个主播的画面大小一致，最多支持25个画面。

自定义布局：根据需要在MixLayoutList内定制每个主播画面的布局。
     * @param array $MixLayoutList 如果MixLayoutMode 选择为4自定义布局模式的话，设置此参数为每个主播所对应的布局画面的详细信息，最大不超过25个。
     * @param string $BackGroundColor 录制背景颜色，RGB的颜色表的16进制表示，每个颜色通过8bit长度标识，默认为黑色。比如橙色对应的RGB为 R:255 G:165 B:0, 那么对应的字符串描述为#FFA500，格式规范：‘#‘开头，后面跟固定RGB的颜色值
     * @param string $MaxResolutionUserId 在布局模式为1：悬浮布局和 2：屏幕分享布局时，设定为显示大视频画面的UserId。不填的话：悬浮布局默认是第一个进房间的主播，屏幕分享布局默认是背景色
     * @param integer $MediaId 主辅路标识，
0：主流（默认）；
1：辅流（屏幕分享）；
这个位置的MediaId代表的是对应MaxResolutionUserId的主辅路，MixLayoutList内代表的是自定义用户的主辅路。
     * @param string $BackgroundImageUrl 图片的url地址， 只支持jpg， png，大小限制不超过5M，url不可包含中文。
     * @param integer $PlaceHolderMode 设置为1时代表启用占位图功能，0时代表不启用占位图功能，默认为0。启用占位图功能时，在预设位置的用户没有上行视频时可显示对应的占位图。
     * @param integer $BackgroundImageRenderMode 背景画面宽高比不一致的时候处理方案，与MixLayoufList定义的RenderMode一致。
     * @param string $DefaultSubBackgroundImage 子画面占位图url地址， 只支持jpg， png，大小限制不超过5M，宽高比不一致的处理方案同 RenderMode。
     * @param array $WaterMarkList 水印布局参数， 最多支持25个。
     * @param integer $RenderMode 模板布局下，背景画面宽高比不一致的时候处理方案。自定义布局不生效，与MixLayoufList定义的RenderMode一致。
     * @param integer $MaxResolutionUserAlign 屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
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
        if (array_key_exists("MixLayoutMode",$param) and $param["MixLayoutMode"] !== null) {
            $this->MixLayoutMode = $param["MixLayoutMode"];
        }

        if (array_key_exists("MixLayoutList",$param) and $param["MixLayoutList"] !== null) {
            $this->MixLayoutList = [];
            foreach ($param["MixLayoutList"] as $key => $value){
                $obj = new MixLayout();
                $obj->deserialize($value);
                array_push($this->MixLayoutList, $obj);
            }
        }

        if (array_key_exists("BackGroundColor",$param) and $param["BackGroundColor"] !== null) {
            $this->BackGroundColor = $param["BackGroundColor"];
        }

        if (array_key_exists("MaxResolutionUserId",$param) and $param["MaxResolutionUserId"] !== null) {
            $this->MaxResolutionUserId = $param["MaxResolutionUserId"];
        }

        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("PlaceHolderMode",$param) and $param["PlaceHolderMode"] !== null) {
            $this->PlaceHolderMode = $param["PlaceHolderMode"];
        }

        if (array_key_exists("BackgroundImageRenderMode",$param) and $param["BackgroundImageRenderMode"] !== null) {
            $this->BackgroundImageRenderMode = $param["BackgroundImageRenderMode"];
        }

        if (array_key_exists("DefaultSubBackgroundImage",$param) and $param["DefaultSubBackgroundImage"] !== null) {
            $this->DefaultSubBackgroundImage = $param["DefaultSubBackgroundImage"];
        }

        if (array_key_exists("WaterMarkList",$param) and $param["WaterMarkList"] !== null) {
            $this->WaterMarkList = [];
            foreach ($param["WaterMarkList"] as $key => $value){
                $obj = new WaterMark();
                $obj->deserialize($value);
                array_push($this->WaterMarkList, $obj);
            }
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("MaxResolutionUserAlign",$param) and $param["MaxResolutionUserAlign"] !== null) {
            $this->MaxResolutionUserAlign = $param["MaxResolutionUserAlign"];
        }
    }
}
