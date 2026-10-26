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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserPrivilegesV3请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群id</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method UpdateUserPrivileges getUserPrivileges() 获取<p>用户权限</p>
 * @method void setUserPrivileges(UpdateUserPrivileges $UserPrivileges) 设置<p>用户权限</p>
 * @method string getWhiteHost() 获取<p>用户链接来自的 IP</p>
 * @method void setWhiteHost(string $WhiteHost) 设置<p>用户链接来自的 IP</p>
 * @method integer getUpdateType() 获取<p>更新类型，默认0，1为更新绑定计算组，2为更新默认计算组，4 为 GrantPrivileges, RevokePrivileges 接口专用批量授权</p><p>枚举值：</p><ul><li>0： 默认</li><li>1： 更新绑定计算组</li><li>2： 更新默认计算组</li><li>4： GrantPrivileges, RevokePrivileges 接口专用批量授权</li></ul>
 * @method void setUpdateType(integer $UpdateType) 设置<p>更新类型，默认0，1为更新绑定计算组，2为更新默认计算组，4 为 GrantPrivileges, RevokePrivileges 接口专用批量授权</p><p>枚举值：</p><ul><li>0： 默认</li><li>1： 更新绑定计算组</li><li>2： 更新默认计算组</li><li>4： GrantPrivileges, RevokePrivileges 接口专用批量授权</li></ul>
 * @method array getUpdateComputeGroups() 获取<p>需绑定计算组列表</p>
 * @method void setUpdateComputeGroups(array $UpdateComputeGroups) 设置<p>需绑定计算组列表</p>
 * @method string getDefaultComputeGroup() 获取<p>默认计算组</p>
 * @method void setDefaultComputeGroup(string $DefaultComputeGroup) 设置<p>默认计算组</p>
 * @method integer getComputeGroupType() 获取<p>0: 灵活场景 1: 固定场景</p>
 * @method void setComputeGroupType(integer $ComputeGroupType) 设置<p>0: 灵活场景 1: 固定场景</p>
 * @method UpdateUserPrivileges getGrantPrivileges() 获取<p>本次新增授权的库表，仅 UpdateType=4 时生效</p>
 * @method void setGrantPrivileges(UpdateUserPrivileges $GrantPrivileges) 设置<p>本次新增授权的库表，仅 UpdateType=4 时生效</p>
 * @method UpdateUserPrivileges getRevokePrivileges() 获取<p>本次取消授权的库表，仅 UpdateType=4 时生效</p>
 * @method void setRevokePrivileges(UpdateUserPrivileges $RevokePrivileges) 设置<p>本次取消授权的库表，仅 UpdateType=4 时生效</p>
 */
class ModifyUserPrivilegesV3Request extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var UpdateUserPrivileges <p>用户权限</p>
     */
    public $UserPrivileges;

    /**
     * @var string <p>用户链接来自的 IP</p>
     */
    public $WhiteHost;

    /**
     * @var integer <p>更新类型，默认0，1为更新绑定计算组，2为更新默认计算组，4 为 GrantPrivileges, RevokePrivileges 接口专用批量授权</p><p>枚举值：</p><ul><li>0： 默认</li><li>1： 更新绑定计算组</li><li>2： 更新默认计算组</li><li>4： GrantPrivileges, RevokePrivileges 接口专用批量授权</li></ul>
     */
    public $UpdateType;

    /**
     * @var array <p>需绑定计算组列表</p>
     */
    public $UpdateComputeGroups;

    /**
     * @var string <p>默认计算组</p>
     */
    public $DefaultComputeGroup;

    /**
     * @var integer <p>0: 灵活场景 1: 固定场景</p>
     */
    public $ComputeGroupType;

    /**
     * @var UpdateUserPrivileges <p>本次新增授权的库表，仅 UpdateType=4 时生效</p>
     */
    public $GrantPrivileges;

    /**
     * @var UpdateUserPrivileges <p>本次取消授权的库表，仅 UpdateType=4 时生效</p>
     */
    public $RevokePrivileges;

    /**
     * @param string $InstanceId <p>集群id</p>
     * @param string $UserName <p>用户名</p>
     * @param UpdateUserPrivileges $UserPrivileges <p>用户权限</p>
     * @param string $WhiteHost <p>用户链接来自的 IP</p>
     * @param integer $UpdateType <p>更新类型，默认0，1为更新绑定计算组，2为更新默认计算组，4 为 GrantPrivileges, RevokePrivileges 接口专用批量授权</p><p>枚举值：</p><ul><li>0： 默认</li><li>1： 更新绑定计算组</li><li>2： 更新默认计算组</li><li>4： GrantPrivileges, RevokePrivileges 接口专用批量授权</li></ul>
     * @param array $UpdateComputeGroups <p>需绑定计算组列表</p>
     * @param string $DefaultComputeGroup <p>默认计算组</p>
     * @param integer $ComputeGroupType <p>0: 灵活场景 1: 固定场景</p>
     * @param UpdateUserPrivileges $GrantPrivileges <p>本次新增授权的库表，仅 UpdateType=4 时生效</p>
     * @param UpdateUserPrivileges $RevokePrivileges <p>本次取消授权的库表，仅 UpdateType=4 时生效</p>
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserPrivileges",$param) and $param["UserPrivileges"] !== null) {
            $this->UserPrivileges = new UpdateUserPrivileges();
            $this->UserPrivileges->deserialize($param["UserPrivileges"]);
        }

        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("UpdateComputeGroups",$param) and $param["UpdateComputeGroups"] !== null) {
            $this->UpdateComputeGroups = $param["UpdateComputeGroups"];
        }

        if (array_key_exists("DefaultComputeGroup",$param) and $param["DefaultComputeGroup"] !== null) {
            $this->DefaultComputeGroup = $param["DefaultComputeGroup"];
        }

        if (array_key_exists("ComputeGroupType",$param) and $param["ComputeGroupType"] !== null) {
            $this->ComputeGroupType = $param["ComputeGroupType"];
        }

        if (array_key_exists("GrantPrivileges",$param) and $param["GrantPrivileges"] !== null) {
            $this->GrantPrivileges = new UpdateUserPrivileges();
            $this->GrantPrivileges->deserialize($param["GrantPrivileges"]);
        }

        if (array_key_exists("RevokePrivileges",$param) and $param["RevokePrivileges"] !== null) {
            $this->RevokePrivileges = new UpdateUserPrivileges();
            $this->RevokePrivileges->deserialize($param["RevokePrivileges"]);
        }
    }
}
