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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监测侵权信息详情
 *
 * @method integer getTortId() 获取侵权信息ID
 * @method void setTortId(integer $TortId) 设置侵权信息ID
 * @method string getTortTitle() 获取侵权标题
 * @method void setTortTitle(string $TortTitle) 设置侵权标题
 * @method string getTortPlat() 获取侵权平台
 * @method void setTortPlat(string $TortPlat) 设置侵权平台
 * @method string getTortURL() 获取侵权链接
 * @method void setTortURL(string $TortURL) 设置侵权链接
 * @method string getPubTime() 获取侵权链接发布时间
 * @method void setPubTime(string $PubTime) 设置侵权链接发布时间
 * @method string getAuthor() 获取作者
 * @method void setAuthor(string $Author) 设置作者
 * @method string getDetectTime() 获取xxx
 * @method void setDetectTime(string $DetectTime) 设置xxx
 * @method integer getObtainStatus() 获取1
 * @method void setObtainStatus(integer $ObtainStatus) 设置1
 * @method integer getRightStatus() 获取1
 * @method void setRightStatus(integer $RightStatus) 设置1
 * @method integer getBlockStatus() 获取1
 * @method void setBlockStatus(integer $BlockStatus) 设置1
 * @method string getTortNum() 获取1
 * @method void setTortNum(string $TortNum) 设置1
 * @method string getObtainNote() 获取1
 * @method void setObtainNote(string $ObtainNote) 设置1
 * @method string getWorkTitle() 获取1
 * @method void setWorkTitle(string $WorkTitle) 设置1
 * @method string getTortSite() 获取1
 * @method void setTortSite(string $TortSite) 设置1
 * @method string getICP() 获取1
 * @method void setICP(string $ICP) 设置1
 * @method string getRightNote() 获取1
 * @method void setRightNote(string $RightNote) 设置1
 * @method integer getObtainType() 获取1
 * @method void setObtainType(integer $ObtainType) 设置1
 * @method string getBlockNote() 获取1
 * @method void setBlockNote(string $BlockNote) 设置1
 * @method integer getWorkId() 获取1
 * @method void setWorkId(integer $WorkId) 设置1
 * @method string getWorkName() 获取1
 * @method void setWorkName(string $WorkName) 设置1
 * @method integer getAuthStatus() 获取1
 * @method void setAuthStatus(integer $AuthStatus) 设置1
 * @method integer getCommStatus() 获取1
 * @method void setCommStatus(integer $CommStatus) 设置1
 * @method integer getEvidenceStatus() 获取1
 * @method void setEvidenceStatus(integer $EvidenceStatus) 设置1
 * @method integer getIsProducer() 获取1
 * @method void setIsProducer(integer $IsProducer) 设置1
 * @method integer getIsOverseas() 获取1
 * @method void setIsOverseas(integer $IsOverseas) 设置1
 */
class MonitorTort extends AbstractModel
{
    /**
     * @var integer 侵权信息ID
     */
    public $TortId;

    /**
     * @var string 侵权标题
     */
    public $TortTitle;

    /**
     * @var string 侵权平台
     */
    public $TortPlat;

    /**
     * @var string 侵权链接
     */
    public $TortURL;

    /**
     * @var string 侵权链接发布时间
     */
    public $PubTime;

    /**
     * @var string 作者
     */
    public $Author;

    /**
     * @var string xxx
     */
    public $DetectTime;

    /**
     * @var integer 1
     */
    public $ObtainStatus;

    /**
     * @var integer 1
     */
    public $RightStatus;

    /**
     * @var integer 1
     */
    public $BlockStatus;

    /**
     * @var string 1
     */
    public $TortNum;

    /**
     * @var string 1
     */
    public $ObtainNote;

    /**
     * @var string 1
     */
    public $WorkTitle;

    /**
     * @var string 1
     */
    public $TortSite;

    /**
     * @var string 1
     */
    public $ICP;

    /**
     * @var string 1
     */
    public $RightNote;

    /**
     * @var integer 1
     */
    public $ObtainType;

    /**
     * @var string 1
     */
    public $BlockNote;

    /**
     * @var integer 1
     */
    public $WorkId;

    /**
     * @var string 1
     */
    public $WorkName;

    /**
     * @var integer 1
     */
    public $AuthStatus;

