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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNamespace请求参数结构体
 *
 * @method string getRegistryId() 获取<p>实例Id</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>实例Id</p>
 * @method string getNamespaceName() 获取<p>命名空间名称</p>
 * @method void setNamespaceName(string $NamespaceName) 设置<p>命名空间名称</p>
 * @method boolean getIsPublic() 获取<p>访问级别，True为公开，False为私有</p>
 * @method void setIsPublic(boolean $IsPublic) 设置<p>访问级别，True为公开，False为私有</p>
 * @method boolean getIsAutoScan() 获取<p>扫描级别，True为自动，False为手动</p>
 * @method void setIsAutoScan(boolean $IsAutoScan) 设置<p>扫描级别，True为自动，False为手动</p>
 * @method boolean getIsPreventVUL() 获取<p>阻断开关，True为开放，False为关闭</p>
 * @method void setIsPreventVUL(boolean $IsPreventVUL) 设置<p>阻断开关，True为开放，False为关闭</p>
 * @method string getSeverity() 获取<p>阻断漏洞等级，目前仅支持 low、medium、high</p>
 * @method void setSeverity(string $Severity) 设置<p>阻断漏洞等级，目前仅支持 low、medium、high</p>
 * @method array getCVEWhitelistItems() 获取<p>漏洞白名单列表</p>
 * @method void setCVEWhitelistItems(array $CVEWhitelistItems) 设置<p>漏洞白名单列表</p>
 * @method TagSpecification getTagSpecification() 获取<p>tag列表</p>
 * @method void setTagSpecification(TagSpecification $TagSpecification) 设置<p>tag列表</p>
 */
class ModifyNamespaceRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>命名空间名称</p>
     */
    public $NamespaceName;

    /**
     * @var boolean <p>访问级别，True为公开，False为私有</p>
     */
    public $IsPublic;

    /**
     * @var boolean <p>扫描级别，True为自动，False为手动</p>
     */
    public $IsAutoScan;

    /**
     * @var boolean <p>阻断开关，True为开放，False为关闭</p>
     */
    public $IsPreventVUL;

    /**
     * @var string <p>阻断漏洞等级，目前仅支持 low、medium、high</p>
     */
    public $Severity;

    /**
     * @var array <p>漏洞白名单列表</p>
     */
    public $CVEWhitelistItems;

    /**
     * @var TagSpecification <p>tag列表</p>
     */
    public $TagSpecification;

    /**
     * @param string $RegistryId <p>实例Id</p>
     * @param string $NamespaceName <p>命名空间名称</p>
     * @param boolean $IsPublic <p>访问级别，True为公开，False为私有</p>
     * @param boolean $IsAutoScan <p>扫描级别，True为自动，False为手动</p>
     * @param boolean $IsPreventVUL <p>阻断开关，True为开放，False为关闭</p>
     * @param string $Severity <p>阻断漏洞等级，目前仅支持 low、medium、high</p>
     * @param array $CVEWhitelistItems <p>漏洞白名单列表</p>
     * @param TagSpecification $TagSpecification <p>tag列表</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("IsAutoScan",$param) and $param["IsAutoScan"] !== null) {
            $this->IsAutoScan = $param["IsAutoScan"];
        }

        if (array_key_exists("IsPreventVUL",$param) and $param["IsPreventVUL"] !== null) {
            $this->IsPreventVUL = $param["IsPreventVUL"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("CVEWhitelistItems",$param) and $param["CVEWhitelistItems"] !== null) {
            $this->CVEWhitelistItems = [];
            foreach ($param["CVEWhitelistItems"] as $key => $value){
                $obj = new CVEWhitelistItem();
                $obj->deserialize($value);
                array_push($this->CVEWhitelistItems, $obj);
            }
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }
    }
}
