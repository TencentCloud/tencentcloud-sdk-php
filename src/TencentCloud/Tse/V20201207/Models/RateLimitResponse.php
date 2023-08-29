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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关限流插件自定义响应
 *
 * @method string getBody() 获取自定义响应体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(string $Body) 设置自定义响应体
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取Headers
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置Headers
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHttpStatus() 获取http状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpStatus(integer $HttpStatus) 设置http状态码
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitResponse extends AbstractModel
{
    /**
     * @var string 自定义响应体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Body;

    /**
     * @var array Headers
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @var integer http状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpStatus;

    /**
     * @param string $Body 自定义响应体
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers Headers
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HttpStatus http状态码
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

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new KVMapping();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("HttpStatus",$param) and $param["HttpStatus"] !== null) {
            $this->HttpStatus = $param["HttpStatus"];
        }
    }
}
