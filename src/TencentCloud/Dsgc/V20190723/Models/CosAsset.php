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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产报告-cos的敏感资产报告详情
 *
 * @method integer getBucketNums() 获取桶的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketNums(integer $BucketNums) 设置桶的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveBucketNums() 获取敏感桶的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveBucketNums(integer $SensitiveBucketNums) 设置敏感桶的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileNums() 获取文件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileNums(integer $FileNums) 设置文件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveFileNums() 获取敏感文件的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveFileNums(integer $SensitiveFileNums) 设置敏感文件的个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosAsset extends AbstractModel
{
    /**
     * @var integer 桶的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketNums;

    /**
     * @var integer 敏感桶的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveBucketNums;

    /**
     * @var integer 文件个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileNums;

    /**
     * @var integer 敏感文件的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveFileNums;

    /**
     * @param integer $BucketNums 桶的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveBucketNums 敏感桶的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileNums 文件个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveFileNums 敏感文件的个数
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
        if (array_key_exists("BucketNums",$param) and $param["BucketNums"] !== null) {
            $this->BucketNums = $param["BucketNums"];
        }

        if (array_key_exists("SensitiveBucketNums",$param) and $param["SensitiveBucketNums"] !== null) {
            $this->SensitiveBucketNums = $param["SensitiveBucketNums"];
        }

        if (array_key_exists("FileNums",$param) and $param["FileNums"] !== null) {
            $this->FileNums = $param["FileNums"];
        }

        if (array_key_exists("SensitiveFileNums",$param) and $param["SensitiveFileNums"] !== null) {
            $this->SensitiveFileNums = $param["SensitiveFileNums"];
        }
    }
}
