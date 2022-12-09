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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 印章信息
 *
 * @method string getSealBody() 获取印章主体内容
 * @method void setSealBody(string $SealBody) 设置印章主体内容
 * @method Rect getLocation() 获取印章坐标
 * @method void setLocation(Rect $Location) 设置印章坐标
 * @method array getOtherTexts() 获取印章其它文本内容
 * @method void setOtherTexts(array $OtherTexts) 设置印章其它文本内容
 * @method string getSealShape() 获取印章类型，表示为:
圆形印章：0
椭圆形印章：1
方形印章：2
菱形印章：3
三角形印章：4
 * @method void setSealShape(string $SealShape) 设置印章类型，表示为:
圆形印章：0
椭圆形印章：1
方形印章：2
菱形印章：3
三角形印章：4
 */
class SealInfo extends AbstractModel
{
    /**
     * @var string 印章主体内容
     */
    public $SealBody;

    /**
     * @var Rect 印章坐标
     */
    public $Location;

    /**
     * @var array 印章其它文本内容
     */
    public $OtherTexts;

    /**
     * @var string 印章类型，表示为:
圆形印章：0
椭圆形印章：1
方形印章：2
菱形印章：3
三角形印章：4
     */
    public $SealShape;

    /**
     * @param string $SealBody 印章主体内容
     * @param Rect $Location 印章坐标
     * @param array $OtherTexts 印章其它文本内容
     * @param string $SealShape 印章类型，表示为:
圆形印章：0
椭圆形印章：1
方形印章：2
菱形印章：3
三角形印章：4
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
        if (array_key_exists("SealBody",$param) and $param["SealBody"] !== null) {
            $this->SealBody = $param["SealBody"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Rect();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("OtherTexts",$param) and $param["OtherTexts"] !== null) {
            $this->OtherTexts = $param["OtherTexts"];
        }

        if (array_key_exists("SealShape",$param) and $param["SealShape"] !== null) {
            $this->SealShape = $param["SealShape"];
        }
    }
}
