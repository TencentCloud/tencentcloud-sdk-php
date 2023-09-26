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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpsertSession请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getSource() 获取session来源位置
 * @method void setSource(string $Source) 设置session来源位置
 * @method string getCategory() 获取提取类别
 * @method void setCategory(string $Category) 设置提取类别
 * @method string getKeyOrStartMat() 获取提取key或者起始匹配模式
 * @method void setKeyOrStartMat(string $KeyOrStartMat) 设置提取key或者起始匹配模式
 * @method string getEndMat() 获取结束匹配模式
 * @method void setEndMat(string $EndMat) 设置结束匹配模式
 * @method string getStartOffset() 获取起始偏移位置
 * @method void setStartOffset(string $StartOffset) 设置起始偏移位置
 * @method string getEndOffset() 获取结束偏移位置
 * @method void setEndOffset(string $EndOffset) 设置结束偏移位置
 * @method string getEdition() 获取版本
 * @method void setEdition(string $Edition) 设置版本
 * @method string getSessionName() 获取Session名
 * @method void setSessionName(string $SessionName) 设置Session名
 * @method integer getSessionID() 获取Session对应ID
 * @method void setSessionID(integer $SessionID) 设置Session对应ID
 */
class UpsertSessionRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string session来源位置
     */
    public $Source;

    /**
     * @var string 提取类别
     */
    public $Category;

    /**
     * @var string 提取key或者起始匹配模式
     */
    public $KeyOrStartMat;

    /**
     * @var string 结束匹配模式
     */
    public $EndMat;

    /**
     * @var string 起始偏移位置
     */
    public $StartOffset;

    /**
     * @var string 结束偏移位置
     */
    public $EndOffset;

    /**
     * @var string 版本
     */
    public $Edition;

    /**
     * @var string Session名
     */
    public $SessionName;

    /**
     * @var integer Session对应ID
     */
    public $SessionID;

    /**
     * @param string $Domain 域名
     * @param string $Source session来源位置
     * @param string $Category 提取类别
     * @param string $KeyOrStartMat 提取key或者起始匹配模式
     * @param string $EndMat 结束匹配模式
     * @param string $StartOffset 起始偏移位置
     * @param string $EndOffset 结束偏移位置
     * @param string $Edition 版本
     * @param string $SessionName Session名
     * @param integer $SessionID Session对应ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("KeyOrStartMat",$param) and $param["KeyOrStartMat"] !== null) {
            $this->KeyOrStartMat = $param["KeyOrStartMat"];
        }

        if (array_key_exists("EndMat",$param) and $param["EndMat"] !== null) {
            $this->EndMat = $param["EndMat"];
        }

        if (array_key_exists("StartOffset",$param) and $param["StartOffset"] !== null) {
            $this->StartOffset = $param["StartOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }
    }
}
