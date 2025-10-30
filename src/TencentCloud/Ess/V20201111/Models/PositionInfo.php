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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 坐标详情
 *
 * @method float getX() 获取PDF文件页X坐标位置,以PDF单页左上角为坐标原点
 * @method void setX(float $X) 设置PDF文件页X坐标位置,以PDF单页左上角为坐标原点
 * @method float getY() 获取PDF文件页Y坐标位置,以PDF单页左上角为坐标原点
 * @method void setY(float $Y) 设置PDF文件页Y坐标位置,以PDF单页左上角为坐标原点
 * @method float getWidth() 获取距离X坐标的宽度，用于在PDF文件进行画框。
 * @method void setWidth(float $Width) 设置距离X坐标的宽度，用于在PDF文件进行画框。
 * @method float getHeight() 获取距离Y坐标的高度，用于在PDF文件进行画框。
 * @method void setHeight(float $Height) 设置距离Y坐标的高度，用于在PDF文件进行画框。
 * @method integer getPageIndex() 获取PDF文件页码索引，此值加1就是对应PDF文件的页码。
 * @method void setPageIndex(integer $PageIndex) 设置PDF文件页码索引，此值加1就是对应PDF文件的页码。
 * @method string getId() 获取系统生成的唯一ID值
 * @method void setId(string $Id) 设置系统生成的唯一ID值
 */
class PositionInfo extends AbstractModel
{
    /**
     * @var float PDF文件页X坐标位置,以PDF单页左上角为坐标原点
     */
    public $X;

    /**
     * @var float PDF文件页Y坐标位置,以PDF单页左上角为坐标原点
     */
    public $Y;

    /**
     * @var float 距离X坐标的宽度，用于在PDF文件进行画框。
     */
    public $Width;

    /**
     * @var float 距离Y坐标的高度，用于在PDF文件进行画框。
     */
    public $Height;

    /**
     * @var integer PDF文件页码索引，此值加1就是对应PDF文件的页码。
     */
    public $PageIndex;

    /**
     * @var string 系统生成的唯一ID值
     */
    public $Id;

    /**
     * @param float $X PDF文件页X坐标位置,以PDF单页左上角为坐标原点
     * @param float $Y PDF文件页Y坐标位置,以PDF单页左上角为坐标原点
     * @param float $Width 距离X坐标的宽度，用于在PDF文件进行画框。
     * @param float $Height 距离Y坐标的高度，用于在PDF文件进行画框。
     * @param integer $PageIndex PDF文件页码索引，此值加1就是对应PDF文件的页码。
     * @param string $Id 系统生成的唯一ID值
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
