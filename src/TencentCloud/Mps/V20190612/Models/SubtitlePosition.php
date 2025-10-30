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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕位置信息
 *
 * @method integer getCenterY() 获取居中位置时Y的坐标值
 * @method void setCenterY(integer $CenterY) 设置居中位置时Y的坐标值
 */
class SubtitlePosition extends AbstractModel
{
    /**
     * @var integer 居中位置时Y的坐标值
     */
    public $CenterY;

    /**
     * @param integer $CenterY 居中位置时Y的坐标值
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
        if (array_key_exists("CenterY",$param) and $param["CenterY"] !== null) {
            $this->CenterY = $param["CenterY"];
        }
    }
}
