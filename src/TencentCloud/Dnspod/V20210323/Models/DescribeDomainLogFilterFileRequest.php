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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainLogFilterFile请求参数结构体
 *
 * @method string getDomain() 获取要获取操作日志的域名
 * @method void setDomain(string $Domain) 设置要获取操作日志的域名
 * @method integer getDomainId() 获取要获取操作日志的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId
 * @method void setDomainId(integer $DomainId) 设置要获取操作日志的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId
 * @method string getKeyword() 获取通过关键字搜索，支持搜索字段：账户 UIN、操作 IP、操作内容
 * @method void setKeyword(string $Keyword) 设置通过关键字搜索，支持搜索字段：账户 UIN、操作 IP、操作内容
 * @method string getOperateBegin() 获取操作时间范围起始时间(仅支持近6个月的日志查询)
 * @method void setOperateBegin(string $OperateBegin) 设置操作时间范围起始时间(仅支持近6个月的日志查询)
 * @method string getOperateEnd() 获取操作时间范围截止时间(仅支持近6个月的日志查询)
 * @method void setOperateEnd(string $OperateEnd) 设置操作时间范围截止时间(仅支持近6个月的日志查询)
 * @method integer getOperateUin() 获取操作账号 UIN 精确匹配
 * @method void setOperateUin(integer $OperateUin) 设置操作账号 UIN 精确匹配
 * @method string getOperateClientIP() 获取操作 IP 精确匹配
 * @method void setOperateClientIP(string $OperateClientIP) 设置操作 IP 精确匹配
 * @method string getOperateContent() 获取操作内容 模糊匹配
 * @method void setOperateContent(string $OperateContent) 设置操作内容 模糊匹配
 */
class DescribeDomainLogFilterFileRequest extends AbstractModel
{
    /**
     * @var string 要获取操作日志的域名
     */
    public $Domain;

    /**
     * @var integer 要获取操作日志的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId
     */
    public $DomainId;

    /**
     * @var string 通过关键字搜索，支持搜索字段：账户 UIN、操作 IP、操作内容
     */
    public $Keyword;

    /**
     * @var string 操作时间范围起始时间(仅支持近6个月的日志查询)
     */
    public $OperateBegin;

    /**
     * @var string 操作时间范围截止时间(仅支持近6个月的日志查询)
     */
    public $OperateEnd;

    /**
     * @var integer 操作账号 UIN 精确匹配
     */
    public $OperateUin;

    /**
     * @var string 操作 IP 精确匹配
     */
    public $OperateClientIP;

    /**
     * @var string 操作内容 模糊匹配
     */
    public $OperateContent;

    /**
     * @param string $Domain 要获取操作日志的域名
     * @param integer $DomainId 要获取操作日志的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId
     * @param string $Keyword 通过关键字搜索，支持搜索字段：账户 UIN、操作 IP、操作内容
     * @param string $OperateBegin 操作时间范围起始时间(仅支持近6个月的日志查询)
     * @param string $OperateEnd 操作时间范围截止时间(仅支持近6个月的日志查询)
     * @param integer $OperateUin 操作账号 UIN 精确匹配
     * @param string $OperateClientIP 操作 IP 精确匹配
     * @param string $OperateContent 操作内容 模糊匹配
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("OperateBegin",$param) and $param["OperateBegin"] !== null) {
            $this->OperateBegin = $param["OperateBegin"];
        }

        if (array_key_exists("OperateEnd",$param) and $param["OperateEnd"] !== null) {
            $this->OperateEnd = $param["OperateEnd"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("OperateClientIP",$param) and $param["OperateClientIP"] !== null) {
            $this->OperateClientIP = $param["OperateClientIP"];
        }

        if (array_key_exists("OperateContent",$param) and $param["OperateContent"] !== null) {
            $this->OperateContent = $param["OperateContent"];
        }
    }
}
