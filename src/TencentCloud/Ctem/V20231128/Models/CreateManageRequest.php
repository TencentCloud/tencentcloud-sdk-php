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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateManage请求参数结构体
 *
 * @method integer getCustomerId() 获取企业Id
 * @method void setCustomerId(integer $CustomerId) 设置企业Id
 * @method string getUrl() 获取Url
 * @method void setUrl(string $Url) 设置Url
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getScreenshot() 获取Screenshot
 * @method void setScreenshot(string $Screenshot) 设置Screenshot
 * @method integer getCode() 获取状态码
 * @method void setCode(integer $Code) 设置状态码
 * @method string getEnterpriseUid() 获取子公司
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司
 */
class CreateManageRequest extends AbstractModel
{
    /**
     * @var integer 企业Id
     */
    public $CustomerId;

    /**
     * @var string Url
     */
    public $Url;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string Screenshot
     */
    public $Screenshot;

    /**
     * @var integer 状态码
     */
    public $Code;

    /**
     * @var string 子公司
     */
    public $EnterpriseUid;

    /**
     * @param integer $CustomerId 企业Id
     * @param string $Url Url
     * @param string $Title 标题
     * @param string $Screenshot Screenshot
     * @param integer $Code 状态码
     * @param string $EnterpriseUid 子公司
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = $param["Screenshot"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }
    }
}
