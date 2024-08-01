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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份实例中关于cos的信息
 *
 * @method string getCosBucket() 获取备份文件所在的cos桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucket(string $CosBucket) 设置备份文件所在的cos桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosPath() 获取备份文件所在的完整cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPath(string $CosPath) 设置备份文件所在的完整cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapShotPath() 获取备份文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapShotPath(string $SnapShotPath) 设置备份文件名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupCosInfo extends AbstractModel
{
    /**
     * @var string 备份文件所在的cos桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucket;

    /**
     * @var string 备份文件所在的完整cos路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPath;

    /**
     * @var string 备份文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapShotPath;

    /**
     * @param string $CosBucket 备份文件所在的cos桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosPath 备份文件所在的完整cos路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapShotPath 备份文件名称
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("SnapShotPath",$param) and $param["SnapShotPath"] !== null) {
            $this->SnapShotPath = $param["SnapShotPath"];
        }
    }
}
