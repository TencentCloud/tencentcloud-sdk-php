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
namespace TencentCloud\Ca\V20230228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVerifyReport请求参数结构体
 *
 * @method string getApplyCustomerType() 获取申请者类型 1:个人，2:企业
 * @method void setApplyCustomerType(string $ApplyCustomerType) 设置申请者类型 1:个人，2:企业
 * @method string getApplyCustomerName() 获取申请企业 or 自然人名称
 * @method void setApplyCustomerName(string $ApplyCustomerName) 设置申请企业 or 自然人名称
 * @method string getApplyName() 获取验签申请经办人姓名
 * @method void setApplyName(string $ApplyName) 设置验签申请经办人姓名
 * @method string getApplyMobile() 获取验签申请经办人电话
 * @method void setApplyMobile(string $ApplyMobile) 设置验签申请经办人电话
 * @method string getFileId() 获取验签文件id
 * @method void setFileId(string $FileId) 设置验签文件id
 * @method string getApplyEmail() 获取验签申请经办人邮箱
 * @method void setApplyEmail(string $ApplyEmail) 设置验签申请经办人邮箱
 */
class CreateVerifyReportRequest extends AbstractModel
{
    /**
     * @var string 申请者类型 1:个人，2:企业
     */
    public $ApplyCustomerType;

    /**
     * @var string 申请企业 or 自然人名称
     */
    public $ApplyCustomerName;

    /**
     * @var string 验签申请经办人姓名
     */
    public $ApplyName;

    /**
     * @var string 验签申请经办人电话
     */
    public $ApplyMobile;

    /**
     * @var string 验签文件id
     */
    public $FileId;

    /**
     * @var string 验签申请经办人邮箱
     */
    public $ApplyEmail;

    /**
     * @param string $ApplyCustomerType 申请者类型 1:个人，2:企业
     * @param string $ApplyCustomerName 申请企业 or 自然人名称
     * @param string $ApplyName 验签申请经办人姓名
     * @param string $ApplyMobile 验签申请经办人电话
     * @param string $FileId 验签文件id
     * @param string $ApplyEmail 验签申请经办人邮箱
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
        if (array_key_exists("ApplyCustomerType",$param) and $param["ApplyCustomerType"] !== null) {
            $this->ApplyCustomerType = $param["ApplyCustomerType"];
        }

        if (array_key_exists("ApplyCustomerName",$param) and $param["ApplyCustomerName"] !== null) {
            $this->ApplyCustomerName = $param["ApplyCustomerName"];
        }

        if (array_key_exists("ApplyName",$param) and $param["ApplyName"] !== null) {
            $this->ApplyName = $param["ApplyName"];
        }

        if (array_key_exists("ApplyMobile",$param) and $param["ApplyMobile"] !== null) {
            $this->ApplyMobile = $param["ApplyMobile"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("ApplyEmail",$param) and $param["ApplyEmail"] !== null) {
            $this->ApplyEmail = $param["ApplyEmail"];
        }
    }
}
