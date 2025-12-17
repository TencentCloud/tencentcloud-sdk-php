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
 * CreateAlarmNotice请求参数结构体
 *
 * @method string getName() 获取通知渠道组名称。最大支持255个字节。 不支持 '|'。
 * @method void setName(string $Name) 设置通知渠道组名称。最大支持255个字节。 不支持 '|'。
 * @method array getTags() 获取标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。
 * @method void setTags(array $Tags) 设置标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。
 * @method string getType() 获取【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
需要发送通知的告警类型。可选值：
- Trigger - 告警触发
- Recovery - 告警恢复
- All - 告警触发和告警恢复
 * @method void setType(string $Type) 设置【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
需要发送通知的告警类型。可选值：
- Trigger - 告警触发
- Recovery - 告警恢复
- All - 告警触发和告警恢复
 * @method array getNoticeReceivers() 获取【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
通知接收对象。
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
通知接收对象。
 * @method array getWebCallbacks() 获取【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
接口回调信息（包括企业微信、钉钉、飞书）。
 * @method void setWebCallbacks(array $WebCallbacks) 设置【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
接口回调信息（包括企业微信、钉钉、飞书）。
 * @method array getNoticeRules() 获取【高级模式】（简易模式/告警模式二选一，分别配置相应参数）
通知规则。
 * @method void setNoticeRules(array $NoticeRules) 设置【高级模式】（简易模式/告警模式二选一，分别配置相应参数）
通知规则。
 * @method string getJumpDomain() 获取查询数据链接。http:// 或者 https:// 开头，不能/结尾
 * @method void setJumpDomain(string $JumpDomain) 设置查询数据链接。http:// 或者 https:// 开头，不能/结尾
 * @method integer getDeliverStatus() 获取投递日志开关。可取值如下：
1：关闭（默认值）；
2：开启 
投递日志开关开启时， DeliverConfig参数必填。
 * @method void setDeliverStatus(integer $DeliverStatus) 设置投递日志开关。可取值如下：
1：关闭（默认值）；
2：开启 
投递日志开关开启时， DeliverConfig参数必填。
 * @method DeliverConfig getDeliverConfig() 获取投递日志配置参数。当DeliverStatus开启时，必填。
 * @method void setDeliverConfig(DeliverConfig $DeliverConfig) 设置投递日志配置参数。当DeliverStatus开启时，必填。
 * @method integer getAlarmShieldStatus() 获取免登录操作告警开关。可取值如下：
-      1：关闭
-      2：开启（默认值）
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) 设置免登录操作告警开关。可取值如下：
-      1：关闭
-      2：开启（默认值）
 * @method boolean getCallbackPrioritize() 获取统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) 设置统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
 */
class CreateAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string 通知渠道组名称。最大支持255个字节。 不支持 '|'。
     */
    public $Name;

    /**
     * @var array 标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。
     */
    public $Tags;

    /**
     * @var string 【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
需要发送通知的告警类型。可选值：
- Trigger - 告警触发
- Recovery - 告警恢复
- All - 告警触发和告警恢复
     */
    public $Type;

    /**
     * @var array 【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
通知接收对象。
     */
    public $NoticeReceivers;

    /**
     * @var array 【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
接口回调信息（包括企业微信、钉钉、飞书）。
     */
    public $WebCallbacks;

    /**
     * @var array 【高级模式】（简易模式/告警模式二选一，分别配置相应参数）
通知规则。
     */
    public $NoticeRules;

    /**
     * @var string 查询数据链接。http:// 或者 https:// 开头，不能/结尾
     */
    public $JumpDomain;

    /**
     * @var integer 投递日志开关。可取值如下：
1：关闭（默认值）；
2：开启 
投递日志开关开启时， DeliverConfig参数必填。
     */
    public $DeliverStatus;

    /**
     * @var DeliverConfig 投递日志配置参数。当DeliverStatus开启时，必填。
     */
    public $DeliverConfig;

    /**
     * @var integer 免登录操作告警开关。可取值如下：
-      1：关闭
-      2：开启（默认值）
     */
    public $AlarmShieldStatus;

    /**
     * @var boolean 统一设定自定义回调参数。
-  true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。
-  false:优先使用告警策略中单独配置的请求头及请求内容。
     */
    public $CallbackPrioritize;

    /**
     * @param string $Name 通知渠道组名称。最大支持255个字节。 不支持 '|'。
     * @param array $Tags 标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。
     * @param string $Type 【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
需要发送通知的告警类型。可选值：
- Trigger - 告警触发
- Recovery - 告警恢复
- All - 告警触发和告警恢复
     * @param array $NoticeReceivers 【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
通知接收对象。
     * @param array $WebCallbacks 【简易模式】（简易模式/告警模式二选一，分别配置相应参数）
接口回调信息（包括企业微信、钉钉、飞书）。
     * @param array $NoticeRules 【高级模式】（简易模式/告警模式二选一，分别配置相应参数）
通知规则。
     * @param string $JumpDomain 查询数据链接。http:// 或者 https:// 开头，不能/结尾
     * @param integer $DeliverStatus 投递日志开关。可取值如下：
1：关闭（默认值）；
2：开启 
投递日志开关开启时， DeliverConfig参数必填。
     * @param DeliverConfig $DeliverConfig 投递日志配置参数。当DeliverStatus开启时，必填。
     * @param integer $AlarmShieldStatus 免登录操作告警开关。可取值如下：
-      1：关闭
-      2：开启（默认值）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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
