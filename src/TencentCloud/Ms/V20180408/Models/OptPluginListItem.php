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
 * APK检测服务：非广告插件结果列表(SDK、风险插件等)
 *
 * @method string getPluginType() 获取非广告类型
 * @method void setPluginType(string $PluginType) 设置非广告类型
 * @method string getPluginName() 获取非广告插件名称
 * @method void setPluginName(string $PluginName) 设置非广告插件名称
 * @method string getPluginDesc() 获取非广告插件描述
 * @method void setPluginDesc(string $PluginDesc) 设置非广告插件描述
 */
class OptPluginListItem extends AbstractModel
{
    /**
     * @var string 非广告类型
     */
    public $PluginType;

    /**
     * @var string 非广告插件名称
     */
    public $PluginName;

    /**
     * @var string 非广告插件描述
     */
    public $PluginDesc;

    /**
     * @param string $PluginType 非广告类型
     * @param string $PluginName 非广告插件名称
     * @param string $PluginDesc 非广告插件描述
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
