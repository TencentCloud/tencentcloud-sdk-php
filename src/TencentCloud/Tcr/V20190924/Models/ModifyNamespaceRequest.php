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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNamespace请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method boolean getIsPublic() 获取访问级别，True为公开，False为私有
 * @method void setIsPublic(boolean $IsPublic) 设置访问级别，True为公开，False为私有
 * @method boolean getIsAutoScan() 获取扫描级别，True为自动，False为手动
 * @method void setIsAutoScan(boolean $IsAutoScan) 设置扫描级别，True为自动，False为手动
 * @method boolean getIsPreventVUL() 获取阻断开关，True为开放，False为关闭
 * @method void setIsPreventVUL(boolean $IsPreventVUL) 设置阻断开关，True为开放，False为关闭
 * @method string getSeverity() 获取阻断漏洞等级，目前仅支持 low、medium、high
 * @method void setSeverity(string $Severity) 设置阻断漏洞等级，目前仅支持 low、medium、high
 * @method array getCVEWhitelistItems() 获取漏洞白名单列表
 * @method void setCVEWhitelistItems(array $CVEWhitelistItems) 设置漏洞白名单列表
 */
class ModifyNamespaceRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var boolean 访问级别，True为公开，False为私有
     */
    public $IsPublic;

    /**
     * @var boolean 扫描级别，True为自动，False为手动
     */
    public $IsAutoScan;

    /**
     * @var boolean 阻断开关，True为开放，False为关闭
     */
    public $IsPreventVUL;

    /**
     * @var string 阻断漏洞等级，目前仅支持 low、medium、high
     */
    public $Severity;

    /**
     * @var array 漏洞白名单列表
     */
    public $CVEWhitelistItems;

    /**
     * @param string $RegistryId 实例Id
     * @param string $NamespaceName 命名空间名称
     * @param boolean $IsPublic 访问级别，True为公开，False为私有
     * @param boolean $IsAutoScan 扫描级别，True为自动，False为手动
     * @param boolean $IsPreventVUL 阻断开关，True为开放，False为关闭
     * @param string $Severity 阻断漏洞等级，目前仅支持 low、medium、high
     * @param array $CVEWhitelistItems 漏洞白名单列表
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
    }
}
