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
 * UpgradeProxyVersion请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getSrcProxyVersion() 获取数据库代理当前版本
 * @method void setSrcProxyVersion(string $SrcProxyVersion) 设置数据库代理当前版本
 * @method string getDstProxyVersion() 获取数据库代理升级版本
 * @method void setDstProxyVersion(string $DstProxyVersion) 设置数据库代理升级版本
 * @method string getProxyGroupId() 获取数据库代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理组ID
 * @method string getIsInMaintainPeriod() 获取升级时间 ：no（升级完成时）yes（实例维护时间）
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) 设置升级时间 ：no（升级完成时）yes（实例维护时间）
 */
class UpgradeProxyVersionRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 数据库代理当前版本
     */
    public $SrcProxyVersion;

    /**
     * @var string 数据库代理升级版本
     */
    public $DstProxyVersion;

    /**
     * @var string 数据库代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var string 升级时间 ：no（升级完成时）yes（实例维护时间）
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId 集群ID
     * @param string $SrcProxyVersion 数据库代理当前版本
     * @param string $DstProxyVersion 数据库代理升级版本
     * @param string $ProxyGroupId 数据库代理组ID
     * @param string $IsInMaintainPeriod 升级时间 ：no（升级完成时）yes（实例维护时间）
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SrcProxyVersion",$param) and $param["SrcProxyVersion"] !== null) {
            $this->SrcProxyVersion = $param["SrcProxyVersion"];
        }

        if (array_key_exists("DstProxyVersion",$param) and $param["DstProxyVersion"] !== null) {
            $this->DstProxyVersion = $param["DstProxyVersion"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
