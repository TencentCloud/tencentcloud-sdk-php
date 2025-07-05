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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchDocList请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getCollectionView() 获取知识库名称
 * @method void setCollectionView(string $CollectionView) 设置知识库名称
 * @method string getSearchKey() 获取搜索模式
 * @method void setSearchKey(string $SearchKey) 设置搜索模式
 * @method string getSearchValue() 获取搜索值
 * @method void setSearchValue(string $SearchValue) 设置搜索值
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 */
class SearchDocListRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 知识库名称
     */
    public $CollectionView;

    /**
     * @var string 搜索模式
     */
    public $SearchKey;

    /**
     * @var string 搜索值
     */
    public $SearchValue;

    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @param string $EnvId 环境ID
     * @param string $CollectionView 知识库名称
     * @param string $SearchKey 搜索模式
     * @param string $SearchValue 搜索值
     * @param integer $PageNo 页码
     * @param integer $PageSize 页大小
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("CollectionView",$param) and $param["CollectionView"] !== null) {
            $this->CollectionView = $param["CollectionView"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
