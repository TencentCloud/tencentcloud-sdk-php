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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListFeatureTables请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
 * @method string getKeyword() 获取<p>关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字</p>
 * @method array getCatalogNames() 获取<p>Catalog目录列表</p>
 * @method void setCatalogNames(array $CatalogNames) 设置<p>Catalog目录列表</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method boolean getOwnerMe() 获取<p>我负责的</p>
 * @method void setOwnerMe(boolean $OwnerMe) 设置<p>我负责的</p>
 * @method integer getMaxResults() 获取<p>最大结果条数，可选，取值1～50</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>最大结果条数，可选，取值1～50</p>
 * @method string getPageToken() 获取<p>分页token信息(base64编码)，可选</p>
 * @method void setPageToken(string $PageToken) 设置<p>分页token信息(base64编码)，可选</p>
 * @method array getOrderBys() 获取<p>排序，Name(CreateTime/ModifiedTime), Direction(Desc/Asc)</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>排序，Name(CreateTime/ModifiedTime), Direction(Desc/Asc)</p>
 */
class ListFeatureTablesRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>关键字</p>
     */
    public $Keyword;

    /**
     * @var array <p>Catalog目录列表</p>
     */
    public $CatalogNames;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var boolean <p>我负责的</p>
     */
    public $OwnerMe;

    /**
     * @var integer <p>最大结果条数，可选，取值1～50</p>
     */
    public $MaxResults;

    /**
     * @var string <p>分页token信息(base64编码)，可选</p>
     */
    public $PageToken;

    /**
     * @var array <p>排序，Name(CreateTime/ModifiedTime), Direction(Desc/Asc)</p>
     */
    public $OrderBys;

    /**
     * @param string $WorkspaceId <p>工作空间ID</p>
     * @param string $Keyword <p>关键字</p>
     * @param array $CatalogNames <p>Catalog目录列表</p>
     * @param array $Tags <p>标签列表</p>
     * @param boolean $OwnerMe <p>我负责的</p>
     * @param integer $MaxResults <p>最大结果条数，可选，取值1～50</p>
     * @param string $PageToken <p>分页token信息(base64编码)，可选</p>
     * @param array $OrderBys <p>排序，Name(CreateTime/ModifiedTime), Direction(Desc/Asc)</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("CatalogNames",$param) and $param["CatalogNames"] !== null) {
            $this->CatalogNames = $param["CatalogNames"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("OwnerMe",$param) and $param["OwnerMe"] !== null) {
            $this->OwnerMe = $param["OwnerMe"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }
    }
}
