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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchImage请求参数结构体
 *
 * @method string getGroupId() 获取图库名称。
 * @method void setGroupId(string $GroupId) 设置图库名称。
 * @method string getImageUrl() 获取图片的 Url 。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
建议：
• 图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
建议：
• 图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
 * @method string getImageBase64() 获取图片 base64 数据。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
 * @method void setImageBase64(string $ImageBase64) 设置图片 base64 数据。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
 * @method integer getLimit() 获取返回结果的数量，默认值为10，最大值为100。
按照相似度分数由高到低排序。
**<font color=#1E90FF>服务类型为图案花纹搜索时Limit = 1，最多只能返回1个结果。</font>**
 * @method void setLimit(integer $Limit) 设置返回结果的数量，默认值为10，最大值为100。
按照相似度分数由高到低排序。
**<font color=#1E90FF>服务类型为图案花纹搜索时Limit = 1，最多只能返回1个结果。</font>**
 * @method integer getOffset() 获取返回结果的起始序号，默认值为0。
 * @method void setOffset(integer $Offset) 设置返回结果的起始序号，默认值为0。
 * @method integer getMatchThreshold() 获取匹配阈值。
只有图片相似度分数超过匹配阈值的结果才会返回。
当MatchThreshold为0（默认值）时，各服务类型将按照以下默认的匹配阈值进行结果过滤：
• 通用图像搜索1.0版：50。
• 商品图像搜索2.0升级版：45。
• 商品图像搜索1.0版：28。
• 图案花纹搜索1.0版：56。
建议：
可以手动调整MatchThreshold值来控制输出结果的范围。如果发现无检索结果，可能是因为图片相似度较低导致检索结果被匹配阈值过滤，建议调整为较低的阈值后再次尝试检索。
 * @method void setMatchThreshold(integer $MatchThreshold) 设置匹配阈值。
只有图片相似度分数超过匹配阈值的结果才会返回。
当MatchThreshold为0（默认值）时，各服务类型将按照以下默认的匹配阈值进行结果过滤：
• 通用图像搜索1.0版：50。
• 商品图像搜索2.0升级版：45。
• 商品图像搜索1.0版：28。
• 图案花纹搜索1.0版：56。
建议：
可以手动调整MatchThreshold值来控制输出结果的范围。如果发现无检索结果，可能是因为图片相似度较低导致检索结果被匹配阈值过滤，建议调整为较低的阈值后再次尝试检索。
 * @method string getFilter() 获取标签过滤条件。
针对创建图片时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
 * @method void setFilter(string $Filter) 设置标签过滤条件。
针对创建图片时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
 * @method ImageRect getImageRect() 获取图像主体区域。
若设置主体区域，提取指定的区域进行检索。
 * @method void setImageRect(ImageRect $ImageRect) 设置图像主体区域。
若设置主体区域，提取指定的区域进行检索。
 * @method boolean getEnableDetect() 获取是否需要启用主体识别，默认为**TRUE** 。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体进行检索并进行主体识别。主体识别结果可在**Response中**获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图检索图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 * @method void setEnableDetect(boolean $EnableDetect) 设置是否需要启用主体识别，默认为**TRUE** 。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体进行检索并进行主体识别。主体识别结果可在**Response中**获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图检索图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 * @method integer getCategoryId() 获取图像类目ID。
若设置类目ID，提取以下类目的主体进行检索。
类目取值说明：
0：上衣。
1：裙装。
2：下装。
3：包。
4：鞋。
5：配饰。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 * @method void setCategoryId(integer $CategoryId) 设置图像类目ID。
若设置类目ID，提取以下类目的主体进行检索。
类目取值说明：
0：上衣。
1：裙装。
2：下装。
3：包。
4：鞋。
5：配饰。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 */
class SearchImageRequest extends AbstractModel
{
    /**
     * @var string 图库名称。
     */
    public $GroupId;

    /**
     * @var string 图片的 Url 。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
建议：
• 图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var string 图片 base64 数据。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
     */
    public $ImageBase64;

