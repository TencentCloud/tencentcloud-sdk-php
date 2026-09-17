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
 * AdjustCdbProxy请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
 * @method string getProxyGroupId() 获取<p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
 * @method array getProxyNodeCustom() 获取<p>节点规格配置<br>备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。<br>示例中参数说明：<br>NodeCount：节点个数<br>Region：节点地域<br>Zone：节点可用区<br>Cpu：单个代理节点核数（单位：核）<br>Mem：单个代理节点内存数（单位：MB）</p>
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) 设置<p>节点规格配置<br>备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。<br>示例中参数说明：<br>NodeCount：节点个数<br>Region：节点地域<br>Zone：节点可用区<br>Cpu：单个代理节点核数（单位：核）<br>Mem：单个代理节点内存数（单位：MB）</p>
 * @method string getReloadBalance() 获取<p>重新负载均衡：auto(自动),manual(手动)</p>
 * @method void setReloadBalance(string $ReloadBalance) 设置<p>重新负载均衡：auto(自动),manual(手动)</p>
 * @method string getUpgradeTime() 获取<p>升级切换时间。</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 维护时间内</li><li>rollUpgrade： 滚动升级</li></ul>
 * @method void setUpgradeTime(string $UpgradeTime) 设置<p>升级切换时间。</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 维护时间内</li><li>rollUpgrade： 滚动升级</li></ul>
 * @method integer getRollUpgradeWaitingTime() 获取<p>滚动升级或平滑变配等待时间</p><p>取值范围：[0, 3600]</p><p>单位：秒</p>
 * @method void setRollUpgradeWaitingTime(integer $RollUpgradeWaitingTime) 设置<p>滚动升级或平滑变配等待时间</p><p>取值范围：[0, 3600]</p><p>单位：秒</p>
 */
class AdjustCdbProxyRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     */
    public $ProxyGroupId;

    /**
     * @var array <p>节点规格配置<br>备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。<br>示例中参数说明：<br>NodeCount：节点个数<br>Region：节点地域<br>Zone：节点可用区<br>Cpu：单个代理节点核数（单位：核）<br>Mem：单个代理节点内存数（单位：MB）</p>
     */
    public $ProxyNodeCustom;

    /**
     * @var string <p>重新负载均衡：auto(自动),manual(手动)</p>
     */
    public $ReloadBalance;

    /**
     * @var string <p>升级切换时间。</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 维护时间内</li><li>rollUpgrade： 滚动升级</li></ul>
     */
    public $UpgradeTime;

    /**
     * @var integer <p>滚动升级或平滑变配等待时间</p><p>取值范围：[0, 3600]</p><p>单位：秒</p>
     */
    public $RollUpgradeWaitingTime;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/product/236/15872">DescribeDBInstances</a> 接口获取。</p>
     * @param string $ProxyGroupId <p>代理组 ID。可通过 <a href="https://cloud.tencent.com/document/api/236/90585">DescribeCdbProxyInfo</a> 接口获取。</p>
     * @param array $ProxyNodeCustom <p>节点规格配置<br>备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。<br>示例中参数说明：<br>NodeCount：节点个数<br>Region：节点地域<br>Zone：节点可用区<br>Cpu：单个代理节点核数（单位：核）<br>Mem：单个代理节点内存数（单位：MB）</p>
     * @param string $ReloadBalance <p>重新负载均衡：auto(自动),manual(手动)</p>
     * @param string $UpgradeTime <p>升级切换时间。</p><p>枚举值：</p><ul><li>nowTime： 升级完成时</li><li>timeWindow： 维护时间内</li><li>rollUpgrade： 滚动升级</li></ul>
     * @param integer $RollUpgradeWaitingTime <p>滚动升级或平滑变配等待时间</p><p>取值范围：[0, 3600]</p><p>单位：秒</p>
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

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("UpgradeTime",$param) and $param["UpgradeTime"] !== null) {
            $this->UpgradeTime = $param["UpgradeTime"];
        }

        if (array_key_exists("RollUpgradeWaitingTime",$param) and $param["RollUpgradeWaitingTime"] !== null) {
            $this->RollUpgradeWaitingTime = $param["RollUpgradeWaitingTime"];
        }
    }
}
