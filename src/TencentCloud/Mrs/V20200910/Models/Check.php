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
 * 检查报告单
 *
 * @method Desc getDesc() 获取描述
 * @method void setDesc(Desc $Desc) 设置描述
 * @method Summary getSummary() 获取结论
 * @method void setSummary(Summary $Summary) 设置结论
 * @method array getBlockTitle() 获取检查报告块标题
 * @method void setBlockTitle(array $BlockTitle) 设置检查报告块标题
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class Check extends AbstractModel
{
    /**
     * @var Desc 描述
     */
    public $Desc;

    /**
     * @var Summary 结论
     */
    public $Summary;

    /**
     * @var array 检查报告块标题
     */
    public $BlockTitle;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param Desc $Desc 描述
     * @param Summary $Summary 结论
     * @param array $BlockTitle 检查报告块标题
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
        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = new Desc();
            $this->Desc->deserialize($param["Desc"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new Summary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("BlockTitle",$param) and $param["BlockTitle"] !== null) {
            $this->BlockTitle = [];
            foreach ($param["BlockTitle"] as $key => $value){
                $obj = new BlockTitle();
                $obj->deserialize($value);
                array_push($this->BlockTitle, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
