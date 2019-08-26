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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTemplateName() 获取模板名称，非空的字符串。
长度上限：255字节。
 * @method void setTemplateName(string $TemplateName) 设置模板名称，非空的字符串。
长度上限：255字节。
 * @method string getDescription() 获取描述信息。
长度上限：1024字节。
 * @method void setDescription(string $Description) 设置描述信息。
长度上限：1024字节。
 * @method string getStreamBeginNotifyUrl() 获取开播回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method void setStreamBeginNotifyUrl(string $StreamBeginNotifyUrl) 设置开播回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method string getStreamEndNotifyUrl() 获取断流回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method void setStreamEndNotifyUrl(string $StreamEndNotifyUrl) 设置断流回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method string getRecordNotifyUrl() 获取录制回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method void setRecordNotifyUrl(string $RecordNotifyUrl) 设置录制回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method string getSnapshotNotifyUrl() 获取截图回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method void setSnapshotNotifyUrl(string $SnapshotNotifyUrl) 设置截图回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
 * @method string getPornCensorshipNotifyUrl() 获取鉴黄回调URL，
相关协议文档：[事件消息通知](/document/product/267/32741)。
 * @method void setPornCensorshipNotifyUrl(string $PornCensorshipNotifyUrl) 设置鉴黄回调URL，
相关协议文档：[事件消息通知](/document/product/267/32741)。
 * @method string getCallbackKey() 获取回调key，回调URL公用，鉴权回调说明详见回调格式文档
 * @method void setCallbackKey(string $CallbackKey) 设置回调key，回调URL公用，鉴权回调说明详见回调格式文档
 */

/**
 *CreateLiveCallbackTemplate请求参数结构体
 */
class CreateLiveCallbackTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称，非空的字符串。
长度上限：255字节。
     */
    public $TemplateName;

    /**
     * @var string 描述信息。
长度上限：1024字节。
     */
    public $Description;

    /**
     * @var string 开播回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     */
    public $StreamBeginNotifyUrl;

    /**
     * @var string 断流回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     */
    public $StreamEndNotifyUrl;

    /**
     * @var string 录制回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     */
    public $RecordNotifyUrl;

    /**
     * @var string 截图回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     */
    public $SnapshotNotifyUrl;

    /**
     * @var string 鉴黄回调URL，
相关协议文档：[事件消息通知](/document/product/267/32741)。
     */
    public $PornCensorshipNotifyUrl;

    /**
     * @var string 回调key，回调URL公用，鉴权回调说明详见回调格式文档
     */
    public $CallbackKey;
    /**
     * @param string $TemplateName 模板名称，非空的字符串。
长度上限：255字节。
     * @param string $Description 描述信息。
长度上限：1024字节。
     * @param string $StreamBeginNotifyUrl 开播回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     * @param string $StreamEndNotifyUrl 断流回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     * @param string $RecordNotifyUrl 录制回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     * @param string $SnapshotNotifyUrl 截图回调URL，
相关协议文档：[事件消息通知](/document/product/267/32744)。
     * @param string $PornCensorshipNotifyUrl 鉴黄回调URL，
相关协议文档：[事件消息通知](/document/product/267/32741)。
     * @param string $CallbackKey 回调key，回调URL公用，鉴权回调说明详见回调格式文档
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StreamBeginNotifyUrl",$param) and $param["StreamBeginNotifyUrl"] !== null) {
            $this->StreamBeginNotifyUrl = $param["StreamBeginNotifyUrl"];
        }

        if (array_key_exists("StreamEndNotifyUrl",$param) and $param["StreamEndNotifyUrl"] !== null) {
            $this->StreamEndNotifyUrl = $param["StreamEndNotifyUrl"];
        }

        if (array_key_exists("RecordNotifyUrl",$param) and $param["RecordNotifyUrl"] !== null) {
            $this->RecordNotifyUrl = $param["RecordNotifyUrl"];
        }

        if (array_key_exists("SnapshotNotifyUrl",$param) and $param["SnapshotNotifyUrl"] !== null) {
            $this->SnapshotNotifyUrl = $param["SnapshotNotifyUrl"];
        }

        if (array_key_exists("PornCensorshipNotifyUrl",$param) and $param["PornCensorshipNotifyUrl"] !== null) {
            $this->PornCensorshipNotifyUrl = $param["PornCensorshipNotifyUrl"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }
    }
}
