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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 海外发票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method array getContent() 获取识别出的字段名称(关键字)
 * @method void setContent(array $Content) 设置识别出的字段名称(关键字)
 */
class OverseasInvoice extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var array 识别出的字段名称(关键字)
     */
    public $Content;

    /**
     * @param string $Title 发票名称
     * @param array $Content 识别出的字段名称(关键字)
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new OtherInvoiceItem();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }
    }
}
