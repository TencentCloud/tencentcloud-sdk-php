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
 * @method string getInstanceID() 获取<p>实例</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例</p>
 * @method integer getOffset() 获取<p>分页参数</p>
 * @method void setOffset(integer $Offset) 设置<p>分页参数</p>
 * @method integer getLimit() 获取<p>分页限制</p>
 * @method void setLimit(integer $Limit) 设置<p>分页限制</p>
 * @method array getIDs() 获取<p>ID列表</p>
 * @method void setIDs(array $IDs) 设置<p>ID列表</p>
 * @method array getNotIDs() 获取<p>排除的ID列表</p>
 * @method void setNotIDs(array $NotIDs) 设置<p>排除的ID列表</p>
 * @method string getStatus() 获取<p>状态：normal，disabled</p>
 * @method void setStatus(string $Status) 设置<p>状态：normal，disabled</p>
 * @method string getKeyword() 获取<p>关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键词</p>
 * @method string getModelID() 获取<p>模型ID</p>
 * @method void setModelID(string $ModelID) 设置<p>模型ID</p>
 * @method DescribeModelServicesSort getSort() 获取<p>排序</p>
 * @method void setSort(DescribeModelServicesSort $Sort) 设置<p>排序</p>
 * @method string getModelProtocol() 获取<p>模型类型，OpenAI或Anthropic</p>
 * @method void setModelProtocol(string $ModelProtocol) 设置<p>模型类型，OpenAI或Anthropic</p>
 */
class DescribeModelServicesRequest extends AbstractModel
{
    /**
     * @var string <p>实例</p>
     */
    public $InstanceID;

    /**
     * @var integer <p>分页参数</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页限制</p>
     */
    public $Limit;

    /**
     * @var array <p>ID列表</p>
     */
    public $IDs;

    /**
     * @var array <p>排除的ID列表</p>
     */
    public $NotIDs;

    /**
     * @var string <p>状态：normal，disabled</p>
     */
    public $Status;

    /**
     * @var string <p>关键词</p>
     */
    public $Keyword;

    /**
     * @var string <p>模型ID</p>
     */
    public $ModelID;

    /**
     * @var DescribeModelServicesSort <p>排序</p>
     */
    public $Sort;

    /**
     * @var string <p>模型类型，OpenAI或Anthropic</p>
     */
    public $ModelProtocol;

    /**
     * @param string $InstanceID <p>实例</p>
     * @param integer $Offset <p>分页参数</p>
     * @param integer $Limit <p>分页限制</p>
     * @param array $IDs <p>ID列表</p>
     * @param array $NotIDs <p>排除的ID列表</p>
     * @param string $Status <p>状态：normal，disabled</p>
     * @param string $Keyword <p>关键词</p>
     * @param string $ModelID <p>模型ID</p>
     * @param DescribeModelServicesSort $Sort <p>排序</p>
     * @param string $ModelProtocol <p>模型类型，OpenAI或Anthropic</p>
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

        if (array_key_exists("ModelProtocol",$param) and $param["ModelProtocol"] !== null) {
            $this->ModelProtocol = $param["ModelProtocol"];
        }
    }
}
