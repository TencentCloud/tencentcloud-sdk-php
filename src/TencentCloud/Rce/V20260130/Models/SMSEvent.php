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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信事件详情
 *
 * @method User getUserInfo() 获取<p>用户基础信息</p>
 * @method void setUserInfo(User $UserInfo) 设置<p>用户基础信息</p>
 * @method string getSMSId() 获取<p>本次短信发送标识 ID</p>
 * @method void setSMSId(string $SMSId) 设置<p>本次短信发送标识 ID</p>
 * @method string getReceivedTime() 获取<p>用户实际完成验证码时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method void setReceivedTime(string $ReceivedTime) 设置<p>用户实际完成验证码时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
 * @method string getAction() 获取<p>记录用户收到短信的动作</p><ul><li>no_action：用户无动作</li><li>safe：用户确认本人操作</li><li>compromised：用户反馈为第三方操作</li></ul>
 * @method void setAction(string $Action) 设置<p>记录用户收到短信的动作</p><ul><li>no_action：用户无动作</li><li>safe：用户确认本人操作</li><li>compromised：用户反馈为第三方操作</li></ul>
 * @method Result getSMSResult() 获取<p>短信回执结果</p>
 * @method void setSMSResult(Result $SMSResult) 设置<p>短信回执结果</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class SMSEvent extends AbstractModel
{
    /**
     * @var User <p>用户基础信息</p>
     */
    public $UserInfo;

    /**
     * @var string <p>本次短信发送标识 ID</p>
     */
    public $SMSId;

    /**
     * @var string <p>用户实际完成验证码时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     */
    public $ReceivedTime;

    /**
     * @var string <p>记录用户收到短信的动作</p><ul><li>no_action：用户无动作</li><li>safe：用户确认本人操作</li><li>compromised：用户反馈为第三方操作</li></ul>
     */
    public $Action;

    /**
     * @var Result <p>短信回执结果</p>
     */
    public $SMSResult;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param User $UserInfo <p>用户基础信息</p>
     * @param string $SMSId <p>本次短信发送标识 ID</p>
     * @param string $ReceivedTime <p>用户实际完成验证码时间</p><p>参数格式：符合ISO 8601标准的带UTC时区的毫秒级时间</p>
     * @param string $Action <p>记录用户收到短信的动作</p><ul><li>no_action：用户无动作</li><li>safe：用户确认本人操作</li><li>compromised：用户反馈为第三方操作</li></ul>
     * @param Result $SMSResult <p>短信回执结果</p>
     * @param array $Cust <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("SMSId",$param) and $param["SMSId"] !== null) {
            $this->SMSId = $param["SMSId"];
        }

        if (array_key_exists("ReceivedTime",$param) and $param["ReceivedTime"] !== null) {
            $this->ReceivedTime = $param["ReceivedTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("SMSResult",$param) and $param["SMSResult"] !== null) {
            $this->SMSResult = new Result();
            $this->SMSResult->deserialize($param["SMSResult"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
