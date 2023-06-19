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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * proxy组
 *
 * @method string getProxyGroupId() 获取数据库代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理组ID
 * @method integer getProxyNodeCount() 获取数据库代理组节点个数
 * @method void setProxyNodeCount(integer $ProxyNodeCount) 设置数据库代理组节点个数
 * @method string getStatus() 获取数据库代理组状态
 * @method void setStatus(string $Status) 设置数据库代理组状态
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getCurrentProxyVersion() 获取当前代理版本
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) 设置当前代理版本
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenRw() 获取读写节点开通数据库代理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenRw(string $OpenRw) 设置读写节点开通数据库代理
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyGroup extends AbstractModel
{
    /**
     * @var string 数据库代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var integer 数据库代理组节点个数
     */
    public $ProxyNodeCount;

    /**
     * @var string 数据库代理组状态
     */
    public $Status;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 当前代理版本
     */
    public $CurrentProxyVersion;

    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var integer 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 读写节点开通数据库代理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenRw;

    /**
     * @param string $ProxyGroupId 数据库代理组ID
     * @param integer $ProxyNodeCount 数据库代理组节点个数
     * @param string $Status 数据库代理组状态
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $CurrentProxyVersion 当前代理版本
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenRw 读写节点开通数据库代理
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

        if (array_key_exists("ProxyNodeCount",$param) and $param["ProxyNodeCount"] !== null) {
            $this->ProxyNodeCount = $param["ProxyNodeCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OpenRw",$param) and $param["OpenRw"] !== null) {
            $this->OpenRw = $param["OpenRw"];
        }
    }
}
