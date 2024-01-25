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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当申请导入临时文件时，需要传入文件名来获取访问秘钥，传入文件名的目的是临时文件名字可能出现冲突，后端会进行检测，如果检测到文件名已经存在了，会基于传入的文件名生成新的文件名，并提供最终在 Cos 中的最终存储绝对路径
 *
 * @method string getOriginFileName() 获取源文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginFileName(string $OriginFileName) 设置源文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetFileName() 获取共享存储文件名，即在共享存储文件中的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetFileName(string $TargetFileName) 设置共享存储文件名，即在共享存储文件中的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAbsoluteTargetFilePath() 获取共享存储最终存储绝对路径，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbsoluteTargetFilePath(string $AbsoluteTargetFilePath) 设置共享存储最终存储绝对路径，
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShareStorageFileMappingDTO extends AbstractModel
{
    /**
     * @var string 源文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginFileName;

    /**
     * @var string 共享存储文件名，即在共享存储文件中的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetFileName;

    /**
     * @var string 共享存储最终存储绝对路径，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbsoluteTargetFilePath;

    /**
     * @param string $OriginFileName 源文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetFileName 共享存储文件名，即在共享存储文件中的名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AbsoluteTargetFilePath 共享存储最终存储绝对路径，
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
        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("TargetFileName",$param) and $param["TargetFileName"] !== null) {
            $this->TargetFileName = $param["TargetFileName"];
        }

        if (array_key_exists("AbsoluteTargetFilePath",$param) and $param["AbsoluteTargetFilePath"] !== null) {
            $this->AbsoluteTargetFilePath = $param["AbsoluteTargetFilePath"];
        }
    }
}
