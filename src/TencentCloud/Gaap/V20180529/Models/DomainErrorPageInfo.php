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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名的定制错误响应配置
 *
 * @method string getErrorPageId() 获取错误定制响应的配置ID
 * @method void setErrorPageId(string $ErrorPageId) 设置错误定制响应的配置ID
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getErrorNos() 获取原始错误码
 * @method void setErrorNos(array $ErrorNos) 设置原始错误码
 * @method integer getNewErrorNo() 获取新的错误码
 * @method void setNewErrorNo(integer $NewErrorNo) 设置新的错误码
 * @method array getClearHeaders() 获取需要清理的响应头
 * @method void setClearHeaders(array $ClearHeaders) 设置需要清理的响应头
 * @method array getSetHeaders() 获取需要设置的响应头
 * @method void setSetHeaders(array $SetHeaders) 设置需要设置的响应头
 * @method string getBody() 获取设置的响应体(不包括 HTTP头)
 * @method void setBody(string $Body) 设置设置的响应体(不包括 HTTP头)
 * @method integer getStatus() 获取规则状态,0为成功
 * @method void setStatus(integer $Status) 设置规则状态,0为成功
 */
class DomainErrorPageInfo extends AbstractModel
{
    /**
     * @var string 错误定制响应的配置ID
     */
    public $ErrorPageId;

    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 原始错误码
     */
    public $ErrorNos;

    /**
     * @var integer 新的错误码
     */
    public $NewErrorNo;

    /**
     * @var array 需要清理的响应头
     */
    public $ClearHeaders;

    /**
     * @var array 需要设置的响应头
     */
    public $SetHeaders;

    /**
     * @var string 设置的响应体(不包括 HTTP头)
     */
    public $Body;

    /**
     * @var integer 规则状态,0为成功
     */
    public $Status;

    /**
     * @param string $ErrorPageId 错误定制响应的配置ID
     * @param string $ListenerId 监听器ID
     * @param string $Domain 域名
     * @param array $ErrorNos 原始错误码
     * @param integer $NewErrorNo 新的错误码
     * @param array $ClearHeaders 需要清理的响应头
     * @param array $SetHeaders 需要设置的响应头
     * @param string $Body 设置的响应体(不包括 HTTP头)
     * @param integer $Status 规则状态,0为成功
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
        if (array_key_exists("ErrorPageId",$param) and $param["ErrorPageId"] !== null) {
            $this->ErrorPageId = $param["ErrorPageId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ErrorNos",$param) and $param["ErrorNos"] !== null) {
            $this->ErrorNos = $param["ErrorNos"];
        }

        if (array_key_exists("NewErrorNo",$param) and $param["NewErrorNo"] !== null) {
            $this->NewErrorNo = $param["NewErrorNo"];
        }

        if (array_key_exists("ClearHeaders",$param) and $param["ClearHeaders"] !== null) {
            $this->ClearHeaders = $param["ClearHeaders"];
        }

        if (array_key_exists("SetHeaders",$param) and $param["SetHeaders"] !== null) {
            $this->SetHeaders = [];
            foreach ($param["SetHeaders"] as $key => $value){
                $obj = new HttpHeaderParam();
                $obj->deserialize($value);
                array_push($this->SetHeaders, $obj);
            }
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
