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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KTV歌手分类信息
 *
 * @method string getChineseName() 获取分类中文名
 * @method void setChineseName(string $ChineseName) 设置分类中文名
 * @method string getEnglishName() 获取分类英文名
 * @method void setEnglishName(string $EnglishName) 设置分类英文名
 */
class KTVSingerCategoryInfo extends AbstractModel
{
    /**
     * @var string 分类中文名
     */
    public $ChineseName;

    /**
     * @var string 分类英文名
     */
    public $EnglishName;

    /**
     * @param string $ChineseName 分类中文名
     * @param string $EnglishName 分类英文名
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
        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }
    }
}
