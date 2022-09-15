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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后备索引元数据字段
 *
 * @method string getIndexName() 获取后备索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexName(string $IndexName) 设置后备索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexStatus() 获取后备索引状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStatus(string $IndexStatus) 设置后备索引状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexStorage() 获取后备索引存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStorage(integer $IndexStorage) 设置后备索引存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexPhrase() 获取后备索引当前生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexPhrase(string $IndexPhrase) 设置后备索引当前生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexCreateTime() 获取后备索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexCreateTime(string $IndexCreateTime) 设置后备索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackingIndexMetaField extends AbstractModel
{
    /**
     * @var string 后备索引名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexName;

    /**
     * @var string 后备索引状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStatus;

    /**
     * @var integer 后备索引存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStorage;

    /**
     * @var string 后备索引当前生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexPhrase;

    /**
     * @var string 后备索引创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexCreateTime;

    /**
     * @param string $IndexName 后备索引名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexStatus 后备索引状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexStorage 后备索引存储大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexPhrase 后备索引当前生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexCreateTime 后备索引创建时间
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
        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }

        if (array_key_exists("IndexStorage",$param) and $param["IndexStorage"] !== null) {
            $this->IndexStorage = $param["IndexStorage"];
        }

        if (array_key_exists("IndexPhrase",$param) and $param["IndexPhrase"] !== null) {
            $this->IndexPhrase = $param["IndexPhrase"];
        }

        if (array_key_exists("IndexCreateTime",$param) and $param["IndexCreateTime"] !== null) {
            $this->IndexCreateTime = $param["IndexCreateTime"];
        }
    }
}
