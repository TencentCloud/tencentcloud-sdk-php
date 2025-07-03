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
 * 二维码/条形码识别结果信息
 *
 * @method string getTypeName() 获取类型包括
二维码：QR_CODE
一维码：EAN-13、EAN-8、EAN-2、UPC-A、UPC-E、CODE-39、CODE-93、CODE-128 
PDF：PDF_417
DataMatrix：DATA_MATRIX
小程序码：WX_CODE
 * @method void setTypeName(string $TypeName) 设置类型包括
二维码：QR_CODE
一维码：EAN-13、EAN-8、EAN-2、UPC-A、UPC-E、CODE-39、CODE-93、CODE-128 
PDF：PDF_417
DataMatrix：DATA_MATRIX
小程序码：WX_CODE
 * @method string getUrl() 获取二维码/条形码包含的地址
 * @method void setUrl(string $Url) 设置二维码/条形码包含的地址
 * @method QrcodePositionObj getPosition() 获取二维码/条形码坐标
 * @method void setPosition(QrcodePositionObj $Position) 设置二维码/条形码坐标
 */
class QrcodeResultsInfo extends AbstractModel
{
    /**
     * @var string 类型包括
二维码：QR_CODE
一维码：EAN-13、EAN-8、EAN-2、UPC-A、UPC-E、CODE-39、CODE-93、CODE-128 
PDF：PDF_417
DataMatrix：DATA_MATRIX
小程序码：WX_CODE
     */
    public $TypeName;

    /**
     * @var string 二维码/条形码包含的地址
     */
    public $Url;

    /**
     * @var QrcodePositionObj 二维码/条形码坐标
     */
    public $Position;

    /**
     * @param string $TypeName 类型包括
二维码：QR_CODE
一维码：EAN-13、EAN-8、EAN-2、UPC-A、UPC-E、CODE-39、CODE-93、CODE-128 
PDF：PDF_417
DataMatrix：DATA_MATRIX
小程序码：WX_CODE
     * @param string $Url 二维码/条形码包含的地址
     * @param QrcodePositionObj $Position 二维码/条形码坐标
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new QrcodePositionObj();
            $this->Position->deserialize($param["Position"]);
        }
    }
}