    /**
     * @var integer 1
     */
    public $CommStatus;

    /**
     * @var integer 1
     */
    public $EvidenceStatus;

    /**
     * @var integer 1
     */
    public $IsProducer;

    /**
     * @var integer 1
     */
    public $IsOverseas;

    /**
     * @param integer $TortId 侵权信息ID
     * @param string $TortTitle 侵权标题
     * @param string $TortPlat 侵权平台
     * @param string $TortURL 侵权链接
     * @param string $PubTime 侵权链接发布时间
     * @param string $Author 作者
     * @param string $DetectTime xxx
     * @param integer $ObtainStatus 1
     * @param integer $RightStatus 1
     * @param integer $BlockStatus 1
     * @param string $TortNum 1
     * @param string $ObtainNote 1
     * @param string $WorkTitle 1
     * @param string $TortSite 1
     * @param string $ICP 1
     * @param string $RightNote 1
     * @param integer $ObtainType 1
     * @param string $BlockNote 1
     * @param integer $WorkId 1
     * @param string $WorkName 1
     * @param integer $AuthStatus 1
     * @param integer $CommStatus 1
     * @param integer $EvidenceStatus 1
     * @param integer $IsProducer 1
     * @param integer $IsOverseas 1
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
        if (array_key_exists("TortId",$param) and $param["TortId"] !== null) {
            $this->TortId = $param["TortId"];
        }

        if (array_key_exists("TortTitle",$param) and $param["TortTitle"] !== null) {
            $this->TortTitle = $param["TortTitle"];
        }

        if (array_key_exists("TortPlat",$param) and $param["TortPlat"] !== null) {
            $this->TortPlat = $param["TortPlat"];
        }

        if (array_key_exists("TortURL",$param) and $param["TortURL"] !== null) {
            $this->TortURL = $param["TortURL"];
        }

        if (array_key_exists("PubTime",$param) and $param["PubTime"] !== null) {
            $this->PubTime = $param["PubTime"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("ObtainStatus",$param) and $param["ObtainStatus"] !== null) {
            $this->ObtainStatus = $param["ObtainStatus"];
        }

        if (array_key_exists("RightStatus",$param) and $param["RightStatus"] !== null) {
            $this->RightStatus = $param["RightStatus"];
        }

        if (array_key_exists("BlockStatus",$param) and $param["BlockStatus"] !== null) {
            $this->BlockStatus = $param["BlockStatus"];
        }

        if (array_key_exists("TortNum",$param) and $param["TortNum"] !== null) {
            $this->TortNum = $param["TortNum"];
        }

        if (array_key_exists("ObtainNote",$param) and $param["ObtainNote"] !== null) {
            $this->ObtainNote = $param["ObtainNote"];
        }

        if (array_key_exists("WorkTitle",$param) and $param["WorkTitle"] !== null) {
            $this->WorkTitle = $param["WorkTitle"];
        }

        if (array_key_exists("TortSite",$param) and $param["TortSite"] !== null) {
            $this->TortSite = $param["TortSite"];
        }

        if (array_key_exists("ICP",$param) and $param["ICP"] !== null) {
            $this->ICP = $param["ICP"];
        }

        if (array_key_exists("RightNote",$param) and $param["RightNote"] !== null) {
            $this->RightNote = $param["RightNote"];
        }

        if (array_key_exists("ObtainType",$param) and $param["ObtainType"] !== null) {
            $this->ObtainType = $param["ObtainType"];
        }

        if (array_key_exists("BlockNote",$param) and $param["BlockNote"] !== null) {
            $this->BlockNote = $param["BlockNote"];
        }

        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("WorkName",$param) and $param["WorkName"] !== null) {
            $this->WorkName = $param["WorkName"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("CommStatus",$param) and $param["CommStatus"] !== null) {
            $this->CommStatus = $param["CommStatus"];
        }

        if (array_key_exists("EvidenceStatus",$param) and $param["EvidenceStatus"] !== null) {
            $this->EvidenceStatus = $param["EvidenceStatus"];
        }

        if (array_key_exists("IsProducer",$param) and $param["IsProducer"] !== null) {
            $this->IsProducer = $param["IsProducer"];
        }

        if (array_key_exists("IsOverseas",$param) and $param["IsOverseas"] !== null) {
            $this->IsOverseas = $param["IsOverseas"];
        }
    }
}
