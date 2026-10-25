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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * volume返回详情
 *
 * @method Volume getVolume() 获取volume详情
 * @method void setVolume(Volume $Volume) 设置volume详情
 */
class GetVolumeRsp extends AbstractModel
{
    /**
     * @var Volume volume详情
     */
    public $Volume;

    /**
     * @param Volume $Volume volume详情
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
        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = new Volume();
            $this->Volume->deserialize($param["Volume"]);
        }
    }
}
