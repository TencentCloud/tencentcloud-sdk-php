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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageToObject返回参数结构体
 *
 * @method Template getTemplate() 获取报告结构化结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplate(Template $Template) 设置报告结构化结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTextTypeList() 获取多级分类结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextTypeList(array $TextTypeList) 设置多级分类结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ImageToObjectResponse extends AbstractModel
{
    /**
     * @var Template 报告结构化结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Template;

    /**
     * @var array 多级分类结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextTypeList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Template $Template 报告结构化结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TextTypeList 多级分类结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new Template();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("TextTypeList",$param) and $param["TextTypeList"] !== null) {
            $this->TextTypeList = [];
            foreach ($param["TextTypeList"] as $key => $value){
                $obj = new TextType();
                $obj->deserialize($value);
                array_push($this->TextTypeList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
