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
 * CreateImage请求参数结构体
 *
 * @method string getGroupId() 获取图库ID。
 * @method void setGroupId(string $GroupId) 设置图库ID。
 * @method string getEntityId() 获取物品ID，最多支持64个字符。 
一个物品ID可以包含多张图片，若EntityId已存在，则对其追加图片。同一个EntityId，最大支持10张图。
 * @method void setEntityId(string $EntityId) 设置物品ID，最多支持64个字符。 
一个物品ID可以包含多张图片，若EntityId已存在，则对其追加图片。同一个EntityId，最大支持10张图。
 * @method string getPicName() 获取图片名称，最多支持64个字符， 
PicName唯一确定一张图片，具有唯一性。
 * @method void setPicName(string $PicName) 设置图片名称，最多支持64个字符， 
PicName唯一确定一张图片，具有唯一性。
 * @method string getImageUrl() 获取图片的 Url 。对应图片 base64 编码后大小不可超过5M。  
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
建议：
• 图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 。对应图片 base64 编码后大小不可超过5M。  
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
建议：
• 图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
 * @method string getCustomContent() 获取图片自定义备注内容，最多支持4096个字符，查询时原样带回。
 * @method void setCustomContent(string $CustomContent) 设置图片自定义备注内容，最多支持4096个字符，查询时原样带回。
 * @method string getImageBase64() 获取图片 base64 数据，base64 编码后大小不可超过5M。 
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
 * @method void setImageBase64(string $ImageBase64) 设置图片 base64 数据，base64 编码后大小不可超过5M。 
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
 * @method string getTags() 获取图片自定义标签，最多不超过10个，格式为JSON。
 * @method void setTags(string $Tags) 设置图片自定义标签，最多不超过10个，格式为JSON。
 * @method boolean getEnableDetect() 获取是否需要启用主体识别，默认为**TRUE**。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体创建图片并进行主体识别。主体识别结果可在**Response**中获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图创建图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 * @method void setEnableDetect(boolean $EnableDetect) 设置是否需要启用主体识别，默认为**TRUE**。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体创建图片并进行主体识别。主体识别结果可在**Response**中获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图创建图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 * @method integer getCategoryId() 获取图像类目ID。
若设置类目ID，提取以下类目的主体创建图片。
类目取值说明：
0：上衣。
1：裙装。
2：下装。
3：包。
4：鞋。
5：配饰。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 * @method void setCategoryId(integer $CategoryId) 设置图像类目ID。
若设置类目ID，提取以下类目的主体创建图片。
类目取值说明：
0：上衣。
1：裙装。
2：下装。
3：包。
4：鞋。
5：配饰。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
 * @method Rect getImageRect() 获取图像主体区域。
若设置主体区域，提取指定的区域创建图片。
 * @method void setImageRect(Rect $ImageRect) 设置图像主体区域。
若设置主体区域，提取指定的区域创建图片。
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string 图库ID。
     */
    public $GroupId;

    /**
     * @var string 物品ID，最多支持64个字符。 
一个物品ID可以包含多张图片，若EntityId已存在，则对其追加图片。同一个EntityId，最大支持10张图。
     */
    public $EntityId;

    /**
     * @var string 图片名称，最多支持64个字符， 
PicName唯一确定一张图片，具有唯一性。
     */
    public $PicName;

    /**
     * @var string 图片的 Url 。对应图片 base64 编码后大小不可超过5M。  
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
     * @var string 图片自定义备注内容，最多支持4096个字符，查询时原样带回。
     */
    public $CustomContent;

    /**
     * @var string 图片 base64 数据，base64 编码后大小不可超过5M。 
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
     */
    public $ImageBase64;

    /**
     * @var string 图片自定义标签，最多不超过10个，格式为JSON。
     */
    public $Tags;

    /**
     * @var boolean 是否需要启用主体识别，默认为**TRUE**。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体创建图片并进行主体识别。主体识别结果可在**Response**中获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图创建图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
     */
    public $EnableDetect;

    /**
     * @var integer 图像类目ID。
若设置类目ID，提取以下类目的主体创建图片。
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
     * @var Rect 图像主体区域。
若设置主体区域，提取指定的区域创建图片。
     */
    public $ImageRect;

    /**
     * @param string $GroupId 图库ID。
     * @param string $EntityId 物品ID，最多支持64个字符。 
一个物品ID可以包含多张图片，若EntityId已存在，则对其追加图片。同一个EntityId，最大支持10张图。
     * @param string $PicName 图片名称，最多支持64个字符， 
PicName唯一确定一张图片，具有唯一性。
     * @param string $ImageUrl 图片的 Url 。对应图片 base64 编码后大小不可超过5M。  
ImageUrl和ImageBase64必须提供一个，如果都提供，只使用ImageUrl。
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：对应图片 base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
建议：
• 图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的Url速度和稳定性可能受一定影响。
     * @param string $CustomContent 图片自定义备注内容，最多支持4096个字符，查询时原样带回。
     * @param string $ImageBase64 图片 base64 数据，base64 编码后大小不可超过5M。 
图片限制：
• 图片格式：支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
• 图片大小：base64 编码后大小不可超过5M。图片分辨率不超过4096\*4096。
• 如果在商品图像搜索中开启主体识别，分辨率不超过2000\*2000，图片长宽比小于10。
     * @param string $Tags 图片自定义标签，最多不超过10个，格式为JSON。
     * @param boolean $EnableDetect 是否需要启用主体识别，默认为**TRUE**。
• 为**TRUE**时，启用主体识别，返回主体信息。若没有指定**ImageRect**，自动提取最大面积主体创建图片并进行主体识别。主体识别结果可在**Response**中获取。
• 为**FALSE**时，不启用主体识别，不返回主体信息。若没有指定**ImageRect**，以整张图创建图片。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
     * @param integer $CategoryId 图像类目ID。
若设置类目ID，提取以下类目的主体创建图片。
类目取值说明：
0：上衣。
1：裙装。
2：下装。
3：包。
4：鞋。
5：配饰。
**<font color=#1E90FF>注意：仅服务类型为商品图像搜索时才生效。</font>**
     * @param Rect $ImageRect 图像主体区域。
若设置主体区域，提取指定的区域创建图片。
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

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("PicName",$param) and $param["PicName"] !== null) {
            $this->PicName = $param["PicName"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("CustomContent",$param) and $param["CustomContent"] !== null) {
            $this->CustomContent = $param["CustomContent"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("EnableDetect",$param) and $param["EnableDetect"] !== null) {
            $this->EnableDetect = $param["EnableDetect"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ImageRect",$param) and $param["ImageRect"] !== null) {
            $this->ImageRect = new Rect();
            $this->ImageRect->deserialize($param["ImageRect"]);
        }
    }
}
