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
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method integer getCustomerId() 获取<p>企业ID</p>
 * @method void setCustomerId(integer $CustomerId) 设置<p>企业ID</p>
 * @method string getCategory() 获取<p>分类，包括：domain(主域名)、icon(图标)、ip(IP)、<br>keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)</p>
 * @method void setCategory(string $Category) 设置<p>分类，包括：domain(主域名)、icon(图标)、ip(IP)、<br>keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)</p>
 * @method string getValue() 获取<p>值</p>
 * @method void setValue(string $Value) 设置<p>值</p>
 * @method string getMd5() 获取<p>md5值</p>
 * @method void setMd5(string $Md5) 设置<p>md5值</p>
 * @method string getSource() 获取<p>来源</p>
 * @method void setSource(string $Source) 设置<p>来源</p>
 * @method string getCreateAt() 获取<p>创建时间</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>创建时间</p>
 * @method boolean getIsValid() 获取<p>是否可信</p>
 * @method void setIsValid(boolean $IsValid) 设置<p>是否可信</p>
 * @method array getPurposes() 获取<p>关键词用途，可多选：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号；不填=全部用途</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPurposes(array $Purposes) 设置<p>关键词用途，可多选：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号；不填=全部用途</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DisplaySeed extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var integer <p>企业ID</p>
     */
    public $CustomerId;

    /**
     * @var string <p>分类，包括：domain(主域名)、icon(图标)、ip(IP)、<br>keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)</p>
     */
    public $Category;

    /**
     * @var string <p>值</p>
     */
    public $Value;

    /**
     * @var string <p>md5值</p>
     */
    public $Md5;

    /**
     * @var string <p>来源</p>
     */
    public $Source;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateAt;

    /**
     * @var boolean <p>是否可信</p>
     */
    public $IsValid;

    /**
     * @var array <p>关键词用途，可多选：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号；不填=全部用途</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Purposes;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param integer $CustomerId <p>企业ID</p>
     * @param string $Category <p>分类，包括：domain(主域名)、icon(图标)、ip(IP)、<br>keyword(关键词)、parent_company(母公司)、sub_domain(子域名)、title(标题)</p>
     * @param string $Value <p>值</p>
     * @param string $Md5 <p>md5值</p>
     * @param string $Source <p>来源</p>
     * @param string $CreateAt <p>创建时间</p>
     * @param boolean $IsValid <p>是否可信</p>
     * @param array $Purposes <p>关键词用途，可多选：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号；不填=全部用途</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Purposes",$param) and $param["Purposes"] !== null) {
            $this->Purposes = $param["Purposes"];
        }
    }
}
