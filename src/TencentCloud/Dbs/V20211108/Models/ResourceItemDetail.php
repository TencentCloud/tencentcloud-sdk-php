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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份集状态详情
 *
 * @method string getTieredType() 获取<p>当前存储状态。可能的取值为："standard" - 标准存储；"lowFrequency" - 低频存储；"archive" - 归档存储；"deepArchive" - 深度归档存储；</p>
 * @method void setTieredType(string $TieredType) 设置<p>当前存储状态。可能的取值为："standard" - 标准存储；"lowFrequency" - 低频存储；"archive" - 归档存储；"deepArchive" - 深度归档存储；</p>
 * @method float getStayTime() 获取<p>存储时长。备份集已保留的时长，单位为小时。</p>
 * @method void setStayTime(float $StayTime) 设置<p>存储时长。备份集已保留的时长，单位为小时。</p>
 */
class ResourceItemDetail extends AbstractModel
{
    /**
     * @var string <p>当前存储状态。可能的取值为："standard" - 标准存储；"lowFrequency" - 低频存储；"archive" - 归档存储；"deepArchive" - 深度归档存储；</p>
     */
    public $TieredType;

    /**
     * @var float <p>存储时长。备份集已保留的时长，单位为小时。</p>
     */
    public $StayTime;

    /**
     * @param string $TieredType <p>当前存储状态。可能的取值为："standard" - 标准存储；"lowFrequency" - 低频存储；"archive" - 归档存储；"deepArchive" - 深度归档存储；</p>
     * @param float $StayTime <p>存储时长。备份集已保留的时长，单位为小时。</p>
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
        if (array_key_exists("TieredType",$param) and $param["TieredType"] !== null) {
            $this->TieredType = $param["TieredType"];
        }

        if (array_key_exists("StayTime",$param) and $param["StayTime"] !== null) {
            $this->StayTime = $param["StayTime"];
        }
    }
}
