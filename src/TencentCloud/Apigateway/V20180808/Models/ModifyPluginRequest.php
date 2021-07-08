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
 * ModifyPlugin请求参数结构体
 *
 * @method string getPluginId() 获取要修改的插件ID。
 * @method void setPluginId(string $PluginId) 设置要修改的插件ID。
 * @method string getPluginName() 获取要修改的API网关插件名称。最长50个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
 * @method void setPluginName(string $PluginName) 设置要修改的API网关插件名称。最长50个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
 * @method string getDescription() 获取要修改的插件描述，限定200字以内。
 * @method void setDescription(string $Description) 设置要修改的插件描述，限定200字以内。
 * @method string getPluginData() 获取要修改的插件定义语句，支持json。
 * @method void setPluginData(string $PluginData) 设置要修改的插件定义语句，支持json。
 */
class ModifyPluginRequest extends AbstractModel
{
    /**
     * @var string 要修改的插件ID。
     */
    public $PluginId;

    /**
     * @var string 要修改的API网关插件名称。最长50个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
     */
    public $PluginName;

    /**
     * @var string 要修改的插件描述，限定200字以内。
     */
    public $Description;

    /**
     * @var string 要修改的插件定义语句，支持json。
     */
    public $PluginData;

    /**
     * @param string $PluginId 要修改的插件ID。
     * @param string $PluginName 要修改的API网关插件名称。最长50个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
     * @param string $Description 要修改的插件描述，限定200字以内。
     * @param string $PluginData 要修改的插件定义语句，支持json。
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

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }
    }
}
