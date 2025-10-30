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
 * 海关缴款书
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method array getContent() 获取识别出的字段名称(关键字)，支持以下字段： 税号 、纳税人识别号 、纳税人名称 、金额合计大写 、金额合计小写 、填发日期 、税务机关 、填票人。 示例值：纳税人识别号
 * @method void setContent(array $Content) 设置识别出的字段名称(关键字)，支持以下字段： 税号 、纳税人识别号 、纳税人名称 、金额合计大写 、金额合计小写 、填发日期 、税务机关 、填票人。 示例值：纳税人识别号
 * @method array getCommonContent() 获取海关缴款书常用字段
 * @method void setCommonContent(array $CommonContent) 设置海关缴款书常用字段
 */
class CustomsPaymentReceipt extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var array 识别出的字段名称(关键字)，支持以下字段： 税号 、纳税人识别号 、纳税人名称 、金额合计大写 、金额合计小写 、填发日期 、税务机关 、填票人。 示例值：纳税人识别号
     */
    public $Content;

    /**
     * @var array 海关缴款书常用字段
     */
    public $CommonContent;

    /**
     * @param string $Title 发票名称
     * @param array $Content 识别出的字段名称(关键字)，支持以下字段： 税号 、纳税人识别号 、纳税人名称 、金额合计大写 、金额合计小写 、填发日期 、税务机关 、填票人。 示例值：纳税人识别号
     * @param array $CommonContent 海关缴款书常用字段
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

        if (array_key_exists("CommonContent",$param) and $param["CommonContent"] !== null) {
            $this->CommonContent = [];
            foreach ($param["CommonContent"] as $key => $value){
                $obj = new OtherInvoiceItem();
                $obj->deserialize($value);
                array_push($this->CommonContent, $obj);
            }
        }
    }
}
