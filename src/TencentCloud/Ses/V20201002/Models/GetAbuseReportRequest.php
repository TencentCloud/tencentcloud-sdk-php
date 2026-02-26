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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAbuseReport请求参数结构体
 *
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数量（默认为1000）
 * @method void setLimit(integer $Limit) 设置限制数量（默认为1000）
 * @method string getFromDomain() 获取发信域名
 * @method void setFromDomain(string $FromDomain) 设置发信域名
 * @method string getFromAddress() 获取发信地址
 * @method void setFromAddress(string $FromAddress) 设置发信地址
 * @method string getMta() 获取收信域名
 * @method void setMta(string $Mta) 设置收信域名
 * @method string getToAddress() 获取收信地址
 * @method void setToAddress(string $ToAddress) 设置收信地址
 * @method string getTemplateId() 获取模版id
 * @method void setTemplateId(string $TemplateId) 设置模版id
 */
class GetAbuseReportRequest extends AbstractModel
{
    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数量（默认为1000）
     */
    public $Limit;

    /**
     * @var string 发信域名
     */
    public $FromDomain;

    /**
     * @var string 发信地址
     */
    public $FromAddress;

    /**
     * @var string 收信域名
     */
    public $Mta;

    /**
     * @var string 收信地址
     */
    public $ToAddress;

    /**
     * @var string 模版id
     */
    public $TemplateId;

    /**
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数量（默认为1000）
     * @param string $FromDomain 发信域名
     * @param string $FromAddress 发信地址
     * @param string $Mta 收信域名
     * @param string $ToAddress 收信地址
     * @param string $TemplateId 模版id
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FromDomain",$param) and $param["FromDomain"] !== null) {
            $this->FromDomain = $param["FromDomain"];
        }

        if (array_key_exists("FromAddress",$param) and $param["FromAddress"] !== null) {
            $this->FromAddress = $param["FromAddress"];
        }

        if (array_key_exists("Mta",$param) and $param["Mta"] !== null) {
            $this->Mta = $param["Mta"];
        }

        if (array_key_exists("ToAddress",$param) and $param["ToAddress"] !== null) {
            $this->ToAddress = $param["ToAddress"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
