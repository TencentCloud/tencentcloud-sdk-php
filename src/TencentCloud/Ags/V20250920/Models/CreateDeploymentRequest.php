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
 * CreateDeployment请求参数结构体
 *
 * @method string getDeploymentName() 获取<p>唯一的 Deployment 名称，必须符合 DNS-1123 命名规范，创建后不可修改。</p>
 * @method void setDeploymentName(string $DeploymentName) 设置<p>唯一的 Deployment 名称，必须符合 DNS-1123 命名规范，创建后不可修改。</p>
 * @method string getToolId() 获取<p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
 * @method void setToolId(string $ToolId) 设置<p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
 * @method ScalingConfiguration getScalingConfiguration() 获取<p>伸缩配置；省略的成员由服务端补全默认值。</p>
 * @method void setScalingConfiguration(ScalingConfiguration $ScalingConfiguration) 设置<p>伸缩配置；省略的成员由服务端补全默认值。</p>
 * @method LifecycleConfiguration getLifecycleConfiguration() 获取<p>空闲生命周期配置；省略的成员由服务端补全默认值。</p>
 * @method void setLifecycleConfiguration(LifecycleConfiguration $LifecycleConfiguration) 设置<p>空闲生命周期配置；省略的成员由服务端补全默认值。</p>
 * @method AffinityConfiguration getAffinityConfiguration() 获取<p>Affinity 配置；省略或空 Mode 表示不启用。</p>
 * @method void setAffinityConfiguration(AffinityConfiguration $AffinityConfiguration) 设置<p>Affinity 配置；省略或空 Mode 表示不启用。</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class CreateDeploymentRequest extends AbstractModel
{
    /**
     * @var string <p>唯一的 Deployment 名称，必须符合 DNS-1123 命名规范，创建后不可修改。</p>
     */
    public $DeploymentName;

    /**
     * @var string <p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
     */
    public $ToolId;

    /**
     * @var ScalingConfiguration <p>伸缩配置；省略的成员由服务端补全默认值。</p>
     */
    public $ScalingConfiguration;

    /**
     * @var LifecycleConfiguration <p>空闲生命周期配置；省略的成员由服务端补全默认值。</p>
     */
    public $LifecycleConfiguration;

    /**
     * @var AffinityConfiguration <p>Affinity 配置；省略或空 Mode 表示不启用。</p>
     */
    public $AffinityConfiguration;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $DeploymentName <p>唯一的 Deployment 名称，必须符合 DNS-1123 命名规范，创建后不可修改。</p>
     * @param string $ToolId <p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
     * @param ScalingConfiguration $ScalingConfiguration <p>伸缩配置；省略的成员由服务端补全默认值。</p>
     * @param LifecycleConfiguration $LifecycleConfiguration <p>空闲生命周期配置；省略的成员由服务端补全默认值。</p>
     * @param AffinityConfiguration $AffinityConfiguration <p>Affinity 配置；省略或空 Mode 表示不启用。</p>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("DeploymentName",$param) and $param["DeploymentName"] !== null) {
            $this->DeploymentName = $param["DeploymentName"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ScalingConfiguration",$param) and $param["ScalingConfiguration"] !== null) {
            $this->ScalingConfiguration = new ScalingConfiguration();
            $this->ScalingConfiguration->deserialize($param["ScalingConfiguration"]);
        }

        if (array_key_exists("LifecycleConfiguration",$param) and $param["LifecycleConfiguration"] !== null) {
            $this->LifecycleConfiguration = new LifecycleConfiguration();
            $this->LifecycleConfiguration->deserialize($param["LifecycleConfiguration"]);
        }

        if (array_key_exists("AffinityConfiguration",$param) and $param["AffinityConfiguration"] !== null) {
            $this->AffinityConfiguration = new AffinityConfiguration();
            $this->AffinityConfiguration->deserialize($param["AffinityConfiguration"]);
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
