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
 * session定义
 *
 * @method string getCategory() 获取匹配类型
 * @method void setCategory(string $Category) 设置匹配类型
 * @method string getKeyOrStartMat() 获取起始模式
 * @method void setKeyOrStartMat(string $KeyOrStartMat) 设置起始模式
 * @method string getEndMat() 获取结束模式
 * @method void setEndMat(string $EndMat) 设置结束模式
 * @method string getStartOffset() 获取起始偏移
 * @method void setStartOffset(string $StartOffset) 设置起始偏移
 * @method string getEndOffset() 获取结束偏移
 * @method void setEndOffset(string $EndOffset) 设置结束偏移
 * @method string getSource() 获取数据源
 * @method void setSource(string $Source) 设置数据源
 * @method string getTsVersion() 获取更新时间戳
 * @method void setTsVersion(string $TsVersion) 设置更新时间戳
 */
class SessionItem extends AbstractModel
{
    /**
     * @var string 匹配类型
     */
    public $Category;

    /**
     * @var string 起始模式
     */
    public $KeyOrStartMat;

    /**
     * @var string 结束模式
     */
    public $EndMat;

    /**
     * @var string 起始偏移
     */
    public $StartOffset;

    /**
     * @var string 结束偏移
     */
    public $EndOffset;

    /**
     * @var string 数据源
     */
    public $Source;

    /**
     * @var string 更新时间戳
     */
    public $TsVersion;

    /**
     * @param string $Category 匹配类型
     * @param string $KeyOrStartMat 起始模式
     * @param string $EndMat 结束模式
     * @param string $StartOffset 起始偏移
     * @param string $EndOffset 结束偏移
     * @param string $Source 数据源
     * @param string $TsVersion 更新时间戳
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }
    }
}
