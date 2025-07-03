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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateXMagic请求参数结构体
 *
 * @method integer getXMagicId() 获取要修改的XMagic Id
 * @method void setXMagicId(integer $XMagicId) 设置要修改的XMagic Id
 * @method string getXMagicResourceId() 获取资源id
 * @method void setXMagicResourceId(string $XMagicResourceId) 设置资源id
 * @method string getCompanyPermit() 获取营业执照地址
 * @method void setCompanyPermit(string $CompanyPermit) 设置营业执照地址
 * @method string getCompanyType() 获取公司类型
 * @method void setCompanyType(string $CompanyType) 设置公司类型
 * @method string getCompanyName() 获取公司名称
 * @method void setCompanyName(string $CompanyName) 设置公司名称
 */
class UpdateXMagicRequest extends AbstractModel
{
    /**
     * @var integer 要修改的XMagic Id
     */
    public $XMagicId;

    /**
     * @var string 资源id
     */
    public $XMagicResourceId;

    /**
     * @var string 营业执照地址
     */
    public $CompanyPermit;

    /**
     * @var string 公司类型
     */
    public $CompanyType;

    /**
     * @var string 公司名称
     */
    public $CompanyName;

    /**
     * @param integer $XMagicId 要修改的XMagic Id
     * @param string $XMagicResourceId 资源id
     * @param string $CompanyPermit 营业执照地址
     * @param string $CompanyType 公司类型
     * @param string $CompanyName 公司名称
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
        if (array_key_exists("XMagicId",$param) and $param["XMagicId"] !== null) {
            $this->XMagicId = $param["XMagicId"];
        }

        if (array_key_exists("XMagicResourceId",$param) and $param["XMagicResourceId"] !== null) {
            $this->XMagicResourceId = $param["XMagicResourceId"];
        }

        if (array_key_exists("CompanyPermit",$param) and $param["CompanyPermit"] !== null) {
            $this->CompanyPermit = $param["CompanyPermit"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }
    }
}
