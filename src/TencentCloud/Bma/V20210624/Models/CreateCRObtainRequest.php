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
 * CreateCRObtain请求参数结构体
 *
 * @method integer getWorkId() 获取已存证的作品ID
 * @method void setWorkId(integer $WorkId) 设置已存证的作品ID
 * @method string getTortUrl() 获取侵权链接
 * @method void setTortUrl(string $TortUrl) 设置侵权链接
 * @method integer getObtainType() 获取取证类型 1-网页取证 2-过程取证
 * @method void setObtainType(integer $ObtainType) 设置取证类型 1-网页取证 2-过程取证
 * @method string getWorkTitle() 获取侵权标题
 * @method void setWorkTitle(string $WorkTitle) 设置侵权标题
 * @method string getTortPlat() 获取侵权平台
 * @method void setTortPlat(string $TortPlat) 设置侵权平台
 * @method integer getObtainDuration() 获取过程取证的取证时长 6-300分钟
 * @method void setObtainDuration(integer $ObtainDuration) 设置过程取证的取证时长 6-300分钟
 * @method string getObtainUrl() 获取取证回调地址
 * @method void setObtainUrl(string $ObtainUrl) 设置取证回调地址
 * @method string getWorkCategory() 获取xxx
 * @method void setWorkCategory(string $WorkCategory) 设置xxx
 * @method string getWorkType() 获取xxx
 * @method void setWorkType(string $WorkType) 设置xxx
 */
class CreateCRObtainRequest extends AbstractModel
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
     * @var integer 取证类型 1-网页取证 2-过程取证
     */
    public $ObtainType;

    /**
     * @var string 侵权标题
     */
    public $WorkTitle;

    /**
     * @var string 侵权平台
     */
    public $TortPlat;

    /**
     * @var integer 过程取证的取证时长 6-300分钟
     */
    public $ObtainDuration;

    /**
     * @var string 取证回调地址
     */
    public $ObtainUrl;

    /**
     * @var string xxx
     */
    public $WorkCategory;

    /**
     * @var string xxx
     */
    public $WorkType;

    /**
     * @param integer $WorkId 已存证的作品ID
     * @param string $TortUrl 侵权链接
     * @param integer $ObtainType 取证类型 1-网页取证 2-过程取证
     * @param string $WorkTitle 侵权标题
     * @param string $TortPlat 侵权平台
     * @param integer $ObtainDuration 过程取证的取证时长 6-300分钟
     * @param string $ObtainUrl 取证回调地址
     * @param string $WorkCategory xxx
     * @param string $WorkType xxx
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

        if (array_key_exists("ObtainType",$param) and $param["ObtainType"] !== null) {
            $this->ObtainType = $param["ObtainType"];
        }

        if (array_key_exists("WorkTitle",$param) and $param["WorkTitle"] !== null) {
            $this->WorkTitle = $param["WorkTitle"];
        }

        if (array_key_exists("TortPlat",$param) and $param["TortPlat"] !== null) {
            $this->TortPlat = $param["TortPlat"];
        }

        if (array_key_exists("ObtainDuration",$param) and $param["ObtainDuration"] !== null) {
            $this->ObtainDuration = $param["ObtainDuration"];
        }

        if (array_key_exists("ObtainUrl",$param) and $param["ObtainUrl"] !== null) {
            $this->ObtainUrl = $param["ObtainUrl"];
        }

        if (array_key_exists("WorkCategory",$param) and $param["WorkCategory"] !== null) {
            $this->WorkCategory = $param["WorkCategory"];
        }

        if (array_key_exists("WorkType",$param) and $param["WorkType"] !== null) {
            $this->WorkType = $param["WorkType"];
        }
    }
}
