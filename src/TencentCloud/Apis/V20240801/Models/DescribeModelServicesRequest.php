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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelServices请求参数结构体
 *
 * @method string getInstanceID() 获取实例
 * @method void setInstanceID(string $InstanceID) 设置实例
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method integer getLimit() 获取分页限制
 * @method void setLimit(integer $Limit) 设置分页限制
 * @method array getIDs() 获取ID列表
 * @method void setIDs(array $IDs) 设置ID列表
 * @method array getNotIDs() 获取排除的ID列表
 * @method void setNotIDs(array $NotIDs) 设置排除的ID列表
 * @method string getStatus() 获取状态：normal，disabled
 * @method void setStatus(string $Status) 设置状态：normal，disabled
 * @method string getKeyword() 获取关键词
 * @method void setKeyword(string $Keyword) 设置关键词
 * @method string getModelID() 获取模型ID
 * @method void setModelID(string $ModelID) 设置模型ID
 * @method DescribeModelServicesSort getSort() 获取排序
 * @method void setSort(DescribeModelServicesSort $Sort) 设置排序
 */
class DescribeModelServicesRequest extends AbstractModel
{
    /**
     * @var string 实例
     */
    public $InstanceID;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var integer 分页限制
     */
    public $Limit;

    /**
     * @var array ID列表
     */
    public $IDs;

    /**
     * @var array 排除的ID列表
     */
    public $NotIDs;

    /**
     * @var string 状态：normal，disabled
     */
    public $Status;

    /**
     * @var string 关键词
     */
    public $Keyword;

    /**
     * @var string 模型ID
     */
    public $ModelID;

    /**
     * @var DescribeModelServicesSort 排序
     */
    public $Sort;

    /**
     * @param string $InstanceID 实例
     * @param integer $Offset 分页参数
     * @param integer $Limit 分页限制
     * @param array $IDs ID列表
     * @param array $NotIDs 排除的ID列表
     * @param string $Status 状态：normal，disabled
     * @param string $Keyword 关键词
     * @param string $ModelID 模型ID
     * @param DescribeModelServicesSort $Sort 排序
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }

        if (array_key_exists("NotIDs",$param) and $param["NotIDs"] !== null) {
            $this->NotIDs = $param["NotIDs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ModelID",$param) and $param["ModelID"] !== null) {
            $this->ModelID = $param["ModelID"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new DescribeModelServicesSort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
