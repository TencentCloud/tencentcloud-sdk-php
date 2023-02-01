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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIpAccessControl请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getItems() 获取删除的ip数组
 * @method void setItems(array $Items) 设置删除的ip数组
 * @method boolean getDeleteAll() 获取是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定ip名单
 * @method void setDeleteAll(boolean $DeleteAll) 设置是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定ip名单
 * @method string getSourceType() 获取是否为多域名黑白名单
 * @method void setSourceType(string $SourceType) 设置是否为多域名黑白名单
 */
class DeleteIpAccessControlRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 删除的ip数组
     */
    public $Items;

    /**
     * @var boolean 是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定ip名单
     */
    public $DeleteAll;

    /**
     * @var string 是否为多域名黑白名单
     */
    public $SourceType;

    /**
     * @param string $Domain 域名
     * @param array $Items 删除的ip数组
     * @param boolean $DeleteAll 是否删除对应的域名下的所有黑/白IP名单，true表示全部删除，false表示只删除指定ip名单
     * @param string $SourceType 是否为多域名黑白名单
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = $param["Items"];
        }

        if (array_key_exists("DeleteAll",$param) and $param["DeleteAll"] !== null) {
            $this->DeleteAll = $param["DeleteAll"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
