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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API数据源连接配置
 *
 * @method string getFieldsJsonData() 获取API数据源解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldsJsonData(string $FieldsJsonData) 设置API数据源解析结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConnectionType() 获取连接类型1:直连 2:抽取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionType(integer $ConnectionType) 设置连接类型1:直连 2:抽取
注意：此字段可能返回 null，表示取不到有效值。
 * @method FrequencyConfig getFrequencyConfig() 获取抽取频率配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequencyConfig(FrequencyConfig $FrequencyConfig) 设置抽取频率配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取请求URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置请求URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRequestMethod() 获取1:GET 2:POST
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestMethod(integer $RequestMethod) 设置1:GET 2:POST
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestHeader() 获取请求头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestParams() 获取请求参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestParams(string $RequestParams) 设置请求参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestBody() 获取请求体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestBody(string $RequestBody) 设置请求体
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthorizationType() 获取1: 无鉴权 2:BASIC_AUTH
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationType(integer $AuthorizationType) 设置1: 无鉴权 2:BASIC_AUTH
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableId() 获取表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(integer $TableId) 设置表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJsonPathDbNameMap() 获取路径DbName映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJsonPathDbNameMap(string $JsonPathDbNameMap) 设置路径DbName映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthApi() 获取鉴权API
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthApi(string $AuthApi) 设置鉴权API
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppKey() 获取应用Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppKey(string $AppKey) 设置应用Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppSecret() 获取应用密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppSecret(string $AppSecret) 设置应用密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取数据密钥Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置数据密钥Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretIv() 获取数据密钥初始化向量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretIv(string $SecretIv) 设置数据密钥初始化向量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiDatasourceConfig extends AbstractModel
{
    /**
     * @var string API数据源解析结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldsJsonData;

    /**
     * @var integer 连接类型1:直连 2:抽取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionType;

    /**
     * @var FrequencyConfig 抽取频率配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrequencyConfig;

    /**
     * @var string 请求URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var integer 1:GET 2:POST
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestMethod;

    /**
     * @var string 请求头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestHeader;

    /**
     * @var string 请求参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestParams;

    /**
     * @var string 请求体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestBody;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var integer 1: 无鉴权 2:BASIC_AUTH
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationType;

    /**
     * @var integer 表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 路径DbName映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JsonPathDbNameMap;

    /**
     * @var string 鉴权API
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthApi;

    /**
     * @var string 应用Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppKey;

    /**
     * @var string 应用密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppSecret;

    /**
     * @var string 数据密钥Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string 数据密钥初始化向量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretIv;

    /**
     * @param string $FieldsJsonData API数据源解析结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConnectionType 连接类型1:直连 2:抽取
注意：此字段可能返回 null，表示取不到有效值。
     * @param FrequencyConfig $FrequencyConfig 抽取频率配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 请求URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RequestMethod 1:GET 2:POST
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestHeader 请求头
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestParams 请求参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestBody 请求体
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthorizationType 1: 无鉴权 2:BASIC_AUTH
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableId 表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JsonPathDbNameMap 路径DbName映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthApi 鉴权API
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppKey 应用Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppSecret 应用密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey 数据密钥Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretIv 数据密钥初始化向量
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
        if (array_key_exists("FieldsJsonData",$param) and $param["FieldsJsonData"] !== null) {
            $this->FieldsJsonData = $param["FieldsJsonData"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("FrequencyConfig",$param) and $param["FrequencyConfig"] !== null) {
            $this->FrequencyConfig = new FrequencyConfig();
            $this->FrequencyConfig->deserialize($param["FrequencyConfig"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }

        if (array_key_exists("RequestParams",$param) and $param["RequestParams"] !== null) {
            $this->RequestParams = $param["RequestParams"];
        }

        if (array_key_exists("RequestBody",$param) and $param["RequestBody"] !== null) {
            $this->RequestBody = $param["RequestBody"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AuthorizationType",$param) and $param["AuthorizationType"] !== null) {
            $this->AuthorizationType = $param["AuthorizationType"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("JsonPathDbNameMap",$param) and $param["JsonPathDbNameMap"] !== null) {
            $this->JsonPathDbNameMap = $param["JsonPathDbNameMap"];
        }

        if (array_key_exists("AuthApi",$param) and $param["AuthApi"] !== null) {
            $this->AuthApi = $param["AuthApi"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("AppSecret",$param) and $param["AppSecret"] !== null) {
            $this->AppSecret = $param["AppSecret"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SecretIv",$param) and $param["SecretIv"] !== null) {
            $this->SecretIv = $param["SecretIv"];
        }
    }
}
