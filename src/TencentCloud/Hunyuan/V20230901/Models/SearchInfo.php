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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索结果信息
 *
 * @method array getSearchResults() 获取搜索引文信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchResults(array $SearchResults) 设置搜索引文信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Mindmap getMindmap() 获取脑图（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMindmap(Mindmap $Mindmap) 设置脑图（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelevantEvents() 获取相关事件（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelevantEvents(array $RelevantEvents) 设置相关事件（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelevantEntities() 获取相关组织及人物（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelevantEntities(array $RelevantEntities) 设置相关组织及人物（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTimeline() 获取时间线（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeline(array $Timeline) 设置时间线（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportDeepSearch() 获取是否命中搜索深度模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportDeepSearch(boolean $SupportDeepSearch) 设置是否命中搜索深度模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutline() 获取搜索回复大纲（深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutline(array $Outline) 设置搜索回复大纲（深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchInfo extends AbstractModel
{
    /**
     * @var array 搜索引文信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchResults;

    /**
     * @var Mindmap 脑图（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mindmap;

    /**
     * @var array 相关事件（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelevantEvents;

    /**
     * @var array 相关组织及人物（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelevantEntities;

    /**
     * @var array 时间线（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeline;

    /**
     * @var boolean 是否命中搜索深度模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportDeepSearch;

    /**
     * @var array 搜索回复大纲（深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Outline;

    /**
     * @param array $SearchResults 搜索引文信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Mindmap $Mindmap 脑图（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelevantEvents 相关事件（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelevantEntities 相关组织及人物（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Timeline 时间线（回复中不一定存在，流式协议中，仅在最后一条流式数据中返回，深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportDeepSearch 是否命中搜索深度模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Outline 搜索回复大纲（深度模式下返回）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SearchResults",$param) and $param["SearchResults"] !== null) {
            $this->SearchResults = [];
            foreach ($param["SearchResults"] as $key => $value){
                $obj = new SearchResult();
                $obj->deserialize($value);
                array_push($this->SearchResults, $obj);
            }
        }

        if (array_key_exists("Mindmap",$param) and $param["Mindmap"] !== null) {
            $this->Mindmap = new Mindmap();
            $this->Mindmap->deserialize($param["Mindmap"]);
        }

        if (array_key_exists("RelevantEvents",$param) and $param["RelevantEvents"] !== null) {
            $this->RelevantEvents = [];
            foreach ($param["RelevantEvents"] as $key => $value){
                $obj = new RelevantEvent();
                $obj->deserialize($value);
                array_push($this->RelevantEvents, $obj);
            }
        }

        if (array_key_exists("RelevantEntities",$param) and $param["RelevantEntities"] !== null) {
            $this->RelevantEntities = [];
            foreach ($param["RelevantEntities"] as $key => $value){
                $obj = new RelevantEntity();
                $obj->deserialize($value);
                array_push($this->RelevantEntities, $obj);
            }
        }

        if (array_key_exists("Timeline",$param) and $param["Timeline"] !== null) {
            $this->Timeline = [];
            foreach ($param["Timeline"] as $key => $value){
                $obj = new Timeline();
                $obj->deserialize($value);
                array_push($this->Timeline, $obj);
            }
        }

        if (array_key_exists("SupportDeepSearch",$param) and $param["SupportDeepSearch"] !== null) {
            $this->SupportDeepSearch = $param["SupportDeepSearch"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }
    }
}
