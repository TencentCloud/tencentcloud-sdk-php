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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeCDBProxyVersion请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method string getProxyGroupId() 获取<p>数据库代理 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>数据库代理 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method string getSrcProxyVersion() 获取<p>数据库代理当前版本</p>
 * @method void setSrcProxyVersion(string $SrcProxyVersion) 设置<p>数据库代理当前版本</p>
 * @method string getDstProxyVersion() 获取<p>数据库代理升级版本</p>
 * @method void setDstProxyVersion(string $DstProxyVersion) 设置<p>数据库代理升级版本</p>
 * @method string getUpgradeTime() 获取<p>升级切换时间</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 实例维护时间</li><li>rollUpgrade： 滚动升级</li></ul>
 * @method void setUpgradeTime(string $UpgradeTime) 设置<p>升级切换时间</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 实例维护时间</li><li>rollUpgrade： 滚动升级</li></ul>
 * @method integer getRollUpgradeWaitingTime() 获取<p>滚动升级等待时间</p><p>取值范围：[10, 3600]</p><p>单位：秒</p>
 * @method void setRollUpgradeWaitingTime(integer $RollUpgradeWaitingTime) 设置<p>滚动升级等待时间</p><p>取值范围：[10, 3600]</p><p>单位：秒</p>
 */
class UpgradeCDBProxyVersionRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据库代理 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>数据库代理当前版本</p>
     */
    public $SrcProxyVersion;

    /**
     * @var string <p>数据库代理升级版本</p>
     */
    public $DstProxyVersion;

    /**
     * @var string <p>升级切换时间</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 实例维护时间</li><li>rollUpgrade： 滚动升级</li></ul>
     */
    public $UpgradeTime;

    /**
     * @var integer <p>滚动升级等待时间</p><p>取值范围：[10, 3600]</p><p>单位：秒</p>
     */
    public $RollUpgradeWaitingTime;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     * @param string $ProxyGroupId <p>数据库代理 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     * @param string $SrcProxyVersion <p>数据库代理当前版本</p>
     * @param string $DstProxyVersion <p>数据库代理升级版本</p>
     * @param string $UpgradeTime <p>升级切换时间</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 实例维护时间</li><li>rollUpgrade： 滚动升级</li></ul>
     * @param integer $RollUpgradeWaitingTime <p>滚动升级等待时间</p><p>取值范围：[10, 3600]</p><p>单位：秒</p>
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

        if (array_key_exists("RollUpgradeWaitingTime",$param) and $param["RollUpgradeWaitingTime"] !== null) {
            $this->RollUpgradeWaitingTime = $param["RollUpgradeWaitingTime"];
        }
    }
}
