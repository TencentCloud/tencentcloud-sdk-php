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
 * 回调地址
 *
 * @method string getCallbackType() 获取回调的类型。可选值：
- Http(自定义接口回调)
- WeCom(企业微信)
- DingTalk(钉钉)
- Lark(飞书)
 * @method void setCallbackType(string $CallbackType) 设置回调的类型。可选值：
- Http(自定义接口回调)
- WeCom(企业微信)
- DingTalk(钉钉)
- Lark(飞书)
 * @method string getUrl() 获取回调地址，最大支持1024个字节。
也可使用WebCallbackId引用集成配置中的URL，此时该字段请填写为空字符串。
 * @method void setUrl(string $Url) 设置回调地址，最大支持1024个字节。
也可使用WebCallbackId引用集成配置中的URL，此时该字段请填写为空字符串。
 * @method string getWebCallbackId() 获取集成配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/product/614/115229)获取集成配置ID
 * @method void setWebCallbackId(string $WebCallbackId) 设置集成配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/product/614/115229)获取集成配置ID
 * @method string getMethod() 获取回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选，其它回调方式无需填写。
 * @method void setMethod(string $Method) 设置回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选，其它回调方式无需填写。
 * @method string getNoticeContentId() 获取通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。
 * @method void setNoticeContentId(string $NoticeContentId) 设置通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。
 * @method integer getRemindType() 获取提醒类型。

0：不提醒；1：指定人；2：所有人
 * @method void setRemindType(integer $RemindType) 设置提醒类型。

0：不提醒；1：指定人；2：所有人
 * @method array getMobiles() 获取电话列表。
 * @method void setMobiles(array $Mobiles) 设置电话列表。
 * @method array getUserIds() 获取用户ID列表。
 * @method void setUserIds(array $UserIds) 设置用户ID列表。
 * @method array getHeaders() 获取该参数已废弃，请使用NoticeContentId。
 * @method void setHeaders(array $Headers) 设置该参数已废弃，请使用NoticeContentId。
 * @method string getBody() 获取该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(string $Body) 设置该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取序号。
- 入参无效。
- 出参有效。
 * @method void setIndex(integer $Index) 设置序号。
- 入参无效。
- 出参有效。
 */
class WebCallback extends AbstractModel
{
    /**
     * @var string 回调的类型。可选值：
- Http(自定义接口回调)
- WeCom(企业微信)
- DingTalk(钉钉)
- Lark(飞书)
     */
    public $CallbackType;

    /**
     * @var string 回调地址，最大支持1024个字节。
也可使用WebCallbackId引用集成配置中的URL，此时该字段请填写为空字符串。
     */
    public $Url;

    /**
     * @var string 集成配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/product/614/115229)获取集成配置ID
     */
    public $WebCallbackId;

    /**
     * @var string 回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选，其它回调方式无需填写。
     */
    public $Method;

    /**
     * @var string 通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。
     */
    public $NoticeContentId;

    /**
     * @var integer 提醒类型。

0：不提醒；1：指定人；2：所有人
     */
    public $RemindType;

    /**
     * @var array 电话列表。
     */
    public $Mobiles;

    /**
     * @var array 用户ID列表。
     */
    public $UserIds;

    /**
     * @var array 该参数已废弃，请使用NoticeContentId。
     * @deprecated
     */
    public $Headers;

    /**
     * @var string 该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Body;

    /**
     * @var integer 序号。
- 入参无效。
- 出参有效。
     */
    public $Index;

    /**
     * @param string $CallbackType 回调的类型。可选值：
- Http(自定义接口回调)
- WeCom(企业微信)
- DingTalk(钉钉)
- Lark(飞书)
     * @param string $Url 回调地址，最大支持1024个字节。
也可使用WebCallbackId引用集成配置中的URL，此时该字段请填写为空字符串。
     * @param string $WebCallbackId 集成配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/product/614/115229)获取集成配置ID
     * @param string $Method 回调方法。可选值：
- POST（默认值）
- PUT

注意：
- 参数CallbackType为Http时为必选，其它回调方式无需填写。
     * @param string $NoticeContentId 通知内容模板ID，使用Default-zh引用默认模板（中文），使用Default-en引用DefaultTemplate(English)。
     * @param integer $RemindType 提醒类型。

0：不提醒；1：指定人；2：所有人
     * @param array $Mobiles 电话列表。
     * @param array $UserIds 用户ID列表。
     * @param array $Headers 该参数已废弃，请使用NoticeContentId。
     * @param string $Body 该参数已废弃，请使用NoticeContentId。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 序号。
- 入参无效。
- 出参有效。
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
        if (array_key_exists("CallbackType",$param) and $param["CallbackType"] !== null) {
            $this->CallbackType = $param["CallbackType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("RemindType",$param) and $param["RemindType"] !== null) {
            $this->RemindType = $param["RemindType"];
        }

        if (array_key_exists("Mobiles",$param) and $param["Mobiles"] !== null) {
            $this->Mobiles = $param["Mobiles"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
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
    }
}
