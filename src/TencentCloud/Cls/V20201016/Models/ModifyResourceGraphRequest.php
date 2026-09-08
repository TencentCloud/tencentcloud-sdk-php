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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceGraph请求参数结构体
 *
 * @method string getResourceGraphId() 获取<p>待修改的资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>待修改的资源图谱id</p>
 * @method string getName() 获取<p>修改后的资源图谱名称</p>
 * @method void setName(string $Name) 设置<p>修改后的资源图谱名称</p>
 * @method string getDescription() 获取<p>修改后的资源图谱描述</p>
 * @method void setDescription(string $Description) 设置<p>修改后的资源图谱描述</p>
 * @method array getTags() 获取<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
 */
class ModifyResourceGraphRequest extends AbstractModel
{
    /**
     * @var string <p>待修改的资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var string <p>修改后的资源图谱名称</p>
     */
    public $Name;

    /**
     * @var string <p>修改后的资源图谱描述</p>
     */
    public $Description;

    /**
     * @var array <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
     */
    public $Tags;

    /**
     * @param string $ResourceGraphId <p>待修改的资源图谱id</p>
     * @param string $Name <p>修改后的资源图谱名称</p>
     * @param string $Description <p>修改后的资源图谱描述</p>
     * @param array $Tags <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的主题。最大支持10个标签键值对，同一个资源只能绑定到同一个标签键下。</p>
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
        if (array_key_exists("ResourceGraphId",$param) and $param["ResourceGraphId"] !== null) {
            $this->ResourceGraphId = $param["ResourceGraphId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
