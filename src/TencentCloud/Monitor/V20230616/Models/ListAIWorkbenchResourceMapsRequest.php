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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchResourceMaps请求参数结构体
 *
 * @method integer getPerPage() 获取<p>每页数量</p>
 * @method void setPerPage(integer $PerPage) 设置<p>每页数量</p>
 * @method integer getPageNo() 获取<p>页码</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码</p>
 * @method string getKeyword() 获取<p>按名称搜索</p>
 * @method void setKeyword(string $Keyword) 设置<p>按名称搜索</p>
 */
class ListAIWorkbenchResourceMapsRequest extends AbstractModel
{
    /**
     * @var integer <p>每页数量</p>
     */
    public $PerPage;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNo;

    /**
     * @var string <p>按名称搜索</p>
     */
    public $Keyword;

    /**
     * @param integer $PerPage <p>每页数量</p>
     * @param integer $PageNo <p>页码</p>
     * @param string $Keyword <p>按名称搜索</p>
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
        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
