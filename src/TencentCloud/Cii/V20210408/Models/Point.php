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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点信息
 *
 * @method integer getXCoordinate() 获取x坐标
 * @method void setXCoordinate(integer $XCoordinate) 设置x坐标
 * @method integer getYCoordinate() 获取y坐标
 * @method void setYCoordinate(integer $YCoordinate) 设置y坐标
 * @method integer getPage() 获取页码
 * @method void setPage(integer $Page) 设置页码
 */
class Point extends AbstractModel
{
    /**
     * @var integer x坐标
     */
    public $XCoordinate;

    /**
     * @var integer y坐标
     */
    public $YCoordinate;

    /**
     * @var integer 页码
     */
    public $Page;

    /**
     * @param integer $XCoordinate x坐标
     * @param integer $YCoordinate y坐标
     * @param integer $Page 页码
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
        if (array_key_exists("XCoordinate",$param) and $param["XCoordinate"] !== null) {
            $this->XCoordinate = $param["XCoordinate"];
        }

        if (array_key_exists("YCoordinate",$param) and $param["YCoordinate"] !== null) {
            $this->YCoordinate = $param["YCoordinate"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
