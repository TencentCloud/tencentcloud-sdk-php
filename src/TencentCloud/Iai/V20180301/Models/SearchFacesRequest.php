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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getGroupIds() 获取希望搜索的人员库列表，上限100个。
 * @method void setGroupIds(array $GroupIds) 设置希望搜索的人员库列表，上限100个。
 * @method string getImage() 获取图片 base64 数据。支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImage(string $Image) 设置图片 base64 数据。支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method string getUrl() 获取图片的 Url、Image必须提供一个，如果都提供，只使用 Url。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setUrl(string $Url) 设置图片的 Url、Image必须提供一个，如果都提供，只使用 Url。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method integer getMaxFaceNum() 获取最多处理的人脸数目。默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。 
MaxFaceNum用于，当待识别图片包含多张人脸时，要搜索的人脸数量。 
当 MaxFaceNum 不为1时，设MaxFaceNum=M，则实际上是 M:N 的人脸搜索（N为待搜索的人脸数）。
 * @method void setMaxFaceNum(integer $MaxFaceNum) 设置最多处理的人脸数目。默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。 
MaxFaceNum用于，当待识别图片包含多张人脸时，要搜索的人脸数量。 
当 MaxFaceNum 不为1时，设MaxFaceNum=M，则实际上是 M:N 的人脸搜索（N为待搜索的人脸数）。
 * @method integer getMinFaceSize() 获取人脸长和宽的最小尺寸，单位为像素。默认为80。低于40将影响搜索精度。建议设置为80。
 * @method void setMinFaceSize(integer $MinFaceSize) 设置人脸长和宽的最小尺寸，单位为像素。默认为80。低于40将影响搜索精度。建议设置为80。
 * @method integer getMaxPersonNum() 获取被检测到的人脸，对应最多返回的最相似人员数目。默认值为5，最大值为10。  
例，设MaxFaceNum为3，MaxPersonNum为5，则最多可能返回3*5=15个人员。
 * @method void setMaxPersonNum(integer $MaxPersonNum) 设置被检测到的人脸，对应最多返回的最相似人员数目。默认值为5，最大值为10。  
例，设MaxFaceNum为3，MaxPersonNum为5，则最多可能返回3*5=15个人员。
 */

/**
 *SearchFaces请求参数结构体
 */
class SearchFacesRequest extends AbstractModel
{
    /**
     * @var array 希望搜索的人员库列表，上限100个。
     */
    public $GroupIds;

    /**
     * @var string 图片 base64 数据。支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $Image;

    /**
     * @var string 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $Url;

    /**
     * @var integer 最多处理的人脸数目。默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。 
MaxFaceNum用于，当待识别图片包含多张人脸时，要搜索的人脸数量。 
当 MaxFaceNum 不为1时，设MaxFaceNum=M，则实际上是 M:N 的人脸搜索（N为待搜索的人脸数）。
     */
    public $MaxFaceNum;

    /**
     * @var integer 人脸长和宽的最小尺寸，单位为像素。默认为80。低于40将影响搜索精度。建议设置为80。
     */
    public $MinFaceSize;

    /**
     * @var integer 被检测到的人脸，对应最多返回的最相似人员数目。默认值为5，最大值为10。  
例，设MaxFaceNum为3，MaxPersonNum为5，则最多可能返回3*5=15个人员。
     */
    public $MaxPersonNum;
    /**
     * @param array $GroupIds 希望搜索的人员库列表，上限100个。
     * @param string $Image 图片 base64 数据。支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param string $Url 图片的 Url、Image必须提供一个，如果都提供，只使用 Url。
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param integer $MaxFaceNum 最多处理的人脸数目。默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。 
MaxFaceNum用于，当待识别图片包含多张人脸时，要搜索的人脸数量。 
当 MaxFaceNum 不为1时，设MaxFaceNum=M，则实际上是 M:N 的人脸搜索（N为待搜索的人脸数）。
     * @param integer $MinFaceSize 人脸长和宽的最小尺寸，单位为像素。默认为80。低于40将影响搜索精度。建议设置为80。
     * @param integer $MaxPersonNum 被检测到的人脸，对应最多返回的最相似人员数目。默认值为5，最大值为10。  
例，设MaxFaceNum为3，MaxPersonNum为5，则最多可能返回3*5=15个人员。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MaxFaceNum",$param) and $param["MaxFaceNum"] !== null) {
            $this->MaxFaceNum = $param["MaxFaceNum"];
        }

        if (array_key_exists("MinFaceSize",$param) and $param["MinFaceSize"] !== null) {
            $this->MinFaceSize = $param["MinFaceSize"];
        }

        if (array_key_exists("MaxPersonNum",$param) and $param["MaxPersonNum"] !== null) {
            $this->MaxPersonNum = $param["MaxPersonNum"];
        }
    }
}
