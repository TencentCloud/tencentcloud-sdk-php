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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 请求的API信息
 *
 * @method string getMethod() 获取请求方法，如GET/POST等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置请求方法，如GET/POST等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取请求地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置请求地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaderValues() 获取header参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderValues(array $HeaderValues) 设置header参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQueryValues() 获取入参Query
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryValues(array $QueryValues) 设置入参Query
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestPostBody() 获取Post请求的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestPostBody(string $RequestPostBody) 设置Post请求的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseBody() 获取返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseBody(string $ResponseBody) 设置返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResponseValues() 获取出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseValues(array $ResponseValues) 设置出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailMessage() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailMessage(string $FailMessage) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class InvokeAPI extends AbstractModel
{
    /**
     * @var string 请求方法，如GET/POST等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 请求地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var array header参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderValues;

    /**
     * @var array 入参Query
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryValues;

    /**
     * @var string Post请求的原始数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestPostBody;

    /**
     * @var string 返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseBody;

    /**
     * @var array 出参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseValues;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailMessage;

    /**
     * @param string $Method 请求方法，如GET/POST等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 请求地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HeaderValues header参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QueryValues 入参Query
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestPostBody Post请求的原始数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseBody 返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResponseValues 出参
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailMessage 异常信息
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("HeaderValues",$param) and $param["HeaderValues"] !== null) {
            $this->HeaderValues = [];
            foreach ($param["HeaderValues"] as $key => $value){
                $obj = new StrValue();
                $obj->deserialize($value);
                array_push($this->HeaderValues, $obj);
            }
        }

        if (array_key_exists("QueryValues",$param) and $param["QueryValues"] !== null) {
            $this->QueryValues = [];
            foreach ($param["QueryValues"] as $key => $value){
                $obj = new StrValue();
                $obj->deserialize($value);
                array_push($this->QueryValues, $obj);
            }
        }

        if (array_key_exists("RequestPostBody",$param) and $param["RequestPostBody"] !== null) {
            $this->RequestPostBody = $param["RequestPostBody"];
        }

        if (array_key_exists("ResponseBody",$param) and $param["ResponseBody"] !== null) {
            $this->ResponseBody = $param["ResponseBody"];
        }

        if (array_key_exists("ResponseValues",$param) and $param["ResponseValues"] !== null) {
            $this->ResponseValues = [];
            foreach ($param["ResponseValues"] as $key => $value){
                $obj = new ValueInfo();
                $obj->deserialize($value);
                array_push($this->ResponseValues, $obj);
            }
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }
    }
}
