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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssets请求参数结构体
 *
 * @method string getAssetRegion() 获取生成包可部署地域
 * @method void setAssetRegion(string $AssetRegion) 设置生成包可部署地域
 * @method integer getOffset() 获取偏移，代表页数，与asset实际数量相关
 * @method void setOffset(integer $Offset) 设置偏移，代表页数，与asset实际数量相关
 * @method integer getLimit() 获取前端界面每页显示的最大条数，不超过100
 * @method void setLimit(integer $Limit) 设置前端界面每页显示的最大条数，不超过100
 * @method string getFilter() 获取搜索条件，支持包ID或包名字过滤
 * @method void setFilter(string $Filter) 设置搜索条件，支持包ID或包名字过滤
 */
class DescribeAssetsRequest extends AbstractModel
{
    /**
     * @var string 生成包可部署地域
     */
    public $AssetRegion;

    /**
     * @var integer 偏移，代表页数，与asset实际数量相关
     */
    public $Offset;

    /**
     * @var integer 前端界面每页显示的最大条数，不超过100
     */
    public $Limit;

    /**
     * @var string 搜索条件，支持包ID或包名字过滤
     */
    public $Filter;

    /**
     * @param string $AssetRegion 生成包可部署地域
     * @param integer $Offset 偏移，代表页数，与asset实际数量相关
     * @param integer $Limit 前端界面每页显示的最大条数，不超过100
     * @param string $Filter 搜索条件，支持包ID或包名字过滤
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
        if (array_key_exists("AssetRegion",$param) and $param["AssetRegion"] !== null) {
            $this->AssetRegion = $param["AssetRegion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}
