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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateSandboxTool请求参数结构体
 *
 * @method string getToolId() 获取<p>沙箱工具ID</p>
 * @method void setToolId(string $ToolId) 设置<p>沙箱工具ID</p>
 * @method string getDescription() 获取<p>沙箱工具描述，最大长度200字符</p>
 * @method void setDescription(string $Description) 设置<p>沙箱工具描述，最大长度200字符</p>
 * @method NetworkConfiguration getNetworkConfiguration() 获取<p>网络配置</p>
 * @method void setNetworkConfiguration(NetworkConfiguration $NetworkConfiguration) 设置<p>网络配置</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method CustomConfiguration getCustomConfiguration() 获取<p>沙箱工具自定义配置</p>
 * @method void setCustomConfiguration(CustomConfiguration $CustomConfiguration) 设置<p>沙箱工具自定义配置</p>
 */
class UpdateSandboxToolRequest extends AbstractModel
{
    /**
     * @var string <p>沙箱工具ID</p>
     */
    public $ToolId;

    /**
     * @var string <p>沙箱工具描述，最大长度200字符</p>
     */
    public $Description;

    /**
     * @var NetworkConfiguration <p>网络配置</p>
     */
    public $NetworkConfiguration;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var CustomConfiguration <p>沙箱工具自定义配置</p>
     */
    public $CustomConfiguration;

    /**
     * @param string $ToolId <p>沙箱工具ID</p>
     * @param string $Description <p>沙箱工具描述，最大长度200字符</p>
     * @param NetworkConfiguration $NetworkConfiguration <p>网络配置</p>
     * @param array $Tags <p>标签</p>
     * @param CustomConfiguration $CustomConfiguration <p>沙箱工具自定义配置</p>
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
        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NetworkConfiguration",$param) and $param["NetworkConfiguration"] !== null) {
            $this->NetworkConfiguration = new NetworkConfiguration();
            $this->NetworkConfiguration->deserialize($param["NetworkConfiguration"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CustomConfiguration",$param) and $param["CustomConfiguration"] !== null) {
            $this->CustomConfiguration = new CustomConfiguration();
            $this->CustomConfiguration->deserialize($param["CustomConfiguration"]);
        }
    }
}
