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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunReRank请求参数结构体
 *
 * @method string getQuery() 获取查询内容，必填
 * @method void setQuery(string $Query) 设置查询内容，必填
 * @method array getDocs() 获取文档列表，必填，最多20个
 * @method void setDocs(array $Docs) 设置文档列表，必填，最多20个
 * @method string getModel() 获取模型名称, 非必填，默认: lke-reranker-base
 * @method void setModel(string $Model) 设置模型名称, 非必填，默认: lke-reranker-base
 * @method array getDataList() 获取需要计算关联性的2段内容
 * @method void setDataList(array $DataList) 设置需要计算关联性的2段内容
 * @method boolean getOnline() 获取是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
 * @method void setOnline(boolean $Online) 设置是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
 */
class RunReRankRequest extends AbstractModel
{
    /**
     * @var string 查询内容，必填
     */
    public $Query;

    /**
     * @var array 文档列表，必填，最多20个
     */
    public $Docs;

    /**
     * @var string 模型名称, 非必填，默认: lke-reranker-base
     */
    public $Model;

    /**
     * @var array 需要计算关联性的2段内容
     * @deprecated
     */
    public $DataList;

    /**
     * @var boolean 是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
     * @deprecated
     */
    public $Online;

    /**
     * @param string $Query 查询内容，必填
     * @param array $Docs 文档列表，必填，最多20个
     * @param string $Model 模型名称, 非必填，默认: lke-reranker-base
     * @param array $DataList 需要计算关联性的2段内容
     * @param boolean $Online 是否在线, 后台异步任务使用离线, 实时任务使用在线, 默认值: false
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Docs",$param) and $param["Docs"] !== null) {
            $this->Docs = $param["Docs"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new ReRankDataObject();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}
