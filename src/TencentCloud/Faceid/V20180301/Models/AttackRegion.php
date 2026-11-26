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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命中的攻击区域列表
 *
 * @method array getPolygon() 获取<p>攻击区域的四点坐标，固定为轴对齐矩形，按 左上 → 右上 → 右下 → 左下 顺时针顺序排列。单位为像素，坐标原点为图像左上角。数组长度固定为 4。</p>
 * @method void setPolygon(array $Polygon) 设置<p>攻击区域的四点坐标，固定为轴对齐矩形，按 左上 → 右上 → 右下 → 左下 顺时针顺序排列。单位为像素，坐标原点为图像左上角。数组长度固定为 4。</p>
 * @method string getDescription() 获取<p>攻击描述，对该区域命中的可疑特征进行详细说明。</p>
 * @method void setDescription(string $Description) 设置<p>攻击描述，对该区域命中的可疑特征进行详细说明。</p>
 */
class AttackRegion extends AbstractModel
{
    /**
     * @var array <p>攻击区域的四点坐标，固定为轴对齐矩形，按 左上 → 右上 → 右下 → 左下 顺时针顺序排列。单位为像素，坐标原点为图像左上角。数组长度固定为 4。</p>
     */
    public $Polygon;

    /**
     * @var string <p>攻击描述，对该区域命中的可疑特征进行详细说明。</p>
     */
    public $Description;

    /**
     * @param array $Polygon <p>攻击区域的四点坐标，固定为轴对齐矩形，按 左上 → 右上 → 右下 → 左下 顺时针顺序排列。单位为像素，坐标原点为图像左上角。数组长度固定为 4。</p>
     * @param string $Description <p>攻击描述，对该区域命中的可疑特征进行详细说明。</p>
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
        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = [];
            foreach ($param["Polygon"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Polygon, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
