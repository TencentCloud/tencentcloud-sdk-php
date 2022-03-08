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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmNotice请求参数结构体
 *
 * @method string getAlarmNoticeId() 获取通知渠道组ID。
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置通知渠道组ID。
 * @method string getName() 获取通知渠道组名称。
 * @method void setName(string $Name) 设置通知渠道组名称。
 * @method string getType() 获取通知类型。可选值：
<li> Trigger - 告警触发
<li> Recovery - 告警恢复
<li> All - 告警触发和告警恢复
 * @method void setType(string $Type) 设置通知类型。可选值：
<li> Trigger - 告警触发
<li> Recovery - 告警恢复
<li> All - 告警触发和告警恢复
 * @method array getNoticeReceivers() 获取通知接收对象。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置通知接收对象。
 * @method array getWebCallbacks() 获取接口回调信息（包括企业微信）。
 * @method void setWebCallbacks(array $WebCallbacks) 设置接口回调信息（包括企业微信）。
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string 通知渠道组ID。
     */
    public $AlarmNoticeId;

    /**
     * @var string 通知渠道组名称。
     */
    public $Name;

    /**
     * @var string 通知类型。可选值：
<li> Trigger - 告警触发
<li> Recovery - 告警恢复
<li> All - 告警触发和告警恢复
     */
    public $Type;

    /**
     * @var array 通知接收对象。
     */
    public $NoticeReceivers;

    /**
     * @var array 接口回调信息（包括企业微信）。
     */
    public $WebCallbacks;

    /**
     * @param string $AlarmNoticeId 通知渠道组ID。
     * @param string $Name 通知渠道组名称。
     * @param string $Type 通知类型。可选值：
<li> Trigger - 告警触发
<li> Recovery - 告警恢复
<li> All - 告警触发和告警恢复
     * @param array $NoticeReceivers 通知接收对象。
     * @param array $WebCallbacks 接口回调信息（包括企业微信）。
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
        if (array_key_exists("AlarmNoticeId",$param) and $param["AlarmNoticeId"] !== null) {
            $this->AlarmNoticeId = $param["AlarmNoticeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
    }
}
