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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点Gpu信息
 *
 * @method integer getGpuCount() 获取Gpu块数
 * @method void setGpuCount(integer $GpuCount) 设置Gpu块数
 * @method string getGpuType() 获取Gpu类型
 * @method void setGpuType(string $GpuType) 设置Gpu类型
 */
class GpuInfo extends AbstractModel
{
    /**
     * @var integer Gpu块数
     */
    public $GpuCount;

    /**
     * @var string Gpu类型
     */
    public $GpuType;

    /**
     * @param integer $GpuCount Gpu块数
     * @param string $GpuType Gpu类型
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
        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }
    }
}
