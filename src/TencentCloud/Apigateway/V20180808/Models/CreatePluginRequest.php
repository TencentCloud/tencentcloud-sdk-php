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
 * CreatePlugin请求参数结构体
 *
 * @method string getPluginName() 获取用户自定义的插件名称。最长50个字符，最短2个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
 * @method void setPluginName(string $PluginName) 设置用户自定义的插件名称。最长50个字符，最短2个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
 * @method string getPluginType() 获取插件类型。目前支持IPControl, TrafficControl, Cors, CustomReq, CustomAuth，Routing，TrafficControlByParameter, CircuitBreaker, ProxyCache。
 * @method void setPluginType(string $PluginType) 设置插件类型。目前支持IPControl, TrafficControl, Cors, CustomReq, CustomAuth，Routing，TrafficControlByParameter, CircuitBreaker, ProxyCache。
 * @method string getPluginData() 获取插件定义语句，支持json。
 * @method void setPluginData(string $PluginData) 设置插件定义语句，支持json。
 * @method string getDescription() 获取插件描述，限定200字以内。
 * @method void setDescription(string $Description) 设置插件描述，限定200字以内。
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class CreatePluginRequest extends AbstractModel
{
    /**
     * @var string 用户自定义的插件名称。最长50个字符，最短2个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
     */
    public $PluginName;

    /**
     * @var string 插件类型。目前支持IPControl, TrafficControl, Cors, CustomReq, CustomAuth，Routing，TrafficControlByParameter, CircuitBreaker, ProxyCache。
     */
    public $PluginType;

    /**
     * @var string 插件定义语句，支持json。
     */
    public $PluginData;

    /**
     * @var string 插件描述，限定200字以内。
     */
    public $Description;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $PluginName 用户自定义的插件名称。最长50个字符，最短2个字符，支持 a-z,A-Z,0-9,_, 必须字母开头，字母或者数字结尾。
     * @param string $PluginType 插件类型。目前支持IPControl, TrafficControl, Cors, CustomReq, CustomAuth，Routing，TrafficControlByParameter, CircuitBreaker, ProxyCache。
     * @param string $PluginData 插件定义语句，支持json。
     * @param string $Description 插件描述，限定200字以内。
     * @param array $Tags 标签
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
        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
