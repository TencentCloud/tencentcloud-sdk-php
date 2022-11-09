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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已绑定的插件信息。
 *
 * @method string getPluginId() 获取插件ID。
 * @method void setPluginId(string $PluginId) 设置插件ID。
 * @method string getEnvironment() 获取环境信息。
 * @method void setEnvironment(string $Environment) 设置环境信息。
 * @method string getAttachedTime() 获取绑定时间。
 * @method void setAttachedTime(string $AttachedTime) 设置绑定时间。
 * @method string getPluginName() 获取插件名称。
 * @method void setPluginName(string $PluginName) 设置插件名称。
 * @method string getPluginType() 获取插件类型。
 * @method void setPluginType(string $PluginType) 设置插件类型。
 * @method string getDescription() 获取插件描述。
 * @method void setDescription(string $Description) 设置插件描述。
 * @method string getPluginData() 获取插件定义语句。
 * @method void setPluginData(string $PluginData) 设置插件定义语句。
 */
class AttachedPluginInfo extends AbstractModel
{
    /**
     * @var string 插件ID。
     */
    public $PluginId;

    /**
     * @var string 环境信息。
     */
    public $Environment;

    /**
     * @var string 绑定时间。
     */
    public $AttachedTime;

    /**
     * @var string 插件名称。
     */
    public $PluginName;

    /**
     * @var string 插件类型。
     */
    public $PluginType;

    /**
     * @var string 插件描述。
     */
    public $Description;

    /**
     * @var string 插件定义语句。
     */
    public $PluginData;

    /**
     * @param string $PluginId 插件ID。
     * @param string $Environment 环境信息。
     * @param string $AttachedTime 绑定时间。
     * @param string $PluginName 插件名称。
     * @param string $PluginType 插件类型。
     * @param string $Description 插件描述。
     * @param string $PluginData 插件定义语句。
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

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }
    }
}
