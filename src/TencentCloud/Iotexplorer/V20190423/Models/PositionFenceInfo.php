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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 围栏详细信息(包含创建时间及更新时间)
 *
 * @method PositionFenceItem getGeoFence() 获取围栏信息
 * @method void setGeoFence(PositionFenceItem $GeoFence) 设置围栏信息
 * @method integer getCreateTime() 获取围栏创建时间
 * @method void setCreateTime(integer $CreateTime) 设置围栏创建时间
 * @method integer getUpdateTime() 获取围栏更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置围栏更新时间
 */
class PositionFenceInfo extends AbstractModel
{
    /**
     * @var PositionFenceItem 围栏信息
     */
    public $GeoFence;

    /**
     * @var integer 围栏创建时间
     */
    public $CreateTime;

    /**
     * @var integer 围栏更新时间
     */
    public $UpdateTime;

    /**
     * @param PositionFenceItem $GeoFence 围栏信息
     * @param integer $CreateTime 围栏创建时间
     * @param integer $UpdateTime 围栏更新时间
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
        if (array_key_exists("GeoFence",$param) and $param["GeoFence"] !== null) {
            $this->GeoFence = new PositionFenceItem();
            $this->GeoFence->deserialize($param["GeoFence"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
