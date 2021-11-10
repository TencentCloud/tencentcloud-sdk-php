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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 百科词条信息
 *
 * @method string getLemmaTitle() 获取词条
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLemmaTitle(string $LemmaTitle) 设置词条
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLemmaAbstract() 获取词条描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLemmaAbstract(string $LemmaAbstract) 设置词条描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTag() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(string $Tag) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class LemmaInfo extends AbstractModel
{
    /**
     * @var string 词条
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LemmaTitle;

    /**
     * @var string 词条描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LemmaAbstract;

    /**
     * @var string 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @param string $LemmaTitle 词条
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LemmaAbstract 词条描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tag 标签
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
        if (array_key_exists("LemmaTitle",$param) and $param["LemmaTitle"] !== null) {
            $this->LemmaTitle = $param["LemmaTitle"];
        }

        if (array_key_exists("LemmaAbstract",$param) and $param["LemmaAbstract"] !== null) {
            $this->LemmaAbstract = $param["LemmaAbstract"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
