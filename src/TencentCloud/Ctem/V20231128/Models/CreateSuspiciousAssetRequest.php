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
 * CreateSuspiciousAsset请求参数结构体
 *
 * @method integer getCustomerId() 获取企业Id
 * @method void setCustomerId(integer $CustomerId) 设置企业Id
 * @method string getUrl() 获取Url
 * @method void setUrl(string $Url) 设置Url
 * @method string getEnterpriseUid() 获取子公司
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getTags() 获取标签
 * @method void setTags(string $Tags) 设置标签
 * @method string getOwner() 获取所属者
 * @method void setOwner(string $Owner) 设置所属者
 * @method string getSourceType() 获取来源类型
 * @method void setSourceType(string $SourceType) 设置来源类型
 * @method string getSourceValue() 获取来源值
 * @method void setSourceValue(string $SourceValue) 设置来源值
 * @method boolean getTrusted() 获取是否信任
 * @method void setTrusted(boolean $Trusted) 设置是否信任
 */
class CreateSuspiciousAssetRequest extends AbstractModel
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
     * @var string 子公司
     */
    public $EnterpriseUid;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 标签
     */
    public $Tags;

    /**
     * @var string 所属者
     */
    public $Owner;

    /**
     * @var string 来源类型
     */
    public $SourceType;

    /**
     * @var string 来源值
     */
    public $SourceValue;

    /**
     * @var boolean 是否信任
     */
    public $Trusted;

    /**
     * @param integer $CustomerId 企业Id
     * @param string $Url Url
     * @param string $EnterpriseUid 子公司
     * @param string $Title 标题
     * @param string $Tags 标签
     * @param string $Owner 所属者
     * @param string $SourceType 来源类型
     * @param string $SourceValue 来源值
     * @param boolean $Trusted 是否信任
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

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceValue",$param) and $param["SourceValue"] !== null) {
            $this->SourceValue = $param["SourceValue"];
        }

        if (array_key_exists("Trusted",$param) and $param["Trusted"] !== null) {
            $this->Trusted = $param["Trusted"];
        }
    }
}
