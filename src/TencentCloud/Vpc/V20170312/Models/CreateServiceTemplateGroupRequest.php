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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceTemplateGroup请求参数结构体
 *
 * @method string getServiceTemplateGroupName() 获取协议端口模板集合名称。
 * @method void setServiceTemplateGroupName(string $ServiceTemplateGroupName) 设置协议端口模板集合名称。
 * @method array getServiceTemplateIds() 获取协议端口模板实例ID，例如：ppm-4dw6agho。
 * @method void setServiceTemplateIds(array $ServiceTemplateIds) 设置协议端口模板实例ID，例如：ppm-4dw6agho。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
 */
class CreateServiceTemplateGroupRequest extends AbstractModel
{
    /**
     * @var string 协议端口模板集合名称。
     */
    public $ServiceTemplateGroupName;

    /**
     * @var array 协议端口模板实例ID，例如：ppm-4dw6agho。
     */
    public $ServiceTemplateIds;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
     */
    public $Tags;

    /**
     * @param string $ServiceTemplateGroupName 协议端口模板集合名称。
     * @param array $ServiceTemplateIds 协议端口模板实例ID，例如：ppm-4dw6agho。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]。
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
        if (array_key_exists("ServiceTemplateGroupName",$param) and $param["ServiceTemplateGroupName"] !== null) {
            $this->ServiceTemplateGroupName = $param["ServiceTemplateGroupName"];
        }

        if (array_key_exists("ServiceTemplateIds",$param) and $param["ServiceTemplateIds"] !== null) {
            $this->ServiceTemplateIds = $param["ServiceTemplateIds"];
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
