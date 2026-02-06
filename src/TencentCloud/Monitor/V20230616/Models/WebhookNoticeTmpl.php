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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知自定义Webhook内容模板
 *
 * @method string getBody() 获取请求体
 * @method void setBody(string $Body) 设置请求体
 * @method string getBodyContentType() 获取请求体的类型，非必填、默认为JSON
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBodyContentType(string $BodyContentType) 设置请求体的类型，非必填、默认为JSON
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取请求头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置请求头
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebhookNoticeTmpl extends AbstractModel
{
    /**
     * @var string 请求体
     */
    public $Body;

    /**
     * @var string 请求体的类型，非必填、默认为JSON
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BodyContentType;

    /**
     * @var array 请求头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @param string $Body 请求体
     * @param string $BodyContentType 请求体的类型，非必填、默认为JSON
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers 请求头
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("BodyContentType",$param) and $param["BodyContentType"] !== null) {
            $this->BodyContentType = $param["BodyContentType"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new WebhookNoticeTmplHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
