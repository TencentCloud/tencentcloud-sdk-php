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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像病毒信息
 *
 * @method string getPath() 获取<p>木马路径</p>
 * @method void setPath(string $Path) 设置<p>木马路径</p>
 * @method string getRiskLevel() 获取<p>风险级别</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险级别</p>
 * @method string getCategory() 获取<p>类别</p>
 * @method void setCategory(string $Category) 设置<p>类别</p>
 * @method string getVirusName() 获取<p>木马名</p>
 * @method void setVirusName(string $VirusName) 设置<p>木马名</p>
 * @method string getTags() 获取<p>木马Tag</p>
 * @method void setTags(string $Tags) 设置<p>木马Tag</p>
 * @method string getFileType() 获取<p>文件类型</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getFileMd5() 获取<p>文件md5</p>
 * @method void setFileMd5(string $FileMd5) 设置<p>文件md5</p>
 * @method integer getFileSize() 获取<p>文件大小</p>
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小</p>
 * @method string getFirstDetectedTime() 获取<p>首次检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstDetectedTime(string $FirstDetectedTime) 设置<p>首次检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestDetectedTime() 获取<p>最后检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestDetectedTime(string $LatestDetectedTime) 设置<p>最后检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method string getOwnerAccountName() 获取<p>所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>所属账号名</p>
 * @method string getOwnerUin() 获取<p>所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>所属账号uin</p>
 * @method integer getOwnerAppId() 获取<p>所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>所属账号appid</p>
 * @method string getCheckPlatform() 获取<p>检出平台</p>
 * @method void setCheckPlatform(string $CheckPlatform) 设置<p>检出平台</p>
 * @method integer getAffectImageCount() 获取<p>影响镜像数</p>
 * @method void setAffectImageCount(integer $AffectImageCount) 设置<p>影响镜像数</p>
 * @method string getLayerId() 获取<p>镜像层id</p>
 * @method void setLayerId(string $LayerId) 设置<p>镜像层id</p>
 * @method integer getId() 获取<p>木马记录id</p>
 * @method void setId(integer $Id) 设置<p>木马记录id</p>
 * @method string getSuggestion() 获取<p>木马处置建议</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>木马处置建议</p>
 * @method string getDescription() 获取<p>木马描述</p>
 * @method void setDescription(string $Description) 设置<p>木马描述</p>
 * @method string getVirusType() 获取<p>木马类型</p>
 * @method void setVirusType(string $VirusType) 设置<p>木马类型</p>
 */
class ImageVirus extends AbstractModel
{
    /**
     * @var string <p>木马路径</p>
     */
    public $Path;

    /**
     * @var string <p>风险级别</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>类别</p>
     */
    public $Category;

    /**
     * @var string <p>木马名</p>
     */
    public $VirusName;

    /**
     * @var string <p>木马Tag</p>
     */
    public $Tags;

    /**
     * @var string <p>文件类型</p>
     */
    public $FileType;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>文件md5</p>
     */
    public $FileMd5;

    /**
     * @var integer <p>文件大小</p>
     */
    public $FileSize;

    /**
     * @var string <p>首次检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstDetectedTime;

    /**
     * @var string <p>最后检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestDetectedTime;

    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>检出平台</p>
     */
    public $CheckPlatform;

    /**
     * @var integer <p>影响镜像数</p>
     */
    public $AffectImageCount;

    /**
     * @var string <p>镜像层id</p>
     */
    public $LayerId;

    /**
     * @var integer <p>木马记录id</p>
     */
    public $Id;

    /**
     * @var string <p>木马处置建议</p>
     */
    public $Suggestion;

    /**
     * @var string <p>木马描述</p>
     */
    public $Description;

    /**
     * @var string <p>木马类型</p>
     */
    public $VirusType;

    /**
     * @param string $Path <p>木马路径</p>
     * @param string $RiskLevel <p>风险级别</p>
     * @param string $Category <p>类别</p>
     * @param string $VirusName <p>木马名</p>
     * @param string $Tags <p>木马Tag</p>
     * @param string $FileType <p>文件类型</p>
     * @param string $FileName <p>文件名</p>
     * @param string $FileMd5 <p>文件md5</p>
     * @param integer $FileSize <p>文件大小</p>
     * @param string $FirstDetectedTime <p>首次检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestDetectedTime <p>最后检测时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $ImageId <p>镜像id</p>
     * @param string $OwnerAccountName <p>所属账号名</p>
     * @param string $OwnerUin <p>所属账号uin</p>
     * @param integer $OwnerAppId <p>所属账号appid</p>
     * @param string $CheckPlatform <p>检出平台</p>
     * @param integer $AffectImageCount <p>影响镜像数</p>
     * @param string $LayerId <p>镜像层id</p>
     * @param integer $Id <p>木马记录id</p>
     * @param string $Suggestion <p>木马处置建议</p>
     * @param string $Description <p>木马描述</p>
     * @param string $VirusType <p>木马类型</p>
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

        if (array_key_exists("FirstDetectedTime",$param) and $param["FirstDetectedTime"] !== null) {
            $this->FirstDetectedTime = $param["FirstDetectedTime"];
        }

        if (array_key_exists("LatestDetectedTime",$param) and $param["LatestDetectedTime"] !== null) {
            $this->LatestDetectedTime = $param["LatestDetectedTime"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("CheckPlatform",$param) and $param["CheckPlatform"] !== null) {
            $this->CheckPlatform = $param["CheckPlatform"];
        }

        if (array_key_exists("AffectImageCount",$param) and $param["AffectImageCount"] !== null) {
            $this->AffectImageCount = $param["AffectImageCount"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VirusType",$param) and $param["VirusType"] !== null) {
            $this->VirusType = $param["VirusType"];
        }
    }
}
