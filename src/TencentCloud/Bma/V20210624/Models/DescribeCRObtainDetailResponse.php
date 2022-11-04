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
 * DescribeCRObtainDetail返回参数结构体
 *
 * @method string getWorkName() 获取作品名称
 * @method void setWorkName(string $WorkName) 设置作品名称
 * @method string getTortURL() 获取侵权链接
 * @method void setTortURL(string $TortURL) 设置侵权链接
 * @method string getObtainTime() 获取取证时间
 * @method void setObtainTime(string $ObtainTime) 设置取证时间
 * @method string getObtainType() 获取取证类型
 * @method void setObtainType(string $ObtainType) 设置取证类型
 * @method string getObtainNum() 获取取证号
 * @method void setObtainNum(string $ObtainNum) 设置取证号
 * @method string getDepositFile() 获取证据地址
 * @method void setDepositFile(string $DepositFile) 设置证据地址
 * @method string getDepositCert() 获取公证信息地址
 * @method void setDepositCert(string $DepositCert) 设置公证信息地址
 * @method string getWorkType() 获取内容类型
 * @method void setWorkType(string $WorkType) 设置内容类型
 * @method string getWorkCategory() 获取作品类型
 * @method void setWorkCategory(string $WorkCategory) 设置作品类型
 * @method integer getTortId() 获取侵权ID
 * @method void setTortId(integer $TortId) 设置侵权ID
 * @method string getTortNum() 获取侵权编号
 * @method void setTortNum(string $TortNum) 设置侵权编号
 * @method integer getObtainStatus() 获取取证状态
 * @method void setObtainStatus(integer $ObtainStatus) 设置取证状态
 * @method string getObtainNote() 获取取证状态说明
 * @method void setObtainNote(string $ObtainNote) 设置取证状态说明
 * @method string getObtainDuration() 获取取证时长
 * @method void setObtainDuration(string $ObtainDuration) 设置取证时长
 * @method string getObtainName() 获取取证名称
 * @method void setObtainName(string $ObtainName) 设置取证名称
 * @method string getDepositPdfCert() 获取取证公证信息
 * @method void setDepositPdfCert(string $DepositPdfCert) 设置取证公证信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCRObtainDetailResponse extends AbstractModel
{
    /**
     * @var string 作品名称
     */
    public $WorkName;

    /**
     * @var string 侵权链接
     */
    public $TortURL;

    /**
     * @var string 取证时间
     */
    public $ObtainTime;

    /**
     * @var string 取证类型
     */
    public $ObtainType;

    /**
     * @var string 取证号
     */
    public $ObtainNum;

    /**
     * @var string 证据地址
     */
    public $DepositFile;

    /**
     * @var string 公证信息地址
     */
    public $DepositCert;

    /**
     * @var string 内容类型
     */
    public $WorkType;

    /**
     * @var string 作品类型
     */
    public $WorkCategory;

    /**
     * @var integer 侵权ID
     */
    public $TortId;

    /**
     * @var string 侵权编号
     */
    public $TortNum;

    /**
     * @var integer 取证状态
     */
    public $ObtainStatus;

    /**
     * @var string 取证状态说明
     */
    public $ObtainNote;

    /**
     * @var string 取证时长
     */
    public $ObtainDuration;

    /**
     * @var string 取证名称
     */
    public $ObtainName;

    /**
     * @var string 取证公证信息
     */
    public $DepositPdfCert;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $WorkName 作品名称
     * @param string $TortURL 侵权链接
     * @param string $ObtainTime 取证时间
     * @param string $ObtainType 取证类型
     * @param string $ObtainNum 取证号
     * @param string $DepositFile 证据地址
     * @param string $DepositCert 公证信息地址
     * @param string $WorkType 内容类型
     * @param string $WorkCategory 作品类型
     * @param integer $TortId 侵权ID
     * @param string $TortNum 侵权编号
     * @param integer $ObtainStatus 取证状态
     * @param string $ObtainNote 取证状态说明
     * @param string $ObtainDuration 取证时长
     * @param string $ObtainName 取证名称
     * @param string $DepositPdfCert 取证公证信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("WorkName",$param) and $param["WorkName"] !== null) {
            $this->WorkName = $param["WorkName"];
        }

        if (array_key_exists("TortURL",$param) and $param["TortURL"] !== null) {
            $this->TortURL = $param["TortURL"];
        }

        if (array_key_exists("ObtainTime",$param) and $param["ObtainTime"] !== null) {
            $this->ObtainTime = $param["ObtainTime"];
        }

        if (array_key_exists("ObtainType",$param) and $param["ObtainType"] !== null) {
            $this->ObtainType = $param["ObtainType"];
        }

        if (array_key_exists("ObtainNum",$param) and $param["ObtainNum"] !== null) {
            $this->ObtainNum = $param["ObtainNum"];
        }

        if (array_key_exists("DepositFile",$param) and $param["DepositFile"] !== null) {
            $this->DepositFile = $param["DepositFile"];
        }

        if (array_key_exists("DepositCert",$param) and $param["DepositCert"] !== null) {
            $this->DepositCert = $param["DepositCert"];
        }

        if (array_key_exists("WorkType",$param) and $param["WorkType"] !== null) {
            $this->WorkType = $param["WorkType"];
        }

        if (array_key_exists("WorkCategory",$param) and $param["WorkCategory"] !== null) {
            $this->WorkCategory = $param["WorkCategory"];
        }

        if (array_key_exists("TortId",$param) and $param["TortId"] !== null) {
            $this->TortId = $param["TortId"];
        }

        if (array_key_exists("TortNum",$param) and $param["TortNum"] !== null) {
            $this->TortNum = $param["TortNum"];
        }

        if (array_key_exists("ObtainStatus",$param) and $param["ObtainStatus"] !== null) {
            $this->ObtainStatus = $param["ObtainStatus"];
        }

        if (array_key_exists("ObtainNote",$param) and $param["ObtainNote"] !== null) {
            $this->ObtainNote = $param["ObtainNote"];
        }

        if (array_key_exists("ObtainDuration",$param) and $param["ObtainDuration"] !== null) {
            $this->ObtainDuration = $param["ObtainDuration"];
        }

        if (array_key_exists("ObtainName",$param) and $param["ObtainName"] !== null) {
            $this->ObtainName = $param["ObtainName"];
        }

        if (array_key_exists("DepositPdfCert",$param) and $param["DepositPdfCert"] !== null) {
            $this->DepositPdfCert = $param["DepositPdfCert"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
