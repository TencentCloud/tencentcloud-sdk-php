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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全镜像病毒信息
 *
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method integer getRiskLevel() 获取风险等级
 * @method void setRiskLevel(integer $RiskLevel) 设置风险等级
 * @method string getVirusName() 获取病毒名称
 * @method void setVirusName(string $VirusName) 设置病毒名称
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getSolution() 获取修护建议
 * @method void setSolution(string $Solution) 设置修护建议
 * @method integer getSize() 获取大小
 * @method void setSize(integer $Size) 设置大小
 * @method string getFirstScanTime() 获取首次发现时间
 * @method void setFirstScanTime(string $FirstScanTime) 设置首次发现时间
 * @method string getLatestScanTime() 获取最近扫描时间
 * @method void setLatestScanTime(string $LatestScanTime) 设置最近扫描时间
 * @method string getMd5() 获取文件md5
 * @method void setMd5(string $Md5) 设置文件md5
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method array getCheckPlatform() 获取检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
 * @method void setCheckPlatform(array $CheckPlatform) 设置检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
 */
class ImageVirusInfo extends AbstractModel
{
    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var integer 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 病毒名称
     */
    public $VirusName;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 修护建议
     */
    public $Solution;

    /**
     * @var integer 大小
     */
    public $Size;

    /**
     * @var string 首次发现时间
     */
    public $FirstScanTime;

    /**
     * @var string 最近扫描时间
     */
    public $LatestScanTime;

    /**
     * @var string 文件md5
     */
    public $Md5;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var array 检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
     */
    public $CheckPlatform;

    /**
     * @param string $Path 路径
     * @param integer $RiskLevel 风险等级
     * @param string $VirusName 病毒名称
     * @param array $Tags 标签
     * @param string $Desc 描述
     * @param string $Solution 修护建议
     * @param integer $Size 大小
     * @param string $FirstScanTime 首次发现时间
     * @param string $LatestScanTime 最近扫描时间
     * @param string $Md5 文件md5
     * @param string $FileName 文件名称
     * @param array $CheckPlatform 检测平台
1: 云查杀引擎
2: tav
3: binaryAi
4: 异常行为
5: 威胁情报
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }
    }
}
