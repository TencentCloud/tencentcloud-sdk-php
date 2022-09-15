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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图像主体区域。
 *
 * @method ImageRect getRect() 获取图像主体区域。
 * @method void setRect(ImageRect $Rect) 设置图像主体区域。
 * @method float getScore() 获取置信度。
 * @method void setScore(float $Score) 设置置信度。
 * @method integer getCategoryId() 获取主体区域类目ID
 * @method void setCategoryId(integer $CategoryId) 设置主体区域类目ID
 */
class Box extends AbstractModel
{
    /**
     * @var ImageRect 图像主体区域。
     */
    public $Rect;

    /**
     * @var float 置信度。
     */
    public $Score;

    /**
     * @var integer 主体区域类目ID
     */
    public $CategoryId;

    /**
     * @param ImageRect $Rect 图像主体区域。
     * @param float $Score 置信度。
     * @param integer $CategoryId 主体区域类目ID
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
        if (array_key_exists("Rect",$param) and $param["Rect"] !== null) {
            $this->Rect = new ImageRect();
            $this->Rect->deserialize($param["Rect"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }
    }
}
