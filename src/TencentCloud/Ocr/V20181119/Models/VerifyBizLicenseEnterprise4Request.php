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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyBizLicenseEnterprise4请求参数结构体
 *
 * @method string getCreditCode() 获取<p>统一社会信用代码</p>
 * @method void setCreditCode(string $CreditCode) 设置<p>统一社会信用代码</p>
 * @method string getEntName() 获取<p>企业名称</p>
 * @method void setEntName(string $EntName) 设置<p>企业名称</p>
 * @method string getLrName() 获取<p>法人代表</p>
 * @method void setLrName(string $LrName) 设置<p>法人代表</p>
 * @method string getIdNum() 获取<p>注册登记证件号码</p>
 * @method void setIdNum(string $IdNum) 设置<p>注册登记证件号码</p>
 */
class VerifyBizLicenseEnterprise4Request extends AbstractModel
{
    /**
     * @var string <p>统一社会信用代码</p>
     */
    public $CreditCode;

    /**
     * @var string <p>企业名称</p>
     */
    public $EntName;

    /**
     * @var string <p>法人代表</p>
     */
    public $LrName;

    /**
     * @var string <p>注册登记证件号码</p>
     */
    public $IdNum;

    /**
     * @param string $CreditCode <p>统一社会信用代码</p>
     * @param string $EntName <p>企业名称</p>
     * @param string $LrName <p>法人代表</p>
     * @param string $IdNum <p>注册登记证件号码</p>
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
        if (array_key_exists("CreditCode",$param) and $param["CreditCode"] !== null) {
            $this->CreditCode = $param["CreditCode"];
        }

        if (array_key_exists("EntName",$param) and $param["EntName"] !== null) {
            $this->EntName = $param["EntName"];
        }

        if (array_key_exists("LrName",$param) and $param["LrName"] !== null) {
            $this->LrName = $param["LrName"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }
    }
}
