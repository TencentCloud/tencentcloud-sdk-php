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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mongodb索引项
 *
 * @method string getClusterId() 获取实例id。
 * @method void setClusterId(string $ClusterId) 设置实例id。
 * @method string getCollection() 获取表名。
 * @method void setCollection(string $Collection) 设置表名。
 * @method string getDb() 获取库名。
 * @method void setDb(string $Db) 设置库名。
 * @method integer getLevel() 获取优化级别，1-4，优先级从高到低。
 * @method void setLevel(integer $Level) 设置优化级别，1-4，优先级从高到低。
 * @method integer getScore() 获取得分。
 * @method void setScore(integer $Score) 设置得分。
 * @method array getIndexesToBuild() 获取推荐索引列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexesToBuild(array $IndexesToBuild) 设置推荐索引列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndexesToDrop() 获取无效索引列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexesToDrop(array $IndexesToDrop) 设置无效索引列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongoDBIndex extends AbstractModel
{
    /**
     * @var string 实例id。
     */
    public $ClusterId;

    /**
     * @var string 表名。
     */
    public $Collection;

    /**
     * @var string 库名。
     */
    public $Db;

    /**
     * @var integer 优化级别，1-4，优先级从高到低。
     */
    public $Level;

    /**
     * @var integer 得分。
     */
    public $Score;

    /**
     * @var array 推荐索引列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexesToBuild;

    /**
     * @var array 无效索引列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexesToDrop;

    /**
     * @param string $ClusterId 实例id。
     * @param string $Collection 表名。
     * @param string $Db 库名。
     * @param integer $Level 优化级别，1-4，优先级从高到低。
     * @param integer $Score 得分。
     * @param array $IndexesToBuild 推荐索引列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IndexesToDrop 无效索引列表。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Collection",$param) and $param["Collection"] !== null) {
            $this->Collection = $param["Collection"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("IndexesToBuild",$param) and $param["IndexesToBuild"] !== null) {
            $this->IndexesToBuild = [];
            foreach ($param["IndexesToBuild"] as $key => $value){
                $obj = new IndexesToBuild();
                $obj->deserialize($value);
                array_push($this->IndexesToBuild, $obj);
            }
        }

        if (array_key_exists("IndexesToDrop",$param) and $param["IndexesToDrop"] !== null) {
            $this->IndexesToDrop = [];
            foreach ($param["IndexesToDrop"] as $key => $value){
                $obj = new IndexesToDrop();
                $obj->deserialize($value);
                array_push($this->IndexesToDrop, $obj);
            }
        }
    }
}
