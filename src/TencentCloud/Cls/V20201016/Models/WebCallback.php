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
 * 回调地址
 *
 * @method string getUrl() 获取回调地址。最大支持1024个字节数。
 * @method void setUrl(string $Url) 设置回调地址。最大支持1024个字节数。
 * @method string getCallbackType() 获取回调的类型。可选值：
- WeCom
- Http
- DingTalk
- Lark
 * @method void setCallbackType(string $CallbackType) 设置回调的类型。可选值：
- WeCom
- Http
- DingTalk
- Lark
 * @method string getMethod() 获取回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取请求头。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置请求头。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBody() 获取请求内容。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(string $Body) 设置请求内容。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取序号。
- 入参无效。
- 出参有效。
 * @method void setIndex(integer $Index) 设置序号。
- 入参无效。
- 出参有效。
 * @method string getNoticeContentId() 获取通知内容模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeContentId(string $NoticeContentId) 设置通知内容模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebCallbackId() 获取集成配置ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebCallbackId(string $WebCallbackId) 设置集成配置ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebCallback extends AbstractModel
{
    /**
     * @var string 回调地址。最大支持1024个字节数。
     */
    public $Url;

    /**
     * @var string 回调的类型。可选值：
- WeCom
- Http
- DingTalk
- Lark
     */
    public $CallbackType;

    /**
     * @var string 回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var array 请求头。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @var string 请求内容。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Body;

    /**
     * @var integer 序号。
- 入参无效。
- 出参有效。
     */
    public $Index;

    /**
     * @var string 通知内容模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeContentId;

    /**
     * @var string 集成配置ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebCallbackId;

    /**
     * @param string $Url 回调地址。最大支持1024个字节数。
     * @param string $CallbackType 回调的类型。可选值：
- WeCom
- Http
- DingTalk
- Lark
     * @param string $Method 回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers 请求头。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Body 请求内容。
注意：该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 序号。
- 入参无效。
- 出参有效。
     * @param string $NoticeContentId 通知内容模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebCallbackId 集成配置ID。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CallbackType",$param) and $param["CallbackType"] !== null) {
            $this->CallbackType = $param["CallbackType"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
        }
    }
}
