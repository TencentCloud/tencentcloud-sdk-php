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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CCN路由策略对象
 *
 * @method string getRouteId() 获取<p>路由策略ID</p>
 * @method void setRouteId(string $RouteId) 设置<p>路由策略ID</p>
 * @method string getDestinationCidrBlock() 获取<p>目的端</p>
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置<p>目的端</p>
 * @method string getInstanceType() 获取<p>下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT</p>
 * @method string getInstanceId() 获取<p>下一跳（关联实例）</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>下一跳（关联实例）</p>
 * @method string getInstanceName() 获取<p>下一跳名称（关联实例名称）</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>下一跳名称（关联实例名称）</p>
 * @method string getInstanceRegion() 获取<p>下一跳所属地域（关联实例所属地域）</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>下一跳所属地域（关联实例所属地域）</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method boolean getEnabled() 获取<p>路由是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>路由是否启用</p>
 * @method string getInstanceUin() 获取<p>关联实例所属UIN（根账号）</p>
 * @method void setInstanceUin(string $InstanceUin) 设置<p>关联实例所属UIN（根账号）</p>
 * @method string getExtraState() 获取<p>路由的扩展状态</p>
 * @method void setExtraState(string $ExtraState) 设置<p>路由的扩展状态</p>
 * @method boolean getIsBgp() 获取<p>是否动态路由</p>
 * @method void setIsBgp(boolean $IsBgp) 设置<p>是否动态路由</p>
 * @method integer getRoutePriority() 获取<p>路由优先级</p>
 * @method void setRoutePriority(integer $RoutePriority) 设置<p>路由优先级</p>
 * @method string getInstanceExtraName() 获取<p>下一跳扩展名称（关联实例的扩展名称）</p>
 * @method void setInstanceExtraName(string $InstanceExtraName) 设置<p>下一跳扩展名称（关联实例的扩展名称）</p>
 * @method string getAliasType() 获取<p>实例类型</p>
 * @method void setAliasType(string $AliasType) 设置<p>实例类型</p>
 * @method string getAliasInstanceId() 获取<p>实例id</p>
 * @method void setAliasInstanceId(string $AliasInstanceId) 设置<p>实例id</p>
 * @method string getRouteTableId() 获取<p>路由表ID</p>
 * @method void setRouteTableId(string $RouteTableId) 设置<p>路由表ID</p>
 * @method string getAsPath() 获取<p>AS-PATH</p>
 * @method void setAsPath(string $AsPath) 设置<p>AS-PATH</p>
 */
class CcnRoute extends AbstractModel
{
    /**
     * @var string <p>路由策略ID</p>
     */
    public $RouteId;

    /**
     * @var string <p>目的端</p>
     */
    public $DestinationCidrBlock;

    /**
     * @var string <p>下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT</p>
     */
    public $InstanceType;

    /**
     * @var string <p>下一跳（关联实例）</p>
     */
    public $InstanceId;

    /**
     * @var string <p>下一跳名称（关联实例名称）</p>
     */
    public $InstanceName;

    /**
     * @var string <p>下一跳所属地域（关联实例所属地域）</p>
     */
    public $InstanceRegion;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>路由是否启用</p>
     */
    public $Enabled;

    /**
     * @var string <p>关联实例所属UIN（根账号）</p>
     */
    public $InstanceUin;

    /**
     * @var string <p>路由的扩展状态</p>
     */
    public $ExtraState;

    /**
     * @var boolean <p>是否动态路由</p>
     */
    public $IsBgp;

    /**
     * @var integer <p>路由优先级</p>
     */
    public $RoutePriority;

    /**
     * @var string <p>下一跳扩展名称（关联实例的扩展名称）</p>
     */
    public $InstanceExtraName;

    /**
     * @var string <p>实例类型</p>
     */
    public $AliasType;

    /**
     * @var string <p>实例id</p>
     */
    public $AliasInstanceId;

    /**
     * @var string <p>路由表ID</p>
     */
    public $RouteTableId;

    /**
     * @var string <p>AS-PATH</p>
     */
    public $AsPath;

    /**
     * @param string $RouteId <p>路由策略ID</p>
     * @param string $DestinationCidrBlock <p>目的端</p>
     * @param string $InstanceType <p>下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT</p>
     * @param string $InstanceId <p>下一跳（关联实例）</p>
     * @param string $InstanceName <p>下一跳名称（关联实例名称）</p>
     * @param string $InstanceRegion <p>下一跳所属地域（关联实例所属地域）</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param boolean $Enabled <p>路由是否启用</p>
     * @param string $InstanceUin <p>关联实例所属UIN（根账号）</p>
     * @param string $ExtraState <p>路由的扩展状态</p>
     * @param boolean $IsBgp <p>是否动态路由</p>
     * @param integer $RoutePriority <p>路由优先级</p>
     * @param string $InstanceExtraName <p>下一跳扩展名称（关联实例的扩展名称）</p>
     * @param string $AliasType <p>实例类型</p>
     * @param string $AliasInstanceId <p>实例id</p>
     * @param string $RouteTableId <p>路由表ID</p>
     * @param string $AsPath <p>AS-PATH</p>
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }

        if (array_key_exists("ExtraState",$param) and $param["ExtraState"] !== null) {
            $this->ExtraState = $param["ExtraState"];
        }

        if (array_key_exists("IsBgp",$param) and $param["IsBgp"] !== null) {
            $this->IsBgp = $param["IsBgp"];
        }

        if (array_key_exists("RoutePriority",$param) and $param["RoutePriority"] !== null) {
            $this->RoutePriority = $param["RoutePriority"];
        }

        if (array_key_exists("InstanceExtraName",$param) and $param["InstanceExtraName"] !== null) {
            $this->InstanceExtraName = $param["InstanceExtraName"];
        }

        if (array_key_exists("AliasType",$param) and $param["AliasType"] !== null) {
            $this->AliasType = $param["AliasType"];
        }

        if (array_key_exists("AliasInstanceId",$param) and $param["AliasInstanceId"] !== null) {
            $this->AliasInstanceId = $param["AliasInstanceId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("AsPath",$param) and $param["AsPath"] !== null) {
            $this->AsPath = $param["AsPath"];
        }
    }
}
