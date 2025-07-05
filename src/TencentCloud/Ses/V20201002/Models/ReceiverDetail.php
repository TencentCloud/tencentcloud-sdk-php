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
 * 收件人列表详情
 *
 * @method string getEmail() 获取收件人地址
 * @method void setEmail(string $Email) 设置收件人地址
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getTemplateData() 获取模板参数
 * @method void setTemplateData(string $TemplateData) 设置模板参数
 * @method string getReason() 获取无效原因
 * @method void setReason(string $Reason) 设置无效原因
 * @method integer getStatus() 获取1:有效，2:无效
 * @method void setStatus(integer $Status) 设置1:有效，2:无效
 * @method integer getEmailId() 获取收件人地址id
 * @method void setEmailId(integer $EmailId) 设置收件人地址id
 */
class ReceiverDetail extends AbstractModel
{
    /**
     * @var string 收件人地址
     */
    public $Email;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 模板参数
     */
    public $TemplateData;

    /**
     * @var string 无效原因
     */
    public $Reason;

    /**
     * @var integer 1:有效，2:无效
     */
    public $Status;

    /**
     * @var integer 收件人地址id
     */
    public $EmailId;

    /**
     * @param string $Email 收件人地址
     * @param string $CreateTime 创建时间
     * @param string $TemplateData 模板参数
     * @param string $Reason 无效原因
     * @param integer $Status 1:有效，2:无效
     * @param integer $EmailId 收件人地址id
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
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TemplateData",$param) and $param["TemplateData"] !== null) {
            $this->TemplateData = $param["TemplateData"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EmailId",$param) and $param["EmailId"] !== null) {
            $this->EmailId = $param["EmailId"];
        }
    }
}
