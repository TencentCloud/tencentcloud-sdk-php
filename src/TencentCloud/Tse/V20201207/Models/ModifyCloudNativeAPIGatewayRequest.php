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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudNativeAPIGateway请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getName() 获取云原生API网关名字, 最多支持60个字符。
 * @method void setName(string $Name) 设置云原生API网关名字, 最多支持60个字符。
 * @method string getDescription() 获取云原生API网关描述信息, 最多支持120个字符。
 * @method void setDescription(string $Description) 设置云原生API网关描述信息, 最多支持120个字符。
 * @method boolean getEnableCls() 获取是否开启 CLS 日志。暂时取值只能是 true，即只能从关闭状态变成开启状态。
 * @method void setEnableCls(boolean $EnableCls) 设置是否开启 CLS 日志。暂时取值只能是 true，即只能从关闭状态变成开启状态。
 * @method string getInternetPayMode() 获取公网计费模式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
 * @method void setInternetPayMode(string $InternetPayMode) 设置公网计费模式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
 */
class ModifyCloudNativeAPIGatewayRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 云原生API网关名字, 最多支持60个字符。
     */
    public $Name;

    /**
     * @var string 云原生API网关描述信息, 最多支持120个字符。
     */
    public $Description;

    /**
     * @var boolean 是否开启 CLS 日志。暂时取值只能是 true，即只能从关闭状态变成开启状态。
     */
    public $EnableCls;

    /**
     * @var string 公网计费模式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
     */
    public $InternetPayMode;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $Name 云原生API网关名字, 最多支持60个字符。
     * @param string $Description 云原生API网关描述信息, 最多支持120个字符。
     * @param boolean $EnableCls 是否开启 CLS 日志。暂时取值只能是 true，即只能从关闭状态变成开启状态。
     * @param string $InternetPayMode 公网计费模式。可选取值 BANDWIDTH | TRAFFIC ，表示按带宽和按流量计费。
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnableCls",$param) and $param["EnableCls"] !== null) {
            $this->EnableCls = $param["EnableCls"];
        }

        if (array_key_exists("InternetPayMode",$param) and $param["InternetPayMode"] !== null) {
            $this->InternetPayMode = $param["InternetPayMode"];
        }
    }
}
