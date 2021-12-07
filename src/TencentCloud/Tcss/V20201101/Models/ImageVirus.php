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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全镜像病毒信息
 *
 * @method string getPath() 获取路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusName() 获取病毒名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusName(string $VirusName) 设置病毒名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSolution() 获取解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSolution(string $Solution) 设置解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMd5() 获取文件md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMd5(string $FileMd5) 设置文件md5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstScanTime() 获取首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstScanTime(string $FirstScanTime) 设置首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestScanTime() 获取最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestScanTime(string $LatestScanTime) 设置最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageVirus extends AbstractModel
{
    /**
     * @var string 路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string 病毒名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusName;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Solution;

    /**
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string 文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 文件md5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMd5;

    /**
     * @var integer 大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstScanTime;

    /**
     * @var string 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestScanTime;

    /**
     * @param string $Path 路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category 分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusName 病毒名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Solution 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMd5 文件md5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize 大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstScanTime 首次发现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestScanTime 最近扫描时间
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }
    }
}
