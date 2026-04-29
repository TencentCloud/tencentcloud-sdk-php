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
 * 用于风险提示和表示不同场景下的风险程度
 *
 * @method boolean getIsWarn() 获取<p>是否存在该提示</p>
 * @method void setIsWarn(boolean $IsWarn) 设置<p>是否存在该提示</p>
 * @method float getRiskConfidence() 获取<p>风险程度（0-1）</p>
 * @method void setRiskConfidence(float $RiskConfidence) 设置<p>风险程度（0-1）</p>
 * @method array getPolygon() 获取<p>提示位置四点坐标，仅部分提示类型支持返回提示位置坐标</p>
 * @method void setPolygon(array $Polygon) 设置<p>提示位置四点坐标，仅部分提示类型支持返回提示位置坐标</p>
 */
class SceneWarnInfo extends AbstractModel
{
    /**
     * @var boolean <p>是否存在该提示</p>
     */
    public $IsWarn;

    /**
     * @var float <p>风险程度（0-1）</p>
     */
    public $RiskConfidence;

    /**
     * @var array <p>提示位置四点坐标，仅部分提示类型支持返回提示位置坐标</p>
     */
    public $Polygon;

    /**
     * @param boolean $IsWarn <p>是否存在该提示</p>
     * @param float $RiskConfidence <p>风险程度（0-1）</p>
     * @param array $Polygon <p>提示位置四点坐标，仅部分提示类型支持返回提示位置坐标</p>
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
