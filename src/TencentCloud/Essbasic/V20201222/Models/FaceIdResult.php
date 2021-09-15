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
 * 此结构体 (FaceIdResult) 用于描述慧眼人脸核身结果。
 *
 * @method integer getResult() 获取核身结果：
0 - 通过；
1 - 未通过
 * @method void setResult(integer $Result) 设置核身结果：
0 - 通过；
1 - 未通过
 * @method string getDescription() 获取核身失败描述
 * @method void setDescription(string $Description) 设置核身失败描述
 * @method string getOrderNumber() 获取订单号 (orderNo)
 * @method void setOrderNumber(string $OrderNumber) 设置订单号 (orderNo)
 * @method string getName() 获取姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardType() 获取身份证件类型： 
ID_CARD - 居民身份证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardType(string $IdCardType) 设置身份证件类型： 
ID_CARD - 居民身份证
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardNumber() 获取身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLiveRate() 获取活体检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveRate(integer $LiveRate) 设置活体检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSimilarity() 获取人脸检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimilarity(float $Similarity) 设置人脸检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOccurredTime() 获取刷脸时间 (UNIX时间戳)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOccurredTime(integer $OccurredTime) 设置刷脸时间 (UNIX时间戳)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoto() 获取照片数据 (base64编码, 一般为JPG或PNG)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoto(string $Photo) 设置照片数据 (base64编码, 一般为JPG或PNG)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideo() 获取视频数据 (base64编码, 一般为MP4)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideo(string $Video) 设置视频数据 (base64编码, 一般为MP4)
注意：此字段可能返回 null，表示取不到有效值。
 */
class FaceIdResult extends AbstractModel
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
     * @var string 订单号 (orderNo)
     */
    public $OrderNumber;

    /**
     * @var string 姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 身份证件类型： 
ID_CARD - 居民身份证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardType;

    /**
     * @var string 身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardNumber;

    /**
     * @var integer 活体检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveRate;

    /**
     * @var float 人脸检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Similarity;

    /**
     * @var integer 刷脸时间 (UNIX时间戳)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OccurredTime;

    /**
     * @var string 照片数据 (base64编码, 一般为JPG或PNG)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Photo;

    /**
     * @var string 视频数据 (base64编码, 一般为MP4)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Video;

    /**
     * @param integer $Result 核身结果：
0 - 通过；
1 - 未通过
     * @param string $Description 核身失败描述
     * @param string $OrderNumber 订单号 (orderNo)
     * @param string $Name 姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardType 身份证件类型： 
ID_CARD - 居民身份证
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardNumber 身份证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LiveRate 活体检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Similarity 人脸检测得分 (百分制)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OccurredTime 刷脸时间 (UNIX时间戳)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Photo 照片数据 (base64编码, 一般为JPG或PNG)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Video 视频数据 (base64编码, 一般为MP4)
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("OrderNumber",$param) and $param["OrderNumber"] !== null) {
            $this->OrderNumber = $param["OrderNumber"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("LiveRate",$param) and $param["LiveRate"] !== null) {
            $this->LiveRate = $param["LiveRate"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("OccurredTime",$param) and $param["OccurredTime"] !== null) {
            $this->OccurredTime = $param["OccurredTime"];
        }

        if (array_key_exists("Photo",$param) and $param["Photo"] !== null) {
            $this->Photo = $param["Photo"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }
    }
}
