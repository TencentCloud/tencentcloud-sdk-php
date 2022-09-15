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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * APK检测服务：广告插件结果结构体
 *
 * @method string getPluginType() 获取数字类型，分别为 1-通知栏广告，2-积分墙广告，3-banner广告，4- 悬浮窗图标广告，5-精品推荐列表广告, 6-插播广告
 * @method void setPluginType(string $PluginType) 设置数字类型，分别为 1-通知栏广告，2-积分墙广告，3-banner广告，4- 悬浮窗图标广告，5-精品推荐列表广告, 6-插播广告
 * @method string getPluginName() 获取广告插件名称
 * @method void setPluginName(string $PluginName) 设置广告插件名称
 * @method string getPluginDesc() 获取广告插件描述
 * @method void setPluginDesc(string $PluginDesc) 设置广告插件描述
 */
class PluginListItem extends AbstractModel
{
    /**
     * @var string 数字类型，分别为 1-通知栏广告，2-积分墙广告，3-banner广告，4- 悬浮窗图标广告，5-精品推荐列表广告, 6-插播广告
     */
    public $PluginType;

    /**
     * @var string 广告插件名称
     */
    public $PluginName;

    /**
     * @var string 广告插件描述
     */
    public $PluginDesc;

    /**
     * @param string $PluginType 数字类型，分别为 1-通知栏广告，2-积分墙广告，3-banner广告，4- 悬浮窗图标广告，5-精品推荐列表广告, 6-插播广告
     * @param string $PluginName 广告插件名称
     * @param string $PluginDesc 广告插件描述
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
        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginDesc",$param) and $param["PluginDesc"] !== null) {
            $this->PluginDesc = $param["PluginDesc"];
        }
    }
}
