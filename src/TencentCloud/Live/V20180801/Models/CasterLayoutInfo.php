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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台布局参数。
 *
 * @method integer getLayoutIndex() 获取<p>布局Index。</p>取值范围：[1, 1000]
 * @method void setLayoutIndex(integer $LayoutIndex) 设置<p>布局Index。</p>取值范围：[1, 1000]
 * @method integer getLayoutTemplateId() 获取<p>布局模板Id。有效值[1，20，21，31，32，41]当使用布局模板时，无需LayoutParams参数，导播台将使用模板布局参数。</p>
 * @method void setLayoutTemplateId(integer $LayoutTemplateId) 设置<p>布局模板Id。有效值[1，20，21，31，32，41]当使用布局模板时，无需LayoutParams参数，导播台将使用模板布局参数。</p>
 * @method string getInputIndexList() 获取<p>布局绑定的输入列表。按布局LayerId从小到大，按顺序排列。已有两个画面的布局为例，输入1对应LayerId为1，输入2对应的LayerId为2，该字段应该填入"1|2"。</p>
 * @method void setInputIndexList(string $InputIndexList) 设置<p>布局绑定的输入列表。按布局LayerId从小到大，按顺序排列。已有两个画面的布局为例，输入1对应LayerId为1，输入2对应的LayerId为2，该字段应该填入"1|2"。</p>
 * @method array getLayoutParams() 获取<p>详细的布局参数列表。</p>
 * @method void setLayoutParams(array $LayoutParams) 设置<p>详细的布局参数列表。</p>
 * @method integer getLayoutWidth() 获取<p>布局输出的宽度，单位为像素。默认为1280像素。注：该值仅在画中画布局，且未设置PgmWidth时生效。</p>
 * @method void setLayoutWidth(integer $LayoutWidth) 设置<p>布局输出的宽度，单位为像素。默认为1280像素。注：该值仅在画中画布局，且未设置PgmWidth时生效。</p>
 * @method integer getLayoutHeight() 获取<p>布局输出的高度，单位为像素。注：该参数仅在画中画布局，且未设置PgmHeight时生效。</p>
 * @method void setLayoutHeight(integer $LayoutHeight) 设置<p>布局输出的高度，单位为像素。注：该参数仅在画中画布局，且未设置PgmHeight时生效。</p>
 */
class CasterLayoutInfo extends AbstractModel
{
    /**
     * @var integer <p>布局Index。</p>取值范围：[1, 1000]
     */
    public $LayoutIndex;

    /**
     * @var integer <p>布局模板Id。有效值[1，20，21，31，32，41]当使用布局模板时，无需LayoutParams参数，导播台将使用模板布局参数。</p>
     */
    public $LayoutTemplateId;

    /**
     * @var string <p>布局绑定的输入列表。按布局LayerId从小到大，按顺序排列。已有两个画面的布局为例，输入1对应LayerId为1，输入2对应的LayerId为2，该字段应该填入"1|2"。</p>
     */
    public $InputIndexList;

    /**
     * @var array <p>详细的布局参数列表。</p>
     */
    public $LayoutParams;

    /**
     * @var integer <p>布局输出的宽度，单位为像素。默认为1280像素。注：该值仅在画中画布局，且未设置PgmWidth时生效。</p>
     */
    public $LayoutWidth;

    /**
     * @var integer <p>布局输出的高度，单位为像素。注：该参数仅在画中画布局，且未设置PgmHeight时生效。</p>
     */
    public $LayoutHeight;

    /**
     * @param integer $LayoutIndex <p>布局Index。</p>取值范围：[1, 1000]
     * @param integer $LayoutTemplateId <p>布局模板Id。有效值[1，20，21，31，32，41]当使用布局模板时，无需LayoutParams参数，导播台将使用模板布局参数。</p>
     * @param string $InputIndexList <p>布局绑定的输入列表。按布局LayerId从小到大，按顺序排列。已有两个画面的布局为例，输入1对应LayerId为1，输入2对应的LayerId为2，该字段应该填入"1|2"。</p>
     * @param array $LayoutParams <p>详细的布局参数列表。</p>
     * @param integer $LayoutWidth <p>布局输出的宽度，单位为像素。默认为1280像素。注：该值仅在画中画布局，且未设置PgmWidth时生效。</p>
     * @param integer $LayoutHeight <p>布局输出的高度，单位为像素。注：该参数仅在画中画布局，且未设置PgmHeight时生效。</p>
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
        if (array_key_exists("LayoutIndex",$param) and $param["LayoutIndex"] !== null) {
            $this->LayoutIndex = $param["LayoutIndex"];
        }

        if (array_key_exists("LayoutTemplateId",$param) and $param["LayoutTemplateId"] !== null) {
            $this->LayoutTemplateId = $param["LayoutTemplateId"];
        }

        if (array_key_exists("InputIndexList",$param) and $param["InputIndexList"] !== null) {
            $this->InputIndexList = $param["InputIndexList"];
        }

        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = [];
            foreach ($param["LayoutParams"] as $key => $value){
                $obj = new CasterLayoutParam();
                $obj->deserialize($value);
                array_push($this->LayoutParams, $obj);
            }
        }

        if (array_key_exists("LayoutWidth",$param) and $param["LayoutWidth"] !== null) {
            $this->LayoutWidth = $param["LayoutWidth"];
        }

        if (array_key_exists("LayoutHeight",$param) and $param["LayoutHeight"] !== null) {
            $this->LayoutHeight = $param["LayoutHeight"];
        }
    }
}
