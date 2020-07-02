<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
 * ModifyServiceTemplateGroupAttribute请求参数结构体
 *
 * @method string getServiceTemplateGroupId() 获取协议端口模板集合实例ID，例如：ppmg-ei8hfd9a。
 * @method void setServiceTemplateGroupId(string $ServiceTemplateGroupId) 设置协议端口模板集合实例ID，例如：ppmg-ei8hfd9a。
 * @method string getServiceTemplateGroupName() 获取协议端口模板集合名称。
 * @method void setServiceTemplateGroupName(string $ServiceTemplateGroupName) 设置协议端口模板集合名称。
 * @method array getServiceTemplateIds() 获取协议端口模板实例ID，例如：ppm-4dw6agho。
 * @method void setServiceTemplateIds(array $ServiceTemplateIds) 设置协议端口模板实例ID，例如：ppm-4dw6agho。
 */
class ModifyServiceTemplateGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 协议端口模板集合实例ID，例如：ppmg-ei8hfd9a。
     */
    public $ServiceTemplateGroupId;

    /**
     * @var string 协议端口模板集合名称。
     */
    public $ServiceTemplateGroupName;

    /**
     * @var array 协议端口模板实例ID，例如：ppm-4dw6agho。
     */
    public $ServiceTemplateIds;

    /**
     * @param string $ServiceTemplateGroupId 协议端口模板集合实例ID，例如：ppmg-ei8hfd9a。
     * @param string $ServiceTemplateGroupName 协议端口模板集合名称。
     * @param array $ServiceTemplateIds 协议端口模板实例ID，例如：ppm-4dw6agho。
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
        if (array_key_exists('ServiceTemplateGroupId',$param) and $param['ServiceTemplateGroupId'] !== null) {
            $this->ServiceTemplateGroupId = $param['ServiceTemplateGroupId'];
        }

        if (array_key_exists('ServiceTemplateGroupName',$param) and $param['ServiceTemplateGroupName'] !== null) {
            $this->ServiceTemplateGroupName = $param['ServiceTemplateGroupName'];
        }

        if (array_key_exists('ServiceTemplateIds',$param) and $param['ServiceTemplateIds'] !== null) {
            $this->ServiceTemplateIds = $param['ServiceTemplateIds'];
        }
    }
}
