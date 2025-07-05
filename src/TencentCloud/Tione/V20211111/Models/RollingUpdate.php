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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 滚动更新策略
 *
 * @method NumOrPercent getMaxUnavailable() 获取滚动更新的最大不可用
 * @method void setMaxUnavailable(NumOrPercent $MaxUnavailable) 设置滚动更新的最大不可用
 * @method NumOrPercent getMaxSurge() 获取滚动更新的最大新增实例
 * @method void setMaxSurge(NumOrPercent $MaxSurge) 设置滚动更新的最大新增实例
 */
class RollingUpdate extends AbstractModel
{
    /**
     * @var NumOrPercent 滚动更新的最大不可用
     */
    public $MaxUnavailable;

    /**
     * @var NumOrPercent 滚动更新的最大新增实例
     */
    public $MaxSurge;

    /**
     * @param NumOrPercent $MaxUnavailable 滚动更新的最大不可用
     * @param NumOrPercent $MaxSurge 滚动更新的最大新增实例
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
        if (array_key_exists("MaxUnavailable",$param) and $param["MaxUnavailable"] !== null) {
            $this->MaxUnavailable = new NumOrPercent();
            $this->MaxUnavailable->deserialize($param["MaxUnavailable"]);
        }

        if (array_key_exists("MaxSurge",$param) and $param["MaxSurge"] !== null) {
            $this->MaxSurge = new NumOrPercent();
            $this->MaxSurge->deserialize($param["MaxSurge"]);
        }
    }
}
