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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片消息
 *
 * @method string getUUID() 获取图片的唯一标识，客户端用于索引图片的键值。
 * @method void setUUID(string $UUID) 设置图片的唯一标识，客户端用于索引图片的键值。
 * @method integer getImageFormat() 获取图片格式。
JPG = 1
GIF = 2
PNG = 3
BMP = 4
其他 = 255

 * @method void setImageFormat(integer $ImageFormat) 设置图片格式。
JPG = 1
GIF = 2
PNG = 3
BMP = 4
其他 = 255

 * @method array getImageInfoList() 获取图片信息
 * @method void setImageInfoList(array $ImageInfoList) 设置图片信息
 */
class ImageMsgContent extends AbstractModel
{
    /**
     * @var string 图片的唯一标识，客户端用于索引图片的键值。
     */
    public $UUID;

    /**
     * @var integer 图片格式。
JPG = 1
GIF = 2
PNG = 3
BMP = 4
其他 = 255

     */
    public $ImageFormat;

    /**
     * @var array 图片信息
     */
    public $ImageInfoList;

    /**
     * @param string $UUID 图片的唯一标识，客户端用于索引图片的键值。
     * @param integer $ImageFormat 图片格式。
JPG = 1
GIF = 2
PNG = 3
BMP = 4
其他 = 255

     * @param array $ImageInfoList 图片信息
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
        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("ImageFormat",$param) and $param["ImageFormat"] !== null) {
            $this->ImageFormat = $param["ImageFormat"];
        }

        if (array_key_exists("ImageInfoList",$param) and $param["ImageInfoList"] !== null) {
            $this->ImageInfoList = [];
            foreach ($param["ImageInfoList"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfoList, $obj);
            }
        }
    }
}
