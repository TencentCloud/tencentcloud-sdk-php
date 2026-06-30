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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询数据服务API的发布态信息详情出参
 *
 * @method string getApiName() 获取<p>服务Api名称</p>
 * @method void setApiName(string $ApiName) 设置<p>服务Api名称</p>
 * @method string getPathUrl() 获取<p>服务请求Path</p>
 * @method void setPathUrl(string $PathUrl) 设置<p>服务请求Path</p>
 * @method string getOwnerName() 获取<p>服务责任人名称</p>
 * @method void setOwnerName(string $OwnerName) 设置<p>服务责任人名称</p>
 * @method string getRequestType() 获取<p>服务请求方式</p>
 * @method void setRequestType(string $RequestType) 设置<p>服务请求方式</p>
 * @method string getApiTagNames() 获取<p>服务标签名称集合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiTagNames(string $ApiTagNames) 设置<p>服务标签名称集合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiDescription() 获取<p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiDescription(string $ApiDescription) 设置<p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestExample() 获取<p>服务请求返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestExample(string $RequestExample) 设置<p>服务请求返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestSuccess() 获取<p>服务请求成功返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestSuccess(string $RequestSuccess) 设置<p>服务请求成功返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestError() 获取<p>服务请求失败返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestError(string $RequestError) 设置<p>服务请求失败返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRequestParam() 获取<p>服务请求参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestParam(array $RequestParam) 设置<p>服务请求参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResponseParam() 获取<p>服务响应参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseParam(array $ResponseParam) 设置<p>服务响应参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxAllowQps() 获取<p>最大qps</p>
 * @method void setMaxAllowQps(integer $MaxAllowQps) 设置<p>最大qps</p>
 * @method integer getMaxAllowPageSize() 获取<p>最大记录数</p>
 * @method void setMaxAllowPageSize(integer $MaxAllowPageSize) 设置<p>最大记录数</p>
 * @method integer getTimeoutPeriod() 获取<p>超时时间，单位ms</p>
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) 设置<p>超时时间，单位ms</p>
 * @method string getApiId() 获取<p>ApiId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置<p>ApiId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthType() 获取<p>认证方式</p><p>枚举值：</p><ul><li>0： 免认证</li><li>1： 应用认证</li><li>2： OAuth2.0认证</li></ul>
 * @method void setAuthType(integer $AuthType) 设置<p>认证方式</p><p>枚举值：</p><ul><li>0： 免认证</li><li>1： 应用认证</li><li>2： OAuth2.0认证</li></ul>
 * @method string getGatewayApiUrl() 获取<p>请求地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayApiUrl(string $GatewayApiUrl) 设置<p>请求地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApiStatus() 获取<p>服务Api状态 1:已上线  3:已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiStatus(integer $ApiStatus) 设置<p>服务Api状态 1:已上线  3:已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnablePage() 获取<p>是否开启分页</p><p>枚举值：</p><ul><li>0： 开启分页</li><li>1： 未开启</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnablePage(integer $EnablePage) 设置<p>是否开启分页</p><p>枚举值：</p><ul><li>0： 开启分页</li><li>1： 未开启</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDataServicePublishedApiDetailResp extends AbstractModel
{
    /**
     * @var string <p>服务Api名称</p>
     */
    public $ApiName;

    /**
     * @var string <p>服务请求Path</p>
     */
    public $PathUrl;

    /**
     * @var string <p>服务责任人名称</p>
     */
    public $OwnerName;

    /**
     * @var string <p>服务请求方式</p>
     */
    public $RequestType;

    /**
     * @var string <p>服务标签名称集合</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiTagNames;

    /**
     * @var string <p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiDescription;

    /**
     * @var string <p>服务请求返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestExample;

    /**
     * @var string <p>服务请求成功返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestSuccess;

    /**
     * @var string <p>服务请求失败返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestError;

    /**
     * @var array <p>服务请求参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestParam;

    /**
     * @var array <p>服务响应参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseParam;

    /**
     * @var integer <p>最大qps</p>
     */
    public $MaxAllowQps;

    /**
     * @var integer <p>最大记录数</p>
     */
    public $MaxAllowPageSize;

    /**
     * @var integer <p>超时时间，单位ms</p>
     */
    public $TimeoutPeriod;

    /**
     * @var string <p>ApiId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var integer <p>认证方式</p><p>枚举值：</p><ul><li>0： 免认证</li><li>1： 应用认证</li><li>2： OAuth2.0认证</li></ul>
     */
    public $AuthType;

    /**
     * @var string <p>请求地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayApiUrl;

    /**
     * @var integer <p>服务Api状态 1:已上线  3:已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiStatus;

    /**
     * @var integer <p>是否开启分页</p><p>枚举值：</p><ul><li>0： 开启分页</li><li>1： 未开启</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnablePage;

    /**
     * @param string $ApiName <p>服务Api名称</p>
     * @param string $PathUrl <p>服务请求Path</p>
     * @param string $OwnerName <p>服务责任人名称</p>
     * @param string $RequestType <p>服务请求方式</p>
     * @param string $ApiTagNames <p>服务标签名称集合</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiDescription <p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestExample <p>服务请求返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestSuccess <p>服务请求成功返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestError <p>服务请求失败返回示例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RequestParam <p>服务请求参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResponseParam <p>服务响应参数列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxAllowQps <p>最大qps</p>
     * @param integer $MaxAllowPageSize <p>最大记录数</p>
     * @param integer $TimeoutPeriod <p>超时时间，单位ms</p>
     * @param string $ApiId <p>ApiId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthType <p>认证方式</p><p>枚举值：</p><ul><li>0： 免认证</li><li>1： 应用认证</li><li>2： OAuth2.0认证</li></ul>
     * @param string $GatewayApiUrl <p>请求地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApiStatus <p>服务Api状态 1:已上线  3:已下线</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnablePage <p>是否开启分页</p><p>枚举值：</p><ul><li>0： 开启分页</li><li>1： 未开启</li></ul>
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

        if (array_key_exists("EnablePage",$param) and $param["EnablePage"] !== null) {
            $this->EnablePage = $param["EnablePage"];
        }
    }
}
