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
 * 云联网（CCN）关联实例（Instance）对象
 *
 * @method string getCcnId() 获取<p>云联网实例ID。</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网实例ID。</p>
 * @method string getInstanceType() 获取<p>关联实例类型：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li>
 * @method void setInstanceType(string $InstanceType) 设置<p>关联实例类型：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li>
 * @method string getInstanceId() 获取<p>关联实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>关联实例ID。</p>
 * @method string getInstanceName() 获取<p>关联实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>关联实例名称。</p>
 * @method string getInstanceRegion() 获取<p>关联实例所属大区，例如：ap-guangzhou。</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>关联实例所属大区，例如：ap-guangzhou。</p>
 * @method string getInstanceUin() 获取<p>关联实例所属UIN（根账号）。</p>
 * @method void setInstanceUin(string $InstanceUin) 设置<p>关联实例所属UIN（根账号）。</p>
 * @method array getCidrBlock() 获取<p>关联实例CIDR。</p>
 * @method void setCidrBlock(array $CidrBlock) 设置<p>关联实例CIDR。</p>
 * @method string getState() 获取<p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
 * @method void setState(string $State) 设置<p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
 * @method string getAttachedTime() 获取<p>关联时间。</p>
 * @method void setAttachedTime(string $AttachedTime) 设置<p>关联时间。</p>
 * @method string getCcnUin() 获取<p>云联网所属UIN（根账号）。</p>
 * @method void setCcnUin(string $CcnUin) 设置<p>云联网所属UIN（根账号）。</p>
 * @method string getInstanceArea() 获取<p>关联实例所属的大地域，如: CHINA_MAINLAND</p>
 * @method void setInstanceArea(string $InstanceArea) 设置<p>关联实例所属的大地域，如: CHINA_MAINLAND</p>
 * @method string getDescription() 获取<p>备注</p>
 * @method void setDescription(string $Description) 设置<p>备注</p>
 * @method string getRouteTableId() 获取<p>路由表ID</p>
 * @method void setRouteTableId(string $RouteTableId) 设置<p>路由表ID</p>
 * @method string getRouteTableName() 获取<p>路由表名称</p>
 * @method void setRouteTableName(string $RouteTableName) 设置<p>路由表名称</p>
 * @method string getAliasType() 获取<p>别名类型</p>
 * @method void setAliasType(string $AliasType) 设置<p>别名类型</p>
 * @method string getAliasInstanceId() 获取<p>别名ID</p>
 * @method void setAliasInstanceId(string $AliasInstanceId) 设置<p>别名ID</p>
 */
class CcnAttachedInstance extends AbstractModel
{
    /**
     * @var string <p>云联网实例ID。</p>
     */
    public $CcnId;

    /**
     * @var string <p>关联实例类型：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li>
     */
    public $InstanceType;

    /**
     * @var string <p>关联实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>关联实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>关联实例所属大区，例如：ap-guangzhou。</p>
     */
    public $InstanceRegion;

    /**
     * @var string <p>关联实例所属UIN（根账号）。</p>
     */
    public $InstanceUin;

    /**
     * @var array <p>关联实例CIDR。</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
     */
    public $State;

    /**
     * @var string <p>关联时间。</p>
     */
    public $AttachedTime;

    /**
     * @var string <p>云联网所属UIN（根账号）。</p>
     */
    public $CcnUin;

    /**
     * @var string <p>关联实例所属的大地域，如: CHINA_MAINLAND</p>
     */
    public $InstanceArea;

    /**
     * @var string <p>备注</p>
     */
    public $Description;

    /**
     * @var string <p>路由表ID</p>
     */
    public $RouteTableId;

    /**
     * @var string <p>路由表名称</p>
     */
    public $RouteTableName;

    /**
     * @var string <p>别名类型</p>
     */
    public $AliasType;

    /**
     * @var string <p>别名ID</p>
     */
    public $AliasInstanceId;

    /**
     * @param string $CcnId <p>云联网实例ID。</p>
     * @param string $InstanceType <p>关联实例类型：</p><li><code>VPC</code>：私有网络</li><li><code>DIRECTCONNECT</code>：专线网关</li><li><code>BMVPC</code>：黑石私有网络</li>
     * @param string $InstanceId <p>关联实例ID。</p>
     * @param string $InstanceName <p>关联实例名称。</p>
     * @param string $InstanceRegion <p>关联实例所属大区，例如：ap-guangzhou。</p>
     * @param string $InstanceUin <p>关联实例所属UIN（根账号）。</p>
     * @param array $CidrBlock <p>关联实例CIDR。</p>
     * @param string $State <p>关联实例状态：</p><li><code>PENDING</code>：申请中</li><li><code>ACTIVE</code>：已连接</li><li><code>EXPIRED</code>：已过期</li><li><code>REJECTED</code>：已拒绝</li><li><code>DELETED</code>：已删除</li><li><code>FAILED</code>：失败的（2小时后将异步强制解关联）</li><li><code>ATTACHING</code>：关联中</li><li><code>DETACHING</code>：解关联中</li><li><code>DETACHFAILED</code>：解关联失败（2小时后将异步强制解关联）</li>
     * @param string $AttachedTime <p>关联时间。</p>
     * @param string $CcnUin <p>云联网所属UIN（根账号）。</p>
     * @param string $InstanceArea <p>关联实例所属的大地域，如: CHINA_MAINLAND</p>
     * @param string $Description <p>备注</p>
     * @param string $RouteTableId <p>路由表ID</p>
     * @param string $RouteTableName <p>路由表名称</p>
     * @param string $AliasType <p>别名类型</p>
     * @param string $AliasInstanceId <p>别名ID</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }

        if (array_key_exists("CcnUin",$param) and $param["CcnUin"] !== null) {
            $this->CcnUin = $param["CcnUin"];
        }

        if (array_key_exists("InstanceArea",$param) and $param["InstanceArea"] !== null) {
            $this->InstanceArea = $param["InstanceArea"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("AliasType",$param) and $param["AliasType"] !== null) {
            $this->AliasType = $param["AliasType"];
        }

        if (array_key_exists("AliasInstanceId",$param) and $param["AliasInstanceId"] !== null) {
            $this->AliasInstanceId = $param["AliasInstanceId"];
        }
    }
}
