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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (FaceIdPhoto) 用于描述慧眼人脸核身照片信息。
 *
 * @method integer getResult() 获取核身结果：
0 - 通过；
1 - 未通过
 * @method void setResult(integer $Result) 设置核身结果：
0 - 通过；
1 - 未通过
 * @method string getDescription() 获取核身失败描述
 * @method void setDescription(string $Description) 设置核身失败描述
 * @method string getPhoto() 获取照片数据 (base64编码, 一般为JPG或PNG)
 * @method void setPhoto(string $Photo) 设置照片数据 (base64编码, 一般为JPG或PNG)
 * @method string getOrderNumber() 获取订单号 (orderNo)
 * @method void setOrderNumber(string $OrderNumber) 设置订单号 (orderNo)
 */
class FaceIdPhoto extends AbstractModel
{
    /**
     * @var integer 核身结果：
0 - 通过；
1 - 未通过
     */
    public $Result;

    /**
     * @var string 核身失败描述
     */
    public $Description;

    /**
     * @var string 照片数据 (base64编码, 一般为JPG或PNG)
     */
    public $Photo;

    /**
     * @var string 订单号 (orderNo)
     */
    public $OrderNumber;

    /**
     * @param integer $Result 核身结果：
0 - 通过；
1 - 未通过
     * @param string $Description 核身失败描述
     * @param string $Photo 照片数据 (base64编码, 一般为JPG或PNG)
     * @param string $OrderNumber 订单号 (orderNo)
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Photo",$param) and $param["Photo"] !== null) {
            $this->Photo = $param["Photo"];
        }

        if (array_key_exists("OrderNumber",$param) and $param["OrderNumber"] !== null) {
            $this->OrderNumber = $param["OrderNumber"];
        }
    }
}
