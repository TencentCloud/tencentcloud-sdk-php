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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源用量信息，描述某种资源类型的用量范围
 *
 * @method ResourceSpec getResourceSpec() 获取<p>资源规格</p>
 * @method void setResourceSpec(ResourceSpec $ResourceSpec) 设置<p>资源规格</p>
 * @method integer getMin() 获取<p>最小用量</p>
 * @method void setMin(integer $Min) 设置<p>最小用量</p>
 * @method integer getMax() 获取<p>最大用量</p>
 * @method void setMax(integer $Max) 设置<p>最大用量</p>
 */
class ResourceUsage extends AbstractModel
{
    /**
     * @var ResourceSpec <p>资源规格</p>
     */
    public $ResourceSpec;

    /**
     * @var integer <p>最小用量</p>
     */
    public $Min;

    /**
     * @var integer <p>最大用量</p>
     */
    public $Max;

    /**
     * @param ResourceSpec $ResourceSpec <p>资源规格</p>
     * @param integer $Min <p>最小用量</p>
     * @param integer $Max <p>最大用量</p>
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
        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new ResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
