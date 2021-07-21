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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生成白板板书时的白板参数，例如白板宽高等
 *
 * @method integer getWidth() 获取白板宽度大小，默认为1280，有效取值范围[0，2560]
 * @method void setWidth(integer $Width) 设置白板宽度大小，默认为1280，有效取值范围[0，2560]
 * @method integer getHeight() 获取白板高度大小，默认为720，有效取值范围[0，2560]
 * @method void setHeight(integer $Height) 设置白板高度大小，默认为720，有效取值范围[0，2560]
 * @method string getInitParams() 获取白板初始化参数的JSON转义字符串，透传到白板 SDK
 * @method void setInitParams(string $InitParams) 设置白板初始化参数的JSON转义字符串，透传到白板 SDK
 */
class SnapshotWhiteboard extends AbstractModel
{
    /**
     * @var integer 白板宽度大小，默认为1280，有效取值范围[0，2560]
     */
    public $Width;

    /**
     * @var integer 白板高度大小，默认为720，有效取值范围[0，2560]
     */
    public $Height;

    /**
     * @var string 白板初始化参数的JSON转义字符串，透传到白板 SDK
     */
    public $InitParams;

    /**
     * @param integer $Width 白板宽度大小，默认为1280，有效取值范围[0，2560]
     * @param integer $Height 白板高度大小，默认为720，有效取值范围[0，2560]
     * @param string $InitParams 白板初始化参数的JSON转义字符串，透传到白板 SDK
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = $param["InitParams"];
        }
    }
}
