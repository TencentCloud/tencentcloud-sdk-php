<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理组详情
 *
 * @method string getProxyGroupId() 获取代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组ID
 * @method string getProxyVersion() 获取代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyVersion(string $ProxyVersion) 设置代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSupportUpgradeProxyVersion() 获取代理支持升级版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportUpgradeProxyVersion(string $SupportUpgradeProxyVersion) 设置代理支持升级版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取代理状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置代理状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取代理任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置代理任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyNode() 获取代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNode(array $ProxyNode) 设置代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyAddress() 获取代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyAddress(array $ProxyAddress) 设置代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConnectionPoolLimit() 获取连接池阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) 设置连接池阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportCreateProxyAddress() 获取支持创建地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportCreateProxyAddress(boolean $SupportCreateProxyAddress) 设置支持创建地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSupportUpgradeProxyMysqlVersion() 获取支持升级代理版本所需的cdb版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportUpgradeProxyMysqlVersion(string $SupportUpgradeProxyMysqlVersion) 设置支持升级代理版本所需的cdb版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var string 代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var string 代理版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyVersion;

    /**
     * @var string 代理支持升级版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportUpgradeProxyVersion;

    /**
     * @var string 代理状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 代理任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var array 代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNode;

    /**
     * @var array 代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyAddress;

    /**
     * @var integer 连接池阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionPoolLimit;

    /**
     * @var boolean 支持创建地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportCreateProxyAddress;

    /**
     * @var string 支持升级代理版本所需的cdb版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportUpgradeProxyMysqlVersion;

    /**
     * @param string $ProxyGroupId 代理组ID
     * @param string $ProxyVersion 代理版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SupportUpgradeProxyVersion 代理支持升级版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 代理状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 代理任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyNode 代理组节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyAddress 代理组地址信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConnectionPoolLimit 连接池阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportCreateProxyAddress 支持创建地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SupportUpgradeProxyMysqlVersion 支持升级代理版本所需的cdb版本
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("SupportUpgradeProxyVersion",$param) and $param["SupportUpgradeProxyVersion"] !== null) {
            $this->SupportUpgradeProxyVersion = $param["SupportUpgradeProxyVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ProxyNode",$param) and $param["ProxyNode"] !== null) {
            $this->ProxyNode = [];
            foreach ($param["ProxyNode"] as $key => $value){
                $obj = new ProxyNode();
                $obj->deserialize($value);
                array_push($this->ProxyNode, $obj);
            }
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = [];
            foreach ($param["ProxyAddress"] as $key => $value){
                $obj = new ProxyAddress();
                $obj->deserialize($value);
                array_push($this->ProxyAddress, $obj);
            }
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }

        if (array_key_exists("SupportCreateProxyAddress",$param) and $param["SupportCreateProxyAddress"] !== null) {
            $this->SupportCreateProxyAddress = $param["SupportCreateProxyAddress"];
        }

        if (array_key_exists("SupportUpgradeProxyMysqlVersion",$param) and $param["SupportUpgradeProxyMysqlVersion"] !== null) {
            $this->SupportUpgradeProxyMysqlVersion = $param["SupportUpgradeProxyMysqlVersion"];
        }
    }
}
