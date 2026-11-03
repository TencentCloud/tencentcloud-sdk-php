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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可绑定自定义安全护栏的业务资源
 *
 * @method string getResourceType() 获取<p>业务资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>业务资源类型</p>
 * @method string getResourceId() 获取<p>业务资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>业务资源 ID</p>
 * @method string getResourceName() 获取<p>业务资源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>业务资源名称</p>
 * @method string getPath() 获取<p>业务资源访问路径</p>
 * @method void setPath(string $Path) 设置<p>业务资源访问路径</p>
 * @method string getProtocol() 获取<p>数据面解析协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>数据面解析协议</p>
 * @method array getRouteIds() 获取<p>该业务资源对应的全部 Kong Route ID，仅用于关联/排查；创建 Scope.Resources 时仍填业务 ResourceId。</p>
 * @method void setRouteIds(array $RouteIds) 设置<p>该业务资源对应的全部 Kong Route ID，仅用于关联/排查；创建 Scope.Resources 时仍填业务 ResourceId。</p>
 * @method boolean getOccupied() 获取<p>对应任一 Route 是否被其他自定义护栏策略占用；查询时传 PolicyId 可排除自身占用。</p>
 * @method void setOccupied(boolean $Occupied) 设置<p>对应任一 Route 是否被其他自定义护栏策略占用；查询时传 PolicyId 可排除自身占用。</p>
 * @method string getOccupiedBy() 获取<p>占用策略的可读名称及 ID，格式为 策略名称 (策略ID)，多个以逗号分隔；名称不可用时回退 ID，不应按此展示字段解析策略主键。</p>
 * @method void setOccupiedBy(string $OccupiedBy) 设置<p>占用策略的可读名称及 ID，格式为 策略名称 (策略ID)，多个以逗号分隔；名称不可用时回退 ID，不应按此展示字段解析策略主键。</p>
 * @method boolean getSupported() 获取<p>资源当前是否可解析为受支持的绑定目标；与 Occupied 独立，选择时同时检查 Supported=true 且 Occupied=false。</p>
 * @method void setSupported(boolean $Supported) 设置<p>资源当前是否可解析为受支持的绑定目标；与 Occupied 独立，选择时同时检查 Supported=true 且 Occupied=false。</p>
 * @method string getUnsupportedReason() 获取<p>不支持绑定的原因</p>
 * @method void setUnsupportedReason(string $UnsupportedReason) 设置<p>不支持绑定的原因</p>
 */
class CustomGuardrailBindableResource extends AbstractModel
{
    /**
     * @var string <p>业务资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>业务资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>业务资源名称</p>
     */
    public $ResourceName;

    /**
     * @var string <p>业务资源访问路径</p>
     */
    public $Path;

    /**
     * @var string <p>数据面解析协议</p>
     */
    public $Protocol;

    /**
     * @var array <p>该业务资源对应的全部 Kong Route ID，仅用于关联/排查；创建 Scope.Resources 时仍填业务 ResourceId。</p>
     */
    public $RouteIds;

    /**
     * @var boolean <p>对应任一 Route 是否被其他自定义护栏策略占用；查询时传 PolicyId 可排除自身占用。</p>
     */
    public $Occupied;

    /**
     * @var string <p>占用策略的可读名称及 ID，格式为 策略名称 (策略ID)，多个以逗号分隔；名称不可用时回退 ID，不应按此展示字段解析策略主键。</p>
     */
    public $OccupiedBy;

    /**
     * @var boolean <p>资源当前是否可解析为受支持的绑定目标；与 Occupied 独立，选择时同时检查 Supported=true 且 Occupied=false。</p>
     */
    public $Supported;

    /**
     * @var string <p>不支持绑定的原因</p>
     */
    public $UnsupportedReason;

    /**
     * @param string $ResourceType <p>业务资源类型</p>
     * @param string $ResourceId <p>业务资源 ID</p>
     * @param string $ResourceName <p>业务资源名称</p>
     * @param string $Path <p>业务资源访问路径</p>
     * @param string $Protocol <p>数据面解析协议</p>
     * @param array $RouteIds <p>该业务资源对应的全部 Kong Route ID，仅用于关联/排查；创建 Scope.Resources 时仍填业务 ResourceId。</p>
     * @param boolean $Occupied <p>对应任一 Route 是否被其他自定义护栏策略占用；查询时传 PolicyId 可排除自身占用。</p>
     * @param string $OccupiedBy <p>占用策略的可读名称及 ID，格式为 策略名称 (策略ID)，多个以逗号分隔；名称不可用时回退 ID，不应按此展示字段解析策略主键。</p>
     * @param boolean $Supported <p>资源当前是否可解析为受支持的绑定目标；与 Occupied 独立，选择时同时检查 Supported=true 且 Occupied=false。</p>
     * @param string $UnsupportedReason <p>不支持绑定的原因</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RouteIds",$param) and $param["RouteIds"] !== null) {
            $this->RouteIds = $param["RouteIds"];
        }

        if (array_key_exists("Occupied",$param) and $param["Occupied"] !== null) {
            $this->Occupied = $param["Occupied"];
        }

        if (array_key_exists("OccupiedBy",$param) and $param["OccupiedBy"] !== null) {
            $this->OccupiedBy = $param["OccupiedBy"];
        }

        if (array_key_exists("Supported",$param) and $param["Supported"] !== null) {
            $this->Supported = $param["Supported"];
        }

        if (array_key_exists("UnsupportedReason",$param) and $param["UnsupportedReason"] !== null) {
            $this->UnsupportedReason = $param["UnsupportedReason"];
        }
    }
}
