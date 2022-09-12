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
 * 医疗发票识别结果
 *
 * @method array getMedicalInvoiceItems() 获取医疗发票识别结果条目
 * @method void setMedicalInvoiceItems(array $MedicalInvoiceItems) 设置医疗发票识别结果条目
 */
class MedicalInvoiceInfo extends AbstractModel
{
    /**
     * @var array 医疗发票识别结果条目
     */
    public $MedicalInvoiceItems;

    /**
     * @param array $MedicalInvoiceItems 医疗发票识别结果条目
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
        if (array_key_exists("MedicalInvoiceItems",$param) and $param["MedicalInvoiceItems"] !== null) {
            $this->MedicalInvoiceItems = [];
            foreach ($param["MedicalInvoiceItems"] as $key => $value){
                $obj = new MedicalInvoiceItem();
                $obj->deserialize($value);
                array_push($this->MedicalInvoiceItems, $obj);
            }
        }
    }
}
