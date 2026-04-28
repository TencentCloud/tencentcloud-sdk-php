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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEventConfig请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getMode() 获取<p>接收事件通知的方式。</p><li>PUSH：[HTTP 回调通知](https://cloud.tencent.com/document/product/266/33779)；</li><li>PULL：[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/33779)。</li>
 * @method void setMode(string $Mode) 设置<p>接收事件通知的方式。</p><li>PUSH：[HTTP 回调通知](https://cloud.tencent.com/document/product/266/33779)；</li><li>PULL：[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/33779)。</li>
 * @method string getNotificationUrl() 获取<p>采用 <a href="https://cloud.tencent.com/document/product/266/33779">HTTP 回调通知</a> 接收方式时，用于接收 3.0 格式回调的地址。<br>注意：如果带 NotificationUrl  参数且值为空字符串时将会清空 3.0 格式回调地址。</p>
 * @method void setNotificationUrl(string $NotificationUrl) 设置<p>采用 <a href="https://cloud.tencent.com/document/product/266/33779">HTTP 回调通知</a> 接收方式时，用于接收 3.0 格式回调的地址。<br>注意：如果带 NotificationUrl  参数且值为空字符串时将会清空 3.0 格式回调地址。</p>
 * @method string getUploadMediaCompleteEventSwitch() 获取<p>是否接收 <a href="https://cloud.tencent.com/document/product/266/7830">视频上传完成</a> 事件通知， 默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
 * @method void setUploadMediaCompleteEventSwitch(string $UploadMediaCompleteEventSwitch) 设置<p>是否接收 <a href="https://cloud.tencent.com/document/product/266/7830">视频上传完成</a> 事件通知， 默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
 * @method string getDeleteMediaCompleteEventSwitch() 获取<p>是否接收 <a href="https://cloud.tencent.com/document/product/266/13434">视频删除完成</a> 事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
 * @method void setDeleteMediaCompleteEventSwitch(string $DeleteMediaCompleteEventSwitch) 设置<p>是否接收 <a href="https://cloud.tencent.com/document/product/266/13434">视频删除完成</a> 事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
 * @method string getPersistenceCompleteEventSwitch() 获取<p>是否接收剪辑固化完成事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
 * @method void setPersistenceCompleteEventSwitch(string $PersistenceCompleteEventSwitch) 设置<p>是否接收剪辑固化完成事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
 * @method string getSignKey() 获取<p>回调密钥，由大小写字母及数字组成，最长32字符。配置后将在回调中发送<code>Sign</code>与<code>T</code>字段，可用于鉴权。</p><ul><li><code>Sign</code>：string类型。事件通知安全签名 Sign = MD5（SignKey + T）。说明：腾讯云把加密 SignKey 和 T 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自腾讯云后台。</li><li><code>T</code>：int64类型。过期时间，事件通知签名过期 UNIX 时间戳。来自腾讯云的消息通知默认过期时间是10分钟，如果一条消息通知中的 t 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。T 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。</li></ul>
 * @method void setSignKey(string $SignKey) 设置<p>回调密钥，由大小写字母及数字组成，最长32字符。配置后将在回调中发送<code>Sign</code>与<code>T</code>字段，可用于鉴权。</p><ul><li><code>Sign</code>：string类型。事件通知安全签名 Sign = MD5（SignKey + T）。说明：腾讯云把加密 SignKey 和 T 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自腾讯云后台。</li><li><code>T</code>：int64类型。过期时间，事件通知签名过期 UNIX 时间戳。来自腾讯云的消息通知默认过期时间是10分钟，如果一条消息通知中的 t 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。T 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。</li></ul>
 */
class ModifyEventConfigRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>接收事件通知的方式。</p><li>PUSH：[HTTP 回调通知](https://cloud.tencent.com/document/product/266/33779)；</li><li>PULL：[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/33779)。</li>
     */
    public $Mode;

    /**
     * @var string <p>采用 <a href="https://cloud.tencent.com/document/product/266/33779">HTTP 回调通知</a> 接收方式时，用于接收 3.0 格式回调的地址。<br>注意：如果带 NotificationUrl  参数且值为空字符串时将会清空 3.0 格式回调地址。</p>
     */
    public $NotificationUrl;

    /**
     * @var string <p>是否接收 <a href="https://cloud.tencent.com/document/product/266/7830">视频上传完成</a> 事件通知， 默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
     */
    public $UploadMediaCompleteEventSwitch;

    /**
     * @var string <p>是否接收 <a href="https://cloud.tencent.com/document/product/266/13434">视频删除完成</a> 事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
     */
    public $DeleteMediaCompleteEventSwitch;

    /**
     * @var string <p>是否接收剪辑固化完成事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
     */
    public $PersistenceCompleteEventSwitch;

    /**
     * @var string <p>回调密钥，由大小写字母及数字组成，最长32字符。配置后将在回调中发送<code>Sign</code>与<code>T</code>字段，可用于鉴权。</p><ul><li><code>Sign</code>：string类型。事件通知安全签名 Sign = MD5（SignKey + T）。说明：腾讯云把加密 SignKey 和 T 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自腾讯云后台。</li><li><code>T</code>：int64类型。过期时间，事件通知签名过期 UNIX 时间戳。来自腾讯云的消息通知默认过期时间是10分钟，如果一条消息通知中的 t 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。T 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。</li></ul>
     */
    public $SignKey;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Mode <p>接收事件通知的方式。</p><li>PUSH：[HTTP 回调通知](https://cloud.tencent.com/document/product/266/33779)；</li><li>PULL：[基于消息队列的可靠通知](https://cloud.tencent.com/document/product/266/33779)。</li>
     * @param string $NotificationUrl <p>采用 <a href="https://cloud.tencent.com/document/product/266/33779">HTTP 回调通知</a> 接收方式时，用于接收 3.0 格式回调的地址。<br>注意：如果带 NotificationUrl  参数且值为空字符串时将会清空 3.0 格式回调地址。</p>
     * @param string $UploadMediaCompleteEventSwitch <p>是否接收 <a href="https://cloud.tencent.com/document/product/266/7830">视频上传完成</a> 事件通知， 默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
     * @param string $DeleteMediaCompleteEventSwitch <p>是否接收 <a href="https://cloud.tencent.com/document/product/266/13434">视频删除完成</a> 事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
     * @param string $PersistenceCompleteEventSwitch <p>是否接收剪辑固化完成事件通知，  默认 &quot;OFF&quot; 为忽略该事件通知，&quot;ON&quot; 为接收事件通知。</p>
     * @param string $SignKey <p>回调密钥，由大小写字母及数字组成，最长32字符。配置后将在回调中发送<code>Sign</code>与<code>T</code>字段，可用于鉴权。</p><ul><li><code>Sign</code>：string类型。事件通知安全签名 Sign = MD5（SignKey + T）。说明：腾讯云把加密 SignKey 和 T 进行字符串拼接后通过 MD5 计算得出 Sign 值，并将其放在通知消息里，您的后台服务器在收到通知消息后可以根据同样的算法确认 Sign 是否正确，进而确认消息是否确实来自腾讯云后台。</li><li><code>T</code>：int64类型。过期时间，事件通知签名过期 UNIX 时间戳。来自腾讯云的消息通知默认过期时间是10分钟，如果一条消息通知中的 t 值所指定的时间已经过期，则可以判定这条通知无效，进而可以防止网络重放攻击。T 的格式为十进制 UNIX 时间戳，即从1970年01月01日（UTC/GMT 的午夜）开始所经过的秒数。</li></ul>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NotificationUrl",$param) and $param["NotificationUrl"] !== null) {
            $this->NotificationUrl = $param["NotificationUrl"];
        }

        if (array_key_exists("UploadMediaCompleteEventSwitch",$param) and $param["UploadMediaCompleteEventSwitch"] !== null) {
            $this->UploadMediaCompleteEventSwitch = $param["UploadMediaCompleteEventSwitch"];
        }

        if (array_key_exists("DeleteMediaCompleteEventSwitch",$param) and $param["DeleteMediaCompleteEventSwitch"] !== null) {
            $this->DeleteMediaCompleteEventSwitch = $param["DeleteMediaCompleteEventSwitch"];
        }

        if (array_key_exists("PersistenceCompleteEventSwitch",$param) and $param["PersistenceCompleteEventSwitch"] !== null) {
            $this->PersistenceCompleteEventSwitch = $param["PersistenceCompleteEventSwitch"];
        }

        if (array_key_exists("SignKey",$param) and $param["SignKey"] !== null) {
            $this->SignKey = $param["SignKey"];
        }
    }
}
