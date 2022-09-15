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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveDomainCertBindings请求参数结构体
 *
 * @method string getDomainSearch() 获取要搜索的域名字符串。
 * @method void setDomainSearch(string $DomainSearch) 设置要搜索的域名字符串。
 * @method integer getOffset() 获取记录行的位置，从0开始。默认0。
 * @method void setOffset(integer $Offset) 设置记录行的位置，从0开始。默认0。
 * @method integer getLength() 获取记录行的最大数目。默认50。
若不传，则最多返回50条数据。
 * @method void setLength(integer $Length) 设置记录行的最大数目。默认50。
若不传，则最多返回50条数据。
 * @method string getDomainName() 获取要查询的单个域名。
 * @method void setDomainName(string $DomainName) 设置要查询的单个域名。
 * @method string getOrderBy() 获取可取值：
ExpireTimeAsc：证书过期时间升序。
ExpireTimeDesc：证书过期时间降序。
 * @method void setOrderBy(string $OrderBy) 设置可取值：
ExpireTimeAsc：证书过期时间升序。
ExpireTimeDesc：证书过期时间降序。
 */
class DescribeLiveDomainCertBindingsRequest extends AbstractModel
{
    /**
     * @var string 要搜索的域名字符串。
     */
    public $DomainSearch;

    /**
     * @var integer 记录行的位置，从0开始。默认0。
     */
    public $Offset;

    /**
     * @var integer 记录行的最大数目。默认50。
若不传，则最多返回50条数据。
     */
    public $Length;

    /**
     * @var string 要查询的单个域名。
     */
    public $DomainName;

    /**
     * @var string 可取值：
ExpireTimeAsc：证书过期时间升序。
ExpireTimeDesc：证书过期时间降序。
     */
    public $OrderBy;

    /**
     * @param string $DomainSearch 要搜索的域名字符串。
     * @param integer $Offset 记录行的位置，从0开始。默认0。
     * @param integer $Length 记录行的最大数目。默认50。
若不传，则最多返回50条数据。
     * @param string $DomainName 要查询的单个域名。
     * @param string $OrderBy 可取值：
ExpireTimeAsc：证书过期时间升序。
ExpireTimeDesc：证书过期时间降序。
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
        if (array_key_exists("DomainSearch",$param) and $param["DomainSearch"] !== null) {
            $this->DomainSearch = $param["DomainSearch"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
