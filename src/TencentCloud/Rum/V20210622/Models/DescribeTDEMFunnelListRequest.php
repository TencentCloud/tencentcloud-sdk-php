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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMFunnelList请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getKeyword() 获取<p>关键字，用于过滤漏斗名</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字，用于过滤漏斗名</p>
 * @method string getStatus() 获取<p>漏斗状态</p>
 * @method void setStatus(string $Status) 设置<p>漏斗状态</p>
 * @method integer getPage() 获取<p>页面号</p>
 * @method void setPage(integer $Page) 设置<p>页面号</p>
 * @method integer getPageSize() 获取<p>页面数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>页面数量</p>
 */
class DescribeTDEMFunnelListRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>关键字，用于过滤漏斗名</p>
     */
    public $Keyword;

    /**
     * @var string <p>漏斗状态</p>
     */
    public $Status;

    /**
     * @var integer <p>页面号</p>
     */
    public $Page;

    /**
     * @var integer <p>页面数量</p>
     */
    public $PageSize;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $Keyword <p>关键字，用于过滤漏斗名</p>
     * @param string $Status <p>漏斗状态</p>
     * @param integer $Page <p>页面号</p>
     * @param integer $PageSize <p>页面数量</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
