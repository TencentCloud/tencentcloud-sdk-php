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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuthApiKeyList请求参数结构体
 *
 * @method boolean getAllPage() 获取<p>全部</p><p>默认值：false</p>
 * @method void setAllPage(boolean $AllPage) 设置<p>全部</p><p>默认值：false</p>
 * @method integer getPageNo() 获取<p>页码</p><p>默认值：0</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码</p><p>默认值：0</p>
 * @method integer getPageSize() 获取<p>分页大小</p><p>默认值：10</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小</p><p>默认值：10</p>
 * @method string getKeyword() 获取<p>关键字过滤</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字过滤</p>
 */
class DescribeAuthApiKeyListRequest extends AbstractModel
{
    /**
     * @var boolean <p>全部</p><p>默认值：false</p>
     */
    public $AllPage;

    /**
     * @var integer <p>页码</p><p>默认值：0</p>
     */
    public $PageNo;

    /**
     * @var integer <p>分页大小</p><p>默认值：10</p>
     */
    public $PageSize;

    /**
     * @var string <p>关键字过滤</p>
     */
    public $Keyword;

    /**
     * @param boolean $AllPage <p>全部</p><p>默认值：false</p>
     * @param integer $PageNo <p>页码</p><p>默认值：0</p>
     * @param integer $PageSize <p>分页大小</p><p>默认值：10</p>
     * @param string $Keyword <p>关键字过滤</p>
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
        if (array_key_exists("AllPage",$param) and $param["AllPage"] !== null) {
            $this->AllPage = $param["AllPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
