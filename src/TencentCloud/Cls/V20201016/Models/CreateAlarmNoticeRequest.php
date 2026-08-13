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
 * @method string getName() 获取<p>通知渠道组名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
 * @method void setName(string $Name) 设置<p>通知渠道组名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
 * @method array getTags() 获取<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。</p>
 * @method string getType() 获取<p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>需要发送通知的告警类型。可选值：</p><ul><li>Trigger - 告警触发</li><li>Recovery - 告警恢复</li><li>All - 告警触发和告警恢复</li></ul>
 * @method void setType(string $Type) 设置<p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>需要发送通知的告警类型。可选值：</p><ul><li>Trigger - 告警触发</li><li>Recovery - 告警恢复</li><li>All - 告警触发和告警恢复</li></ul>
 * @method array getNoticeReceivers() 获取<p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知接收对象。</p>
 * @method void setNoticeReceivers(array $NoticeReceivers) 设置<p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知接收对象。</p>
 * @method array getWebCallbacks() 获取<p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>接口回调信息（包括企业微信、钉钉、飞书）。</p>
 * @method void setWebCallbacks(array $WebCallbacks) 设置<p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>接口回调信息（包括企业微信、钉钉、飞书）。</p>
 * @method array getNoticeRules() 获取<p>【高级模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知规则。</p>
 * @method void setNoticeRules(array $NoticeRules) 设置<p>【高级模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知规则。</p>
 * @method string getJumpDomain() 获取<p>查询数据链接。http:// 或者 https:// 开头，不能/结尾</p>
 * @method void setJumpDomain(string $JumpDomain) 设置<p>查询数据链接。http:// 或者 https:// 开头，不能/结尾</p>
 * @method integer getDeliverStatus() 获取<p>投递日志开关。可取值如下：<br>1：关闭（默认值）；<br>2：开启<br>投递日志开关开启时， DeliverConfig参数必填。</p>
 * @method void setDeliverStatus(integer $DeliverStatus) 设置<p>投递日志开关。可取值如下：<br>1：关闭（默认值）；<br>2：开启<br>投递日志开关开启时， DeliverConfig参数必填。</p>
 * @method DeliverConfig getDeliverConfig() 获取<p>投递日志配置参数。当DeliverStatus开启时，必填。</p>
 * @method void setDeliverConfig(DeliverConfig $DeliverConfig) 设置<p>投递日志配置参数。当DeliverStatus开启时，必填。</p>
 * @method integer getAlarmShieldStatus() 获取<p>免登录操作告警开关。可取值如下：</p><ul><li>1：关闭</li><li>2：开启（默认值）</li></ul>
 * @method void setAlarmShieldStatus(integer $AlarmShieldStatus) 设置<p>免登录操作告警开关。可取值如下：</p><ul><li>1：关闭</li><li>2：开启（默认值）</li></ul>
 * @method integer getSecureDetailStatus() 获取<p>告警详情安全认证跳转开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
 * @method void setSecureDetailStatus(integer $SecureDetailStatus) 设置<p>告警详情安全认证跳转开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
 * @method boolean getCallbackPrioritize() 获取<p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
 * @method void setCallbackPrioritize(boolean $CallbackPrioritize) 设置<p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
 */
class CreateAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string <p>通知渠道组名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
     */
    public $Name;

    /**
     * @var array <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。</p>
     */
    public $Tags;

    /**
     * @var string <p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>需要发送通知的告警类型。可选值：</p><ul><li>Trigger - 告警触发</li><li>Recovery - 告警恢复</li><li>All - 告警触发和告警恢复</li></ul>
     */
    public $Type;

    /**
     * @var array <p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知接收对象。</p>
     */
    public $NoticeReceivers;

    /**
     * @var array <p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>接口回调信息（包括企业微信、钉钉、飞书）。</p>
     */
    public $WebCallbacks;

    /**
     * @var array <p>【高级模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知规则。</p>
     */
    public $NoticeRules;

    /**
     * @var string <p>查询数据链接。http:// 或者 https:// 开头，不能/结尾</p>
     */
    public $JumpDomain;

    /**
     * @var integer <p>投递日志开关。可取值如下：<br>1：关闭（默认值）；<br>2：开启<br>投递日志开关开启时， DeliverConfig参数必填。</p>
     */
    public $DeliverStatus;

    /**
     * @var DeliverConfig <p>投递日志配置参数。当DeliverStatus开启时，必填。</p>
     */
    public $DeliverConfig;

    /**
     * @var integer <p>免登录操作告警开关。可取值如下：</p><ul><li>1：关闭</li><li>2：开启（默认值）</li></ul>
     */
    public $AlarmShieldStatus;

    /**
     * @var integer <p>告警详情安全认证跳转开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
     */
    public $SecureDetailStatus;

    /**
     * @var boolean <p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
     */
    public $CallbackPrioritize;

    /**
     * @param string $Name <p>通知渠道组名称。最大支持255个字节。 不支持 &#39;|&#39;。</p>
     * @param array $Tags <p>标签描述列表，通过指定该参数可以同时绑定标签到相应的通知渠道组。最大支持50个标签键值对，并且不能有重复的键值对。</p>
     * @param string $Type <p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>需要发送通知的告警类型。可选值：</p><ul><li>Trigger - 告警触发</li><li>Recovery - 告警恢复</li><li>All - 告警触发和告警恢复</li></ul>
     * @param array $NoticeReceivers <p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知接收对象。</p>
     * @param array $WebCallbacks <p>【简易模式】（简易模式/告警模式二选一，分别配置相应参数）<br>接口回调信息（包括企业微信、钉钉、飞书）。</p>
     * @param array $NoticeRules <p>【高级模式】（简易模式/告警模式二选一，分别配置相应参数）<br>通知规则。</p>
     * @param string $JumpDomain <p>查询数据链接。http:// 或者 https:// 开头，不能/结尾</p>
     * @param integer $DeliverStatus <p>投递日志开关。可取值如下：<br>1：关闭（默认值）；<br>2：开启<br>投递日志开关开启时， DeliverConfig参数必填。</p>
     * @param DeliverConfig $DeliverConfig <p>投递日志配置参数。当DeliverStatus开启时，必填。</p>
     * @param integer $AlarmShieldStatus <p>免登录操作告警开关。可取值如下：</p><ul><li>1：关闭</li><li>2：开启（默认值）</li></ul>
     * @param integer $SecureDetailStatus <p>告警详情安全认证跳转开关，未传时默认&quot;关闭&quot;</p><p>枚举值：</p><ul><li>1： 关闭（默认值）</li><li>2： 开启</li></ul>
     * @param boolean $CallbackPrioritize <p>统一设定自定义回调参数。</p><ul><li>true: 使用通知内容模板中的自定义回调参数覆盖告警策略中单独配置的请求头及请求内容。</li><li>false:优先使用告警策略中单独配置的请求头及请求内容。</li></ul>
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

        if (array_key_exists("SecureDetailStatus",$param) and $param["SecureDetailStatus"] !== null) {
            $this->SecureDetailStatus = $param["SecureDetailStatus"];
        }

        if (array_key_exists("CallbackPrioritize",$param) and $param["CallbackPrioritize"] !== null) {
            $this->CallbackPrioritize = $param["CallbackPrioritize"];
        }
    }
}
