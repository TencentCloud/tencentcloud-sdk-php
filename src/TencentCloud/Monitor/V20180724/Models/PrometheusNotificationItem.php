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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知渠道配置
 *
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 * @method string getType() 获取<p>通道类型，默认为amp，支持以下<br>amp<br>webhook<br>alertmanager</p>
 * @method void setType(string $Type) 设置<p>通道类型，默认为amp，支持以下<br>amp<br>webhook<br>alertmanager</p>
 * @method string getWebHook() 获取<p>如果Type为webhook, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebHook(string $WebHook) 设置<p>如果Type为webhook, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrometheusAlertManagerConfig getAlertManager() 获取<p>如果Type为alertmanager, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertManager(PrometheusAlertManagerConfig $AlertManager) 设置<p>如果Type为alertmanager, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepeatInterval() 获取<p>收敛时间</p>
 * @method void setRepeatInterval(string $RepeatInterval) 设置<p>收敛时间</p>
 * @method string getTimeRangeStart() 获取<p>生效起始时间</p>
 * @method void setTimeRangeStart(string $TimeRangeStart) 设置<p>生效起始时间</p>
 * @method string getTimeRangeEnd() 获取<p>生效结束时间</p>
 * @method void setTimeRangeEnd(string $TimeRangeEnd) 设置<p>生效结束时间</p>
 * @method array getNotifyWay() 获取<p>告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotifyWay(array $NotifyWay) 设置<p>告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverGroups() 获取<p>告警接收组（用户组）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverGroups(array $ReceiverGroups) 设置<p>告警接收组（用户组）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPhoneNotifyOrder() 获取<p>电话告警顺序。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNotifyOrder(array $PhoneNotifyOrder) 设置<p>电话告警顺序。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneCircleTimes() 获取<p>电话告警次数。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneCircleTimes(integer $PhoneCircleTimes) 设置<p>电话告警次数。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneInnerInterval() 获取<p>电话告警轮内间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneInnerInterval(integer $PhoneInnerInterval) 设置<p>电话告警轮内间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhoneCircleInterval() 获取<p>电话告警轮外间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneCircleInterval(integer $PhoneCircleInterval) 设置<p>电话告警轮外间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPhoneArriveNotice() 获取<p>电话告警触达通知<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneArriveNotice(boolean $PhoneArriveNotice) 设置<p>电话告警触达通知<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusNotificationItem extends AbstractModel
{
    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @var string <p>通道类型，默认为amp，支持以下<br>amp<br>webhook<br>alertmanager</p>
     */
    public $Type;

    /**
     * @var string <p>如果Type为webhook, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebHook;

    /**
     * @var PrometheusAlertManagerConfig <p>如果Type为alertmanager, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertManager;

    /**
     * @var string <p>收敛时间</p>
     */
    public $RepeatInterval;

    /**
     * @var string <p>生效起始时间</p>
     */
    public $TimeRangeStart;

    /**
     * @var string <p>生效结束时间</p>
     */
    public $TimeRangeEnd;

    /**
     * @var array <p>告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotifyWay;

    /**
     * @var array <p>告警接收组（用户组）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverGroups;

    /**
     * @var array <p>电话告警顺序。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNotifyOrder;

    /**
     * @var integer <p>电话告警次数。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneCircleTimes;

    /**
     * @var integer <p>电话告警轮内间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneInnerInterval;

    /**
     * @var integer <p>电话告警轮外间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneCircleInterval;

    /**
     * @var boolean <p>电话告警触达通知<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneArriveNotice;

    /**
     * @param boolean $Enabled <p>是否启用</p>
     * @param string $Type <p>通道类型，默认为amp，支持以下<br>amp<br>webhook<br>alertmanager</p>
     * @param string $WebHook <p>如果Type为webhook, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrometheusAlertManagerConfig $AlertManager <p>如果Type为alertmanager, 则该字段为必填项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepeatInterval <p>收敛时间</p>
     * @param string $TimeRangeStart <p>生效起始时间</p>
     * @param string $TimeRangeEnd <p>生效结束时间</p>
     * @param array $NotifyWay <p>告警通知方式。目前有SMS、EMAIL、CALL、WECHAT方式。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverGroups <p>告警接收组（用户组）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PhoneNotifyOrder <p>电话告警顺序。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneCircleTimes <p>电话告警次数。<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneInnerInterval <p>电话告警轮内间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhoneCircleInterval <p>电话告警轮外间隔。单位：秒<br>注：NotifyWay选择CALL，采用该参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PhoneArriveNotice <p>电话告警触达通知<br>注：NotifyWay选择CALL，采用该参数。</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WebHook",$param) and $param["WebHook"] !== null) {
            $this->WebHook = $param["WebHook"];
        }

        if (array_key_exists("AlertManager",$param) and $param["AlertManager"] !== null) {
            $this->AlertManager = new PrometheusAlertManagerConfig();
            $this->AlertManager->deserialize($param["AlertManager"]);
        }

        if (array_key_exists("RepeatInterval",$param) and $param["RepeatInterval"] !== null) {
            $this->RepeatInterval = $param["RepeatInterval"];
        }

        if (array_key_exists("TimeRangeStart",$param) and $param["TimeRangeStart"] !== null) {
            $this->TimeRangeStart = $param["TimeRangeStart"];
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PhoneNotifyOrder",$param) and $param["PhoneNotifyOrder"] !== null) {
            $this->PhoneNotifyOrder = $param["PhoneNotifyOrder"];
        }

        if (array_key_exists("PhoneCircleTimes",$param) and $param["PhoneCircleTimes"] !== null) {
            $this->PhoneCircleTimes = $param["PhoneCircleTimes"];
        }

        if (array_key_exists("PhoneInnerInterval",$param) and $param["PhoneInnerInterval"] !== null) {
            $this->PhoneInnerInterval = $param["PhoneInnerInterval"];
        }

        if (array_key_exists("PhoneCircleInterval",$param) and $param["PhoneCircleInterval"] !== null) {
            $this->PhoneCircleInterval = $param["PhoneCircleInterval"];
        }

        if (array_key_exists("PhoneArriveNotice",$param) and $param["PhoneArriveNotice"] !== null) {
            $this->PhoneArriveNotice = $param["PhoneArriveNotice"];
        }
    }
}
