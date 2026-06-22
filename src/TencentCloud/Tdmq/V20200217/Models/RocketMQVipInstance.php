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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ专享实例信息
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceVersion() 获取<p>实例版本</p>
 * @method void setInstanceVersion(string $InstanceVersion) 设置<p>实例版本</p>
 * @method integer getStatus() 获取<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
 * @method integer getNodeCount() 获取<p>节点数量</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点数量</p>
 * @method string getConfigDisplay() 获取<p>实例配置规格名称</p>
 * @method void setConfigDisplay(string $ConfigDisplay) 设置<p>实例配置规格名称</p>
 * @method integer getMaxTps() 获取<p>峰值TPS</p>
 * @method void setMaxTps(integer $MaxTps) 设置<p>峰值TPS</p>
 * @method integer getMaxBandWidth() 获取<p>峰值带宽，Mbps为单位</p>
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置<p>峰值带宽，Mbps为单位</p>
 * @method integer getMaxStorage() 获取<p>存储容量，GB为单位</p>
 * @method void setMaxStorage(integer $MaxStorage) 设置<p>存储容量，GB为单位</p>
 * @method integer getExpireTime() 获取<p>实例到期时间，毫秒为单位</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>实例到期时间，毫秒为单位</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method integer getPayMode() 获取<p>0-后付费，1-预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>0-后付费，1-预付费</p>
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method string getSpecName() 获取<p>实例规格</p><p>枚举值：</p><ul><li>rocket-vip-basic-0： 通用集群</li><li>rocket-vip-basic-1： 专享集群-基础型</li><li>rocket-vip-basic-2： 专享集群-标准型</li><li>rocket-vip-basic-3： 专享集群-高阶I型</li><li>rocket-vip-basic-4： 专享集群-高阶II型</li></ul>
 * @method void setSpecName(string $SpecName) 设置<p>实例规格</p><p>枚举值：</p><ul><li>rocket-vip-basic-0： 通用集群</li><li>rocket-vip-basic-1： 专享集群-基础型</li><li>rocket-vip-basic-2： 专享集群-标准型</li><li>rocket-vip-basic-3： 专享集群-高阶I型</li><li>rocket-vip-basic-4： 专享集群-高阶II型</li></ul>
 * @method integer getMaxRetention() 获取<p>最大可设置消息保留时间，小时为单位</p>
 * @method void setMaxRetention(integer $MaxRetention) 设置<p>最大可设置消息保留时间，小时为单位</p>
 * @method integer getMinRetention() 获取<p>最小可设置消息保留时间，小时为单位</p>
 * @method void setMinRetention(integer $MinRetention) 设置<p>最小可设置消息保留时间，小时为单位</p>
 * @method integer getRetention() 获取<p>实例消息保留时间，小时为单位</p>
 * @method void setRetention(integer $Retention) 设置<p>实例消息保留时间，小时为单位</p>
 * @method boolean getAclEnabled() 获取<p>是否开启ACL鉴权</p>
 * @method void setAclEnabled(boolean $AclEnabled) 设置<p>是否开启ACL鉴权</p>
 * @method integer getDestroyTime() 获取<p>销毁时间</p>
 * @method void setDestroyTime(integer $DestroyTime) 设置<p>销毁时间</p>
 */
class RocketMQVipInstance extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例版本</p>
     */
    public $InstanceVersion;

    /**
     * @var integer <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
     */
    public $Status;

    /**
     * @var integer <p>节点数量</p>
     */
    public $NodeCount;

    /**
     * @var string <p>实例配置规格名称</p>
     */
    public $ConfigDisplay;

    /**
     * @var integer <p>峰值TPS</p>
     */
    public $MaxTps;

    /**
     * @var integer <p>峰值带宽，Mbps为单位</p>
     */
    public $MaxBandWidth;

    /**
     * @var integer <p>存储容量，GB为单位</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>实例到期时间，毫秒为单位</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>0-后付费，1-预付费</p>
     */
    public $PayMode;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var string <p>实例规格</p><p>枚举值：</p><ul><li>rocket-vip-basic-0： 通用集群</li><li>rocket-vip-basic-1： 专享集群-基础型</li><li>rocket-vip-basic-2： 专享集群-标准型</li><li>rocket-vip-basic-3： 专享集群-高阶I型</li><li>rocket-vip-basic-4： 专享集群-高阶II型</li></ul>
     */
    public $SpecName;

    /**
     * @var integer <p>最大可设置消息保留时间，小时为单位</p>
     */
    public $MaxRetention;

    /**
     * @var integer <p>最小可设置消息保留时间，小时为单位</p>
     */
    public $MinRetention;

    /**
     * @var integer <p>实例消息保留时间，小时为单位</p>
     */
    public $Retention;

    /**
     * @var boolean <p>是否开启ACL鉴权</p>
     */
    public $AclEnabled;

    /**
     * @var integer <p>销毁时间</p>
     */
    public $DestroyTime;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceVersion <p>实例版本</p>
     * @param integer $Status <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
     * @param integer $NodeCount <p>节点数量</p>
     * @param string $ConfigDisplay <p>实例配置规格名称</p>
     * @param integer $MaxTps <p>峰值TPS</p>
     * @param integer $MaxBandWidth <p>峰值带宽，Mbps为单位</p>
     * @param integer $MaxStorage <p>存储容量，GB为单位</p>
     * @param integer $ExpireTime <p>实例到期时间，毫秒为单位</p>
     * @param integer $AutoRenewFlag <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     * @param integer $PayMode <p>0-后付费，1-预付费</p>
     * @param string $Remark <p>备注信息</p>
     * @param string $SpecName <p>实例规格</p><p>枚举值：</p><ul><li>rocket-vip-basic-0： 通用集群</li><li>rocket-vip-basic-1： 专享集群-基础型</li><li>rocket-vip-basic-2： 专享集群-标准型</li><li>rocket-vip-basic-3： 专享集群-高阶I型</li><li>rocket-vip-basic-4： 专享集群-高阶II型</li></ul>
     * @param integer $MaxRetention <p>最大可设置消息保留时间，小时为单位</p>
     * @param integer $MinRetention <p>最小可设置消息保留时间，小时为单位</p>
     * @param integer $Retention <p>实例消息保留时间，小时为单位</p>
     * @param boolean $AclEnabled <p>是否开启ACL鉴权</p>
     * @param integer $DestroyTime <p>销毁时间</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("ConfigDisplay",$param) and $param["ConfigDisplay"] !== null) {
            $this->ConfigDisplay = $param["ConfigDisplay"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("MaxRetention",$param) and $param["MaxRetention"] !== null) {
            $this->MaxRetention = $param["MaxRetention"];
        }

        if (array_key_exists("MinRetention",$param) and $param["MinRetention"] !== null) {
            $this->MinRetention = $param["MinRetention"];
        }

        if (array_key_exists("Retention",$param) and $param["Retention"] !== null) {
            $this->Retention = $param["Retention"];
        }

        if (array_key_exists("AclEnabled",$param) and $param["AclEnabled"] !== null) {
            $this->AclEnabled = $param["AclEnabled"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }
    }
}
