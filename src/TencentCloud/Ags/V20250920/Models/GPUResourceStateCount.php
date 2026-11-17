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
 * 资源状态计数；四项之和为组内 TotalCount，不含已销毁和补偿完成的失败资源。
 *
 * @method integer getDelivering() 获取<p>准备中的资源数量，单位台。</p>
 * @method void setDelivering(integer $Delivering) 设置<p>准备中的资源数量，单位台。</p>
 * @method integer getActive() 获取<p>已生效的资源数量，单位台；不等于当前可领取数量。</p>
 * @method void setActive(integer $Active) 设置<p>已生效的资源数量，单位台；不等于当前可领取数量。</p>
 * @method integer getIsolated() 获取<p>已隔离的资源数量，单位台。</p>
 * @method void setIsolated(integer $Isolated) 设置<p>已隔离的资源数量，单位台。</p>
 * @method integer getDestroying() 获取<p>正在释放的资源数量，单位台。</p>
 * @method void setDestroying(integer $Destroying) 设置<p>正在释放的资源数量，单位台。</p>
 */
class GPUResourceStateCount extends AbstractModel
{
    /**
     * @var integer <p>准备中的资源数量，单位台。</p>
     */
    public $Delivering;

    /**
     * @var integer <p>已生效的资源数量，单位台；不等于当前可领取数量。</p>
     */
    public $Active;

    /**
     * @var integer <p>已隔离的资源数量，单位台。</p>
     */
    public $Isolated;

    /**
     * @var integer <p>正在释放的资源数量，单位台。</p>
     */
    public $Destroying;

    /**
     * @param integer $Delivering <p>准备中的资源数量，单位台。</p>
     * @param integer $Active <p>已生效的资源数量，单位台；不等于当前可领取数量。</p>
     * @param integer $Isolated <p>已隔离的资源数量，单位台。</p>
     * @param integer $Destroying <p>正在释放的资源数量，单位台。</p>
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
        if (array_key_exists("Delivering",$param) and $param["Delivering"] !== null) {
            $this->Delivering = $param["Delivering"];
        }

        if (array_key_exists("Active",$param) and $param["Active"] !== null) {
            $this->Active = $param["Active"];
        }

        if (array_key_exists("Isolated",$param) and $param["Isolated"] !== null) {
            $this->Isolated = $param["Isolated"];
        }

        if (array_key_exists("Destroying",$param) and $param["Destroying"] !== null) {
            $this->Destroying = $param["Destroying"];
        }
    }
}
