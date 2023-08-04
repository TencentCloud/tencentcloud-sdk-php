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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI分析结果详情
 *
 * @method array getBody() 获取人体识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(array $Body) 设置人体识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPet() 获取宠物识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPet(array $Pet) 设置宠物识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCar() 获取车辆车牌识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCar(array $Car) 设置车辆车牌识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChefHat() 获取厨师帽结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChefHat(array $ChefHat) 设置厨师帽结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChefCloth() 获取厨师服结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChefCloth(array $ChefCloth) 设置厨师服结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFaceMask() 获取口罩识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceMask(array $FaceMask) 设置口罩识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSmoking() 获取抽烟检测结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmoking(array $Smoking) 设置抽烟检测结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPhoneCall() 获取接打电话识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneCall(array $PhoneCall) 设置接打电话识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AITaskResultInfo extends AbstractModel
{
    /**
     * @var array 人体识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Body;

    /**
     * @var array 宠物识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pet;

    /**
     * @var array 车辆车牌识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Car;

    /**
     * @var array 厨师帽结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChefHat;

    /**
     * @var array 厨师服结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChefCloth;

    /**
     * @var array 口罩识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceMask;

    /**
     * @var array 抽烟检测结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Smoking;

    /**
     * @var array 接打电话识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneCall;

    /**
     * @param array $Body 人体识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Pet 宠物识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Car 车辆车牌识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChefHat 厨师帽结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChefCloth 厨师服结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FaceMask 口罩识别结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Smoking 抽烟检测结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PhoneCall 接打电话识别结果列表
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = [];
            foreach ($param["Body"] as $key => $value){
                $obj = new BodyAIResultInfo();
                $obj->deserialize($value);
                array_push($this->Body, $obj);
            }
        }

        if (array_key_exists("Pet",$param) and $param["Pet"] !== null) {
            $this->Pet = [];
            foreach ($param["Pet"] as $key => $value){
                $obj = new PetAIResultInfo();
                $obj->deserialize($value);
                array_push($this->Pet, $obj);
            }
        }

        if (array_key_exists("Car",$param) and $param["Car"] !== null) {
            $this->Car = [];
            foreach ($param["Car"] as $key => $value){
                $obj = new CarAIResultInfo();
                $obj->deserialize($value);
                array_push($this->Car, $obj);
            }
        }

        if (array_key_exists("ChefHat",$param) and $param["ChefHat"] !== null) {
            $this->ChefHat = [];
            foreach ($param["ChefHat"] as $key => $value){
                $obj = new ChefHatAIResultInfo();
                $obj->deserialize($value);
                array_push($this->ChefHat, $obj);
            }
        }

        if (array_key_exists("ChefCloth",$param) and $param["ChefCloth"] !== null) {
            $this->ChefCloth = [];
            foreach ($param["ChefCloth"] as $key => $value){
                $obj = new ChefClothAIResultInfo();
                $obj->deserialize($value);
                array_push($this->ChefCloth, $obj);
            }
        }

        if (array_key_exists("FaceMask",$param) and $param["FaceMask"] !== null) {
            $this->FaceMask = [];
            foreach ($param["FaceMask"] as $key => $value){
                $obj = new FaceMaskAIResultInfo();
                $obj->deserialize($value);
                array_push($this->FaceMask, $obj);
            }
        }

        if (array_key_exists("Smoking",$param) and $param["Smoking"] !== null) {
            $this->Smoking = [];
            foreach ($param["Smoking"] as $key => $value){
                $obj = new SmokingAIResultInfo();
                $obj->deserialize($value);
                array_push($this->Smoking, $obj);
            }
        }

        if (array_key_exists("PhoneCall",$param) and $param["PhoneCall"] !== null) {
            $this->PhoneCall = [];
            foreach ($param["PhoneCall"] as $key => $value){
                $obj = new PhoneCallAIResultInfo();
                $obj->deserialize($value);
                array_push($this->PhoneCall, $obj);
            }
        }
    }
}
