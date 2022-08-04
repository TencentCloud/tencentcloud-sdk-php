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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人体关键点信息
 *
 * @method string getKeyPointType() 获取代表不同位置的人体关键点信息，返回值为以下集合中的一个 [头部,颈部,右肩,右肘,右腕,左肩,左肘,左腕,右髋,右膝,右踝,左髋,左膝,左踝]
 * @method void setKeyPointType(string $KeyPointType) 设置代表不同位置的人体关键点信息，返回值为以下集合中的一个 [头部,颈部,右肩,右肘,右腕,左肩,左肘,左腕,右髋,右膝,右踝,左髋,左膝,左踝]
 * @method float getX() 获取人体关键点横坐标
 * @method void setX(float $X) 设置人体关键点横坐标
 * @method float getY() 获取人体关键点纵坐标
 * @method void setY(float $Y) 设置人体关键点纵坐标
 * @method float getBodyScore() 获取关键点坐标置信度，分数取值在0-1之间，阈值建议为0.25，小于0.25认为在图中无人体关键点。
 * @method void setBodyScore(float $BodyScore) 设置关键点坐标置信度，分数取值在0-1之间，阈值建议为0.25，小于0.25认为在图中无人体关键点。
 */
class KeyPointInfo extends AbstractModel
{
    /**
     * @var string 代表不同位置的人体关键点信息，返回值为以下集合中的一个 [头部,颈部,右肩,右肘,右腕,左肩,左肘,左腕,右髋,右膝,右踝,左髋,左膝,左踝]
     */
    public $KeyPointType;

    /**
     * @var float 人体关键点横坐标
     */
    public $X;

    /**
     * @var float 人体关键点纵坐标
     */
    public $Y;

    /**
     * @var float 关键点坐标置信度，分数取值在0-1之间，阈值建议为0.25，小于0.25认为在图中无人体关键点。
     */
    public $BodyScore;

    /**
     * @param string $KeyPointType 代表不同位置的人体关键点信息，返回值为以下集合中的一个 [头部,颈部,右肩,右肘,右腕,左肩,左肘,左腕,右髋,右膝,右踝,左髋,左膝,左踝]
     * @param float $X 人体关键点横坐标
     * @param float $Y 人体关键点纵坐标
     * @param float $BodyScore 关键点坐标置信度，分数取值在0-1之间，阈值建议为0.25，小于0.25认为在图中无人体关键点。
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
        if (array_key_exists("KeyPointType",$param) and $param["KeyPointType"] !== null) {
            $this->KeyPointType = $param["KeyPointType"];
        }

        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("BodyScore",$param) and $param["BodyScore"] !== null) {
            $this->BodyScore = $param["BodyScore"];
        }
    }
}
