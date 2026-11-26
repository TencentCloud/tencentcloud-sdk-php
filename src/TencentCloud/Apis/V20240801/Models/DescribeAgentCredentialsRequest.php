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
 * DescribeAgentCredentials请求参数结构体
 *
 * @method integer getLimit() 获取<p>分页大小</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method array getNotIDs() 获取<p>notID列表</p>
 * @method void setNotIDs(array $NotIDs) 设置<p>notID列表</p>
 * @method string getStatus() 获取<p>状态：normal正常状态，disabled下线状态</p>
 * @method void setStatus(string $Status) 设置<p>状态：normal正常状态，disabled下线状态</p>
 * @method integer getOffset() 获取<p>分页偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量</p>
 * @method string getKeyword() 获取<p>关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键词</p>
 * @method array getIDs() 获取<p>服务ID数组</p>
 * @method void setIDs(array $IDs) 设置<p>服务ID数组</p>
 * @method string getType() 获取<p>认证类型：sts，reqKey</p>
 * @method void setType(string $Type) 设置<p>认证类型：sts，reqKey</p>
 * @method DescribeAgentCredentialsSortDTO getSort() 获取<p>排序</p>
 * @method void setSort(DescribeAgentCredentialsSortDTO $Sort) 设置<p>排序</p>
 */
class DescribeAgentCredentialsRequest extends AbstractModel
{
    /**
     * @var integer <p>分页大小</p>
     */
    public $Limit;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var array <p>notID列表</p>
     */
    public $NotIDs;

    /**
     * @var string <p>状态：normal正常状态，disabled下线状态</p>
     */
    public $Status;

    /**
     * @var integer <p>分页偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>关键词</p>
     */
    public $Keyword;

    /**
     * @var array <p>服务ID数组</p>
     */
    public $IDs;

    /**
     * @var string <p>认证类型：sts，reqKey</p>
     */
    public $Type;

    /**
     * @var DescribeAgentCredentialsSortDTO <p>排序</p>
     */
    public $Sort;

    /**
     * @param integer $Limit <p>分页大小</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param array $NotIDs <p>notID列表</p>
     * @param string $Status <p>状态：normal正常状态，disabled下线状态</p>
     * @param integer $Offset <p>分页偏移量</p>
     * @param string $Keyword <p>关键词</p>
     * @param array $IDs <p>服务ID数组</p>
     * @param string $Type <p>认证类型：sts，reqKey</p>
     * @param DescribeAgentCredentialsSortDTO $Sort <p>排序</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("NotIDs",$param) and $param["NotIDs"] !== null) {
            $this->NotIDs = $param["NotIDs"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new DescribeAgentCredentialsSortDTO();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
