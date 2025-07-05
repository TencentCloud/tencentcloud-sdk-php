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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 核酸报告结论
 *
 * @method array getCovidItems() 获取核酸报告结论
 * @method void setCovidItems(array $CovidItems) 设置核酸报告结论
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class CovidItemsInfo extends AbstractModel
{
    /**
     * @var array 核酸报告结论
     */
    public $CovidItems;

    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param array $CovidItems 核酸报告结论
     * @param string $Version 版本号
     * @param integer $Page 数据在原PDF文件中的第几页
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
        if (array_key_exists("CovidItems",$param) and $param["CovidItems"] !== null) {
            $this->CovidItems = [];
            foreach ($param["CovidItems"] as $key => $value){
                $obj = new CovidItem();
                $obj->deserialize($value);
                array_push($this->CovidItems, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
