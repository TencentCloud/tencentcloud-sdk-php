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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙实例运行状态
 *
 * @method string getCfwInsId() 获取<p>防火墙实例id</p>
 * @method void setCfwInsId(string $CfwInsId) 设置<p>防火墙实例id</p>
 * @method string getFwType() 获取<p>防火墙类型，nat：nat防火墙；ew：vpc间防火墙</p>
 * @method void setFwType(string $FwType) 设置<p>防火墙类型，nat：nat防火墙；ew：vpc间防火墙</p>
 * @method string getRegion() 获取<p>实例所属地域</p>
 * @method void setRegion(string $Region) 设置<p>实例所属地域</p>
 * @method string getStatus() 获取<p>实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中；BypassTcDrop：丢包触发bypass中</p><p>枚举值：</p><ul><li>Running： 正常运行</li><li>BypassAutoFix： 自动bypass已修复</li><li>Updating： 实例升级中</li><li>Expand： 实例扩容中</li><li>BypassManual： 手动触发bypass中</li><li>BypassAuto： 自动触发bypass中</li><li>BypassTcDrop： 丢包触发bypass中</li></ul>
 * @method void setStatus(string $Status) 设置<p>实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中；BypassTcDrop：丢包触发bypass中</p><p>枚举值：</p><ul><li>Running： 正常运行</li><li>BypassAutoFix： 自动bypass已修复</li><li>Updating： 实例升级中</li><li>Expand： 实例扩容中</li><li>BypassManual： 手动触发bypass中</li><li>BypassAuto： 自动触发bypass中</li><li>BypassTcDrop： 丢包触发bypass中</li></ul>
 * @method string getEventTime() 获取<p>事件时间</p>
 * @method void setEventTime(string $EventTime) 设置<p>事件时间</p>
 * @method string getRecoverTime() 获取<p>恢复时间</p>
 * @method void setRecoverTime(string $RecoverTime) 设置<p>恢复时间</p>
 * @method string getCfwInsName() 获取<p>实例名称</p>
 * @method void setCfwInsName(string $CfwInsName) 设置<p>实例名称</p>
 * @method string getTrafficMode() 获取<p>Normal: 正常模式<br>OnlyRoute: 透明模式</p>
 * @method void setTrafficMode(string $TrafficMode) 设置<p>Normal: 正常模式<br>OnlyRoute: 透明模式</p>
 */
class CfwInsStatus extends AbstractModel
{
    /**
     * @var string <p>防火墙实例id</p>
     */
    public $CfwInsId;

    /**
     * @var string <p>防火墙类型，nat：nat防火墙；ew：vpc间防火墙</p>
     */
    public $FwType;

    /**
     * @var string <p>实例所属地域</p>
     */
    public $Region;

    /**
     * @var string <p>实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中；BypassTcDrop：丢包触发bypass中</p><p>枚举值：</p><ul><li>Running： 正常运行</li><li>BypassAutoFix： 自动bypass已修复</li><li>Updating： 实例升级中</li><li>Expand： 实例扩容中</li><li>BypassManual： 手动触发bypass中</li><li>BypassAuto： 自动触发bypass中</li><li>BypassTcDrop： 丢包触发bypass中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>事件时间</p>
     */
    public $EventTime;

    /**
     * @var string <p>恢复时间</p>
     */
    public $RecoverTime;

    /**
     * @var string <p>实例名称</p>
     */
    public $CfwInsName;

    /**
     * @var string <p>Normal: 正常模式<br>OnlyRoute: 透明模式</p>
     */
    public $TrafficMode;

    /**
     * @param string $CfwInsId <p>防火墙实例id</p>
     * @param string $FwType <p>防火墙类型，nat：nat防火墙；ew：vpc间防火墙</p>
     * @param string $Region <p>实例所属地域</p>
     * @param string $Status <p>实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中；BypassTcDrop：丢包触发bypass中</p><p>枚举值：</p><ul><li>Running： 正常运行</li><li>BypassAutoFix： 自动bypass已修复</li><li>Updating： 实例升级中</li><li>Expand： 实例扩容中</li><li>BypassManual： 手动触发bypass中</li><li>BypassAuto： 自动触发bypass中</li><li>BypassTcDrop： 丢包触发bypass中</li></ul>
     * @param string $EventTime <p>事件时间</p>
     * @param string $RecoverTime <p>恢复时间</p>
     * @param string $CfwInsName <p>实例名称</p>
     * @param string $TrafficMode <p>Normal: 正常模式<br>OnlyRoute: 透明模式</p>
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
        if (array_key_exists("CfwInsId",$param) and $param["CfwInsId"] !== null) {
            $this->CfwInsId = $param["CfwInsId"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("RecoverTime",$param) and $param["RecoverTime"] !== null) {
            $this->RecoverTime = $param["RecoverTime"];
        }

        if (array_key_exists("CfwInsName",$param) and $param["CfwInsName"] !== null) {
            $this->CfwInsName = $param["CfwInsName"];
        }

        if (array_key_exists("TrafficMode",$param) and $param["TrafficMode"] !== null) {
            $this->TrafficMode = $param["TrafficMode"];
        }
    }
}
