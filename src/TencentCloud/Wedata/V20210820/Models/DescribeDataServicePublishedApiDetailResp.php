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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询数据服务API的发布态信息详情出参
 *
 * @method string getApiName() 获取服务Api名称
 * @method void setApiName(string $ApiName) 设置服务Api名称
 * @method string getPathUrl() 获取服务请求Path
 * @method void setPathUrl(string $PathUrl) 设置服务请求Path
 * @method string getOwnerName() 获取服务责任人名称
 * @method void setOwnerName(string $OwnerName) 设置服务责任人名称
 * @method string getRequestType() 获取服务请求方式
 * @method void setRequestType(string $RequestType) 设置服务请求方式
 * @method string getApiTagNames() 获取服务标签名称集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiTagNames(string $ApiTagNames) 设置服务标签名称集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiDescription() 获取服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiDescription(string $ApiDescription) 设置服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestExample() 获取服务请求返回示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestExample(string $RequestExample) 设置服务请求返回示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestSuccess() 获取服务请求成功返回示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestSuccess(string $RequestSuccess) 设置服务请求成功返回示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestError() 获取服务请求失败返回示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestError(string $RequestError) 设置服务请求失败返回示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRequestParam() 获取服务请求参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestParam(array $RequestParam) 设置服务请求参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResponseParam() 获取服务响应参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseParam(array $ResponseParam) 设置服务响应参数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxAllowQps() 获取最大qps
 * @method void setMaxAllowQps(integer $MaxAllowQps) 设置最大qps
 * @method integer getMaxAllowPageSize() 获取最大记录数
 * @method void setMaxAllowPageSize(integer $MaxAllowPageSize) 设置最大记录数
 * @method integer getTimeoutPeriod() 获取超时时间，单位ms
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) 设置超时时间，单位ms
 * @method string getApiId() 获取ApiId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置ApiId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthType() 获取0:免认证 1:应用认证
 * @method void setAuthType(integer $AuthType) 设置0:免认证 1:应用认证
 * @method string getGatewayApiUrl() 获取请求地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayApiUrl(string $GatewayApiUrl) 设置请求地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApiStatus() 获取服务Api状态 1:已上线  3:已下线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiStatus(integer $ApiStatus) 设置服务Api状态 1:已上线  3:已下线
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDataServicePublishedApiDetailResp extends AbstractModel
{
    /**
     * @var string 服务Api名称
     */
    public $ApiName;

    /**
     * @var string 服务请求Path
     */
    public $PathUrl;

    /**
     * @var string 服务责任人名称
     */
    public $OwnerName;

    /**
     * @var string 服务请求方式
     */
    public $RequestType;

    /**
     * @var string 服务标签名称集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiTagNames;

    /**
     * @var string 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiDescription;

    /**
     * @var string 服务请求返回示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestExample;

    /**
     * @var string 服务请求成功返回示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestSuccess;

    /**
     * @var string 服务请求失败返回示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestError;

    /**
     * @var array 服务请求参数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestParam;

    /**
     * @var array 服务响应参数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseParam;

    /**
     * @var integer 最大qps
     */
    public $MaxAllowQps;

    /**
     * @var integer 最大记录数
     */
    public $MaxAllowPageSize;

    /**
     * @var integer 超时时间，单位ms
     */
    public $TimeoutPeriod;

    /**
     * @var string ApiId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var integer 0:免认证 1:应用认证
     */
    public $AuthType;

    /**
     * @var string 请求地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayApiUrl;

    /**
     * @var integer 服务Api状态 1:已上线  3:已下线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiStatus;

    /**
     * @param string $ApiName 服务Api名称
     * @param string $PathUrl 服务请求Path
     * @param string $OwnerName 服务责任人名称
     * @param string $RequestType 服务请求方式
     * @param string $ApiTagNames 服务标签名称集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiDescription 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestExample 服务请求返回示例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestSuccess 服务请求成功返回示例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestError 服务请求失败返回示例
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RequestParam 服务请求参数列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResponseParam 服务响应参数列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxAllowQps 最大qps
     * @param integer $MaxAllowPageSize 最大记录数
     * @param integer $TimeoutPeriod 超时时间，单位ms
     * @param string $ApiId ApiId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthType 0:免认证 1:应用认证
     * @param string $GatewayApiUrl 请求地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApiStatus 服务Api状态 1:已上线  3:已下线
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
        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("PathUrl",$param) and $param["PathUrl"] !== null) {
            $this->PathUrl = $param["PathUrl"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }

        if (array_key_exists("ApiTagNames",$param) and $param["ApiTagNames"] !== null) {
            $this->ApiTagNames = $param["ApiTagNames"];
        }

        if (array_key_exists("ApiDescription",$param) and $param["ApiDescription"] !== null) {
            $this->ApiDescription = $param["ApiDescription"];
        }

        if (array_key_exists("RequestExample",$param) and $param["RequestExample"] !== null) {
            $this->RequestExample = $param["RequestExample"];
        }

        if (array_key_exists("RequestSuccess",$param) and $param["RequestSuccess"] !== null) {
            $this->RequestSuccess = $param["RequestSuccess"];
        }

        if (array_key_exists("RequestError",$param) and $param["RequestError"] !== null) {
            $this->RequestError = $param["RequestError"];
        }

        if (array_key_exists("RequestParam",$param) and $param["RequestParam"] !== null) {
            $this->RequestParam = [];
            foreach ($param["RequestParam"] as $key => $value){
                $obj = new DataServiceRequestParam();
                $obj->deserialize($value);
                array_push($this->RequestParam, $obj);
            }
        }

        if (array_key_exists("ResponseParam",$param) and $param["ResponseParam"] !== null) {
            $this->ResponseParam = [];
            foreach ($param["ResponseParam"] as $key => $value){
                $obj = new DataServiceResponseParam();
                $obj->deserialize($value);
                array_push($this->ResponseParam, $obj);
            }
        }

        if (array_key_exists("MaxAllowQps",$param) and $param["MaxAllowQps"] !== null) {
            $this->MaxAllowQps = $param["MaxAllowQps"];
        }

        if (array_key_exists("MaxAllowPageSize",$param) and $param["MaxAllowPageSize"] !== null) {
            $this->MaxAllowPageSize = $param["MaxAllowPageSize"];
        }

        if (array_key_exists("TimeoutPeriod",$param) and $param["TimeoutPeriod"] !== null) {
            $this->TimeoutPeriod = $param["TimeoutPeriod"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("GatewayApiUrl",$param) and $param["GatewayApiUrl"] !== null) {
            $this->GatewayApiUrl = $param["GatewayApiUrl"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }
    }
}
