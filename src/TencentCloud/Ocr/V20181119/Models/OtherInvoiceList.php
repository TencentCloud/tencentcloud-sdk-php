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
 * 其他票Table
 *
 * @method array getOtherInvoiceItemList() 获取列表
 * @method void setOtherInvoiceItemList(array $OtherInvoiceItemList) 设置列表
 */
class OtherInvoiceList extends AbstractModel
{
    /**
     * @var array 列表
     */
    public $OtherInvoiceItemList;

    /**
     * @param array $OtherInvoiceItemList 列表
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
        if (array_key_exists("OtherInvoiceItemList",$param) and $param["OtherInvoiceItemList"] !== null) {
            $this->OtherInvoiceItemList = [];
            foreach ($param["OtherInvoiceItemList"] as $key => $value){
                $obj = new OtherInvoiceItem();
                $obj->deserialize($value);
                array_push($this->OtherInvoiceItemList, $obj);
            }
        }
    }
}
