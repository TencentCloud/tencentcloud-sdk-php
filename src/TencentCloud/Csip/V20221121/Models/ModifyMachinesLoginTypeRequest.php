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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMachinesLoginType请求参数结构体
 *
 * @method integer getLoginType() 获取<p>登录方式：0-原始方式，1-扫码免密登录</p>
 * @method void setLoginType(integer $LoginType) 设置<p>登录方式：0-原始方式，1-扫码免密登录</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getInstanceIds() 获取<p>instance_id列表(instance_ids和quuids至少要填一个)</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>instance_id列表(instance_ids和quuids至少要填一个)</p>
 * @method array getQuuids() 获取<p>主机quuid列表(instance_ids和quuids至少要填一个)</p>
 * @method void setQuuids(array $Quuids) 设置<p>主机quuid列表(instance_ids和quuids至少要填一个)</p>
 * @method array getExcludeQuuid() 获取<p>排除的quuid集合</p>
 * @method void setExcludeQuuid(array $ExcludeQuuid) 设置<p>排除的quuid集合</p>
 * @method integer getScope() 获取<p>开启范围 0 自选主机 1 全部主机</p>
 * @method void setScope(integer $Scope) 设置<p>开启范围 0 自选主机 1 全部主机</p>
 * @method integer getFrom() 获取<p>操作来源 :<br>0   主机页面<br>1   客户端设置页面<br>2   安全中心页面<br>3   LightHouse购买页<br>4   LightHouse控制台</p>
 * @method void setFrom(integer $From) 设置<p>操作来源 :<br>0   主机页面<br>1   客户端设置页面<br>2   安全中心页面<br>3   LightHouse购买页<br>4   LightHouse控制台</p>
 * @method integer getRequestVersion() 获取<p>请求版本 0   原始版本 1   策略式请求</p>
 * @method void setRequestVersion(integer $RequestVersion) 设置<p>请求版本 0   原始版本 1   策略式请求</p>
 */
class ModifyMachinesLoginTypeRequest extends AbstractModel
{
    /**
     * @var integer <p>登录方式：0-原始方式，1-扫码免密登录</p>
     */
    public $LoginType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>instance_id列表(instance_ids和quuids至少要填一个)</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>主机quuid列表(instance_ids和quuids至少要填一个)</p>
     */
    public $Quuids;

    /**
     * @var array <p>排除的quuid集合</p>
     */
    public $ExcludeQuuid;

    /**
     * @var integer <p>开启范围 0 自选主机 1 全部主机</p>
     */
    public $Scope;

    /**
     * @var integer <p>操作来源 :<br>0   主机页面<br>1   客户端设置页面<br>2   安全中心页面<br>3   LightHouse购买页<br>4   LightHouse控制台</p>
     */
    public $From;

    /**
     * @var integer <p>请求版本 0   原始版本 1   策略式请求</p>
     */
    public $RequestVersion;

    /**
     * @param integer $LoginType <p>登录方式：0-原始方式，1-扫码免密登录</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $InstanceIds <p>instance_id列表(instance_ids和quuids至少要填一个)</p>
     * @param array $Quuids <p>主机quuid列表(instance_ids和quuids至少要填一个)</p>
     * @param array $ExcludeQuuid <p>排除的quuid集合</p>
     * @param integer $Scope <p>开启范围 0 自选主机 1 全部主机</p>
     * @param integer $From <p>操作来源 :<br>0   主机页面<br>1   客户端设置页面<br>2   安全中心页面<br>3   LightHouse购买页<br>4   LightHouse控制台</p>
     * @param integer $RequestVersion <p>请求版本 0   原始版本 1   策略式请求</p>
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
        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludeQuuid",$param) and $param["ExcludeQuuid"] !== null) {
            $this->ExcludeQuuid = $param["ExcludeQuuid"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("RequestVersion",$param) and $param["RequestVersion"] !== null) {
            $this->RequestVersion = $param["RequestVersion"];
        }
    }
}
