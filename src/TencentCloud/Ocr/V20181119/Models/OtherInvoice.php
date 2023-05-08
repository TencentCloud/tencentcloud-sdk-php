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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 其他发票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getTotal() 获取金额
 * @method void setTotal(string $Total) 设置金额
 * @method array getOtherInvoiceListItems() 获取列表
 * @method void setOtherInvoiceListItems(array $OtherInvoiceListItems) 设置列表
 * @method array getOtherInvoiceTableItems() 获取表格
 * @method void setOtherInvoiceTableItems(array $OtherInvoiceTableItems) 设置表格
 */
class OtherInvoice extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var string 金额
     */
    public $Total;

    /**
     * @var array 列表
     */
    public $OtherInvoiceListItems;

    /**
     * @var array 表格
     */
    public $OtherInvoiceTableItems;

    /**
     * @param string $Title 发票名称
     * @param string $Total 金额
     * @param array $OtherInvoiceListItems 列表
     * @param array $OtherInvoiceTableItems 表格
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

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("OtherInvoiceListItems",$param) and $param["OtherInvoiceListItems"] !== null) {
            $this->OtherInvoiceListItems = [];
            foreach ($param["OtherInvoiceListItems"] as $key => $value){
                $obj = new OtherInvoiceItem();
                $obj->deserialize($value);
                array_push($this->OtherInvoiceListItems, $obj);
            }
        }

        if (array_key_exists("OtherInvoiceTableItems",$param) and $param["OtherInvoiceTableItems"] !== null) {
            $this->OtherInvoiceTableItems = [];
            foreach ($param["OtherInvoiceTableItems"] as $key => $value){
                $obj = new OtherInvoiceList();
                $obj->deserialize($value);
                array_push($this->OtherInvoiceTableItems, $obj);
            }
        }
    }
}
