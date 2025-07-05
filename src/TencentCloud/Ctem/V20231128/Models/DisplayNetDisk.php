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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网盘泄露详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method string getMatchedKeywords() 获取命中关键字
 * @method void setMatchedKeywords(string $MatchedKeywords) 设置命中关键字
 * @method string getUrl() 获取泄露地址
 * @method void setUrl(string $Url) 设置泄露地址
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getPlatform() 获取泄露平台
 * @method void setPlatform(string $Platform) 设置泄露平台
 */
class DisplayNetDisk extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var string 命中关键字
     */
    public $MatchedKeywords;

    /**
     * @var string 泄露地址
     */
    public $Url;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string 泄露平台
     */
    public $Platform;

    /**
     * @param integer $Id 主键ID
     * @param string $Content 内容
     * @param string $MatchedKeywords 命中关键字
     * @param string $Url 泄露地址
     * @param string $Status 状态
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Platform 泄露平台
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("MatchedKeywords",$param) and $param["MatchedKeywords"] !== null) {
            $this->MatchedKeywords = $param["MatchedKeywords"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
