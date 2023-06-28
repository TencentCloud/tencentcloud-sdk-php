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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomAccounts请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method boolean getAll() 获取列出所有自定义账户
 * @method void setAll(boolean $All) 设置列出所有自定义账户
 * @method boolean getEmbedPermission() 获取填充策略
 * @method void setEmbedPermission(boolean $EmbedPermission) 设置填充策略
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method integer getLimit() 获取最大输出条数，默认20，最大为100
 * @method void setLimit(integer $Limit) 设置最大输出条数，默认20，最大为100
 */
class DescribeCustomAccountsRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var boolean 列出所有自定义账户
     */
    public $All;

    /**
     * @var boolean 填充策略
     */
    public $EmbedPermission;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var integer 最大输出条数，默认20，最大为100
     */
    public $Limit;

    /**
     * @param string $RegistryId 实例Id
     * @param boolean $All 列出所有自定义账户
     * @param boolean $EmbedPermission 填充策略
     * @param array $Filters 过滤条件
     * @param integer $Offset 偏移量,默认0
     * @param integer $Limit 最大输出条数，默认20，最大为100
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("EmbedPermission",$param) and $param["EmbedPermission"] !== null) {
            $this->EmbedPermission = $param["EmbedPermission"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
    }
}
