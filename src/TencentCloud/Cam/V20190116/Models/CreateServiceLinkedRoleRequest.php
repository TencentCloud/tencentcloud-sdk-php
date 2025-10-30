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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceLinkedRole请求参数结构体
 *
 * @method array getQCSServiceName() 获取填写此角色的腾讯云服务载体，具体可查询文档（角色载体）字段
https://cloud.tencent.com/document/product/598/85165
 * @method void setQCSServiceName(array $QCSServiceName) 设置填写此角色的腾讯云服务载体，具体可查询文档（角色载体）字段
https://cloud.tencent.com/document/product/598/85165
 * @method string getCustomSuffix() 获取自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
 * @method void setCustomSuffix(string $CustomSuffix) 设置自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
 * @method string getDescription() 获取角色说明。
 * @method void setDescription(string $Description) 设置角色说明。
 * @method array getTags() 获取角色绑定标签。
 * @method void setTags(array $Tags) 设置角色绑定标签。
 */
class CreateServiceLinkedRoleRequest extends AbstractModel
{
    /**
     * @var array 填写此角色的腾讯云服务载体，具体可查询文档（角色载体）字段
https://cloud.tencent.com/document/product/598/85165
     */
    public $QCSServiceName;

    /**
     * @var string 自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
     */
    public $CustomSuffix;

    /**
     * @var string 角色说明。
     */
    public $Description;

    /**
     * @var array 角色绑定标签。
     */
    public $Tags;

    /**
     * @param array $QCSServiceName 填写此角色的腾讯云服务载体，具体可查询文档（角色载体）字段
https://cloud.tencent.com/document/product/598/85165
     * @param string $CustomSuffix 自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
     * @param string $Description 角色说明。
     * @param array $Tags 角色绑定标签。
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
        if (array_key_exists("QCSServiceName",$param) and $param["QCSServiceName"] !== null) {
            $this->QCSServiceName = $param["QCSServiceName"];
        }

        if (array_key_exists("CustomSuffix",$param) and $param["CustomSuffix"] !== null) {
            $this->CustomSuffix = $param["CustomSuffix"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RoleTags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
