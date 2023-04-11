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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PPT错误页面列表
 *
 * @method string getPage() 获取异常元素存在的页面，由页面类型+页码组成，页码类型包括：幻灯片、幻灯片母版、幻灯片布局等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPage(string $Page) 设置异常元素存在的页面，由页面类型+页码组成，页码类型包括：幻灯片、幻灯片母版、幻灯片布局等
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrs() 获取错误元素列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrs(array $Errs) 设置错误元素列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class PPTErrSlide extends AbstractModel
{
    /**
     * @var string 异常元素存在的页面，由页面类型+页码组成，页码类型包括：幻灯片、幻灯片母版、幻灯片布局等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Page;

    /**
     * @var array 错误元素列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errs;

    /**
     * @param string $Page 异常元素存在的页面，由页面类型+页码组成，页码类型包括：幻灯片、幻灯片母版、幻灯片布局等
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Errs 错误元素列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Errs",$param) and $param["Errs"] !== null) {
            $this->Errs = [];
            foreach ($param["Errs"] as $key => $value){
                $obj = new PPTErr();
                $obj->deserialize($value);
                array_push($this->Errs, $obj);
            }
        }
    }
}
