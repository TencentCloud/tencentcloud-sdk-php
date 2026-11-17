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
 * GPU 资源组元数据及统计；资源组是管理集合，期限和续费标记逐台保存。
 *
 * @method string getResourceGroupId() 获取GPU 资源组 ID。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置GPU 资源组 ID。
 * @method string getName() 获取资源组名称。
 * @method void setName(string $Name) 设置资源组名称。
 * @method GPUResourceGroupSpec getSpec() 获取资源组固定规格；已下架规格的已购组仍可查询。
 * @method void setSpec(GPUResourceGroupSpec $Spec) 设置资源组固定规格；已下架规格的已购组仍可查询。
 * @method GPUResourceGroupStatistics getStatistics() 获取当前资源统计。
 * @method void setStatistics(GPUResourceGroupStatistics $Statistics) 设置当前资源统计。
 */
class GPUResourceGroup extends AbstractModel
{
    /**
     * @var string GPU 资源组 ID。
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组名称。
     */
    public $Name;

    /**
     * @var GPUResourceGroupSpec 资源组固定规格；已下架规格的已购组仍可查询。
     */
    public $Spec;

    /**
     * @var GPUResourceGroupStatistics 当前资源统计。
     */
    public $Statistics;

    /**
     * @param string $ResourceGroupId GPU 资源组 ID。
     * @param string $Name 资源组名称。
     * @param GPUResourceGroupSpec $Spec 资源组固定规格；已下架规格的已购组仍可查询。
     * @param GPUResourceGroupStatistics $Statistics 当前资源统计。
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new GPUResourceGroupSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = new GPUResourceGroupStatistics();
            $this->Statistics->deserialize($param["Statistics"]);
        }
    }
}
