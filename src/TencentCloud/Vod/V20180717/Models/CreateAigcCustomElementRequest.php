<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcCustomElement请求参数结构体
 *
 * @method string getElementName() 获取主体名称。不能超过20个字符
 * @method void setElementName(string $ElementName) 设置主体名称。不能超过20个字符
 * @method string getElementDescription() 获取主体描述。

不能超过100个字符。
 * @method void setElementDescription(string $ElementDescription) 设置主体描述。

不能超过100个字符。
 * @method string getElementFrontalImage() 获取主体正面参考图。
支持传入图片URL（确保可访问）
图片格式支持.jpg / .jpeg / .png
图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间。
 * @method void setElementFrontalImage(string $ElementFrontalImage) 设置主体正面参考图。
支持传入图片URL（确保可访问）
图片格式支持.jpg / .jpeg / .png
图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间。
 * @method array getElementReferList() 获取主体其他参考列表  可通过上传多张、不同角度的主体参考图来定义主体外观 至少上传1张参考图，至多上传3张参考图。
 * @method void setElementReferList(array $ElementReferList) 设置主体其他参考列表  可通过上传多张、不同角度的主体参考图来定义主体外观 至少上传1张参考图，至多上传3张参考图。
 */
class CreateAigcCustomElementRequest extends AbstractModel
{
    /**
     * @var string 主体名称。不能超过20个字符
     */
    public $ElementName;

    /**
     * @var string 主体描述。

不能超过100个字符。
     */
    public $ElementDescription;

    /**
     * @var string 主体正面参考图。
支持传入图片URL（确保可访问）
图片格式支持.jpg / .jpeg / .png
图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间。
     */
    public $ElementFrontalImage;

    /**
     * @var array 主体其他参考列表  可通过上传多张、不同角度的主体参考图来定义主体外观 至少上传1张参考图，至多上传3张参考图。
     */
    public $ElementReferList;

    /**
     * @param string $ElementName 主体名称。不能超过20个字符
     * @param string $ElementDescription 主体描述。

不能超过100个字符。
     * @param string $ElementFrontalImage 主体正面参考图。
支持传入图片URL（确保可访问）
图片格式支持.jpg / .jpeg / .png
图片文件大小不能超过10MB，图片宽高尺寸不小于300px，图片宽高比要在1:2.5 ~ 2.5:1之间。
     * @param array $ElementReferList 主体其他参考列表  可通过上传多张、不同角度的主体参考图来定义主体外观 至少上传1张参考图，至多上传3张参考图。
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
        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ElementDescription",$param) and $param["ElementDescription"] !== null) {
            $this->ElementDescription = $param["ElementDescription"];
        }

        if (array_key_exists("ElementFrontalImage",$param) and $param["ElementFrontalImage"] !== null) {
            $this->ElementFrontalImage = $param["ElementFrontalImage"];
        }

        if (array_key_exists("ElementReferList",$param) and $param["ElementReferList"] !== null) {
            $this->ElementReferList = [];
            foreach ($param["ElementReferList"] as $key => $value){
                $obj = new ElementReferInfo();
                $obj->deserialize($value);
                array_push($this->ElementReferList, $obj);
            }
        }
    }
}
