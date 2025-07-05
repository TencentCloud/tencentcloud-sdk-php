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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES 词库信息
 *
 * @method array getMainDict() 获取启用词词典列表
 * @method void setMainDict(array $MainDict) 设置启用词词典列表
 * @method array getStopwords() 获取停用词词典列表
 * @method void setStopwords(array $Stopwords) 设置停用词词典列表
 * @method array getQQDict() 获取QQ分词词典列表
 * @method void setQQDict(array $QQDict) 设置QQ分词词典列表
 * @method array getSynonym() 获取同义词词典列表
 * @method void setSynonym(array $Synonym) 设置同义词词典列表
 * @method string getUpdateType() 获取更新词典类型
 * @method void setUpdateType(string $UpdateType) 设置更新词典类型
 * @method array getAnsjMain() 获取ansj启用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnsjMain(array $AnsjMain) 设置ansj启用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnsjStop() 获取ansj停用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnsjStop(array $AnsjStop) 设置ansj停用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnsjAmbiguity() 获取ansj歧义词库列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnsjAmbiguity(array $AnsjAmbiguity) 设置ansj歧义词库列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnsjSynonyms() 获取ansj同义词词典列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnsjSynonyms(array $AnsjSynonyms) 设置ansj同义词词典列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class EsDictionaryInfo extends AbstractModel
{
    /**
     * @var array 启用词词典列表
     */
    public $MainDict;

    /**
     * @var array 停用词词典列表
     */
    public $Stopwords;

    /**
     * @var array QQ分词词典列表
     */
    public $QQDict;

    /**
     * @var array 同义词词典列表
     */
    public $Synonym;

    /**
     * @var string 更新词典类型
     */
    public $UpdateType;

    /**
     * @var array ansj启用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnsjMain;

    /**
     * @var array ansj停用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnsjStop;

    /**
     * @var array ansj歧义词库列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnsjAmbiguity;

    /**
     * @var array ansj同义词词典列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnsjSynonyms;

    /**
     * @param array $MainDict 启用词词典列表
     * @param array $Stopwords 停用词词典列表
     * @param array $QQDict QQ分词词典列表
     * @param array $Synonym 同义词词典列表
     * @param string $UpdateType 更新词典类型
     * @param array $AnsjMain ansj启用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnsjStop ansj停用词词典列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnsjAmbiguity ansj歧义词库列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnsjSynonyms ansj同义词词典列表
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
        if (array_key_exists("MainDict",$param) and $param["MainDict"] !== null) {
            $this->MainDict = [];
            foreach ($param["MainDict"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->MainDict, $obj);
            }
        }

        if (array_key_exists("Stopwords",$param) and $param["Stopwords"] !== null) {
            $this->Stopwords = [];
            foreach ($param["Stopwords"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->Stopwords, $obj);
            }
        }

        if (array_key_exists("QQDict",$param) and $param["QQDict"] !== null) {
            $this->QQDict = [];
            foreach ($param["QQDict"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->QQDict, $obj);
            }
        }

        if (array_key_exists("Synonym",$param) and $param["Synonym"] !== null) {
            $this->Synonym = [];
            foreach ($param["Synonym"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->Synonym, $obj);
            }
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("AnsjMain",$param) and $param["AnsjMain"] !== null) {
            $this->AnsjMain = [];
            foreach ($param["AnsjMain"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjMain, $obj);
            }
        }

        if (array_key_exists("AnsjStop",$param) and $param["AnsjStop"] !== null) {
            $this->AnsjStop = [];
            foreach ($param["AnsjStop"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjStop, $obj);
            }
        }

        if (array_key_exists("AnsjAmbiguity",$param) and $param["AnsjAmbiguity"] !== null) {
            $this->AnsjAmbiguity = [];
            foreach ($param["AnsjAmbiguity"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjAmbiguity, $obj);
            }
        }

        if (array_key_exists("AnsjSynonyms",$param) and $param["AnsjSynonyms"] !== null) {
            $this->AnsjSynonyms = [];
            foreach ($param["AnsjSynonyms"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjSynonyms, $obj);
            }
        }
    }
}
