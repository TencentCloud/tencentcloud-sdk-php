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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSourceAsset请求参数结构体
 *
 * @method string getFuzzySearch() 获取模糊查询
 * @method void setFuzzySearch(string $FuzzySearch) 设置模糊查询
 * @method string getInsType() 获取资产类型 1公网 2内网
 * @method void setInsType(string $InsType) 设置资产类型 1公网 2内网
 * @method string getChooseType() 获取ChooseType为1，查询已经分组的资产；ChooseType不为1查询没有分组的资产
 * @method void setChooseType(string $ChooseType) 设置ChooseType为1，查询已经分组的资产；ChooseType不为1查询没有分组的资产
 * @method string getZone() 获取地域
 * @method void setZone(string $Zone) 设置地域
 * @method integer getLimit() 获取查询单页的最大值；eg：10；则最多返回10条结果
 * @method void setLimit(integer $Limit) 设置查询单页的最大值；eg：10；则最多返回10条结果
 * @method integer getOffset() 获取查询结果的偏移量
 * @method void setOffset(integer $Offset) 设置查询结果的偏移量
 */
class DescribeSourceAssetRequest extends AbstractModel
{
    /**
     * @var string 模糊查询
     */
    public $FuzzySearch;

    /**
     * @var string 资产类型 1公网 2内网
     */
    public $InsType;

    /**
     * @var string ChooseType为1，查询已经分组的资产；ChooseType不为1查询没有分组的资产
     */
    public $ChooseType;

    /**
     * @var string 地域
     */
    public $Zone;

    /**
     * @var integer 查询单页的最大值；eg：10；则最多返回10条结果
     */
    public $Limit;

    /**
     * @var integer 查询结果的偏移量
     */
    public $Offset;

    /**
     * @param string $FuzzySearch 模糊查询
     * @param string $InsType 资产类型 1公网 2内网
     * @param string $ChooseType ChooseType为1，查询已经分组的资产；ChooseType不为1查询没有分组的资产
     * @param string $Zone 地域
     * @param integer $Limit 查询单页的最大值；eg：10；则最多返回10条结果
     * @param integer $Offset 查询结果的偏移量
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
        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            $this->FuzzySearch = $param["FuzzySearch"];
        }

        if (array_key_exists("InsType",$param) and $param["InsType"] !== null) {
            $this->InsType = $param["InsType"];
        }

        if (array_key_exists("ChooseType",$param) and $param["ChooseType"] !== null) {
            $this->ChooseType = $param["ChooseType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
