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
 * 直播审核标签分组信息
 *
 * @method string getTagType() 获取<p>标签类型。<br>可取值：TagImage，TagText，TagAudio。</p>
 * @method void setTagType(string $TagType) 设置<p>标签类型。<br>可取值：TagImage，TagText，TagAudio。</p>
 * @method array getGroupClassList() 获取<p>标签组分类列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupClassList(array $GroupClassList) 设置<p>标签组分类列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditGroupInfo extends AbstractModel
{
    /**
     * @var string <p>标签类型。<br>可取值：TagImage，TagText，TagAudio。</p>
     */
    public $TagType;

    /**
     * @var array <p>标签组分类列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupClassList;

    /**
     * @param string $TagType <p>标签类型。<br>可取值：TagImage，TagText，TagAudio。</p>
     * @param array $GroupClassList <p>标签组分类列表。</p>
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
        if (array_key_exists("TagType",$param) and $param["TagType"] !== null) {
            $this->TagType = $param["TagType"];
        }

        if (array_key_exists("GroupClassList",$param) and $param["GroupClassList"] !== null) {
            $this->GroupClassList = [];
            foreach ($param["GroupClassList"] as $key => $value){
                $obj = new AuditGroupClassInfo();
                $obj->deserialize($value);
                array_push($this->GroupClassList, $obj);
            }
        }
    }
}
