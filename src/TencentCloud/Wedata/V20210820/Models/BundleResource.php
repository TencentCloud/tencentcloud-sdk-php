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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * boundle 绑定/解绑操作资源信息
 *
 * @method string getResourceType() 获取<p>资源类型，取值范围：</p>
<ul>
<li>WORKFLOW 工作流</li>
<li>TASK 任务</li>
<li>CODE_TEMPLATE 代码模版</li>
<li>RESOURCE 资源信息</li>
<li>EVENT 事件</li>
<li>PROJECT_PARAM 项目参数</li>
</ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型，取值范围：</p>
<ul>
<li>WORKFLOW 工作流</li>
<li>TASK 任务</li>
<li>CODE_TEMPLATE 代码模版</li>
<li>RESOURCE 资源信息</li>
<li>EVENT 事件</li>
<li>PROJECT_PARAM 项目参数</li>
</ul>
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 */
class BundleResource extends AbstractModel
{
    /**
     * @var string <p>资源类型，取值范围：</p>
<ul>
<li>WORKFLOW 工作流</li>
<li>TASK 任务</li>
<li>CODE_TEMPLATE 代码模版</li>
<li>RESOURCE 资源信息</li>
<li>EVENT 事件</li>
<li>PROJECT_PARAM 项目参数</li>
</ul>
     */
    public $ResourceType;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @param string $ResourceType <p>资源类型，取值范围：</p>
<ul>
<li>WORKFLOW 工作流</li>
<li>TASK 任务</li>
<li>CODE_TEMPLATE 代码模版</li>
<li>RESOURCE 资源信息</li>
<li>EVENT 事件</li>
<li>PROJECT_PARAM 项目参数</li>
</ul>
     * @param string $ResourceId 资源id
     * @param string $ResourceName 资源名称
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