    /**
     * @var integer 返回结果的数量，默认值为10，最大值为100。
按照相似度分数由高到低排序。
**<font color=#1E90FF>服务类型为图案花纹搜索时Limit = 1，最多只能返回1个结果。</font>**
     */
    public $Limit;

    /**
     * @var integer 返回结果的起始序号，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 匹配阈值。
只有图片相似度分数超过匹配阈值的结果才会返回。
当MatchThreshold为0（默认值）时，各服务类型将按照以下默认的匹配阈值进行结果过滤：
• 通用图像搜索1.0版：50。
• 商品图像搜索2.0升级版：45。
• 商品图像搜索1.0版：28。
• 图案花纹搜索1.0版：56。
建议：
可以手动调整MatchThreshold值来控制输出结果的范围。如果发现无检索结果，可能是因为图片相似度较低导致检索结果被匹配阈值过滤，建议调整为较低的阈值后再次尝试检索。
     */
    public $MatchThreshold;

    /**
     * @var string 标签过滤条件。
针对创建图片时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
     */
    public $Filter;

    /**
     * @var ImageRect 图像主体区域。
若设置主体区域，提取指定的区域进行检索。
     */
    public $ImageRect;

    /**
     * @var boolean 是否需要启用主体识别，默认为**TRUE** 。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体进行检索并进行主体识别。主体识别结果可在**Response中**获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图检索图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
     */
    public $EnableDetect;

    /**
     * @var integer 图像类目ID。
若设置类目ID，提取以下类目的主体进行检索。
类目取值说明：
0：上衣。
1：裙装。
2：下装。
3：包。
4：鞋。
5：配饰。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
     */
    public $CategoryId;

    /**
     * @param string $GroupId 图库名称。
     * @param string $ImageUrl 图片的 Url 。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
建议：
• 图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
     * @param string $ImageBase64 图片 base64 数据。
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
     * @param integer $Limit 返回结果的数量，默认值为10，最大值为100。
按照相似度分数由高到低排序。
**<font color=#1E90FF>服务类型为图案花纹搜索时Limit = 1，最多只能返回1个结果。</font>**
     * @param integer $Offset 返回结果的起始序号，默认值为0。
     * @param integer $MatchThreshold 匹配阈值。
只有图片相似度分数超过匹配阈值的结果才会返回。
当MatchThreshold为0（默认值）时，各服务类型将按照以下默认的匹配阈值进行结果过滤：
• 通用图像搜索1.0版：50。
• 商品图像搜索2.0升级版：45。
• 商品图像搜索1.0版：28。
• 图案花纹搜索1.0版：56。
建议：
可以手动调整MatchThreshold值来控制输出结果的范围。如果发现无检索结果，可能是因为图片相似度较低导致检索结果被匹配阈值过滤，建议调整为较低的阈值后再次尝试检索。
     * @param string $Filter 标签过滤条件。
针对创建图片时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
     * @param ImageRect $ImageRect 图像主体区域。
若设置主体区域，提取指定的区域进行检索。
     * @param boolean $EnableDetect 是否需要启用主体识别，默认为**TRUE** 。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体进行检索并进行主体识别。主体识别结果可在**Response中**获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图检索图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
     * @param integer $CategoryId 图像类目ID。
若设置类目ID，提取以下类目的主体进行检索。
类目取值说明：
0：上衣。
1：裙装。
2：下装。
3：包。
4：鞋。
5：配饰。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("MatchThreshold",$param) and $param["MatchThreshold"] !== null) {
            $this->MatchThreshold = $param["MatchThreshold"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("ImageRect",$param) and $param["ImageRect"] !== null) {
            $this->ImageRect = new ImageRect();
            $this->ImageRect->deserialize($param["ImageRect"]);
        }

        if (array_key_exists("EnableDetect",$param) and $param["EnableDetect"] !== null) {
            $this->EnableDetect = $param["EnableDetect"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }
    }
}
