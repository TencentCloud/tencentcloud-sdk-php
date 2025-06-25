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
 * UpgradeCDBProxyVersion请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getProxyGroupId() 获取数据库代理 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method string getSrcProxyVersion() 获取数据库代理当前版本
 * @method void setSrcProxyVersion(string $SrcProxyVersion) 设置数据库代理当前版本
 * @method string getDstProxyVersion() 获取数据库代理升级版本
 * @method void setDstProxyVersion(string $DstProxyVersion) 设置数据库代理升级版本
 * @method string getUpgradeTime() 获取升级时间 ：nowTime（升级完成时）timeWindow（实例维护时间）
 * @method void setUpgradeTime(string $UpgradeTime) 设置升级时间 ：nowTime（升级完成时）timeWindow（实例维护时间）
 */
class UpgradeCDBProxyVersionRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 数据库代理 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyGroupId;

    /**
     * @var string 数据库代理当前版本
     */
    public $SrcProxyVersion;

    /**
     * @var string 数据库代理升级版本
     */
    public $DstProxyVersion;

    /**
     * @var string 升级时间 ：nowTime（升级完成时）timeWindow（实例维护时间）
     */
    public $UpgradeTime;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $ProxyGroupId 数据库代理 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param string $SrcProxyVersion 数据库代理当前版本
     * @param string $DstProxyVersion 数据库代理升级版本
     * @param string $UpgradeTime 升级时间 ：nowTime（升级完成时）timeWindow（实例维护时间）
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

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("SrcProxyVersion",$param) and $param["SrcProxyVersion"] !== null) {
            $this->SrcProxyVersion = $param["SrcProxyVersion"];
        }

        if (array_key_exists("DstProxyVersion",$param) and $param["DstProxyVersion"] !== null) {
            $this->DstProxyVersion = $param["DstProxyVersion"];
        }

        if (array_key_exists("UpgradeTime",$param) and $param["UpgradeTime"] !== null) {
            $this->UpgradeTime = $param["UpgradeTime"];
        }
    }
}
