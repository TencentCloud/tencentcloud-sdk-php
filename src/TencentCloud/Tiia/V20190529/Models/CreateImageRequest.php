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
若EntityId已存在，则对其追加图片。
 * @method void setEntityId(string $EntityId) 设置物品ID，最多支持64个字符。 
若EntityId已存在，则对其追加图片。
 * @method string getPicName() 获取图片名称，最多支持64个字符， 
同一个EntityId，最大支持5张图。如果图片名称已存在，则会更新库中的图片。
 * @method void setPicName(string $PicName) 设置图片名称，最多支持64个字符， 
同一个EntityId，最大支持5张图。如果图片名称已存在，则会更新库中的图片。
 * @method string getImageUrl() 获取图片的 Url 。对应图片 base64 编码后大小不可超过2M。  
Url、Image必须提供一个，如果都提供，只使用 Url。 
图片分辨率不超过1920*1080。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 。对应图片 base64 编码后大小不可超过2M。  
Url、Image必须提供一个，如果都提供，只使用 Url。 
图片分辨率不超过1920*1080。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method string getImageBase64() 获取图片 base64 数据，base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImageBase64(string $ImageBase64) 设置图片 base64 数据，base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method string getCustomContent() 获取用户自定义的内容，最多支持4096个字符，查询时原样带回。
 * @method void setCustomContent(string $CustomContent) 设置用户自定义的内容，最多支持4096个字符，查询时原样带回。
 * @method string getTags() 获取图片自定义标签，最多不超过10个，格式为JSON。
 * @method void setTags(string $Tags) 设置图片自定义标签，最多不超过10个，格式为JSON。
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string 图库ID。
     */
    public $GroupId;

    /**
     * @var string 物品ID，最多支持64个字符。 
若EntityId已存在，则对其追加图片。
     */
    public $EntityId;

    /**
     * @var string 图片名称，最多支持64个字符， 
同一个EntityId，最大支持5张图。如果图片名称已存在，则会更新库中的图片。
     */
    public $PicName;

    /**
     * @var string 图片的 Url 。对应图片 base64 编码后大小不可超过2M。  
Url、Image必须提供一个，如果都提供，只使用 Url。 
图片分辨率不超过1920*1080。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $ImageUrl;

    /**
     * @var string 图片 base64 数据，base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $ImageBase64;

    /**
     * @var string 用户自定义的内容，最多支持4096个字符，查询时原样带回。
     */
    public $CustomContent;

    /**
     * @var string 图片自定义标签，最多不超过10个，格式为JSON。
     */
    public $Tags;

    /**
     * @param string $GroupId 图库ID。
     * @param string $EntityId 物品ID，最多支持64个字符。 
若EntityId已存在，则对其追加图片。
     * @param string $PicName 图片名称，最多支持64个字符， 
同一个EntityId，最大支持5张图。如果图片名称已存在，则会更新库中的图片。
     * @param string $ImageUrl 图片的 Url 。对应图片 base64 编码后大小不可超过2M。  
Url、Image必须提供一个，如果都提供，只使用 Url。 
图片分辨率不超过1920*1080。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param string $ImageBase64 图片 base64 数据，base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param string $CustomContent 用户自定义的内容，最多支持4096个字符，查询时原样带回。
     * @param string $Tags 图片自定义标签，最多不超过10个，格式为JSON。
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

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("CustomContent",$param) and $param["CustomContent"] !== null) {
            $this->CustomContent = $param["CustomContent"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
