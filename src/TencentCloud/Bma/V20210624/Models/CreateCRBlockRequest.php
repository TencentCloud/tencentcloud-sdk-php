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
 * CreateCRBlock请求参数结构体
 *
 * @method integer getWorkId() 获取作品ID
 * @method void setWorkId(integer $WorkId) 设置作品ID
 * @method string getTortUrl() 获取侵权链接
 * @method void setTortUrl(string $TortUrl) 设置侵权链接
 * @method string getTortTitle() 获取侵权标题
 * @method void setTortTitle(string $TortTitle) 设置侵权标题
 * @method string getTortPlat() 获取侵权平台
 * @method void setTortPlat(string $TortPlat) 设置侵权平台
 * @method string getBlockUrl() 获取拦截结果回调地址
 * @method void setBlockUrl(string $BlockUrl) 设置拦截结果回调地址
 * @method string getFileUrl() 获取授权书下载地址
 * @method void setFileUrl(string $FileUrl) 设置授权书下载地址
 * @method string getValidStartDate() 获取授权书生效日期
 * @method void setValidStartDate(string $ValidStartDate) 设置授权书生效日期
 * @method string getValidEndDate() 获取授权书截止日期
 * @method void setValidEndDate(string $ValidEndDate) 设置授权书截止日期
 * @method string getTortPic() 获取侵权截图
 * @method void setTortPic(string $TortPic) 设置侵权截图
 * @method string getCommFileUrl() 获取委托书下载地址
 * @method void setCommFileUrl(string $CommFileUrl) 设置委托书下载地址
 * @method string getCommValidStartDate() 获取委托书生效日期
 * @method void setCommValidStartDate(string $CommValidStartDate) 设置委托书生效日期
 * @method string getCommValidEndDate() 获取委托书截止日期
 * @method void setCommValidEndDate(string $CommValidEndDate) 设置委托书截止日期
 * @method string getIsProducer() 获取是否著作权人：0-否 1-是
 * @method void setIsProducer(string $IsProducer) 设置是否著作权人：0-否 1-是
 * @method string getEvidenceFileUrl() 获取存证证书下载地址
 * @method void setEvidenceFileUrl(string $EvidenceFileUrl) 设置存证证书下载地址
 * @method string getEvidenceValidStartDate() 获取存证证书生效日期
 * @method void setEvidenceValidStartDate(string $EvidenceValidStartDate) 设置存证证书生效日期
 * @method string getEvidenceValidEndDate() 获取存证证书截止日期
 * @method void setEvidenceValidEndDate(string $EvidenceValidEndDate) 设置存证证书截止日期
 */
class CreateCRBlockRequest extends AbstractModel
{
    /**
     * @var integer 作品ID
     */
    public $WorkId;

    /**
     * @var string 侵权链接
     */
    public $TortUrl;

    /**
     * @var string 侵权标题
     */
    public $TortTitle;

    /**
     * @var string 侵权平台
     */
    public $TortPlat;

    /**
     * @var string 拦截结果回调地址
     */
    public $BlockUrl;

    /**
     * @var string 授权书下载地址
     */
    public $FileUrl;

    /**
     * @var string 授权书生效日期
     */
    public $ValidStartDate;

    /**
     * @var string 授权书截止日期
     */
    public $ValidEndDate;

    /**
     * @var string 侵权截图
     */
    public $TortPic;

    /**
     * @var string 委托书下载地址
     */
    public $CommFileUrl;

    /**
     * @var string 委托书生效日期
     */
    public $CommValidStartDate;

    /**
     * @var string 委托书截止日期
     */
    public $CommValidEndDate;

    /**
     * @var string 是否著作权人：0-否 1-是
     */
    public $IsProducer;

    /**
     * @var string 存证证书下载地址
     */
    public $EvidenceFileUrl;

    /**
     * @var string 存证证书生效日期
     */
    public $EvidenceValidStartDate;

    /**
     * @var string 存证证书截止日期
     */
    public $EvidenceValidEndDate;

    /**
     * @param integer $WorkId 作品ID
     * @param string $TortUrl 侵权链接
     * @param string $TortTitle 侵权标题
     * @param string $TortPlat 侵权平台
     * @param string $BlockUrl 拦截结果回调地址
     * @param string $FileUrl 授权书下载地址
     * @param string $ValidStartDate 授权书生效日期
     * @param string $ValidEndDate 授权书截止日期
     * @param string $TortPic 侵权截图
     * @param string $CommFileUrl 委托书下载地址
     * @param string $CommValidStartDate 委托书生效日期
     * @param string $CommValidEndDate 委托书截止日期
     * @param string $IsProducer 是否著作权人：0-否 1-是
     * @param string $EvidenceFileUrl 存证证书下载地址
     * @param string $EvidenceValidStartDate 存证证书生效日期
     * @param string $EvidenceValidEndDate 存证证书截止日期
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
        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("TortUrl",$param) and $param["TortUrl"] !== null) {
            $this->TortUrl = $param["TortUrl"];
        }

        if (array_key_exists("TortTitle",$param) and $param["TortTitle"] !== null) {
            $this->TortTitle = $param["TortTitle"];
        }

        if (array_key_exists("TortPlat",$param) and $param["TortPlat"] !== null) {
            $this->TortPlat = $param["TortPlat"];
        }

        if (array_key_exists("BlockUrl",$param) and $param["BlockUrl"] !== null) {
            $this->BlockUrl = $param["BlockUrl"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("ValidStartDate",$param) and $param["ValidStartDate"] !== null) {
            $this->ValidStartDate = $param["ValidStartDate"];
        }

        if (array_key_exists("ValidEndDate",$param) and $param["ValidEndDate"] !== null) {
            $this->ValidEndDate = $param["ValidEndDate"];
        }

        if (array_key_exists("TortPic",$param) and $param["TortPic"] !== null) {
            $this->TortPic = $param["TortPic"];
        }

        if (array_key_exists("CommFileUrl",$param) and $param["CommFileUrl"] !== null) {
            $this->CommFileUrl = $param["CommFileUrl"];
        }

        if (array_key_exists("CommValidStartDate",$param) and $param["CommValidStartDate"] !== null) {
            $this->CommValidStartDate = $param["CommValidStartDate"];
        }

        if (array_key_exists("CommValidEndDate",$param) and $param["CommValidEndDate"] !== null) {
            $this->CommValidEndDate = $param["CommValidEndDate"];
        }

        if (array_key_exists("IsProducer",$param) and $param["IsProducer"] !== null) {
            $this->IsProducer = $param["IsProducer"];
        }

        if (array_key_exists("EvidenceFileUrl",$param) and $param["EvidenceFileUrl"] !== null) {
            $this->EvidenceFileUrl = $param["EvidenceFileUrl"];
        }

        if (array_key_exists("EvidenceValidStartDate",$param) and $param["EvidenceValidStartDate"] !== null) {
            $this->EvidenceValidStartDate = $param["EvidenceValidStartDate"];
        }

        if (array_key_exists("EvidenceValidEndDate",$param) and $param["EvidenceValidEndDate"] !== null) {
            $this->EvidenceValidEndDate = $param["EvidenceValidEndDate"];
        }
    }
}
