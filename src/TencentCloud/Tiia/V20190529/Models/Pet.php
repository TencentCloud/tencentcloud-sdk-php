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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 宠物具体信息
 *
 * @method string getName() 获取识别出的宠物类型（猫或者狗，暂不支持识别猫狗品种）。
 * @method void setName(string $Name) 设置识别出的宠物类型（猫或者狗，暂不支持识别猫狗品种）。
 * @method integer getScore() 获取识别服务给识别目标打出的置信度，范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
 * @method void setScore(integer $Score) 设置识别服务给识别目标打出的置信度，范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
 * @method Rect getLocation() 获取识别目标在图片中的坐标。
 * @method void setLocation(Rect $Location) 设置识别目标在图片中的坐标。
 */
class Pet extends AbstractModel
{
    /**
     * @var string 识别出的宠物类型（猫或者狗，暂不支持识别猫狗品种）。
     */
    public $Name;

    /**
     * @var integer 识别服务给识别目标打出的置信度，范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
     */
    public $Score;

    /**
     * @var Rect 识别目标在图片中的坐标。
     */
    public $Location;

    /**
     * @param string $Name 识别出的宠物类型（猫或者狗，暂不支持识别猫狗品种）。
     * @param integer $Score 识别服务给识别目标打出的置信度，范围在0-100之间。值越高，表示目标为相应结果的可能性越高。
     * @param Rect $Location 识别目标在图片中的坐标。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Rect();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
