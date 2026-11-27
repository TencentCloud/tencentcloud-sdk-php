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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCageList请求参数结构体
 *
 * @method array getCageIds() 获取<p>金融围拢ID、或者独享集群ID</p>
 * @method void setCageIds(array $CageIds) 设置<p>金融围拢ID、或者独享集群ID</p>
 * @method string getCageName() 获取<p>金融围拢名称/独享集群名称</p>
 * @method void setCageName(string $CageName) 设置<p>金融围拢名称/独享集群名称</p>
 * @method integer getZoneId() 获取<p>本地专属集群所在可用用ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>本地专属集群所在可用用ID</p>
 * @method integer getLimit() 获取<p>查询本地专属集群列表LIMIT</p>
 * @method void setLimit(integer $Limit) 设置<p>查询本地专属集群列表LIMIT</p>
 * @method integer getOffset() 获取<p>分页</p>
 * @method void setOffset(integer $Offset) 设置<p>分页</p>
 */
class DescribeCageListRequest extends AbstractModel
{
    /**
     * @var array <p>金融围拢ID、或者独享集群ID</p>
     */
    public $CageIds;

    /**
     * @var string <p>金融围拢名称/独享集群名称</p>
     */
    public $CageName;

    /**
     * @var integer <p>本地专属集群所在可用用ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>查询本地专属集群列表LIMIT</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页</p>
     */
    public $Offset;

    /**
     * @param array $CageIds <p>金融围拢ID、或者独享集群ID</p>
     * @param string $CageName <p>金融围拢名称/独享集群名称</p>
     * @param integer $ZoneId <p>本地专属集群所在可用用ID</p>
     * @param integer $Limit <p>查询本地专属集群列表LIMIT</p>
     * @param integer $Offset <p>分页</p>
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
        if (array_key_exists("CageIds",$param) and $param["CageIds"] !== null) {
            $this->CageIds = $param["CageIds"];
        }

        if (array_key_exists("CageName",$param) and $param["CageName"] !== null) {
            $this->CageName = $param["CageName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
