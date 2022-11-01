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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务历史版本
 *
 * @method string getRevision() 获取版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRevision(string $Revision) 设置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelFile() 获取模型文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelFile(string $ModelFile) 设置模型文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRawData() 获取原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawData(string $RawData) 设置原始数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceHistory extends AbstractModel
{
    /**
     * @var string 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Revision;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var string 模型文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelFile;

    /**
     * @var string 原始数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawData;

    /**
     * @param string $Revision 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image 镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelFile 模型文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RawData 原始数据
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
        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ModelFile",$param) and $param["ModelFile"] !== null) {
            $this->ModelFile = $param["ModelFile"];
        }

        if (array_key_exists("RawData",$param) and $param["RawData"] !== null) {
            $this->RawData = $param["RawData"];
        }
    }
}
