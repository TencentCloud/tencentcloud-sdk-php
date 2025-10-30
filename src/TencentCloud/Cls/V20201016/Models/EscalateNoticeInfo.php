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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 升级通知
 *
 * @method array getNoticeReceivers() 获取告警通知模板接收者信息。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置告警通知模板接收者信息。
 * @method array getWebCallbacks() 获取告警通知模板回调信息。
 * @method void setWebCallbacks(array $WebCallbacks) 设置告警通知模板回调信息。
 * @method boolean getEscalate() 获取告警升级开关。`true`：开启告警升级、`false`：关闭告警升级，默认：false
 * @method void setEscalate(boolean $Escalate) 设置告警升级开关。`true`：开启告警升级、`false`：关闭告警升级，默认：false
 * @method integer getInterval() 获取告警升级间隔。单位：分钟，范围`[1，14400]`
 * @method void setInterval(integer $Interval) 设置告警升级间隔。单位：分钟，范围`[1，14400]`
 * @method integer getType() 获取升级条件。`1`：无人认领且未恢复、`2`：未恢复，默认为1
- 无人认领且未恢复：告警没有恢复并且没有人认领则升级
- 未恢复：当前告警持续未恢复则升级

 * @method void setType(integer $Type) 设置升级条件。`1`：无人认领且未恢复、`2`：未恢复，默认为1
- 无人认领且未恢复：告警没有恢复并且没有人认领则升级
- 未恢复：当前告警持续未恢复则升级

 * @method EscalateNoticeInfo getEscalateNotice() 获取告警升级后下一个环节的通知渠道配置，最多可配置5个环节。
 * @method void setEscalateNotice(EscalateNoticeInfo $EscalateNotice) 设置告警升级后下一个环节的通知渠道配置，最多可配置5个环节。
 */
class EscalateNoticeInfo extends AbstractModel
{
    /**
     * @var array 告警通知模板接收者信息。
     */
    public $NoticeReceivers;

    /**
     * @var array 告警通知模板回调信息。
     */
    public $WebCallbacks;

    /**
     * @var boolean 告警升级开关。`true`：开启告警升级、`false`：关闭告警升级，默认：false
     */
    public $Escalate;

    /**
     * @var integer 告警升级间隔。单位：分钟，范围`[1，14400]`
     */
    public $Interval;

    /**
     * @var integer 升级条件。`1`：无人认领且未恢复、`2`：未恢复，默认为1
- 无人认领且未恢复：告警没有恢复并且没有人认领则升级
- 未恢复：当前告警持续未恢复则升级

     */
    public $Type;

    /**
     * @var EscalateNoticeInfo 告警升级后下一个环节的通知渠道配置，最多可配置5个环节。
     */
    public $EscalateNotice;

    /**
     * @param array $NoticeReceivers 告警通知模板接收者信息。
     * @param array $WebCallbacks 告警通知模板回调信息。
     * @param boolean $Escalate 告警升级开关。`true`：开启告警升级、`false`：关闭告警升级，默认：false
     * @param integer $Interval 告警升级间隔。单位：分钟，范围`[1，14400]`
     * @param integer $Type 升级条件。`1`：无人认领且未恢复、`2`：未恢复，默认为1
- 无人认领且未恢复：告警没有恢复并且没有人认领则升级
- 未恢复：当前告警持续未恢复则升级

     * @param EscalateNoticeInfo $EscalateNotice 告警升级后下一个环节的通知渠道配置，最多可配置5个环节。
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
        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }

        if (array_key_exists("Escalate",$param) and $param["Escalate"] !== null) {
            $this->Escalate = $param["Escalate"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EscalateNotice",$param) and $param["EscalateNotice"] !== null) {
            $this->EscalateNotice = new EscalateNoticeInfo();
            $this->EscalateNotice->deserialize($param["EscalateNotice"]);
        }
    }
}
