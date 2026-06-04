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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlugin请求参数结构体
 *
 * @method string getPluginId() 获取插件id
 * @method void setPluginId(string $PluginId) 设置插件id
 * @method string getSpaceId() 获取当前空间id
 * @method void setSpaceId(string $SpaceId) 设置当前空间id
 */
class DescribePluginRequest extends AbstractModel
{
    /**
     * @var string 插件id
     */
    public $PluginId;

    /**
     * @var string 当前空间id
     */
    public $SpaceId;

    /**
     * @param string $PluginId 插件id
     * @param string $SpaceId 当前空间id
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
