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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详情信息
 *
 * @method integer getAppID() 获取<p>用户APPID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置<p>用户APPID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterID() 获取<p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterID(string $ClusterID) 设置<p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountID() 获取<p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountID(string $AccountID) 设置<p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>自定义实例名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>自定义实例名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworks() 获取<p>网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworks(array $Networks) 设置<p>网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>实例状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 16： 变配中</li><li> 17： 隔离中</li><li> 18： 已隔离</li><li> 19： 恢复中</li><li> 20： 已关机</li><li> 21： 销毁中</li><li> 22： 已销毁</li><li> 30： 扩展节点添加中</li><li> 31： 扩展节点变配中</li><li> 32： 扩展节点删除中</li><li> 33： 扩展节点禁用中</li><li> 34： 扩展节点启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 16： 变配中</li><li> 17： 隔离中</li><li> 18： 已隔离</li><li> 19： 恢复中</li><li> 20： 已关机</li><li> 21： 销毁中</li><li> 22： 已销毁</li><li> 30： 扩展节点添加中</li><li> 31： 扩展节点变配中</li><li> 32： 扩展节点删除中</li><li> 33： 扩展节点禁用中</li><li> 34： 扩展节点启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurity() 获取<p>安全组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurity(array $Security) 设置<p>安全组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponents() 获取<p>组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponents(array $Components) 设置<p>组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredAt() 获取<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredAt(string $ExpiredAt) 设置<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取<p>续费标识</p>枚举值：<ul><li> 0： 默认</li><li> 1： 自动续费</li><li> 2： 不自动续费</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标识</p>枚举值：<ul><li> 0： 默认</li><li> 1： 自动续费</li><li> 2： 不自动续费</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShutdownAt() 获取<p>关机时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShutdownAt(string $ShutdownAt) 设置<p>关机时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedAt() 获取<p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedAt(string $IsolatedAt) 设置<p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>实例类型</p>枚举值：<ul><li> 0： 共享型</li><li> 1： 独享型</li><li> 2： 标准型</li></ul>
 * @method void setType(integer $Type) 设置<p>实例类型</p>枚举值：<ul><li> 0： 共享型</li><li> 1： 独享型</li><li> 2： 标准型</li></ul>
 */
class ClusterDetail extends AbstractModel
{
    /**
     * @var integer <p>用户APPID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string <p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterID;

    /**
     * @var string <p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountID;

    /**
     * @var string <p>自定义实例名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array <p>网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Networks;

    /**
     * @var integer <p>实例状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 16： 变配中</li><li> 17： 隔离中</li><li> 18： 已隔离</li><li> 19： 恢复中</li><li> 20： 已关机</li><li> 21： 销毁中</li><li> 22： 已销毁</li><li> 30： 扩展节点添加中</li><li> 31： 扩展节点变配中</li><li> 32： 扩展节点删除中</li><li> 33： 扩展节点禁用中</li><li> 34： 扩展节点启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string <p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array <p>安全组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Security;

    /**
     * @var array <p>组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Components;

    /**
     * @var string <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredAt;

    /**
     * @var integer <p>续费标识</p>枚举值：<ul><li> 0： 默认</li><li> 1： 自动续费</li><li> 2： 不自动续费</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string <p>关机时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShutdownAt;

    /**
     * @var string <p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedAt;

    /**
     * @var integer <p>实例类型</p>枚举值：<ul><li> 0： 共享型</li><li> 1： 独享型</li><li> 2： 标准型</li></ul>
     */
    public $Type;

    /**
     * @param integer $AppID <p>用户APPID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterID <p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountID <p>账号id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>自定义实例名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Networks <p>网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>实例状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 16： 变配中</li><li> 17： 隔离中</li><li> 18： 已隔离</li><li> 19： 恢复中</li><li> 20： 已关机</li><li> 21： 销毁中</li><li> 22： 已销毁</li><li> 30： 扩展节点添加中</li><li> 31： 扩展节点变配中</li><li> 32： 扩展节点删除中</li><li> 33： 扩展节点禁用中</li><li> 34： 扩展节点启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt <p>最后修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Security <p>安全组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Components <p>组件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredAt <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag <p>续费标识</p>枚举值：<ul><li> 0： 默认</li><li> 1： 自动续费</li><li> 2： 不自动续费</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShutdownAt <p>关机时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedAt <p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>实例类型</p>枚举值：<ul><li> 0： 共享型</li><li> 1： 独享型</li><li> 2： 标准型</li></ul>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("AccountID",$param) and $param["AccountID"] !== null) {
            $this->AccountID = $param["AccountID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Networks",$param) and $param["Networks"] !== null) {
            $this->Networks = [];
            foreach ($param["Networks"] as $key => $value){
                $obj = new Network();
                $obj->deserialize($value);
                array_push($this->Networks, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Security",$param) and $param["Security"] !== null) {
            $this->Security = $param["Security"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ShutdownAt",$param) and $param["ShutdownAt"] !== null) {
            $this->ShutdownAt = $param["ShutdownAt"];
        }

        if (array_key_exists("IsolatedAt",$param) and $param["IsolatedAt"] !== null) {
            $this->IsolatedAt = $param["IsolatedAt"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
