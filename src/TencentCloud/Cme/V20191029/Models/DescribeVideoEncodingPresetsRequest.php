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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoEncodingPresets请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method array getIds() 获取要查询的配置 ID 列表。填写该参数则按照配置 ID 进行查询。
 * @method void setIds(array $Ids) 设置要查询的配置 ID 列表。填写该参数则按照配置 ID 进行查询。
 * @method integer getLimit() 获取分页大小，默认20。最大值50。
 * @method void setLimit(integer $Limit) 设置分页大小，默认20。最大值50。
 * @method integer getOffset() 获取分页起始，默认0。
 * @method void setOffset(integer $Offset) 设置分页起始，默认0。
 */
class DescribeVideoEncodingPresetsRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var array 要查询的配置 ID 列表。填写该参数则按照配置 ID 进行查询。
     */
    public $Ids;

    /**
     * @var integer 分页大小，默认20。最大值50。
     */
    public $Limit;

    /**
     * @var integer 分页起始，默认0。
     */
    public $Offset;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param array $Ids 要查询的配置 ID 列表。填写该参数则按照配置 ID 进行查询。
     * @param integer $Limit 分页大小，默认20。最大值50。
     * @param integer $Offset 分页起始，默认0。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
