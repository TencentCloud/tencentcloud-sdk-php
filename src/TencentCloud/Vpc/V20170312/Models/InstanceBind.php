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
 * 云联网实例绑定路由表信息
 *
 * @method string getCcnId() 获取<p>云联网ID。</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网ID。</p>
 * @method string getInstanceType() 获取<p>实例类型：VPC，DIRECTCONNECT，BMVPC，EDGE，EDGE_TUNNEL，EDGE_VPNGW，VPNGW。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型：VPC，DIRECTCONNECT，BMVPC，EDGE，EDGE_TUNNEL，EDGE_VPNGW，VPNGW。</p>
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getInstanceBindTime() 获取<p>实例绑定路由表的时间。</p>
 * @method void setInstanceBindTime(string $InstanceBindTime) 设置<p>实例绑定路由表的时间。</p>
 * @method string getRouteTableId() 获取<p>路由表ID。</p>
 * @method void setRouteTableId(string $RouteTableId) 设置<p>路由表ID。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getInstanceRegion() 获取<p>实例所在地域。</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>实例所在地域。</p>
 * @method string getInstanceUin() 获取<p>实例所属的账户uin。</p>
 * @method void setInstanceUin(string $InstanceUin) 设置<p>实例所属的账户uin。</p>
 * @method string getState() 获取<p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
 * @method void setState(string $State) 设置<p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
 * @method string getAliasType() 获取<p>别名类型</p>
 * @method void setAliasType(string $AliasType) 设置<p>别名类型</p>
 * @method string getAliasInstanceId() 获取<p>别名实例ID</p>
 * @method void setAliasInstanceId(string $AliasInstanceId) 设置<p>别名实例ID</p>
 */
class InstanceBind extends AbstractModel
{
    /**
     * @var string <p>云联网ID。</p>
     */
    public $CcnId;

    /**
     * @var string <p>实例类型：VPC，DIRECTCONNECT，BMVPC，EDGE，EDGE_TUNNEL，EDGE_VPNGW，VPNGW。</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例绑定路由表的时间。</p>
     */
    public $InstanceBindTime;

    /**
     * @var string <p>路由表ID。</p>
     */
    public $RouteTableId;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例所在地域。</p>
     */
    public $InstanceRegion;

    /**
     * @var string <p>实例所属的账户uin。</p>
     */
    public $InstanceUin;

    /**
     * @var string <p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
     */
    public $State;

    /**
     * @var string <p>别名类型</p>
     */
    public $AliasType;

    /**
     * @var string <p>别名实例ID</p>
     */
    public $AliasInstanceId;

    /**
     * @param string $CcnId <p>云联网ID。</p>
     * @param string $InstanceType <p>实例类型：VPC，DIRECTCONNECT，BMVPC，EDGE，EDGE_TUNNEL，EDGE_VPNGW，VPNGW。</p>
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $InstanceBindTime <p>实例绑定路由表的时间。</p>
     * @param string $RouteTableId <p>路由表ID。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $InstanceRegion <p>实例所在地域。</p>
     * @param string $InstanceUin <p>实例所属的账户uin。</p>
     * @param string $State <p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
     * @param string $AliasType <p>别名类型</p>
     * @param string $AliasInstanceId <p>别名实例ID</p>
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceBindTime",$param) and $param["InstanceBindTime"] !== null) {
            $this->InstanceBindTime = $param["InstanceBindTime"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AliasType",$param) and $param["AliasType"] !== null) {
            $this->AliasType = $param["AliasType"];
        }

        if (array_key_exists("AliasInstanceId",$param) and $param["AliasInstanceId"] !== null) {
            $this->AliasInstanceId = $param["AliasInstanceId"];
        }
    }
}
