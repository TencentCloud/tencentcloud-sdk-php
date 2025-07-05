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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用卡证鉴伪告警信息
 *
 * @method boolean getIsWarn() 获取是否存在该告警
 * @method void setIsWarn(boolean $IsWarn) 设置是否存在该告警
 * @method float getRiskConfidence() 获取风险程度
 * @method void setRiskConfidence(float $RiskConfidence) 设置风险程度
 * @method array getPolygon() 获取告警位置四点坐标
 * @method void setPolygon(array $Polygon) 设置告警位置四点坐标
 */
class GeneralCardWarnInfo extends AbstractModel
{
    /**
     * @var boolean 是否存在该告警
     */
    public $IsWarn;

    /**
     * @var float 风险程度
     */
    public $RiskConfidence;

    /**
     * @var array 告警位置四点坐标
     */
    public $Polygon;

    /**
     * @param boolean $IsWarn 是否存在该告警
     * @param float $RiskConfidence 风险程度
     * @param array $Polygon 告警位置四点坐标
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
        if (array_key_exists("IsWarn",$param) and $param["IsWarn"] !== null) {
            $this->IsWarn = $param["IsWarn"];
        }

        if (array_key_exists("RiskConfidence",$param) and $param["RiskConfidence"] !== null) {
            $this->RiskConfidence = $param["RiskConfidence"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Polygon();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }
    }
}
