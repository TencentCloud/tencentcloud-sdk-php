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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSqlApis请求参数结构体
 *
 * @method string getWhiteHost() 获取用户链接来自的 IP
 * @method void setWhiteHost(string $WhiteHost) 设置用户链接来自的 IP
 * @method string getCatalog() 获取catalog名称
 * @method void setCatalog(string $Catalog) 设置catalog名称
 * @method array getCatalogs() 获取catalog集合
 * @method void setCatalogs(array $Catalogs) 设置catalog集合
 */
class DescribeSqlApisRequest extends AbstractModel
{
    /**
     * @var string 用户链接来自的 IP
     */
    public $WhiteHost;

    /**
     * @var string catalog名称
     */
    public $Catalog;

    /**
     * @var array catalog集合
     */
    public $Catalogs;

    /**
     * @param string $WhiteHost 用户链接来自的 IP
     * @param string $Catalog catalog名称
     * @param array $Catalogs catalog集合
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
        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Catalogs",$param) and $param["Catalogs"] !== null) {
            $this->Catalogs = $param["Catalogs"];
        }
    }
}
