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
 * AI分析配置
 *
 * @method string getDetectType() 获取AI 分析类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和Car(车辆车牌识别)等
 * @method void setDetectType(string $DetectType) 设置AI 分析类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和Car(车辆车牌识别)等
 * @method integer getTimeInterval() 获取截图频率。可选值1～20秒
 * @method void setTimeInterval(integer $TimeInterval) 设置截图频率。可选值1～20秒
 * @method array getOperTimeSlot() 获取模板生效的时间段。最多包含5组时间段
 * @method void setOperTimeSlot(array $OperTimeSlot) 设置模板生效的时间段。最多包含5组时间段
 */
class AIConfig extends AbstractModel
{
    /**
     * @var string AI 分析类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和Car(车辆车牌识别)等
     */
    public $DetectType;

    /**
     * @var integer 截图频率。可选值1～20秒
     */
    public $TimeInterval;

    /**
     * @var array 模板生效的时间段。最多包含5组时间段
     */
    public $OperTimeSlot;

    /**
     * @param string $DetectType AI 分析类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和Car(车辆车牌识别)等
     * @param integer $TimeInterval 截图频率。可选值1～20秒
     * @param array $OperTimeSlot 模板生效的时间段。最多包含5组时间段
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
        if (array_key_exists("DetectType",$param) and $param["DetectType"] !== null) {
            $this->DetectType = $param["DetectType"];
        }

        if (array_key_exists("TimeInterval",$param) and $param["TimeInterval"] !== null) {
            $this->TimeInterval = $param["TimeInterval"];
        }

        if (array_key_exists("OperTimeSlot",$param) and $param["OperTimeSlot"] !== null) {
            $this->OperTimeSlot = [];
            foreach ($param["OperTimeSlot"] as $key => $value){
                $obj = new OperTimeSlot();
                $obj->deserialize($value);
                array_push($this->OperTimeSlot, $obj);
            }
        }
    }
}
