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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyFirewallTemplate请求参数结构体
 *
 * @method string getTemplateId() 获取防火墙模板ID。可通过[DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874)接口返回值字段TemplateSet获取。
 * @method void setTemplateId(string $TemplateId) 设置防火墙模板ID。可通过[DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874)接口返回值字段TemplateSet获取。
 * @method array getApplyInstances() 获取应用防火墙模板的实例列表。列表长度最大值是100。
 * @method void setApplyInstances(array $ApplyInstances) 设置应用防火墙模板的实例列表。列表长度最大值是100。
 */
class ApplyFirewallTemplateRequest extends AbstractModel
{
    /**
     * @var string 防火墙模板ID。可通过[DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874)接口返回值字段TemplateSet获取。
     */
    public $TemplateId;

    /**
     * @var array 应用防火墙模板的实例列表。列表长度最大值是100。
     */
    public $ApplyInstances;

    /**
     * @param string $TemplateId 防火墙模板ID。可通过[DescribeFirewallTemplates](https://cloud.tencent.com/document/product/1207/96874)接口返回值字段TemplateSet获取。
     * @param array $ApplyInstances 应用防火墙模板的实例列表。列表长度最大值是100。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ApplyInstances",$param) and $param["ApplyInstances"] !== null) {
            $this->ApplyInstances = [];
            foreach ($param["ApplyInstances"] as $key => $value){
                $obj = new InstanceIdentifier();
                $obj->deserialize($value);
                array_push($this->ApplyInstances, $obj);
            }
        }
    }
}
