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
 * 聊天消息事件详情
 *
 * @method Chat getChatInfo() 获取<p>聊天信息</p>
 * @method void setChatInfo(Chat $ChatInfo) 设置<p>聊天信息</p>
 * @method string getServerId() 获取<p>所属服务器ID，允许空串</p>
 * @method void setServerId(string $ServerId) 设置<p>所属服务器ID，允许空串</p>
 * @method Sender getSender() 获取<p>发送者信息</p>
 * @method void setSender(Sender $Sender) 设置<p>发送者信息</p>
 * @method Receiver getReceiver() 获取<p>接收者信息</p>
 * @method void setReceiver(Receiver $Receiver) 设置<p>接收者信息</p>
 * @method array getCust() 获取<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class ChatEvent extends AbstractModel
{
    /**
     * @var Chat <p>聊天信息</p>
     */
    public $ChatInfo;

    /**
     * @var string <p>所属服务器ID，允许空串</p>
     */
    public $ServerId;

    /**
     * @var Sender <p>发送者信息</p>
     */
    public $Sender;

    /**
     * @var Receiver <p>接收者信息</p>
     */
    public $Receiver;

    /**
     * @var array <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param Chat $ChatInfo <p>聊天信息</p>
     * @param string $ServerId <p>所属服务器ID，允许空串</p>
     * @param Sender $Sender <p>发送者信息</p>
     * @param Receiver $Receiver <p>接收者信息</p>
     * @param array $Cust <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("ChatInfo",$param) and $param["ChatInfo"] !== null) {
            $this->ChatInfo = new Chat();
            $this->ChatInfo->deserialize($param["ChatInfo"]);
        }

        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("Sender",$param) and $param["Sender"] !== null) {
            $this->Sender = new Sender();
            $this->Sender->deserialize($param["Sender"]);
        }

        if (array_key_exists("Receiver",$param) and $param["Receiver"] !== null) {
            $this->Receiver = new Receiver();
            $this->Receiver->deserialize($param["Receiver"]);
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
