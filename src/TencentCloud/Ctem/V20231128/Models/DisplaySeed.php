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
 * 种子详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method string getCategory() 获取分类，包括：domain(主域名)、icon(图标)、ip(IP)、
keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)
 * @method void setCategory(string $Category) 设置分类，包括：domain(主域名)、icon(图标)、ip(IP)、
keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method string getMd5() 获取md5值
 * @method void setMd5(string $Md5) 设置md5值
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getCreateAt() 获取创建时间
 * @method void setCreateAt(string $CreateAt) 设置创建时间
 * @method boolean getIsValid() 获取是否可信
 * @method void setIsValid(boolean $IsValid) 设置是否可信
 */
class DisplaySeed extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var string 分类，包括：domain(主域名)、icon(图标)、ip(IP)、
keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)
     */
    public $Category;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var string md5值
     */
    public $Md5;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 创建时间
     */
    public $CreateAt;

    /**
     * @var boolean 是否可信
     */
    public $IsValid;

    /**
     * @param integer $Id 主键ID
     * @param integer $CustomerId 企业ID
     * @param string $Category 分类，包括：domain(主域名)、icon(图标)、ip(IP)、
keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)
     * @param string $Value 值
     * @param string $Md5 md5值
     * @param string $Source 来源
     * @param string $CreateAt 创建时间
     * @param boolean $IsValid 是否可信
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("IsValid",$param) and $param["IsValid"] !== null) {
            $this->IsValid = $param["IsValid"];
        }
    }
}
