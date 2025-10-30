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
 * 孕产报告
 *
 * @method MaternityDesc getDesc() 获取描述部分
 * @method void setDesc(MaternityDesc $Desc) 设置描述部分
 * @method MaternitySummary getSummary() 获取结论部分
 * @method void setSummary(MaternitySummary $Summary) 设置结论部分
 * @method string getOcrText() 获取报告原文
 * @method void setOcrText(string $OcrText) 设置报告原文
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class Maternity extends AbstractModel
{
    /**
     * @var MaternityDesc 描述部分
     */
    public $Desc;

    /**
     * @var MaternitySummary 结论部分
     */
    public $Summary;

    /**
     * @var string 报告原文
     */
    public $OcrText;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param MaternityDesc $Desc 描述部分
     * @param MaternitySummary $Summary 结论部分
     * @param string $OcrText 报告原文
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
            $this->Desc = new MaternityDesc();
            $this->Desc->deserialize($param["Desc"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new MaternitySummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("OcrText",$param) and $param["OcrText"] !== null) {
            $this->OcrText = $param["OcrText"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
