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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户/用户组标签维度信息（用户管理域独立结构，与通用 TagInfo 解耦，仅供用户/用户组标签接口使用）
 *
 * @method string getTagId() 获取<p>标签维度ID。ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中必填，可通过 ListTags 接口出参 Items[].TagId 获取，也可通过 CreateTags 创建后获取；按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中无需传入；查询接口出参中回填。ID 不存在或已删除时接口报错 TagNotExist</p>
 * @method void setTagId(string $TagId) 设置<p>标签维度ID。ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中必填，可通过 ListTags 接口出参 Items[].TagId 获取，也可通过 CreateTags 创建后获取；按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中无需传入；查询接口出参中回填。ID 不存在或已删除时接口报错 TagNotExist</p>
 * @method string getTagName() 获取<p>标签名称。按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中必填；ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中无需传入，服务端忽略；查询接口出参中回填</p>
 * @method void setTagName(string $TagName) 设置<p>标签名称。按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中必填；ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中无需传入，服务端忽略；查询接口出参中回填</p>
 * @method array getValues() 获取<p>该标签维度下绑定的标签值集合，元素结构见 TagValueInfo。ID 模式写接口中元素 TagValueId 必填；按名称模式接口中元素 TagValue 必填；查询接口出参中回填</p>
 * @method void setValues(array $Values) 设置<p>该标签维度下绑定的标签值集合，元素结构见 TagValueInfo。ID 模式写接口中元素 TagValueId 必填；按名称模式接口中元素 TagValue 必填；查询接口出参中回填</p>
 */
class UserTagInfo extends AbstractModel
{
    /**
     * @var string <p>标签维度ID。ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中必填，可通过 ListTags 接口出参 Items[].TagId 获取，也可通过 CreateTags 创建后获取；按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中无需传入；查询接口出参中回填。ID 不存在或已删除时接口报错 TagNotExist</p>
     */
    public $TagId;

    /**
     * @var string <p>标签名称。按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中必填；ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中无需传入，服务端忽略；查询接口出参中回填</p>
     */
    public $TagName;

    /**
     * @var array <p>该标签维度下绑定的标签值集合，元素结构见 TagValueInfo。ID 模式写接口中元素 TagValueId 必填；按名称模式接口中元素 TagValue 必填；查询接口出参中回填</p>
     */
    public $Values;

    /**
     * @param string $TagId <p>标签维度ID。ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中必填，可通过 ListTags 接口出参 Items[].TagId 获取，也可通过 CreateTags 创建后获取；按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中无需传入；查询接口出参中回填。ID 不存在或已删除时接口报错 TagNotExist</p>
     * @param string $TagName <p>标签名称。按名称模式接口（AttachWorkspaceUserTags / DetachWorkspaceUserTags）中必填；ID 模式写接口（UpdateWorkspaceUsersTags / UpdateWorkspaceGroupsTags）中无需传入，服务端忽略；查询接口出参中回填</p>
     * @param array $Values <p>该标签维度下绑定的标签值集合，元素结构见 TagValueInfo。ID 模式写接口中元素 TagValueId 必填；按名称模式接口中元素 TagValue 必填；查询接口出参中回填</p>
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new TagValueInfo();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }
    }
}
