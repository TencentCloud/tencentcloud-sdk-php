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
 * ModifyAlarmNotice请求参数结构体
 *
 * @method string getAlarmNoticeId() 获取通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
 * @method void setAlarmNoticeId(string $AlarmNoticeId) 设置通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
 * @method array getTags() 获取标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method void setTags(array $Tags) 设置标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持10个标签键值对，并且不能有重复的键值对。
 * @method string getName() 获取通知渠道组名称。
 * @method void setName(string $Name) 设置通知渠道组名称。
 * @method string getType() 获取通知类型。可选值：
<li> Trigger - 告警触发</li>
<li> Recovery - 告警恢复</li>
<li> All - 告警触发和告警恢复</li>
 * @method void setType(string $Type) 设置通知类型。可选值：
<li> Trigger - 告警触发</li>
<li> Recovery - 告警恢复</li>
<li> All - 告警触发和告警恢复</li>
 * @method array getNoticeReceivers() 获取通知接收对象。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置通知接收对象。
 * @method array getWebCallbacks() 获取接口回调信息（包括企业微信等）。
 * @method void setWebCallbacks(array $WebCallbacks) 设置接口回调信息（包括企业微信等）。
 * @method array getNoticeRules() 获取通知规则。

注意: 

- Type、NoticeReceivers和WebCallbacks是一组配置，NoticeRules是另一组配置，2组配置互斥。
- 传其中一组数据，则另一组数据置空。
 * @method void setNoticeRules(array $NoticeRules) 设置通知规则。

注意: 

- Type、NoticeReceivers和WebCallbacks是一组配置，NoticeRules是另一组配置，2组配置互斥。
- 传其中一组数据，则另一组数据置空。
 * @method string getJumpDomain() 获取调用链接域名。http:// 或者 https:// 开头，不能/结尾
 * @method void setJumpDomain(string $JumpDomain) 设置调用链接域名。http:// 或者 https:// 开头，不能/结尾
 * @method integer getDeliverStatus() 获取投递日志开关。

参数值：
1：关闭；

2：开启 

 * @method void setDeliverStatus(integer $DeliverStatus) 设置投递日志开关。

参数值：
1：关闭；

2：开启 

 * @method DeliverConfig getDeliverConfig() 获取投递日志配置。
 * @method void setDeliverConfig(DeliverConfig $DeliverConfig) 设置投递日志配置。
 * @method integer getAlarmShieldStatus() 获取免登录操作告警开关。

参数值： 
        1：关闭
        2：开启（默认开启）
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) 设置免登录操作告警开关。

参数值： 
        1：关闭
        2：开启（默认开启）
 * @method boolean getCallbackPrioritize() 获取统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) 设置统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string 通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
     */
    public $AlarmNoticeId;

    /**
     * @var array 标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持10个标签键值对，并且不能有重复的键值对。
     */
    public $Tags;

    /**
     * @var string 通知渠道组名称。
     */
    public $Name;

    /**
     * @var string 通知类型。可选值：
<li> Trigger - 告警触发</li>
<li> Recovery - 告警恢复</li>
<li> All - 告警触发和告警恢复</li>
     */
    public $Type;

    /**
     * @var array 通知接收对象。
     */
    public $NoticeReceivers;

    /**
     * @var array 接口回调信息（包括企业微信等）。
     */
    public $WebCallbacks;

    /**
     * @var array 通知规则。

注意: 

- Type、NoticeReceivers和WebCallbacks是一组配置，NoticeRules是另一组配置，2组配置互斥。
- 传其中一组数据，则另一组数据置空。
     */
    public $NoticeRules;

    /**
     * @var string 调用链接域名。http:// 或者 https:// 开头，不能/结尾
     */
    public $JumpDomain;

    /**
     * @var integer 投递日志开关。

参数值：
1：关闭；

2：开启 

     */
    public $DeliverStatus;

    /**
     * @var DeliverConfig 投递日志配置。
     */
    public $DeliverConfig;

    /**
     * @var integer 免登录操作告警开关。

参数值： 
        1：关闭
        2：开启（默认开启）
     */
    public $AlarmShieldStatus;

    /**
     * @var boolean 统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
     */
    public $CallbackPrioritize;

    /**
     * @param string $AlarmNoticeId 通知渠道组ID。-通过[获取通知渠道组列表](https://cloud.tencent.com/document/api/614/56462)获取通知渠道组ID
     * @param array $Tags 标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持10个标签键值对，并且不能有重复的键值对。
     * @param string $Name 通知渠道组名称。
     * @param string $Type 通知类型。可选值：
<li> Trigger - 告警触发</li>
<li> Recovery - 告警恢复</li>
<li> All - 告警触发和告警恢复</li>
     * @param array $NoticeReceivers 通知接收对象。
     * @param array $WebCallbacks 接口回调信息（包括企业微信等）。
     * @param array $NoticeRules 通知规则。

注意: 

- Type、NoticeReceivers和WebCallbacks是一组配置，NoticeRules是另一组配置，2组配置互斥。
- 传其中一组数据，则另一组数据置空。
     * @param string $JumpDomain 调用链接域名。http:// 或者 https:// 开头，不能/结尾
     * @param integer $DeliverStatus 投递日志开关。

参数值：
1：关闭；

2：开启 

     * @param DeliverConfig $DeliverConfig 投递日志配置。
     * @param integer $AlarmShieldStatus 免登录操作告警开关。

参数值： 
        1：关闭
        2：开启（默认开启）
     * @param boolean $CallbackPrioritize 统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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

        if (array_key_exists("NoticeRules",$param) and $param["NoticeRules"] !== null) {
            $this->NoticeRules = [];
            foreach ($param["NoticeRules"] as $key => $value){
                $obj = new NoticeRule();
                $obj->deserialize($value);
                array_push($this->NoticeRules, $obj);
            }
        }

        if (array_key_exists("JumpDomain",$param) and $param["JumpDomain"] !== null) {
            $this->JumpDomain = $param["JumpDomain"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("DeliverConfig",$param) and $param["DeliverConfig"] !== null) {
            $this->DeliverConfig = new DeliverConfig();
            $this->DeliverConfig->deserialize($param["DeliverConfig"]);
        }

        if (array_key_exists("AlarmShieldStatus",$param) and $param["AlarmShieldStatus"] !== null) {
            $this->AlarmShieldStatus = $param["AlarmShieldStatus"];
        }

        if (array_key_exists("CallbackPrioritize",$param) and $param["CallbackPrioritize"] !== null) {
            $this->CallbackPrioritize = $param["CallbackPrioritize"];
        }
    }
}
