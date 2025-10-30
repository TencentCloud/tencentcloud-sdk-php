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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务响应数据
 *
 * @method Paging getPage() 获取分页信息
 * @method void setPage(Paging $Page) 设置分页信息
 * @method array getItems() 获取节点列表
 * @method void setItems(array $Items) 设置节点列表
 */
class DescribeDLPEdgeNodesPageData extends AbstractModel
{
    /**
     * @var Paging 分页信息
     */
    public $Page;

    /**
     * @var array 节点列表
     */
    public $Items;

    /**
     * @param Paging $Page 分页信息
     * @param array $Items 节点列表
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = new Paging();
            $this->Page->deserialize($param["Page"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DescribeDLPEdgeNodesRspItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
