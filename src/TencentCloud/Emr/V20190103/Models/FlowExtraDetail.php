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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流程额外信息
 *
 * @method string getTitle() 获取额外信息Title
 * @method void setTitle(string $Title) 设置额外信息Title
 * @method array getDetail() 获取额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(array $Detail) 设置额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowExtraDetail extends AbstractModel
{
    /**
     * @var string 额外信息Title
     */
    public $Title;

    /**
     * @var array 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @param string $Title 额外信息Title
     * @param array $Detail 额外信息
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new FlowParamsDesc();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
