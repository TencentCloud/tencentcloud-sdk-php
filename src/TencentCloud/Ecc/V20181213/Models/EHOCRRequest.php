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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getImage() 获取图片所在的url或base64编码后的图像数据，依据InputType而定
 * @method void setImage(string $Image) 设置图片所在的url或base64编码后的图像数据，依据InputType而定
 * @method integer getInputType() 获取输出图片类型，0表示Image字段是图片所在的url，1表示Image字段是base64编码后的图像数据
 * @method void setInputType(integer $InputType) 设置输出图片类型，0表示Image字段是图片所在的url，1表示Image字段是base64编码后的图像数据
 */

/**
 *EHOCR请求参数结构体
 */
class EHOCRRequest extends AbstractModel
{
    /**
     * @var string 图片所在的url或base64编码后的图像数据，依据InputType而定
     */
    public $Image;

    /**
     * @var integer 输出图片类型，0表示Image字段是图片所在的url，1表示Image字段是base64编码后的图像数据
     */
    public $InputType;
    /**
     * @param string $Image 图片所在的url或base64编码后的图像数据，依据InputType而定
     * @param integer $InputType 输出图片类型，0表示Image字段是图片所在的url，1表示Image字段是base64编码后的图像数据
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }
    }
}
