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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAz请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method string getPrimaryNodeZone() 获取<p>主节点所在的可用区 ID。获取方式，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
 * @method void setPrimaryNodeZone(string $PrimaryNodeZone) 设置<p>主节点所在的可用区 ID。获取方式，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
 * @method array getSecondaryNodeZone() 获取<p>从节点所在的可用区 ID 列表。<br><strong>注意</strong>：不可包含主节点与 Hidden 节点所在的可用区。</p>
 * @method void setSecondaryNodeZone(array $SecondaryNodeZone) 设置<p>从节点所在的可用区 ID 列表。<br><strong>注意</strong>：不可包含主节点与 Hidden 节点所在的可用区。</p>
 * @method string getHiddenNodeZone() 获取<p>若当前实例未配置 Hidden 节点，则无需传入此参数。</p>
 * @method void setHiddenNodeZone(string $HiddenNodeZone) 设置<p>若当前实例未配置 Hidden 节点，则无需传入此参数。</p>
 * @method array getReadonlyNodeZone() 获取<p>只读节点所在的可用区 ID 列表。<br><strong>注意</strong>：若当前实例已包含只读节点，则此参数为必填项。</p>
 * @method void setReadonlyNodeZone(array $ReadonlyNodeZone) 设置<p>只读节点所在的可用区 ID 列表。<br><strong>注意</strong>：若当前实例已包含只读节点，则此参数为必填项。</p>
 * @method integer getInMaintenance() 获取<p>指定切换可用区的执行时间策略。</p><ul><li>0：立即执行切换。</li><li>1：在设定的维护时间窗执行切换。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/19910">设置实例维护时间</a>。</li></ul>
 * @method void setInMaintenance(integer $InMaintenance) 设置<p>指定切换可用区的执行时间策略。</p><ul><li>0：立即执行切换。</li><li>1：在设定的维护时间窗执行切换。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/19910">设置实例维护时间</a>。</li></ul>
 */
class ModifyInstanceAzRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主节点所在的可用区 ID。获取方式，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
     */
    public $PrimaryNodeZone;

    /**
     * @var array <p>从节点所在的可用区 ID 列表。<br><strong>注意</strong>：不可包含主节点与 Hidden 节点所在的可用区。</p>
     */
    public $SecondaryNodeZone;

    /**
     * @var string <p>若当前实例未配置 Hidden 节点，则无需传入此参数。</p>
     */
    public $HiddenNodeZone;

    /**
     * @var array <p>只读节点所在的可用区 ID 列表。<br><strong>注意</strong>：若当前实例已包含只读节点，则此参数为必填项。</p>
     */
    public $ReadonlyNodeZone;

    /**
     * @var integer <p>指定切换可用区的执行时间策略。</p><ul><li>0：立即执行切换。</li><li>1：在设定的维护时间窗执行切换。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/19910">设置实例维护时间</a>。</li></ul>
     */
    public $InMaintenance;

    /**
     * @param string $InstanceId <p>实例 ID，例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param string $PrimaryNodeZone <p>主节点所在的可用区 ID。获取方式，请参见<a href="https://cloud.tencent.com/document/product/240/3637">地域和可用区</a>。</p>
     * @param array $SecondaryNodeZone <p>从节点所在的可用区 ID 列表。<br><strong>注意</strong>：不可包含主节点与 Hidden 节点所在的可用区。</p>
     * @param string $HiddenNodeZone <p>若当前实例未配置 Hidden 节点，则无需传入此参数。</p>
     * @param array $ReadonlyNodeZone <p>只读节点所在的可用区 ID 列表。<br><strong>注意</strong>：若当前实例已包含只读节点，则此参数为必填项。</p>
     * @param integer $InMaintenance <p>指定切换可用区的执行时间策略。</p><ul><li>0：立即执行切换。</li><li>1：在设定的维护时间窗执行切换。具体信息，请参见<a href="https://cloud.tencent.com/document/product/240/19910">设置实例维护时间</a>。</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PrimaryNodeZone",$param) and $param["PrimaryNodeZone"] !== null) {
            $this->PrimaryNodeZone = $param["PrimaryNodeZone"];
        }

        if (array_key_exists("SecondaryNodeZone",$param) and $param["SecondaryNodeZone"] !== null) {
            $this->SecondaryNodeZone = $param["SecondaryNodeZone"];
        }

        if (array_key_exists("HiddenNodeZone",$param) and $param["HiddenNodeZone"] !== null) {
            $this->HiddenNodeZone = $param["HiddenNodeZone"];
        }

        if (array_key_exists("ReadonlyNodeZone",$param) and $param["ReadonlyNodeZone"] !== null) {
            $this->ReadonlyNodeZone = $param["ReadonlyNodeZone"];
        }

        if (array_key_exists("InMaintenance",$param) and $param["InMaintenance"] !== null) {
            $this->InMaintenance = $param["InMaintenance"];
        }
    }
}
