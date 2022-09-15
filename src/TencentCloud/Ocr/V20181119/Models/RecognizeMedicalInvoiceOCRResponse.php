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
 * RecognizeMedicalInvoiceOCR返回参数结构体
 *
 * @method array getMedicalInvoiceInfos() 获取识别出的字段信息
 * @method void setMedicalInvoiceInfos(array $MedicalInvoiceInfos) 设置识别出的字段信息
 * @method float getAngle() 获取图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负。
 * @method void setAngle(float $Angle) 设置图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeMedicalInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var array 识别出的字段信息
     */
    public $MedicalInvoiceInfos;

    /**
     * @var float 图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负。
     */
    public $Angle;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MedicalInvoiceInfos 识别出的字段信息
     * @param float $Angle 图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MedicalInvoiceInfos",$param) and $param["MedicalInvoiceInfos"] !== null) {
            $this->MedicalInvoiceInfos = [];
            foreach ($param["MedicalInvoiceInfos"] as $key => $value){
                $obj = new MedicalInvoiceInfo();
                $obj->deserialize($value);
                array_push($this->MedicalInvoiceInfos, $obj);
            }
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
