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
 * ListImages请求参数结构体
 *
 * @method string getKeyword() 获取关键词搜索（模糊匹配名称或描述）
 * @method void setKeyword(string $Keyword) 设置关键词搜索（模糊匹配名称或描述）
 * @method string getType() 获取镜像类型过滤（Ray/Workspace）
 * @method void setType(string $Type) 设置镜像类型过滤（Ray/Workspace）
 * @method integer getPage() 获取页数
 * @method void setPage(integer $Page) 设置页数
 * @method integer getPageSize() 获取数量
 * @method void setPageSize(integer $PageSize) 设置数量
 */
class ListImagesRequest extends AbstractModel
{
    /**
     * @var string 关键词搜索（模糊匹配名称或描述）
     */
    public $Keyword;

    /**
     * @var string 镜像类型过滤（Ray/Workspace）
     */
    public $Type;

    /**
     * @var integer 页数
     */
    public $Page;

    /**
     * @var integer 数量
     */
    public $PageSize;

    /**
     * @param string $Keyword 关键词搜索（模糊匹配名称或描述）
     * @param string $Type 镜像类型过滤（Ray/Workspace）
     * @param integer $Page 页数
     * @param integer $PageSize 数量
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
