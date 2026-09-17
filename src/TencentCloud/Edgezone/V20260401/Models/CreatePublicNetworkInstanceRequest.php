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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePublicNetworkInstance请求参数结构体
 *
 * @method string getZoneId() 获取<p>可用区</p>
 * @method void setZoneId(string $ZoneId) 设置<p>可用区</p>
 * @method string getNetworkInstanceName() 获取<p>公网实例名称</p>
 * @method void setNetworkInstanceName(string $NetworkInstanceName) 设置<p>公网实例名称</p>
 * @method string getLine() 获取<p>网络线路</p>
 * @method void setLine(string $Line) 设置<p>网络线路</p>
 * @method string getRouteMode() 获取<p>路由模式</p>
 * @method void setRouteMode(string $RouteMode) 设置<p>路由模式</p>
 * @method integer getBandwidth() 获取<p>公网带宽（Mbps）</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>公网带宽（Mbps）</p>
 * @method integer getBgpAsNumber() 获取<p>BGP AS号</p>
 * @method void setBgpAsNumber(integer $BgpAsNumber) 设置<p>BGP AS号</p>
 * @method string getBgpPassword() 获取<p>BGP认证密码</p>
 * @method void setBgpPassword(string $BgpPassword) 设置<p>BGP认证密码</p>
 * @method string getInstanceType() 获取<p>公网实例类型</p><p>枚举值：</p><ul><li>standard： 标准型(默认)</li><li>custom： 自定义型(暂不支持创建)</li></ul>
 * @method void setInstanceType(string $InstanceType) 设置<p>公网实例类型</p><p>枚举值：</p><ul><li>standard： 标准型(默认)</li><li>custom： 自定义型(暂不支持创建)</li></ul>
 */
class CreatePublicNetworkInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $ZoneId;

    /**
     * @var string <p>公网实例名称</p>
     */
    public $NetworkInstanceName;

    /**
     * @var string <p>网络线路</p>
     */
    public $Line;

    /**
     * @var string <p>路由模式</p>
     */
    public $RouteMode;

    /**
     * @var integer <p>公网带宽（Mbps）</p>
     */
    public $Bandwidth;

    /**
     * @var integer <p>BGP AS号</p>
     */
    public $BgpAsNumber;

    /**
     * @var string <p>BGP认证密码</p>
     */
    public $BgpPassword;

    /**
     * @var string <p>公网实例类型</p><p>枚举值：</p><ul><li>standard： 标准型(默认)</li><li>custom： 自定义型(暂不支持创建)</li></ul>
     */
    public $InstanceType;

    /**
     * @param string $ZoneId <p>可用区</p>
     * @param string $NetworkInstanceName <p>公网实例名称</p>
     * @param string $Line <p>网络线路</p>
     * @param string $RouteMode <p>路由模式</p>
     * @param integer $Bandwidth <p>公网带宽（Mbps）</p>
     * @param integer $BgpAsNumber <p>BGP AS号</p>
     * @param string $BgpPassword <p>BGP认证密码</p>
     * @param string $InstanceType <p>公网实例类型</p><p>枚举值：</p><ul><li>standard： 标准型(默认)</li><li>custom： 自定义型(暂不支持创建)</li></ul>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("RouteMode",$param) and $param["RouteMode"] !== null) {
            $this->RouteMode = $param["RouteMode"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("BgpAsNumber",$param) and $param["BgpAsNumber"] !== null) {
            $this->BgpAsNumber = $param["BgpAsNumber"];
        }

        if (array_key_exists("BgpPassword",$param) and $param["BgpPassword"] !== null) {
            $this->BgpPassword = $param["BgpPassword"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
