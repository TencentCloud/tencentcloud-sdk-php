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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API描述
 *
 * @method string getApiId() 获取API的id
 * @method void setApiId(string $ApiId) 设置API的id
 * @method string getName() 获取API名称
 * @method void setName(string $Name) 设置API名称
 * @method string getAppId() 获取API所属应用的id
 * @method void setAppId(string $AppId) 设置API所属应用的id
 * @method string getWorkspaceId() 获取API所属的项目空间的id
 * @method void setWorkspaceId(string $WorkspaceId) 设置API所属的项目空间的id
 * @method string getPoiCode() 获取API所属目录的编码
 * @method void setPoiCode(string $PoiCode) 设置API所属目录的编码
 * @method integer getType() 获取 接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务
 * @method void setType(integer $Type) 设置 接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务
 * @method integer getDataAudit() 获取数据授权 0:否 1:是
 * @method void setDataAudit(integer $DataAudit) 设置数据授权 0:否 1:是
 * @method integer getApplyAudit() 获取是否需要申请 0:否 1:是
 * @method void setApplyAudit(integer $ApplyAudit) 设置是否需要申请 0:否 1:是
 * @method string getDescription() 获取API详情
 * @method void setDescription(string $Description) 设置API详情
 * @method string getAddress() 获取API地址
 * @method void setAddress(string $Address) 设置API地址
 * @method string getMethod() 获取请求方法类型
 * @method void setMethod(string $Method) 设置请求方法类型
 * @method integer getStatus() 获取API状态
 * @method void setStatus(integer $Status) 设置API状态
 * @method string getPreviewUrl() 获取API预览地址
 * @method void setPreviewUrl(string $PreviewUrl) 设置API预览地址
 * @method array getQueryParams() 获取query参数
 * @method void setQueryParams(array $QueryParams) 设置query参数
 * @method array getPathParams() 获取路径参数
 * @method void setPathParams(array $PathParams) 设置路径参数
 * @method array getRequestHeaders() 获取请求头
 * @method void setRequestHeaders(array $RequestHeaders) 设置请求头
 * @method array getResponseHeaders() 获取响应头
 * @method void setResponseHeaders(array $ResponseHeaders) 设置响应头
 * @method boolean getIsCommonSpace() 获取是否为公共空间接口
 * @method void setIsCommonSpace(boolean $IsCommonSpace) 设置是否为公共空间接口
 * @method string getBody() 获取请求体（base64编码）
 * @method void setBody(string $Body) 设置请求体（base64编码）
 * @method string getResponseBody() 获取响应体（base64编码）
 * @method void setResponseBody(string $ResponseBody) 设置响应体（base64编码）
 * @method integer getStyle() 获取接口方式 1.http 2消息通知服务
 * @method void setStyle(integer $Style) 设置接口方式 1.http 2消息通知服务
 */
class ApiInfo extends AbstractModel
{
    /**
     * @var string API的id
     */
    public $ApiId;

    /**
     * @var string API名称
     */
    public $Name;

    /**
     * @var string API所属应用的id
     */
    public $AppId;

    /**
     * @var string API所属的项目空间的id
     */
    public $WorkspaceId;

    /**
     * @var string API所属目录的编码
     */
    public $PoiCode;

    /**
     * @var integer  接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务
     */
    public $Type;

    /**
     * @var integer 数据授权 0:否 1:是
     */
    public $DataAudit;

    /**
     * @var integer 是否需要申请 0:否 1:是
     */
    public $ApplyAudit;

    /**
     * @var string API详情
     */
    public $Description;

    /**
     * @var string API地址
     */
    public $Address;

    /**
     * @var string 请求方法类型
     */
    public $Method;

    /**
     * @var integer API状态
     */
    public $Status;

    /**
     * @var string API预览地址
     */
    public $PreviewUrl;

    /**
     * @var array query参数
     */
    public $QueryParams;

    /**
     * @var array 路径参数
     */
    public $PathParams;

    /**
     * @var array 请求头
     */
    public $RequestHeaders;

    /**
     * @var array 响应头
     */
    public $ResponseHeaders;

    /**
     * @var boolean 是否为公共空间接口
     */
    public $IsCommonSpace;

    /**
     * @var string 请求体（base64编码）
     */
    public $Body;

    /**
     * @var string 响应体（base64编码）
     */
    public $ResponseBody;

    /**
     * @var integer 接口方式 1.http 2消息通知服务
     */
    public $Style;

    /**
     * @param string $ApiId API的id
     * @param string $Name API名称
     * @param string $AppId API所属应用的id
     * @param string $WorkspaceId API所属的项目空间的id
     * @param string $PoiCode API所属目录的编码
     * @param integer $Type  接口分类0. 其他服务 1. IOT服务 2. 空间服务 3.微应用服务 4.场景服务 5.AI算法服务 6.任务算法服务 7.第三方服务
     * @param integer $DataAudit 数据授权 0:否 1:是
     * @param integer $ApplyAudit 是否需要申请 0:否 1:是
     * @param string $Description API详情
     * @param string $Address API地址
     * @param string $Method 请求方法类型
     * @param integer $Status API状态
     * @param string $PreviewUrl API预览地址
     * @param array $QueryParams query参数
     * @param array $PathParams 路径参数
     * @param array $RequestHeaders 请求头
     * @param array $ResponseHeaders 响应头
     * @param boolean $IsCommonSpace 是否为公共空间接口
     * @param string $Body 请求体（base64编码）
     * @param string $ResponseBody 响应体（base64编码）
     * @param integer $Style 接口方式 1.http 2消息通知服务
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("PoiCode",$param) and $param["PoiCode"] !== null) {
            $this->PoiCode = $param["PoiCode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DataAudit",$param) and $param["DataAudit"] !== null) {
            $this->DataAudit = $param["DataAudit"];
        }

        if (array_key_exists("ApplyAudit",$param) and $param["ApplyAudit"] !== null) {
            $this->ApplyAudit = $param["ApplyAudit"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("QueryParams",$param) and $param["QueryParams"] !== null) {
            $this->QueryParams = [];
            foreach ($param["QueryParams"] as $key => $value){
                $obj = new ApiContent();
                $obj->deserialize($value);
                array_push($this->QueryParams, $obj);
            }
        }

        if (array_key_exists("PathParams",$param) and $param["PathParams"] !== null) {
            $this->PathParams = [];
            foreach ($param["PathParams"] as $key => $value){
                $obj = new ApiContent();
                $obj->deserialize($value);
                array_push($this->PathParams, $obj);
            }
        }

        if (array_key_exists("RequestHeaders",$param) and $param["RequestHeaders"] !== null) {
            $this->RequestHeaders = [];
            foreach ($param["RequestHeaders"] as $key => $value){
                $obj = new ApiContent();
                $obj->deserialize($value);
                array_push($this->RequestHeaders, $obj);
            }
        }

        if (array_key_exists("ResponseHeaders",$param) and $param["ResponseHeaders"] !== null) {
            $this->ResponseHeaders = [];
            foreach ($param["ResponseHeaders"] as $key => $value){
                $obj = new ApiContent();
                $obj->deserialize($value);
                array_push($this->ResponseHeaders, $obj);
            }
        }

        if (array_key_exists("IsCommonSpace",$param) and $param["IsCommonSpace"] !== null) {
            $this->IsCommonSpace = $param["IsCommonSpace"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("ResponseBody",$param) and $param["ResponseBody"] !== null) {
            $this->ResponseBody = $param["ResponseBody"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
