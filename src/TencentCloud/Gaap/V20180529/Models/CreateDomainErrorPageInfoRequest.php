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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomainErrorPageInfo请求参数结构体
 *
 * @method string getListenerId() 获取<p>监听器ID</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器ID</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method array getErrorNos() 获取<p>原始错误码</p>
 * @method void setErrorNos(array $ErrorNos) 设置<p>原始错误码</p>
 * @method string getBody() 获取<p>新的响应包体</p>
 * @method void setBody(string $Body) 设置<p>新的响应包体</p>
 * @method integer getNewErrorNo() 获取<p>新错误码</p>
 * @method void setNewErrorNo(integer $NewErrorNo) 设置<p>新错误码</p>
 * @method array getClearHeaders() 获取<p>需要删除的响应头</p>
 * @method void setClearHeaders(array $ClearHeaders) 设置<p>需要删除的响应头</p>
 * @method array getSetHeaders() 获取<p>需要设置的响应头</p>
 * @method void setSetHeaders(array $SetHeaders) 设置<p>需要设置的响应头</p>
 */
class CreateDomainErrorPageInfoRequest extends AbstractModel
{
    /**
     * @var string <p>监听器ID</p>
     */
    public $ListenerId;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var array <p>原始错误码</p>
     */
    public $ErrorNos;

    /**
     * @var string <p>新的响应包体</p>
     */
    public $Body;

    /**
     * @var integer <p>新错误码</p>
     */
    public $NewErrorNo;

    /**
     * @var array <p>需要删除的响应头</p>
     */
    public $ClearHeaders;

    /**
     * @var array <p>需要设置的响应头</p>
     */
    public $SetHeaders;

    /**
     * @param string $ListenerId <p>监听器ID</p>
     * @param string $Domain <p>域名</p>
     * @param array $ErrorNos <p>原始错误码</p>
     * @param string $Body <p>新的响应包体</p>
     * @param integer $NewErrorNo <p>新错误码</p>
     * @param array $ClearHeaders <p>需要删除的响应头</p>
     * @param array $SetHeaders <p>需要设置的响应头</p>
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ErrorNos",$param) and $param["ErrorNos"] !== null) {
            $this->ErrorNos = $param["ErrorNos"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
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
    }
}
