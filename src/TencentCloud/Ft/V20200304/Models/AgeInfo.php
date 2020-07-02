<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Ft\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸变年龄信息
 *
 * @method integer getAge() 获取变化到的人脸年龄 [10,80]。
 * @method void setAge(integer $Age) 设置变化到的人脸年龄 [10,80]。
 * @method FaceRect getFaceRect() 获取人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
 * @method void setFaceRect(FaceRect $FaceRect) 设置人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
 */
class AgeInfo extends AbstractModel
{
    /**
     * @var integer 变化到的人脸年龄 [10,80]。
     */
    public $Age;

    /**
     * @var FaceRect 人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
     */
    public $FaceRect;

    /**
     * @param integer $Age 变化到的人脸年龄 [10,80]。
     * @param FaceRect $FaceRect 人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
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
        if (array_key_exists('Age',$param) and $param['Age'] !== null) {
            $this->Age = $param['Age'];
        }

        if (array_key_exists('FaceRect',$param) and $param['FaceRect'] !== null) {
            $this->FaceRect = new FaceRect();
            $this->FaceRect->deserialize($param['FaceRect']);
        }
    }
}
