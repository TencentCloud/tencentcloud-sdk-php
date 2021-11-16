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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSmsTemplateList请求参数结构体
 *
 * @method integer getInternational() 获取是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method void setInternational(integer $International) 设置是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method array getTemplateIdSet() 获取模板 ID 数组。数组为空时默认查询模板列表信息（仅允许主账号使用），请使用 Limit 和 Offset 字段设置查询范围。
<dx-alert infotype="notice" title="注意">默认数组长度最大100</dx-alert>
 * @method void setTemplateIdSet(array $TemplateIdSet) 设置模板 ID 数组。数组为空时默认查询模板列表信息（仅允许主账号使用），请使用 Limit 和 Offset 字段设置查询范围。
<dx-alert infotype="notice" title="注意">默认数组长度最大100</dx-alert>
 * @method integer getLimit() 获取最大上限，最多100。
注：默认为0，TemplateIdSet 为空时启用。
 * @method void setLimit(integer $Limit) 设置最大上限，最多100。
注：默认为0，TemplateIdSet 为空时启用。
 * @method integer getOffset() 获取偏移量。
注：默认为0，TemplateIdSet 为空时启用。
 * @method void setOffset(integer $Offset) 设置偏移量。
注：默认为0，TemplateIdSet 为空时启用。
 */
class DescribeSmsTemplateListRequest extends AbstractModel
{
    /**
     * @var integer 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     */
    public $International;

    /**
     * @var array 模板 ID 数组。数组为空时默认查询模板列表信息（仅允许主账号使用），请使用 Limit 和 Offset 字段设置查询范围。
<dx-alert infotype="notice" title="注意">默认数组长度最大100</dx-alert>
     */
    public $TemplateIdSet;

    /**
     * @var integer 最大上限，最多100。
注：默认为0，TemplateIdSet 为空时启用。
     */
    public $Limit;

    /**
     * @var integer 偏移量。
注：默认为0，TemplateIdSet 为空时启用。
     */
    public $Offset;

    /**
     * @param integer $International 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     * @param array $TemplateIdSet 模板 ID 数组。数组为空时默认查询模板列表信息（仅允许主账号使用），请使用 Limit 和 Offset 字段设置查询范围。
<dx-alert infotype="notice" title="注意">默认数组长度最大100</dx-alert>
     * @param integer $Limit 最大上限，最多100。
注：默认为0，TemplateIdSet 为空时启用。
     * @param integer $Offset 偏移量。
注：默认为0，TemplateIdSet 为空时启用。
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
        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("TemplateIdSet",$param) and $param["TemplateIdSet"] !== null) {
            $this->TemplateIdSet = $param["TemplateIdSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
