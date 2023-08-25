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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDSPACosMetaResources请求参数结构体
 *
 * @method string getDspaId() 获取实例Id
 * @method void setDspaId(string $DspaId) 设置实例Id
 * @method array getFilters() 获取过滤数组。支持的Name：
Bucket - 桶名，支持模糊匹配

ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

Valid -- 资源是否有效，"1" 表示有效，"0"表示无效。
 * @method void setFilters(array $Filters) 设置过滤数组。支持的Name：
Bucket - 桶名，支持模糊匹配

ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

Valid -- 资源是否有效，"1" 表示有效，"0"表示无效。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为100。
 * @method string getBindType() 获取资源绑定状态过滤，默认为全部
 * @method void setBindType(string $BindType) 设置资源绑定状态过滤，默认为全部
 */
class ListDSPACosMetaResourcesRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $DspaId;

    /**
     * @var array 过滤数组。支持的Name：
Bucket - 桶名，支持模糊匹配

ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

Valid -- 资源是否有效，"1" 表示有效，"0"表示无效。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为100。
     */
    public $Limit;

    /**
     * @var string 资源绑定状态过滤，默认为全部
     */
    public $BindType;

    /**
     * @param string $DspaId 实例Id
     * @param array $Filters 过滤数组。支持的Name：
Bucket - 桶名，支持模糊匹配

ResoureRegion - 资源所处地域，需要填写完整地域名称，不支持模糊匹配。

Valid -- 资源是否有效，"1" 表示有效，"0"表示无效。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为100。
     * @param string $BindType 资源绑定状态过滤，默认为全部
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DspaDataSourceMngFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }
    }
}
