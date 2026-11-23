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
 * CreateSecurityGroup请求参数结构体
 *
 * @method string getGroupName() 获取<p>安全组名称，可任意命名，但不得超过60个字符。</p>
 * @method void setGroupName(string $GroupName) 设置<p>安全组名称，可任意命名，但不得超过60个字符。</p>
 * @method string getGroupDescription() 获取<p>安全组备注，最多100个字符。</p>
 * @method void setGroupDescription(string $GroupDescription) 设置<p>安全组备注，最多100个字符。</p>
 * @method string getProjectId() 获取<p>项目ID，默认0。可在<a href="https://console.cloud.tencent.com/project">控制台项目管理页面</a>查询到。</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID，默认0。可在<a href="https://console.cloud.tencent.com/project">控制台项目管理页面</a>查询到。</p>
 * @method array getTags() 获取<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 * @method void setTags(array $Tags) 设置<p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
 */
class CreateSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string <p>安全组名称，可任意命名，但不得超过60个字符。</p>
     */
    public $GroupName;

    /**
     * @var string <p>安全组备注，最多100个字符。</p>
     */
    public $GroupDescription;

    /**
     * @var string <p>项目ID，默认0。可在<a href="https://console.cloud.tencent.com/project">控制台项目管理页面</a>查询到。</p>
     */
    public $ProjectId;

    /**
     * @var array <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
     */
    public $Tags;

    /**
     * @param string $GroupName <p>安全组名称，可任意命名，但不得超过60个字符。</p>
     * @param string $GroupDescription <p>安全组备注，最多100个字符。</p>
     * @param string $ProjectId <p>项目ID，默认0。可在<a href="https://console.cloud.tencent.com/project">控制台项目管理页面</a>查询到。</p>
     * @param array $Tags <p>指定绑定的标签列表，例如：[{&quot;Key&quot;: &quot;city&quot;, &quot;Value&quot;: &quot;shanghai&quot;}]。</p>
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupDescription",$param) and $param["GroupDescription"] !== null) {
            $this->GroupDescription = $param["GroupDescription"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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
