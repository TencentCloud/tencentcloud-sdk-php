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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomPerson请求参数结构体
 *
 * @method string getName() 获取自定义人物姓名
 * @method void setName(string $Name) 设置自定义人物姓名
 * @method string getBasicInfo() 获取自定义人物简要信息(仅用于标记，不支持检索)
 * @method void setBasicInfo(string $BasicInfo) 设置自定义人物简要信息(仅用于标记，不支持检索)
 * @method string getCategoryId() 获取自定义分类ID，如不存在接口会报错
 * @method void setCategoryId(string $CategoryId) 设置自定义分类ID，如不存在接口会报错
 * @method string getImageURL() 获取自定义人物图片URL，可支持任意地址，推荐使用COS
 * @method void setImageURL(string $ImageURL) 设置自定义人物图片URL，可支持任意地址，推荐使用COS
 * @method string getImage() 获取原始图片base64编码后的数据
 * @method void setImage(string $Image) 设置原始图片base64编码后的数据
 */
class CreateCustomPersonRequest extends AbstractModel
{
    /**
     * @var string 自定义人物姓名
     */
    public $Name;

    /**
     * @var string 自定义人物简要信息(仅用于标记，不支持检索)
     */
    public $BasicInfo;

    /**
     * @var string 自定义分类ID，如不存在接口会报错
     */
    public $CategoryId;

    /**
     * @var string 自定义人物图片URL，可支持任意地址，推荐使用COS
     */
    public $ImageURL;

    /**
     * @var string 原始图片base64编码后的数据
     */
    public $Image;

    /**
     * @param string $Name 自定义人物姓名
     * @param string $BasicInfo 自定义人物简要信息(仅用于标记，不支持检索)
     * @param string $CategoryId 自定义分类ID，如不存在接口会报错
     * @param string $ImageURL 自定义人物图片URL，可支持任意地址，推荐使用COS
     * @param string $Image 原始图片base64编码后的数据
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = $param["BasicInfo"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ImageURL",$param) and $param["ImageURL"] !== null) {
            $this->ImageURL = $param["ImageURL"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }
    }
}
