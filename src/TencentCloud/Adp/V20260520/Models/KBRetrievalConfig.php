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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个知识库检索配置
 *
 * @method DBRetrievalConfig getDbRetrievalConfig() 获取<p>数据库检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbRetrievalConfig(DBRetrievalConfig $DbRetrievalConfig) 设置<p>数据库检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocRetrievalConfig getDocRetrievalConfig() 获取<p>文档检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocRetrievalConfig(DocRetrievalConfig $DocRetrievalConfig) 设置<p>文档检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKbId() 获取<p>知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>知识库 ID</p>
 * @method RetrievalOption getOptionConfig() 获取<p>检索可选配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionConfig(RetrievalOption $OptionConfig) 设置<p>检索可选配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QARetrievalConfig getQaRetrievalConfig() 获取<p>QA 检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaRetrievalConfig(QARetrievalConfig $QaRetrievalConfig) 设置<p>QA 检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RerankConfig getRerankConfig() 获取<p>rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerankConfig(RerankConfig $RerankConfig) 设置<p>rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SearchFilterConfig getSearchFilterConfig() 获取<p>检索过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchFilterConfig(SearchFilterConfig $SearchFilterConfig) 设置<p>检索过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyType() 获取<p>检索策略：1=混合，2=语义，3=关键词，4=无<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>混合检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>语义检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>关键词检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>无语义/向量检索</td></tr></tbody></table></p>
 * @method void setStrategyType(integer $StrategyType) 设置<p>检索策略：1=混合，2=语义，3=关键词，4=无<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>混合检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>语义检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>关键词检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>无语义/向量检索</td></tr></tbody></table></p>
 * @method ModelDetailInfo getTextToSqlModel() 获取<p>text2sql 模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextToSqlModel(ModelDetailInfo $TextToSqlModel) 设置<p>text2sql 模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class KBRetrievalConfig extends AbstractModel
{
    /**
     * @var DBRetrievalConfig <p>数据库检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbRetrievalConfig;

    /**
     * @var DocRetrievalConfig <p>文档检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocRetrievalConfig;

    /**
     * @var string <p>知识库 ID</p>
     */
    public $KbId;

    /**
     * @var RetrievalOption <p>检索可选配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionConfig;

    /**
     * @var QARetrievalConfig <p>QA 检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaRetrievalConfig;

    /**
     * @var RerankConfig <p>rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerankConfig;

    /**
     * @var SearchFilterConfig <p>检索过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchFilterConfig;

    /**
     * @var integer <p>检索策略：1=混合，2=语义，3=关键词，4=无<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>混合检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>语义检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>关键词检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>无语义/向量检索</td></tr></tbody></table></p>
     */
    public $StrategyType;

    /**
     * @var ModelDetailInfo <p>text2sql 模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextToSqlModel;

    /**
     * @param DBRetrievalConfig $DbRetrievalConfig <p>数据库检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocRetrievalConfig $DocRetrievalConfig <p>文档检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KbId <p>知识库 ID</p>
     * @param RetrievalOption $OptionConfig <p>检索可选配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QARetrievalConfig $QaRetrievalConfig <p>QA 检索配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RerankConfig $RerankConfig <p>rerank 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SearchFilterConfig $SearchFilterConfig <p>检索过滤配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyType <p>检索策略：1=混合，2=语义，3=关键词，4=无<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>混合检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>语义检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>关键词检索</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>无语义/向量检索</td></tr></tbody></table></p>
     * @param ModelDetailInfo $TextToSqlModel <p>text2sql 模型</p>
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
        if (array_key_exists("DbRetrievalConfig",$param) and $param["DbRetrievalConfig"] !== null) {
            $this->DbRetrievalConfig = new DBRetrievalConfig();
            $this->DbRetrievalConfig->deserialize($param["DbRetrievalConfig"]);
        }

        if (array_key_exists("DocRetrievalConfig",$param) and $param["DocRetrievalConfig"] !== null) {
            $this->DocRetrievalConfig = new DocRetrievalConfig();
            $this->DocRetrievalConfig->deserialize($param["DocRetrievalConfig"]);
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("OptionConfig",$param) and $param["OptionConfig"] !== null) {
            $this->OptionConfig = new RetrievalOption();
            $this->OptionConfig->deserialize($param["OptionConfig"]);
        }

        if (array_key_exists("QaRetrievalConfig",$param) and $param["QaRetrievalConfig"] !== null) {
            $this->QaRetrievalConfig = new QARetrievalConfig();
            $this->QaRetrievalConfig->deserialize($param["QaRetrievalConfig"]);
        }

        if (array_key_exists("RerankConfig",$param) and $param["RerankConfig"] !== null) {
            $this->RerankConfig = new RerankConfig();
            $this->RerankConfig->deserialize($param["RerankConfig"]);
        }

        if (array_key_exists("SearchFilterConfig",$param) and $param["SearchFilterConfig"] !== null) {
            $this->SearchFilterConfig = new SearchFilterConfig();
            $this->SearchFilterConfig->deserialize($param["SearchFilterConfig"]);
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("TextToSqlModel",$param) and $param["TextToSqlModel"] !== null) {
            $this->TextToSqlModel = new ModelDetailInfo();
            $this->TextToSqlModel->deserialize($param["TextToSqlModel"]);
        }
    }
}
