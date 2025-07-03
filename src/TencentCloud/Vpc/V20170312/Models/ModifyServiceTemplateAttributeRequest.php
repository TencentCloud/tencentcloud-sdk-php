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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServiceTemplateAttribute请求参数结构体
 *
 * @method string getServiceTemplateId() 获取协议端口模板实例ID，例如：ppm-529nwwj8。
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置协议端口模板实例ID，例如：ppm-529nwwj8。
 * @method string getServiceTemplateName() 获取协议端口模板名称。
 * @method void setServiceTemplateName(string $ServiceTemplateName) 设置协议端口模板名称。
 * @method array getServices() 获取支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。协议后面的端口部分长度不能超过128个字符。
 * @method void setServices(array $Services) 设置支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。协议后面的端口部分长度不能超过128个字符。
 * @method array getServicesExtra() 获取支持添加备注的协议端口信息，支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。
 * @method void setServicesExtra(array $ServicesExtra) 设置支持添加备注的协议端口信息，支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。
 */
class ModifyServiceTemplateAttributeRequest extends AbstractModel
{
    /**
     * @var string 协议端口模板实例ID，例如：ppm-529nwwj8。
     */
    public $ServiceTemplateId;

    /**
     * @var string 协议端口模板名称。
     */
    public $ServiceTemplateName;

    /**
     * @var array 支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。协议后面的端口部分长度不能超过128个字符。
     */
    public $Services;

    /**
     * @var array 支持添加备注的协议端口信息，支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。
     */
    public $ServicesExtra;

    /**
     * @param string $ServiceTemplateId 协议端口模板实例ID，例如：ppm-529nwwj8。
     * @param string $ServiceTemplateName 协议端口模板名称。
     * @param array $Services 支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。协议后面的端口部分长度不能超过128个字符。
     * @param array $ServicesExtra 支持添加备注的协议端口信息，支持单个端口、多个端口、连续端口及所有端口，协议支持：TCP、UDP、ICMP、GRE 协议。
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
        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("ServiceTemplateName",$param) and $param["ServiceTemplateName"] !== null) {
            $this->ServiceTemplateName = $param["ServiceTemplateName"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }

        if (array_key_exists("ServicesExtra",$param) and $param["ServicesExtra"] !== null) {
            $this->ServicesExtra = [];
            foreach ($param["ServicesExtra"] as $key => $value){
                $obj = new ServicesInfo();
                $obj->deserialize($value);
                array_push($this->ServicesExtra, $obj);
            }
        }
    }
}
