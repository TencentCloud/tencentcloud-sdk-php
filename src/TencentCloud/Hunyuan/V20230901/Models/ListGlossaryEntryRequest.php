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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListGlossaryEntry请求参数结构体
 *
 * @method string getGlossaryId() 获取术语库 ID
 * @method void setGlossaryId(string $GlossaryId) 设置术语库 ID
 * @method integer getPage() 获取页码，默认 1
 * @method void setPage(integer $Page) 设置页码，默认 1
 * @method integer getPageSize() 获取每页数量，默认 10，最大200
 * @method void setPageSize(integer $PageSize) 设置每页数量，默认 10，最大200
 */
class ListGlossaryEntryRequest extends AbstractModel
{
    /**
     * @var string 术语库 ID
     */
    public $GlossaryId;

    /**
     * @var integer 页码，默认 1
     */
    public $Page;

    /**
     * @var integer 每页数量，默认 10，最大200
     */
    public $PageSize;

    /**
     * @param string $GlossaryId 术语库 ID
     * @param integer $Page 页码，默认 1
     * @param integer $PageSize 每页数量，默认 10，最大200
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
        if (array_key_exists("GlossaryId",$param) and $param["GlossaryId"] !== null) {
            $this->GlossaryId = $param["GlossaryId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
