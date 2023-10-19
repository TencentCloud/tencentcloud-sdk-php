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
 * 单张图片信息
 *
 * @method integer getType() 获取图片类型：
1-原图
2-大图
3-缩略图

 * @method void setType(integer $Type) 设置图片类型：
1-原图
2-大图
3-缩略图

 * @method integer getSize() 获取图片数据大小，单位：字节。
 * @method void setSize(integer $Size) 设置图片数据大小，单位：字节。
 * @method integer getWidth() 获取图片宽度，单位为像素。
 * @method void setWidth(integer $Width) 设置图片宽度，单位为像素。
 * @method integer getHeight() 获取图片高度，单位为像素。
 * @method void setHeight(integer $Height) 设置图片高度，单位为像素。
 * @method string getURL() 获取图片下载地址。
 * @method void setURL(string $URL) 设置图片下载地址。
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var integer 图片类型：
1-原图
2-大图
3-缩略图

     */
    public $Type;

    /**
     * @var integer 图片数据大小，单位：字节。
     */
    public $Size;

    /**
     * @var integer 图片宽度，单位为像素。
     */
    public $Width;

    /**
     * @var integer 图片高度，单位为像素。
     */
    public $Height;

    /**
     * @var string 图片下载地址。
     */
    public $URL;

    /**
     * @param integer $Type 图片类型：
1-原图
2-大图
3-缩略图

     * @param integer $Size 图片数据大小，单位：字节。
     * @param integer $Width 图片宽度，单位为像素。
     * @param integer $Height 图片高度，单位为像素。
     * @param string $URL 图片下载地址。
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
