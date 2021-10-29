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
 * @method string getImageUrl() 获取图片的 Url 。对应图片 base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
Url、Image必须提供一个，如果都提供，只使用 Url。 
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 。对应图片 base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
Url、Image必须提供一个，如果都提供，只使用 Url。 
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method string getImageBase64() 获取图片 base64 数据，base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImageBase64(string $ImageBase64) 设置图片 base64 数据，base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method integer getMatchThreshold() 获取出参Score中，只有超过MatchThreshold值的结果才会返回。默认为0
 * @method void setMatchThreshold(integer $MatchThreshold) 设置出参Score中，只有超过MatchThreshold值的结果才会返回。默认为0
 * @method integer getOffset() 获取起始序号，默认值为0。
 * @method void setOffset(integer $Offset) 设置起始序号，默认值为0。
 * @method integer getLimit() 获取返回数量，默认值为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认值为10，最大值为100。
 * @method string getFilter() 获取针对入库时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
 * @method void setFilter(string $Filter) 设置针对入库时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
 */
class SearchImageRequest extends AbstractModel
{
    /**
     * @var string 图库名称。
     */
    public $GroupId;

    /**
     * @var string 图片的 Url 。对应图片 base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
Url、Image必须提供一个，如果都提供，只使用 Url。 
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
     * @var integer 出参Score中，只有超过MatchThreshold值的结果才会返回。默认为0
     */
    public $MatchThreshold;

    /**
     * @var integer 起始序号，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认值为10，最大值为100。
     */
    public $Limit;

    /**
     * @var string 针对入库时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
     */
    public $Filter;

    /**
     * @param string $GroupId 图库名称。
     * @param string $ImageUrl 图片的 Url 。对应图片 base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
Url、Image必须提供一个，如果都提供，只使用 Url。 
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param string $ImageBase64 图片 base64 数据，base64 编码后大小不可超过2M。 
图片分辨率不超过1920*1080。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param integer $MatchThreshold 出参Score中，只有超过MatchThreshold值的结果才会返回。默认为0
     * @param integer $Offset 起始序号，默认值为0。
     * @param integer $Limit 返回数量，默认值为10，最大值为100。
     * @param string $Filter 针对入库时提交的Tags信息进行条件过滤。支持>、>=、 <、 <=、=，!=，多个条件之间支持AND和OR进行连接。
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

        if (array_key_exists("MatchThreshold",$param) and $param["MatchThreshold"] !== null) {
            $this->MatchThreshold = $param["MatchThreshold"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}
