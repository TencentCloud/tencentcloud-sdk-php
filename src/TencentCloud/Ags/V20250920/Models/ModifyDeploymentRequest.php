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
 * ModifyDeployment请求参数结构体
 *
 * @method string getDeploymentId() 获取<p>待修改的 Deployment ID。</p>
 * @method void setDeploymentId(string $DeploymentId) 设置<p>待修改的 Deployment ID。</p>
 * @method ScalingConfiguration getScalingConfiguration() 获取<p>完整替换伸缩配置；提供时必须包含全部三个成员。</p>
 * @method void setScalingConfiguration(ScalingConfiguration $ScalingConfiguration) 设置<p>完整替换伸缩配置；提供时必须包含全部三个成员。</p>
 * @method LifecycleConfiguration getLifecycleConfiguration() 获取<p>完整替换生命周期配置；提供时必须包含全部两个成员。</p>
 * @method void setLifecycleConfiguration(LifecycleConfiguration $LifecycleConfiguration) 设置<p>完整替换生命周期配置；提供时必须包含全部两个成员。</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class ModifyDeploymentRequest extends AbstractModel
{
    /**
     * @var string <p>待修改的 Deployment ID。</p>
     */
    public $DeploymentId;

    /**
     * @var ScalingConfiguration <p>完整替换伸缩配置；提供时必须包含全部三个成员。</p>
     */
    public $ScalingConfiguration;

    /**
     * @var LifecycleConfiguration <p>完整替换生命周期配置；提供时必须包含全部两个成员。</p>
     */
    public $LifecycleConfiguration;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $DeploymentId <p>待修改的 Deployment ID。</p>
     * @param ScalingConfiguration $ScalingConfiguration <p>完整替换伸缩配置；提供时必须包含全部三个成员。</p>
     * @param LifecycleConfiguration $LifecycleConfiguration <p>完整替换生命周期配置；提供时必须包含全部两个成员。</p>
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
        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
        }

        if (array_key_exists("ScalingConfiguration",$param) and $param["ScalingConfiguration"] !== null) {
            $this->ScalingConfiguration = new ScalingConfiguration();
            $this->ScalingConfiguration->deserialize($param["ScalingConfiguration"]);
        }

        if (array_key_exists("LifecycleConfiguration",$param) and $param["LifecycleConfiguration"] !== null) {
            $this->LifecycleConfiguration = new LifecycleConfiguration();
            $this->LifecycleConfiguration->deserialize($param["LifecycleConfiguration"]);
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
