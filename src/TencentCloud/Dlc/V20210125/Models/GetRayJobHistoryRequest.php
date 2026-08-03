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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRayJobHistory请求参数结构体
 *
 * @method string getId() 获取ray-jobID
 * @method void setId(string $Id) 设置ray-jobID
 * @method integer getPage() 获取当前页码（从1开始）
 * @method void setPage(integer $Page) 设置当前页码（从1开始）
 * @method integer getPageSize() 获取页数
 * @method void setPageSize(integer $PageSize) 设置页数
 */
class GetRayJobHistoryRequest extends AbstractModel
{
    /**
     * @var string ray-jobID
     */
    public $Id;

    /**
     * @var integer 当前页码（从1开始）
     */
    public $Page;

    /**
     * @var integer 页数
     */
    public $PageSize;

    /**
     * @param string $Id ray-jobID
     * @param integer $Page 当前页码（从1开始）
     * @param integer $PageSize 页数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
