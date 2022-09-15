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
 * CreateCRRight请求参数结构体
 *
 * @method integer getWorkId() 获取已存证的作品ID
 * @method void setWorkId(integer $WorkId) 设置已存证的作品ID
 * @method string getTortUrl() 获取侵权链接
 * @method void setTortUrl(string $TortUrl) 设置侵权链接
 * @method string getTortTitle() 获取侵权标题
 * @method void setTortTitle(string $TortTitle) 设置侵权标题
 * @method string getTortPlat() 获取侵权平台
 * @method void setTortPlat(string $TortPlat) 设置侵权平台
 * @method string getRightUrl() 获取发函结果回调地址
 * @method void setRightUrl(string $RightUrl) 设置发函结果回调地址
 * @method string getFileUrl() 获取x
 * @method void setFileUrl(string $FileUrl) 设置x
 * @method string getValidStartDate() 获取x
 * @method void setValidStartDate(string $ValidStartDate) 设置x
 * @method string getValidEndDate() 获取x
 * @method void setValidEndDate(string $ValidEndDate) 设置x
 * @method string getCommFileUrl() 获取x
 * @method void setCommFileUrl(string $CommFileUrl) 设置x
 * @method string getCommValidStartDate() 获取x
 * @method void setCommValidStartDate(string $CommValidStartDate) 设置x
 * @method string getCommValidEndDate() 获取x
 * @method void setCommValidEndDate(string $CommValidEndDate) 设置x
 * @method string getHomeFileUrl() 获取x
 * @method void setHomeFileUrl(string $HomeFileUrl) 设置x
 * @method string getHomeValidStartDate() 获取x
 * @method void setHomeValidStartDate(string $HomeValidStartDate) 设置x
 * @method string getHomeValidEndDate() 获取x
 * @method void setHomeValidEndDate(string $HomeValidEndDate) 设置x
 * @method string getIsProducer() 获取x
 * @method void setIsProducer(string $IsProducer) 设置x
 */
class CreateCRRightRequest extends AbstractModel
{
    /**
     * @var integer 已存证的作品ID
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
     * @var string 发函结果回调地址
     */
    public $RightUrl;

    /**
     * @var string x
     */
    public $FileUrl;

    /**
     * @var string x
     */
    public $ValidStartDate;

    /**
     * @var string x
     */
    public $ValidEndDate;

    /**
     * @var string x
     */
    public $CommFileUrl;

    /**
     * @var string x
     */
    public $CommValidStartDate;

    /**
     * @var string x
     */
    public $CommValidEndDate;

    /**
     * @var string x
     */
    public $HomeFileUrl;

    /**
     * @var string x
     */
    public $HomeValidStartDate;

    /**
     * @var string x
     */
    public $HomeValidEndDate;

    /**
     * @var string x
     */
    public $IsProducer;

    /**
     * @param integer $WorkId 已存证的作品ID
     * @param string $TortUrl 侵权链接
     * @param string $TortTitle 侵权标题
     * @param string $TortPlat 侵权平台
     * @param string $RightUrl 发函结果回调地址
     * @param string $FileUrl x
     * @param string $ValidStartDate x
     * @param string $ValidEndDate x
     * @param string $CommFileUrl x
     * @param string $CommValidStartDate x
     * @param string $CommValidEndDate x
     * @param string $HomeFileUrl x
     * @param string $HomeValidStartDate x
     * @param string $HomeValidEndDate x
     * @param string $IsProducer x
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

        if (array_key_exists("RightUrl",$param) and $param["RightUrl"] !== null) {
            $this->RightUrl = $param["RightUrl"];
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

        if (array_key_exists("CommFileUrl",$param) and $param["CommFileUrl"] !== null) {
            $this->CommFileUrl = $param["CommFileUrl"];
        }

        if (array_key_exists("CommValidStartDate",$param) and $param["CommValidStartDate"] !== null) {
            $this->CommValidStartDate = $param["CommValidStartDate"];
        }

        if (array_key_exists("CommValidEndDate",$param) and $param["CommValidEndDate"] !== null) {
            $this->CommValidEndDate = $param["CommValidEndDate"];
        }

        if (array_key_exists("HomeFileUrl",$param) and $param["HomeFileUrl"] !== null) {
            $this->HomeFileUrl = $param["HomeFileUrl"];
        }

        if (array_key_exists("HomeValidStartDate",$param) and $param["HomeValidStartDate"] !== null) {
            $this->HomeValidStartDate = $param["HomeValidStartDate"];
        }

        if (array_key_exists("HomeValidEndDate",$param) and $param["HomeValidEndDate"] !== null) {
            $this->HomeValidEndDate = $param["HomeValidEndDate"];
        }

        if (array_key_exists("IsProducer",$param) and $param["IsProducer"] !== null) {
            $this->IsProducer = $param["IsProducer"];
        }
    }
}
