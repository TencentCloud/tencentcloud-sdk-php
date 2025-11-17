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
 * @method string getToolId() 获取沙箱工具ID
 * @method void setToolId(string $ToolId) 设置沙箱工具ID
 * @method string getDescription() 获取沙箱工具描述，最大长度200字符
 * @method void setDescription(string $Description) 设置沙箱工具描述，最大长度200字符
 * @method NetworkConfiguration getNetworkConfiguration() 获取网络配置
 * @method void setNetworkConfiguration(NetworkConfiguration $NetworkConfiguration) 设置网络配置
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class UpdateSandboxToolRequest extends AbstractModel
{
    /**
     * @var string 沙箱工具ID
     */
    public $ToolId;

    /**
     * @var string 沙箱工具描述，最大长度200字符
     */
    public $Description;

    /**
     * @var NetworkConfiguration 网络配置
     */
    public $NetworkConfiguration;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $ToolId 沙箱工具ID
     * @param string $Description 沙箱工具描述，最大长度200字符
     * @param NetworkConfiguration $NetworkConfiguration 网络配置
     * @param array $Tags 标签
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
    }
}
